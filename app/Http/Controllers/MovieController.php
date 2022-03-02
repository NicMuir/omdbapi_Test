<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;


use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;



class MovieController extends Controller
{


    public function create()
    {
        return view('/');
    }


    public function MovieToDB(Request $request){
        $api = config('omdb.api_key');
        $client = new \GuzzleHttp\Client();
        
        $res = $client->request('GET',"http://www.omdbapi.com/?t={$request->Title}&apikey={$api}");
       
        
        $data = \GuzzleHttp\json_decode($res->getBody(), true);
        
        $movie = Movie::firstOrCreate([
            'imdbID' => $data['imdbID'],
        ],
        [
            'title'=>$data['Title'],
            'year'=>$data['Year'],
            'year_released'=>$data['Released'],
            'rating'=>$data['imdbRating'],
            'poster'=>$data['Poster'],
            'plot'=>$data['Plot'],
            
        ]);

       

        return $movie;
    }

    public function addMovie(Request $request){
        
        $currentUser=  Auth::user();

        $exists = $currentUser->movies->contains(Movie::where('imdbID', $request->imdbID)->first());

        if($exists === false ){
            $currentUser->movies()->attach(Movie::where('imdbID', $request->imdbID)->first());
        }
        
        return view('/home',['Movies'=>$currentUser->movies]);
    }

    public function getAllMoviesToUser()
    {
        //$currentUser = Auth::user() ;
        $currentUser = Auth::user();
        //return ($currentUser->movies);//($currentUser->movies());

        return view('/home',['Movies'=>$currentUser->movies]);
    }

    public function removeMovie(Request $request){
        $currentUser=  Auth::user();
        $currentUser->movies()->detach(Movie::where('imdbID', $request->imdbID)->first());
        return view('/home',['Movies'=>$currentUser->movies]);
    }

}
