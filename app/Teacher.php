<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	public function profile() {
		return $this->hasOne('App\TeacherProfile','user_id');
	}

    public function getFullNameAttribute() {
    	$full_name = $this->profile->first_name." ".$this->profile->last_name;
    	return $full_name;
    }

    public function getNameAndTitleAttribute() {
    	if ($this->profile->gender == "L")
    	{
    		$title = "Bpk.";
    	} else {
			$title = "Ibu.";
    	}
    	$name_title = $title." ".$this->full_name;
    	return $name_title;
    }
}
