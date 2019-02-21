<?php

namespace App\Http\Controllers;

use App\TestTake;
use App\QuestionGroup;
use App\Answer;
use App\Student;
use Illuminate\Http\Request;

class TestTakeController extends Controller
{

    public function index()
    {
        $test_takes = TestTake::all();

        return view('tests.takes.index',compact('test_takes'));
    }

    public function create($test_id)
    {
        $test = QuestionGroup::find($test_id);
        $questions = QuestionGroup::find($test_id)->questions;
        // $students = Student::all();
        $students = $test->students;
        
        return view('tests.takes.create',compact(['test','questions','students']));
    }

    public function store(Request $request, $id)
    {
        $inputs = $request->all();
        // dd($inputs);

        $test_take = new TestTake;
        $test_take->student_id = $request->student_id;
        // $test_take->test_id = $request->test_id;
        $test_take->test_id = $id;
        $test_take->save();

        $qty = $test_take->test->quantity;

        $input_keys = array_keys($inputs);

        $answer_keys = [];
        for ($i = 0; $i<count($input_keys); $i++)
        {
            if (substr( $input_keys[$i], 0, 7 ) === "answer_")
            {
                $answer_keys[] = $input_keys[$i];
                $answered_numbers[] = ltrim($input_keys[$i],"answer_");
            }
        }
        
        $keys = count($answer_keys);
        // dd($answer_keys);

        // for ($i = 0; $i<$keys; $i++)
        for ($i = 0; $i<$qty; $i++) // 20 times
        {
            $answer = new Answer;
            $answer->test_take_id = $test_take->id; // no problem
            $answer->number = $i + 1; // number is always iteration + 1 (1 - 20) // no problem

            $ans = ""; // defaultnya jawaban selalu kosong

            $key = 'answer_'.($i+1);
            if (array_key_exists($key, $inputs))
            {    
                $ans = $inputs['answer_'.($i+1)];
            }

            $answer->answer = $ans;
            $answer->save();
        }

        // foreach($answered_numbers as $answered_number)
        // {
        //     $answer = new Answer;
        //     $answer->test_take_id = $test_take->id;
        //     $answer->number = $answered_number;
        //     $answer->answer = $inputs['answer_'.$answered_number];
        //     $answer->save();
        // }

        return redirect('/tests');
    }

    public function show($testtake_id)
    {
        $test_take = TestTake::find($testtake_id);

        return view('tests.takes.show',compact('test_take'));
    }

    public function edit(TestTake $testTake)
    {
        //
    }

    public function update(Request $request, TestTake $testTake)
    {
        //
    }

    public function destroy(TestTake $testTake)
    {
        //
    }
}
