<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function candidate(){
        return $this->belongsTo('App\Candidate');
    }
}
