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
            $table->foreign('UserId')->references('id')->on('users');
            $table->foreign('trainingId')->references('id')->on('training');
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
