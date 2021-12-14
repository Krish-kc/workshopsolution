<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_records', function (Blueprint $table) {
            $table->id();
      
            $table->string('date')->nullable();
            $table->string('kilometer')->nullable();
            $table->string('part_change')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('service_duration')->nullable();
            $table->string('nextService')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('serviceCenter_name')->nullable();
             $table->unsignedBigInteger('serviceBook_id')->nullable();
             $table->foreign('serviceBook_id')
            ->references('id')->on('service_books')
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
        Schema::dropIfExists('service_records');
    }
}
