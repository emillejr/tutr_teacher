<?php

use Illuminate\Database\Seeder;

class StudentsTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_question_group')->insert([
            'question_group_id' => '1',
            'student_id' => '1'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '1',
            'student_id' => '2'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '1',
            'student_id' => '3'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '1',
            'student_id' => '4'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '1',
            'student_id' => '5'
        ]);

        DB::table('student_question_group')->insert([
            'question_group_id' => '2',
            'student_id' => '1'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '2',
            'student_id' => '2'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '2',
            'student_id' => '3'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '2',
            'student_id' => '4'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '2',
            'student_id' => '5'
        ]);

        DB::table('student_question_group')->insert([
            'question_group_id' => '3',
            'student_id' => '1'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '3',
            'student_id' => '2'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '3',
            'student_id' => '3'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '3',
            'student_id' => '4'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '3',
            'student_id' => '5'
        ]);

        DB::table('student_question_group')->insert([
            'question_group_id' => '4',
            'student_id' => '1'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '4',
            'student_id' => '2'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '4',
            'student_id' => '3'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '4',
            'student_id' => '4'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '4',
            'student_id' => '5'
        ]);


        DB::table('student_question_group')->insert([
            'question_group_id' => '5',
            'student_id' => '5'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '5',
            'student_id' => '6'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '5',
            'student_id' => '7'
        ]);

        DB::table('student_question_group')->insert([
            'question_group_id' => '6',
            'student_id' => '5'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '6',
            'student_id' => '6'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '6',
            'student_id' => '7'
        ]);

        DB::table('student_question_group')->insert([
            'question_group_id' => '7',
            'student_id' => '5'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '7',
            'student_id' => '6'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '7',
            'student_id' => '7'
        ]);



        DB::table('student_question_group')->insert([
            'question_group_id' => '8',
            'student_id' => '8'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '8',
            'student_id' => '9'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '8',
            'student_id' => '10'
        ]);

        DB::table('student_question_group')->insert([
            'question_group_id' => '9',
            'student_id' => '8'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '9',
            'student_id' => '9'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '9',
            'student_id' => '10'
        ]);

        DB::table('student_question_group')->insert([
            'question_group_id' => '10',
            'student_id' => '8'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '10',
            'student_id' => '9'
        ]);
        DB::table('student_question_group')->insert([
            'question_group_id' => '10',
            'student_id' => '10'
        ]);
    }
}
