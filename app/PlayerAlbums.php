<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerAlbums extends Model
{
 protected $fillable = ['name','description','cover_image'];


 public function photos(){
     return $this->hasMany('App\PlayerImages');
 }
}
