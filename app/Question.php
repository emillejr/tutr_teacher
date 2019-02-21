<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function group() {
    	return $this->belongsTo('App\QuestionGroup');
    }
}
