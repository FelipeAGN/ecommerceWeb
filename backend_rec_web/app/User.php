<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
/*
    protected $fillable = [
        'fullname', 'email', 'password','first_name','last_name'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function generateToken(){
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }*/
}
