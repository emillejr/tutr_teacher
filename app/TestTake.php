<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Student;
// use App\QuestionGroup;
// use App\Answer;

class TestTake extends Model
{
	public function student()
	{
		return $this->belongsTo('App\Student');
	}
	public function test()
	{
		return $this->belongsTo('App\QuestionGroup');
	}
	public function answers()
	{
		return $this->hasMany('App\Answer');
	}
}



// use App\QuestionGroup;

// class Question extends Model
// {
//     public function group() {
//     	return $this->belongsTo('QuestionGroup');
//     }
// }