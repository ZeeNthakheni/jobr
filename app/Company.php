<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function users(){
        return $this->hasMany('App\User');
    }
    public function companies(){
        return $this->hasMany('App\Company');
    }

    public function jobs(){
        return $this->hasMany('App\Job');
    }
    public function clients(){
        return $this->hasMany('App\Client');
    }
    public function candidates(){
        return $this->hasMany('App\Candidate');
    }
}
