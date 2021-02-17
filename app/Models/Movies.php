<?php

namespace App;

use Exception;
use App\Facades\Billing;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;



class Movies extends Model
{

    public $table = "movies";

    protected $fillable = [
        'name',
        'description',
        'length',
        'status'
    ];


    protected $casts = [
        'name'          => 'string',
        'description'   => 'string',
        'length'        => 'float',
        'status'        => 'string',
    ];


	public function validate(\App\Model\Movie $movie) {
		$messageBag = new \Illuminate\Support\MessageBag;

		$values = [
			'name'=> $movie->name,
			'description'=> $movie->description,
			'length' => $movie->length,
			'status' => $movie->status,
		];

		// validate fillable attributes
		$messages['filled'] = ':attribute is a required field';
		$rules['name'][] = 'filled';
		$rules['description'][] = 'filled';
		$rules['length'][] = 'filled';
		$rules['status'][] = 'filled';

		$validate = \Validator::make($values, $rules, $messages);

		$messageBag->merge($validate->messages()->toArray());

		return $messageBag;
	}


}
