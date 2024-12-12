<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Album;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function albums()
    {
        return $this->belongsToMany(Album::class, 'album_genre');
    }


    
    
}