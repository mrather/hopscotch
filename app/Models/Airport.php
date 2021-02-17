<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $fillable = [
        'airport_name',
        'iata_code',
        'icao_code',
        'latitude',
        'longitude',
        'geoname_id',
        'timezone',
        'gmt',
        'phone_number',
        'country_name',
        'country_iso2',
        'city_iata_code'
    ];

    protected $casts = [
        'airport_name'=> 'string',
        'iata_code'=> 'string',
        'icao_code'=> 'string',
        'latitude'=> 'string',
        'longitude'=> 'string',
        'geoname_id'=> 'string',
        'timezone'=> 'string',
        'gmt'=> 'string',
        'phone_number'=> 'string',
        'country_name'=> 'string',
        'country_iso2'=> 'string',
        'city_iata_code'=> 'string'        
    ];
}
