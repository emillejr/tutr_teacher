<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
        	'name' => 'Emille',
        	'email' => 'emille@eresto.co.id',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('admins')->insert([
        	'name' => 'Kris',
        	'email' => 'kris@eresto.co.id',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('admins')->insert([
        	'name' => 'Rangga',
        	'email' => 'rangga@eresto.co.id',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
        DB::table('admins')->insert([
        	'name' => 'Alan',
        	'email' => 'alan@tutr.co.id',
            'password' => '$2y$10$HdgnXmJuB2aFE/iysHhV4us.dFt2hqMkRRRMxwbqYlE4F1tAbHt3e',
            'institution_id' => '1'
        ]);
    }
}
