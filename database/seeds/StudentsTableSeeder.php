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
    }
}
