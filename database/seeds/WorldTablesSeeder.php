<?php

use Illuminate\Database\Seeder;

class WorldTablesSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $this->call(WorldContinentsTableSeeder::class);
        $this->call(WorldContinentsLocaleTableSeeder::class);
        $this->call(WorldCountriesTableSeeder::class);
        $this->call(WorldCountriesLocaleTableSeeder::class);
        $this->call(WorldRegionsTableSeeder::class);
        $this->call(WorldRegionsLocaleTableSeeder::class);
        $this->call(WorldCitiesTableSeeder::class);
        $this->call(WorldCitiesLocaleTableSeeder::class);
    }
}