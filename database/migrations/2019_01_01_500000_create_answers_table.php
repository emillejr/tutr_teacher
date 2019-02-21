<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            // $table->increments('id');
            $table->timestamps();
            $table->integer('number');
            $table->char('answer')->nullable();

            // $table->unsignedInteger('student_id');
            // $table->unsignedInteger('test_id');
            $table->unsignedInteger('test_take_id');

            // $table->foreign('student_id')->references('id')->on('students');
            // $table->foreign('test_id')->references('id')->on('question_groups');
            $table->foreign('test_take_id')->references('id')->on('test_takes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
