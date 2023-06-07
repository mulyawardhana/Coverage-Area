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
        Schema::create('air_land_freight_heads', function (Blueprint $table) {
            $table->id();
            $table->string('NoDokumen');
            $table->string('TglBuat')->nullable();
            $table->string('TglTerbit')->nullable();
            $table->string('TglPemutakhiran')->nullable();
            $table->integer('JumlahBaris')->nullable();
            $table->string('Diterbitkan')->nullable();
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
        Schema::dropIfExists('air_land_freights');
    }
};
