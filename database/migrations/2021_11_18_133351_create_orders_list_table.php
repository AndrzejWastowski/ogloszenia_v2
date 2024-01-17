<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_list', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->comment('id zamówienia');
            $table->string('name')->comment('nazwa towaru');
            $table->string('description')->nullable()->comment('dodatkowy opis towaru (opcjonalnie)');
            $table->integer('quantity')->comment('Ilość sztuk');
            $table->integer('price')->comment('Cena jednostkowa w groszach');
            $table->integer('number')->nullable()->comment('/ID towaru w systemie sprzedawcy (opcjonalnie)]');
            
       
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
        Schema::dropIfExists('orders_list');
    }
}
