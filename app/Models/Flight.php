<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'flight_date',
        'flight_status',
        'departure',
        'arrival',
        'airline',
        'flight',
        'aircraft',
        'live' 
    ];

    protected $casts = [
        'flight_date'=> 'string',
        'flight_status'=> 'string',
        'departure'=> 'string',
        'arrival'=> 'string',
        'airline'=> 'string',
        'flight'=> 'string',
        'aircraft'=> 'string',
        'live'=> 'string'      
    ];

    public function validate($data){

		$messageBag = new \Illuminate\Support\MessageBag;

		// validate fillable attributes
		$messages['filled'] = ':attribute is a required field';
        $rules = 
        [   
            'flight_date' => 'required|date',
            'flight_status' => 'required',
            'departure.airport' => 'required',
            'departure.timezone' => 'required|timezone',
            'departure.iata' => 'required',
            'departure.icao' => 'required',
            'departure.terminal' => 'required|alpha',
            'departure.gate' => 'required|alpha_num',
            'departure.delay' => 'required',
            'departure.scheduled' => 'required',
            'departure.estimated' => 'required',
            'departure.actual' => 'required',
            'departure.estimated_runway' => 'required',
            'departure.actual_runway' => 'required',
            'arrival.airport' => 'required',
            'arrival.timezone' => 'required|timezone',
            'arrival.iata' => 'required',
            'arrival.icao' => 'required',
            'arrival.terminal' => 'required|alpha',
            'arrival.gate' => 'required|alpha_num',
            'arrival.baggage' => 'required|alpha_num',
            'arrival.delay' => 'required',
            'arrival.scheduled' => 'required',
            'arrival.estimated' => 'required',
            'arrival.actual' => 'required|nullable',
            'arrival.estimated_runway' => 'required|nullable',
            'arrival.actual_runway' => 'required|nullable',
            'airline.name' => 'required',
            'airline.iata' => 'required',
            'airline.icao '=> 'required',
            'flight.number' => 'required',
            'flight.iata' => 'required',
            'flight.icao' => 'required',
            'flight.codeshared' => 'nullable|filled',
            'aircraft.registration' => 'required',
            'aircraft.iata' => 'required',
            'aircraft.icao' => 'required',
            'aircraft.icao24' => 'required',
            'live.updated' => 'required|datetime',
            'live.latitude' => 'required|numeric|between:-90.00000000,90.00000000',
            'live.longitude' => 'required|numeric|between:-180.00000000,180.00000000',
            'live.altitude' => 'required|numeric|between:500.00000000,50000.00000000',
            'live.direction' => 'required',
            'live.speed_horizontal' => 'required',
            'live.speed_vertical' => 'required',
            'live.is_ground' => 'required|boolean',           
        ];

		$validate = \Validator::make($data, $rules, $messages);

		$messageBag->merge($validate->messages()->toArray());

        return $messageBag;
        
    }
