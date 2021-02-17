<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country_name');
            $table->string('country_iso2')->unique();
            $table->string('country_iso3');
            $table->integer('country_iso_numeric');
            $table->string('population');
            $table->string('capital');
            $table->string('continent');
            $table->string('currency_name');
            $table->string('currency_code');
            $table->string('fips_code');
            $table->integer('phone_prefix'); 
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
        Schema::dropIfExists('countries');
    }
}
