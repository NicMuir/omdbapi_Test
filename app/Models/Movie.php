<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = "movies";
    protected $fillable = [
        'imdbID',
        'title',
        'year',
        'year_releared',
        'poster',
        'plot',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}