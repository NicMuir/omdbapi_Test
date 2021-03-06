<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Movie extends Model
{
    use HasFactory;

    protected $table = "movies";
    protected $fillable = [
        'imdbID',
        'title',
        'year',
        'year_releared',
        'rating',
        'poster',
        'plot',
    ];

    public function users(){
        return $this->belongsToMany(User::class,'movie_user');
    }
    
}