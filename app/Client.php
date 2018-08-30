<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function job(){
        return $this->hasMany('App\Job');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
