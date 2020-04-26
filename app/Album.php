<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';

    protected $fillable = array('player_id','name','description','cover_image');

    public function Photos(){
        return $this->hasMany('App\Image');
    }
    public function players(){
        return $this->belongsTo('App\Player');
    }
}
