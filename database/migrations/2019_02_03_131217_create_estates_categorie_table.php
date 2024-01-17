<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatesCategorieTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('estates_categories', function (Blueprint $table) {
            $table->increments('id')->comment('unikatowy identyfikator');
            $table->string('name', 75)->comment('nazwa kategorii');
            $table->string('link', 75)->comment('link na jaki kategoria jest zamieniana (bez pl znaków itd)');           
            $table->string('icon', 75)->comment('ikona wyświetlana przy kategorii, z globalnego repozytorium ');
            $table->integer('popular')->comment('czy ta kategoria ma sie pojawiac w najpopularniejszych (do ograniczania list)');
            $table->string('description', 250)->comment('opis, taki skrócony / przykładowy - żeby cielaczki wiedziały co gdzie wpisywać');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('estates_categories');
    }
}
