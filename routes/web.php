<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Http\Controllers\MovieController;

Auth::routes();

Route::view('/', 'auth.login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::view('/watchlist','watchlist');

Route::post('api/addMovie', [MovieController::class,'addMovie']);



// Route::get('/watchlist',function(){
//      $currentUser = Auth::user() ;
//      return view('watchlist',['movies'=>$currentUser->movies]);

// })->middleware('auth');



Route::get('watchlist', [MovieController::class,'getAllMoviesToUser']);




