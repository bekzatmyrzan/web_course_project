<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoundModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function matches(){
        return $this->hasMany('App\Models\MatchesModel');
    }
}
