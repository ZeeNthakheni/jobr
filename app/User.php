<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','companyKey',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function client(){
        return $this->hasMany('App\Client');
    }

    public function job(){
        return $this->hasMany('App\Job');
    }

    public function userInfo(){
        return $this->hasOne('App\UserInfo');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }

}
