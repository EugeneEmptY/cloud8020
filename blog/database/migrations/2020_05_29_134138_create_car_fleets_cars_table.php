<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarFleetsCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_fleets_cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_fleets_id');
            $table->integer('cars_id');
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
        Schema::table('car_fleets_cars', function (Blueprint $table) {
            Schema::dropIfExists('car_fleets_cars');
        });
    }
}