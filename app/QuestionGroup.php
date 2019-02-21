<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionGroup extends Model
{
    public function questions() {
    	return $this->hasMany('App\Question','group_id');
    }

    public function question_type() {
    	return $this->belongsTo('App\QuestionType');
    }

    public function topic() {
    	return $this->belongsTo('App\Topic');
    }

    public function teacher() {
        return $this->belongsTo('App\Teacher');
    }

    public function students() {
        return $this->belongsToMany('App\Student','student_question_group');
    }

    public function takes() {
        return $this->hasMany('App\TestTake','test_id');
    }

    public function getGradeTargetAttribute() {
        
        if($this->target == '1')
        {
            $suffix = "st";
        } elseif($this->target == '2')
        {
            $suffix = "nd";
        } elseif($this->target == '3')
        {
            $suffix = "rd";
        } else {
            $suffix = 'th';
        }
        return $this->target . $suffix . " Grader";
    }

}
