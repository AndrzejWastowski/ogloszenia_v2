<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoBrandModelSeeds extends Seeder
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
        DB::table('cars_brands')->insert([
            'name'=> 'Acura'

        ]);
        
        $LAST_ID = DB::getPdo()->lastInsertId();

        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CL'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Legend'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'MDX'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'RDX'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'RL'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'TL'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'TSX'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'ZDX'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //  $this->command->info($key);
        }
        
        $LAST_ID = DB::getPdo()->lastInsertId();

        //2
        DB::table('cars_brands')->insert([
            'name'=> 'Alfa Romeo'
        ]);

        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '33'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '75'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '145'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '147'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '155'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '156'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '159'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '164'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '166'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Alfasud'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Brera'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Crosswagon'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Giulia'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Giulietta'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'GT'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'GTV'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Mito'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Spider'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sportwagon'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Stelvio'
        ]
        ];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //  $this->command->info($key);
        }
        
      
        #3
        DB::table('cars_brands')->insert([
            'name'=> 'Aro'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '328'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '243'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '244'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '145'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '246'
        ],
        [
            'cars_brands_id'=> $LAST_ID,
            'name' => '104'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        

        DB::table('cars_brands')->insert([
            'name'=> 'Aston Martin'
        ]);

        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'DB8'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'DB9'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Vanquish'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'DB7'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }

        DB::table('cars_brands')->insert([
            'name'=> 'Audi'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'TT'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'A8/S8'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'A3/S3'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '90'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'V8'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Q7'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'A4/S4'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '100'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Allroad'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'A6/S6'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'A2'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '80'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Austin'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }

        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Barkas'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Bedford'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            // $this->command->info($key);
        }
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Bentley'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Arnage'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Azure'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Bentayga'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Broollands'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Continental Dlaing Spur'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Continental GT'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Eight'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Mulsanne'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Turbo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Turbo R'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Turbo RT'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Turbo S'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //   $this->command->info($key);
        }
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'BMW'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 3'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Z3'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 5'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 8'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Z4'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'X3'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 6'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 1'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'X5'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 7'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            // $this->command->info($key);
        }
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Bugatti'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Buick'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Centurion'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Century'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Electra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Enclave'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Encore'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Inny'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Lacrosse'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Le Sabre'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Lucerne'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Park Avenue'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Reatta'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Rendezvous'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Riviera'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Readmaster'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Skyhawk'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }

        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Cadillac'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Allante'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'ATS'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'BLS'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Brougham'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Catera'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Cimarron'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CT6'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CTS'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Deville'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'DTS'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Eldorado'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'ELR'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Escalade'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Fleetwood'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seville'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Inny'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Chevrolet'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Astro'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Avalanche'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Aveo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Blazer'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Camaro'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Captiva'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Corsica'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Corvette'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Evanda'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Impala'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Lancetti'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Lumina'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Silverado'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Spark'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Venture'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Chrysler'

        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '300C'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '300M'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Concorde'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Crossfire'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Grand Voyager'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Neon'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Pacifica'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'PT Cruiser'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Saratoga'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sebring'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Stratus/Cirrus'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Town&Country'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Vission'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Voyager'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //  $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Citroen'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'AX'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Berlingo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'BX'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'C1'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'C2'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'C3'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'C3 Pluriel'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'C4'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'C5'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'C8'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CX'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Evacion'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Saxo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Xantia'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Xara'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Xara Picasso'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'XM'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'ZX'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //   $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Dacia'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '1300'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '1310'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '1400'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '1410'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Dokker'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Dokker Van'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Duster'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Lodgy'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Lodgy Van'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Nova'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Pick Up'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sendero'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sendero Stepway'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Solenza'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Daewoo'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Espero'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Korando'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Lanos'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Leganza'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Matiz'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Musso'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Nexia'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Nubira'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Tacuma'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Tico'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
       
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Daihatsu'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Applause'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Charade'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Cuore'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Feroza'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //   $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Dodge'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Caliber'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Caravan'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Dacota'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Durango'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Grand Caravan'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Intrepid'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Magnum'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Neon'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'RAM'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Stealth'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Stratus'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Viper'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //   $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Eagle'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Ferrari'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //  $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Fiat'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '125'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '126'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Albea'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Barchetta'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Brava'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Bravo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Cinquecento'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Coupe'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Croma'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Doblo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Idea'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Marea'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Multipla'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Palio Weekend'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Panda'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Punto'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Grande Punto'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Scudo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seicento'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Siena'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Stilo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Tempra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Tipo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Ulysse'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Uno'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //   $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Ford'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Aerostar'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Cougar'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Escort'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Expedition'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Explorer'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Fiesta'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Focus'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Focus C-max'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Fusion'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Galaxy'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Granada'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Ka/StreetKA'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Maverick'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Mondeo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Mustang'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Orion'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Probe'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Puma'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Scorpio'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria F'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sierra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Taunus'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Taurus'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Transit'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Windstar'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'FSO'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'fiat 125p'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'fiat 126p'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Gaz'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Geo'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'GMC'
            
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'HDPIC'
            
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //   $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Honda'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Accord'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'City'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Civic'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Concerto'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CR-V'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CRX'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'FR-V'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'HR-V'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Jazz'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Legend'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Odyssey'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Prelude'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'S2000'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Hummer'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Hyundai'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Accent'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Atos'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Coupe'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Elantra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Galloper'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Getz'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'H'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Lantra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Matrix'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Ponny'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Santa Fe'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'SG'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sonata'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Terracan'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Tucson'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //   $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'IFA'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Infiniti'
            
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Innocenti'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Isuzu'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Iveco'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Jaguar'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'S-type'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'X-type'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'XJ'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'XJR'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'XJS'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Jeep'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Cherokee'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Grand Cherokee'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Liberty'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Wrangler'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Kia'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Carnival'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Cee`d'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Cerato'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Clarus'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Joice'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Opirus/Amanti'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Picanto'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Pride'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Rio'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sephia'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Shuma'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sorento'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sporttage'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Koenigsegg'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Lamborgini'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Land Rover'
        ]);
        
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Defender'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Discovery'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Freelander'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Range Rover'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'LDV'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Lexus'
        ]);
        
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria ES'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria GS'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria IS'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria LS'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria RX'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria SC'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Lincoln'
        ]);
        
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Continental'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Navigator'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Town Car'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'Lublin'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'Łada'
        ]);
        
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '2107'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Niva'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Samara'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //       $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Maruti'
        ]);
        
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Maserati'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Maybach'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Mazda'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '121'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '323/323F'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '2'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '3'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '3 MPS'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '5'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '6'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '626'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '929'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'MPV'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'MX-3'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'MX-5'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'MX-6'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Premacy'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'RX-7'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'RX-8'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Tribute'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Xedos'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CX-3'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CX-5'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CX-7'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //   $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Melex'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Mercedes'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'A klasa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'B klasa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'C klasa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CL/SEC'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CLK'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'CLS'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'E klasa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'G klasa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'M klasa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'R klasa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'S klasa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'SL'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'SLK'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'V klasa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'W123'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'W124'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'W201 (190)'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Mercury'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'MG'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Micrus'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Mini'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'Mitshubishi'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '3000GT'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Carisma'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Colt'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Eclipse'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Galant'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Grandis'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'L200'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Lancer'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Outlander'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Pajero'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sigma'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Space Gear'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sigma'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Space Runner'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Space Star'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Space Wagon'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Moskwicz'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Nissan'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '100NX'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '200SX'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '350 Z'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Almera'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Almera Tino'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Altima'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Maxima'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Micra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Murano'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Navara'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Note'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Pathfinder'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Patrol'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Primera'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Quest'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Serena'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Terrano'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Vanette'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'X-trail'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'NSU'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //        $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Nysa'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //         $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Oldsmobile'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //         $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Oltcit'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //           $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Opel'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Agila'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Ascona'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Astra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Calibra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Combo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Corsa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Frontera'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Kadett'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Manta'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Meriva'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Monterey'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Omega'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Record'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Senator'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Signum'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sintra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Tigra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Vectra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Zafira'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //         $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Peugeot'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '1007'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '106'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '107'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '205'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '206'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '206cc'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '207'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '306'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '307'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '307cc'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '309'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '405'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '406'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '407'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '605'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '607'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '806'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '808'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Partner'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //       $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Plymouth'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Polonez'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Caro'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Pontiac'
        ]);
        
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Firebird'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Grand Am'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Grand Prix'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sun Fire'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Trans Sport'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Vibe'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Porsche'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '911'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '924'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '928'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '944'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Boxster'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Cayenne'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //       $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Proton'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //       $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Renault'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '19'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '21'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '25'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '5'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Clio'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Espace'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Kangoo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Laguna'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Megane'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Modus'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Safrane'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Scenic'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Thalia'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Twingo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Vel Satis'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Rolls-Royce'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Rover'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '25'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '45'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '75'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 100'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 200'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 400'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 600'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 800'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Saab'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '9-3'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '9-5'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '900'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => '90000'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Saleen'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //   $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Sam'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Saturn'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Seat'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Alhambara'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Altea'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Arosa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Cordoba'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Ibiza'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Inca'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Leon'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Malaga'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Marbella'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Toledo'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Skoda'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Fabia'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Favorit'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Felicia'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Octavia'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Rumster'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Superb'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Smart'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Ssan Young'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Subaru'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Forester'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Impreza'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Justy'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Legacy'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //    $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Syrena'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => '105'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Talbot'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Tarpan'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Tatra'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Tavria'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Toyota'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Avalon'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Avensis'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Avensis Verso'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Aygo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Camry'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Carina'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Celica'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Corolla'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Corolla Verso'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Hilux'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Land Cruiser'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'MR 2'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Passeo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Picnic'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Previa'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Prius'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'RAV 4'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sienna'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Starlet'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Supra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Yaris'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Yaris Verso'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Trabant'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //$this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'TVR'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Uaz'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Volkswagen'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Bora'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Corrado'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Fox'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Garbus'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Golf'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Jetta'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Lupo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'New Beetle'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Passat'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Phaenton'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Polo'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Scirrocco'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Sharan'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Touran'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Touareg'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Transporter'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Vento'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Volvo'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'C30'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'C70'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'S40/V40'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'S60'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'S70/V70'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'S80'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 200'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 300'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 400'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 700'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 800'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Seria 900'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'V50'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'XC 70'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'XC 90'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Warszawa'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];

        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */
        DB::table('cars_brands')->insert([
            'name'=> 'Wartburg'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //       $this->command->info($key);
        }
        
        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'Wołga'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'Yugo'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //      $this->command->info($key);
        }
        
        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'Zaporożec'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //        $this->command->info($key);
        }
        
        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'Zastawa'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //       $this->command->info($key);
        }
        
        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'Żuk'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //        $this->command->info($key);
        }
        
        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'Lancia'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //       $this->command->info($key);
        }
        
        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'Suzuki'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //         $this->command->info($key);
        }
        
        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'Ligier'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Ambra'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Inny'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Nova'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'Optima'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'X - Too'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //     $this->command->info($key);
        }
        
    

        /* model auta */

        DB::table('cars_brands')->insert([
            'name'=> 'inne'
        ]);
        $LAST_ID = DB::getPdo()->lastInsertId();
        $data = [[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ],[
            'cars_brands_id'=> $LAST_ID,
            'name' => 'xxx'
        ]];
        foreach ($data as $key => $d) {
            DB::table('cars_models')->insert($d);
            //       $this->command->info($key);
        }
        
        DB::enableQueryLog();
    }
}
