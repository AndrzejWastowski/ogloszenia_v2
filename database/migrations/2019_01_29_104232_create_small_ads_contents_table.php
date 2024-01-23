<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateSmallAdsContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('small_ads_contents', function (Blueprint $table) {

            //podstawowe dane specyficzne dla danego ogloszczenia
            $table->increments('id')->comment('unikatowy identyfikator');

            $table->string('name', 250)->comment('nazwa sprzedawanego towaru');
            $table->enum('condition', ['nowe','używane'])->comment('rodzaj sprzedawanego produktu - nowy czy uzywany');
            $table->text('lead')->comment('krótki opis sprzedawanego towaru, max 512 znaków')->collation('utf8_polish_ci');
            $table->text('description')->comment('opis sprzedawanego towaru')->collation('utf8_polish_ci');
            $table->integer('items')->unsigned()->comment('ilosc sztuk');
            $table->decimal('price', 10, 2)->comment('cena');
            $table->integer('small_ads_categories_id')->unsigned()->comment('kategoria towaru');
            $table->integer('small_ads_sub_categories_id')->unsigned()->comment('podkategoria towaru połączona z kategorią');
            $table->integer('small_ads_user_group_id')->unsigned()->default(0)->comment('wewnętrzna grupa użytkownika (opcjonalnie) jeśli sprzedaje kilka przedmiotów tego typu');
            $table->enum('small_ads_classified_enum', ['sprzedam','kupię','zamienię','oddam','wypożyczę'])->comment('typ ogłoszenia, sprzedak kupie zamienie itd..');           
            $table->string('contact_phone',100)->nullable()->comment('kontakt tel do sprzedawcy');
            $table->string('contact_email',200)->nullable()->comment('kontakt e-mail do sprzedawcy');
            $table->enum('invoice', ['Nie wystawiam faktury','Faktura VAT','Faktura Vat-marża','Faktura bez VAT'])->comment('rodzaj dokumentu sprzedaży, faktura, paragon itd..');           

            //dane wspolne dla kazdego ogloszenia
            $table->integer('users_id')->unsigned()->comment('id użytkownika który dodał ogłoszenie');
            $table->integer('adresses_id')->nullable()->unsigned()->comment('polaczenie do kontaktu adresowego');
            $table->enum('status',['unfinished','active','disabled','removed','blocked'])->default('unfinished')->comment('active - normalne opłacone ogłoszenie, disabled - wyłaczone przez uzytkownika lub z wygasłym terminem, mozliwe do ponowienia, removed - usunięte przez moderatora, nie wyświetla się użytkownikowi, blocked - zablokowane do wyjaśnienia do wyjasnienia, nie mozna go ponowić');
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
        Schema::dropIfExists('small_ads_contents');
    }
}
