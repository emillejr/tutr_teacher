<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $this->call([
            // UsersTableSeeder::class,
            InstitutionsTableSeeder::class,
            AdminsTableSeeder::class,
            TeachersTableSeeder::class,
            StudentsTableSeeder::class,
            QuestionTypesTableSeeder::class,
            TopicsTableSeeder::class,
            QuestionGroupsTableSeeder::class,
            StudentsTestsTableSeeder::class,
            QuestionsTableSeeder::class,
            NavsTableSeeder::class
        ]);
    }
}
