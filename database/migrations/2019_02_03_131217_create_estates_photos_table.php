<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateEstatesPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estates_contents_id')->comment('powiązanie zdjecia z wpisem');
            $table->integer('sort')->comment('sortowanie zdjęć 1 jako głowne');         
            $table->string('name',13)->comment('hash name - wygenerowana aaa');          
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estates_photos');
    }
}
