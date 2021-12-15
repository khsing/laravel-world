<?php

namespace Database\Seeders;

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
        
        \DB::table('world_continents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Asia',
                'code' => 'as',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Europe',
                'code' => 'eu',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Africa',
                'code' => 'af',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Oceania',
                'code' => 'oc',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Antarctica',
                'code' => 'an',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'North America',
                'code' => 'na',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'South America',
                'code' => 'sa',
            ),
        ));
        
        
    }
}