<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    protected $fillable = [
        'name',
    ];

    public $incrementing = true;

    public function users(): BelongsToMany
    {
        return $this->belongsToMany('App\User');
    }
}
