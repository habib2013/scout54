<?php

namespace App;
use App\Player;
use App\Club;


use Illuminate\Database\Eloquent\Model;

class PlayerProfile extends Model
{
    
    protected $guarded = [];

    public function profileImage(){
        $imagepath = ($this->passport) ? $this->passport: '../../images/rener.png';
        return '/images/'. $imagepath;
    }

    public function players()
    {
        return $this->belongsTo('App\Player', 'player_id');
    }
    
// public function players(){
//     return $this->belongsTo(Player::class);
// }


}
