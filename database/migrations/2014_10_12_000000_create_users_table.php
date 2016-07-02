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
            $table->increments('id');
            $table->string('avatar');
            $table->string('name');
            $table->string('lastname');
            $table->string('nickname');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->string('phone1');
            $table->string('phone2');
            $table->integer('area_id')->unsigned();
            $table->string('location');
            $table->boolean('is_donator');
            $table->integer('user_level');
            $table->integer('reputation');
            $table->text('bio');
            $table->integer('hires_no');
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
