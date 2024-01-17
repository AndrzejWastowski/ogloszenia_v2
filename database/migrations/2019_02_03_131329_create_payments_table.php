<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('users_id');  
            $table->integer('orders_id')->comment('id zamowienia');
            $table->string('p24_session_id',100);
            $table->integer('p24_amount');
            $table->string('p24_description',1024);
            $table->string('p24_email',50);
            $table->string('p24_client',50);
            $table->string('p24_address',80);
            $table->string('p24_zip',10);
            $table->string('p24_city',50);
            $table->string('p24_country',2);
            $table->string('p24_phone',12);
            $table->string('p24_language');
            $table->string('p24_transfer_label',20); 
            
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
        Schema::dropIfExists('payments');
    }
}
