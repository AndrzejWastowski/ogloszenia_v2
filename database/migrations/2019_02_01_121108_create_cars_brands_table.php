<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_brands', function (Blueprint $table) {
            $table->increments('id')->comment('unikatowy identyfikator');
            $table->string('name', 75)->comment('brand - marka pojazdu');
            $table->integer('popular')->default(0)->comment('czy modele są popularne, do wyswietlania na liscie jako pierwsze');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars_brands');
    }
}
