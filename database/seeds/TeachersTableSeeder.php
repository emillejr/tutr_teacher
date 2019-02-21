<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
        	'name' => 'Bambang',
        	'email' => 'bambang@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('teachers')->insert([
        	'name' => 'Hartono',
        	'email' => 'hartono@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('teachers')->insert([
        	'name' => 'Sugiarto',
        	'email' => 'sugiarto@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('teachers')->insert([
        	'name' => 'Siti',
        	'email' => 'siti@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('teachers')->insert([
        	'name' => 'Endang',
        	'email' => 'endang@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('teachers')->insert([
        	'name' => 'Cahyono',
        	'email' => 'cahyono@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('teachers')->insert([
        	'name' => 'Triyana',
        	'email' => 'triyana@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('teachers')->insert([
        	'name' => 'Wulandari',
        	'email' => 'wulandari@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('teachers')->insert([
        	'name' => 'Sulis',
        	'email' => 'sulis@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('teachers')->insert([
        	'name' => 'Budianto',
        	'email' => 'budianto@gmail.com',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);


        DB::table('teacher_profiles')->insert([
            'id' => '1',
            'user_id' => '1',
            'first_name' => 'Bambang',
            'last_name' => 'Prabowo',
            'gender' => 'L'
        ]);
        DB::table('teacher_profiles')->insert([
            'id' => '2',
            'user_id' => '2',
            'first_name' => 'Hartono',
            'last_name' => 'Subiakto',
            'gender' => 'L'
        ]);
        DB::table('teacher_profiles')->insert([
            'id' => '3',
            'user_id' => '3',
            'first_name' => 'Sugiarto',
            'last_name' => 'Kuncorodiningrat',
            'gender' => 'L'
        ]);
        DB::table('teacher_profiles')->insert([
            'id' => '4',
            'user_id' => '4',
            'first_name' => 'Siti',
            'last_name' => 'Subiakto',
            'gender' => 'P'
        ]);
        DB::table('teacher_profiles')->insert([
            'id' => '5',
            'user_id' => '5',
            'first_name' => 'Endang',
            'last_name' => 'Sukamsih',
            'gender' => 'P'
        ]);
        DB::table('teacher_profiles')->insert([
            'id' => '6',
            'user_id' => '6',
            'first_name' => 'Cahyono',
            'last_name' => 'Hardibudi',
            'gender' => 'L'
        ]);
        DB::table('teacher_profiles')->insert([
            'id' => '7',
            'user_id' => '7',
            'first_name' => 'Triyana',
            'last_name' => 'Yulianto',
            'gender' => 'L'
        ]);
        DB::table('teacher_profiles')->insert([
            'id' => '8',
            'user_id' => '8',
            'first_name' => 'Wulandari',
            'last_name' => 'Fitrianasari',
            'gender' => 'P'
        ]);
        DB::table('teacher_profiles')->insert([
            'id' => '9',
            'user_id' => '9',
            'first_name' => 'Sulis',
            'last_name' => 'Lisnawati',
            'gender' => 'P'
        ]);
        DB::table('teacher_profiles')->insert([
            'id' => '10',
            'user_id' => '10',
            'first_name' => 'Budianto',
            'last_name' => 'Salim',
            'gender' => 'L'
        ]);
    }
}
