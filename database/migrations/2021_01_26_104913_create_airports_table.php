<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('airport_name');
            $table->string('iata_code')->unique();
            $table->string('icao_code');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('geoname_id');
            $table->string('timezone');
            $table->string('gmt');
            $table->string('phone_number');
            $table->string('country_name');
            $table->string('country_iso2');
            $table->string('city_iata_code');               
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
        Schema::dropIfExists('airports');
    }
}
