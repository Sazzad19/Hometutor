<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   public function tuition(){
    	return $this->belongsTo('App\Tuition');
    }
}
