<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatesContentsSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        DB::table('estates_contents')->insert([
            'name' => 'Dom parterowy - klasyczny',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non consectetur metus. Phasellus nisl lectus, blandit a libero in, posuere porttitor mauris. Donec eget sapien risus. Vivamus et ullamcorper velit, quis condimentum ante. Nunc at luctus tortor. Morbi finibus ultrices enim eget placerat. Nunc at lacus a libero mattis elementum in sit amet ante. Aliquam dignissim mi a dui mattis, pulvinar sollicitudin sapien pellentesque. Mauris tempus luctus elit. Nullam eleifend elit semper dui efficitur tempor. Proin augue metus, malesuada sed consectetur accumsan, tristique congue urna.',
            'lead' => 'Aenean risus diam, accumsan ut fringilla eget, pretium non ex.  ',
            'users_id' => 1,
            'portal_id' => 1,
            'estates_categories_id' => 1,
            'estates_type'=>'Sprzedam',
            'date_add' => '2020-03-25 12:54',
            'date_start' => '2020-03-25 12:54',
            'date_end' => '2020-04-30 12:54',
            'contact_phone'=>'123 456 789',
            'contact_email'=>'mail@test.pl',
            'promoted'=>1,
            'inscription' => 'none',            
            'status' => 'active',
            'highlighted' => '#ffffff',
            'area' => 4000,
            'unit' => 'mkw',
            'adresses_id' => 1,
            'price' => 240000,
            'market' => 'pierwotny',
            'adress_ip'=>'23.34.45.56',
            'port'=>'236'
            ]);

        DB::table('estates_contents')->insert([
            'name'=>'Dom zacisze z garażem',
            'description' => 'Consectetur adipiscing elit. Praesent non consectetur metus. Phasellus nisl lectus, blandit a libero in, posuere porttitor mauris. Donec eget sapien risus. Vivamus et ullamcorper velit, quis condimentum ante. Nunc at luctus tortor. Morbi finibus ultrices enim eget placerat. Nunc at lacus a libero mattis elementum in sit amet ante. Aliquam dignissim mi a dui mattis, pulvinar sollicitudin sapien pellentesque. Mauris tempus luctus elit. Nullam eleifend elit semper dui efficitur tempor. Proin augue metus, malesuada sed consectetur accumsan, tristique congue urna.',
            'lead' => 'Nulla convallis orci a sapien ultricies lacinia ac et orci. ',
            'users_id' => 2,
            'portal_id' => 1,
            'estates_categories_id' => 1,
            'estates_type'=>'Sprzedam',
            'date_add' => '2020-03-22 14:54',
            'date_start' => '2020-04-25 12:54',
            'date_end' => '2020-04-25 09:12',
            'contact_phone'=>'123 456 789',
            'contact_email'=>'mail@test.pl',
            'promoted'=>1,
            'inscription' => 'none',          
            'status' => 'active',
            'highlighted' => '#ffffff',
            'area' => 1150,
            'unit' => 'mkw',
            'adresses_id' => 2,
            'price' => 240000,
            'market' => 'pierwotny',
            'adress_ip'=>'23.34.45.56',
            'port'=>'236'
            ]);

        DB::table('estates_contents')->insert([
            'name'=>'Dom parterowy z poddaszem i garażaem na 2 samochody',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non consectetur metus. Phasellus nisl lectus, blandit a libero in, posuere porttitor mauris. Donec eget sapien risus. Vivamus et ullamcorper velit, quis condimentum ante. Nunc at luctus tortor. Morbi finibus ultrices enim eget placerat. Nunc at lacus a libero mattis elementum in sit amet ante. Aliquam dignissim mi a dui mattis, pulvinar sollicitudin sapien pellentesque. Mauris tempus luctus elit. Nullam eleifend elit semper dui efficitur tempor. Proin augue metus, malesuada sed consectetur accumsan, tristique congue urna.',
            'lead' => ' Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse suscipit lectus quis ante malesuada porttitor.',
            'users_id' => 1,
            'portal_id' => 1,
            'estates_categories_id' => 1,
            'estates_type'=>'Sprzedam',
            'date_add' => '2020-03-25 12:54',
            'date_start' => '2020-03-13 18:59',
            'date_end' => '2020-05-25 17:33',
            'contact_phone'=>'123 456 789',
            'contact_email'=>'mail@test.pl',
            'promoted'=>0,
            'inscription' => 'none',
            'status' => 'active',
            'highlighted' => '#c8cdff',
            'area' => 3500,
            'unit' => 'mkw',
            'adresses_id' => 3,
            'price' => 240000,
            'market' => 'pierwotny',
            'adress_ip'=>'23.34.45.56',
            'port'=>'236'
            ]);

        DB::table('estates_contents')->insert([
            'name'=>'Willa z użytkowym poddaszem',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non consectetur metus. Phasellus nisl lectus, blandit a libero in, posuere porttitor mauris. Donec eget sapien risus. Vivamus et ullamcorper velit, quis condimentum ante. Nunc at luctus tortor. Morbi finibus ultrices enim eget placerat. Nunc at lacus a libero mattis elementum in sit amet ante. Aliquam dignissim mi a dui mattis, pulvinar sollicitudin sapien pellentesque. Mauris tempus luctus elit. Nullam eleifend elit semper dui efficitur tempor. Proin augue metus, malesuada sed consectetur accumsan, tristique congue urna.',
            'lead' => 'Pretium non ex. Nulla convallis orci a sapien ultricies',
            'users_id' => 3,
            'portal_id' => 1,
            'estates_categories_id' => 1,
            'estates_type'=>'Sprzedam',
            'date_add' => '2020-03-25 12:54',
            'date_start' => '2020-03-25 12:54',
            'date_end' => '2020-05-12 12:54',
            'contact_phone'=>'123 456 789',
            'contact_email'=>'mail@test.pl',
            'promoted'=>0,
            'inscription' => 'none',
            'highlighted' => '#ffc8dd',            
            'status' => 'active',
            'area' => 2200,
            'unit' => 'mkw',
            'adresses_id' => 1,
            'price' => 565000,
            'market' => 'pierwotny',
            'adress_ip'=>'23.34.45.56',
            'port'=>'236'
            ]);

        DB::table('estates_contents')->insert([
            'name'=>'Dom parterowy z basenem',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non consectetur metus. Phasellus nisl lectus, blandit a libero in, posuere porttitor mauris. Donec eget sapien risus. Vivamus et ullamcorper velit, quis condimentum ante. Nunc at luctus tortor. Morbi finibus ultrices enim eget placerat. Nunc at lacus a libero mattis elementum in sit amet ante. Aliquam dignissim mi a dui mattis, pulvinar sollicitudin sapien pellentesque. Mauris tempus luctus elit. Nullam eleifend elit semper dui efficitur tempor. Proin augue metus, malesuada sed consectetur accumsan, tristique congue urna.',
            'lead' => 'Convallis orci a sapien Nulla ultricies lacinia ac et orci. Passidone Orci varius natoque penatibus ',
            'users_id' => 3,
            'portal_id' => 1,
            'estates_categories_id' => 1,
            'estates_type'=>'Sprzedam',
            'date_add' => '2020-03-25 12:54',
            'date_start' => '2020-03-25 12:54',
            'date_end' => '2020-05-11 12:54',
            'contact_phone'=>'123 456 789',
            'contact_email'=>'mail@test.pl',
            'promoted'=>1,
            'inscription' => 'none',
            'highlighted' => '#ffffff',            
            'status' => 'active',
            'area' => 3200,
            'adresses_id' => 2,
            'unit' => 'mkw',
            'price' => 260600,
            'market' => 'pierwotny',
            'adress_ip'=>'23.34.45.56',
            'port'=>'236'
            ]);

        DB::table('estates_contents')->insert([
            'name'=>'Bliźniak w zabudowie szeregowej',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non consectetur metus. Phasellus nisl lectus, blandit a libero in, posuere porttitor mauris. Donec eget sapien risus. Vivamus et ullamcorper velit, quis condimentum ante. Nunc at luctus tortor. Morbi finibus ultrices enim eget placerat. Nunc at lacus a libero mattis elementum in sit amet ante. Aliquam dignissim mi a dui mattis, pulvinar sollicitudin sapien pellentesque. Mauris tempus luctus elit. Nullam eleifend elit semper dui efficitur tempor. Proin augue metus, malesuada sed consectetur accumsan, tristique congue urna.',
            'lead' => 'Sapien ultricies lacinia ac et orci. Aenean risus diam, accumsan ut fringilla eget.',
            'users_id' => 2,
            'portal_id' => 1,
            'estates_categories_id' => 1,
            'estates_type'=>'Sprzedam',
            'date_add' => '2020-03-25 12:54',
            'date_start' => '2020-03-25 12:54',
            'date_end' => '2020-03-25 12:54',
            'contact_phone'=>'123 456 789',
            'contact_email'=>'mail@test.pl',
            'promoted'=>0,
            'inscription' => 'none',
            'highlighted' => '#ffffff',            
            'status' => 'active',
            'adresses_id' => 3,
            'area' => 900,
            'unit' => 'mkw',
            'price' => 299000,
            'market' => 'pierwotny',
            'adress_ip'=>'23.34.45.56',
            'port'=>'236'
            ]);

        DB::table('estates_contents')->insert([
            'name'=>'Dom jednorodzinny na uboczu',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non consectetur metus. Phasellus nisl lectus, blandit a libero in, posuere porttitor mauris. Donec eget sapien risus. Vivamus et ullamcorper velit, quis condimentum ante. Nunc at luctus tortor. Morbi finibus ultrices enim eget placerat. Nunc at lacus a libero mattis elementum in sit amet ante. Aliquam dignissim mi a dui mattis, pulvinar sollicitudin sapien pellentesque. Mauris tempus luctus elit. Nullam eleifend elit semper dui efficitur tempor. Proin augue metus, malesuada sed consectetur accumsan, tristique congue urna.',
            'lead' => 'Consectetur adipiscing elit. Praesent non consectetur metus.',
            'users_id' => 3,
            'portal_id' => 1,
            'estates_categories_id' => 1,
            'estates_type'=>'Sprzedam',
            'date_add' => '2020-03-25 12:54',
            'date_start' => '2020-03-25 12:54',
            'date_end' => '2020-03-25 12:54',
            'contact_phone'=>'123 456 789',
            'contact_email'=>'mail@test.pl',
            'promoted'=>0,
            'inscription' => 'none',
            'highlighted' => '#c8ffdf',            
            'status' => 'active',
            'adresses_id' => 2,
            'area' => 10100,
            'unit' => 'mkw',
            'price' => 3000000,
            'market' => 'pierwotny',
            'adress_ip'=>'23.34.45.56',
            'port'=>'236'
            ]);
                
        DB::table('estates_contents')->insert([
            'name'=>'Dom piętrowy',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non consectetur metus. Phasellus nisl lectus, blandit a libero in, posuere porttitor mauris. Donec eget sapien risus. Vivamus et ullamcorper velit, quis condimentum ante. Nunc at luctus tortor. Morbi finibus ultrices enim eget placerat. Nunc at lacus a libero mattis elementum in sit amet ante. Aliquam dignissim mi a dui mattis, pulvinar sollicitudin sapien pellentesque. Mauris tempus luctus elit. Nullam eleifend elit semper dui efficitur tempor. Proin augue metus, malesuada sed consectetur accumsan, tristique congue urna.',
            'lead' => 'Penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            'users_id' => 4,
            'portal_id' => 1,
            'estates_categories_id' => 1,
            'estates_type'=>'Sprzedam',
            'date_add' => '2020-03-25 12:54',
            'date_start' => '2020-03-25 12:54',
            'date_end' => '2020-03-25 12:54',
            'contact_phone'=>'123 456 789',
            'contact_email'=>'mail@test.pl',
            'promoted'=>1,
            'inscription' => 'Przecena',
            'highlighted' => '#eac8ff',            
            'status' => 'active',
            'adresses_id' => 2,
            'area' => 1090,
            'unit' => 'mkw',
            'price' => 180000,
            'market' => 'wtórny',

            'adress_ip'=>'23.34.45.56',
            'port'=>'236'
            ]);
    }
}
