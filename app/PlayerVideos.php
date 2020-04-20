<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerVideos extends Model
{
    protected $guarded = [];
 
    public function players()
    {
        return $this->belongsTo('App\Player', 'player_id');
    }
}
