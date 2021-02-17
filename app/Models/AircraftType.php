<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AircraftType extends Model
{
    public $table = "aircraft_types";

    protected $fillable = [
        'aircraft_name',
        'iata_code',
    ];

    protected $guarded = [
        'created_at',
        'updated_at'
    ];
    
    protected $casts = [
        'aircraft_name' => 'string',
        'iata_code'     => 'string',
    ];

	public function validate(\App\Model\AirCraftType $aircraft_type) {
		$messageBag = new \Illuminate\Support\MessageBag;

		$values = [
            'aircraft_name' => $this->aircraft_name,
            'iata_code'     => $this->$iata_code,
		];

		// validate fillable attributes
		$messages['filled'] = ':attribute is a required field';
		$rules['aircraft_name'][] = 'filled';
		$rules['iata_code'][] = 'filled';

		$validate = \Validator::make($values, $rules, $messages);

		$messageBag->merge($validate->messages()->toArray());

		return $messageBag;
	}
}
