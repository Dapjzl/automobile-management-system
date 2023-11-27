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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('engine');
            $table->string('seat');
            $table->string('kilometre');
            $table->string('reg_year');
            $table->string('fuel');
            $table->string('transmission');
            $table->string('price');
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('location')->nullable();
            $table->string('miles')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('description');
            $table->string('code');
            $table->string('seller_code');
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
        Schema::dropIfExists('vehicles');
    }
};
