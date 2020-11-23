<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchesPlayersModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function match(){
        return $this->belongsTo('App\Models\MatchesModel');
    }

    public function scored_player(){
        return $this->belongsTo('App\Models\PlayerModel');
    }

    public function assisted_player(){
        return $this->belongsTo('App\Models\PlayerModel');
    }
}
