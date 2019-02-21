<?php

use Illuminate\Database\Seeder;

class NavsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navs')->insert([
            'name' => 'Home',
            'index' => '1',
            'route' => '/',
            'icon' => 'si si-home'
        ]);
        DB::table('navs')->insert([
            'name' => 'All Tests',
            'index' => '2',
            'route' => '/tests',
            'icon' => 'si si-heart'
        ]);
        DB::table('navs')->insert([
            'name' => 'All Scores',
            'index' => '3',
            'route' => '/tests/takes',
            'icon' => 'si si-puzzle'
        ]);
        // DB::table('navs')->insert([
        //     'name' => 'Nav 4',
        //     'index' => '4',
        //     'route' => '/',
        //     'icon' => 'si si-tag'
        // ]);
        // DB::table('navs')->insert([
        //     'name' => 'Nav 5',
        //     'index' => '5',
        //     'route' => '/',
        //     'icon' => 'si si-trophy'
        // ]);
    }
}
