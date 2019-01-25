<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actu extends Model
{
    protected $table = 'actus';

    protected $fillable = [
        'title', 'text', 'likes', 'image', 'date'
    ];
}
