<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        	'name' => 'Zidane',
        	'email' => 'zidane@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('students')->insert([
        	'name' => 'Jessica',
        	'email' => 'jessica@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('students')->insert([
        	'name' => 'Stuart',
        	'email' => 'stuart@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('students')->insert([
        	'name' => 'Nayla',
        	'email' => 'nayla@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('students')->insert([
        	'name' => 'Billy',
        	'email' => 'billy@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('students')->insert([
        	'name' => 'Cayla',
        	'email' => 'cayla@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('students')->insert([
        	'name' => 'Winda',
        	'email' => 'winda@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('students')->insert([
        	'name' => 'Michael',
        	'email' => 'michael@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('students')->insert([
        	'name' => 'Bobby',
        	'email' => 'bobby@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('students')->insert([
            'name' => 'Richard',
            'email' => 'richard@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);


        DB::table('student_profiles')->insert([
            'id' => '1',
            'user_id' => '1',
            'first_name' => 'Zidane',
            'last_name' => 'Prabowo',
            'gender' => 'L'
        ]);
        DB::table('student_profiles')->insert([
            'id' => '2',
            'user_id' => '2',
            'first_name' => 'Jessica',
            'last_name' => 'Subiakto',
            'gender' => 'P'
        ]);
        DB::table('student_profiles')->insert([
            'id' => '3',
            'user_id' => '3',
            'first_name' => 'Stuart',
            'last_name' => 'Kuncorodiningrat',
            'gender' => 'L'
        ]);
        DB::table('student_profiles')->insert([
            'id' => '4',
            'user_id' => '4',
            'first_name' => 'Nayla',
            'last_name' => 'Subiakto',
            'gender' => 'P'
        ]);
        DB::table('student_profiles')->insert([
            'id' => '5',
            'user_id' => '5',
            'first_name' => 'Billy',
            'last_name' => 'Sukamsih',
            'gender' => 'L'
        ]);
        DB::table('student_profiles')->insert([
            'id' => '6',
            'user_id' => '6',
            'first_name' => 'Cayla',
            'last_name' => 'Hardibudi',
            'gender' => 'P'
        ]);
        DB::table('student_profiles')->insert([
            'id' => '7',
            'user_id' => '7',
            'first_name' => 'Winda',
            'last_name' => 'Yulianto',
            'gender' => 'P'
        ]);
        DB::table('student_profiles')->insert([
            'id' => '8',
            'user_id' => '8',
            'first_name' => 'Michael',
            'last_name' => 'Fitrianasari',
            'gender' => 'L'
        ]);
        DB::table('student_profiles')->insert([
            'id' => '9',
            'user_id' => '9',
            'first_name' => 'Bobby',
            'last_name' => 'Lisnawati',
            'gender' => 'L'
        ]);
        DB::table('student_profiles')->insert([
            'id' => '10',
            'user_id' => '10',
            'first_name' => 'Richard',
            'last_name' => 'Salim',
            'gender' => 'L'
        ]);
    }
}
