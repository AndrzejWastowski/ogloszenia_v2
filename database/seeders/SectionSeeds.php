<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //ogloszenia drobne
  
        DB::table('sections')->insert(['name' => 'estates','description'=>'Nieruchomości','state'=>'active']);
        DB::table('sections')->insert(['name' => 'small_ads','description'=>'Ogłoszenia drobne','state'=>'active']);
        DB::table('sections')->insert(['name' => 'cars','description'=>'Mororyzacja','state'=>'active']);
        DB::table('sections')->insert(['name' => 'job','description'=>'Praca','state'=>'active']);
        DB::table('sections')->insert(['name' => 'services','description'=>'Usługi','state'=>'active']);
        
    }
}
