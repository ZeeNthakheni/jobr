<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function attatchment(){
        return $this->hasMany('App\Attatchment');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function experiences(){
        return $this->hasMany('App\Experience');
    }
}
