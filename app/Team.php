<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $timestamps = false;

    public function team1Matches()
    {
        return $this->hasMany(Match::class, 'team1_id');
    }
    public function team2Matches()
    {
        return $this->hasMany(Match::class, 'team2_id');
    }

    public function players()
    {
        return $this->hasMany(Player::class, 'team_id', 'id');
    }
}
