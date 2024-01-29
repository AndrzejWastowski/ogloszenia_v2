<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TruckModelSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /* model auta */
         DB::table('cars_brands')->insert([
            'name'=> 'Daf'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'model' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'model' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //  $this->command->info($key);
        }
        
    }
}
