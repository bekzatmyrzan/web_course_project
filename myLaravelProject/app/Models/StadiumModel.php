<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StadiumModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function clubs(){
        return $this->hasMany('App\Models\ClubModel');
    }
}
