<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricesSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //ogloszenia drobne
  
        DB::table('prices')->insert(['name' => 'master_portal_7','description'=>'Wyświetl na głownym portalu 7 dni', 'price'=>2000,'section'=>'small_ads' ]);
        DB::table('prices')->insert(['name' => 'master_portal_14','description'=>'Wyświetl na głownym portalu 14dni', 'price'=>3800,'section'=>'small_ads' ]);
        DB::table('prices')->insert(['name' => 'master_portal_30','description'=>'Wyświetl na głownym portalu 30 dni', 'price'=>5400,'section'=>'small_ads' ]);

        DB::table('prices')->insert(['name' => 'promoted_7', 'description'=>'Wyświetl nad innymi ogłoszeniami 7 dni', 'price'=>1000,'section'=>'small_ads' ]);
        DB::table('prices')->insert(['name' => 'promoted_14','description'=>'Wyświetl nad innymi ogłoszeniami 14 dni', 'price'=>1500,'section'=>'small_ads' ]);
        DB::table('prices')->insert(['name' => 'promoted_30', 'description'=>'Wyświetl nad innymi ogłoszeniami 30 dni', 'price'=>3000,'section'=>'small_ads' ]);;

        DB::table('prices')->insert(['name' => 'highlighted_7',  'description'=>'Kolorowe tło 7 dni', 'price'=>800,'section'=>'small_ads' ]);
        DB::table('prices')->insert(['name' => 'highlighted_14', 'description'=>'Kolorowe tło 14 dni', 'price'=>1400, 'section'=>'small_ads' ]);
        DB::table('prices')->insert(['name' => 'highlighted_30', 'description'=>'Kolorowe tło 30 dni', 'price'=>2500, 'section'=>'small_ads' ]);
                
        DB::table('prices')->insert(['name' => 'inscription_7', 'description'=>'Wyróżnicający napis 7 dni', 'price'=>300,'section'=>'small_ads' ]);
        DB::table('prices')->insert(['name' => 'inscription_14', 'description'=>'Wyróżnicający napis 14 dni', 'price'=>500,'section'=>'small_ads' ]);
        DB::table('prices')->insert(['name' => 'inscription_30', 'description'=>'Wyróżnicający napis 30 dni', 'price'=>800,'section'=>'small_ads' ]);

        DB::table('prices')->insert(['name' => 'newspaper_advertisement', 'description'=>'Ogłoszenie w gazecie', 'price'=>900,'section'=>'small_ads' ]);
        DB::table('prices')->insert(['name' => 'newspaper_frame', 'description'=>'Ramka wokół ogłoszenia', 'price'=>300,'section'=>'small_ads' ]);
        DB::table('prices')->insert(['name' => 'newspaper_background', 'description'=>'Wydrkuj naszarym tle', 'price'=>300,'section'=>'small_ads' ]);
        DB::table('prices')->insert(['name' => 'newspaper_photo', 'description'=>'Ogłoszenie w gazecie', 'price'=>1000,'section'=>'small_ads' ]);

        //usługi

        DB::table('prices')->insert(['name' => 'master_portal_7','description'=>'Wyświetl na głownym portalu 7 dni', 'price'=>2000,'section'=>'services' ]);
        DB::table('prices')->insert(['name' => 'master_portal_14','description'=>'Wyświetl na głownym portalu 14 dni', 'price'=>3800,'section'=>'services' ]);
        DB::table('prices')->insert(['name' => 'master_portal_30','description'=>'Wyświetl  na głownym portalu 30 dni', 'price'=>5400,'section'=>'services' ]);

        DB::table('prices')->insert(['name' => 'promoted_7', 'description'=>'Wyświetl nad zwykłymi ogłoszeniami 7 dni', 'price'=>1000,'section'=>'services' ]);
        DB::table('prices')->insert(['name' => 'promoted_14','description'=>'Wyświetl nad zwykłymi ogłoszeniami 14 dni', 'price'=>1500,'section'=>'services' ]);
        DB::table('prices')->insert(['name' => 'promoted_30', 'description'=>'Wyświetl nad zwykłymi ogłoszeniami 30 dni', 'price'=>3000,'section'=>'services' ]);;

        DB::table('prices')->insert(['name' => 'highlighted_7',  'description'=>'Kolorowe tło 7 dni', 'price'=>800,'section'=>'services' ]);
        DB::table('prices')->insert(['name' => 'highlighted_14', 'description'=>'Kolorowe tło 14 dni', 'price'=>1400, 'section'=>'services' ]);
        DB::table('prices')->insert(['name' => 'highlighted_30', 'description'=>'Kolorowe tło 30 dni', 'price'=>2500, 'section'=>'services' ]);
                
        DB::table('prices')->insert(['name' => 'inscription_7', 'description'=>'Wyróżnicający napis 7 dni', 'price'=>300,'section'=>'services' ]);
        DB::table('prices')->insert(['name' => 'inscription_14', 'description'=>'Wyróżnicający napis 14 dni', 'price'=>500,'section'=>'services' ]);
        DB::table('prices')->insert(['name' => 'inscription_30', 'description'=>'Wyróżnicający napis 30 dni', 'price'=>800,'section'=>'services' ]);

        DB::table('prices')->insert(['name' => 'newspaper_advertisement', 'description'=>'Ogłoszenie w gazecie', 'price'=>900,'section'=>'services' ]);
        DB::table('prices')->insert(['name' => 'newspaper_frame', 'description'=>'Ramka wokół ogłoszenia', 'price'=>300,'section'=>'services' ]);
        DB::table('prices')->insert(['name' => 'newspaper_background', 'description'=>'Wydrkuj na szarym tle', 'price'=>300,'section'=>'services' ]);
        DB::table('prices')->insert(['name' => 'newspaper_photo', 'description'=>'Ogłoszenie w gazecie', 'price'=>1000,'section'=>'services' ]);

        //praca

        DB::table('prices')->insert(['name' => 'master_portal_7','description'=>'Wyświetl na głownym portalu 7 dni', 'price'=>2000,'section'=>'job' ]);
        DB::table('prices')->insert(['name' => 'master_portal_14','description'=>'Wyświetl na głownym portalu 14dni', 'price'=>3800,'section'=>'job' ]);
        DB::table('prices')->insert(['name' => 'master_portal_30','description'=>'Wyświetl na głownym portalu 30 dni', 'price'=>5400,'section'=>'job' ]);

        DB::table('prices')->insert(['name' => 'promoted_7', 'description'=>'Wyświetl nad zwykłymi ogłoszeniami 7 dni', 'price'=>1000,'section'=>'job' ]);
        DB::table('prices')->insert(['name' => 'promoted_14','description'=>'Wyświetl nad zwykłymi ogłoszeniami 14 dni', 'price'=>1500,'section'=>'job' ]);
        DB::table('prices')->insert(['name' => 'promoted_30', 'description'=>'Wyświetl nad zwykłymi ogłoszeniami 30 dni', 'price'=>3000,'section'=>'job' ]);;

        DB::table('prices')->insert(['name' => 'highlighted_7',  'description'=>'Kolorowe tło 7 dni', 'price'=>800,'section'=>'job' ]);
        DB::table('prices')->insert(['name' => 'highlighted_14', 'description'=>'Kolorowe tło 14 dni', 'price'=>1400, 'section'=>'job' ]);
        DB::table('prices')->insert(['name' => 'highlighted_30', 'description'=>'Kolorowe tło 30 dni', 'price'=>2500, 'section'=>'job' ]);
                
        DB::table('prices')->insert(['name' => 'inscription_7', 'description'=>'Wyróżnicający napis 7 dni', 'price'=>300,'section'=>'job' ]);
        DB::table('prices')->insert(['name' => 'inscription_14', 'description'=>'Wyróżnicający napis 14 dni', 'price'=>500,'section'=>'job' ]);
        DB::table('prices')->insert(['name' => 'inscription_30', 'description'=>'Wyróżnicający napis 30 dni', 'price'=>800,'section'=>'job' ]);

        DB::table('prices')->insert(['name' => 'newspaper_advertisement', 'description'=>'Ogłoszenie w gazecie', 'price'=>900,'section'=>'job' ]);
        DB::table('prices')->insert(['name' => 'newspaper_frame', 'description'=>'Ramka wokół ogłoszenia', 'price'=>300,'section'=>'job' ]);
        DB::table('prices')->insert(['name' => 'newspaper_background', 'description'=>'Wydrkuj naszarym tle', 'price'=>300,'section'=>'job' ]);
        DB::table('prices')->insert(['name' => 'newspaper_photo', 'description'=>'Ogłoszenie w gazecie', 'price'=>1000,'section'=>'job' ]);

        //nieruchomości
        
        DB::table('prices')->insert(['name' => 'master_portal_7','description'=>'Wyświetl na głownym portalu 7 dni', 'price'=>2000,'section'=>'estates' ]);
        DB::table('prices')->insert(['name' => 'master_portal_14','description'=>'Wyświetl na głownym portalu 14dni', 'price'=>3800,'section'=>'estates' ]);
        DB::table('prices')->insert(['name' => 'master_portal_30','description'=>'Wyświetl na głownym portalu 30 dni', 'price'=>5400,'section'=>'estates' ]);

        DB::table('prices')->insert(['name' => 'promoted_7', 'description'=>'Wyświetl nad zwykłymi ogłoszeniami 7 dni', 'price'=>1000,'section'=>'estates' ]);
        DB::table('prices')->insert(['name' => 'promoted_14','description'=>'Wyświetl nad zwykłymi ogłoszeniami 14 dni', 'price'=>1500,'section'=>'estates' ]);
        DB::table('prices')->insert(['name' => 'promoted_30', 'description'=>'Wyświetl nad zwykłymi ogłoszeniami 30 dni', 'price'=>3000,'section'=>'estates' ]);;

        DB::table('prices')->insert(['name' => 'highlighted_7',  'description'=>'Kolorowe tło 7 dni', 'price'=>800,'section'=>'estates' ]);
        DB::table('prices')->insert(['name' => 'highlighted_14', 'description'=>'Kolorowe tło 14 dni', 'price'=>1400, 'section'=>'estates' ]);
        DB::table('prices')->insert(['name' => 'highlighted_30', 'description'=>'Kolorowe tło 30 dni', 'price'=>2500, 'section'=>'estates' ]);
                
        DB::table('prices')->insert(['name' => 'inscription_7', 'description'=>'Wyróżnicający napis 7 dni', 'price'=>300,'section'=>'estates' ]);
        DB::table('prices')->insert(['name' => 'inscription_14', 'description'=>'Wyróżnicający napis 14 dni', 'price'=>500,'section'=>'estates' ]);
        DB::table('prices')->insert(['name' => 'inscription_30', 'description'=>'Wyróżnicający napis 30 dni', 'price'=>800,'section'=>'estates' ]);

        DB::table('prices')->insert(['name' => 'newspaper_advertisement', 'description'=>'Ogłoszenie w gazecie', 'price'=>900,'section'=>'estates' ]);
        DB::table('prices')->insert(['name' => 'newspaper_frame', 'description'=>'Ramka wokół ogłoszenia', 'price'=>300,'section'=>'estates' ]);
        DB::table('prices')->insert(['name' => 'newspaper_background', 'description'=>'Wydrkuj naszarym tle', 'price'=>300,'section'=>'estates' ]);
        DB::table('prices')->insert(['name' => 'newspaper_photo', 'description'=>'Ogłoszenie w gazecie', 'price'=>1000,'section'=>'estates' ]);

        // motoryzacja

        DB::table('prices')->insert(['name' => 'master_portal_7','description'=>'Wyświetl na głownym portalu 7 dni', 'price'=>2000,'section'=>'cars' ]);
        DB::table('prices')->insert(['name' => 'master_portal_14','description'=>'Wyświetl na głownym portalu 14dni', 'price'=>3800,'section'=>'cars' ]);
        DB::table('prices')->insert(['name' => 'master_portal_30','description'=>'Wyświetl na głownym portalu 30 dni', 'price'=>5400,'section'=>'cars' ]);

        DB::table('prices')->insert(['name' => 'promoted_7', 'description'=>'Wyświetl nad zwykłymi  ogłoszeniami 7 dni', 'price'=>1000,'section'=>'cars' ]);
        DB::table('prices')->insert(['name' => 'promoted_14','description'=>'Wyświetl nad zwykłymi ogłoszeniami 14 dni', 'price'=>1500,'section'=>'cars' ]);
        DB::table('prices')->insert(['name' => 'promoted_30', 'description'=>'Wyświetl nad zwykłymi ogłoszeniami 30 dni', 'price'=>3000,'section'=>'cars' ]);;

        DB::table('prices')->insert(['name' => 'highlighted_7',  'description'=>'Kolorowe tło 7 dni', 'price'=>800,'section'=>'cars' ]);
        DB::table('prices')->insert(['name' => 'highlighted_14', 'description'=>'Kolorowe tło 14 dni', 'price'=>1400, 'section'=>'cars' ]);
        DB::table('prices')->insert(['name' => 'highlighted_30', 'description'=>'Kolorowe tło 30 dni', 'price'=>2500, 'section'=>'cars' ]);
                
        DB::table('prices')->insert(['name' => 'inscription_7', 'description'=>'Wyróżnicający napis 7 dni', 'price'=>300,'section'=>'cars' ]);
        DB::table('prices')->insert(['name' => 'inscription_14', 'description'=>'Wyróżnicający napis 14 dni', 'price'=>500,'section'=>'cars' ]);
        DB::table('prices')->insert(['name' => 'inscription_30', 'description'=>'Wyróżnicający napis 30 dni', 'price'=>800,'section'=>'cars' ]);

        DB::table('prices')->insert(['name' => 'newspaper_advertisement', 'description'=>'Ogłoszenie w gazecie', 'price'=>900,'section'=>'cars' ]);
        DB::table('prices')->insert(['name' => 'newspaper_frame', 'description'=>'Ramka wokół ogłoszenia', 'price'=>300,'section'=>'cars' ]);
        DB::table('prices')->insert(['name' => 'newspaper_background', 'description'=>'Wydrkuj naszarym tle', 'price'=>300,'section'=>'cars' ]);
        DB::table('prices')->insert(['name' => 'newspaper_photo', 'description'=>'Ogłoszenie w gazecie', 'price'=>1000,'section'=>'cars' ]);
        
        
    }
}
