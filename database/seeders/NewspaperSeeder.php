<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewspaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
            DB::table('newspaper')->insert([
                'name'=> 'Magazyn KCI',
                'status' =>'active'
            ]);
            DB::table('newspaper')->insert([
                'name'=> 'Gazeta Lokalna Kutna i Regionu',
                'status' =>'active'
            ]);
            
    }
}
