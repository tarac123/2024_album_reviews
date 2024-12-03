<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Album extends Model
{
    use HasFactory;

    /**
     * Specify the primary key.
     */
    protected $primaryKey = 'id';

    /**
     * Specify the route key name for model binding.
     */
    public function getRouteKeyName()
    {
        return 'id';
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
        return $this->hasMany(Review::class, 'id', 'id');
    }
    
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    
}
