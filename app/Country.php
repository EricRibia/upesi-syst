<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = [
        'name', 'logo', 'bimage', 'intro'
    ];
    public function Payment(){
        return $this->hasMany('App\Payment');
    }
}
