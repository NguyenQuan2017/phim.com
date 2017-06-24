<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{

    protected $fillable=['name_films','title','content','images'];

    public function seasions(){

    	return $this->hasMany('App\Models\Seasion');
    }

    public function episode(){

    	return $this->hasMany('App\Models\Seasion');
    }
}
