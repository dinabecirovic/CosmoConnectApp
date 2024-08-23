<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $casts = [
        'options' => 'array',
        'votes' => 'array',
    ];

    protected $fillable = ['question', 'options', 'votes', 'topic_id'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
