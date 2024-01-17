<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmallAdsClassifiedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('small_ads_classifieds', function (Blueprint $table) {
            $table->increments('id')->comment('unikatowy identyfikator');
            $table->string('name', 75)->comment('nazwa kategorii');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('small_ads_classifieds');
    }
}
