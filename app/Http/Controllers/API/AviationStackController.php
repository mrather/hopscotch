<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use GuzzleHttp;

use App\Http\Controllers\Controller;

class AviationStackController extends Controller
{
    public function index()
    {

    }   
    
    public function show()
    {

    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function import(Request $request)
    {
        set_time_limit(1200);
//https://www.icao.int/safety/iStars/Pages/Location-Indicators.aspx Look here for airport safety statistics
        $offset = 0;
        if(!empty($request['offset'])){
            $offset = $request['offset'];
        }
        $this->call($request['endpoint'], $offset);
    }

    private function insertData($endpoint, $data){

        $aviation_stack_map = [
            'taxes'          => 'AviationTax',
            'aircraft_types' => 'AircraftTypes',
            'airlines'       => 'Airline',
            'airplanes'      => 'Airplane',
            'airports'       => 'Airport',
            'cities'         => 'City',
            'countries'      => 'Country',
            'flights'        => 'Flights',
            'routes'         => 'Route'
        ];

        foreach($data as $d) {

            $model_object = 'App\Models\\' . $aviation_stack_map[$endpoint];

            $model = new $model_object();

            try{
                $fillable = get_object_vars($d);
                if($endpoint == 'routes'){
                    $fillable = [
                        'departure' => json_encode($d->departure),
                        'arrival'   => json_encode($d->arrival),
                        'airline'   => json_encode($d->airline),
                        'flight'    => json_encode($d->flight)
                    ];
                }

                if($endpoint == 'flights'){
                    $fillable = [
                        'flight_date' => json_encode($d->flight_date),
                        'flight_status' => json_encode($d->flight_status),
                        'departure' => json_encode($d->departure),
                        'arrival'   => json_encode($d->arrival),
                        'airline'   => json_encode($d->airline),
                        'flight'    => json_encode($d->flight),
                        'aircraft'  => json_encode($d->aircraft),
                        'live'      => json_encode($d->live)
                    ];
                }
                $model->fill($fillable);
                $model->save();
                echo '<br />Saved model data'.json_encode($d);

            }catch(Exception $e){
                echo '<br />Could not save model data'.json_encode($d);
            }
            $model = null;
        }
    }

    private function processResponse($endpoint, $offset, $dataType, $body)
    {
        if($dataType == 'application/json'){
            $content = json_decode($body);
            $pagination = $content->pagination;

            if($pagination->total > 0){
                $counter = ceil($pagination->total/100);
            }
            $this->insertData($endpoint, $content->data);
            if($offset != ($counter *100))
            {
                echo "Should call {$endpoint}, offset {$offset} <br />";
               $this->call($endpoint, $offset);
            }
        }
    }

    private function call($endpoint, $offset=0, $limit=100){
        $params = [
            'access_key' => env('AVIATIONSTACK_KEY', ''),
            'offset' => $offset,
            'limit' => $limit
        ];
        $terminus = '?'. http_build_query($params);
        $url = env('AVIATIONSTACK_URL', '');
        $ver = env('AVIATIONSTACK_VERSION', '').'/';
        $offset = $offset + $limit;

        try{
            $guzzle = new GuzzleHttp\Client();

            $res = $guzzle->request('GET', $url.$ver.$endpoint.$terminus);

            if($res->getStatusCode() == 200){
                $dataType =$res->getHeader('content-type')[0];

                $this->processResponse($endpoint, $offset, $dataType, $res->getBody());
            }
        }catch(EXCEPTION $e){
            echo $e->getMessage();
        }
    }
}
