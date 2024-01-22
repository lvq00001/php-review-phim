<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model {
    use HasFactory;

    public function moives() {
        return $this->belongsToMany('App\Movie');
    }
}