<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


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
        return $this->belongsTo('App\User');
    }

    public function comments(): HasMany
    {
        return $this->hasMany('App\Comment');
    }
}
