<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsPhotoSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();

        DB::table('cars_photos')->insert(['cars_contents_id' => 1,'sort'=>1, 'name' => '1x' ]);
        DB::table('cars_photos')->insert(['cars_contents_id' => 1,'sort'=>2, 'name' => '2x' ]);
        DB::table('cars_photos')->insert(['cars_contents_id' => 2,'sort'=>1, 'name' => '3x' ]);
        DB::table('cars_photos')->insert(['cars_contents_id' => 2,'sort'=>2, 'name' => '4x' ]);
        DB::table('cars_photos')->insert(['cars_contents_id' => 3,'sort'=>3, 'name' => '5x' ]);
        DB::table('cars_photos')->insert(['cars_contents_id' => 4,'sort'=>4, 'name' => '5x' ]);
         
    }
}
