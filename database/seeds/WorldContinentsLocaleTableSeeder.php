<?php

use Illuminate\Database\Seeder;

class WorldContinentsLocaleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('world_continents_locale')->delete();
        
        \DB::table('world_continents_locale')->insert(array (
            0 => 
            array (
                'id' => 1,
                'continent_id' => 1,
                'name' => '亚洲',
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            1 => 
            array (
                'id' => 2,
                'continent_id' => 2,
                'name' => '欧洲',
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            2 => 
            array (
                'id' => 3,
                'continent_id' => 3,
                'name' => '非洲',
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            3 => 
            array (
                'id' => 4,
                'continent_id' => 4,
                'name' => '大洋洲',
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            4 => 
            array (
                'id' => 5,
                'continent_id' => 5,
                'name' => '南极洲',
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            5 => 
            array (
                'id' => 6,
                'continent_id' => 6,
                'name' => '北美洲',
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            6 => 
            array (
                'id' => 7,
                'continent_id' => 7,
                'name' => '南美洲',
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
        ));
        
        
    }
}