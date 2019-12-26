<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorreviews extends Model
{
     public function tutor(){
    	return $this->belongsTo('App\Tutor');
    }
}
