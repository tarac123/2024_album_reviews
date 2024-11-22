<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    /**
     * Specify the primary key.
     */
    protected $primaryKey = 'album_id';

    /**
     * Specify the route key name for model binding.
     */
    public function getRouteKeyName()
    {
        return 'album_id';
    }

    /**
     * Mass-assignable attributes.
     */
    protected $fillable = [
        'title',
        'artist',
        'image',
        'release_date',
        'duration',
        'listen_link',
        'tracklist',
    ];

    /**
     * Relationship with reviews.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'album_id', 'album_id');
    }
    
}
