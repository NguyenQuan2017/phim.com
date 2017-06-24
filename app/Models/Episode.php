<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
   protected $fillable=['episode','link_video'];

   public function seasion(){

   	return $this->belongsTo('App\Models\Seasion');

   }
   public function film(){

   	return $this->belongsTo('App\Models\Film');
   }
}
