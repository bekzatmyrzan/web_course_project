<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function role(){
        return $this->belongsTo('App\Models\RoleModel');
    }

    public function news(){
        return $this->hasMany('App\Models\News');
    }
}
