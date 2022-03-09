<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('slot_id');
            $table->string('start_time');
            $table->string('end_time');
            $table->unsignedBigInteger('booking_id')->nullable();
            $table->string('status');
            $table->foreign('slot_id')
            ->references('id')->on('slots')
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
        Schema::dropIfExists('intervals');
    }
}
