<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\SQLiteConnection;

class WorldTablesSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        if (DB::connection() instanceof SQLiteConnection) {
            DB::statement('PRAGMA FOREIGN_KEYS=0');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }

        $this->call(WorldContinentsTableSeeder::class);
        $this->call(WorldContinentsLocaleTableSeeder::class);
        $this->call(WorldCountriesTableSeeder::class);
        $this->call(WorldCountriesLocaleTableSeeder::class);
        $this->call(WorldDivisionsTableSeeder::class);
        $this->call(WorldDivisionsLocaleTableSeeder::class);
        $this->call(WorldCitiesTableSeeder::class);
        $this->call(WorldCitiesLocaleTableSeeder::class);

        if (DB::connection() instanceof SQLiteConnection) {
            DB::statement('PRAGMA FOREIGN_KEYS=1');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }
}
