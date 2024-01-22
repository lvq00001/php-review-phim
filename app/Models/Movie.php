<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function stars()
    {
        return $this->belongsToMany('App\Star')
            ->hasMany(Comment::class);
    }
}