<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmallAdsContentsSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 39 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Laptop lenovo',
            'lead' => 'Sed felis in libero consectetur luctus. Bharenus ',
            'description' => 'Proin magna nulla, porttitor vitae mollis a, cursus a nisi. Guis nulla dolor.  Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '67.89',
            'items' => '1',
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-05-12 12:34',
            'condition' => 'nowe',
            'inscription' => 'none',
            'highlighted' => '#ffffff',
            'promoted' => 0,
            'status' => 'active',
            'invoice' => 1
        ]);

        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 38 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'SrajPad',
            'lead' => 'Phasellus sed felis in libero consectetur luctus. ',
            'description' => 'Porttitor vitae mollis a, cursus a nisi. Iquis nulla dolor. Proin magna nulla, Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '5445.99',
            'items' => '1',
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-05-22 11:34',
            'condition' => 'używane',
            'inscription' => 'none',
            'highlighted' => '#ffffff',
            'promoted' => 0,
            'status' => 'active',
            'invoice' => 1
            
            
        ]);

        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 40 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Tablet ',
            'lead' => 'Libero consectetur luctus. Phasellus sed felis in loko.',
            'description' => 'Cras venenatis vel massa ornare luctus. Quis nulla dolor. Proin magna nulla, porttitor vitae mollis a, cursus a nisi.  Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '87.00',
            'items' => '1',
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-05-23 09:34',
            'condition' => 'używane',
            'inscription' => 'Promocja!',
            'highlighted' => '#ffc8dd',
            'promoted' => 1,
            'status' => 'active',
            'invoice' => 1
            
        ]);

        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 40 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Smartphone',
            'lead' => 'libero consectetur whasellus sed felis in  luctus. ',
            'description' => 'Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. quis nulla dolor. Proin magna nulla, porttitor vitae mollis a, cursus a nisi.',
            'price' => '342.22',
            'items' => '1',
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-05-24 16:53',
            'condition' => 'nowe',
            'inscription' => 'none',
            'highlighted' => '#ffffff',
            'promoted' => 0,
            'status' => 'active',
            
        ]);

        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 39 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Słuchawki ala pipa',
            'lead' => 'Consectetur luctus. Phasellus sed felis in libero. ',
            'description' => ' quis nulla dolor. Proin magna nulla, porttitor vitae mollis a, cursus a nisi. Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '435.27',
            'items' => '1',
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-05-27 11:22',
            'condition' => 'używane',
            'inscription' => 'Bestseller',
            'highlighted' => '#ffffff',
            'promoted' => 1,
            'status' => 'active',
            'invoice' => 2
            
        ]);


        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 39 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Laptop Acer Aspire thingpad',
            'lead' => 'Consectetur luctus. Phasellus sed felis in libero. ',
            'description' => ' quis nulla dolor. Proin magna nulla, porttitor vitae mollis a, cursus a nisi. Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '435.27',
            'items' => '1',
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-06-27 11:22',
            'condition' => 'używane',
            'inscription' => 'none',
            'highlighted' => '#c8ffdf',
            'promoted' => 1,
            'status' => 'active',
            'invoice' => 1
            
        ]);

        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 41 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Laptop Acer Travelmate',
            'lead' => 'Consectetur luctus. Phasellus sed felis in libero. ',
            'description' => ' quis nulla dolor. Proin magna nulla, porttitor vitae mollis a, cursus a nisi. Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '435.27',
            'items' => '1',
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-06-27 11:22',
            'condition' => 'używane',
            'inscription' => 'Wyprzedaż',
            'highlighted' => '#eac8ff',
            'promoted' => 1,
            'status' => 'active',
            'invoice' => 1
            
        ]);

        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 41 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Acer Aspire 5',
            'lead' => 'Consectetur luctus. Phasellus sed felis in libero. ',
            'description' => ' quis nulla dolor. Proin magna nulla, porttitor vitae mollis a, cursus a nisi. Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '435.27',
            'items' => '1',
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-06-27 11:22',
            'condition' => 'używane',
            'inscription' => 'none',
            'highlighted' => '#fff7c8',
            'promoted' => 0,
            'status' => 'active',
            'invoice' => 3
            
        ]);

        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 41 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Acer Aspire 5 | A517-51D | Czarny',
            'lead' => 'Consectetur luctus. Phasellus sed felis in libero. ',
            'description' => ' quis nulla dolor. Proin magna nulla, porttitor vitae mollis a, cursus a nisi. Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '435.27',
            'items' => '1',
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-06-27 11:22',
            'condition' => 'używane',
            'inscription' => 'none',
            'highlighted' => '#fff7c8',
            'promoted' => 0,
            'status' => 1,
            'invoice' => 2,
            'status' => 'active'
            
        ]);

        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 39 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Laptop Acer Aspier',
            'lead' => 'Consectetur luctus. Phasellus sed felis in libero. ',
            'description' => ' quis nulla dolor. Proin magna nulla, porttitor vitae mollis a, cursus a nisi. Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '342.26',
            'items' => '1',
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-06-27 11:22',
            'condition' => 'używane',
            'inscription' => 'none',
            'highlighted' => '#ffffff',
            'promoted' => 1,
            'status' => 'active',
            'invoice' => 2
            
        ]);

        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 39 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Laptop Acer Aspier',
            'lead' => 'Consectetur luctus. Phasellus sed felis in libero. ',
            'description' => ' quis nulla dolor. Proin magna nulla, porttitor vitae mollis a, cursus a nisi. Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '87.23',
            'items' => '1',
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-06-27 11:22',
            'condition' => 'używane',
            'inscription' => 'none',
            'highlighted' => '#c8ffdf',
            'promoted' =>0,
            'status' => 'active',
            'invoice' => 1
            
        ]);

        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 40 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Laptop Acer Aspier',
            'lead' => 'Consectetur luctus. Phasellus sed felis in libero. ',
            'description' => ' quis nulla dolor. Proin magna nulla, porttitor vitae mollis a, cursus a nisi. Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '345.55',
            'items' => '1',            
            'adress_ip' => '1',
            'portal_id' => '1',
            'date_start' => now(),
            'date_end' => '2020-06-27 11:22',
            'condition' => 'używane',
            'inscription' => 'Promocja!',
            'highlighted' => '#ffffff',
            'promoted' => 0,
            'status' => 'active',
            'invoice' => 3
            
        ]);

        DB::table('small_ads_contents')->insert([
            'small_ads_categories_id' => 10,
            'small_ads_sub_categories_id' => 42 ,
            'small_ads_classified_enum' => 1,
            'users_id' => 1,
            'name' => 'Laptop Acer Aspier',
            'lead' => 'Consectetur luctus. Phasellus sed felis in libero. ',
            'description' => ' quis nulla dolor. Proin magna nulla, porttitor vitae mollis a, cursus a nisi. Cras venenatis vel massa ornare luctus. Sed porttitor ligula gravida, pellentesque eros ut, rutrum metus. ',
            'price' => '1644.65',
            'items' => '1',
            'status' => 'active',
            'adress_ip' => '1',
            'portal_id' => '1',           
            'date_start' => now(),
            'date_end' => '2020-06-27 11:22',
            'condition' => 'używane',
            'inscription' => 'none',
            'highlighted' => '#ffffff',
            'promoted' => 1,
            'status' => 'active',
            'invoice' => 1
            
        ]);

    }
}
