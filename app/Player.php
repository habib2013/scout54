<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Player extends Authenticatable implements MustVerifyEmail
{
  
    use Notifiable;

    protected $guard = 'player';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'username','email', 'password','usertype','status','is_admin'
    // ];


    protected $fillable = ['username','fullname','email','status','password','nationality','birthday'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // protected static function boot(){
    // parent::boot();
    //     static::created(function($user){
    //         $user->profile()->create([
    //             'title'=>$user->username,
               
    //         ]);

    //     });
    // }

    public function profile(){
        return $this->hasOne(Profile::class);
    }
  

}
