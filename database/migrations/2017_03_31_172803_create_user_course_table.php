<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userCourse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UserId')->unsigned();
            $table->integer('trainingId')->unsigned();
            $table->foreign('UserId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('trainingId')->references('id')->on('training')->onDelete('cascade');
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
       Schema::dropIfExists('userCourse');
    }
}
