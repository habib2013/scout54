<?php

namespace App;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Player extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $guard = 'player';


    protected $fillable = ['username','fullname','email','birthday','nationality','phone','status','passport','password'];

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
