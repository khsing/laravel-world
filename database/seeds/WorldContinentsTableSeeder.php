<?php

use Illuminate\Database\Seeder;

class WorldContinentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('world_continents')->truncate();
        
        \DB::table('world_continents')->insert([
            [ 'id' => 1, 'name' => 'Asia', 'code' => 'as', ], 
            [ 'id' => 2, 'name' => 'Europe', 'code' => 'eu', ], 
            [ 'id' => 3, 'name' => 'Africa', 'code' => 'af', ], 
            [ 'id' => 4, 'name' => 'Oceania', 'code' => 'oc', ], 
            [ 'id' => 5, 'name' => 'Antarctica', 'code' => 'an', ], 
            [ 'id' => 6, 'name' => 'North America', 'code' => 'na', ], 
            [ 'id' => 7, 'name' => 'South America', 'code' => 'sa', ],
        ]);
    }
}