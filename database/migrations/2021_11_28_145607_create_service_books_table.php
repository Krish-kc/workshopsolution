<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_books', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('engeen_number');
            $table->string('chassis_number');
             $table->unsignedBigInteger('vechile_id');
            $table->foreign('vechile_id')
            ->references('id')->on('vehicles')
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
        Schema::dropIfExists('service_books');
    }
}
