<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function team()
    {
        return $this->hasOne('App\Team', 'id', 'team_id');
    }
}
