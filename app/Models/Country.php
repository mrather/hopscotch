<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'country_name',
        'country_iso2',
        'country_iso3',
        'country_iso_numeric',
        'population',
        'capital',
        'continent',
        'currency_name',
        'currency_code',
        'fips_code',
        'phone_prefix'
    ];

    protected $casts = [
        'country_name' => 'string',
        'country_iso2'=> 'string',
        'country_iso3'=> 'string',
        'country_iso_numeric'=> 'integer',
        'population'=> 'integer',
        'capital'=> 'string',
        'continent'=> 'string',
        'currency_name'=> 'string',
        'currency_code'=> 'string',
        'fips_code'=> 'string',
        'phone_prefix'=> 'integer'        
    ];
}
