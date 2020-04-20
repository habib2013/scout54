<?php

namespace App;
use App\verifyUser;
use App\playerProfile;
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
    //     static::created(function($players){
    //         $players->playerprofile()->create([
    //             'description'=>$players->username,
    //         ]);

    //     });
    // }

   
    public function playerprofile(){
        return $this->hasOne('App\PlayerProfile');
    }
    public function playerpictures(){
        return $this->hasOne('App\PlayerPictures');
    }

    public function playervideos(){
        return $this->hasOne('App\PlayerVideos');
    }
  
    public function verifyUser()
    {
    return $this->hasOne('App\VerifyUser');
    }
}
