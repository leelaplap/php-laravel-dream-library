<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function library(){
        return $this->belongsTo('App\Library');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
