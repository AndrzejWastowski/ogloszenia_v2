<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewspaperAdvertisementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newspaper_advertisement', function (Blueprint $table) {
            $table->id();
            $table->integer('newspaper_id');
            $table->integer('advertisement_id');
            $table->enum('advertisement_type',['small_ads','estates','services','cars','job']   );
            $table->integer('payments_id');
            $table->date('date')->comment('data zgłoszenia');
            $table->enum('status',['active','disabled','removed','blocked','realized'])->default('active')->comment('active - normalne działająca gazeta');
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
        Schema::dropIfExists('newspaper_advertisement');
    }
}
