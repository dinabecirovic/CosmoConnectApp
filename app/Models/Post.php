<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'comment', 
        'user_id',
        'likes'
    ];

    function index () {

    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
