<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
<<<<<<< HEAD
            $table->string('email')->unique();
            $table->string('login')->unique();
=======
            $table->date('birth_date')->nullable();
            $table->string('email');
            $table->string('login');
>>>>>>> dev
            $table->string('password');
            $table->string('type');
            $table->string('avatar')->nullable();
            $table->rememberToken();
            $table->string("token")->nullable();
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
        Schema::dropIfExists('users');
    }
}
