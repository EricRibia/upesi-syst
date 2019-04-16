<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = [
        'name', 'type', 'logo', 'info', 'country_id'
    ];
    public function country(){
        return $this->belongsTo('App\Country');
    }
    public function pimages(){
        return $this->hasMany('App\Pimage');
    }
}
