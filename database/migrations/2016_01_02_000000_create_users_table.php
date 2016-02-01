<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('username');
            $table->string('nickname')->default('');
            $table->string('avatar')->default('');
            $table->tinyInteger('sex')->default(0);
            $table->timestamp('last_login_time');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->tinyInteger('status')->default(1);
            $table->integer('balance')->default(0);
            $table->integer('freezing')->default(0);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
