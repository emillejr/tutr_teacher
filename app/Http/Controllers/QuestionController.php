<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionGroup;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $qty = QuestionGroup::find($id)->quantity;
        $test = QuestionGroup::find($id);
        return view('tests/questions/create',compact('test'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $inputs = $request->all();

        $qty = QuestionGroup::find($id)->quantity;

        $input_keys = array_keys($inputs);

        $answer_keys = [];
        for ($i = 0; $i<count($input_keys); $i++)
        {
            if (substr( $input_keys[$i], 0, 7 ) === 'input_question_')
            {
                $answer_keys[] = $input_keys[$i];
                $answered_numbers[] = ltrim($input_keys[$i],'input_question_');
            }
        }
        
        $keys = count($answer_keys);

        for ($i = 0; $i<$qty; $i++) // 20 times
        {
            $question = new Question;
            $question->group_id = $id;
            $question->number = $i + 1; // number is always iteration + 1 (1 - 20) // no problem

            $sentnc = ""; // defaultnya jawaban selalu kosong

            $key = 'input_question_'.($i+1);
            if (array_key_exists($key, $inputs))
            {    
                $sentnc = $inputs['input_question_'.($i+1)];
            }

            $question->sentence = $sentnc;
            $question->save();
        }

        return redirect('/tests');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
