<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoForNew extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function news(){
        return $this->belongsTo('App\Models\NewsModel');
    }
}
