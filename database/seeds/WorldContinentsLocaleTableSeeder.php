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
        

        \DB::table('world_continents_locale')->truncate();
        
        \DB::table('world_continents_locale')->insert(array (
            0 => 
            array (
                'abbr' => '亚',
                'alias' => NULL,
                'continent_id' => 1,
                'full_name' => NULL,
                'id' => 1,
                'locale' => 'zh-cn',
                'name' => '亚洲',
            ),
            1 => 
            array (
                'abbr' => '欧',
                'alias' => NULL,
                'continent_id' => 2,
                'full_name' => NULL,
                'id' => 2,
                'locale' => 'zh-cn',
                'name' => '欧洲',
            ),
            2 => 
            array (
                'abbr' => '非',
                'alias' => NULL,
                'continent_id' => 3,
                'full_name' => NULL,
                'id' => 3,
                'locale' => 'zh-cn',
                'name' => '非洲',
            ),
            3 => 
            array (
                'abbr' => '大洋',
                'alias' => NULL,
                'continent_id' => 4,
                'full_name' => NULL,
                'id' => 4,
                'locale' => 'zh-cn',
                'name' => '大洋洲',
            ),
            4 => 
            array (
                'abbr' => '南极',
                'alias' => NULL,
                'continent_id' => 5,
                'full_name' => NULL,
                'id' => 5,
                'locale' => 'zh-cn',
                'name' => '南极洲',
            ),
            5 => 
            array (
                'abbr' => '北美',
                'alias' => NULL,
                'continent_id' => 6,
                'full_name' => NULL,
                'id' => 6,
                'locale' => 'zh-cn',
                'name' => '北美洲',
            ),
            6 => 
            array (
                'abbr' => '南美',
                'alias' => NULL,
                'continent_id' => 7,
                'full_name' => NULL,
                'id' => 7,
                'locale' => 'zh-cn',
                'name' => '南美洲',
            ),
            7 => 
            array (
                'abbr' => 'as',
                'alias' => NULL,
                'continent_id' => 1,
                'full_name' => NULL,
                'id' => 8,
                'locale' => 'en',
                'name' => 'Asia',
            ),
            8 => 
            array (
                'abbr' => 'eu',
                'alias' => NULL,
                'continent_id' => 2,
                'full_name' => NULL,
                'id' => 9,
                'locale' => 'en',
                'name' => 'Europe',
            ),
            9 => 
            array (
                'abbr' => 'af',
                'alias' => NULL,
                'continent_id' => 3,
                'full_name' => NULL,
                'id' => 10,
                'locale' => 'en',
                'name' => 'Africa',
            ),
            10 => 
            array (
                'abbr' => 'oc',
                'alias' => NULL,
                'continent_id' => 4,
                'full_name' => NULL,
                'id' => 11,
                'locale' => 'en',
                'name' => 'Oceania',
            ),
            11 => 
            array (
                'abbr' => 'an',
                'alias' => NULL,
                'continent_id' => 5,
                'full_name' => NULL,
                'id' => 12,
                'locale' => 'en',
                'name' => 'Antarctica',
            ),
            12 => 
            array (
                'abbr' => 'na',
                'alias' => NULL,
                'continent_id' => 6,
                'full_name' => NULL,
                'id' => 13,
                'locale' => 'en',
                'name' => 'North America',
            ),
            13 => 
            array (
                'abbr' => 'sa',
                'alias' => NULL,
                'continent_id' => 7,
                'full_name' => NULL,
                'id' => 14,
                'locale' => 'en',
                'name' => 'South America',
            ),
        ));
        
        
    }
}