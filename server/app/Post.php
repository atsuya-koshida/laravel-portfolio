<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model
{
    protected $fillable = [
        'title',
        'team_name',
        'activity_place',
        'activity_time',
        'description',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User')->withTimestamps();
    }
}
