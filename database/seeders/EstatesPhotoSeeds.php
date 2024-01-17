<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatesPhotoSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();

        DB::table('estates_photos')->insert(['estates_contents_id' => 1,'sort'=>1, 'name'=>'1x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 1,'sort'=>2, 'name'=>'2x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 1,'sort'=>3, 'name'=>'3x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 1,'sort'=>4, 'name'=>'4x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 2,'sort'=>1, 'name'=>'5x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 2,'sort'=>2, 'name'=>'6x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 2,'sort'=>3, 'name'=>'7x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 3,'sort'=>1, 'name'=>'8x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 3,'sort'=>2, 'name'=>'9x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 3,'sort'=>3, 'name'=>'10x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 4,'sort'=>1, 'name'=>'11x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 4,'sort'=>2, 'name'=>'12x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 4,'sort'=>3, 'name'=>'13x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 5,'sort'=>1, 'name'=>'14x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 5,'sort'=>2, 'name'=>'15x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 5,'sort'=>3, 'name'=>'16x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 6,'sort'=>1, 'name'=>'17x' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 6,'sort'=>2, 'name'=>'6127967f29901' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 6,'sort'=>3, 'name'=>'612793960d8d5' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 7,'sort'=>1, 'name'=>'61278a8eb094d' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 7,'sort'=>2, 'name'=>'6127881583d9b' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 7,'sort'=>3, 'name'=>'61277aca6fe2e' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 8,'sort'=>1, 'name'=>'612777623c4ff' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 8,'sort'=>2, 'name'=>'61275660a3b47' ]);
        DB::table('estates_photos')->insert(['estates_contents_id' => 8,'sort'=>3, 'name'=>'61261ccfe5a9c' ]);
    }
}
