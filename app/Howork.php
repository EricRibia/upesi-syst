<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Howork extends Model
{
    protected $table = 'howorks';
    protected $fillable = [
        'icon', 'number', 'title', 'info'
    ];
}
