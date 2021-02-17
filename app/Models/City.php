<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'city_name',
        'iata_code',
        'country_iso2',
        'latitude',
        'longitude',
        'timezone',
        'gmt',
        'geoname_id'
    ];


    protected $casts = [
        'city_name'=> 'string',
        'iata_code'=> 'string',
        'country_iso2'=> 'string',
        'latitude'=> 'string',
        'longitude'=> 'string',
        'timezone'=> 'string',
        'gmt'=> 'string',
        'geoname_id'=> 'string'        
    ];
}
