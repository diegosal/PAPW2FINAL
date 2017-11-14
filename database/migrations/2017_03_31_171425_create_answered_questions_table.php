<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnsweredQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answeredQuestion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UserId')->unsigned();
            $table->integer('surveyId')->unsigned();
            $table->integer('questionId')->unsigned();
            $table->integer('answerId')->unsigned();
            $table->foreign('UserId')->references('id')->on('users');
            $table->foreign('surveyId')->references('id')->on('survey');
            $table->foreign('questionId')->references('id')->on('question');
            $table->foreign('answerId')->references('id')->on('answer');
            $table->timestamps();
        });       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('answeredQuestion');
    }
}
