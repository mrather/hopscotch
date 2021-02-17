<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirplanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airplanes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('registration_number')->unique();
            $table->string('production_line');
            $table->string('iata_type');
            $table->string('model_name');
            $table->string('model_code');
            $table->string('icao_code_hex');
            $table->string('iata_code_short');
            $table->string('construction_number');
            $table->string('test_registration_number');
            $table->datetime('rollout_date');
            $table->datetime('first_flight_date');
            $table->datetime('delivery_date');
            $table->datetime('registration_date');
            $table->integer('line_number');
            $table->integer('plane_series');
            $table->string('airline_iata_code');
            $table->string('plane_owner');
            $table->integer('engines_count');
            $table->string('engines_type');
            $table->integer('plane_age');
            $table->string('plane_status');
            $table->string('plane_class');              
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
        Schema::dropIfExists('airplanes');
    }
}
