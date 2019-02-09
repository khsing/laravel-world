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
        
        \DB::table('world_continents')->insert(array (
            0 => 
            array (
                'code' => 'as',
                'id' => 1,
                'name' => 'Asia',
            ),
            1 => 
            array (
                'code' => 'eu',
                'id' => 2,
                'name' => 'Europe',
            ),
            2 => 
            array (
                'code' => 'af',
                'id' => 3,
                'name' => 'Africa',
            ),
            3 => 
            array (
                'code' => 'oc',
                'id' => 4,
                'name' => 'Oceania',
            ),
            4 => 
            array (
                'code' => 'an',
                'id' => 5,
                'name' => 'Antarctica',
            ),
            5 => 
            array (
                'code' => 'na',
                'id' => 6,
                'name' => 'North America',
            ),
            6 => 
            array (
                'code' => 'sa',
                'id' => 7,
                'name' => 'South America',
            ),
        ));
        
        
    }
}