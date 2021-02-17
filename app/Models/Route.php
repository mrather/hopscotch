<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'departure',
        'arrival',
        'airline',
        'flight',
    ];

    protected $casts = [
        'departure' => 'string',
        'arrival'   => 'string',
        'airline'   => 'string',
        'flight'    => 'integer',
     ];

     public function validate(){

     }
}
