<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesCategoriesSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_categories')->insert([
            'name'=> 'Remontowe',
            'link'=> 'remont',
            'icon'=> 'fas fa-grin-hearts',
            'popular'=> '1',
            'description'=> 'usługi remontowe'
        ]);
             
        DB::table('services_categories')->insert([
            'name'=> 'Budowlane',
            'link'=> 'budowlane',
            'icon'=> 'fas fa-grin-hearts',
            'popular'=> '1',
            'description'=> 'usługi budowlane'
        ]);
        
        DB::table('services_categories')->insert([
            'name'=> 'Krawieckie',
            'link'=> 'krawieckie',
            'icon'=> 'fas fa-grin-hearts',
            'popular'=> '1',
            'description'=> 'usługi krawiecki'
        ]);

        DB::table('services_categories')->insert([
            'name'=> 'serwis / naprawa urządzen',
            'link'=> 'serwis',
            'icon'=> 'fas fa-grin-hearts',
            'popular'=> '1',
            'description'=> 'usługi  serwisowe agd rtv'
        ]);
           
        DB::table('services_categories')->insert([
            'name'=> 'skup komis',
            'link'=> 'skup_komis',
            'icon'=> 'fas fa-grin-hearts',
            'popular'=> '1',
            'description'=> 'usługi  serwisowe agd rtv'
        ]);

        DB::table('services_categories')->insert([
            'name'=> 'Nauka i korepetycje',
            'link'=> 'korepetycje',
            'icon'=> 'fas fa-grin-hearts',
            'popular'=> '1',
            'description'=> 'usługi z zakresu korepetycji'
        ]);

        DB::table('services_categories')->insert([
            'name'=> 'Zdrowie i Uroda',
            'link'=> 'korepetycje',
            'icon'=> 'fas fa-grin-hearts',
            'popular'=> '1',
            'description'=> 'usługi z pielęgnacji, zdrowia i urody'
        ]);
    }
}
