<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function attatchment(){
        return $this->hasMany('App\Attatchment');
    }
}
