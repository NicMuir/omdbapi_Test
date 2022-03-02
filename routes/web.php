<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Http\Controllers\MovieController;

Auth::routes();

Route::view('/', 'auth.login');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [MovieController::class,'getAllMoviesToUser'])->middleware('auth');



Route::post('api/MovieToDB', [MovieController::class,'MovieToDB'])->middleware('auth');
Route::post('api/addMovie', [MovieController::class,'addMovie'])->middleware('auth');
Route::post('api/removeMovie', [MovieController::class,'removeMovie'])->middleware('auth');



// Route::get('/watchlist',function(){
//      $currentUser = Auth::user() ;
//      return view('watchlist',['movies'=>$currentUser->movies]);

// })->middleware('auth');








