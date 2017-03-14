<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matiere')->unsigned();
            $table->integer('student')->unsigned();
            $table->integer('teacher')->unsigned();
            $table->integer('note')->unsigned();
            $table->integer('max_note')->unsigned();
            $table->float('coef')->unsigned();
            $table->timestamps();
            $table->foreign('matiere')->references('id')->on('matieres')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('teacher')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
