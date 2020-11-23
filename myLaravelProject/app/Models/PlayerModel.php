<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function club(){
        return $this->belongsTo('App\Models\ClubModel');
    }

    public function position(){
        return $this->belongsTo('App\Models\PositionModel');
    }

    public function matches_players(){
        return $this->hasMany('App\Models\MatchesPlayersModel');
    }
}
