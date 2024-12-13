<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;  
    
    public $timestamps = true;
    
    protected $fillable = [
        'rating',
        'comment',
        'album_id',
        'user_id',
    ];
    
    public function album()
    {
       
        return $this->belongsTo(Album::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}