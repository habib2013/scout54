<?php

namespace App;
use App\Player;
use App\Club;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    protected $guarded = [];
 
    public function players()
    {
        return $this->belongsTo('App\Player', 'player_id');
    }
}
