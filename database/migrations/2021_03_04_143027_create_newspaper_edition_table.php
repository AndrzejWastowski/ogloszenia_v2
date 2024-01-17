<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewspaperEditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newspaper_edition', function (Blueprint $table) {
            $table->id();
            $table->integer('newspaper_id');
            $table->date('date')->comment('dzień w którym ukaże się gazeta ');
            $table->string('description')->nullable();
            $table->enum('status',['active','disabled','removed','blocked'])->default('active')->comment('active - normalne działająca gazeta');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newspaper_edition');
    }
}
