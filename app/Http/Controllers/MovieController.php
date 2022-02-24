<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class MovieController extends Controller
{


    public function create()
    {
        return view('/');
    }

    public function addMovie(Request $request ){
        
        
        // Movie::Create([
        //     'imdbID' => $request->imdbID,
        //     'title'=>$request->Title,
        //     'year'=>$request->Year,
        //     'year_released'=>$request->Released,
        //     'poster'=>$request->Poster,
        //     'plot'=>$request->Plot,
        // ]);


        Movie::firstOrCreate([
            'imdbID' => $request->imdbID,
            'title'=>$request->Title,
            'year'=>$request->Year,
            'year_released'=>$request->Released,
            'poster'=>$request->Poster,
            'plot'=>$request->Plot,
        ]);

        $currentUser=  Auth::user();
        $currentUser->movies()->attach(Movie::select('id')->where('imdbID', $request->imdbID)->get());
    }

}
