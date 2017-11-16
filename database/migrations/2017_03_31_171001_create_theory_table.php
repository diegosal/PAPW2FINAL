<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTheoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trainingId')->unsigned();
            $table->foreign('trainingId')->references('id')->on('training')->onDelete('cascade');
            $table->string('url');
            $table->string('description');
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
       Schema::dropIfExists('theory');
    }
}
