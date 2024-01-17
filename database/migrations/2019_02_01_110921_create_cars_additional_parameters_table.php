<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsAdditionalParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // parametry są jeszcze do przemyslenia, jakas tabela parametrów opcjonalnych + tabela z wartosciami ?
        // czy wolne pola które daja po prostu mozliwosc wypełnienia tego co sie chce i jak sie chce?
        // to moze zrobic wiekszy bajzel w bazie, ale daje wieksza dowolnosc userom i umozliwi ich kreatywnosc...
        // tylko czy napewno tego chcemy? A jak zaczna sie reklamowac w parametrach albo inne bzdury wypisywać?

        Schema::create('cars_additional_parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parametr', 250)->comment('parametr dodatkowy, klimatyzacja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars_additional_parameters');
    }
}
