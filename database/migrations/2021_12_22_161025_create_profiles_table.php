<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('nickname')->nullable();
            $table->string('mobile_one')->nullable();
            $table->string('mobile_two')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('local_area')->nullable();
            $table->string('street_address')->nullable();
            $table->string('house_number')->nullable();
            $table->string('birthday')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('profile_pic')->nullable();
            $table->unsignedBigInteger('user_id');
           $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

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
        Schema::dropIfExists('profiles');
    }
}
