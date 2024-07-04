<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $fillable=[
        'difficulty',
        'name',
        'topic_id'
    ];

    public function topics()
    {
        return $this->hasMany(Test::class, 'id', 'topic_id','IdP');
    }
    
}
