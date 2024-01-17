<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmallAdsCategoriesSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        
        //1
        DB::table('small_ads_categories')->insert([
            'name'=> 'Antyki / Sztuka / Kolekcje',
            'link'=> 'antyki',
            'icon'=> 'fas fa-grin-hearts',
            'popular'=> '1',
            'description'=> 'kolekcje, numizmatyka, fialatelistyka starocie'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'antyki',
            'name' => 'Antyki'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'malarstwo',
            'name' => 'Malarstwo'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'kolekcje',
            'name' => 'Kolekcje'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'militaria',
            'name' => 'Militaria'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'rekodzielo',
            'name' => 'Rękodzieło'
        ]];


        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }

        DB::table('small_ads_categories')->insert([
            'name'=> 'Zoologiczne',
            'link'=> 'zoologiczne',
            'icon'=> '',
            'popular'=> '0',
            'description'=> 'smycze, karmniki, zwierzęta'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'dla_psow',
            'name' => 'Dla psów'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'dla_kotow',
            'name' => 'Dla kotów'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'gryzonie',
            'name' => 'Gryzonie'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'ptaki',
            'name' => 'Ptaki'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'gady_plazy',
            'name' => 'Gady i płazy'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'stawonogi',
            'name' => 'Pająki / skorpiony / stawonogi'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'pozostale_zwierzaki',
            'name' => 'Pozostałe zwierzaki'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            // $this->command->info($key);
        }

        DB::table('small_ads_categories')->insert([
            'name'=> 'Artykuły Biurowe',
            'link'=> 'artykuly_biurowe',
            'icon'=> 'fas fa-building',
            'popular'=> '1',
            'description'=> 'niszczarki, art biurowe'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'maszyny_urzadzenia',
            'name' => 'Maszyny i urządzenia'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'materialy_biurowe',
            'name' => 'Materiały i akcesoria'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'meble_biurowe',
            'name' => 'Meble biurowe'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'sklep_magazyn',
            'name' => 'Sklep i magazyn'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'reklamowe',
            'name' => 'Materiały reklamowe'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Biżuteria i zegarki',
            'link'=> 'bizuteria_zegarki',
            'icon'=> '',
            'popular'=> '0',
            'description'=> ''
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'bizuteria',
            'name' => 'Biżuteria'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'zegarki_meskie',
            'name' => 'Zegarki męskie'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'zegarki_damskie',
            'name' => 'Zegarki damskie'
        ]];

        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Dom i ogród',
            'link'=> 'dom_i_ogrod',
            'icon'=> 'fas fa-home',
            'popular'=> '1',
            'description'=> 'Dom i ogród'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'meble',
            'name' => 'Meble'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'wyposazenie_wnetrz',
            'name' => 'Wyposażenie wnętrz'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'budownictwo_akcesoria',
            'name' => 'Budownictwo i akcesoria'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'oswietlenie',
            'name' => 'Oświetlenie'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'narzedzia_ogrodnicze',
            'name' => 'Narzędzia ogrodnicze'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'rosliny',
            'name' => 'Rośliny'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'nawadnianie',
            'name' => 'Nawadnianie ogrodu'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Artykuły budlowlane',
            'link'=> 'artykuly_budowlane',
            'icon'=> '',
            'popular'=> '0',
            'description'=> ''
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'materialy_budowlane',
            'name' => 'Materiały budowlane'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'narzedzia_budowlane',
            'name' => 'Narzędzia budowlane'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Dziecko',
            'link'=> 'dziecko',
            'icon'=> 'fas fa-baby',
            'popular'=> '1',
            'description'=> ''
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'zabawki',
            'name' => 'Zabawki i pojazdy'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'wyprawka_niemowlaka',
            'name' => 'Wyprawka niemowlaka'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }

        DB::table('small_ads_categories')->insert([
            'name'=> 'Zdrowie',
            'link'=> 'zdrowie',
            'icon'=> 'fas fa-heartbeat',
            'popular'=> '1',
            'description'=> 'ochudzanie, oczyszczanie, higiena, urządzenia medyczne'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'odchudzanie',
            'name' => 'Odchudzanie'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'suplementy_diety',
            'name' => 'Suplementy dniety'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }
        
        DB::table('small_ads_categories')->insert([
            'name'=> 'Uroda',
            'link'=> 'uroda',
            'icon'=> '',
            'popular'=> '1',
            'description'=> 'kosmetyki, olejki do masażu'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link' => 'perfumy',
            'name' => 'Perfumy'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link' => 'makijaz',
            'name' => 'Makijaż'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link' => 'manicure',
            'name' => 'Manicure i Pedicure'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link' => 'pielegnacja_ciala',
            'name' => 'Pielęgnacja ciała'
        ]
    ];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }

        DB::table('small_ads_categories')->insert([
            'name'=> 'Elektronika',
            'link'=> 'elektronika',
            'icon'=> 'fas fa-laptop',
            'popular'=> '1',
            'description'=> ''
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'rtv',
            'name' => 'Sprzet RTV / TV i Video '
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'sprzet_audio',
            'name' => 'Sprzęt audio'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'glosniki_sluchawki',
            'name' => 'Głośniki i słuchawki'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'agd_wolnostojace',
            'name' => 'AGD wolnostojące'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'smartfony_akcesoria',
            'name' => 'Smartfony i akcesoria'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'komputery_laptopy',
            'name' => 'Komputery i laptopy'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'agd_zabudowa',
            'name' => 'AGD - zabudowa'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'drobny_sprzet',
            'name' => 'Drobny sprzęt domowy'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'konsole',
            'name' => 'Konsole i gry'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'fotografia',
            'name' => 'Fotografia'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //    $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Muzyka - Instrumenty',
            'link'=> 'muzyka_instrumenty',
            'icon'=> '',
            'popular'=> '0',
            'description'=> 'instrumenty muzyczne'
        ]);
        
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'strunowe',
            'name' => 'Strunowe'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'dete',
            'name' => 'Dęte'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Książka / Komiks',
            'link'=> 'ksiazka_komiks',
            'icon'=> '',
            'popular'=> '0',
            'description'=> ''
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'ksiazki',
            'name' => 'Książki'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'poradniki',
            'name' => 'Poradniki'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'podręczniki',
            'name' => 'Podreczniki'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'mapy',
            'name' => 'Mapy'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'komiksy',
            'name' => 'Komiksy'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Elektronarzędzia',
            'link'=> 'elektronarzedzia',
            'icon'=> 'fas fa-tools',
            'popular'=> '1',
            'description'=> 'wiertarki, tokarki'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'reczne',
            'name' => 'Ręczne'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'stacjonarne',
            'name' => 'Stacjonarne'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //   $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Rolnictwo',
            'link'=> 'rolnictwo',
            'icon'=> 'fas fa-tractor',
            'popular'=> '1',
            'description'=> ''
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'rolnictwo',
            'name' => 'CL'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'rolnictwo',
            'name' => 'Legend'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Sport ',
            'link'=> 'sport',
            'icon'=> 'fas fa-volleyball-ball',
            'popular'=> '1',
            'description'=> 'ciężarki, sprężyny '
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'rower',
            'name' => 'Rowery i akcesoria'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'druzynowe',
            'name' => 'Sporty drużynowe'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'bieganie',
            'name' => 'Bieganie'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Turystyka',
            'link'=> 'turystyka',
            'icon'=> 'fas fa-luggage-cart',
            'popular'=> '1',
            'description'=> 'plecaki, namioty, plecaki, karimaty'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'namioty',
            'name' => 'Namioty i akcesoria'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'odziez',
            'name' => 'Odzież turystyczna'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'bagaz',
            'name' => 'Torby, plecaki, bagaż'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'kuchnia',
            'name' => 'Kuchnia turystyczna'
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'nocleg',
            'name' => 'Śpiwory, materace'
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Siłownia i fitnes',
            'link'=> 'fitnes',
            'icon'=> 'fas fa-luggage-cart',
            'popular'=> '1',
            'description'=> 'T'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'namioty',
            'name' => 'Namioty i akcesoria'
        ]];
        
        DB::table('small_ads_categories')->insert([
            'name'=> 'Moda',
            'link'=> 'moda',
            'icon'=> 'fas fa-tshirt',
            'popular'=> '1',
            'description'=> 'ubrania, czapki, okulary'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'small_ads_categories_id'=> $LAST_ID,
            'link'=> 'meska',
            'name' => 'Moda Męska',
            'description'=> ''
        ],
        [
            'small_ads_categories_id'=> $LAST_ID,
            'name' => 'Moda Żeńska',
            'link'=> 'zenska',
            'description'=> ''
        ]];
        foreach ($data as $key => $d) {
            DB::table('small_ads_sub_categories')->insert($d);
            //  $this->command->info($key);
        }
        DB::table('small_ads_categories')->insert([
            'name'=> 'Motoryzacja',
            'link'=> 'motoryzacja',
            'icon'=> 'fas fa-car-alt ',
            'popular'=> '1',
            'description'=> 'części, akcesoria samochodowe, kosmetyki, części'
        ]);
    }
}
