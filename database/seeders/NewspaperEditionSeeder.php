<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewspaperEditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newspaper_edition')->insert([
            'newspaper_id'=> '1',
            'date'=> '2021-11-05',
            'status' =>'active'
        ]);
        
        DB::table('newspaper_edition')->insert([
            'newspaper_id'=> '1',
            'date'=> '2021-11-19',
            'status' =>'active'
        ]);

        DB::table('newspaper_edition')->insert([
            'newspaper_id'=> '1',
            'date'=> '2021-12-03',
            'status' =>'active'
        ]);

        DB::table('newspaper_edition')->insert([
            'newspaper_id'=> '1',
            'date'=> '2021-12-17',
            'status' =>'active'
        ]);
        

        DB::table('newspaper_edition')->insert([
            'newspaper_id'=> '2',
            'date'=> '2021-11-10',
            'status' =>'active'
        ]);
        
        DB::table('newspaper_edition')->insert([
            'newspaper_id'=> '2',
            'date'=> '2021-11-25',
            'status' =>'active'
        ]);

        DB::table('newspaper_edition')->insert([
            'newspaper_id'=> '2',
            'date'=> '2021-12-09',
            'status' =>'active'
        ]);

        DB::table('newspaper_edition')->insert([
            'newspaper_id'=> '2',
            'date'=> '2021-12-16',
            'description'=> 'Wydanie świąteczne!',
            'status' =>'active'
        ]);
    }
}
