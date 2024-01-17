<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCarsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('rodzaj samochodu, ciezarowka, osobowka, trójkół ;)');
            $table->text('description')->comment('opis sprzedawanego samochodu')->collation('utf8_polish_ci');
            $table->integer('user_id')->unsigned()->comment('id użytkownika który dodał ogłoszenie');
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
        Schema::dropIfExists('cars_types');
    }
}
