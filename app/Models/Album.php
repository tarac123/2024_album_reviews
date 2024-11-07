<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model


{   

    public function getRouteKeyName()
{
    return 'album_id';
}

    use HasFactory;

    protected $primaryKey = 'album_id'; 

    protected $fillable = [
        'title',
        'artist',
        'image',
        'release_date',
        'duration',
        'listen_link',
        'tracklist'
    ];
}

