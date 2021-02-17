<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{

    public function index(\Illuminate\Http\Request $request)
    {
        return Movie::all();
    }


    public function createMovie(\Illuminate\Http\Request $request)
    {
		$response = new \Illuminate\Http\Response();

        $properties = ['name', 'description', 'length', 'status'];

        $movie = new Movie;

        $movie->validate($request, Movie::getValidationRules());


        if(count($error) == 0){
            $response->setContent($error);
            return $response;
        }

        $status = $movie->save();
        $response->setContent($status);
        return $response;
    }

    public function updateMovie(Request $request, Movie $movie)
    {
        $movie->validate($request, Movie::getValidationRules());

		$movie->fill($request->input());

		return $movie->save();

    }

    public function displayMovie(Request $request, Movie $movie)
    {
        return $movie->delete();

    }

    public function destroyMovie(Request $request, Movie $movie)
    {
        return $movie->delete();

    }
}
