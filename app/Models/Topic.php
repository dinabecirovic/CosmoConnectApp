<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = [
        'topic_title',
        'image',
        'topic',
        'moderator_name',
        'activity',
        'IdP'
    ];
}
