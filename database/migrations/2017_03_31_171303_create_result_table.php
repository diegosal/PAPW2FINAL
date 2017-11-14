<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UserId')->unsigned();
            $table->integer('surveyId')->unsigned();
            $table->foreign('UserId')->references('id')->on('users');
            $table->foreign('surveyId')->references('id')->on('survey');
            $table->integer('correctAnswers');
            $table->integer('wrongAnswers');
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
       Schema::dropIfExists('result');
    }
}
