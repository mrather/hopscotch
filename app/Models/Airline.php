<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $fillable = [
        'airline_name',
        'iata_code',
        'iata_prefix_accounting',
        'icao_code',
        'callsign',
        'type',
        'status',
        'fleet_size',
        'fleet_average_age',
        'date_founded',
        'hub_code',
        'country_name',
        'country_iso2'        
    ];
 
    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'airline_name'=> 'string',
        'iata_code'=> 'string',
        'iata_prefix_accounting'=> 'integer',
        'icao_code'=> 'string',
        'callsign'=> 'string',
        'type'=> 'string',
        'status'=> 'string',
        'fleet_size'=> 'integer',
        'fleet_average_age'=> 'decimal:2',
        'date_founded'=> 'integer',
        'hub_code'=> 'string',
        'country_name'=> 'string',
        'country_iso2'=> 'string'        
    ];
}
