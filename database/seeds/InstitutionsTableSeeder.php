<?php

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([
            'name' => 'SDN 01 Jakarta Utara'
        ]);
        DB::table('institutions')->insert([
            'name' => 'SDN 21 Jakarta Barat'
        ]);
        DB::table('institutions')->insert([
            'name' => 'SDN 05 Jakarta Timur'
        ]);
        DB::table('institutions')->insert([
            'name' => 'SDN 70 Jakarta Selatan'
        ]);
    }
}
