<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AviationTax extends Model
{
    protected $fillable = [
        'tax_name',
        'iata_code'
    ];

    protected $guarded = [
        'created_at',
        'updated_at'
    ];
    
    protected $casts = [
        'tax_name' => 'string',
        'iata_code' => 'string'
    ];
}
