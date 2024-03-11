<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'title',
        'body',
        'image',
        'rating',
        'likes',
    ];
}
