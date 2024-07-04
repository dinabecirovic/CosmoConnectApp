<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'response',
        'test_id',
        'status'
    ];

    
    public function tests()
    {
        return $this->hasMany(Question::class, 'id', 'test_id');
    }
}
