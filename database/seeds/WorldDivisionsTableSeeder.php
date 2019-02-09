<?php

use Illuminate\Database\Seeder;

class WorldDivisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('world_divisions')->truncate();
        
        \DB::table('world_divisions')->insert(array (
            0 => 
            array (
                'code' => '43',
                'country_id' => 58,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 1,
                'name' => 'Chungcheongbuk-do',
            ),
            1 => 
            array (
                'code' => '44',
                'country_id' => 58,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 2,
                'name' => 'Chungcheongnam-do',
            ),
            2 => 
            array (
                'code' => '27',
                'country_id' => 58,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 3,
                'name' => 'Daegu',
            ),
            3 => 
            array (
                'code' => '42',
                'country_id' => 58,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 4,
                'name' => 'Gangwon-do',
            ),
            4 => 
            array (
                'code' => '49',
                'country_id' => 58,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 5,
                'name' => 'Gyeonggi-do',
            ),
            5 => 
            array (
                'code' => '47',
                'country_id' => 58,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 6,
                'name' => 'Gyeongsangbuk-do',
            ),
            6 => 
            array (
                'code' => '48',
                'country_id' => 58,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 7,
                'name' => 'Gyeongsangnam-do',
            ),
            7 => 
            array (
                'code' => '45',
                'country_id' => 58,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 8,
                'name' => 'Jeollabuk-do',
            ),
            8 => 
            array (
                'code' => '46',
                'country_id' => 58,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 9,
                'name' => 'Jeollanam-do',
            ),
            9 => 
            array (
                'code' => 'jh',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 10,
                'name' => 'Johor',
            ),
            10 => 
            array (
                'code' => 'kd',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 11,
                'name' => 'Kedah',
            ),
            11 => 
            array (
                'code' => 'kn',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 12,
                'name' => 'Kelantan',
            ),
            12 => 
            array (
                'code' => 'kl',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 13,
                'name' => 'Kuala Lumpur',
            ),
            13 => 
            array (
                'code' => 'lb',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 14,
                'name' => 'Labuan',
            ),
            14 => 
            array (
                'code' => 'ml',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 15,
                'name' => 'Malacca',
            ),
            15 => 
            array (
                'code' => 'ns',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 16,
                'name' => 'Negeri Sembilan',
            ),
            16 => 
            array (
                'code' => 'pg',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 17,
                'name' => 'Pahang',
            ),
            17 => 
            array (
                'code' => 'pk',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 18,
                'name' => 'Perak',
            ),
            18 => 
            array (
                'code' => 'ps',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 19,
                'name' => 'Perlis',
            ),
            19 => 
            array (
                'code' => 'ph',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 20,
                'name' => 'Pulau Pinang',
            ),
            20 => 
            array (
                'code' => 'sb',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 21,
                'name' => 'Sabah',
            ),
            21 => 
            array (
                'code' => 'sr',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 22,
                'name' => 'Sarawak',
            ),
            22 => 
            array (
                'code' => 'sl',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 23,
                'name' => 'Selangor',
            ),
            23 => 
            array (
                'code' => 'tr',
                'country_id' => 87,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 24,
                'name' => 'Terengganu',
            ),
            24 => 
            array (
                'code' => '34',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 25,
                'name' => 'Anhui',
            ),
            25 => 
            array (
                'code' => '11',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 26,
                'name' => 'Beijing',
            ),
            26 => 
            array (
                'code' => '50',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 27,
                'name' => 'Chongqing',
            ),
            27 => 
            array (
                'code' => '35',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 28,
                'name' => 'Fujian',
            ),
            28 => 
            array (
                'code' => '62',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 29,
                'name' => 'Gansu',
            ),
            29 => 
            array (
                'code' => '44',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 30,
                'name' => 'Guangdong',
            ),
            30 => 
            array (
                'code' => '45',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 31,
                'name' => 'Guangxi',
            ),
            31 => 
            array (
                'code' => '52',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 32,
                'name' => 'Guizhou',
            ),
            32 => 
            array (
                'code' => '46',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 33,
                'name' => 'Hainan',
            ),
            33 => 
            array (
                'code' => '13',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 34,
                'name' => 'Hebei',
            ),
            34 => 
            array (
                'code' => '23',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 35,
                'name' => 'Heilongjiang',
            ),
            35 => 
            array (
                'code' => '41',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 36,
                'name' => 'Henan',
            ),
            36 => 
            array (
                'code' => '42',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 37,
                'name' => 'Hubei',
            ),
            37 => 
            array (
                'code' => '43',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 38,
                'name' => 'Hunan',
            ),
            38 => 
            array (
                'code' => '15',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 39,
                'name' => 'Inner Mongolia',
            ),
            39 => 
            array (
                'code' => '32',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 40,
                'name' => 'Jiangsu',
            ),
            40 => 
            array (
                'code' => '36',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 41,
                'name' => 'Jiangxi',
            ),
            41 => 
            array (
                'code' => '22',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 42,
                'name' => 'Jilin',
            ),
            42 => 
            array (
                'code' => '21',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 43,
                'name' => 'Liaoning',
            ),
            43 => 
            array (
                'code' => '64',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 44,
                'name' => 'Ningxia',
            ),
            44 => 
            array (
                'code' => '63',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 45,
                'name' => 'Qinghai',
            ),
            45 => 
            array (
                'code' => '61',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 46,
                'name' => 'Shaanxi',
            ),
            46 => 
            array (
                'code' => '37',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 47,
                'name' => 'Shandong',
            ),
            47 => 
            array (
                'code' => '31',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 48,
                'name' => 'Shanghai',
            ),
            48 => 
            array (
                'code' => '14',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 49,
                'name' => 'Shanxi',
            ),
            49 => 
            array (
                'code' => '51',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 50,
                'name' => 'Sichuan',
            ),
            50 => 
            array (
                'code' => '71',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 51,
                'name' => 'Taiwan',
            ),
            51 => 
            array (
                'code' => '12',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 52,
                'name' => 'Tianjin',
            ),
            52 => 
            array (
                'code' => '54',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 53,
                'name' => 'Tibet',
            ),
            53 => 
            array (
                'code' => '65',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 54,
                'name' => 'Xinjiang',
            ),
            54 => 
            array (
                'code' => '53',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 55,
                'name' => 'Yunnan',
            ),
            55 => 
            array (
                'code' => '33',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 56,
                'name' => 'Zhejiang',
            ),
            56 => 
            array (
                'code' => 'eng',
                'country_id' => 148,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 57,
                'name' => 'England',
            ),
            57 => 
            array (
                'code' => 'nir',
                'country_id' => 148,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 58,
                'name' => 'Northern Ireland',
            ),
            58 => 
            array (
                'code' => 'sct',
                'country_id' => 148,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 59,
                'name' => 'Scotland',
            ),
            59 => 
            array (
                'code' => 'wls',
                'country_id' => 148,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 60,
                'name' => 'Wales',
            ),
            60 => 
            array (
                'code' => 'al',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 61,
                'name' => 'Alabama',
            ),
            61 => 
            array (
                'code' => 'ak',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 62,
                'name' => 'Alaska',
            ),
            62 => 
            array (
                'code' => 'az',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 63,
                'name' => 'Arizona',
            ),
            63 => 
            array (
                'code' => 'ar',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 64,
                'name' => 'Arkansas',
            ),
            64 => 
            array (
                'code' => 'ca',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 65,
                'name' => 'California',
            ),
            65 => 
            array (
                'code' => 'co',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 66,
                'name' => 'Colorado',
            ),
            66 => 
            array (
                'code' => 'ct',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 67,
                'name' => 'Connecticut',
            ),
            67 => 
            array (
                'code' => 'de',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 68,
                'name' => 'Delaware',
            ),
            68 => 
            array (
                'code' => 'dc',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 69,
                'name' => 'District of Columbia',
            ),
            69 => 
            array (
                'code' => 'fl',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 70,
                'name' => 'Florida',
            ),
            70 => 
            array (
                'code' => 'ga',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 71,
                'name' => 'Georgia',
            ),
            71 => 
            array (
                'code' => 'hi',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 72,
                'name' => 'Hawaii',
            ),
            72 => 
            array (
                'code' => 'id',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 73,
                'name' => 'Idaho',
            ),
            73 => 
            array (
                'code' => 'il',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 74,
                'name' => 'Illinois',
            ),
            74 => 
            array (
                'code' => 'in',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 75,
                'name' => 'Indiana',
            ),
            75 => 
            array (
                'code' => 'ia',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 76,
                'name' => 'Iowa',
            ),
            76 => 
            array (
                'code' => 'ks',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 77,
                'name' => 'Kansas',
            ),
            77 => 
            array (
                'code' => 'ky',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 78,
                'name' => 'Kentucky',
            ),
            78 => 
            array (
                'code' => 'la',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 79,
                'name' => 'Louisiana',
            ),
            79 => 
            array (
                'code' => 'me',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 80,
                'name' => 'Maine',
            ),
            80 => 
            array (
                'code' => 'md',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 81,
                'name' => 'Maryland',
            ),
            81 => 
            array (
                'code' => 'ma',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 82,
                'name' => 'Massachusetts',
            ),
            82 => 
            array (
                'code' => 'mi',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 83,
                'name' => 'Michigan',
            ),
            83 => 
            array (
                'code' => 'mn',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 84,
                'name' => 'Minnesota',
            ),
            84 => 
            array (
                'code' => 'ms',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 85,
                'name' => 'Mississippi',
            ),
            85 => 
            array (
                'code' => 'mo',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 86,
                'name' => 'Missouri',
            ),
            86 => 
            array (
                'code' => 'mt',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 87,
                'name' => 'Montana',
            ),
            87 => 
            array (
                'code' => 'ne',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 88,
                'name' => 'Nebraska',
            ),
            88 => 
            array (
                'code' => 'nv',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 89,
                'name' => 'Nevada',
            ),
            89 => 
            array (
                'code' => 'nh',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 90,
                'name' => 'New Hampshire',
            ),
            90 => 
            array (
                'code' => 'nj',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 91,
                'name' => 'New Jersey',
            ),
            91 => 
            array (
                'code' => 'nm',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 92,
                'name' => 'New Mexico',
            ),
            92 => 
            array (
                'code' => 'ny',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 93,
                'name' => 'New York',
            ),
            93 => 
            array (
                'code' => 'nc',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 94,
                'name' => 'North Carolina',
            ),
            94 => 
            array (
                'code' => 'nd',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 95,
                'name' => 'North Dakota',
            ),
            95 => 
            array (
                'code' => 'oh',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 96,
                'name' => 'Ohio',
            ),
            96 => 
            array (
                'code' => 'ok',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 97,
                'name' => 'Oklahoma',
            ),
            97 => 
            array (
                'code' => 'or',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 98,
                'name' => 'Oregon',
            ),
            98 => 
            array (
                'code' => 'pa',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 99,
                'name' => 'Pennsylvania',
            ),
            99 => 
            array (
                'code' => 'ri',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 100,
                'name' => 'Rhode Island',
            ),
            100 => 
            array (
                'code' => 'sc',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 101,
                'name' => 'South Carolina',
            ),
            101 => 
            array (
                'code' => 'sd',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 102,
                'name' => 'South Dakota',
            ),
            102 => 
            array (
                'code' => 'tn',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 103,
                'name' => 'Tennessee',
            ),
            103 => 
            array (
                'code' => 'tx',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 104,
                'name' => 'Texas',
            ),
            104 => 
            array (
                'code' => 'ut',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 105,
                'name' => 'Utah',
            ),
            105 => 
            array (
                'code' => 'vt',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 106,
                'name' => 'Vermont',
            ),
            106 => 
            array (
                'code' => 'va',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 107,
                'name' => 'Virginia',
            ),
            107 => 
            array (
                'code' => 'wa',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 108,
                'name' => 'Washington',
            ),
            108 => 
            array (
                'code' => 'wv',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 109,
                'name' => 'West Virginia',
            ),
            109 => 
            array (
                'code' => 'wi',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 110,
                'name' => 'Wisconsin',
            ),
            110 => 
            array (
                'code' => 'wy',
                'country_id' => 167,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 111,
                'name' => 'Wyoming',
            ),
            111 => 
            array (
                'code' => 'act',
                'country_id' => 170,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 112,
                'name' => 'Canberra',
            ),
            112 => 
            array (
                'code' => 'nsw',
                'country_id' => 170,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 113,
                'name' => 'New South Wales',
            ),
            113 => 
            array (
                'code' => 'nt',
                'country_id' => 170,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 114,
                'name' => 'Northern Territory',
            ),
            114 => 
            array (
                'code' => 'qld',
                'country_id' => 170,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 115,
                'name' => 'Queensland',
            ),
            115 => 
            array (
                'code' => 'sa',
                'country_id' => 170,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 116,
                'name' => 'South Australia',
            ),
            116 => 
            array (
                'code' => 'tas',
                'country_id' => 170,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 117,
                'name' => 'Tasmania',
            ),
            117 => 
            array (
                'code' => 'vic',
                'country_id' => 170,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 118,
                'name' => 'Victoria',
            ),
            118 => 
            array (
                'code' => 'wa',
                'country_id' => 170,
                'full_name' => NULL,
                'has_city' => 1,
                'id' => 119,
                'name' => 'Western Australia',
            ),
            119 => 
            array (
                'code' => 'hk',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 0,
                'id' => 121,
                'name' => 'Hongkong',
            ),
            120 => 
            array (
                'code' => 'mo',
                'country_id' => 101,
                'full_name' => NULL,
                'has_city' => 0,
                'id' => 122,
                'name' => 'Macau',
            ),
        ));
        
        
    }
}