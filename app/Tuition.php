<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuition extends Model
{
	 public function subjects(){
    	return $this->hasMany('App\Subject');
    }
      public function guardian(){
    	return $this->belongsTo('App\Guardian');
    }
}
