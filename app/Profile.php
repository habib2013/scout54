<?php

namespace App;
use \App\User;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImage(){
        $imagepath = ($this->coverimage) ? $this->coverimage: 'profiles/FWZdb8H2JRzIsoZahRWCHgGdbGJeeeiwyd3aGh7s.png';
        return '/storage/'. $imagepath;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
    public function user(){
       return $this->belongsTo(User::class);
    }     
    
    public function admin(){
        return $this->belongsTo(Admin::class);
     }  
}
