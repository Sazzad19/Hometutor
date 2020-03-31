<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
     public function user(){
    	return $this->belongsTo('App\User');
    }
     public function students(){
    	return $this->hasMany('App\Student');
    }
    public function guardianreviews(){
    	return $this->hasMany('App\Guardianreviews');
    } 
     public function tuitionposts(){
    	return $this->hasMany('App\Tuition');
    } 
}
