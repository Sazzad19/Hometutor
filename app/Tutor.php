<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
        public function tutorreviews(){
    	return $this->hasMany('App\Tutorreviews');
    } 
}
