<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    protected $fillable = [
        'registration_number',
        'production_line',
        'iata_type',
        'model_name',
        'model_code',
        'icao_code_hex',
        'iata_code_short',
        'construction_number',
        'test_registration_number',
        'rollout_date',
        'first_flight_date',
        'delivery_date',
        'registration_date',
        'line_number',
        'plane_series',
        'airline_iata_code',
        'plane_owner',
        'engines_count',
        'engines_type',
        'plane_age',
        'plane_status',
        'plane_class' 
    ];    

    protected $guarded = [
        'created_at',
        'updated_at'
    ];

 
    protected $casts = [
        'registration_number'=> 'string',
        'production_line'=> 'string',
        'iata_type'=> 'string',
        'model_name'=> 'string',
        'model_code'=> 'string',
        'icao_code_hex'=> 'string',
        'iata_code_short'=> 'string',
        'construction_number'=> 'integer',
        'test_registration_number'=> 'string',
        'rollout_date'=> 'string',
        'first_flight_date'=> 'string',
        'delivery_date'=> 'string',
        'registration_date'=> 'string',
        'line_number'=> 'integer',
        'plane_series'=> 'integer',
        'airline_iata_code'=> 'string',
        'plane_owner'=> 'string',
        'engines_count'=> 'integer',
        'engines_type'=> 'string',
        'plane_age'=> 'integer',
        'plane_status'=> 'active',
        'plane_class'=> 'string'       
    ];
}
