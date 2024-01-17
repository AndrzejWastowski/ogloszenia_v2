<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCarsContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_contents', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name', 250)->comment('nazwa sprzedawanego samochodu, np. super Opel Astra! Niemiec płakał jak sprzedawał...');
            $table->text('lead')->comment('krótki opis sprzedawanego samochodu do wyświetlania na liście')->collation('utf8_polish_ci');
            $table->text('description')->comment('opis sprzedawanego samochodu')->collation('utf8_polish_ci');
            $table->integer('cars_brands_id')->unsigned()->comment('marka pojazdu');
            $table->integer('cars_models_id')->unsigned()->comment('model pojazdu');
            $table->integer('cars_body_id')->unsigned()->comment('nadwozie sedan kombi itd.. zróżnicowane od modelu');            
            $table->year('date_production')->comment('data produkcji');
            $table->year('date_registration')->comment('data pierwszej rejestracji');
            $table->string('country_registration',50)->comment('kraj rejestracji - z którego pochodzi auto');
            $table->integer('power')->unsigned()->comment('moc silnika (Konie mechaniczne)');
            $table->enum('fuel_type',['Benzyna','Olej napędowy','Gaz LPG','Gaz CNG','Elektryczny','Hybryda','Wodór'])->comment('rodzaj paliwa');
            $table->integer('capacity')->unsigned()->comment('pojemnosc (cm 3)');
            $table->unsignedTinyInteger('doors_number')->comment('liczba drzwi');
            $table->unsignedTinyInteger('seats')->comment('liczba miejsc siedzących');
            $table->enum('condition', ['nowy','używany'])->comment('stan pojazdu - nowy / używany');
            $table->integer('technical_condition')->unsigned()->comment('uszkodzony / sprawny');
            $table->integer('accident')->unsigned()->comment('bezywpadkowy');
            $table->decimal('price', 11, 2)->comment('Cena?');
            $table->string('contact_phone',100)->nullable()->comment('kontakt tel do sprzedawcy');  
            $table->string('contact_email',200)->nullable()->comment('kontakt e-mail do sprzedawcy');  
            $table->enum('invoice',['Nie wystawiam faktury','Faktura VAT','Faktura Vat-marża','Faktura bez VAT'])->comment('rodzaj wystawianego rachunku');
            
     
            //dane wspolne dla kazdego ogloszenia
            $table->integer('users_id')->comment('id użytkownika który dodał ogłoszenie ');
            $table->integer('adresses_id')->nullable()->unsigned()->comment('polaczenie do kontaktu adresowego');  
            $table->enum('status',['unfinished','active','disabled','removed','blocked'])->default('unfinished')->comment('active - normalne opłacone ogłoszenie, disabled - wyłaczone przez uzytkownika lub z wygasłym terminem, mozliwe do ponowienia, removed - usunięte przez moderatora, nie wyświetla się użytkownikowi, blocked - zablokowane do wyjaśnienia do wyjasnienia, nie mozna go ponowić');
            $table->timestamp('date_add')->useCurrent()->comment('data dodania ogłoszenia');
            $table->dateTime('date_start')->comment('data pojawienia się ogłoszenia na portalu (można zrobić opóźnienie)');
            $table->dateTime('date_end')->comment('data_waznosci');
            $table->tinyInteger('portal_id')->unsigned()->default(0)->comment('id portalu z którego uzytkownik dodawał ogłoszenie');                        
            $table->integer('views')->unsigned()->default(0)->comment('ile było odsłon danego ogłoszenia, do statystyk');            

            //informacje reklamowe
            
            $table->tinyInteger('master_portal')->default(0)->comment('czy ogłoszenie jest wyswietlane na portalu nadrzędnym jako reklama');
            $table->tinyInteger('promoted')->default(0)->comment('czy ogłoszenie jest promowane - przed innymi');            
            $table->tinyInteger('top')->default(0)->comment('czy ogłoszenie jest promowane - przed innymi');            
            $table->enum('highlighted', ['#ffffff','#c8cdff','#ffc8dd','#c8ffdf','#eac8ff','#fff7c8'])->default('#ffffff')->comment('czy ogłoszenie jest wyróżnione (kolor)');            
            $table->enum('inscription',['none','Promocja!','Wyprzedaż','Przecena','Bestseller'])->default('none')->comment('active - normalne opłacone ogłoszenie, disabled - wyłaczone przez uzytkownika lub z wygasłym terminem, mozliwe do ponowienia, removed - usunięte przez moderatora, nie wyświetla się użytkownikowi, blocked - zablokowane do wyjaśnienia do wyjasnienia, nie mozna go ponowić');
            
            //logi dotyczące ogłoszenia
            
            $table->ipAddress('adress_ip')->default(0)->comment('adres IP użytkownika do logów ');
            $table->string('host')->nullable()->comment('Host - wpis pobrany z serwera');
            $table->integer('port')->nullable()->comment('port z którym nastąpiło połączenie');
            $table->string('browser')->nullable()->comment('Host - wpis pobrany z serwera');            
            
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
        Schema::dropIfExists('cars_contents');
    }
}
