<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->ipAddress('sercions_id')->comment('id sekcji której dotyczy dany log');
            $table->ipAddress('number_id')->comment('id konkretnego ogłoszenia dla danej sekcji którego dotyczy wpis');
            $table->ipAddress('visitor_ip')->comment('ip użytkownika');
            $table->string('visitor_host', 250)->nullable($value = true)->comment('dane z hosta (rev dns) użytkownika'); //rev dns hosta użytkownika - przydtne żeby szybko zlokalizować usługodawcę
            $table->string('visitor_soft', 250)->nullable($value = true)->comment('dane przeglądarki system itd..'); //wiem że to może się wydawać zbyteczne ale czasem policji się przydaje
            $table->string('visitor_proxy', 250)->nullable($value = true)->comment('dane proxy przez które się łączył'); //wiem że to może się wydawać zbyteczne ale czasem policji się przydaje
            $table->smallInteger('visitor_port')->unsigned();
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
        Schema::dropIfExists('logs');
    }
}
