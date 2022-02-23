<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function create()
    {
        return view('/');
    }

    public function addMovie(Request $request){
        // DB::table('movies')->insert([
        //     'imdbID' => $request->imdbID,
        //     'title'=>$request->Title,
        //     'year'=>$request->Year,
        //     'year_released'=>$request->Released,
        //     'poster'=>$request->Poster,
        //     'plot'=>$request->Plot,
        // ]);

        $movie = new Movie();
        $movie->imdbID = $request->imdbID;
        $movie->title = $request->Title;
        $movie->year = $request->Year;
        $movie->year_released = $request->Released;
        $movie->poster = $request->Poster;
        $movie->plot = $request->Plot;
        $movie->save();
        return $user;
    }

}
