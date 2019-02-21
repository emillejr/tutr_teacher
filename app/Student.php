<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	public function profile() {
		return $this->hasOne('App\StudentProfile','user_id');
	}

    public function tests() {
    	return $this->hasMany('App\Test');
    }

    public function test_takes() {
    	return $this->hasMany('App\TestTake');
    }

    public function scores() {
    	return $this->hasMany('App\Score');
    }

    public function institution() {
    	return $this->belongsTo('App\Institution');
    }
}
