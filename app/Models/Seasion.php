<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seasion extends Model
{
    protected $fillable=['name_seasion'];

    public function episodes(){

    	return $this->hasMany('App\Models\Episode');
    }

    public function film(){

    	return $this->belongsTo('App\Models\Film');
    }
}
