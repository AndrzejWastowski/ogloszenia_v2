<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(AutoBrandModelSeeds::class);
        $this->call(CarsBodySeeds::class);
        $this->call(CarsContentSeeds::class);
        $this->call(EstatesCategoriesSeeds::class);
        $this->call(EstatesContentsSeeds::class);
        $this->call(EstatesPhotoSeeds::class);
        $this->call(PricesSeeds::class);
        $this->call(SectionSeeds::class);
        $this->call(ServicesCategoriesSeeds::class);
        $this->call(SmallAdsCategoriesSeeds::class);
        $this->call(SmallAdsContentsSeeds::class);
        $this->call(SmallAdsPhotoSeeds::class);

        $this->call(UsersSeeds::class);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
