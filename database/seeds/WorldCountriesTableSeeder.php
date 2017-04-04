<?php

use Illuminate\Database\Seeder;

class WorldCountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('world_countries')->delete();
        
        \DB::table('world_countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'continent_id' => 3,
                'name' => 'Cameroon',
                'full_name' => 'the Republic of Cameroon',
                'code' => 'CM',
                'code3' => 'CMR',
                'has_region' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'continent_id' => 3,
                'name' => 'Benin',
                'full_name' => 'the Republic of Benin ',
                'code' => 'BJ',
                'code3' => 'BEN',
                'has_region' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'continent_id' => 3,
                'name' => 'Madagascar',
                'full_name' => 'the Republic of Madagascar ',
                'code' => 'MG',
                'code3' => 'MDG',
                'has_region' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'continent_id' => 3,
                'name' => 'Rwanda',
                'full_name' => 'the Republic of Rwanda',
                'code' => 'RW',
                'code3' => 'RWA',
                'has_region' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'continent_id' => 3,
                'name' => 'Seychelles',
                'full_name' => 'the Republic of Seychelles',
                'code' => 'SC',
                'code3' => 'SYC',
                'has_region' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'continent_id' => 3,
                'name' => 'Cote d\'lvoire',
                'full_name' => 'the Republic of Cote d\'ivoire',
                'code' => 'CI',
                'code3' => 'CIV',
                'has_region' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'continent_id' => 3,
                'name' => 'Egypt',
                'full_name' => 'the Arab Republic of Egypt ',
                'code' => 'EG',
                'code3' => 'EGY',
                'has_region' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'continent_id' => 3,
                'name' => 'Mauritius',
                'full_name' => 'the Republic of Mauritius',
                'code' => 'MU',
                'code3' => 'MUS',
                'has_region' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'continent_id' => 3,
                'name' => 'Burkina Faso',
                'full_name' => 'Burkina Faso',
                'code' => 'BF',
                'code3' => 'BFA',
                'has_region' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'continent_id' => 3,
                'name' => 'Eritrea',
                'full_name' => 'the Commonwealth of Eritrea',
                'code' => 'ER',
                'code3' => 'ERI',
                'has_region' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'continent_id' => 3,
                'name' => 'Sao Tome and Principe',
                'full_name' => 'the Democratic Republic Sao Tome and Principe',
                'code' => 'ST',
                'code3' => 'STP',
                'has_region' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'continent_id' => 3,
                'name' => 'Angola',
                'full_name' => 'the Republic of Angola',
                'code' => 'AO',
                'code3' => 'AGO',
                'has_region' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'continent_id' => 3,
                'name' => 'Libyan Arab Jm',
                'full_name' => 'State of Libya',
                'code' => 'LY',
                'code3' => 'LBY',
                'has_region' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'continent_id' => 3,
                'name' => 'Zimbabwe',
                'full_name' => 'the Republic of Zimbabwe',
                'code' => 'ZW',
                'code3' => 'ZWE',
                'has_region' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'continent_id' => 3,
                'name' => 'Guinea',
                'full_name' => 'The Republic of Guinea',
                'code' => 'GN',
                'code3' => 'GIN',
                'has_region' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'continent_id' => 3,
                'name' => 'Sierra Leone',
                'full_name' => 'The Republic of Sierra Leone',
                'code' => 'SL',
                'code3' => 'SLE',
                'has_region' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'continent_id' => 3,
                'name' => 'Reunion',
                'full_name' => 'Reunion Island',
                'code' => 'RE',
                'code3' => 'REU',
                'has_region' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'continent_id' => 3,
                'name' => 'Gabon',
                'full_name' => 'The Gabonese Republic',
                'code' => 'GA',
                'code3' => 'GAB',
                'has_region' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'continent_id' => 3,
                'name' => 'Ghana',
                'full_name' => 'The Republic of Ghana',
                'code' => 'GH',
                'code3' => 'GHA',
                'has_region' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'continent_id' => 3,
                'name' => 'Tanzania',
                'full_name' => 'The United Republic of Tanzania',
                'code' => 'TZ',
                'code3' => 'TZA',
                'has_region' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'continent_id' => 3,
                'name' => 'Mali',
                'full_name' => 'The Republic of Mali',
                'code' => 'ML',
                'code3' => 'MLI',
                'has_region' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'continent_id' => 3,
                'name' => 'Somalia',
                'full_name' => 'The Somalia Democratic Republic',
                'code' => 'SO',
                'code3' => 'SOM',
                'has_region' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'continent_id' => 3,
                'name' => 'Mauritania',
                'full_name' => 'The Islamic Republic of Mauritania',
                'code' => 'MR',
                'code3' => 'MRT',
                'has_region' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'continent_id' => 3,
                'name' => 'Uganda',
                'full_name' => 'The Republic of Uganda',
                'code' => 'UG',
                'code3' => 'UGA',
                'has_region' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'continent_id' => 3,
                'name' => 'Chad',
                'full_name' => 'The Republic of Chad',
                'code' => 'TD',
                'code3' => 'TCD',
                'has_region' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'continent_id' => 3,
                'name' => 'Mayotte',
                'full_name' => 'Territorial Collectivity of Mayotte',
                'code' => 'YT',
                'code3' => 'MYT',
                'has_region' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'continent_id' => 3,
                'name' => 'Comoros',
                'full_name' => 'Union of Comoros',
                'code' => 'KM',
                'code3' => 'COM',
                'has_region' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'continent_id' => 3,
                'name' => 'Botswana',
                'full_name' => 'The Republic of Botswana',
                'code' => 'BW',
                'code3' => 'BWA',
                'has_region' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'continent_id' => 3,
                'name' => 'Senegal',
                'full_name' => 'the Republic of Senegal',
                'code' => 'SN',
                'code3' => 'SEN',
                'has_region' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'continent_id' => 3,
                'name' => 'Swaziland',
                'full_name' => 'The Kingdom of Swaziland',
                'code' => 'SZ',
                'code3' => 'SWZ',
                'has_region' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'continent_id' => 3,
                'name' => 'Guinea Bissau',
                'full_name' => 'The Republic of Guinea-Bissau',
                'code' => 'GW',
                'code3' => 'GNB',
                'has_region' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'continent_id' => 3,
                'name' => 'DR Congo',
                'full_name' => 'Democratic Republic of the Congo',
                'code' => 'CD',
                'code3' => 'COD',
                'has_region' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'continent_id' => 3,
                'name' => 'Central African',
                'full_name' => 'The Central African Republic',
                'code' => 'CF',
                'code3' => 'CAF',
                'has_region' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'continent_id' => 3,
                'name' => 'Lesotho',
                'full_name' => 'The Kingdom of Lesotho',
                'code' => 'LS',
                'code3' => 'LSO',
                'has_region' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'continent_id' => 3,
                'name' => 'Congo',
                'full_name' => 'Republic of the Congo',
                'code' => 'CG',
                'code3' => 'COG',
                'has_region' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'continent_id' => 3,
                'name' => 'South Africa',
                'full_name' => 'The Republic of South Africa',
                'code' => 'ZA',
                'code3' => 'ZAF',
                'has_region' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'continent_id' => 3,
                'name' => 'Liberia',
                'full_name' => 'The Republic of Liberia',
                'code' => 'LR',
                'code3' => 'LBR',
                'has_region' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'continent_id' => 3,
                'name' => 'Tunisia',
                'full_name' => 'The Republic of Tunisia',
                'code' => 'TN',
                'code3' => 'TUN',
                'has_region' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'continent_id' => 3,
                'name' => 'Zambia',
                'full_name' => 'The Republic of Zambia',
                'code' => 'ZM',
                'code3' => 'ZMB',
                'has_region' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'continent_id' => 3,
                'name' => 'Niger',
                'full_name' => 'The Republic of Niger',
                'code' => 'NE',
                'code3' => 'NER',
                'has_region' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'continent_id' => 3,
                'name' => 'Western Sahara',
                'full_name' => 'the Sahrawi Arab Democratic Republic Western Sahara',
                'code' => 'EH',
                'code3' => 'ESH',
                'has_region' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'continent_id' => 3,
                'name' => 'Togo',
                'full_name' => 'The Republic of Togo',
                'code' => 'TG',
                'code3' => 'TGO',
                'has_region' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'continent_id' => 3,
                'name' => 'Namibia',
                'full_name' => 'The Republic of Namibia',
                'code' => 'NA',
                'code3' => 'NAM',
                'has_region' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'continent_id' => 3,
                'name' => 'Mozambique',
                'full_name' => 'The Republic of Mozambique',
                'code' => 'MZ',
                'code3' => 'MOZ',
                'has_region' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'continent_id' => 3,
                'name' => 'Ethiopia',
                'full_name' => 'The Federal Democratic Republic of Ethiopia',
                'code' => 'ET',
                'code3' => 'ETH',
                'has_region' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'continent_id' => 3,
                'name' => 'Morocco',
                'full_name' => 'The Kingdom of Morocco',
                'code' => 'MA',
                'code3' => 'MAR',
                'has_region' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'continent_id' => 3,
                'name' => 'Malawi',
                'full_name' => 'The Republic of Malawi',
                'code' => 'MW',
                'code3' => 'MWI',
                'has_region' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'continent_id' => 3,
                'name' => 'Nigeria',
                'full_name' => 'Federal Republic of Nigeria',
                'code' => 'NG',
                'code3' => 'NGA',
                'has_region' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'continent_id' => 3,
                'name' => 'Cape Verde',
                'full_name' => 'The Republic of Cape Verde',
                'code' => 'CV',
                'code3' => 'CPV',
                'has_region' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'continent_id' => 3,
                'name' => 'Burundi',
                'full_name' => 'The Republic of Burundi',
                'code' => 'BI',
                'code3' => 'BDI',
                'has_region' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'continent_id' => 3,
                'name' => 'Algeria',
                'full_name' => 'People\'s Democratic Republic of Algeria',
                'code' => 'DZ',
                'code3' => 'DZA',
                'has_region' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'continent_id' => 3,
                'name' => 'Djibouti',
                'full_name' => 'The Republic of Djibouti',
                'code' => 'DJ',
                'code3' => 'DJI',
                'has_region' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'continent_id' => 3,
                'name' => 'Gambia',
                'full_name' => 'Islamic Republic of Gambia',
                'code' => 'GP',
                'code3' => 'GMB',
                'has_region' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'continent_id' => 3,
                'name' => 'Eq.Guinea',
                'full_name' => 'The Republic of Equatorial Guinea',
                'code' => 'GQ',
                'code3' => 'GNQ',
                'has_region' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'continent_id' => 3,
                'name' => 'Sudan',
                'full_name' => 'The Republic of Sudan',
                'code' => NULL,
                'code3' => 'SDN',
                'has_region' => 0,
            ),
            55 => 
            array (
                'id' => 56,
                'continent_id' => 3,
                'name' => 'Kenya',
                'full_name' => 'The Republic of Kenya',
                'code' => 'KE',
                'code3' => 'KEN',
                'has_region' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'continent_id' => 1,
                'name' => 'Singapore',
                'full_name' => 'Republic of Singapore',
                'code' => 'SG',
                'code3' => 'SGP',
                'has_region' => 0,
            ),
            57 => 
            array (
                'id' => 58,
                'continent_id' => 1,
                'name' => 'Korea',
                'full_name' => 'Republic of Korea',
                'code' => 'KR',
                'code3' => 'KOR',
                'has_region' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'continent_id' => 1,
                'name' => 'Syrian',
                'full_name' => 'The Syrian Arab Republic',
                'code' => NULL,
                'code3' => 'SYR',
                'has_region' => 0,
            ),
            59 => 
            array (
                'id' => 60,
                'continent_id' => 1,
                'name' => 'Uzbekstan',
                'full_name' => 'The Republic of Uzbekistan',
                'code' => 'UZ',
                'code3' => 'UZB',
                'has_region' => 0,
            ),
            60 => 
            array (
                'id' => 61,
                'continent_id' => 1,
                'name' => 'Bahrian',
                'full_name' => 'The Kingdom of Bahrain',
                'code' => 'BH',
                'code3' => 'BHR',
                'has_region' => 0,
            ),
            61 => 
            array (
                'id' => 62,
                'continent_id' => 1,
                'name' => 'Japan',
                'full_name' => 'Japan',
                'code' => 'JP',
                'code3' => 'JPN',
                'has_region' => 0,
            ),
            62 => 
            array (
                'id' => 63,
                'continent_id' => 1,
                'name' => 'Jordan',
                'full_name' => 'The Hashemite Kingdom of Jordan',
                'code' => 'JO',
                'code3' => 'JOR',
                'has_region' => 0,
            ),
            63 => 
            array (
                'id' => 64,
                'continent_id' => 1,
                'name' => 'Vietnam',
                'full_name' => 'Socialist Republic of Vietnam',
                'code' => 'VN',
                'code3' => 'VNM',
                'has_region' => 0,
            ),
            64 => 
            array (
                'id' => 65,
                'continent_id' => 1,
                'name' => 'Kirghizia',
                'full_name' => 'The Kyrgyz Republic',
                'code' => 'KG',
                'code3' => 'KGZ',
                'has_region' => 0,
            ),
            65 => 
            array (
                'id' => 66,
                'continent_id' => 1,
                'name' => 'Thailand',
                'full_name' => 'Kingdom of Thailand',
                'code' => 'TH',
                'code3' => 'THA',
                'has_region' => 0,
            ),
            66 => 
            array (
                'id' => 67,
                'continent_id' => 1,
                'name' => 'Sri Lanka',
                'full_name' => 'The Democratic Socialist Republic of Sri Lanka',
                'code' => 'LK',
                'code3' => 'LKA',
                'has_region' => 0,
            ),
            67 => 
            array (
                'id' => 68,
                'continent_id' => 1,
                'name' => 'United Arab Emirates',
                'full_name' => 'The United Arab Emirates',
                'code' => 'AE',
                'code3' => 'ARE',
                'has_region' => 0,
            ),
            68 => 
            array (
                'id' => 69,
                'continent_id' => 1,
                'name' => 'Laos',
                'full_name' => 'Lao People\'s Democratic Republic',
                'code' => 'LA',
                'code3' => 'LAO',
                'has_region' => 0,
            ),
            69 => 
            array (
                'id' => 70,
                'continent_id' => 1,
                'name' => 'Afghanistan',
                'full_name' => 'the Islamic Republic of Afghanistan',
                'code' => 'AF',
                'code3' => 'AFG',
                'has_region' => 0,
            ),
            70 => 
            array (
                'id' => 71,
                'continent_id' => 1,
                'name' => 'Macau',
                'full_name' => 'Macau Macao',
                'code' => 'MO',
                'code3' => 'MAC',
                'has_region' => 0,
            ),
            71 => 
            array (
                'id' => 72,
                'continent_id' => 1,
                'name' => 'Tajikistan',
                'full_name' => 'The Republic of Tajikistan',
                'code' => 'TJ',
                'code3' => 'TJK',
                'has_region' => 0,
            ),
            72 => 
            array (
                'id' => 73,
                'continent_id' => 1,
                'name' => 'Korea,DPR',
                'full_name' => 'Democratic People\'s Republic of Korea',
                'code' => 'KP',
                'code3' => 'PRK',
                'has_region' => 0,
            ),
            73 => 
            array (
                'id' => 74,
                'continent_id' => 1,
                'name' => 'Palestine',
                'full_name' => 'The State of Palestine',
                'code' => 'PS',
                'code3' => 'PAL',
                'has_region' => 0,
            ),
            74 => 
            array (
                'id' => 75,
                'continent_id' => 1,
                'name' => 'Hong Kong',
                'full_name' => 'Hong Kong',
                'code' => 'HK',
                'code3' => 'HKG',
                'has_region' => 0,
            ),
            75 => 
            array (
                'id' => 76,
                'continent_id' => 1,
                'name' => 'Iraq',
                'full_name' => 'Republic Of Iraq',
                'code' => 'IQ',
                'code3' => 'IRQ',
                'has_region' => 0,
            ),
            76 => 
            array (
                'id' => 77,
                'continent_id' => 1,
                'name' => 'Lebanon',
                'full_name' => 'The Republic of Lebanon',
                'code' => 'LB',
                'code3' => 'LBN',
                'has_region' => 0,
            ),
            77 => 
            array (
                'id' => 78,
                'continent_id' => 1,
                'name' => 'Kuwait',
                'full_name' => 'The State of Kuwait',
                'code' => 'KW',
                'code3' => 'KWT',
                'has_region' => 0,
            ),
            78 => 
            array (
                'id' => 79,
                'continent_id' => 1,
                'name' => 'Brunei',
                'full_name' => 'Brunei Darussalam',
                'code' => 'BN',
                'code3' => 'BRN',
                'has_region' => 0,
            ),
            79 => 
            array (
                'id' => 80,
                'continent_id' => 1,
                'name' => 'Maldives',
                'full_name' => 'The Republic of Maldives',
                'code' => 'MV',
                'code3' => 'MDV',
                'has_region' => 0,
            ),
            80 => 
            array (
                'id' => 81,
                'continent_id' => 1,
                'name' => 'Indonesia',
                'full_name' => 'The Republic of Indonesia',
                'code' => 'ID',
                'code3' => 'IDN',
                'has_region' => 0,
            ),
            81 => 
            array (
                'id' => 82,
                'continent_id' => 1,
                'name' => 'Israel',
                'full_name' => 'The State of Israel',
                'code' => 'IL',
                'code3' => 'ISR',
                'has_region' => 0,
            ),
            82 => 
            array (
                'id' => 83,
                'continent_id' => 1,
                'name' => 'Mongolia',
                'full_name' => 'Mongolia',
                'code' => 'MN',
                'code3' => 'MNG',
                'has_region' => 0,
            ),
            83 => 
            array (
                'id' => 84,
                'continent_id' => 1,
                'name' => 'Oman',
                'full_name' => 'Sultanate of Oman',
                'code' => 'OM',
                'code3' => 'OMN',
                'has_region' => 0,
            ),
            84 => 
            array (
                'id' => 85,
                'continent_id' => 1,
                'name' => 'India',
                'full_name' => 'The Republic of India',
                'code' => 'IN',
                'code3' => 'IND',
                'has_region' => 0,
            ),
            85 => 
            array (
                'id' => 86,
                'continent_id' => 1,
                'name' => 'Myanmar',
                'full_name' => 'Republic Of The Union Of Myanmar',
                'code' => 'MM',
                'code3' => 'MMR',
                'has_region' => 0,
            ),
            86 => 
            array (
                'id' => 87,
                'continent_id' => 1,
                'name' => 'Malaysia',
                'full_name' => 'Malaysia',
                'code' => 'MY',
                'code3' => 'MYS',
                'has_region' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'continent_id' => 1,
                'name' => 'East Timor',
                'full_name' => 'Democratic Republic of East Timor',
                'code' => 'TL',
                'code3' => 'TMP',
                'has_region' => 0,
            ),
            88 => 
            array (
                'id' => 89,
                'continent_id' => 1,
                'name' => 'Yemen',
                'full_name' => 'The Republic of Yemen',
                'code' => 'YE',
                'code3' => 'YEM',
                'has_region' => 0,
            ),
            89 => 
            array (
                'id' => 90,
                'continent_id' => 1,
                'name' => 'Bhutan',
                'full_name' => 'Kingdom of Bhutan',
                'code' => 'BT',
                'code3' => 'BTN',
                'has_region' => 0,
            ),
            90 => 
            array (
                'id' => 91,
                'continent_id' => 1,
                'name' => 'Cambodia',
                'full_name' => 'Kingdom of Cambodia',
                'code' => 'KH',
                'code3' => 'KHM',
                'has_region' => 0,
            ),
            91 => 
            array (
                'id' => 92,
                'continent_id' => 1,
                'name' => 'Pakistan',
                'full_name' => 'the Islamic Republic of Pakistan',
                'code' => 'PK',
                'code3' => 'PAK',
                'has_region' => 0,
            ),
            92 => 
            array (
                'id' => 93,
                'continent_id' => 1,
                'name' => 'Bangladesh',
                'full_name' => 'People\'s Republic of Bangladesh',
                'code' => 'BD',
                'code3' => 'BGD',
                'has_region' => 0,
            ),
            93 => 
            array (
                'id' => 94,
                'continent_id' => 1,
                'name' => 'Saudi Arabia',
                'full_name' => 'Kingdom of Saudi Arabia',
                'code' => 'SA',
                'code3' => 'SAU',
                'has_region' => 0,
            ),
            94 => 
            array (
                'id' => 95,
                'continent_id' => 1,
                'name' => 'Turkmenistan',
                'full_name' => 'Turkmenistan',
                'code' => 'TM',
                'code3' => 'TKM',
                'has_region' => 0,
            ),
            95 => 
            array (
                'id' => 96,
                'continent_id' => 1,
                'name' => 'Qatar',
                'full_name' => 'The State of Qatar',
                'code' => 'QA',
                'code3' => 'QAT',
                'has_region' => 0,
            ),
            96 => 
            array (
                'id' => 97,
                'continent_id' => 1,
                'name' => 'Nepal',
                'full_name' => 'Federal Democratic Republic of Nepal',
                'code' => 'NP',
                'code3' => 'NPL',
                'has_region' => 0,
            ),
            97 => 
            array (
                'id' => 98,
                'continent_id' => 1,
                'name' => 'Kazakhstan',
                'full_name' => 'The Republic of Kazakhstan',
                'code' => 'KZ',
                'code3' => 'KAZ',
                'has_region' => 0,
            ),
            98 => 
            array (
                'id' => 99,
                'continent_id' => 1,
                'name' => 'Philippines',
                'full_name' => 'Republic of the Philippines',
                'code' => 'PH',
                'code3' => 'PHL',
                'has_region' => 0,
            ),
            99 => 
            array (
                'id' => 100,
                'continent_id' => 1,
                'name' => 'Taiwan',
                'full_name' => 'Taiwan',
                'code' => 'TW',
                'code3' => 'TWN',
                'has_region' => 0,
            ),
            100 => 
            array (
                'id' => 101,
                'continent_id' => 1,
                'name' => 'China',
                'full_name' => 'People\'s Republic of China',
                'code' => 'CN',
                'code3' => 'CHN',
                'has_region' => 1,
            ),
            101 => 
            array (
                'id' => 102,
                'continent_id' => 1,
                'name' => 'Iran',
                'full_name' => 'The Islamic Republic of Iran',
                'code' => NULL,
                'code3' => 'IRN',
                'has_region' => 0,
            ),
            102 => 
            array (
                'id' => 103,
                'continent_id' => 6,
                'name' => 'Costa Rica',
                'full_name' => 'Republic of Costa Rica',
                'code' => 'CR',
                'code3' => 'CRI',
                'has_region' => 0,
            ),
            103 => 
            array (
                'id' => 104,
                'continent_id' => 6,
                'name' => 'Cuba',
                'full_name' => 'The Republic of Cuba',
                'code' => NULL,
                'code3' => 'CUB',
                'has_region' => 0,
            ),
            104 => 
            array (
                'id' => 105,
                'continent_id' => 6,
                'name' => 'Dominican',
                'full_name' => 'The Dominican Republic',
                'code' => 'DO',
                'code3' => 'DOM',
                'has_region' => 0,
            ),
            105 => 
            array (
                'id' => 106,
                'continent_id' => 6,
                'name' => 'Mexico',
                'full_name' => 'The United States of Mexico',
                'code' => 'MX',
                'code3' => 'MEX',
                'has_region' => 0,
            ),
            106 => 
            array (
                'id' => 107,
                'continent_id' => 6,
                'name' => 'Nicaragua',
                'full_name' => 'The Republic of Nicaragua',
                'code' => 'NI',
                'code3' => 'NIC',
                'has_region' => 0,
            ),
            107 => 
            array (
                'id' => 108,
                'continent_id' => 6,
                'name' => 'Panama',
                'full_name' => 'The Republic of Panama',
                'code' => 'PA',
                'code3' => 'PAN',
                'has_region' => 0,
            ),
            108 => 
            array (
                'id' => 109,
                'continent_id' => 7,
                'name' => 'Netherlands Antilles',
                'full_name' => 'Netherlands Antilles',
                'code' => 'AN',
                'code3' => 'ANT',
                'has_region' => 0,
            ),
            109 => 
            array (
                'id' => 110,
                'continent_id' => 6,
                'name' => 'El Salvador',
                'full_name' => 'The Republic of El Salvador',
                'code' => 'SV',
                'code3' => 'SLV',
                'has_region' => 0,
            ),
            110 => 
            array (
                'id' => 111,
                'continent_id' => 6,
                'name' => 'Puerto Rico',
                'full_name' => 'The Commonwealth of Puerto Rico',
                'code' => 'PR',
                'code3' => 'PTR',
                'has_region' => 0,
            ),
            111 => 
            array (
                'id' => 112,
                'continent_id' => 6,
                'name' => 'Saint Vincent and the Grenadines',
                'full_name' => 'Saint Vincent and the Grenadines',
                'code' => 'VC',
                'code3' => 'VAG',
                'has_region' => 0,
            ),
            112 => 
            array (
                'id' => 113,
                'continent_id' => 6,
                'name' => 'Honduras',
                'full_name' => 'Republic of Honduras',
                'code' => 'HN',
                'code3' => 'HND',
                'has_region' => 0,
            ),
            113 => 
            array (
                'id' => 114,
                'continent_id' => 6,
                'name' => 'Guatemala',
                'full_name' => 'The Republic of Guatemala',
                'code' => 'GT',
                'code3' => 'GTM',
                'has_region' => 0,
            ),
            114 => 
            array (
                'id' => 115,
                'continent_id' => 2,
                'name' => 'Georgia',
                'full_name' => 'Georgia',
                'code' => 'GE',
                'code3' => 'GEO',
                'has_region' => 0,
            ),
            115 => 
            array (
                'id' => 116,
                'continent_id' => 2,
                'name' => 'Armenia',
                'full_name' => 'The Republic of Armenia',
                'code' => 'AM',
                'code3' => 'ARM',
                'has_region' => 0,
            ),
            116 => 
            array (
                'id' => 117,
                'continent_id' => 2,
                'name' => 'Azerbaijan',
                'full_name' => 'The Republic of Azerbaijan',
                'code' => 'AZ',
                'code3' => 'AZE',
                'has_region' => 0,
            ),
            117 => 
            array (
                'id' => 118,
                'continent_id' => 2,
                'name' => ' Belarus',
                'full_name' => 'The Republic of Belarus',
                'code' => 'BY',
                'code3' => 'BLR',
                'has_region' => 0,
            ),
            118 => 
            array (
                'id' => 119,
                'continent_id' => 2,
                'name' => 'Russia',
                'full_name' => 'Russian Federation',
                'code' => 'RU',
                'code3' => 'RUS',
                'has_region' => 0,
            ),
            119 => 
            array (
                'id' => 120,
                'continent_id' => 2,
                'name' => 'Ukraine',
                'full_name' => 'Ukraine',
                'code' => 'UA',
                'code3' => 'UKR',
                'has_region' => 0,
            ),
            120 => 
            array (
                'id' => 121,
                'continent_id' => 2,
                'name' => 'Hungary',
                'full_name' => 'Hungary',
                'code' => 'HU',
                'code3' => 'HUN',
                'has_region' => 0,
            ),
            121 => 
            array (
                'id' => 122,
                'continent_id' => 2,
                'name' => 'Iceland',
                'full_name' => 'The Republic of Iceland',
                'code' => 'IS',
                'code3' => 'ISL',
                'has_region' => 0,
            ),
            122 => 
            array (
                'id' => 123,
                'continent_id' => 2,
                'name' => 'Malta',
                'full_name' => 'Republic of Malta',
                'code' => 'MT',
                'code3' => 'MLT',
                'has_region' => 0,
            ),
            123 => 
            array (
                'id' => 124,
                'continent_id' => 2,
                'name' => 'Monaco',
                'full_name' => 'The Principality of Monaco',
                'code' => 'MC',
                'code3' => 'MCO',
                'has_region' => 0,
            ),
            124 => 
            array (
                'id' => 125,
                'continent_id' => 2,
                'name' => 'Norway',
                'full_name' => 'The Kingdom of Norway',
                'code' => 'NO',
                'code3' => 'NOR',
                'has_region' => 0,
            ),
            125 => 
            array (
                'id' => 126,
                'continent_id' => 2,
                'name' => 'Romania',
                'full_name' => 'Romania',
                'code' => 'RO',
                'code3' => 'ROM',
                'has_region' => 0,
            ),
            126 => 
            array (
                'id' => 127,
                'continent_id' => 2,
                'name' => 'San Marino',
                'full_name' => 'The Republic of San Marino',
                'code' => 'SM',
                'code3' => 'SMR',
                'has_region' => 0,
            ),
            127 => 
            array (
                'id' => 128,
                'continent_id' => 2,
                'name' => 'Sweden',
                'full_name' => 'The Kingdom of Sweden',
                'code' => 'SE',
                'code3' => 'SWE',
                'has_region' => 0,
            ),
            128 => 
            array (
                'id' => 129,
                'continent_id' => 2,
                'name' => 'Switzerland',
                'full_name' => 'Swiss Confederation',
                'code' => 'CH',
                'code3' => 'CHE',
                'has_region' => 0,
            ),
            129 => 
            array (
                'id' => 130,
                'continent_id' => 2,
                'name' => 'Estonia',
                'full_name' => 'Republic of Estonia',
                'code' => 'EE',
                'code3' => 'EST',
                'has_region' => 0,
            ),
            130 => 
            array (
                'id' => 131,
                'continent_id' => 2,
                'name' => 'Latvia',
                'full_name' => 'Republic of Latvia',
                'code' => 'LV',
                'code3' => 'LVA',
                'has_region' => 0,
            ),
            131 => 
            array (
                'id' => 132,
                'continent_id' => 2,
                'name' => 'Lithuania',
                'full_name' => 'The Republic of Lithuania',
                'code' => 'LT',
                'code3' => 'LTU',
                'has_region' => 0,
            ),
            132 => 
            array (
                'id' => 133,
                'continent_id' => 2,
                'name' => 'Moldavia',
                'full_name' => 'The Republic of Moldova',
                'code' => 'MD',
                'code3' => 'MDA',
                'has_region' => 0,
            ),
            133 => 
            array (
                'id' => 134,
                'continent_id' => 1,
                'name' => 'Turkey',
                'full_name' => 'The Republic of Turkey',
                'code' => 'TR',
                'code3' => 'TUR',
                'has_region' => 0,
            ),
            134 => 
            array (
                'id' => 135,
                'continent_id' => 2,
                'name' => 'Slovenia',
                'full_name' => 'The Republic of Slovenia',
                'code' => 'SI',
                'code3' => 'SVN',
                'has_region' => 0,
            ),
            135 => 
            array (
                'id' => 136,
                'continent_id' => 2,
                'name' => 'Czech',
                'full_name' => 'The Czech Republic',
                'code' => 'CZ',
                'code3' => 'CZE',
                'has_region' => 0,
            ),
            136 => 
            array (
                'id' => 137,
                'continent_id' => 2,
                'name' => 'Slovak',
                'full_name' => 'The Slovak Republic',
                'code' => 'SK',
                'code3' => 'SVK',
                'has_region' => 0,
            ),
            137 => 
            array (
                'id' => 138,
                'continent_id' => 2,
                'name' => 'Macedonia',
                'full_name' => 'The Republic of Macedonia',
                'code' => 'MK',
                'code3' => 'MKD',
                'has_region' => 0,
            ),
            138 => 
            array (
                'id' => 139,
                'continent_id' => 2,
                'name' => 'Bosnia Hercegovina',
                'full_name' => 'Bosnia and Herzegovina',
                'code' => 'BA',
                'code3' => 'BIH',
                'has_region' => 0,
            ),
            139 => 
            array (
                'id' => 140,
                'continent_id' => 2,
                'name' => 'Vatican City State',
                'full_name' => 'Vatican City State',
                'code' => 'VA',
                'code3' => 'VAT',
                'has_region' => 0,
            ),
            140 => 
            array (
                'id' => 141,
                'continent_id' => 2,
                'name' => 'Netherlands',
                'full_name' => 'The Kingdom of Netherlands',
                'code' => 'NL',
                'code3' => 'NLD',
                'has_region' => 0,
            ),
            141 => 
            array (
                'id' => 142,
                'continent_id' => 2,
                'name' => 'Croatia',
                'full_name' => 'The Republic of Croatia',
                'code' => 'HR',
                'code3' => 'HRV',
                'has_region' => 0,
            ),
            142 => 
            array (
                'id' => 143,
                'continent_id' => 2,
                'name' => 'Greece',
                'full_name' => 'The Hellenic Republic',
                'code' => 'GR',
                'code3' => 'GRC',
                'has_region' => 0,
            ),
            143 => 
            array (
                'id' => 144,
                'continent_id' => 2,
                'name' => 'Ireland',
                'full_name' => 'The Republic of Ireland',
                'code' => 'IE',
                'code3' => 'IRL',
                'has_region' => 0,
            ),
            144 => 
            array (
                'id' => 145,
                'continent_id' => 2,
                'name' => 'Belgium',
                'full_name' => 'The Kingdom Of Belgium',
                'code' => 'BE',
                'code3' => 'BEL',
                'has_region' => 0,
            ),
            145 => 
            array (
                'id' => 146,
                'continent_id' => 2,
                'name' => 'Cyprus',
                'full_name' => 'the Republic of Cyprus',
                'code' => 'CY',
                'code3' => 'CYP',
                'has_region' => 0,
            ),
            146 => 
            array (
                'id' => 147,
                'continent_id' => 2,
                'name' => 'Denmark',
                'full_name' => 'The Kingdom of Denmark',
                'code' => 'DK',
                'code3' => 'DNK',
                'has_region' => 0,
            ),
            147 => 
            array (
                'id' => 148,
                'continent_id' => 2,
                'name' => 'United Kingdom',
                'full_name' => 'The United Kingdom of Great Britain and Northern Ireland',
                'code' => 'GB',
                'code3' => 'ENG',
                'has_region' => 1,
            ),
            148 => 
            array (
                'id' => 149,
                'continent_id' => 2,
                'name' => 'Germany',
                'full_name' => 'The Federal Republic of Germany',
                'code' => 'DE',
                'code3' => 'DEU',
                'has_region' => 0,
            ),
            149 => 
            array (
                'id' => 150,
                'continent_id' => 2,
                'name' => 'France',
                'full_name' => 'The French Republic',
                'code' => 'FR',
                'code3' => 'FRA',
                'has_region' => 0,
            ),
            150 => 
            array (
                'id' => 151,
                'continent_id' => 2,
                'name' => 'Italy',
                'full_name' => 'The Republic of Italy',
                'code' => 'IT',
                'code3' => 'ITA',
                'has_region' => 0,
            ),
            151 => 
            array (
                'id' => 152,
                'continent_id' => 2,
                'name' => 'Luxembourg',
                'full_name' => 'The Grand Duchy of Luxembourg',
                'code' => 'LU',
                'code3' => 'LUX',
                'has_region' => 0,
            ),
            152 => 
            array (
                'id' => 153,
                'continent_id' => 2,
                'name' => 'Portugal',
                'full_name' => 'Portugal,the Portuguese Republic',
                'code' => 'PT',
                'code3' => 'PRT',
                'has_region' => 0,
            ),
            153 => 
            array (
                'id' => 154,
                'continent_id' => 2,
                'name' => 'Poland',
                'full_name' => 'The Republic of Poland',
                'code' => 'PL',
                'code3' => 'POL',
                'has_region' => 0,
            ),
            154 => 
            array (
                'id' => 155,
                'continent_id' => 2,
                'name' => 'Spain',
                'full_name' => 'The Kingdom of Spain',
                'code' => 'ES',
                'code3' => 'ESP',
                'has_region' => 0,
            ),
            155 => 
            array (
                'id' => 156,
                'continent_id' => 2,
                'name' => 'Albania',
                'full_name' => 'The Republic of Albania',
                'code' => 'AL',
                'code3' => 'ALB',
                'has_region' => 0,
            ),
            156 => 
            array (
                'id' => 157,
                'continent_id' => 2,
                'name' => 'Andorra',
                'full_name' => 'The Principality of Andorra',
                'code' => 'AD',
                'code3' => 'AND',
                'has_region' => 0,
            ),
            157 => 
            array (
                'id' => 158,
                'continent_id' => 2,
                'name' => 'Liechtenstein',
                'full_name' => 'Principality of Liechtenstein',
                'code' => 'LI',
                'code3' => 'LIE',
                'has_region' => 0,
            ),
            158 => 
            array (
                'id' => 159,
                'continent_id' => 2,
                'name' => 'Serbia and Montenegro',
                'full_name' => 'Serbia and Montenegro',
                'code' => 'RS',
                'code3' => 'S&M',
                'has_region' => 0,
            ),
            159 => 
            array (
                'id' => 160,
                'continent_id' => 2,
                'name' => 'Austria',
                'full_name' => 'The Republic Of Austria',
                'code' => 'AT',
                'code3' => 'AUT',
                'has_region' => 0,
            ),
            160 => 
            array (
                'id' => 161,
                'continent_id' => 2,
                'name' => 'Bulgaria',
                'full_name' => 'The Republic of Bulgaria',
                'code' => 'BG',
                'code3' => 'BGR',
                'has_region' => 0,
            ),
            161 => 
            array (
                'id' => 162,
                'continent_id' => 2,
                'name' => 'Finland',
                'full_name' => 'The Republic of Finland',
                'code' => 'FI',
                'code3' => 'FIN',
                'has_region' => 0,
            ),
            162 => 
            array (
                'id' => 163,
                'continent_id' => 2,
                'name' => 'Gibraltar',
                'full_name' => 'Gibraltar',
                'code' => 'GI',
                'code3' => 'GIB',
                'has_region' => 0,
            ),
            163 => 
            array (
                'id' => 164,
                'continent_id' => 6,
                'name' => 'Dominica',
                'full_name' => 'The Commonwealth of Dominica',
                'code' => 'DM',
                'code3' => 'DMA',
                'has_region' => 0,
            ),
            164 => 
            array (
                'id' => 165,
                'continent_id' => 6,
                'name' => 'Bermuda',
                'full_name' => 'Bermuda',
                'code' => 'BM',
                'code3' => 'BMU',
                'has_region' => 0,
            ),
            165 => 
            array (
                'id' => 166,
                'continent_id' => 6,
                'name' => 'Canada',
                'full_name' => 'Canada',
                'code' => 'CA',
                'code3' => 'CAN',
                'has_region' => 0,
            ),
            166 => 
            array (
                'id' => 167,
                'continent_id' => 6,
                'name' => 'United States',
                'full_name' => 'The United States of America',
                'code' => 'US',
                'code3' => 'USA',
                'has_region' => 1,
            ),
            167 => 
            array (
                'id' => 168,
                'continent_id' => 6,
                'name' => 'Greenland',
                'full_name' => 'Greenland',
                'code' => 'GL',
                'code3' => 'GRL',
                'has_region' => 0,
            ),
            168 => 
            array (
                'id' => 169,
                'continent_id' => 4,
                'name' => 'Tonga',
                'full_name' => 'The Kingdom of Tonga',
                'code' => 'TO',
                'code3' => 'TON',
                'has_region' => 0,
            ),
            169 => 
            array (
                'id' => 170,
                'continent_id' => 4,
                'name' => 'Australia',
                'full_name' => 'The Commonwealth of Australia',
                'code' => 'AU',
                'code3' => 'AUS',
                'has_region' => 1,
            ),
            170 => 
            array (
                'id' => 171,
                'continent_id' => 4,
                'name' => 'Cook Is',
                'full_name' => 'The Cook Islands',
                'code' => 'CK',
                'code3' => 'COK',
                'has_region' => 0,
            ),
            171 => 
            array (
                'id' => 172,
                'continent_id' => 4,
                'name' => 'Nauru',
                'full_name' => 'The Republic of Nauru',
                'code' => 'NR',
                'code3' => 'NRU',
                'has_region' => 0,
            ),
            172 => 
            array (
                'id' => 173,
                'continent_id' => 4,
                'name' => 'New Caledonia',
                'full_name' => 'New Caledonia',
                'code' => 'NC',
                'code3' => 'NCL',
                'has_region' => 0,
            ),
            173 => 
            array (
                'id' => 174,
                'continent_id' => 4,
                'name' => 'Vanuatu',
                'full_name' => 'Republic of Vanuatu',
                'code' => 'VU',
                'code3' => 'VUT',
                'has_region' => 0,
            ),
            174 => 
            array (
                'id' => 175,
                'continent_id' => 4,
                'name' => 'Solomon Is',
                'full_name' => 'Solomon Islands',
                'code' => 'SB',
                'code3' => 'SLB',
                'has_region' => 0,
            ),
            175 => 
            array (
                'id' => 176,
                'continent_id' => 4,
                'name' => 'Samoa',
                'full_name' => 'The Independent State of Samoa',
                'code' => 'WS',
                'code3' => 'WSM',
                'has_region' => 0,
            ),
            176 => 
            array (
                'id' => 177,
                'continent_id' => 4,
                'name' => 'Tuvalu',
                'full_name' => 'Tuvalu',
                'code' => 'TV',
                'code3' => 'TUV',
                'has_region' => 0,
            ),
            177 => 
            array (
                'id' => 178,
                'continent_id' => 4,
                'name' => 'Micronesia',
                'full_name' => 'Federated States of Micronesia',
                'code' => 'FM',
                'code3' => 'FSM',
                'has_region' => 0,
            ),
            178 => 
            array (
                'id' => 179,
                'continent_id' => 4,
                'name' => 'Marshall Is Rep',
                'full_name' => 'The Republic of Marshall Island ',
                'code' => 'MH',
                'code3' => 'MHL',
                'has_region' => 0,
            ),
            179 => 
            array (
                'id' => 180,
                'continent_id' => 4,
                'name' => 'Kiribati',
                'full_name' => 'The Republic of Kiribati',
                'code' => 'KI',
                'code3' => 'KIR',
                'has_region' => 0,
            ),
            180 => 
            array (
                'id' => 181,
                'continent_id' => 4,
                'name' => 'French Polynesia',
                'full_name' => 'French Polynesia',
                'code' => 'PF',
                'code3' => 'PYF',
                'has_region' => 0,
            ),
            181 => 
            array (
                'id' => 182,
                'continent_id' => 4,
                'name' => 'New Zealand',
                'full_name' => 'New Zealand',
                'code' => 'NZ',
                'code3' => 'NZL',
                'has_region' => 0,
            ),
            182 => 
            array (
                'id' => 183,
                'continent_id' => 4,
                'name' => 'Fiji',
                'full_name' => 'The Republic of Fiji',
                'code' => 'FJ',
                'code3' => 'FJI',
                'has_region' => 0,
            ),
            183 => 
            array (
                'id' => 184,
                'continent_id' => 4,
                'name' => 'Papua New Guinea',
                'full_name' => 'The Independent State of Papua New Guinea',
                'code' => 'PG',
                'code3' => 'PNG',
                'has_region' => 0,
            ),
            184 => 
            array (
                'id' => 185,
                'continent_id' => 4,
                'name' => 'Palau',
                'full_name' => 'The Republic of Palau',
                'code' => 'PW',
                'code3' => 'PLW',
                'has_region' => 0,
            ),
            185 => 
            array (
                'id' => 186,
                'continent_id' => 7,
                'name' => 'Chile',
                'full_name' => 'Republic of Chile',
                'code' => 'CL',
                'code3' => 'CHL',
                'has_region' => 0,
            ),
            186 => 
            array (
                'id' => 187,
                'continent_id' => 7,
                'name' => 'Colombia',
                'full_name' => 'The Republic of Colombia',
                'code' => 'CO',
                'code3' => 'COL',
                'has_region' => 0,
            ),
            187 => 
            array (
                'id' => 188,
                'continent_id' => 7,
                'name' => 'Guyana',
                'full_name' => 'The Republic of Guyana',
                'code' => 'GY',
                'code3' => 'GUY',
                'has_region' => 0,
            ),
            188 => 
            array (
                'id' => 189,
                'continent_id' => 7,
                'name' => 'Paraguay',
                'full_name' => 'The Republic of Paraguay',
                'code' => 'PY',
                'code3' => 'PRY',
                'has_region' => 0,
            ),
            189 => 
            array (
                'id' => 190,
                'continent_id' => 7,
                'name' => 'Peru',
                'full_name' => 'The Republic of Peru',
                'code' => 'PE',
                'code3' => 'PER',
                'has_region' => 0,
            ),
            190 => 
            array (
                'id' => 191,
                'continent_id' => 7,
                'name' => 'Suriname',
                'full_name' => 'The Republic of Suriname',
                'code' => 'SR',
                'code3' => 'SUR',
                'has_region' => 0,
            ),
            191 => 
            array (
                'id' => 192,
                'continent_id' => 7,
                'name' => 'Venezuela',
                'full_name' => 'Bolivarian Republic of Venezuela',
                'code' => 'VE',
                'code3' => 'VEN',
                'has_region' => 0,
            ),
            192 => 
            array (
                'id' => 193,
                'continent_id' => 7,
                'name' => 'Uruguay',
                'full_name' => 'The Oriental Republic of Uruguay',
                'code' => 'UY',
                'code3' => 'URY',
                'has_region' => 0,
            ),
            193 => 
            array (
                'id' => 194,
                'continent_id' => 7,
                'name' => 'Ecuador',
                'full_name' => 'The Republic of Ecuador',
                'code' => 'EC',
                'code3' => 'ECU',
                'has_region' => 0,
            ),
            194 => 
            array (
                'id' => 195,
                'continent_id' => 7,
                'name' => 'Antigua and Barbuda',
                'full_name' => 'Antigua and Barbuda',
                'code' => 'AG',
                'code3' => 'ATG',
                'has_region' => 0,
            ),
            195 => 
            array (
                'id' => 196,
                'continent_id' => 7,
                'name' => 'Aruba',
                'full_name' => 'Aruba',
                'code' => 'AW',
                'code3' => 'ABW',
                'has_region' => 0,
            ),
            196 => 
            array (
                'id' => 197,
                'continent_id' => 7,
                'name' => 'Bahamas',
                'full_name' => 'The Commonwealth of The Bahamas',
                'code' => 'BS',
                'code3' => 'BHS',
                'has_region' => 0,
            ),
            197 => 
            array (
                'id' => 198,
                'continent_id' => 7,
                'name' => 'Barbados',
                'full_name' => 'Barbados',
                'code' => 'BB',
                'code3' => 'BRB',
                'has_region' => 0,
            ),
            198 => 
            array (
                'id' => 199,
                'continent_id' => 7,
                'name' => 'Cayman Is',
                'full_name' => 'Cayman Islands',
                'code' => 'KY',
                'code3' => 'CYM',
                'has_region' => 0,
            ),
            199 => 
            array (
                'id' => 200,
                'continent_id' => 7,
                'name' => 'Grenada',
                'full_name' => 'Grenada',
                'code' => 'GD',
                'code3' => 'GRD',
                'has_region' => 0,
            ),
            200 => 
            array (
                'id' => 201,
                'continent_id' => 7,
                'name' => 'Haiti',
                'full_name' => 'The Republic of Haiti',
                'code' => 'HT',
                'code3' => 'HTI',
                'has_region' => 0,
            ),
            201 => 
            array (
                'id' => 202,
                'continent_id' => 7,
                'name' => 'Jamaica',
                'full_name' => 'Jamaica',
                'code' => 'JM',
                'code3' => 'JAM',
                'has_region' => 0,
            ),
            202 => 
            array (
                'id' => 203,
                'continent_id' => 7,
                'name' => 'Martinique',
                'full_name' => 'Martinique',
                'code' => 'MQ',
                'code3' => 'MTQ',
                'has_region' => 0,
            ),
            203 => 
            array (
                'id' => 204,
                'continent_id' => 7,
                'name' => 'Montserrat',
                'full_name' => 'Montserrat',
                'code' => 'MS',
                'code3' => 'MSR',
                'has_region' => 0,
            ),
            204 => 
            array (
                'id' => 205,
                'continent_id' => 7,
                'name' => 'Trinidad and Tobago',
                'full_name' => 'Republic of Trinidad and Tobago',
                'code' => 'TT',
                'code3' => 'TTO',
                'has_region' => 0,
            ),
            205 => 
            array (
                'id' => 206,
                'continent_id' => 7,
                'name' => 'St Kitts-Nevis',
                'full_name' => 'The Federation of Saint Kitts and Nevis',
                'code' => 'KN',
                'code3' => 'KNA',
                'has_region' => 0,
            ),
            206 => 
            array (
                'id' => 207,
                'continent_id' => 7,
                'name' => 'St.Pierre and Miquelon',
                'full_name' => 'The Islands of st pierre and miquelon',
                'code' => NULL,
                'code3' => 'SPM',
                'has_region' => 0,
            ),
            207 => 
            array (
                'id' => 208,
                'continent_id' => 7,
                'name' => 'Argentina',
                'full_name' => 'The Republic of Argentina',
                'code' => 'AR',
                'code3' => 'ARG',
                'has_region' => 0,
            ),
            208 => 
            array (
                'id' => 209,
                'continent_id' => 7,
                'name' => 'Belize',
                'full_name' => 'Belize',
                'code' => 'BZ',
                'code3' => 'BLZ',
                'has_region' => 0,
            ),
            209 => 
            array (
                'id' => 210,
                'continent_id' => 7,
                'name' => 'Bolivia',
                'full_name' => 'The Republic of Bolivia',
                'code' => 'BO',
                'code3' => 'BOL',
                'has_region' => 0,
            ),
            210 => 
            array (
                'id' => 211,
                'continent_id' => 7,
                'name' => 'Brazil',
                'full_name' => 'The Federative Republic of Brazil',
                'code' => 'BR',
                'code3' => 'BRA',
                'has_region' => 0,
            ),
            211 => 
            array (
                'id' => 212,
                'continent_id' => 6,
                'name' => 'American Samoa',
                'full_name' => 'American Samoa',
                'code' => 'AS',
                'code3' => 'AS',
                'has_region' => 0,
            ),
            212 => 
            array (
                'id' => 213,
                'continent_id' => 2,
                'name' => 'Aland Islands',
                'full_name' => 'Aland Island,Ahvenanmaa',
                'code' => 'AX',
                'code3' => 'AX',
                'has_region' => 0,
            ),
            213 => 
            array (
                'id' => 214,
                'continent_id' => 2,
                'name' => 'Saint Barthélemy',
                'full_name' => 'Collectivitéde Saint-Barthélemy',
                'code' => 'BL',
                'code3' => 'BL',
                'has_region' => 0,
            ),
            214 => 
            array (
                'id' => 215,
                'continent_id' => 2,
                'name' => 'Bonaire, Sint Eustatius and Saba',
                'full_name' => 'Bonaire, Sint Eustatius and Saba',
                'code' => 'BQ',
                'code3' => 'BQ',
                'has_region' => 0,
            ),
            215 => 
            array (
                'id' => 216,
                'continent_id' => 2,
                'name' => 'Bouvet Island',
                'full_name' => 'Bouvet Island',
                'code' => 'BV',
                'code3' => 'BV',
                'has_region' => 0,
            ),
            216 => 
            array (
                'id' => 217,
                'continent_id' => 4,
            'name' => 'Cocos (Keeling) Islands',
            'full_name' => 'Cocos (Keeling) Islands',
                'code' => 'CC',
                'code3' => 'CC',
                'has_region' => 0,
            ),
            217 => 
            array (
                'id' => 218,
                'continent_id' => 2,
                'name' => 'Curaçao',
                'full_name' => 'Curaçao',
                'code' => 'CW',
                'code3' => 'CW',
                'has_region' => 0,
            ),
            218 => 
            array (
                'id' => 219,
                'continent_id' => 4,
                'name' => 'Christmas Island',
                'full_name' => 'Christmas Island',
                'code' => 'CX',
                'code3' => 'CX',
                'has_region' => 0,
            ),
            219 => 
            array (
                'id' => 220,
                'continent_id' => 2,
            'name' => 'Falkland Islands (Malvinas)',
            'full_name' => 'Falkland Islands (Malvinas)',
                'code' => 'FK',
                'code3' => 'FK',
                'has_region' => 0,
            ),
            220 => 
            array (
                'id' => 221,
                'continent_id' => 2,
                'name' => 'Faroe Islands',
                'full_name' => 'Faroe Islands',
                'code' => 'FO',
                'code3' => 'FO',
                'has_region' => 0,
            ),
            221 => 
            array (
                'id' => 222,
                'continent_id' => 2,
                'name' => 'French Guiana',
                'full_name' => 'French Guiana',
                'code' => 'GF',
                'code3' => 'GF',
                'has_region' => 0,
            ),
            222 => 
            array (
                'id' => 223,
                'continent_id' => 2,
                'name' => 'Guernsey',
                'full_name' => 'Bailiwick of Guernsey',
                'code' => 'GG',
                'code3' => 'GG',
                'has_region' => 0,
            ),
            223 => 
            array (
                'id' => 224,
                'continent_id' => 2,
                'name' => 'South Georgia and The South Sandwich Islands',
                'full_name' => 'South Georgia and The South Sandwich Islands',
                'code' => 'GS',
                'code3' => 'GS',
                'has_region' => 0,
            ),
            224 => 
            array (
                'id' => 225,
                'continent_id' => 6,
                'name' => 'Guam',
                'full_name' => 'The Territory of Guahan,Guam',
                'code' => 'GU',
                'code3' => 'GU',
                'has_region' => 0,
            ),
            225 => 
            array (
                'id' => 226,
                'continent_id' => 4,
                'name' => 'Heard Island and McDonald Islands',
                'full_name' => 'Heard Island and McDonald Islands',
                'code' => 'HM',
                'code3' => 'HM',
                'has_region' => 0,
            ),
            226 => 
            array (
                'id' => 227,
                'continent_id' => 2,
                'name' => 'Isle Of Man',
                'full_name' => 'Isle Of Man',
                'code' => 'IM',
                'code3' => 'IM',
                'has_region' => 0,
            ),
            227 => 
            array (
                'id' => 228,
                'continent_id' => 2,
                'name' => 'British Indian Ocean Territory',
                'full_name' => 'British Indian Ocean Territory',
                'code' => 'IO',
                'code3' => 'IO',
                'has_region' => 0,
            ),
            228 => 
            array (
                'id' => 229,
                'continent_id' => 2,
                'name' => 'Jersey',
                'full_name' => 'Jersey',
                'code' => 'JE',
                'code3' => 'JE',
                'has_region' => 0,
            ),
            229 => 
            array (
                'id' => 230,
                'continent_id' => 2,
                'name' => 'Saint Lucia',
                'full_name' => 'Saint Lucia , St. Lucia',
                'code' => 'LC',
                'code3' => 'LC',
                'has_region' => 0,
            ),
            230 => 
            array (
                'id' => 231,
                'continent_id' => 2,
                'name' => 'Saint Martin',
                'full_name' => 'Saint Martin',
                'code' => 'MF',
                'code3' => 'MF',
                'has_region' => 0,
            ),
            231 => 
            array (
                'id' => 232,
                'continent_id' => 6,
                'name' => 'Northern Mariana Islands',
                'full_name' => 'Northern Mariana Islands',
                'code' => 'MP',
                'code3' => 'MP',
                'has_region' => 0,
            ),
            232 => 
            array (
                'id' => 233,
                'continent_id' => 4,
                'name' => 'Norfolk Island',
                'full_name' => 'Norfolk Island',
                'code' => 'NF',
                'code3' => 'NF',
                'has_region' => 0,
            ),
            233 => 
            array (
                'id' => 234,
                'continent_id' => 4,
                'name' => 'Niue',
                'full_name' => 'Niue',
                'code' => 'NU',
                'code3' => 'NU',
                'has_region' => 0,
            ),
            234 => 
            array (
                'id' => 235,
                'continent_id' => 2,
                'name' => 'Saint Pierre and Miquelon',
                'full_name' => 'Saint Pierre and Miquelon',
                'code' => 'PM',
                'code3' => 'PM',
                'has_region' => 0,
            ),
            235 => 
            array (
                'id' => 236,
                'continent_id' => 2,
                'name' => 'Pitcairn Islands',
                'full_name' => 'Pitcairn Islands',
                'code' => 'PN',
                'code3' => 'PN',
                'has_region' => 0,
            ),
            236 => 
            array (
                'id' => 237,
                'continent_id' => 2,
                'name' => 'Saint Helena',
                'full_name' => 'Saint Helena',
                'code' => 'SH',
                'code3' => 'SH',
                'has_region' => 0,
            ),
            237 => 
            array (
                'id' => 238,
                'continent_id' => 2,
                'name' => 'Svalbard and Jan Mayen Islands',
                'full_name' => 'Svalbard and Jan Mayen Islands',
                'code' => 'SJ',
                'code3' => 'SJ',
                'has_region' => 0,
            ),
            238 => 
            array (
                'id' => 239,
                'continent_id' => 2,
                'name' => 'Sint Maarten',
                'full_name' => 'Sint Maarten',
                'code' => 'SX',
                'code3' => 'SX',
                'has_region' => 0,
            ),
            239 => 
            array (
                'id' => 240,
                'continent_id' => 2,
                'name' => 'Turks and Caicos Islands',
                'full_name' => 'Turks and Caicos Islands',
                'code' => 'TC',
                'code3' => 'TC',
                'has_region' => 0,
            ),
            240 => 
            array (
                'id' => 241,
                'continent_id' => 2,
                'name' => 'French Southern Territories',
                'full_name' => 'French Southern Territories',
                'code' => 'TF',
                'code3' => 'TF',
                'has_region' => 0,
            ),
            241 => 
            array (
                'id' => 242,
                'continent_id' => 4,
                'name' => 'Tokelau',
                'full_name' => 'Tokelau',
                'code' => 'TK',
                'code3' => 'TK',
                'has_region' => 0,
            ),
            242 => 
            array (
                'id' => 243,
                'continent_id' => 6,
                'name' => 'United States Minor Outlying Islands',
                'full_name' => 'United States Minor Outlying Islands',
                'code' => 'UM',
                'code3' => 'UM',
                'has_region' => 0,
            ),
            243 => 
            array (
                'id' => 244,
                'continent_id' => 2,
                'name' => 'The British Virgin Islands',
                'full_name' => 'The British Virgin Islands',
                'code' => 'VG',
                'code3' => 'VG',
                'has_region' => 0,
            ),
            244 => 
            array (
                'id' => 245,
                'continent_id' => 6,
                'name' => 'The United States Virgin Islands',
                'full_name' => 'The United States Virgin Islands',
                'code' => 'VI',
                'code3' => 'VI',
                'has_region' => 0,
            ),
            245 => 
            array (
                'id' => 246,
                'continent_id' => 2,
                'name' => 'Wallis and Futuna Islands',
                'full_name' => 'Wallis and Futuna Islands',
                'code' => 'WF',
                'code3' => 'WF',
                'has_region' => 0,
            ),
            246 => 
            array (
                'id' => 247,
                'continent_id' => 2,
                'name' => 'Kosovo',
                'full_name' => 'The Republic of Kosovo',
                'code' => 'XK',
                'code3' => 'XK',
                'has_region' => 0,
            ),
        ));
        
        
    }
}