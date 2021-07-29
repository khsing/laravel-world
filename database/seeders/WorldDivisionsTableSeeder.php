<?php

namespace Database\Seeders;

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
                'code' => 'jh',
                'has_city' => 1,
            ),
            10 =>
            array (
                'id' => 11,
                'country_id' => 87,
                'name' => 'Kedah',
                'full_name' => NULL,
                'code' => 'kd',
                'has_city' => 1,
            ),
            11 =>
            array (
                'id' => 12,
                'country_id' => 87,
                'name' => 'Kelantan',
                'full_name' => NULL,
                'code' => 'kn',
                'has_city' => 1,
            ),
            12 =>
            array (
                'id' => 13,
                'country_id' => 87,
                'name' => 'Kuala Lumpur',
                'full_name' => NULL,
                'code' => 'kl',
                'has_city' => 1,
            ),
            13 =>
            array (
                'id' => 14,
                'country_id' => 87,
                'name' => 'Labuan',
                'full_name' => NULL,
                'code' => 'lb',
                'has_city' => 1,
            ),
            14 =>
            array (
                'id' => 15,
                'country_id' => 87,
                'name' => 'Malacca',
                'full_name' => NULL,
                'code' => 'ml',
                'has_city' => 1,
            ),
            15 =>
            array (
                'id' => 16,
                'country_id' => 87,
                'name' => 'Negeri Sembilan',
                'full_name' => NULL,
                'code' => 'ns',
                'has_city' => 1,
            ),
            16 =>
            array (
                'id' => 17,
                'country_id' => 87,
                'name' => 'Pahang',
                'full_name' => NULL,
                'code' => 'pg',
                'has_city' => 1,
            ),
            17 =>
            array (
                'id' => 18,
                'country_id' => 87,
                'name' => 'Perak',
                'full_name' => NULL,
                'code' => 'pk',
                'has_city' => 1,
            ),
            18 =>
            array (
                'id' => 19,
                'country_id' => 87,
                'name' => 'Perlis',
                'full_name' => NULL,
                'code' => 'ps',
                'has_city' => 1,
            ),
            19 =>
            array (
                'id' => 20,
                'country_id' => 87,
                'name' => 'Pulau Pinang',
                'full_name' => NULL,
                'code' => 'ph',
                'has_city' => 1,
            ),
            20 =>
            array (
                'id' => 21,
                'country_id' => 87,
                'name' => 'Sabah',
                'full_name' => NULL,
                'code' => 'sb',
                'has_city' => 1,
            ),
            21 =>
            array (
                'id' => 22,
                'country_id' => 87,
                'name' => 'Sarawak',
                'full_name' => NULL,
                'code' => 'sr',
                'has_city' => 1,
            ),
            22 =>
            array (
                'id' => 23,
                'country_id' => 87,
                'name' => 'Selangor',
                'full_name' => NULL,
                'code' => 'sl',
                'has_city' => 1,
            ),
            23 =>
            array (
                'id' => 24,
                'country_id' => 87,
                'name' => 'Terengganu',
                'full_name' => NULL,
                'code' => 'tr',
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
                'code' => 'eng',
                'has_city' => 1,
            ),
            57 =>
            array (
                'id' => 58,
                'country_id' => 148,
                'name' => 'Northern Ireland',
                'full_name' => NULL,
                'code' => 'nir',
                'has_city' => 1,
            ),
            58 =>
            array (
                'id' => 59,
                'country_id' => 148,
                'name' => 'Scotland',
                'full_name' => NULL,
                'code' => 'sct',
                'has_city' => 1,
            ),
            59 =>
            array (
                'id' => 60,
                'country_id' => 148,
                'name' => 'Wales',
                'full_name' => NULL,
                'code' => 'wls',
                'has_city' => 1,
            ),
            60 =>
            array (
                'id' => 61,
                'country_id' => 167,
                'name' => 'Alabama',
                'full_name' => NULL,
                'code' => 'al',
                'has_city' => 1,
            ),
            61 =>
            array (
                'id' => 62,
                'country_id' => 167,
                'name' => 'Alaska',
                'full_name' => NULL,
                'code' => 'ak',
                'has_city' => 1,
            ),
            62 =>
            array (
                'id' => 63,
                'country_id' => 167,
                'name' => 'Arizona',
                'full_name' => NULL,
                'code' => 'az',
                'has_city' => 1,
            ),
            63 =>
            array (
                'id' => 64,
                'country_id' => 167,
                'name' => 'Arkansas',
                'full_name' => NULL,
                'code' => 'ar',
                'has_city' => 1,
            ),
            64 =>
            array (
                'id' => 65,
                'country_id' => 167,
                'name' => 'California',
                'full_name' => NULL,
                'code' => 'ca',
                'has_city' => 1,
            ),
            65 =>
            array (
                'id' => 66,
                'country_id' => 167,
                'name' => 'Colorado',
                'full_name' => NULL,
                'code' => 'co',
                'has_city' => 1,
            ),
            66 =>
            array (
                'id' => 67,
                'country_id' => 167,
                'name' => 'Connecticut',
                'full_name' => NULL,
                'code' => 'ct',
                'has_city' => 1,
            ),
            67 =>
            array (
                'id' => 68,
                'country_id' => 167,
                'name' => 'Delaware',
                'full_name' => NULL,
                'code' => 'de',
                'has_city' => 1,
            ),
            68 =>
            array (
                'id' => 69,
                'country_id' => 167,
                'name' => 'District of Columbia',
                'full_name' => NULL,
                'code' => 'dc',
                'has_city' => 1,
            ),
            69 =>
            array (
                'id' => 70,
                'country_id' => 167,
                'name' => 'Florida',
                'full_name' => NULL,
                'code' => 'fl',
                'has_city' => 1,
            ),
            70 =>
            array (
                'id' => 71,
                'country_id' => 167,
                'name' => 'Georgia',
                'full_name' => NULL,
                'code' => 'ga',
                'has_city' => 1,
            ),
            71 =>
            array (
                'id' => 72,
                'country_id' => 167,
                'name' => 'Hawaii',
                'full_name' => NULL,
                'code' => 'hi',
                'has_city' => 1,
            ),
            72 =>
            array (
                'id' => 73,
                'country_id' => 167,
                'name' => 'Idaho',
                'full_name' => NULL,
                'code' => 'id',
                'has_city' => 1,
            ),
            73 =>
            array (
                'id' => 74,
                'country_id' => 167,
                'name' => 'Illinois',
                'full_name' => NULL,
                'code' => 'il',
                'has_city' => 1,
            ),
            74 =>
            array (
                'id' => 75,
                'country_id' => 167,
                'name' => 'Indiana',
                'full_name' => NULL,
                'code' => 'in',
                'has_city' => 1,
            ),
            75 =>
            array (
                'id' => 76,
                'country_id' => 167,
                'name' => 'Iowa',
                'full_name' => NULL,
                'code' => 'ia',
                'has_city' => 1,
            ),
            76 =>
            array (
                'id' => 77,
                'country_id' => 167,
                'name' => 'Kansas',
                'full_name' => NULL,
                'code' => 'ks',
                'has_city' => 1,
            ),
            77 =>
            array (
                'id' => 78,
                'country_id' => 167,
                'name' => 'Kentucky',
                'full_name' => NULL,
                'code' => 'ky',
                'has_city' => 1,
            ),
            78 =>
            array (
                'id' => 79,
                'country_id' => 167,
                'name' => 'Louisiana',
                'full_name' => NULL,
                'code' => 'la',
                'has_city' => 1,
            ),
            79 =>
            array (
                'id' => 80,
                'country_id' => 167,
                'name' => 'Maine',
                'full_name' => NULL,
                'code' => 'me',
                'has_city' => 1,
            ),
            80 =>
            array (
                'id' => 81,
                'country_id' => 167,
                'name' => 'Maryland',
                'full_name' => NULL,
                'code' => 'md',
                'has_city' => 1,
            ),
            81 =>
            array (
                'id' => 82,
                'country_id' => 167,
                'name' => 'Massachusetts',
                'full_name' => NULL,
                'code' => 'ma',
                'has_city' => 1,
            ),
            82 =>
            array (
                'id' => 83,
                'country_id' => 167,
                'name' => 'Michigan',
                'full_name' => NULL,
                'code' => 'mi',
                'has_city' => 1,
            ),
            83 =>
            array (
                'id' => 84,
                'country_id' => 167,
                'name' => 'Minnesota',
                'full_name' => NULL,
                'code' => 'mn',
                'has_city' => 1,
            ),
            84 =>
            array (
                'id' => 85,
                'country_id' => 167,
                'name' => 'Mississippi',
                'full_name' => NULL,
                'code' => 'ms',
                'has_city' => 1,
            ),
            85 =>
            array (
                'id' => 86,
                'country_id' => 167,
                'name' => 'Missouri',
                'full_name' => NULL,
                'code' => 'mo',
                'has_city' => 1,
            ),
            86 =>
            array (
                'id' => 87,
                'country_id' => 167,
                'name' => 'Montana',
                'full_name' => NULL,
                'code' => 'mt',
                'has_city' => 1,
            ),
            87 =>
            array (
                'id' => 88,
                'country_id' => 167,
                'name' => 'Nebraska',
                'full_name' => NULL,
                'code' => 'ne',
                'has_city' => 1,
            ),
            88 =>
            array (
                'id' => 89,
                'country_id' => 167,
                'name' => 'Nevada',
                'full_name' => NULL,
                'code' => 'nv',
                'has_city' => 1,
            ),
            89 =>
            array (
                'id' => 90,
                'country_id' => 167,
                'name' => 'New Hampshire',
                'full_name' => NULL,
                'code' => 'nh',
                'has_city' => 1,
            ),
            90 =>
            array (
                'id' => 91,
                'country_id' => 167,
                'name' => 'New Jersey',
                'full_name' => NULL,
                'code' => 'nj',
                'has_city' => 1,
            ),
            91 =>
            array (
                'id' => 92,
                'country_id' => 167,
                'name' => 'New Mexico',
                'full_name' => NULL,
                'code' => 'nm',
                'has_city' => 1,
            ),
            92 =>
            array (
                'id' => 93,
                'country_id' => 167,
                'name' => 'New York',
                'full_name' => NULL,
                'code' => 'ny',
                'has_city' => 1,
            ),
            93 =>
            array (
                'id' => 94,
                'country_id' => 167,
                'name' => 'North Carolina',
                'full_name' => NULL,
                'code' => 'nc',
                'has_city' => 1,
            ),
            94 =>
            array (
                'id' => 95,
                'country_id' => 167,
                'name' => 'North Dakota',
                'full_name' => NULL,
                'code' => 'nd',
                'has_city' => 1,
            ),
            95 =>
            array (
                'id' => 96,
                'country_id' => 167,
                'name' => 'Ohio',
                'full_name' => NULL,
                'code' => 'oh',
                'has_city' => 1,
            ),
            96 =>
            array (
                'id' => 97,
                'country_id' => 167,
                'name' => 'Oklahoma',
                'full_name' => NULL,
                'code' => 'ok',
                'has_city' => 1,
            ),
            97 =>
            array (
                'id' => 98,
                'country_id' => 167,
                'name' => 'Oregon',
                'full_name' => NULL,
                'code' => 'or',
                'has_city' => 1,
            ),
            98 =>
            array (
                'id' => 99,
                'country_id' => 167,
                'name' => 'Pennsylvania',
                'full_name' => NULL,
                'code' => 'pa',
                'has_city' => 1,
            ),
            99 =>
            array (
                'id' => 100,
                'country_id' => 167,
                'name' => 'Rhode Island',
                'full_name' => NULL,
                'code' => 'ri',
                'has_city' => 1,
            ),
            100 =>
            array (
                'id' => 101,
                'country_id' => 167,
                'name' => 'South Carolina',
                'full_name' => NULL,
                'code' => 'sc',
                'has_city' => 1,
            ),
            101 =>
            array (
                'id' => 102,
                'country_id' => 167,
                'name' => 'South Dakota',
                'full_name' => NULL,
                'code' => 'sd',
                'has_city' => 1,
            ),
            102 =>
            array (
                'id' => 103,
                'country_id' => 167,
                'name' => 'Tennessee',
                'full_name' => NULL,
                'code' => 'tn',
                'has_city' => 1,
            ),
            103 =>
            array (
                'id' => 104,
                'country_id' => 167,
                'name' => 'Texas',
                'full_name' => NULL,
                'code' => 'tx',
                'has_city' => 1,
            ),
            104 =>
            array (
                'id' => 105,
                'country_id' => 167,
                'name' => 'Utah',
                'full_name' => NULL,
                'code' => 'ut',
                'has_city' => 1,
            ),
            105 =>
            array (
                'id' => 106,
                'country_id' => 167,
                'name' => 'Vermont',
                'full_name' => NULL,
                'code' => 'vt',
                'has_city' => 1,
            ),
            106 =>
            array (
                'id' => 107,
                'country_id' => 167,
                'name' => 'Virginia',
                'full_name' => NULL,
                'code' => 'va',
                'has_city' => 1,
            ),
            107 =>
            array (
                'id' => 108,
                'country_id' => 167,
                'name' => 'Washington',
                'full_name' => NULL,
                'code' => 'wa',
                'has_city' => 1,
            ),
            108 =>
            array (
                'id' => 109,
                'country_id' => 167,
                'name' => 'West Virginia',
                'full_name' => NULL,
                'code' => 'wv',
                'has_city' => 1,
            ),
            109 =>
            array (
                'id' => 110,
                'country_id' => 167,
                'name' => 'Wisconsin',
                'full_name' => NULL,
                'code' => 'wi',
                'has_city' => 1,
            ),
            110 =>
            array (
                'id' => 111,
                'country_id' => 167,
                'name' => 'Wyoming',
                'full_name' => NULL,
                'code' => 'wy',
                'has_city' => 1,
            ),
            111 =>
            array (
                'id' => 112,
                'country_id' => 170,
                'name' => 'Australian Capital Territory',
                'full_name' => NULL,
                'code' => 'act',
                'has_city' => 1,
            ),
            112 =>
            array (
                'id' => 113,
                'country_id' => 170,
                'name' => 'New South Wales',
                'full_name' => NULL,
                'code' => 'nsw',
                'has_city' => 1,
            ),
            113 =>
            array (
                'id' => 114,
                'country_id' => 170,
                'name' => 'Northern Territory',
                'full_name' => NULL,
                'code' => 'nt',
                'has_city' => 1,
            ),
            114 =>
            array (
                'id' => 115,
                'country_id' => 170,
                'name' => 'Queensland',
                'full_name' => NULL,
                'code' => 'qld',
                'has_city' => 1,
            ),
            115 =>
            array (
                'id' => 116,
                'country_id' => 170,
                'name' => 'South Australia',
                'full_name' => NULL,
                'code' => 'sa',
                'has_city' => 1,
            ),
            116 =>
            array (
                'id' => 117,
                'country_id' => 170,
                'name' => 'Tasmania',
                'full_name' => NULL,
                'code' => 'tas',
                'has_city' => 1,
            ),
            117 =>
            array (
                'id' => 118,
                'country_id' => 170,
                'name' => 'Victoria',
                'full_name' => NULL,
                'code' => 'vic',
                'has_city' => 1,
            ),
            118 =>
            array (
                'id' => 119,
                'country_id' => 170,
                'name' => 'Western Australia',
                'full_name' => NULL,
                'code' => 'wa',
                'has_city' => 1,
            ),
            119 =>
            array (
                'id' => 121,
                'country_id' => 101,
                'name' => 'Hongkong',
                'full_name' => NULL,
                'code' => 'hk',
                'has_city' => 0,
            ),
            120 =>
            array (
                'id' => 122,
                'country_id' => 101,
                'name' => 'Macau',
                'full_name' => NULL,
                'code' => 'mo',
                'has_city' => 0,
            ),
            121 =>
            array (
                'id' => 123,
                'country_id' => 166,
                'name' => 'Alberta',
                'full_name' => NULL,
                'code' => 'AB',
                'has_city' => 0,
            ),
            122 =>
            array (
                'id' => 124,
                'country_id' => 166,
                'name' => 'British Columbia',
                'full_name' => NULL,
                'code' => 'BC',
                'has_city' => 0,
            ),
            123 =>
            array (
                'id' => 125,
                'country_id' => 166,
                'name' => 'Manitoba',
                'full_name' => NULL,
                'code' => 'MB',
                'has_city' => 0,
            ),
            124 =>
            array (
                'id' => 126,
                'country_id' => 166,
                'name' => 'New Brunswick',
                'full_name' => NULL,
                'code' => 'NB',
                'has_city' => 0,
            ),
            125 =>
            array (
                'id' => 127,
                'country_id' => 166,
                'name' => 'Newfoundland and Labrador',
                'full_name' => NULL,
                'code' => 'NL',
                'has_city' => 0,
            ),
            126 =>
            array (
                'id' => 128,
                'country_id' => 166,
                'name' => 'Northwest Territories',
                'full_name' => NULL,
                'code' => 'NT',
                'has_city' => 0,
            ),
            127 =>
            array (
                'id' => 129,
                'country_id' => 166,
                'name' => 'Nova Scotia',
                'full_name' => NULL,
                'code' => 'NS',
                'has_city' => 0,
            ),
            128 =>
            array (
                'id' => 130,
                'country_id' => 166,
                'name' => 'Nunavut',
                'full_name' => NULL,
                'code' => 'NU',
                'has_city' => 0,
            ),
            129 =>
            array (
                'id' => 131,
                'country_id' => 166,
                'name' => 'Ontario',
                'full_name' => NULL,
                'code' => 'ON',
                'has_city' => 0,
            ),
            130 =>
            array (
                'id' => 132,
                'country_id' => 166,
                'name' => 'Prince Edward Island',
                'full_name' => NULL,
                'code' => 'PE',
                'has_city' => 0,
            ),
            131 =>
            array (
                'id' => 133,
                'country_id' => 166,
                'name' => 'Quebec',
                'full_name' => NULL,
                'code' => 'QC',
                'has_city' => 0,
            ),
            132 =>
            array (
                'id' => 134,
                'country_id' => 166,
                'name' => 'Saskatchewan',
                'full_name' => NULL,
                'code' => 'SK',
                'has_city' => 0,
            ),
            133 =>
            array (
                'id' => 135,
                'country_id' => 166,
                'name' => 'Yukon',
                'full_name' => NULL,
                'code' => 'YT',
                'has_city' => 1,
            ),
            134 =>
            array (
                'id' => 136,
                'country_id' => 85,
                'name' => 'Andhra Pradesh',
                'full_name' => NULL,
                'code' => 'AP',
                'has_city' => 1,
            ),
            135 =>
            array (
                'id' => 137,
                'country_id' => 85,
                'name' => 'Arunachal Pradesh',
                'full_name' => NULL,
                'code' => 'AR',
                'has_city' => 1,
            ),
            136 =>
            array (
                'id' => 138,
                'country_id' => 85,
                'name' => 'Assam',
                'full_name' => NULL,
                'code' => 'AS',
                'has_city' => 1,
            ),
            137 =>
            array (
                'id' => 139,
                'country_id' => 85,
                'name' => 'Bihar',
                'full_name' => NULL,
                'code' => 'BR',
                'has_city' => 1,
            ),
            138 =>
            array (
                'id' => 140,
                'country_id' => 85,
                'name' => 'Chhattisgarh',
                'full_name' => NULL,
                'code' => 'CG',
                'has_city' => 1,
            ),
            139 =>
            array (
                'id' => 141,
                'country_id' => 85,
                'name' => 'Goa',
                'full_name' => NULL,
                'code' => 'GA',
                'has_city' => 1,
            ),
            140 =>
            array (
                'id' => 142,
                'country_id' => 85,
                'name' => 'Gujarat',
                'full_name' => NULL,
                'code' => 'GJ',
                'has_city' => 1,
            ),
            141 =>
            array (
                'id' => 143,
                'country_id' => 85,
                'name' => 'Haryana',
                'full_name' => NULL,
                'code' => 'HR',
                'has_city' => 1,
            ),
            142 =>
            array (
                'id' => 144,
                'country_id' => 85,
                'name' => 'Himachal Pradesh',
                'full_name' => NULL,
                'code' => 'HP',
                'has_city' => 1,
            ),
            143 =>
            array (
                'id' => 145,
                'country_id' => 85,
                'name' => 'Jharkhand',
                'full_name' => NULL,
                'code' => 'JH',
                'has_city' => 1,
            ),
            144 =>
            array (
                'id' => 146,
                'country_id' => 85,
                'name' => 'Karnataka',
                'full_name' => NULL,
                'code' => 'KA',
                'has_city' => 1,
            ),
            145 =>
            array (
                'id' => 147,
                'country_id' => 85,
                'name' => 'Kerala',
                'full_name' => NULL,
                'code' => 'KL',
                'has_city' => 1,
            ),
            146 =>
            array (
                'id' => 148,
                'country_id' => 85,
                'name' => 'Madhya Pradesh',
                'full_name' => NULL,
                'code' => 'MP',
                'has_city' => 1,
            ),
            147 =>
            array (
                'id' => 149,
                'country_id' => 85,
                'name' => 'Maharashtra',
                'full_name' => NULL,
                'code' => 'MH',
                'has_city' => 1,
            ),
            148 =>
            array (
                'id' => 150,
                'country_id' => 85,
                'name' => 'Manipur',
                'full_name' => NULL,
                'code' => 'MN',
                'has_city' => 1,
            ),
            149 =>
            array (
                'id' => 151,
                'country_id' => 85,
                'name' => 'Meghalaya',
                'full_name' => NULL,
                'code' => 'ML',
                'has_city' => 1,
            ),
            150 =>
            array (
                'id' => 152,
                'country_id' => 85,
                'name' => 'Mizoram',
                'full_name' => NULL,
                'code' => 'MZ',
                'has_city' => 1,
            ),
            151 =>
            array (
                'id' => 153,
                'country_id' => 85,
                'name' => 'Nagaland',
                'full_name' => NULL,
                'code' => 'NL',
                'has_city' => 1,
            ),
            152 =>
            array (
                'id' => 154,
                'country_id' => 85,
                'name' => 'Odisha',
                'full_name' => NULL,
                'code' => 'OD',
                'has_city' => 1,
            ),
            153 =>
            array (
                'id' => 155,
                'country_id' => 85,
                'name' => 'Punjab',
                'full_name' => NULL,
                'code' => 'PB',
                'has_city' => 1,
            ),
            154 =>
            array (
                'id' => 156,
                'country_id' => 85,
                'name' => 'Rajasthan',
                'full_name' => NULL,
                'code' => 'RJ',
                'has_city' => 1,
            ),
            155 =>
            array (
                'id' => 157,
                'country_id' => 85,
                'name' => 'Sikkim',
                'full_name' => NULL,
                'code' => 'SK',
                'has_city' => 1,
            ),
            156 =>
            array (
                'id' => 158,
                'country_id' => 85,
                'name' => 'Tamil Nadu',
                'full_name' => NULL,
                'code' => 'TN',
                'has_city' => 1,
            ),
            157 =>
            array (
                'id' => 159,
                'country_id' => 85,
                'name' => 'Telangana',
                'full_name' => NULL,
                'code' => 'TS',
                'has_city' => 1,
            ),
            158 =>
            array (
                'id' => 160,
                'country_id' => 85,
                'name' => 'Tripura',
                'full_name' => NULL,
                'code' => 'TR',
                'has_city' => 1,
            ),
            159 =>
            array (
                'id' => 161,
                'country_id' => 85,
                'name' => 'Uttar Pradesh',
                'full_name' => NULL,
                'code' => 'UP',
                'has_city' => 1,
            ),
            160 =>
            array (
                'id' => 162,
                'country_id' => 85,
                'name' => 'Uttarakhand',
                'full_name' => NULL,
                'code' => 'UK',
                'has_city' => 1,
            ),
            161 =>
            array (
                'id' => 163,
                'country_id' => 85,
                'name' => 'West Bengal',
                'full_name' => NULL,
                'code' => 'WB',
                'has_city' => 1,
            ),
            162 =>
            array (
                'id' => 164,
                'country_id' => 85,
                'name' => 'Andaman and Nicobar Islands',
                'full_name' => NULL,
                'code' => 'AN',
                'has_city' => 1,
            ),
            163 =>
            array (
                'id' => 165,
                'country_id' => 85,
                'name' => 'Chandigarh',
                'full_name' => NULL,
                'code' => 'CH',
                'has_city' => 1,
            ),
            164 =>
            array (
                'id' => 166,
                'country_id' => 85,
                'name' => 'Dadra and Nagar Haveli and Daman and Diu',
                'full_name' => NULL,
                'code' => 'DD',
                'has_city' => 1,
            ),
            165 =>
            array (
                'id' => 167,
                'country_id' => 85,
                'name' => 'Delhi',
                'full_name' => NULL,
                'code' => 'DL',
                'has_city' => 1,
            ),
            166 =>
            array (
                'id' => 168,
                'country_id' => 85,
                'name' => 'Jammu and Kashmir',
                'full_name' => NULL,
                'code' => 'JK',
                'has_city' => 1,
            ),
            167 =>
            array (
                'id' => 169,
                'country_id' => 85,
                'name' => 'Ladakh',
                'full_name' => NULL,
                'code' => 'LA',
                'has_city' => 1,
            ),
            168 =>
            array (
                'id' => 170,
                'country_id' => 85,
                'name' => 'Lakshadweep',
                'full_name' => NULL,
                'code' => 'LD',
                'has_city' => 1,
            ),
            169 =>
            array (
                'id' => 171,
                'country_id' => 85,
                'name' => 'Puducherry',
                'full_name' => NULL,
                'code' => 'PY',
                'has_city' => 1,
            ),
            170 =>
            array (
                'id' => 172,
                'country_id' => 211,
                'name' => 'Acre',
                'full_name' => NULL,
                'code' => 'AC',
                'has_city' => 1,
            ),
            171 =>
            array (
                'id' => 173,
                'country_id' => 211,
                'name' => 'Alagoas',
                'full_name' => NULL,
                'code' => 'AL',
                'has_city' => 1,
            ),
            172 =>
            array (
                'id' => 174,
                'country_id' => 211,
                'name' => 'Amapá',
                'full_name' => NULL,
                'code' => 'AP',
                'has_city' => 1,
            ),
            173 =>
            array (
                'id' => 175,
                'country_id' => 211,
                'name' => 'Amazonas',
                'full_name' => NULL,
                'code' => 'AM',
                'has_city' => 1,
            ),
            174 =>
            array (
                'id' => 176,
                'country_id' => 211,
                'name' => 'Bahia',
                'full_name' => NULL,
                'code' => 'BA',
                'has_city' => 1,
            ),
            175 =>
            array (
                'id' => 177,
                'country_id' => 211,
                'name' => 'Ceará',
                'full_name' => NULL,
                'code' => 'CE',
                'has_city' => 1,
            ),
            176 =>
            array (
                'id' => 178,
                'country_id' => 211,
                'name' => 'Distrito Federal',
                'full_name' => NULL,
                'code' => 'DF',
                'has_city' => 1,
            ),
            177 =>
            array (
                'id' => 179,
                'country_id' => 211,
                'name' => 'Espírito Santo',
                'full_name' => NULL,
                'code' => 'ES',
                'has_city' => 1,
            ),
            178 =>
            array (
                'id' => 180,
                'country_id' => 211,
                'name' => 'Goiás',
                'full_name' => NULL,
                'code' => 'GO',
                'has_city' => 1,
            ),
            179 =>
            array (
                'id' => 181,
                'country_id' => 211,
                'name' => 'Maranhão',
                'full_name' => NULL,
                'code' => 'MA',
                'has_city' => 1,
            ),
            180 =>
            array (
                'id' => 182,
                'country_id' => 211,
                'name' => 'Mato Grosso',
                'full_name' => NULL,
                'code' => 'MT',
                'has_city' => 1,
            ),
            181 =>
            array (
                'id' => 183,
                'country_id' => 211,
                'name' => 'Mato Grosso do Sul',
                'full_name' => NULL,
                'code' => 'MS',
                'has_city' => 1,
            ),
            182 =>
            array (
                'id' => 184,
                'country_id' => 211,
                'name' => 'Minas Gerais',
                'full_name' => NULL,
                'code' => 'MG',
                'has_city' => 1,
            ),
            183 =>
            array (
                'id' => 185,
                'country_id' => 211,
                'name' => 'Pará',
                'full_name' => NULL,
                'code' => 'PA',
                'has_city' => 1,
            ),
            184 =>
            array (
                'id' => 186,
                'country_id' => 211,
                'name' => 'Paraíba',
                'full_name' => NULL,
                'code' => 'PB',
                'has_city' => 1,
            ),
            185 =>
            array (
                'id' => 187,
                'country_id' => 211,
                'name' => 'Paraná',
                'full_name' => NULL,
                'code' => 'PR',
                'has_city' => 1,
            ),
            186 =>
            array (
                'id' => 188,
                'country_id' => 211,
                'name' => 'Pernambuco',
                'full_name' => NULL,
                'code' => 'PE',
                'has_city' => 1,
            ),
            187 =>
            array (
                'id' => 189,
                'country_id' => 211,
                'name' => 'Piauí',
                'full_name' => NULL,
                'code' => 'PI',
                'has_city' => 1,
            ),
            188 =>
            array (
                'id' => 190,
                'country_id' => 211,
                'name' => 'Rio de Janeiro',
                'full_name' => NULL,
                'code' => 'RJ',
                'has_city' => 1,
            ),
            189 =>
            array (
                'id' => 191,
                'country_id' => 211,
                'name' => 'Rio Grande do Norte',
                'full_name' => NULL,
                'code' => 'RN',
                'has_city' => 1,
            ),
            190 =>
            array (
                'id' => 192,
                'country_id' => 211,
                'name' => 'Rio Grande do Sul',
                'full_name' => NULL,
                'code' => 'RS',
                'has_city' => 1,
            ),
            191 =>
            array (
                'id' => 193,
                'country_id' => 211,
                'name' => 'Rondônia',
                'full_name' => NULL,
                'code' => 'RO',
                'has_city' => 1,
            ),
            192 =>
            array (
                'id' => 194,
                'country_id' => 211,
                'name' => 'Roraima',
                'full_name' => NULL,
                'code' => 'RR',
                'has_city' => 1,
            ),
            193 =>
            array (
                'id' => 195,
                'country_id' => 211,
                'name' => 'Santa Catarina',
                'full_name' => NULL,
                'code' => 'SC',
                'has_city' => 1,
            ),
            194 =>
            array (
                'id' => 196,
                'country_id' => 211,
                'name' => 'São Paulo',
                'full_name' => NULL,
                'code' => 'SP',
                'has_city' => 1,
            ),
            195 =>
            array (
                'id' => 197,
                'country_id' => 211,
                'name' => 'Sergipe',
                'full_name' => NULL,
                'code' => 'SE',
                'has_city' => 1,
            ),
            196 =>
            array (
                'id' => 198,
                'country_id' => 211,
                'name' => 'Tocantins',
                'full_name' => NULL,
                'code' => 'TO',
                'has_city' => 1,
            ),
            197 =>
            array (
                'id' => 228,
                'country_id' => 106,
                'name' => 'Aguascalientes',
                'full_name' => NULL,
                'code' => 'AG',
                'has_city' => 1,
            ),
            198 =>
            array (
                'id' => 229,
                'country_id' => 106,
                'name' => 'Baja California',
                'full_name' => NULL,
                'code' => 'BC',
                'has_city' => 1,
            ),
            199 =>
            array (
                'id' => 230,
                'country_id' => 106,
                'name' => 'Baja California Sur',
                'full_name' => NULL,
                'code' => 'BS',
                'has_city' => 1,
            ),
            200 =>
            array (
                'id' => 231,
                'country_id' => 106,
                'name' => 'Campeche',
                'full_name' => NULL,
                'code' => 'CM',
                'has_city' => 1,
            ),
            201 =>
            array (
                'id' => 232,
                'country_id' => 106,
                'name' => 'Chiapas',
                'full_name' => NULL,
                'code' => 'CS',
                'has_city' => 1,
            ),
            202 =>
            array (
                'id' => 233,
                'country_id' => 106,
                'name' => 'Chihuahua',
                'full_name' => NULL,
                'code' => 'CH',
                'has_city' => 1,
            ),
            203 =>
            array (
                'id' => 234,
                'country_id' => 106,
                'name' => 'Coahuila',
                'full_name' => NULL,
                'code' => 'CO',
                'has_city' => 1,
            ),
            204 =>
            array (
                'id' => 235,
                'country_id' => 106,
                'name' => 'Colima',
                'full_name' => NULL,
                'code' => 'CL',
                'has_city' => 1,
            ),
            205 =>
            array (
                'id' => 236,
                'country_id' => 106,
                'name' => 'Mexico City',
                'full_name' => NULL,
                'code' => 'DF',
                'has_city' => 1,
            ),
            206 =>
            array (
                'id' => 237,
                'country_id' => 106,
                'name' => 'Durango',
                'full_name' => NULL,
                'code' => 'DG',
                'has_city' => 1,
            ),
            207 =>
            array (
                'id' => 238,
                'country_id' => 106,
                'name' => 'Guanajuato',
                'full_name' => NULL,
                'code' => 'GT',
                'has_city' => 1,
            ),
            208 =>
            array (
                'id' => 239,
                'country_id' => 106,
                'name' => 'Guerrero',
                'full_name' => NULL,
                'code' => 'GR',
                'has_city' => 1,
            ),
            209 =>
            array (
                'id' => 240,
                'country_id' => 106,
                'name' => 'Hidalgo',
                'full_name' => NULL,
                'code' => 'HG',
                'has_city' => 1,
            ),
            210 =>
            array (
                'id' => 241,
                'country_id' => 106,
                'name' => 'Jalisco',
                'full_name' => NULL,
                'code' => 'JA',
                'has_city' => 1,
            ),
            211 =>
            array (
                'id' => 242,
                'country_id' => 106,
                'name' => 'México',
                'full_name' => NULL,
                'code' => 'EM',
                'has_city' => 1,
            ),
            212 =>
            array (
                'id' => 243,
                'country_id' => 106,
                'name' => 'Michoacán',
                'full_name' => NULL,
                'code' => 'MI',
                'has_city' => 1,
            ),
            213 =>
            array (
                'id' => 244,
                'country_id' => 106,
                'name' => 'Morelos',
                'full_name' => NULL,
                'code' => 'MO',
                'has_city' => 1,
            ),
            214 =>
            array (
                'id' => 245,
                'country_id' => 106,
                'name' => 'Nayarit',
                'full_name' => NULL,
                'code' => 'NA',
                'has_city' => 1,
            ),
            215 =>
            array (
                'id' => 246,
                'country_id' => 106,
                'name' => 'Nuevo León',
                'full_name' => NULL,
                'code' => 'NL',
                'has_city' => 1,
            ),
            216 =>
            array (
                'id' => 247,
                'country_id' => 106,
                'name' => 'Oaxaca',
                'full_name' => NULL,
                'code' => 'OA',
                'has_city' => 1,
            ),
            217 =>
            array (
                'id' => 248,
                'country_id' => 106,
                'name' => 'Puebla',
                'full_name' => NULL,
                'code' => 'PU',
                'has_city' => 1,
            ),
            218 =>
            array (
                'id' => 249,
                'country_id' => 106,
                'name' => 'Querétaro',
                'full_name' => NULL,
                'code' => 'QT',
                'has_city' => 1,
            ),
            219 =>
            array (
                'id' => 250,
                'country_id' => 106,
                'name' => 'Quintana Roo',
                'full_name' => NULL,
                'code' => 'QR',
                'has_city' => 1,
            ),
            220 =>
            array (
                'id' => 251,
                'country_id' => 106,
                'name' => 'San Luis Potosí',
                'full_name' => NULL,
                'code' => 'SL',
                'has_city' => 1,
            ),
            221 =>
            array (
                'id' => 252,
                'country_id' => 106,
                'name' => 'Sinaloa',
                'full_name' => NULL,
                'code' => 'SI',
                'has_city' => 1,
            ),
            222 =>
            array (
                'id' => 253,
                'country_id' => 106,
                'name' => 'Sonora',
                'full_name' => NULL,
                'code' => 'SO',
                'has_city' => 1,
            ),
            223 =>
            array (
                'id' => 254,
                'country_id' => 106,
                'name' => 'Tabasco',
                'full_name' => NULL,
                'code' => 'TB',
                'has_city' => 1,
            ),
            224 =>
            array (
                'id' => 255,
                'country_id' => 106,
                'name' => 'Tamaulipas',
                'full_name' => NULL,
                'code' => 'TM',
                'has_city' => 1,
            ),
            225 =>
            array (
                'id' => 256,
                'country_id' => 106,
                'name' => 'Tlaxcala',
                'full_name' => NULL,
                'code' => 'TL',
                'has_city' => 1,
            ),
            226 =>
            array (
                'id' => 257,
                'country_id' => 106,
                'name' => 'Veracruz',
                'full_name' => NULL,
                'code' => 'VE',
                'has_city' => 1,
            ),
            227 =>
            array (
                'id' => 258,
                'country_id' => 106,
                'name' => 'Yucatán',
                'full_name' => NULL,
                'code' => 'YU',
                'has_city' => 1,
            ),
            228 =>
            array (
                'id' => 259,
                'country_id' => 106,
                'name' => 'Zacatecas',
                'full_name' => NULL,
                'code' => 'ZA',
                'has_city' => 1,
            ),
            229 =>
            array (
                'id' => 260,
                'country_id' => 104,
                'name' => 'Camagüey',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            230 =>
            array (
                'id' => 261,
                'country_id' => 104,
                'name' => 'Ciego de Ávila',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            231 =>
            array (
                'id' => 262,
                'country_id' => 104,
                'name' => 'Cienfuegos',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            232 =>
            array (
                'id' => 263,
                'country_id' => 104,
                'name' => 'La Habana',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            233 =>
            array (
                'id' => 264,
                'country_id' => 104,
                'name' => 'Granma',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            234 =>
            array (
                'id' => 265,
                'country_id' => 104,
                'name' => 'Guantánamo',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            235 =>
            array (
                'id' => 266,
                'country_id' => 104,
                'name' => 'Holguín',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            236 =>
            array (
                'id' => 267,
                'country_id' => 104,
                'name' => 'Isla de la Juventud',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            237 =>
            array (
                'id' => 268,
                'country_id' => 104,
                'name' => 'Artemisa',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            238 =>
            array (
                'id' => 269,
                'country_id' => 104,
                'name' => 'Las Tunas',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            239 =>
            array (
                'id' => 270,
                'country_id' => 104,
                'name' => 'Matanzas',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            240 =>
            array (
                'id' => 271,
                'country_id' => 104,
                'name' => 'Mayabeque',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            241 =>
            array (
                'id' => 272,
                'country_id' => 104,
                'name' => 'Pinar del Río',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            242 =>
            array (
                'id' => 273,
                'country_id' => 104,
                'name' => 'Sancti Spíritus',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            243 =>
            array (
                'id' => 274,
                'country_id' => 104,
                'name' => 'Santiago de Cuba',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            244 =>
            array (
                'id' => 275,
                'country_id' => 104,
                'name' => 'Villa Clara',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            245 =>
            array (
                'id' => 276,
                'country_id' => 141,
                'name' => 'Drenthe',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            246 =>
            array (
                'id' => 277,
                'country_id' => 141,
                'name' => 'Flevoland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            247 =>
            array (
                'id' => 278,
                'country_id' => 141,
                'name' => 'Friesland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            248 =>
            array (
                'id' => 279,
                'country_id' => 141,
                'name' => 'Gelderland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            249 =>
            array (
                'id' => 280,
                'country_id' => 141,
                'name' => 'Groningen',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            250 =>
            array (
                'id' => 281,
                'country_id' => 141,
                'name' => 'Limburg',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            251 =>
            array (
                'id' => 282,
                'country_id' => 141,
                'name' => 'Noord-Brabant',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            252 =>
            array (
                'id' => 283,
                'country_id' => 141,
                'name' => 'Noord-Holland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            253 =>
            array (
                'id' => 284,
                'country_id' => 141,
                'name' => 'Overijssel',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            254 =>
            array (
                'id' => 285,
                'country_id' => 141,
                'name' => 'Zuid-Holland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            255 =>
            array (
                'id' => 286,
                'country_id' => 141,
                'name' => 'Utrecht',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            256 =>
            array (
                'id' => 287,
                'country_id' => 141,
                'name' => 'Zeeland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            257 =>
            array (
                'id' => 288,
                'country_id' => 141,
                'name' => 'Bonaire',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            258 =>
            array (
                'id' => 289,
                'country_id' => 141,
                'name' => 'Saba',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            259 =>
            array (
                'id' => 290,
                'country_id' => 141,
                'name' => 'Sint Eustatius',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            260 =>
            array (
                'id' => 291,
                'country_id' => 81,
                'name' => 'Aceh',
                'full_name' => NULL,
                'code' => 'AC',
                'has_city' => 1,
            ),
            261 =>
            array (
                'id' => 292,
                'country_id' => 81,
                'name' => 'Bali',
                'full_name' => NULL,
                'code' => 'BA',
                'has_city' => 1,
            ),
            262 =>
            array (
                'id' => 293,
                'country_id' => 81,
                'name' => 'Bangka Belitung Islands',
                'full_name' => NULL,
                'code' => 'BB',
                'has_city' => 1,
            ),
            263 =>
            array (
                'id' => 294,
                'country_id' => 81,
                'name' => 'Banten',
                'full_name' => NULL,
                'code' => 'BT',
                'has_city' => 1,
            ),
            264 =>
            array (
                'id' => 295,
                'country_id' => 81,
                'name' => 'Bengkulu',
                'full_name' => NULL,
                'code' => 'BE',
                'has_city' => 1,
            ),
            265 =>
            array (
                'id' => 296,
                'country_id' => 81,
                'name' => 'Central Java',
                'full_name' => NULL,
                'code' => 'JT',
                'has_city' => 1,
            ),
            266 =>
            array (
                'id' => 297,
                'country_id' => 81,
                'name' => 'Central Kalimantan',
                'full_name' => NULL,
                'code' => 'KT',
                'has_city' => 1,
            ),
            267 =>
            array (
                'id' => 298,
                'country_id' => 81,
                'name' => 'Central Sulawesi',
                'full_name' => NULL,
                'code' => 'ST',
                'has_city' => 1,
            ),
            268 =>
            array (
                'id' => 299,
                'country_id' => 81,
                'name' => 'East Java',
                'full_name' => NULL,
                'code' => 'JI',
                'has_city' => 1,
            ),
            269 =>
            array (
                'id' => 300,
                'country_id' => 81,
                'name' => 'East Kalimantan',
                'full_name' => NULL,
                'code' => 'KI',
                'has_city' => 1,
            ),
            270 =>
            array (
                'id' => 301,
                'country_id' => 81,
                'name' => 'East Nusa Tenggara',
                'full_name' => NULL,
                'code' => 'NT',
                'has_city' => 1,
            ),
            271 =>
            array (
                'id' => 302,
                'country_id' => 81,
                'name' => 'Gorontalo',
                'full_name' => NULL,
                'code' => 'GO',
                'has_city' => 1,
            ),
            272 =>
            array (
                'id' => 303,
                'country_id' => 81,
                'name' => 'Special Capital Region of Jakarta',
                'full_name' => NULL,
                'code' => 'JK',
                'has_city' => 1,
            ),
            273 =>
            array (
                'id' => 304,
                'country_id' => 81,
                'name' => 'Jambi',
                'full_name' => NULL,
                'code' => 'JA',
                'has_city' => 1,
            ),
            274 =>
            array (
                'id' => 305,
                'country_id' => 81,
                'name' => 'Lampung',
                'full_name' => NULL,
                'code' => 'LA',
                'has_city' => 1,
            ),
            275 =>
            array (
                'id' => 306,
                'country_id' => 81,
                'name' => 'Maluku',
                'full_name' => NULL,
                'code' => 'MA',
                'has_city' => 1,
            ),
            276 =>
            array (
                'id' => 307,
                'country_id' => 81,
                'name' => 'North Kalimantan',
                'full_name' => NULL,
                'code' => 'KU',
                'has_city' => 1,
            ),
            277 =>
            array (
                'id' => 308,
                'country_id' => 81,
                'name' => 'North Maluku',
                'full_name' => NULL,
                'code' => 'MU',
                'has_city' => 1,
            ),
            278 =>
            array (
                'id' => 309,
                'country_id' => 81,
                'name' => 'North Sulawesi',
                'full_name' => NULL,
                'code' => 'SA',
                'has_city' => 1,
            ),
            279 =>
            array (
                'id' => 310,
                'country_id' => 81,
                'name' => 'North Sumatra',
                'full_name' => NULL,
                'code' => 'SU',
                'has_city' => 1,
            ),
            280 =>
            array (
                'id' => 311,
                'country_id' => 81,
                'name' => 'Papua',
                'full_name' => NULL,
                'code' => 'PA',
                'has_city' => 1,
            ),
            281 =>
            array (
                'id' => 312,
                'country_id' => 81,
                'name' => 'Riau',
                'full_name' => NULL,
                'code' => 'RI',
                'has_city' => 1,
            ),
            282 =>
            array (
                'id' => 313,
                'country_id' => 81,
                'name' => 'Riau Islands',
                'full_name' => NULL,
                'code' => 'KR',
                'has_city' => 1,
            ),
            283 =>
            array (
                'id' => 314,
                'country_id' => 81,
                'name' => 'Southeast Sulawesi',
                'full_name' => NULL,
                'code' => 'SG',
                'has_city' => 1,
            ),
            284 =>
            array (
                'id' => 315,
                'country_id' => 81,
                'name' => 'South Kalimantan',
                'full_name' => NULL,
                'code' => 'KS',
                'has_city' => 1,
            ),
            285 =>
            array (
                'id' => 316,
                'country_id' => 81,
                'name' => 'South Sulawesi',
                'full_name' => NULL,
                'code' => 'SN',
                'has_city' => 1,
            ),
            286 =>
            array (
                'id' => 317,
                'country_id' => 81,
                'name' => 'South Sumatra',
                'full_name' => NULL,
                'code' => 'SS',
                'has_city' => 1,
            ),
            287 =>
            array (
                'id' => 318,
                'country_id' => 81,
                'name' => 'West Java',
                'full_name' => NULL,
                'code' => 'JB',
                'has_city' => 1,
            ),
            288 =>
            array (
                'id' => 319,
                'country_id' => 81,
                'name' => 'West Kalimantan',
                'full_name' => NULL,
                'code' => 'KB',
                'has_city' => 1,
            ),
            289 =>
            array (
                'id' => 320,
                'country_id' => 81,
                'name' => 'West Nusa Tenggara',
                'full_name' => NULL,
                'code' => 'NB',
                'has_city' => 1,
            ),
            290 =>
            array (
                'id' => 321,
                'country_id' => 81,
                'name' => 'West Papua',
                'full_name' => NULL,
                'code' => 'PB',
                'has_city' => 1,
            ),
            291 =>
            array (
                'id' => 322,
                'country_id' => 81,
                'name' => 'West Sulawesi',
                'full_name' => NULL,
                'code' => 'SR',
                'has_city' => 1,
            ),
            292 =>
            array (
                'id' => 323,
                'country_id' => 81,
                'name' => 'West Sumatra',
                'full_name' => NULL,
                'code' => 'SB',
                'has_city' => 1,
            ),
            293 =>
            array (
                'id' => 324,
                'country_id' => 81,
                'name' => 'Special Region of Yogyakarta',
                'full_name' => NULL,
                'code' => 'YO',
                'has_city' => 1,
            ),
            294 =>
            array (
                'id' => 325,
                'country_id' => 251,
                'name' => 'Northern Bahr el Ghazal',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            295 =>
            array (
                'id' => 326,
                'country_id' => 251,
                'name' => 'Western Bahr el Ghazal',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            296 =>
            array (
                'id' => 327,
                'country_id' => 251,
                'name' => 'Lakes',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            297 =>
            array (
                'id' => 328,
                'country_id' => 251,
                'name' => 'Warrap',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            298 =>
            array (
                'id' => 329,
                'country_id' => 251,
                'name' => 'Western Equatoria',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            299 =>
            array (
                'id' => 330,
                'country_id' => 251,
                'name' => 'Central Equatoria',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            300 =>
            array (
                'id' => 331,
                'country_id' => 251,
                'name' => 'Eastern Equatoria',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            301 =>
            array (
                'id' => 332,
                'country_id' => 251,
                'name' => 'Jonglei',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            302 =>
            array (
                'id' => 333,
                'country_id' => 251,
                'name' => 'Unity',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            303 =>
            array (
                'id' => 334,
                'country_id' => 251,
                'name' => 'Upper Nile',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            304 =>
            array (
                'id' => 335,
                'country_id' => 251,
                'name' => 'Abyei Area',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            305 =>
            array (
                'id' => 336,
                'country_id' => 251,
                'name' => 'Pibor Area',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            306 =>
            array (
                'id' => 337,
                'country_id' => 251,
                'name' => 'Ruweng Area',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            307 =>
            array (
                'id' => 338,
                'country_id' => 55,
                'name' => 'Khartoum',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            308 =>
            array (
                'id' => 339,
                'country_id' => 55,
                'name' => 'South Darfur',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            309 =>
            array (
                'id' => 340,
                'country_id' => 55,
                'name' => 'Gezira',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            310 =>
            array (
                'id' => 341,
                'country_id' => 55,
                'name' => 'North Kordofan',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            311 =>
            array (
                'id' => 342,
                'country_id' => 55,
                'name' => 'Kassala',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            312 =>
            array (
                'id' => 343,
                'country_id' => 55,
                'name' => 'Central Darfur',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            313 =>
            array (
                'id' => 344,
                'country_id' => 55,
                'name' => 'White Nile',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            314 =>
            array (
                'id' => 345,
                'country_id' => 55,
                'name' => 'North Darfur',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            315 =>
            array (
                'id' => 346,
                'country_id' => 55,
                'name' => 'Al Qadarif',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            316 =>
            array (
                'id' => 347,
                'country_id' => 55,
                'name' => 'South Kordofan',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            317 =>
            array (
                'id' => 348,
                'country_id' => 55,
                'name' => 'Sennar',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            318 =>
            array (
                'id' => 349,
                'country_id' => 55,
                'name' => 'West Darfur',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            319 =>
            array (
                'id' => 350,
                'country_id' => 55,
                'name' => 'River Nile',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            320 =>
            array (
                'id' => 351,
                'country_id' => 55,
                'name' => 'Red Sea',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            321 =>
            array (
                'id' => 352,
                'country_id' => 55,
                'name' => 'West Kordofan',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            322 =>
            array (
                'id' => 353,
                'country_id' => 55,
                'name' => 'East Darfur',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            323 =>
            array (
                'id' => 354,
                'country_id' => 55,
                'name' => 'Blue Nile',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            324 =>
            array (
                'id' => 355,
                'country_id' => 55,
                'name' => 'Northern',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            325 =>
            array (
                'id' => 356,
                'country_id' => 97,
                'name' => 'Province No. 1',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            326 =>
            array (
                'id' => 357,
                'country_id' => 97,
                'name' => 'Province No. 2',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            327 =>
            array (
                'id' => 358,
                'country_id' => 97,
                'name' => 'Bagmati Province',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            328 =>
            array (
                'id' => 359,
                'country_id' => 97,
                'name' => 'Gandaki Province',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            329 =>
            array (
                'id' => 360,
                'country_id' => 97,
                'name' => 'Lumbini Province',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            330 =>
            array (
                'id' => 361,
                'country_id' => 97,
                'name' => 'Karnali Province',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            331 =>
            array (
                'id' => 362,
                'country_id' => 97,
                'name' => 'Sudurpashchim Province',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            332 =>
            array (
                'id' => 363,
                'country_id' => 108,
                'name' => 'Bocas del Toro',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            333 =>
            array (
                'id' => 364,
                'country_id' => 108,
                'name' => 'Chiriquí',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            334 =>
            array (
                'id' => 365,
                'country_id' => 108,
                'name' => 'Coclé',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            335 =>
            array (
                'id' => 366,
                'country_id' => 108,
                'name' => 'Colón',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            336 =>
            array (
                'id' => 367,
                'country_id' => 108,
                'name' => 'Darién',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            337 =>
            array (
                'id' => 368,
                'country_id' => 108,
                'name' => 'Herrera',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            338 =>
            array (
                'id' => 369,
                'country_id' => 108,
                'name' => 'Los Santos',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            339 =>
            array (
                'id' => 370,
                'country_id' => 108,
                'name' => 'Panamá',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            340 =>
            array (
                'id' => 371,
                'country_id' => 108,
                'name' => 'Panamá Oeste',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            341 =>
            array (
                'id' => 372,
                'country_id' => 108,
                'name' => 'Veraguas',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            342 =>
            array (
                'id' => 373,
                'country_id' => 105,
                'name' => 'Azua de Compostela',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            343 =>
            array (
                'id' => 374,
                'country_id' => 105,
                'name' => 'Baoruco',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            344 =>
            array (
                'id' => 375,
                'country_id' => 105,
                'name' => 'Barahona',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            345 =>
            array (
                'id' => 376,
                'country_id' => 105,
                'name' => 'Dajabón',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            346 =>
            array (
                'id' => 377,
                'country_id' => 105,
                'name' => 'Distrito Nacional',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            347 =>
            array (
                'id' => 378,
                'country_id' => 105,
                'name' => 'Duarte',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            348 =>
            array (
                'id' => 379,
                'country_id' => 105,
                'name' => 'Elías Piña',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            349 =>
            array (
                'id' => 380,
                'country_id' => 105,
                'name' => 'El Seibo',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            350 =>
            array (
                'id' => 381,
                'country_id' => 105,
                'name' => 'Espaillat  ',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            351 =>
            array (
                'id' => 382,
                'country_id' => 105,
                'name' => 'Hato Mayor',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            352 =>
            array (
                'id' => 383,
                'country_id' => 105,
                'name' => 'Hermanas Mirabal',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            353 =>
            array (
                'id' => 384,
                'country_id' => 105,
                'name' => 'Independencia',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            354 =>
            array (
                'id' => 385,
                'country_id' => 105,
                'name' => 'La Altagracia',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            355 =>
            array (
                'id' => 386,
                'country_id' => 105,
                'name' => 'La Romana',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            356 =>
            array (
                'id' => 387,
                'country_id' => 105,
                'name' => 'La Vega',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            357 =>
            array (
                'id' => 388,
                'country_id' => 105,
                'name' => 'María Trinidad Sánchez',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            358 =>
            array (
                'id' => 389,
                'country_id' => 105,
                'name' => 'Bonao',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            359 =>
            array (
                'id' => 390,
                'country_id' => 105,
                'name' => 'Monte Cristi  ',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            360 =>
            array (
                'id' => 391,
                'country_id' => 105,
                'name' => 'Monte Plata',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            361 =>
            array (
                'id' => 392,
                'country_id' => 105,
                'name' => 'Pedernales',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            362 =>
            array (
                'id' => 393,
                'country_id' => 105,
                'name' => 'Peravia',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            363 =>
            array (
                'id' => 394,
                'country_id' => 105,
                'name' => 'Puerto Plata',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            364 =>
            array (
                'id' => 395,
                'country_id' => 105,
                'name' => 'Samaná',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            365 =>
            array (
                'id' => 396,
                'country_id' => 105,
                'name' => 'San Cristóbal',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            366 =>
            array (
                'id' => 397,
                'country_id' => 105,
                'name' => 'San José de Ocoa',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            367 =>
            array (
                'id' => 398,
                'country_id' => 105,
                'name' => 'San Juan',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            368 =>
            array (
                'id' => 399,
                'country_id' => 105,
                'name' => 'San Pedro de Macorís',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            369 =>
            array (
                'id' => 400,
                'country_id' => 105,
                'name' => 'Sánchez Ramírez',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            370 =>
            array (
                'id' => 401,
                'country_id' => 105,
                'name' => 'Santiago',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            371 =>
            array (
                'id' => 402,
                'country_id' => 105,
                'name' => 'Santiago Rodríguez',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            372 =>
            array (
                'id' => 403,
                'country_id' => 105,
                'name' => 'Santo Domingo',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            373 =>
            array (
                'id' => 404,
                'country_id' => 105,
                'name' => 'Valverde',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            374 =>
            array (
                'id' => 405,
                'country_id' => 194,
                'name' => 'Azuay',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            375 =>
            array (
                'id' => 406,
                'country_id' => 194,
                'name' => 'Bolívar',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            376 =>
            array (
                'id' => 407,
                'country_id' => 194,
                'name' => 'Cañar',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            377 =>
            array (
                'id' => 408,
                'country_id' => 194,
                'name' => 'Carchi',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            378 =>
            array (
                'id' => 409,
                'country_id' => 194,
                'name' => 'Chimborazo',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            379 =>
            array (
                'id' => 410,
                'country_id' => 194,
                'name' => 'Cotopaxi',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            380 =>
            array (
                'id' => 411,
                'country_id' => 194,
                'name' => 'El Oro',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            381 =>
            array (
                'id' => 412,
                'country_id' => 194,
                'name' => 'Esmeraldas',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            382 =>
            array (
                'id' => 413,
                'country_id' => 194,
                'name' => 'Galápagos',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            383 =>
            array (
                'id' => 414,
                'country_id' => 194,
                'name' => 'Guayas',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            384 =>
            array (
                'id' => 415,
                'country_id' => 194,
                'name' => 'Imbabura',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            385 =>
            array (
                'id' => 416,
                'country_id' => 194,
                'name' => 'Loja',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            386 =>
            array (
                'id' => 417,
                'country_id' => 194,
                'name' => 'Los Ríos',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            387 =>
            array (
                'id' => 418,
                'country_id' => 194,
                'name' => 'Manabí',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            388 =>
            array (
                'id' => 419,
                'country_id' => 194,
                'name' => 'Morona Santiago',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            389 =>
            array (
                'id' => 420,
                'country_id' => 194,
                'name' => 'Napo',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            390 =>
            array (
                'id' => 421,
                'country_id' => 194,
                'name' => 'Orellana',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            391 =>
            array (
                'id' => 422,
                'country_id' => 194,
                'name' => 'Pastaza',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            392 =>
            array (
                'id' => 423,
                'country_id' => 194,
                'name' => 'Pichincha',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            393 =>
            array (
                'id' => 424,
                'country_id' => 194,
                'name' => 'Santa Elena',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            394 =>
            array (
                'id' => 425,
                'country_id' => 194,
                'name' => 'Santo Domingo de los Tsáchilas',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            395 =>
            array (
                'id' => 426,
                'country_id' => 194,
                'name' => 'Sucumbíos',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            396 =>
            array (
                'id' => 427,
                'country_id' => 194,
                'name' => 'Tungurahua',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            397 =>
            array (
                'id' => 428,
                'country_id' => 194,
                'name' => 'Zamora Chinchipe',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            398 =>
            array (
                'id' => 429,
                'country_id' => 94,
                'name' => 'Mecca',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            399 =>
            array (
                'id' => 430,
                'country_id' => 94,
                'name' => 'Riyadh',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            400 =>
            array (
                'id' => 431,
                'country_id' => 94,
                'name' => 'Eastern',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            401 =>
            array (
                'id' => 432,
                'country_id' => 94,
                'name' => 'Asir',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            402 =>
            array (
                'id' => 433,
                'country_id' => 94,
                'name' => 'Jizan',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            403 =>
            array (
                'id' => 434,
                'country_id' => 94,
                'name' => 'Medina',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            404 =>
            array (
                'id' => 435,
                'country_id' => 94,
                'name' => 'Al-Qassim',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            405 =>
            array (
                'id' => 436,
                'country_id' => 94,
                'name' => 'Tabuk',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            406 =>
            array (
                'id' => 437,
                'country_id' => 94,
                'name' => 'Ha\'il',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            407 =>
            array (
                'id' => 438,
                'country_id' => 94,
                'name' => 'Najran',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            408 =>
            array (
                'id' => 439,
                'country_id' => 94,
                'name' => 'Al-Jawf',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            409 =>
            array (
                'id' => 440,
                'country_id' => 94,
                'name' => 'Al-Bahah',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            410 =>
            array (
                'id' => 441,
                'country_id' => 94,
                'name' => 'Northern Borders',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            411 =>
            array (
                'id' => 442,
                'country_id' => 128,
                'name' => 'Ångermanland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            412 =>
            array (
                'id' => 443,
                'country_id' => 128,
                'name' => 'Blekinge',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            413 =>
            array (
                'id' => 444,
                'country_id' => 128,
                'name' => 'Bohuslän',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            414 =>
            array (
                'id' => 445,
                'country_id' => 128,
                'name' => 'Dalarna',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            415 =>
            array (
                'id' => 446,
                'country_id' => 128,
                'name' => 'Dalsland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            416 =>
            array (
                'id' => 447,
                'country_id' => 128,
                'name' => 'Gästrikland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            417 =>
            array (
                'id' => 448,
                'country_id' => 128,
                'name' => 'Gotland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            418 =>
            array (
                'id' => 449,
                'country_id' => 128,
                'name' => 'Halland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            419 =>
            array (
                'id' => 450,
                'country_id' => 128,
                'name' => 'Hälsingland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            420 =>
            array (
                'id' => 451,
                'country_id' => 128,
                'name' => 'Härjedalen',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            421 =>
            array (
                'id' => 452,
                'country_id' => 128,
                'name' => 'Jämtland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            422 =>
            array (
                'id' => 453,
                'country_id' => 128,
                'name' => 'Lappland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            423 =>
            array (
                'id' => 454,
                'country_id' => 128,
                'name' => 'Medelpad',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            424 =>
            array (
                'id' => 455,
                'country_id' => 128,
                'name' => 'Närke',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            425 =>
            array (
                'id' => 456,
                'country_id' => 128,
                'name' => 'Norrbotten',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            426 =>
            array (
                'id' => 457,
                'country_id' => 128,
                'name' => 'Öland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            427 =>
            array (
                'id' => 458,
                'country_id' => 128,
                'name' => 'Östergötland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            428 =>
            array (
                'id' => 459,
                'country_id' => 128,
                'name' => 'Skåne',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            429 =>
            array (
                'id' => 460,
                'country_id' => 128,
                'name' => 'Småland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            430 =>
            array (
                'id' => 461,
                'country_id' => 128,
                'name' => 'Södermanland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            431 =>
            array (
                'id' => 462,
                'country_id' => 128,
                'name' => 'Uppland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            432 =>
            array (
                'id' => 463,
                'country_id' => 128,
                'name' => 'Värmland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            433 =>
            array (
                'id' => 464,
                'country_id' => 128,
                'name' => 'Västerbotten',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            434 =>
            array (
                'id' => 465,
                'country_id' => 128,
                'name' => 'Västergötland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            435 =>
            array (
                'id' => 466,
                'country_id' => 128,
                'name' => 'Västmanland',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            436 =>
            array (
                'id' => 467,
                'country_id' => 154,
                'name' => 'Lower Silesian',
                'full_name' => NULL,
                'code' => 'DS',
                'has_city' => 0,
            ),
            437 =>
            array (
                'id' => 468,
                'country_id' => 154,
                'name' => 'Kuyavian-Pomeranian',
                'full_name' => NULL,
                'code' => 'KP',
                'has_city' => 0,
            ),
            438 =>
            array (
                'id' => 469,
                'country_id' => 154,
                'name' => 'Lublin',
                'full_name' => NULL,
                'code' => 'LU',
                'has_city' => 0,
            ),
            439 =>
            array (
                'id' => 470,
                'country_id' => 154,
                'name' => 'Lubusz',
                'full_name' => NULL,
                'code' => 'LB',
                'has_city' => 0,
            ),
            440 =>
            array (
                'id' => 471,
                'country_id' => 154,
                'name' => 'Łódź',
                'full_name' => NULL,
                'code' => 'LD',
                'has_city' => 0,
            ),
            441 =>
            array (
                'id' => 472,
                'country_id' => 154,
                'name' => 'Lesser Poland',
                'full_name' => NULL,
                'code' => 'MA',
                'has_city' => 0,
            ),
            442 =>
            array (
                'id' => 473,
                'country_id' => 154,
                'name' => 'Masovian',
                'full_name' => NULL,
                'code' => 'MZ',
                'has_city' => 1,
            ),
            443 =>
            array (
                'id' => 474,
                'country_id' => 154,
                'name' => 'Opole',
                'full_name' => NULL,
                'code' => 'OP',
                'has_city' => 0,
            ),
            444 =>
            array (
                'id' => 475,
                'country_id' => 154,
                'name' => 'Subcarpathian',
                'full_name' => NULL,
                'code' => 'PK',
                'has_city' => 0,
            ),
            445 =>
            array (
                'id' => 476,
                'country_id' => 154,
                'name' => 'Podlaskie',
                'full_name' => NULL,
                'code' => 'PD',
                'has_city' => 0,
            ),
            446 =>
            array (
                'id' => 477,
                'country_id' => 154,
                'name' => 'Pomeranian',
                'full_name' => NULL,
                'code' => 'PM',
                'has_city' => 0,
            ),
            447 =>
            array (
                'id' => 478,
                'country_id' => 154,
                'name' => 'Silesian',
                'full_name' => NULL,
                'code' => 'SL',
                'has_city' => 0,
            ),
            448 =>
            array (
                'id' => 479,
                'country_id' => 154,
                'name' => 'Holy Cross',
                'full_name' => NULL,
                'code' => 'SK',
                'has_city' => 0,
            ),
            449 =>
            array (
                'id' => 480,
                'country_id' => 154,
                'name' => 'Warmian-Masurian',
                'full_name' => NULL,
                'code' => 'WN',
                'has_city' => 0,
            ),
            450 =>
            array (
                'id' => 481,
                'country_id' => 154,
                'name' => 'Greater Poland',
                'full_name' => NULL,
                'code' => 'WP',
                'has_city' => 0,
            ),
            451 =>
            array (
                'id' => 482,
                'country_id' => 154,
                'name' => 'West Pomeranian',
                'full_name' => NULL,
                'code' => 'ZP',
                'has_city' => 0,
            ),
            452 =>
            array (
                'id' => 483,
                'country_id' => 1,
                'name' => 'Adamawa',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            453 =>
            array (
                'id' => 484,
                'country_id' => 1,
                'name' => 'Central',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 1,
            ),
            454 =>
            array (
                'id' => 485,
                'country_id' => 1,
                'name' => 'East',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            455 =>
            array (
                'id' => 486,
                'country_id' => 1,
                'name' => 'Far North',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            456 =>
            array (
                'id' => 487,
                'country_id' => 1,
                'name' => 'Littoral',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            457 =>
            array (
                'id' => 488,
                'country_id' => 1,
                'name' => 'North',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            458 =>
            array (
                'id' => 489,
                'country_id' => 1,
                'name' => 'Northwest',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            459 =>
            array (
                'id' => 490,
                'country_id' => 1,
                'name' => 'South',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            460 =>
            array (
                'id' => 491,
                'country_id' => 1,
                'name' => 'Southwest',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
            461 =>
            array (
                'id' => 492,
                'country_id' => 1,
                'name' => 'West',
                'full_name' => NULL,
                'code' => NULL,
                'has_city' => 0,
            ),
        ));


    }
}
