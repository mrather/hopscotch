<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('airline_name')->unique();
            $table->string('iata_code');
            $table->integer('iata_prefix_accounting');
            $table->string('icao_code');
            $table->string('callsign');
            $table->string('type');
            $table->string('status');
            $table->integer('fleet_size');
            $table->string('fleet_average_age');
            $table->string('date_founded');
            $table->string('hub_code');
            $table->string('country_name');
            $table->string('country_iso2'); 
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
        Schema::dropIfExists('airlines');
    }
}
