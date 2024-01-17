<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCarsPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_photos', function (Blueprint $table) {            
                $table->increments('id');
                $table->integer('cars_contents_id')->comment('zawartosc do której jest dodane zdjęcie');            ;
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
        Schema::dropIfExists('cars_photos');
    }
}
