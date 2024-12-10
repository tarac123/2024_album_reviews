<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;  // This should come before other properties
    
    public $timestamps = true;
    
    protected $fillable = [
        'rating',
        'comment',
        'album_id',
        'user_id',
    ];
    
    public function album()
    {
        // Fix: Remove the redundant id in the relationship
        return $this->belongsTo(Album::class);
        // Or if you need to specify the keys explicitly:
        // return $this->belongsTo(Album::class, 'id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}