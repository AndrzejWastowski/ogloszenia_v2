<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Arkadiusz Ziętarski',
            'email'=> 'azr@gmail.com',
            'password'=> '123123123'
        ]);
        DB::table('users')->insert([
            'name'=> 'Sławomir Motlewski',
            'email'=> 'motyl@gmail.com',
            'password'=> '123123333'
            
        ]);
        DB::table('users')->insert([
            'name'=> 'Kalima Frąckowiak',
            'email'=> 'kamisafrac@gmail.com',
            'password'=> '789345778'
        ]);
        DB::table('users')->insert([
            'name'=> 'Wojtek Pieronowski',
            'email'=> 'pieron@gmail.com',
            'password'=> '875345345'
        ]);
        DB::table('users')->insert([
            'name'=> 'Kasia Wieguch',
            'email'=> 'kawasiawielka@gmail.com',
            'password'=> '809734454'
        ]);
    }
}
