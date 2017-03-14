<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->integer('author_id')->unsigned();
            $table->string('content');
            $table->integer('parent_id')->nullable();
            $table->boolean('active');
            $table->timestamps();
            $table->foreign("author_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('parent_id')->references("id")->on('commentaires')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
