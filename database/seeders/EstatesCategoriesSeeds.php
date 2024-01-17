<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstatesCategoriesSeeds extends Seeder
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
        DB::table('estates_categories')->insert([
            'name'=> 'Powierzchnia biurowa',
            'link'=> 'powierzchnia_biurowa',          
            'icon'=> '',
            'popular'=> 1,
            'description'=> 'powierzchnia biurowa'
        ]);

        DB::table('estates_categories')->insert([
            'name'=> 'Sklepy',
            'link'=> 'sklepy',          
            'icon'=> '',
            'popular'=> 1,
            'description'=> 'sprzdam sklep / firmę'
        ]);

        DB::table('estates_categories')->insert([
            'name'=> 'Stoiska Handlowe',
            'link'=> 'stoiska_handlowe',       
            'icon'=> '',
            'popular'=> 1,
            'description'=> 'wynajem stoisk handlowych'
        ]);

        DB::table('estates_categories')->insert([
            'name'=> 'Tereny Inwestycyjne',
            'link'=> 'tereny_insestycyjne',      
            'icon'=> '',
            'popular'=> 1,
            'description'=> 'tereny pod sklep, biuro, firmę, magazyn'
        ]);
           

        DB::table('estates_categories')->insert([
            'name'=> 'Magazyny',
            'link'=> 'magazyny',            
            'icon'=> '',
            'popular'=> 1,
            'description'=> 'powierzchnia magazynowa, budynki magazynowe'
        ]);
               
        
        DB::table('estates_categories')->insert([
            'name'=> 'Mieszkania',
            'link'=> 'mieszkania',          
            'icon'=> '',
            'popular'=> 1,
            'description'=> 'sprzedam mieszkanie '
        ]);


        DB::table('estates_categories')->insert([
            'name'=> 'Domy',
            'link'=> 'domy',        
            'icon'=> '',
            'popular'=> 1,
            'description'=> 'Sprzedam dom mieszkalny'
        ]);


        DB::table('estates_categories')->insert([
            'name'=> 'Działki budowlane',
            'link'=> 'dzialki_budowlane',        
            'icon'=> '',
            'popular'=> 1,
            'description'=> 'Sprzedam działkę budowlaną pod dom'
        ]);


        DB::table('estates_categories')->insert([
            'name'=> 'Garaże',
            'link'=> 'garaze',        
            'icon'=> '',
            'popular'=> 1,
            'description'=> 'Sprzedam garaż'
        ]);

        DB::table('estates_categories')->insert([
            'name'=> 'Działki rekreacyjne',
            'link'=> 'dzialki_rekreacyjne',       
            'icon'=> '',
            'popular'=> 1,
            'description'=> 'Sprzedam działkę rekreacyjną'
        ]);
;
    }
}
