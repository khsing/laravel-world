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
        

        \DB::table('world_continents')->delete();
        
        \DB::table('world_continents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Asia',
                'code' => 'AS',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Europe',
                'code' => 'EU',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Africa',
                'code' => 'AF',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Oceania',
                'code' => 'OC',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Antarctica',
                'code' => 'AN',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'North America',
                'code' => 'NA',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'South America',
                'code' => 'SA',
            ),
        ));
        
        
    }
}