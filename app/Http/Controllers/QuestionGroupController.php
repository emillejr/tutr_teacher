<?php

namespace App\Http\Controllers;

use App\QuestionGroup;
use App\Answer;
use Illuminate\Http\Request;

class QuestionGroupController extends Controller
{

    public function index()
    {
        $tests = QuestionGroup::all();
        return view('tests.index',compact('tests'));
    }

    public function create()
    {
        return view('tests.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => 'required',
            'topic' => 'required',
            'target' => ['required', 'integer', 'min:1', 'max:6'],
            'quantity' => ['required', 'integer', 'min:1', 'max:100'],
            'duration' => ['required', 'integer', 'min:1', 'max:360'],
            'type' => 'required',
        ]);

        $test = new QuestionGroup;
        $test->title = $request->title;
        $test->description = $request->description;
        $test->teacher_id = \Auth::user()->id;
        $test->topic_id = $request->topic;
        $test->target = $request->target;
        $test->quantity = $request->quantity;
        $test->duration = $request->duration;
        $test->question_type_id = $request->type;

        $test->save();
        return redirect('/tests/'.$test->id.'/create');
    }

    public function show($id)
    {
        $test = QuestionGroup::find($id);
        $students = $test->students;
        return view('tests.show',compact(['test','students']));
    }

    public function edit(QuestionGroup $questionGroup)
    {
        //
    }

    public function update(Request $request, QuestionGroup $questionGroup)
    {
        //
    }

    public function destroy(QuestionGroup $questionGroup)
    {
        //
    }
}
