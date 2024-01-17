<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateJobContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company')->comment('firma która szuka pracownika');
            $table->string('position')->comcommentent('stanowisko na jakie jest użytkownik poszukiwany');
            $table->integer('pay')->unsigned()->comment('przewidywane / oferowane wynagrodznie');
            $table->text('description')->comment('opis stanoiwska pracy / wymagań na pracownika itd');
            $table->tinyInteger('portal_id')->unsigned()->comment('id portalu z którego uzytkownik dodawał ogłoszenie');
            $table->dateTime('date_start')->comment('data pojawienia się ogłoszenia na portalu (można zrobić opóźnienie)');
            $table->dateTime('date_end')->comment('data_waznosci');            
            $table->unsignedTinyInteger('inscription')->comment('czy ogłoszenie jest rekomendowane');
            $table->enum('highlighted', ['#ffffff','#cfbcf8','#bcf8bc','#f1f8bc','#f8c0bc','#f8bcf5'])->default("#ffffff")->comment('czy ogłoszenie jest wyróżnione (kolor)');
            $table->unsignedTinyInteger('promoted')->comment('czy ogłoszenie jest promowane (przed innymi)');
            $table->integer('views')->unsigned()->default(0)->comment('ile było odsłon danego ogłoszenia, do statystyk');
            $table->enum('invoice', ['Nie wystawiam faktury','Faktura VAT','Faktura Vat-marża','Faktura bez VAT'])->comment('rodzaj dokumentu sprzedaży, faktura, paragon itd..');
            $table->unsignedTinyInteger('active')->default(0)->comment('czy ogloszenie jet aktywne (ustawiane jak cała procedura dodawania ogłoszenia dojdzie do konca)');
            $table->ipAddress('visitor_ip')->comment('ip użytkownika');
            $table->string('visitor_host', 250)->nullable($value = true)->comment('dane z hosta (rev dns) użytkownika'); //rev dns hosta użytkownika - przydtne żeby szybko zlokalizować usługodawcę
            $table->string('visitor_soft', 250)->nullable($value = true)->comment('dane przeglądarki system itd..'); //wiem że to może się wydawać zbyteczne ale czasem policji się przydaje
            $table->string('visitor_proxy', 250)->nullable($value = true)->comment('dane proxy przez które się łączył'); //wiem że to może się wydawać zbyteczne ale czasem policji się przydaje
            $table->smallInteger('visitor_port')->unsigned();
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
        Schema::dropIfExists('job_contents');
    }
}
