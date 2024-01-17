<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();            
            $table->string('name');
            $table->string('payments_id');            
            $table->integer('addons_id')->comment('id ogłoszenia');            
            $table->enum('section',['small_ads','cars','estates','job','services','truck'])->comment('sekcja której dotyczy płatność');
            $table->string('users_id');
            $table->enum('status',['paid','in progres','unpaid','canceled'])->default('unpaid')->comment('unpaid');
            $table->integer('price_summary')->comment('unpaid');
            
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
        Schema::dropIfExists('orders');
    }
}
