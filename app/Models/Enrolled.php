<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolled extends Model
{
    use HasFactory;

    protected $table = 'enrolled';
    
    protected $fillable = [
        'topic_id',
        'user_id',
    ];

    public function users()
    {
        return $this->hasMany(User::class,'id','user_id');
    }
}
