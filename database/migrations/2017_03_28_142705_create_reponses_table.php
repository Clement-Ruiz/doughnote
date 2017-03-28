<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponses', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->integer('author_id')->unsigned();
            $table->string('content');
            $table->integer('comment_id')->unsigned();
            $table->boolean('active');
            $table->timestamps();
            $table->foreign("author_id")->references('id')->on("users")->onDelete('cascade')->onUpdate("cascade");
            $table->foreign("comment_id")->references("id")->on("commentaires")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reponses');
    }
}
