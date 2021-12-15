<?php

namespace Database\Seeders;

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
                'id' => 1,
                'continent_id' => 1,
                'name' => '亚洲',
                'alias' => NULL,
                'abbr' => '亚',
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            1 => 
            array (
                'id' => 2,
                'continent_id' => 2,
                'name' => '欧洲',
                'alias' => NULL,
                'abbr' => '欧',
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            2 => 
            array (
                'id' => 3,
                'continent_id' => 3,
                'name' => '非洲',
                'alias' => NULL,
                'abbr' => '非',
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            3 => 
            array (
                'id' => 4,
                'continent_id' => 4,
                'name' => '大洋洲',
                'alias' => NULL,
                'abbr' => '大洋',
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            4 => 
            array (
                'id' => 5,
                'continent_id' => 5,
                'name' => '南极洲',
                'alias' => NULL,
                'abbr' => '南极',
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            5 => 
            array (
                'id' => 6,
                'continent_id' => 6,
                'name' => '北美洲',
                'alias' => NULL,
                'abbr' => '北美',
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            6 => 
            array (
                'id' => 7,
                'continent_id' => 7,
                'name' => '南美洲',
                'alias' => NULL,
                'abbr' => '南美',
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            7 => 
            array (
                'id' => 8,
                'continent_id' => 1,
                'name' => 'Asia',
                'alias' => NULL,
                'abbr' => 'as',
                'full_name' => NULL,
                'locale' => 'en',
            ),
            8 => 
            array (
                'id' => 9,
                'continent_id' => 2,
                'name' => 'Europe',
                'alias' => NULL,
                'abbr' => 'eu',
                'full_name' => NULL,
                'locale' => 'en',
            ),
            9 => 
            array (
                'id' => 10,
                'continent_id' => 3,
                'name' => 'Africa',
                'alias' => NULL,
                'abbr' => 'af',
                'full_name' => NULL,
                'locale' => 'en',
            ),
            10 => 
            array (
                'id' => 11,
                'continent_id' => 4,
                'name' => 'Oceania',
                'alias' => NULL,
                'abbr' => 'oc',
                'full_name' => NULL,
                'locale' => 'en',
            ),
            11 => 
            array (
                'id' => 12,
                'continent_id' => 5,
                'name' => 'Antarctica',
                'alias' => NULL,
                'abbr' => 'an',
                'full_name' => NULL,
                'locale' => 'en',
            ),
            12 => 
            array (
                'id' => 13,
                'continent_id' => 6,
                'name' => 'North America',
                'alias' => NULL,
                'abbr' => 'na',
                'full_name' => NULL,
                'locale' => 'en',
            ),
            13 => 
            array (
                'id' => 14,
                'continent_id' => 7,
                'name' => 'South America',
                'alias' => NULL,
                'abbr' => 'sa',
                'full_name' => NULL,
                'locale' => 'en',
            ),
            14 => 
            array (
                'id' => 15,
                'continent_id' => 7,
                'name' => 'Amérique du sud',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Amérique du sud',
                'locale' => 'fr',
            ),
            15 => 
            array (
                'id' => 16,
                'continent_id' => 6,
                'name' => 'Amérique du nord',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Amérique du nord',
                'locale' => 'fr',
            ),
            16 => 
            array (
                'id' => 17,
                'continent_id' => 5,
                'name' => 'Antarctique',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Antarctique',
                'locale' => 'fr',
            ),
            17 => 
            array (
                'id' => 18,
                'continent_id' => 4,
                'name' => 'Océanie',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Océanie',
                'locale' => 'fr',
            ),
            18 => 
            array (
                'id' => 19,
                'continent_id' => 3,
                'name' => 'Afrique',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Afrique',
                'locale' => 'fr',
            ),
            19 => 
            array (
                'id' => 20,
                'continent_id' => 2,
                'name' => 'Europe',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Europe',
                'locale' => 'fr',
            ),
            20 => 
            array (
                'id' => 21,
                'continent_id' => 1,
                'name' => 'Asie',
                'alias' => NULL,
                'abbr' => NULL,
                'full_name' => 'Asie',
                'locale' => 'fr',
            ),
        ));
        
        
    }
}