<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            'name' => 'Math'
        ]);
        DB::table('topics')->insert([
            'name' => 'History'
        ]);
        DB::table('topics')->insert([
            'name' => 'Physics'
        ]);
        DB::table('topics')->insert([
            'name' => 'Biology'
        ]);
        DB::table('topics')->insert([
            'name' => 'Chemistry'
        ]);
        DB::table('topics')->insert([
            'name' => 'English'
        ]);
    }
}
