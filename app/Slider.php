<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliderimages';
    protected $fillable = [
        'img', 'title','info'
    ];
}
