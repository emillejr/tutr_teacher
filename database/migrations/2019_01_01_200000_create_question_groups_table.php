<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('topic_id');
            $table->integer('target');
            $table->integer('quantity');
            $table->integer('duration');
            $table->unsignedInteger('question_type_id');

            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('question_type_id')->references('id')->on('question_types');
            $table->foreign('topic_id')->references('id')->on('topics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_groups');
    }
}
