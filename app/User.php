<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'username','email', 'password','usertype','status','is_admin'
    // ];

    protected $fillable = ['username','fullname','email','phone','status','password'];

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

    protected static function boot(){
        parent::boot();
        static::created(function($user){
            $user->profile()->create([
                'title'=>$user->username,
               
            ]);

        });
    }


    public function profile(){
        return $this->hasOne(Profile::class);
    }
    public function posts(){
        return $this->hasMany(Post::class)->orderBy('created_at','DESC');
    }
    public function following(){
        return $this->belongsToMany(Profile::class);
    }
    public function videourl(){
        return $this->hasMany(VideoUrl::class);
    }

    public function incomplete()
    {
        return $this->hasOne('Incomplete::class');
    }
}
