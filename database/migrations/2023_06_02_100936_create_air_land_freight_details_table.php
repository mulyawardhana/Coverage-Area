<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_land_freight_details', function (Blueprint $table) {
            $table->id();
            $table->string('NoDokumen');
            $table->integer('CityId');
            $table->integer('FlightRateId');
            $table->string('VendorId');
            $table->string('Airline')->nullable();
            $table->string('AirlineId')->nullable();
            $table->integer('Berat')->nullable();
            $table->bigInteger('TarifSMU')->nullable();
            $table->bigInteger('PPN')->nullable();
            $table->bigInteger('HandlingFee')->nullable();
            $table->bigInteger('BiayaAdmin')->nullable();
            $table->bigInteger('Surchage')->nullable();
            $table->bigInteger('ServiceFee')->nullable();
            $table->bigInteger('SewaGudang')->nullable();
            $table->bigInteger('OtherCharge')->nullable();
            $table->bigInteger('RegulatedAgent')->nullable();
            $table->bigInteger('MSC')->nullable();
            $table->bigInteger('BasicStore')->nullable();
            $table->bigInteger('Total')->nullable();
            $table->bigInteger('TarifSMUPlus')->nullable();
            $table->bigInteger('PPNPlus')->nullable();
            $table->bigInteger('TotalPlus')->nullable();
            $table->text('Keterangan')->nullable();
            $table->string('TglBuat')->nullable();
            $table->string('Asal')->nullable();
            $table->integer('CreatedBy')->nullable();
            $table->integer('UpdatedBy')->nullable();
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
        Schema::dropIfExists('air_land_freight_details');
    }
};
