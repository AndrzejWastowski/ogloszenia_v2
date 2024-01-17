<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Tabela zawierająca adresy, czasem ktoś wystawia za kogoś ogłoszenie grzecznościowe, albo ma kilka adresów z danymi... oddziały, więc będzie mu łatwiej tym "żonglować". A dla tych co używają 1 adresu do sprzedaży swoich rzeczy uprości to wystawianie ogłoszeń, bo nie musi za każdym razem wpisywać od nowa danych i w jednym miejscu może zaktualizować wszystkie ogłoszenia. */
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id')->comment('unikatowy identyfikator');
            $table->integer('users_id')->unsigned()->comment('id użytkownika którego dotyczy wiersz');
            $table->tinyInteger('active')->length(1)->default(1)->comment('czy adres jest aktywny czy nieaktywny');
            $table->string('name', 75)->comment('nazwa adresata - imie');
            $table->string('surname', 150)->comment('nazwisko adresata adresata');
            $table->string('city', 50)->comment('miasto docelowe');
            $table->string('street', 250)->comment('ulica');
            $table->integer('zip_code')->length(5)->comment('kod pocztowy');
            $table->string('post_office', 150)->comment('poczta - biuro');
            $table->string('country', 150)->default('pl')->comment('państwo docelowe');
            $table->string('phone', 150)->comment('telefon');
            $table->string('mail', 150)->comment('mail kontaktowy');
            $table->ipAddress('visitor_ip')->comment('ip użytkownika');
            $table->string('visitor_host', 250)->nullable($value = true)->comment('dane z hosta (rev dns) użytkownika'); //rev dns hosta użytkownika - przydtne żeby szybko zlokalizować usługodawcę
            $table->string('visitor_soft', 250)->nullable($value = true)->comment('dane przeglądarki system itd..'); //wiem że to może się wydawać zbyteczne ale czasem policji się przydaje
            $table->string('visitor_proxy', 250)->nullable($value = true)->comment('dane proxy przez które się łączył'); //wiem że to może się wydawać zbyteczne ale czasem policji się przydaje
            $table->smallInteger('visitor_port')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });

        DB::statement('ALTER TABLE `adresses` comment = "Tabela zawierająca adresy, czasem ktoś wystawia za kogoś ogłoszenie grzecznościowe, albo ma kilka adresów z danymi... oddziały, więc będzie mu łatwiej tym żonglować. A dla tych co używają 1 adresu do sprzedaży swoich rzeczy uprości to wystawianie ogłoszeń, bo nie musi za każdym razem wpisywać od nowa danych i w jednym miejscu może zaktualizować wszystkie ogłoszenia."');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
