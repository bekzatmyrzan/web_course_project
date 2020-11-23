<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function city(){
        return $this->belongsTo('App\Models\CityModel');
    }

    public function stadium(){
        return $this->belongsTo('App\Models\StadiumModel');
    }

    public function players(){
        return $this->hasMany('App\Models\PlayerModel');
    }

    public function matches(){
        return $this->hasMany('App\Models\MatchesModel');
    }
}
