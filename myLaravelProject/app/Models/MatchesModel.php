<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchesModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function home_club(){
        return $this->belongsTo('App\Models\ClubModel');
    }

    public function guest_club(){
        return $this->belongsTo('App\Models\ClubModel');
    }

    public function round(){
        return $this->belongsTo('App\Models\RoundModel');
    }

    public function matches_players(){
        return $this->hasMany('App\Models\MatchesPlayersModel');
    }
}
