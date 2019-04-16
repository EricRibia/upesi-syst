<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pimage extends Model
{
    protected $table = 'pimages';
    protected $fillable = [
        'img', 'payment_id','country','type'
    ];
    public function payment(){
        return $this->belongsTo('App\Payment');
    }
}
