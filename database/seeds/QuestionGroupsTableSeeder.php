<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class QuestionGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_groups')->insert([
            'title' => 'Maths Quiz 101',
            'description' => 'Mathematics Quiz for 1st grade students',
            'teacher_id' => '1',
            'topic_id' => '1',
            'target' => '1',
            'quantity' => '20',
            'duration' => '45',
            'question_type_id' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('question_groups')->insert([
            'title' => 'Maths Quiz 102',
            'description' => 'Mathematics Quiz for 1st grade students',
            'teacher_id' => '2',
            'topic_id' => '1',
            'target' => '1',
            'quantity' => '15',
            'duration' => '30',
            'question_type_id' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('question_groups')->insert([
            'title' => 'Maths Quiz 103',
            'description' => 'Mathematics Quiz for 1st grade students',
            'teacher_id' => '3',
            'topic_id' => '1',
            'target' => '1',
            'quantity' => '20',
            'duration' => '45',
            'question_type_id' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('question_groups')->insert([
            'title' => 'Maths Quiz 104',
            'description' => 'Mathematics Quiz for 1st grade students',
            'teacher_id' => '4',
            'topic_id' => '1',
            'target' => '1',
            'quantity' => '10',
            'duration' => '30',
            'question_type_id' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('question_groups')->insert([
            'title' => 'Bio Quiz 301',
            'description' => 'Biology Quiz for 3rd grade students',
            'teacher_id' => '5',
            'topic_id' => '4',
            'target' => '3',
            'quantity' => '40',
            'duration' => '60',
            'question_type_id' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('question_groups')->insert([
            'title' => 'Bio Quiz 302',
            'description' => 'Biology Quiz for 3rd grade students',
            'teacher_id' => '6',
            'topic_id' => '4',
            'target' => '3',
            'quantity' => '20',
            'duration' => '45',
            'question_type_id' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('question_groups')->insert([
            'title' => 'Bio Quiz 303',
            'description' => 'Biology Quiz for 3rd grade students',
            'teacher_id' => '7',
            'topic_id' => '4',
            'target' => '3',
            'quantity' => '40',
            'duration' => '60',
            'question_type_id' => '1',
            'created_at' => Carbon::now()
        ]);
        DB::table('question_groups')->insert([
            'title' => 'History Quiz 501',
            'description' => 'History Quiz for 5th grade students',
            'teacher_id' => '8',
            'topic_id' => '2',
            'target' => '5',
            'quantity' => '10',
            'duration' => '30',
            'question_type_id' => '2',
            'created_at' => Carbon::now()
        ]);
        DB::table('question_groups')->insert([
            'title' => 'History Quiz 502',
            'description' => 'History Quiz for 5th grade students',
            'teacher_id' => '9',
            'topic_id' => '2',
            'target' => '5',
            'quantity' => '10',
            'duration' => '30',
            'question_type_id' => '2',
            'created_at' => Carbon::now()
        ]);
        DB::table('question_groups')->insert([
            'title' => 'History Quiz 503',
            'description' => 'History Quiz for 5th grade students',
            'teacher_id' => '10',
            'topic_id' => '2',
            'target' => '5',
            'quantity' => '10',
            'duration' => '30',
            'question_type_id' => '2',
            'created_at' => Carbon::now()
        ]);
    }
}
