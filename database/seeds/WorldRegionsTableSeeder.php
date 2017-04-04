<?php

use Illuminate\Database\Seeder;

class WorldRegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('world_regions')->delete();
        
        \DB::table('world_regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 58,
                'name' => 'Chungcheongbuk-do',
                'full_name' => NULL,
                'code' => '43',
                'has_city' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 58,
                'name' => 'Chungcheongnam-do',
                'full_name' => NULL,
                'code' => '44',
                'has_city' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 58,
                'name' => 'Daegu',
                'full_name' => NULL,
                'code' => '27',
                'has_city' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 58,
                'name' => 'Gangwon-do',
                'full_name' => NULL,
                'code' => '42',
                'has_city' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 58,
                'name' => 'Gyeonggi-do',
                'full_name' => NULL,
                'code' => '49',
                'has_city' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 58,
                'name' => 'Gyeongsangbuk-do',
                'full_name' => NULL,
                'code' => '47',
                'has_city' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'country_id' => 58,
                'name' => 'Gyeongsangnam-do',
                'full_name' => NULL,
                'code' => '48',
                'has_city' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'country_id' => 58,
                'name' => 'Jeollabuk-do',
                'full_name' => NULL,
                'code' => '45',
                'has_city' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'country_id' => 58,
                'name' => 'Jeollanam-do',
                'full_name' => NULL,
                'code' => '46',
                'has_city' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'country_id' => 87,
                'name' => 'Johor',
                'full_name' => NULL,
                'code' => 'JH',
                'has_city' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'country_id' => 87,
                'name' => 'Kedah',
                'full_name' => NULL,
                'code' => 'KD',
                'has_city' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'country_id' => 87,
                'name' => 'Kelantan',
                'full_name' => NULL,
                'code' => 'KN',
                'has_city' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'country_id' => 87,
                'name' => 'Kuala Lumpur',
                'full_name' => NULL,
                'code' => 'KL',
                'has_city' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'country_id' => 87,
                'name' => 'Labuan',
                'full_name' => NULL,
                'code' => 'LB',
                'has_city' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'country_id' => 87,
                'name' => 'Malacca',
                'full_name' => NULL,
                'code' => 'ML',
                'has_city' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'country_id' => 87,
                'name' => 'Negeri Sembilan',
                'full_name' => NULL,
                'code' => 'NS',
                'has_city' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'country_id' => 87,
                'name' => 'Pahang',
                'full_name' => NULL,
                'code' => 'PG',
                'has_city' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'country_id' => 87,
                'name' => 'Perak',
                'full_name' => NULL,
                'code' => 'PK',
                'has_city' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'country_id' => 87,
                'name' => 'Perlis',
                'full_name' => NULL,
                'code' => 'PS',
                'has_city' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'country_id' => 87,
                'name' => 'Pulau Pinang',
                'full_name' => NULL,
                'code' => 'PH',
                'has_city' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'country_id' => 87,
                'name' => 'Sabah',
                'full_name' => NULL,
                'code' => 'SB',
                'has_city' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'country_id' => 87,
                'name' => 'Sarawak',
                'full_name' => NULL,
                'code' => 'SR',
                'has_city' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'country_id' => 87,
                'name' => 'Selangor',
                'full_name' => NULL,
                'code' => 'SL',
                'has_city' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'country_id' => 87,
                'name' => 'Terengganu',
                'full_name' => NULL,
                'code' => 'TR',
                'has_city' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'country_id' => 101,
                'name' => 'Anhui',
                'full_name' => NULL,
                'code' => '34',
                'has_city' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'country_id' => 101,
                'name' => 'Beijing',
                'full_name' => NULL,
                'code' => '11',
                'has_city' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'country_id' => 101,
                'name' => 'Chongqing',
                'full_name' => NULL,
                'code' => '50',
                'has_city' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'country_id' => 101,
                'name' => 'Fujian',
                'full_name' => NULL,
                'code' => '35',
                'has_city' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'country_id' => 101,
                'name' => 'Gansu',
                'full_name' => NULL,
                'code' => '62',
                'has_city' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'country_id' => 101,
                'name' => 'Guangdong',
                'full_name' => NULL,
                'code' => '44',
                'has_city' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'country_id' => 101,
                'name' => 'Guangxi',
                'full_name' => NULL,
                'code' => '45',
                'has_city' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'country_id' => 101,
                'name' => 'Guizhou',
                'full_name' => NULL,
                'code' => '52',
                'has_city' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'country_id' => 101,
                'name' => 'Hainan',
                'full_name' => NULL,
                'code' => '46',
                'has_city' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'country_id' => 101,
                'name' => 'Hebei',
                'full_name' => NULL,
                'code' => '13',
                'has_city' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'country_id' => 101,
                'name' => 'Heilongjiang',
                'full_name' => NULL,
                'code' => '23',
                'has_city' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'country_id' => 101,
                'name' => 'Henan',
                'full_name' => NULL,
                'code' => '41',
                'has_city' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'country_id' => 101,
                'name' => 'Hubei',
                'full_name' => NULL,
                'code' => '42',
                'has_city' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'country_id' => 101,
                'name' => 'Hunan',
                'full_name' => NULL,
                'code' => '43',
                'has_city' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'country_id' => 101,
                'name' => 'Inner Mongolia',
                'full_name' => NULL,
                'code' => '15',
                'has_city' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'country_id' => 101,
                'name' => 'Jiangsu',
                'full_name' => NULL,
                'code' => '32',
                'has_city' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'country_id' => 101,
                'name' => 'Jiangxi',
                'full_name' => NULL,
                'code' => '36',
                'has_city' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'country_id' => 101,
                'name' => 'Jilin',
                'full_name' => NULL,
                'code' => '22',
                'has_city' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'country_id' => 101,
                'name' => 'Liaoning',
                'full_name' => NULL,
                'code' => '21',
                'has_city' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'country_id' => 101,
                'name' => 'Ningxia',
                'full_name' => NULL,
                'code' => '64',
                'has_city' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'country_id' => 101,
                'name' => 'Qinghai',
                'full_name' => NULL,
                'code' => '63',
                'has_city' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'country_id' => 101,
                'name' => 'Shaanxi',
                'full_name' => NULL,
                'code' => '61',
                'has_city' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'country_id' => 101,
                'name' => 'Shandong',
                'full_name' => NULL,
                'code' => '37',
                'has_city' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'country_id' => 101,
                'name' => 'Shanghai',
                'full_name' => NULL,
                'code' => '31',
                'has_city' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'country_id' => 101,
                'name' => 'Shanxi',
                'full_name' => NULL,
                'code' => '14',
                'has_city' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'country_id' => 101,
                'name' => 'Sichuan',
                'full_name' => NULL,
                'code' => '51',
                'has_city' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'country_id' => 101,
                'name' => 'Taiwan',
                'full_name' => NULL,
                'code' => '71',
                'has_city' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'country_id' => 101,
                'name' => 'Tianjin',
                'full_name' => NULL,
                'code' => '12',
                'has_city' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'country_id' => 101,
                'name' => 'Tibet',
                'full_name' => NULL,
                'code' => '54',
                'has_city' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'country_id' => 101,
                'name' => 'Xinjiang',
                'full_name' => NULL,
                'code' => '65',
                'has_city' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'country_id' => 101,
                'name' => 'Yunnan',
                'full_name' => NULL,
                'code' => '53',
                'has_city' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'country_id' => 101,
                'name' => 'Zhejiang',
                'full_name' => NULL,
                'code' => '33',
                'has_city' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'country_id' => 148,
                'name' => 'England',
                'full_name' => NULL,
                'code' => 'ENG',
                'has_city' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'country_id' => 148,
                'name' => 'Northern Ireland',
                'full_name' => NULL,
                'code' => 'NIR',
                'has_city' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'country_id' => 148,
                'name' => 'Scotland',
                'full_name' => NULL,
                'code' => 'SCT',
                'has_city' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'country_id' => 148,
                'name' => 'Wales',
                'full_name' => NULL,
                'code' => 'WLS',
                'has_city' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'country_id' => 167,
                'name' => 'Alabama',
                'full_name' => NULL,
                'code' => 'AL',
                'has_city' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'country_id' => 167,
                'name' => 'Alaska',
                'full_name' => NULL,
                'code' => 'AK',
                'has_city' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'country_id' => 167,
                'name' => 'Arizona',
                'full_name' => NULL,
                'code' => 'AZ',
                'has_city' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'country_id' => 167,
                'name' => 'Arkansas',
                'full_name' => NULL,
                'code' => 'AR',
                'has_city' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'country_id' => 167,
                'name' => 'California',
                'full_name' => NULL,
                'code' => 'CA',
                'has_city' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'country_id' => 167,
                'name' => 'Colorado',
                'full_name' => NULL,
                'code' => 'CO',
                'has_city' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'country_id' => 167,
                'name' => 'Connecticut',
                'full_name' => NULL,
                'code' => 'CT',
                'has_city' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'country_id' => 167,
                'name' => 'Delaware',
                'full_name' => NULL,
                'code' => 'DE',
                'has_city' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'country_id' => 167,
                'name' => 'District of Columbia',
                'full_name' => NULL,
                'code' => 'DC',
                'has_city' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'country_id' => 167,
                'name' => 'Florida',
                'full_name' => NULL,
                'code' => 'FL',
                'has_city' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'country_id' => 167,
                'name' => 'Georgia',
                'full_name' => NULL,
                'code' => 'GA',
                'has_city' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'country_id' => 167,
                'name' => 'Hawaii',
                'full_name' => NULL,
                'code' => 'HI',
                'has_city' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'country_id' => 167,
                'name' => 'Idaho',
                'full_name' => NULL,
                'code' => 'ID',
                'has_city' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'country_id' => 167,
                'name' => 'Illinois',
                'full_name' => NULL,
                'code' => 'IL',
                'has_city' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'country_id' => 167,
                'name' => 'Indiana',
                'full_name' => NULL,
                'code' => 'IN',
                'has_city' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'country_id' => 167,
                'name' => 'Iowa',
                'full_name' => NULL,
                'code' => 'IA',
                'has_city' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'country_id' => 167,
                'name' => 'Kansas',
                'full_name' => NULL,
                'code' => 'KS',
                'has_city' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'country_id' => 167,
                'name' => 'Kentucky',
                'full_name' => NULL,
                'code' => 'KY',
                'has_city' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'country_id' => 167,
                'name' => 'Louisiana',
                'full_name' => NULL,
                'code' => 'LA',
                'has_city' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'country_id' => 167,
                'name' => 'Maine',
                'full_name' => NULL,
                'code' => 'ME',
                'has_city' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'country_id' => 167,
                'name' => 'Maryland',
                'full_name' => NULL,
                'code' => 'MD',
                'has_city' => 1,
            ),
            81 => 
            array (
                'id' => 82,
                'country_id' => 167,
                'name' => 'Massachusetts',
                'full_name' => NULL,
                'code' => 'MA',
                'has_city' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                'country_id' => 167,
                'name' => 'Michigan',
                'full_name' => NULL,
                'code' => 'MI',
                'has_city' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                'country_id' => 167,
                'name' => 'Minnesota',
                'full_name' => NULL,
                'code' => 'MN',
                'has_city' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'country_id' => 167,
                'name' => 'Mississippi',
                'full_name' => NULL,
                'code' => 'MS',
                'has_city' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                'country_id' => 167,
                'name' => 'Missouri',
                'full_name' => NULL,
                'code' => 'MO',
                'has_city' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'country_id' => 167,
                'name' => 'Montana',
                'full_name' => NULL,
                'code' => 'MT',
                'has_city' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'country_id' => 167,
                'name' => 'Nebraska',
                'full_name' => NULL,
                'code' => 'NE',
                'has_city' => 1,
            ),
            88 => 
            array (
                'id' => 89,
                'country_id' => 167,
                'name' => 'Nevada',
                'full_name' => NULL,
                'code' => 'NV',
                'has_city' => 1,
            ),
            89 => 
            array (
                'id' => 90,
                'country_id' => 167,
                'name' => 'New Hampshire',
                'full_name' => NULL,
                'code' => 'NH',
                'has_city' => 1,
            ),
            90 => 
            array (
                'id' => 91,
                'country_id' => 167,
                'name' => 'New Jersey',
                'full_name' => NULL,
                'code' => 'NJ',
                'has_city' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                'country_id' => 167,
                'name' => 'New Mexico',
                'full_name' => NULL,
                'code' => 'NM',
                'has_city' => 1,
            ),
            92 => 
            array (
                'id' => 93,
                'country_id' => 167,
                'name' => 'New York',
                'full_name' => NULL,
                'code' => 'NY',
                'has_city' => 1,
            ),
            93 => 
            array (
                'id' => 94,
                'country_id' => 167,
                'name' => 'North Carolina',
                'full_name' => NULL,
                'code' => 'NC',
                'has_city' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                'country_id' => 167,
                'name' => 'North Dakota',
                'full_name' => NULL,
                'code' => 'ND',
                'has_city' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'country_id' => 167,
                'name' => 'Ohio',
                'full_name' => NULL,
                'code' => 'OH',
                'has_city' => 1,
            ),
            96 => 
            array (
                'id' => 97,
                'country_id' => 167,
                'name' => 'Oklahoma',
                'full_name' => NULL,
                'code' => 'OK',
                'has_city' => 1,
            ),
            97 => 
            array (
                'id' => 98,
                'country_id' => 167,
                'name' => 'Oregon',
                'full_name' => NULL,
                'code' => 'OR',
                'has_city' => 1,
            ),
            98 => 
            array (
                'id' => 99,
                'country_id' => 167,
                'name' => 'Pennsylvania',
                'full_name' => NULL,
                'code' => 'PA',
                'has_city' => 1,
            ),
            99 => 
            array (
                'id' => 100,
                'country_id' => 167,
                'name' => 'Rhode Island',
                'full_name' => NULL,
                'code' => 'RI',
                'has_city' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                'country_id' => 167,
                'name' => 'South Carolina',
                'full_name' => NULL,
                'code' => 'SC',
                'has_city' => 1,
            ),
            101 => 
            array (
                'id' => 102,
                'country_id' => 167,
                'name' => 'South Dakota',
                'full_name' => NULL,
                'code' => 'SD',
                'has_city' => 1,
            ),
            102 => 
            array (
                'id' => 103,
                'country_id' => 167,
                'name' => 'Tennessee',
                'full_name' => NULL,
                'code' => 'TN',
                'has_city' => 1,
            ),
            103 => 
            array (
                'id' => 104,
                'country_id' => 167,
                'name' => 'Texas',
                'full_name' => NULL,
                'code' => 'TX',
                'has_city' => 1,
            ),
            104 => 
            array (
                'id' => 105,
                'country_id' => 167,
                'name' => 'Utah',
                'full_name' => NULL,
                'code' => 'UT',
                'has_city' => 1,
            ),
            105 => 
            array (
                'id' => 106,
                'country_id' => 167,
                'name' => 'Vermont',
                'full_name' => NULL,
                'code' => 'VT',
                'has_city' => 1,
            ),
            106 => 
            array (
                'id' => 107,
                'country_id' => 167,
                'name' => 'Virginia',
                'full_name' => NULL,
                'code' => 'VA',
                'has_city' => 1,
            ),
            107 => 
            array (
                'id' => 108,
                'country_id' => 167,
                'name' => 'Washington',
                'full_name' => NULL,
                'code' => 'WA',
                'has_city' => 1,
            ),
            108 => 
            array (
                'id' => 109,
                'country_id' => 167,
                'name' => 'West Virginia',
                'full_name' => NULL,
                'code' => 'WV',
                'has_city' => 1,
            ),
            109 => 
            array (
                'id' => 110,
                'country_id' => 167,
                'name' => 'Wisconsin',
                'full_name' => NULL,
                'code' => 'WI',
                'has_city' => 1,
            ),
            110 => 
            array (
                'id' => 111,
                'country_id' => 167,
                'name' => 'Wyoming',
                'full_name' => NULL,
                'code' => 'WY',
                'has_city' => 1,
            ),
            111 => 
            array (
                'id' => 112,
                'country_id' => 170,
                'name' => 'Canberra',
                'full_name' => NULL,
                'code' => 'ACT',
                'has_city' => 1,
            ),
            112 => 
            array (
                'id' => 113,
                'country_id' => 170,
                'name' => 'New South Wales',
                'full_name' => NULL,
                'code' => 'NSW',
                'has_city' => 1,
            ),
            113 => 
            array (
                'id' => 114,
                'country_id' => 170,
                'name' => 'Northern Territory',
                'full_name' => NULL,
                'code' => 'NT',
                'has_city' => 1,
            ),
            114 => 
            array (
                'id' => 115,
                'country_id' => 170,
                'name' => 'Queensland',
                'full_name' => NULL,
                'code' => 'QLD',
                'has_city' => 1,
            ),
            115 => 
            array (
                'id' => 116,
                'country_id' => 170,
                'name' => 'South Australia',
                'full_name' => NULL,
                'code' => 'SA',
                'has_city' => 1,
            ),
            116 => 
            array (
                'id' => 117,
                'country_id' => 170,
                'name' => 'Tasmania',
                'full_name' => NULL,
                'code' => 'TAS',
                'has_city' => 1,
            ),
            117 => 
            array (
                'id' => 118,
                'country_id' => 170,
                'name' => 'Victoria',
                'full_name' => NULL,
                'code' => 'VIC',
                'has_city' => 1,
            ),
            118 => 
            array (
                'id' => 119,
                'country_id' => 170,
                'name' => 'Western Australia',
                'full_name' => NULL,
                'code' => 'WA',
                'has_city' => 1,
            ),
            119 => 
            array (
                'id' => 121,
                'country_id' => 101,
                'name' => 'Hongkong',
                'full_name' => NULL,
                'code' => 'HK',
                'has_city' => 0,
            ),
            120 => 
            array (
                'id' => 122,
                'country_id' => 101,
                'name' => 'Macau',
                'full_name' => NULL,
                'code' => 'MO',
                'has_city' => 0,
            ),
        ));
        
        
    }
}