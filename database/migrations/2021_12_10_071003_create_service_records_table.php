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
            $table->bigIntiger('serviceBook_id');
            $table->string('date');
            $table->string('kilometer');
            $table->string('part_change');
            $table->string('service_charge');
            $table->string('service_duration');
            $table->string('nextService');
            $table->longText('description');
            $table->string('bill_image');
            $table->string('serviceCenter_name');
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
