<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = [
        'text',
        'post_id',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo('App\Post');
    }
}
