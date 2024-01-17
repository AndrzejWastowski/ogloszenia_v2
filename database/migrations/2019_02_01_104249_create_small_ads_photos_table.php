<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSmallAdsPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('small_ads_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('small_ads_contents_id')->comment('zawartosc do której jest dodane zdjęcie');            ;
            $table->string('name')->comment('nazwa wygenerowana');            ;
            $table->integer('sort')->comment('ustalanie kolejności w grupie  zdejeć do danego ogłoszenia');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('small_ads_photos');
    }
}
