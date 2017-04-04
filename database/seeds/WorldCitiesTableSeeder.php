<?php

use Illuminate\Database\Seeder;

class WorldCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('world_cities')->delete();
        
        \DB::table('world_cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Elbasan',
                'full_name' => NULL,
                'code' => 'EL',
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Diber',
                'full_name' => NULL,
                'code' => 'DI',
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Tirane',
                'full_name' => NULL,
                'code' => 'TR',
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Durres',
                'full_name' => NULL,
                'code' => 'DR',
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Vlore',
                'full_name' => NULL,
                'code' => 'VL',
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Fier',
                'full_name' => NULL,
                'code' => 'FR',
            ),
            6 => 
            array (
                'id' => 7,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Gjirokaster',
                'full_name' => NULL,
                'code' => 'GJ',
            ),
            7 => 
            array (
                'id' => 8,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Korce',
                'full_name' => NULL,
                'code' => 'KO',
            ),
            8 => 
            array (
                'id' => 9,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Kukes',
                'full_name' => NULL,
                'code' => 'KU',
            ),
            9 => 
            array (
                'id' => 10,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Lezhe',
                'full_name' => NULL,
                'code' => 'LE',
            ),
            10 => 
            array (
                'id' => 11,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Berat',
                'full_name' => NULL,
                'code' => 'BR',
            ),
            11 => 
            array (
                'id' => 12,
                'country_id' => 156,
                'region_id' => NULL,
                'name' => 'Shkoder',
                'full_name' => NULL,
                'code' => 'SH',
            ),
            12 => 
            array (
                'id' => 13,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Adrar',
                'full_name' => NULL,
                'code' => 'ADR',
            ),
            13 => 
            array (
                'id' => 14,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Alger',
                'full_name' => NULL,
                'code' => 'ALG',
            ),
            14 => 
            array (
                'id' => 15,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Ain Defla',
                'full_name' => NULL,
                'code' => 'ADE',
            ),
            15 => 
            array (
                'id' => 16,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Ain Temouchent',
                'full_name' => NULL,
                'code' => 'ATE',
            ),
            16 => 
            array (
                'id' => 17,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Annaba',
                'full_name' => NULL,
                'code' => 'AAE',
            ),
            17 => 
            array (
                'id' => 18,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Oran',
                'full_name' => NULL,
                'code' => 'ORA',
            ),
            18 => 
            array (
                'id' => 19,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Batna',
                'full_name' => NULL,
                'code' => 'BAT',
            ),
            19 => 
            array (
                'id' => 20,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Bejaia',
                'full_name' => NULL,
                'code' => 'BJA',
            ),
            20 => 
            array (
                'id' => 21,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Bechar',
                'full_name' => NULL,
                'code' => 'BEC',
            ),
            21 => 
            array (
                'id' => 22,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'El Bayadh',
                'full_name' => NULL,
                'code' => 'EBA',
            ),
            22 => 
            array (
                'id' => 23,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Biskra',
                'full_name' => NULL,
                'code' => 'BIS',
            ),
            23 => 
            array (
                'id' => 24,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Bordj Bou Arreridj',
                'full_name' => NULL,
                'code' => 'BOR',
            ),
            24 => 
            array (
                'id' => 25,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Blida',
                'full_name' => NULL,
                'code' => 'BLI',
            ),
            25 => 
            array (
                'id' => 26,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Boumerdes',
                'full_name' => NULL,
                'code' => 'BOU',
            ),
            26 => 
            array (
                'id' => 27,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Bouira',
                'full_name' => NULL,
                'code' => 'BOA',
            ),
            27 => 
            array (
                'id' => 28,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Tipaza',
                'full_name' => NULL,
                'code' => 'TIP',
            ),
            28 => 
            array (
                'id' => 29,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Tissemsilt',
                'full_name' => NULL,
                'code' => 'TIS',
            ),
            29 => 
            array (
                'id' => 30,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Ghardaia',
                'full_name' => NULL,
                'code' => 'GHA',
            ),
            30 => 
            array (
                'id' => 31,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Guelma',
                'full_name' => NULL,
                'code' => 'GUE',
            ),
            31 => 
            array (
                'id' => 32,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Khenchela',
                'full_name' => NULL,
                'code' => 'KHE',
            ),
            32 => 
            array (
                'id' => 33,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Relizane',
                'full_name' => NULL,
                'code' => 'REL',
            ),
            33 => 
            array (
                'id' => 34,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Jijel',
                'full_name' => NULL,
                'code' => 'JIJ',
            ),
            34 => 
            array (
                'id' => 35,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Djelfa',
                'full_name' => NULL,
                'code' => 'DJE',
            ),
            35 => 
            array (
                'id' => 36,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Constantine',
                'full_name' => NULL,
                'code' => 'CZL',
            ),
            36 => 
            array (
                'id' => 37,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Laghouat',
                'full_name' => NULL,
                'code' => 'LAG',
            ),
            37 => 
            array (
                'id' => 38,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Mascara',
                'full_name' => NULL,
                'code' => 'MUA',
            ),
            38 => 
            array (
                'id' => 39,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Medea',
                'full_name' => NULL,
                'code' => 'MED',
            ),
            39 => 
            array (
                'id' => 40,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Mila',
                'full_name' => NULL,
                'code' => 'MIL',
            ),
            40 => 
            array (
                'id' => 41,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Mostaganem',
                'full_name' => NULL,
                'code' => 'MOS',
            ),
            41 => 
            array (
                'id' => 42,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Msila',
                'full_name' => NULL,
                'code' => 'MSI',
            ),
            42 => 
            array (
                'id' => 43,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Naama',
                'full_name' => NULL,
                'code' => 'NAA',
            ),
            43 => 
            array (
                'id' => 44,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Setif',
                'full_name' => NULL,
                'code' => 'SET',
            ),
            44 => 
            array (
                'id' => 45,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Saida',
                'full_name' => NULL,
                'code' => 'SAI',
            ),
            45 => 
            array (
                'id' => 46,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Skikda',
                'full_name' => NULL,
                'code' => 'SKI',
            ),
            46 => 
            array (
                'id' => 47,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Souk Ahras',
                'full_name' => NULL,
                'code' => 'SAH',
            ),
            47 => 
            array (
                'id' => 48,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'El Tarf',
                'full_name' => NULL,
                'code' => 'ETA',
            ),
            48 => 
            array (
                'id' => 49,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Tamanghasset',
                'full_name' => NULL,
                'code' => 'TAM',
            ),
            49 => 
            array (
                'id' => 50,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Tebessa',
                'full_name' => NULL,
                'code' => 'TEB',
            ),
            50 => 
            array (
                'id' => 51,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Tlemcen',
                'full_name' => NULL,
                'code' => 'TLE',
            ),
            51 => 
            array (
                'id' => 52,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Tizi Ouzou',
                'full_name' => NULL,
                'code' => 'IOU',
            ),
            52 => 
            array (
                'id' => 53,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Tiaret',
                'full_name' => NULL,
                'code' => 'TIA',
            ),
            53 => 
            array (
                'id' => 54,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Tindouf',
                'full_name' => NULL,
                'code' => 'TIN',
            ),
            54 => 
            array (
                'id' => 55,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'El Oued',
                'full_name' => NULL,
                'code' => 'EOU',
            ),
            55 => 
            array (
                'id' => 56,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Ouargla',
                'full_name' => NULL,
                'code' => 'OUA',
            ),
            56 => 
            array (
                'id' => 57,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Oum el Bouaghi',
                'full_name' => NULL,
                'code' => 'OEB',
            ),
            57 => 
            array (
                'id' => 58,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Sidi Bel Abbes',
                'full_name' => NULL,
                'code' => 'SBA',
            ),
            58 => 
            array (
                'id' => 59,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Chlef',
                'full_name' => NULL,
                'code' => 'CHL',
            ),
            59 => 
            array (
                'id' => 60,
                'country_id' => 51,
                'region_id' => NULL,
                'name' => 'Illizi',
                'full_name' => NULL,
                'code' => 'ILL',
            ),
            60 => 
            array (
                'id' => 61,
                'country_id' => 70,
                'region_id' => NULL,
                'name' => 'Herat',
                'full_name' => NULL,
                'code' => 'HEA',
            ),
            61 => 
            array (
                'id' => 62,
                'country_id' => 70,
                'region_id' => NULL,
                'name' => 'Kabul',
                'full_name' => NULL,
                'code' => 'KBL',
            ),
            62 => 
            array (
                'id' => 63,
                'country_id' => 70,
                'region_id' => NULL,
                'name' => 'Kandahar',
                'full_name' => NULL,
                'code' => 'KDH',
            ),
            63 => 
            array (
                'id' => 64,
                'country_id' => 70,
                'region_id' => NULL,
                'name' => 'Mazar-i Sharif',
                'full_name' => NULL,
                'code' => 'MZR',
            ),
            64 => 
            array (
                'id' => 65,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Parana',
                'full_name' => NULL,
                'code' => 'PRA',
            ),
            65 => 
            array (
                'id' => 66,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Viedma',
                'full_name' => NULL,
                'code' => 'VDM',
            ),
            66 => 
            array (
                'id' => 67,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Posadas',
                'full_name' => NULL,
                'code' => 'PSS',
            ),
            67 => 
            array (
                'id' => 68,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Bahia Blanca',
                'full_name' => NULL,
                'code' => 'BHI',
            ),
            68 => 
            array (
                'id' => 69,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Buenos Aires',
                'full_name' => NULL,
                'code' => 'BUE',
            ),
            69 => 
            array (
                'id' => 70,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Formosa',
                'full_name' => NULL,
                'code' => 'FMA',
            ),
            70 => 
            array (
                'id' => 71,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Jujuy',
                'full_name' => NULL,
                'code' => 'JUJ',
            ),
            71 => 
            array (
                'id' => 72,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Catamarca',
                'full_name' => NULL,
                'code' => 'CTC',
            ),
            72 => 
            array (
                'id' => 73,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Cordoba',
                'full_name' => NULL,
                'code' => 'COR',
            ),
            73 => 
            array (
                'id' => 74,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Corrientes',
                'full_name' => NULL,
                'code' => 'CNQ',
            ),
            74 => 
            array (
                'id' => 75,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Villa Krause',
                'full_name' => NULL,
                'code' => 'VLK',
            ),
            75 => 
            array (
                'id' => 76,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Concordia',
                'full_name' => NULL,
                'code' => 'COC',
            ),
            76 => 
            array (
                'id' => 77,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'La Rioja',
                'full_name' => NULL,
                'code' => 'IRJ',
            ),
            77 => 
            array (
                'id' => 78,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'La Plata',
                'full_name' => NULL,
                'code' => 'LPG',
            ),
            78 => 
            array (
                'id' => 79,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Resistencia',
                'full_name' => NULL,
                'code' => 'RES',
            ),
            79 => 
            array (
                'id' => 80,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Rio Gallegos',
                'full_name' => NULL,
                'code' => 'RGL',
            ),
            80 => 
            array (
                'id' => 81,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Rio Cuarto',
                'full_name' => NULL,
                'code' => 'RCU',
            ),
            81 => 
            array (
                'id' => 82,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Comodoro Rivadavia',
                'full_name' => NULL,
                'code' => 'CRD',
            ),
            82 => 
            array (
                'id' => 83,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Rosario',
                'full_name' => NULL,
                'code' => 'ROS',
            ),
            83 => 
            array (
                'id' => 84,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Rawson',
                'full_name' => NULL,
                'code' => 'RWO',
            ),
            84 => 
            array (
                'id' => 85,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Mar del Plata',
                'full_name' => NULL,
                'code' => 'MDQ',
            ),
            85 => 
            array (
                'id' => 86,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Mendoza',
                'full_name' => NULL,
                'code' => 'MDZ',
            ),
            86 => 
            array (
                'id' => 87,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Neuquen',
                'full_name' => NULL,
                'code' => 'NQN',
            ),
            87 => 
            array (
                'id' => 88,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Salta',
                'full_name' => NULL,
                'code' => 'SLA',
            ),
            88 => 
            array (
                'id' => 89,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Santiago del Estero',
                'full_name' => NULL,
                'code' => 'SDE',
            ),
            89 => 
            array (
                'id' => 90,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Santa Fe',
                'full_name' => NULL,
                'code' => 'SFN',
            ),
            90 => 
            array (
                'id' => 91,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'San Juan',
                'full_name' => NULL,
                'code' => 'UAQ',
            ),
            91 => 
            array (
                'id' => 92,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'San Rafael',
                'full_name' => NULL,
                'code' => 'AFA',
            ),
            92 => 
            array (
                'id' => 93,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'San Luis',
                'full_name' => NULL,
                'code' => 'LUQ',
            ),
            93 => 
            array (
                'id' => 94,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Santa Rosa',
                'full_name' => NULL,
                'code' => 'RSA',
            ),
            94 => 
            array (
                'id' => 95,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'San Miguel de Tucuman',
                'full_name' => NULL,
                'code' => 'SMC',
            ),
            95 => 
            array (
                'id' => 96,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'San Nicolas',
                'full_name' => NULL,
                'code' => 'SNS',
            ),
            96 => 
            array (
                'id' => 97,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Trelew',
                'full_name' => NULL,
                'code' => 'REL',
            ),
            97 => 
            array (
                'id' => 98,
                'country_id' => 208,
                'region_id' => NULL,
                'name' => 'Ushuaia',
                'full_name' => NULL,
                'code' => 'USH',
            ),
            98 => 
            array (
                'id' => 99,
                'country_id' => 68,
                'region_id' => NULL,
                'name' => 'Abu Dhabi',
                'full_name' => NULL,
                'code' => 'AZ',
            ),
            99 => 
            array (
                'id' => 100,
                'country_id' => 68,
                'region_id' => NULL,
                'name' => 'Al l\'Ayn',
                'full_name' => NULL,
                'code' => 'AL',
            ),
            100 => 
            array (
                'id' => 101,
                'country_id' => 68,
                'region_id' => NULL,
                'name' => 'Dubai',
                'full_name' => NULL,
                'code' => 'DU',
            ),
            101 => 
            array (
                'id' => 102,
                'country_id' => 68,
                'region_id' => NULL,
                'name' => 'Ash Shariqah',
                'full_name' => NULL,
                'code' => 'SH',
            ),
            102 => 
            array (
                'id' => 103,
                'country_id' => 84,
                'region_id' => NULL,
                'name' => 'Al-Batinah',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            103 => 
            array (
                'id' => 104,
                'country_id' => 84,
                'region_id' => NULL,
                'name' => 'Az-Zahirah',
                'full_name' => NULL,
                'code' => 'ZA',
            ),
            104 => 
            array (
                'id' => 105,
                'country_id' => 84,
                'region_id' => NULL,
                'name' => 'Ash-Sharqiyah',
                'full_name' => NULL,
                'code' => 'SH',
            ),
            105 => 
            array (
                'id' => 106,
                'country_id' => 84,
                'region_id' => NULL,
                'name' => 'Masqat',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            106 => 
            array (
                'id' => 107,
                'country_id' => 84,
                'region_id' => NULL,
                'name' => 'Musandam',
                'full_name' => NULL,
                'code' => 'MU',
            ),
            107 => 
            array (
                'id' => 108,
                'country_id' => 84,
                'region_id' => NULL,
                'name' => 'Ad-Dakhiliyah',
                'full_name' => NULL,
                'code' => 'DA',
            ),
            108 => 
            array (
                'id' => 109,
                'country_id' => 84,
                'region_id' => NULL,
                'name' => 'Al-Wusta',
                'full_name' => NULL,
                'code' => 'WU',
            ),
            109 => 
            array (
                'id' => 110,
                'country_id' => 84,
                'region_id' => NULL,
                'name' => 'Zufar',
                'full_name' => NULL,
                'code' => 'ZU',
            ),
            110 => 
            array (
                'id' => 111,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Abseron',
                'full_name' => NULL,
                'code' => 'ABS',
            ),
            111 => 
            array (
                'id' => 112,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Xacmaz',
                'full_name' => NULL,
                'code' => 'XAC',
            ),
            112 => 
            array (
                'id' => 113,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Kalbacar',
                'full_name' => NULL,
                'code' => 'KAL',
            ),
            113 => 
            array (
                'id' => 114,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Qazax',
                'full_name' => NULL,
                'code' => 'QAZ',
            ),
            114 => 
            array (
                'id' => 115,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Lankaran',
                'full_name' => NULL,
                'code' => 'LAN',
            ),
            115 => 
            array (
                'id' => 116,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Mil-Qarabax',
                'full_name' => NULL,
                'code' => 'MQA',
            ),
            116 => 
            array (
                'id' => 117,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Mugan-Salyan',
                'full_name' => NULL,
                'code' => 'MSA',
            ),
            117 => 
            array (
                'id' => 118,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Nagorni-Qarabax',
                'full_name' => NULL,
                'code' => 'NQA',
            ),
            118 => 
            array (
                'id' => 119,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Naxcivan',
                'full_name' => NULL,
                'code' => 'NX',
            ),
            119 => 
            array (
                'id' => 120,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Priaraks',
                'full_name' => NULL,
                'code' => 'PRI',
            ),
            120 => 
            array (
                'id' => 121,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Saki',
                'full_name' => NULL,
                'code' => 'SA',
            ),
            121 => 
            array (
                'id' => 122,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Sumqayit',
                'full_name' => NULL,
                'code' => 'SMC',
            ),
            122 => 
            array (
                'id' => 123,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Sirvan',
                'full_name' => NULL,
                'code' => 'SIR',
            ),
            123 => 
            array (
                'id' => 124,
                'country_id' => 117,
                'region_id' => NULL,
                'name' => 'Ganca',
                'full_name' => NULL,
                'code' => 'GA',
            ),
            124 => 
            array (
                'id' => 125,
                'country_id' => 7,
                'region_id' => NULL,
                'name' => 'Aswan',
                'full_name' => NULL,
                'code' => 'ASW',
            ),
            125 => 
            array (
                'id' => 126,
                'country_id' => 7,
                'region_id' => NULL,
                'name' => 'Al Ghurdaqah',
                'full_name' => NULL,
                'code' => 'GBY',
            ),
            126 => 
            array (
                'id' => 127,
                'country_id' => 7,
                'region_id' => NULL,
                'name' => 'Cairo',
                'full_name' => NULL,
                'code' => 'CAI',
            ),
            127 => 
            array (
                'id' => 128,
                'country_id' => 7,
                'region_id' => NULL,
                'name' => 'Shubra al Khaymah',
                'full_name' => NULL,
                'code' => 'SKH',
            ),
            128 => 
            array (
                'id' => 129,
                'country_id' => 7,
                'region_id' => NULL,
                'name' => 'Alexandria',
                'full_name' => NULL,
                'code' => 'ALY',
            ),
            129 => 
            array (
                'id' => 130,
                'country_id' => 45,
                'region_id' => NULL,
                'name' => 'Afar',
                'full_name' => NULL,
                'code' => 'AF',
            ),
            130 => 
            array (
                'id' => 131,
                'country_id' => 45,
                'region_id' => NULL,
                'name' => 'Amara',
                'full_name' => NULL,
                'code' => 'AH',
            ),
            131 => 
            array (
                'id' => 132,
                'country_id' => 45,
                'region_id' => NULL,
                'name' => 'Oromiya',
                'full_name' => NULL,
                'code' => 'OR',
            ),
            132 => 
            array (
                'id' => 133,
                'country_id' => 45,
                'region_id' => NULL,
                'name' => 'Binshangul Gumuz',
                'full_name' => NULL,
                'code' => 'BG',
            ),
            133 => 
            array (
                'id' => 134,
                'country_id' => 45,
                'region_id' => NULL,
                'name' => 'Dire Dawa',
                'full_name' => NULL,
                'code' => 'DD',
            ),
            134 => 
            array (
                'id' => 135,
                'country_id' => 45,
                'region_id' => NULL,
                'name' => 'Gambela Hizboch',
                'full_name' => NULL,
                'code' => 'GB',
            ),
            135 => 
            array (
                'id' => 136,
                'country_id' => 45,
                'region_id' => NULL,
                'name' => 'Hareri  Hizb',
                'full_name' => NULL,
                'code' => 'HR',
            ),
            136 => 
            array (
                'id' => 137,
                'country_id' => 45,
                'region_id' => NULL,
                'name' => 'YeDebub Biheroch',
                'full_name' => NULL,
                'code' => 'SN',
            ),
            137 => 
            array (
                'id' => 138,
                'country_id' => 45,
                'region_id' => NULL,
                'name' => 'Sumale',
                'full_name' => NULL,
                'code' => 'SM',
            ),
            138 => 
            array (
                'id' => 139,
                'country_id' => 45,
                'region_id' => NULL,
                'name' => 'Tigray',
                'full_name' => NULL,
                'code' => 'TG',
            ),
            139 => 
            array (
                'id' => 140,
                'country_id' => 45,
                'region_id' => NULL,
                'name' => 'Adis abeba',
                'full_name' => NULL,
                'code' => 'AA',
            ),
            140 => 
            array (
                'id' => 141,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Offaly',
                'full_name' => NULL,
                'code' => 'OF',
            ),
            141 => 
            array (
                'id' => 142,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Tipperary',
                'full_name' => NULL,
                'code' => 'TP',
            ),
            142 => 
            array (
                'id' => 143,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Dublin',
                'full_name' => NULL,
                'code' => 'DB',
            ),
            143 => 
            array (
                'id' => 144,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Donegal',
                'full_name' => NULL,
                'code' => 'DG',
            ),
            144 => 
            array (
                'id' => 145,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Galway',
                'full_name' => NULL,
                'code' => 'GW',
            ),
            145 => 
            array (
                'id' => 146,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Kildare',
                'full_name' => NULL,
                'code' => 'KD',
            ),
            146 => 
            array (
                'id' => 147,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Kilkenny',
                'full_name' => NULL,
                'code' => 'KK',
            ),
            147 => 
            array (
                'id' => 148,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Cavan',
                'full_name' => NULL,
                'code' => 'CV',
            ),
            148 => 
            array (
                'id' => 149,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Carlow',
                'full_name' => NULL,
                'code' => 'CW',
            ),
            149 => 
            array (
                'id' => 150,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Kerry',
                'full_name' => NULL,
                'code' => 'KR',
            ),
            150 => 
            array (
                'id' => 151,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Cork',
                'full_name' => NULL,
                'code' => 'CK',
            ),
            151 => 
            array (
                'id' => 152,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Clare',
                'full_name' => NULL,
                'code' => 'CL',
            ),
            152 => 
            array (
                'id' => 153,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Longford',
                'full_name' => NULL,
                'code' => 'LF',
            ),
            153 => 
            array (
                'id' => 154,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Louth',
                'full_name' => NULL,
                'code' => 'LT',
            ),
            154 => 
            array (
                'id' => 155,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Laois',
                'full_name' => NULL,
                'code' => 'LA',
            ),
            155 => 
            array (
                'id' => 156,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Limerick',
                'full_name' => NULL,
                'code' => 'LM',
            ),
            156 => 
            array (
                'id' => 157,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Leitrim',
                'full_name' => NULL,
                'code' => 'LR',
            ),
            157 => 
            array (
                'id' => 158,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Roscommon',
                'full_name' => NULL,
                'code' => 'RC',
            ),
            158 => 
            array (
                'id' => 159,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Mayo',
                'full_name' => NULL,
                'code' => 'MY',
            ),
            159 => 
            array (
                'id' => 160,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Meath',
                'full_name' => NULL,
                'code' => 'MT',
            ),
            160 => 
            array (
                'id' => 161,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Monaghan',
                'full_name' => NULL,
                'code' => 'MG',
            ),
            161 => 
            array (
                'id' => 162,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Sligo',
                'full_name' => NULL,
                'code' => 'SL',
            ),
            162 => 
            array (
                'id' => 163,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Wicklow',
                'full_name' => NULL,
                'code' => 'WK',
            ),
            163 => 
            array (
                'id' => 164,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Wexford',
                'full_name' => NULL,
                'code' => 'WX',
            ),
            164 => 
            array (
                'id' => 165,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Waterford',
                'full_name' => NULL,
                'code' => 'WF',
            ),
            165 => 
            array (
                'id' => 166,
                'country_id' => 144,
                'region_id' => NULL,
                'name' => 'Westmeath',
                'full_name' => NULL,
                'code' => 'WM',
            ),
            166 => 
            array (
                'id' => 167,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Polva',
                'full_name' => NULL,
                'code' => '65',
            ),
            167 => 
            array (
                'id' => 168,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Harju',
                'full_name' => NULL,
                'code' => '37',
            ),
            168 => 
            array (
                'id' => 169,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Rapla',
                'full_name' => NULL,
                'code' => '70',
            ),
            169 => 
            array (
                'id' => 170,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Laane',
                'full_name' => NULL,
                'code' => '57',
            ),
            170 => 
            array (
                'id' => 171,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Parnu',
                'full_name' => NULL,
                'code' => '67',
            ),
            171 => 
            array (
                'id' => 172,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Saare',
                'full_name' => NULL,
                'code' => '74',
            ),
            172 => 
            array (
                'id' => 173,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Tartu',
                'full_name' => NULL,
                'code' => '78',
            ),
            173 => 
            array (
                'id' => 174,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Valga',
                'full_name' => NULL,
                'code' => '82',
            ),
            174 => 
            array (
                'id' => 175,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Viljandi',
                'full_name' => NULL,
                'code' => '84',
            ),
            175 => 
            array (
                'id' => 176,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Laane-Viru',
                'full_name' => NULL,
                'code' => '59',
            ),
            176 => 
            array (
                'id' => 177,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Voru',
                'full_name' => NULL,
                'code' => '86',
            ),
            177 => 
            array (
                'id' => 178,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Hiiu',
                'full_name' => NULL,
                'code' => '39',
            ),
            178 => 
            array (
                'id' => 179,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Jarva',
                'full_name' => NULL,
                'code' => '51',
            ),
            179 => 
            array (
                'id' => 180,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Jogeva',
                'full_name' => NULL,
                'code' => '49',
            ),
            180 => 
            array (
                'id' => 181,
                'country_id' => 130,
                'region_id' => NULL,
                'name' => 'Ida-Viru',
                'full_name' => NULL,
                'code' => '44',
            ),
            181 => 
            array (
                'id' => 182,
                'country_id' => 157,
                'region_id' => NULL,
                'name' => 'Andorra la Vella',
                'full_name' => NULL,
                'code' => '7',
            ),
            182 => 
            array (
                'id' => 183,
                'country_id' => 157,
                'region_id' => NULL,
                'name' => 'Ordino',
                'full_name' => NULL,
                'code' => '5',
            ),
            183 => 
            array (
                'id' => 184,
                'country_id' => 157,
                'region_id' => NULL,
                'name' => 'Encamp',
                'full_name' => NULL,
                'code' => '3',
            ),
            184 => 
            array (
                'id' => 185,
                'country_id' => 157,
                'region_id' => NULL,
                'name' => 'Canillo',
                'full_name' => NULL,
                'code' => '2',
            ),
            185 => 
            array (
                'id' => 186,
                'country_id' => 157,
                'region_id' => NULL,
                'name' => 'Escaldes-Engordany',
                'full_name' => NULL,
                'code' => '8',
            ),
            186 => 
            array (
                'id' => 187,
                'country_id' => 157,
                'region_id' => NULL,
                'name' => 'La Massana',
                'full_name' => NULL,
                'code' => '4',
            ),
            187 => 
            array (
                'id' => 188,
                'country_id' => 157,
                'region_id' => NULL,
                'name' => 'Sant Julia de Laria',
                'full_name' => NULL,
                'code' => '6',
            ),
            188 => 
            array (
                'id' => 189,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Cuanza Norte',
                'full_name' => NULL,
                'code' => 'CNO',
            ),
            189 => 
            array (
                'id' => 190,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Lunda Norte',
                'full_name' => NULL,
                'code' => 'LNO',
            ),
            190 => 
            array (
                'id' => 191,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Bengo',
                'full_name' => NULL,
                'code' => 'BGO',
            ),
            191 => 
            array (
                'id' => 192,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Benguela',
                'full_name' => NULL,
                'code' => 'BGU',
            ),
            192 => 
            array (
                'id' => 193,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Bie',
                'full_name' => NULL,
                'code' => 'BIE',
            ),
            193 => 
            array (
                'id' => 194,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Cabinda',
                'full_name' => NULL,
                'code' => 'CAB',
            ),
            194 => 
            array (
                'id' => 195,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Cunene',
                'full_name' => NULL,
                'code' => 'CNN',
            ),
            195 => 
            array (
                'id' => 196,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Cuando Cubango',
                'full_name' => NULL,
                'code' => 'CCU',
            ),
            196 => 
            array (
                'id' => 197,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Luanda',
                'full_name' => NULL,
                'code' => 'LUA',
            ),
            197 => 
            array (
                'id' => 198,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Malanje',
                'full_name' => NULL,
                'code' => 'MAL',
            ),
            198 => 
            array (
                'id' => 199,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Moxico',
                'full_name' => NULL,
                'code' => 'MOX',
            ),
            199 => 
            array (
                'id' => 200,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Namibe',
                'full_name' => NULL,
                'code' => 'NAM',
            ),
            200 => 
            array (
                'id' => 201,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Cuanza Sul',
                'full_name' => NULL,
                'code' => 'CUS',
            ),
            201 => 
            array (
                'id' => 202,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Lunda Sul',
                'full_name' => NULL,
                'code' => 'LSU',
            ),
            202 => 
            array (
                'id' => 203,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Huambo',
                'full_name' => NULL,
                'code' => 'HUA',
            ),
            203 => 
            array (
                'id' => 204,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Huila',
                'full_name' => NULL,
                'code' => 'HUI',
            ),
            204 => 
            array (
                'id' => 205,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Uige',
                'full_name' => NULL,
                'code' => 'UIG',
            ),
            205 => 
            array (
                'id' => 206,
                'country_id' => 12,
                'region_id' => NULL,
                'name' => 'Zaire',
                'full_name' => NULL,
                'code' => 'ZAI',
            ),
            206 => 
            array (
                'id' => 207,
                'country_id' => 160,
                'region_id' => NULL,
                'name' => 'Burgenland',
                'full_name' => NULL,
                'code' => 'BUR',
            ),
            207 => 
            array (
                'id' => 208,
                'country_id' => 160,
                'region_id' => NULL,
                'name' => 'Tyrol',
                'full_name' => NULL,
                'code' => 'TYR',
            ),
            208 => 
            array (
                'id' => 209,
                'country_id' => 160,
                'region_id' => NULL,
                'name' => 'Vorarlberg',
                'full_name' => NULL,
                'code' => 'VOR',
            ),
            209 => 
            array (
                'id' => 210,
                'country_id' => 160,
                'region_id' => NULL,
                'name' => 'Carinthia',
                'full_name' => NULL,
                'code' => 'CAT',
            ),
            210 => 
            array (
                'id' => 211,
                'country_id' => 160,
                'region_id' => NULL,
                'name' => 'Salzburg',
                'full_name' => NULL,
                'code' => 'SZG',
            ),
            211 => 
            array (
                'id' => 212,
                'country_id' => 160,
                'region_id' => NULL,
                'name' => 'Upper Austria',
                'full_name' => NULL,
                'code' => 'UAU',
            ),
            212 => 
            array (
                'id' => 213,
                'country_id' => 160,
                'region_id' => NULL,
                'name' => 'Styria',
                'full_name' => NULL,
                'code' => 'STY',
            ),
            213 => 
            array (
                'id' => 214,
                'country_id' => 160,
                'region_id' => NULL,
                'name' => 'Vienna',
                'full_name' => NULL,
                'code' => 'VDD',
            ),
            214 => 
            array (
                'id' => 215,
                'country_id' => 160,
                'region_id' => NULL,
                'name' => 'Lower Austria',
                'full_name' => NULL,
                'code' => 'LAU',
            ),
            215 => 
            array (
                'id' => 216,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Northern',
                'full_name' => NULL,
                'code' => 'NO',
            ),
            216 => 
            array (
                'id' => 217,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Bougainville',
                'full_name' => NULL,
                'code' => 'BV',
            ),
            217 => 
            array (
                'id' => 218,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Eastern Highlands',
                'full_name' => NULL,
                'code' => 'EH',
            ),
            218 => 
            array (
                'id' => 219,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'East Sepik',
                'full_name' => NULL,
                'code' => 'ES',
            ),
            219 => 
            array (
                'id' => 220,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'East New Britain',
                'full_name' => NULL,
                'code' => 'EB',
            ),
            220 => 
            array (
                'id' => 221,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Enga',
                'full_name' => NULL,
                'code' => 'EN',
            ),
            221 => 
            array (
                'id' => 222,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Gulf',
                'full_name' => NULL,
                'code' => 'GU',
            ),
            222 => 
            array (
                'id' => 223,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Madang',
                'full_name' => NULL,
                'code' => 'MD',
            ),
            223 => 
            array (
                'id' => 224,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Manus',
                'full_name' => NULL,
                'code' => 'MN',
            ),
            224 => 
            array (
                'id' => 225,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Milne Bay',
                'full_name' => NULL,
                'code' => 'MB',
            ),
            225 => 
            array (
                'id' => 226,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Port Moresby',
                'full_name' => NULL,
                'code' => 'NC',
            ),
            226 => 
            array (
                'id' => 227,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Morobe',
                'full_name' => NULL,
                'code' => 'MR',
            ),
            227 => 
            array (
                'id' => 228,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Southern Highlands',
                'full_name' => NULL,
                'code' => 'SH',
            ),
            228 => 
            array (
                'id' => 229,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Simbu',
                'full_name' => NULL,
                'code' => 'SI',
            ),
            229 => 
            array (
                'id' => 230,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Sandaun',
                'full_name' => NULL,
                'code' => 'SA',
            ),
            230 => 
            array (
                'id' => 231,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Western',
                'full_name' => NULL,
                'code' => 'WE',
            ),
            231 => 
            array (
                'id' => 232,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'Western Highlands',
                'full_name' => NULL,
                'code' => 'WH',
            ),
            232 => 
            array (
                'id' => 233,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'West New Britain',
                'full_name' => NULL,
                'code' => 'WB',
            ),
            233 => 
            array (
                'id' => 234,
                'country_id' => 184,
                'region_id' => NULL,
                'name' => 'New Ireland',
                'full_name' => NULL,
                'code' => 'NI',
            ),
            234 => 
            array (
                'id' => 235,
                'country_id' => 92,
                'region_id' => NULL,
                'name' => 'Peshawar',
                'full_name' => NULL,
                'code' => 'PEW',
            ),
            235 => 
            array (
                'id' => 236,
                'country_id' => 92,
                'region_id' => NULL,
                'name' => 'Faisalabad',
                'full_name' => NULL,
                'code' => 'LYP',
            ),
            236 => 
            array (
                'id' => 237,
                'country_id' => 92,
                'region_id' => NULL,
                'name' => 'Gujranwala',
                'full_name' => NULL,
                'code' => 'GUJ',
            ),
            237 => 
            array (
                'id' => 238,
                'country_id' => 92,
                'region_id' => NULL,
                'name' => 'Hyderabad',
                'full_name' => NULL,
                'code' => 'HDD',
            ),
            238 => 
            array (
                'id' => 239,
                'country_id' => 92,
                'region_id' => NULL,
                'name' => 'Karachi',
                'full_name' => NULL,
                'code' => 'KCT',
            ),
            239 => 
            array (
                'id' => 240,
                'country_id' => 92,
                'region_id' => NULL,
                'name' => 'Lahore',
                'full_name' => NULL,
                'code' => 'LHE',
            ),
            240 => 
            array (
                'id' => 241,
                'country_id' => 92,
                'region_id' => NULL,
                'name' => 'Rawalpindi',
                'full_name' => NULL,
                'code' => 'RWP',
            ),
            241 => 
            array (
                'id' => 242,
                'country_id' => 92,
                'region_id' => NULL,
                'name' => 'Multan',
                'full_name' => NULL,
                'code' => 'MUX',
            ),
            242 => 
            array (
                'id' => 243,
                'country_id' => 92,
                'region_id' => NULL,
                'name' => 'Islamabad',
                'full_name' => NULL,
                'code' => 'ISB',
            ),
            243 => 
            array (
                'id' => 244,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Amambay',
                'full_name' => NULL,
                'code' => 'AM',
            ),
            244 => 
            array (
                'id' => 245,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Presidente Hayes',
                'full_name' => NULL,
                'code' => 'PH',
            ),
            245 => 
            array (
                'id' => 246,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Paraguari',
                'full_name' => NULL,
                'code' => 'PA',
            ),
            246 => 
            array (
                'id' => 247,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Boqueron',
                'full_name' => NULL,
                'code' => 'BO',
            ),
            247 => 
            array (
                'id' => 248,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Guaira',
                'full_name' => NULL,
                'code' => 'GU',
            ),
            248 => 
            array (
                'id' => 249,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Caaguazu',
                'full_name' => NULL,
                'code' => 'CG',
            ),
            249 => 
            array (
                'id' => 250,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Canindeyu',
                'full_name' => NULL,
                'code' => 'CN',
            ),
            250 => 
            array (
                'id' => 251,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Caazapa',
                'full_name' => NULL,
                'code' => 'CZ',
            ),
            251 => 
            array (
                'id' => 252,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Concepcion',
                'full_name' => NULL,
                'code' => 'CC',
            ),
            252 => 
            array (
                'id' => 253,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Cordillera',
                'full_name' => NULL,
                'code' => 'CD',
            ),
            253 => 
            array (
                'id' => 254,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Misiones',
                'full_name' => NULL,
                'code' => 'MI',
            ),
            254 => 
            array (
                'id' => 255,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Neembucu',
                'full_name' => NULL,
                'code' => 'NE',
            ),
            255 => 
            array (
                'id' => 256,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Alto Paraguay',
                'full_name' => NULL,
                'code' => 'AG',
            ),
            256 => 
            array (
                'id' => 257,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Alto Parana',
                'full_name' => NULL,
                'code' => 'AN',
            ),
            257 => 
            array (
                'id' => 258,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'San Pedro',
                'full_name' => NULL,
                'code' => 'SP',
            ),
            258 => 
            array (
                'id' => 259,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Asuncion',
                'full_name' => NULL,
                'code' => 'AS',
            ),
            259 => 
            array (
                'id' => 260,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Itapua',
                'full_name' => NULL,
                'code' => 'IT',
            ),
            260 => 
            array (
                'id' => 261,
                'country_id' => 189,
                'region_id' => NULL,
                'name' => 'Central',
                'full_name' => NULL,
                'code' => 'CE',
            ),
            261 => 
            array (
                'id' => 262,
                'country_id' => 74,
                'region_id' => NULL,
                'name' => 'Gaza Strip',
                'full_name' => NULL,
                'code' => 'GZ',
            ),
            262 => 
            array (
                'id' => 263,
                'country_id' => 74,
                'region_id' => NULL,
                'name' => 'West Bank',
                'full_name' => NULL,
                'code' => 'WE',
            ),
            263 => 
            array (
                'id' => 264,
                'country_id' => 61,
                'region_id' => NULL,
                'name' => 'Ash-Shamaliyah',
                'full_name' => NULL,
                'code' => '5',
            ),
            264 => 
            array (
                'id' => 265,
                'country_id' => 61,
                'region_id' => NULL,
                'name' => 'Al-Hadd',
                'full_name' => NULL,
                'code' => '1',
            ),
            265 => 
            array (
                'id' => 266,
                'country_id' => 61,
                'region_id' => NULL,
                'name' => 'Hammad',
                'full_name' => NULL,
                'code' => '12',
            ),
            266 => 
            array (
                'id' => 267,
                'country_id' => 61,
                'region_id' => NULL,
                'name' => 'Ar-Rifa',
                'full_name' => NULL,
                'code' => '9',
            ),
            267 => 
            array (
                'id' => 268,
                'country_id' => 61,
                'region_id' => NULL,
                'name' => 'Al-Manamah',
                'full_name' => NULL,
                'code' => '3',
            ),
            268 => 
            array (
                'id' => 269,
                'country_id' => 61,
                'region_id' => NULL,
                'name' => 'Al-Muharraq',
                'full_name' => NULL,
                'code' => '2',
            ),
            269 => 
            array (
                'id' => 270,
                'country_id' => 61,
                'region_id' => NULL,
                'name' => 'Al-Gharbiyah',
                'full_name' => NULL,
                'code' => '10',
            ),
            270 => 
            array (
                'id' => 271,
                'country_id' => 61,
                'region_id' => NULL,
                'name' => 'Isa',
                'full_name' => NULL,
                'code' => '8',
            ),
            271 => 
            array (
                'id' => 272,
                'country_id' => 61,
                'region_id' => NULL,
                'name' => 'Al-Wusta',
                'full_name' => NULL,
                'code' => '7',
            ),
            272 => 
            array (
                'id' => 273,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Acre',
                'full_name' => NULL,
                'code' => 'AC',
            ),
            273 => 
            array (
                'id' => 274,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Alagoas',
                'full_name' => NULL,
                'code' => 'AL',
            ),
            274 => 
            array (
                'id' => 275,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Amapa',
                'full_name' => NULL,
                'code' => 'AP',
            ),
            275 => 
            array (
                'id' => 276,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Parana',
                'full_name' => NULL,
                'code' => 'PR',
            ),
            276 => 
            array (
                'id' => 277,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Brasilia',
                'full_name' => NULL,
                'code' => 'BSB',
            ),
            277 => 
            array (
                'id' => 278,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Bahia',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            278 => 
            array (
                'id' => 279,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Rio Grande do Norte',
                'full_name' => NULL,
                'code' => 'RN',
            ),
            279 => 
            array (
                'id' => 280,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Pernambuco',
                'full_name' => NULL,
                'code' => 'PE',
            ),
            280 => 
            array (
                'id' => 281,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Goias',
                'full_name' => NULL,
                'code' => 'GO',
            ),
            281 => 
            array (
                'id' => 282,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Rondonia',
                'full_name' => NULL,
                'code' => 'RO',
            ),
            282 => 
            array (
                'id' => 283,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Rio de Janeiro',
                'full_name' => NULL,
                'code' => 'RJ',
            ),
            283 => 
            array (
                'id' => 284,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Roraima',
                'full_name' => NULL,
                'code' => 'RR',
            ),
            284 => 
            array (
                'id' => 285,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Maranhao',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            285 => 
            array (
                'id' => 286,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Mato Grosso',
                'full_name' => NULL,
                'code' => 'MT',
            ),
            286 => 
            array (
                'id' => 287,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Minas Gerais',
                'full_name' => NULL,
                'code' => 'MG',
            ),
            287 => 
            array (
                'id' => 288,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Rio Grande do Sul',
                'full_name' => NULL,
                'code' => 'RS',
            ),
            288 => 
            array (
                'id' => 289,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Mato Grosso do Sul',
                'full_name' => NULL,
                'code' => 'MS',
            ),
            289 => 
            array (
                'id' => 290,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Para',
                'full_name' => NULL,
                'code' => 'PA',
            ),
            290 => 
            array (
                'id' => 291,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Paraiba',
                'full_name' => NULL,
                'code' => 'PB',
            ),
            291 => 
            array (
                'id' => 292,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Piaui',
                'full_name' => NULL,
                'code' => 'PI',
            ),
            292 => 
            array (
                'id' => 293,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Ceara',
                'full_name' => NULL,
                'code' => 'CE',
            ),
            293 => 
            array (
                'id' => 294,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Sergipe',
                'full_name' => NULL,
                'code' => 'SE',
            ),
            294 => 
            array (
                'id' => 295,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Espirito Santo',
                'full_name' => NULL,
                'code' => 'ES',
            ),
            295 => 
            array (
                'id' => 296,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Sao Paulo',
                'full_name' => NULL,
                'code' => 'SP',
            ),
            296 => 
            array (
                'id' => 297,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Santa Catarina',
                'full_name' => NULL,
                'code' => 'SC',
            ),
            297 => 
            array (
                'id' => 298,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Tocantins',
                'full_name' => NULL,
                'code' => 'TO',
            ),
            298 => 
            array (
                'id' => 299,
                'country_id' => 211,
                'region_id' => NULL,
                'name' => 'Amazonas',
                'full_name' => NULL,
                'code' => 'AM',
            ),
            299 => 
            array (
                'id' => 300,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Bresckaja',
                'full_name' => NULL,
                'code' => 'BR',
            ),
            300 => 
            array (
                'id' => 301,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Homelskaja',
                'full_name' => NULL,
                'code' => 'HO',
            ),
            301 => 
            array (
                'id' => 302,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Hrodzenskaja',
                'full_name' => NULL,
                'code' => 'HR',
            ),
            302 => 
            array (
                'id' => 303,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Minsk',
                'full_name' => NULL,
                'code' => 'MI',
            ),
            303 => 
            array (
                'id' => 304,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Mahileuskaja',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            304 => 
            array (
                'id' => 305,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Vicebskaja',
                'full_name' => NULL,
                'code' => 'VI',
            ),
            305 => 
            array (
                'id' => 306,
                'country_id' => 161,
                'region_id' => NULL,
                'name' => 'Burgas',
                'full_name' => NULL,
                'code' => 'BOJ',
            ),
            306 => 
            array (
                'id' => 307,
                'country_id' => 161,
                'region_id' => NULL,
                'name' => 'Khaskovo',
                'full_name' => NULL,
                'code' => 'KHO',
            ),
            307 => 
            array (
                'id' => 308,
                'country_id' => 161,
                'region_id' => NULL,
                'name' => 'Ruse',
                'full_name' => NULL,
                'code' => 'ROU',
            ),
            308 => 
            array (
                'id' => 309,
                'country_id' => 161,
                'region_id' => NULL,
                'name' => 'Lovech',
                'full_name' => NULL,
                'code' => 'LVP',
            ),
            309 => 
            array (
                'id' => 310,
                'country_id' => 161,
                'region_id' => NULL,
                'name' => 'Montana',
                'full_name' => NULL,
                'code' => 'OZA',
            ),
            310 => 
            array (
                'id' => 311,
                'country_id' => 161,
                'region_id' => NULL,
                'name' => 'Plovdiv',
                'full_name' => NULL,
                'code' => 'PDV',
            ),
            311 => 
            array (
                'id' => 312,
                'country_id' => 161,
                'region_id' => NULL,
                'name' => 'Sofiya',
                'full_name' => NULL,
                'code' => 'SOF',
            ),
            312 => 
            array (
                'id' => 313,
                'country_id' => 161,
                'region_id' => NULL,
                'name' => 'Grad Sofiya',
                'full_name' => NULL,
                'code' => 'GSO',
            ),
            313 => 
            array (
                'id' => 314,
                'country_id' => 161,
                'region_id' => NULL,
                'name' => 'Varna',
                'full_name' => NULL,
                'code' => 'VAR',
            ),
            314 => 
            array (
                'id' => 315,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Alibori',
                'full_name' => NULL,
                'code' => 'AL',
            ),
            315 => 
            array (
                'id' => 316,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Atakora',
                'full_name' => NULL,
                'code' => 'AK',
            ),
            316 => 
            array (
                'id' => 317,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Littoral',
                'full_name' => NULL,
                'code' => 'LI',
            ),
            317 => 
            array (
                'id' => 318,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Bohicon',
                'full_name' => NULL,
                'code' => 'BOH',
            ),
            318 => 
            array (
                'id' => 319,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Borgou',
                'full_name' => NULL,
                'code' => 'BO',
            ),
            319 => 
            array (
                'id' => 320,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Atlantique',
                'full_name' => NULL,
                'code' => 'AQ',
            ),
            320 => 
            array (
                'id' => 321,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Plateau',
                'full_name' => NULL,
                'code' => 'PL',
            ),
            321 => 
            array (
                'id' => 322,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Kouffo',
                'full_name' => NULL,
                'code' => 'KO',
            ),
            322 => 
            array (
                'id' => 323,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Mono',
                'full_name' => NULL,
                'code' => 'MO',
            ),
            323 => 
            array (
                'id' => 324,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Collines',
                'full_name' => NULL,
                'code' => 'CO',
            ),
            324 => 
            array (
                'id' => 325,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Oueme',
                'full_name' => NULL,
                'code' => 'OU',
            ),
            325 => 
            array (
                'id' => 326,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Donga',
                'full_name' => NULL,
                'code' => 'DO',
            ),
            326 => 
            array (
                'id' => 327,
                'country_id' => 2,
                'region_id' => NULL,
                'name' => 'Zou',
                'full_name' => NULL,
                'code' => 'ZO',
            ),
            327 => 
            array (
                'id' => 328,
                'country_id' => 145,
                'region_id' => NULL,
                'name' => 'Hainaut',
                'full_name' => NULL,
                'code' => 'WHT',
            ),
            328 => 
            array (
                'id' => 329,
                'country_id' => 145,
                'region_id' => NULL,
                'name' => 'Antwerpen',
                'full_name' => NULL,
                'code' => 'VAN',
            ),
            329 => 
            array (
                'id' => 330,
                'country_id' => 145,
                'region_id' => NULL,
                'name' => 'Brabant-Wallone',
                'full_name' => NULL,
                'code' => 'WBR',
            ),
            330 => 
            array (
                'id' => 331,
                'country_id' => 145,
                'region_id' => NULL,
                'name' => 'Brussels',
                'full_name' => NULL,
                'code' => 'BRU',
            ),
            331 => 
            array (
                'id' => 332,
                'country_id' => 145,
                'region_id' => NULL,
                'name' => 'Oost-Vlaanderen',
                'full_name' => NULL,
                'code' => 'VOV',
            ),
            332 => 
            array (
                'id' => 333,
                'country_id' => 145,
                'region_id' => NULL,
                'name' => 'Vlaams-Brabant',
                'full_name' => NULL,
                'code' => 'VBR',
            ),
            333 => 
            array (
                'id' => 334,
                'country_id' => 145,
                'region_id' => NULL,
                'name' => 'Liege',
                'full_name' => NULL,
                'code' => 'WLG',
            ),
            334 => 
            array (
                'id' => 335,
                'country_id' => 145,
                'region_id' => NULL,
                'name' => 'Limburg',
                'full_name' => NULL,
                'code' => 'VLI',
            ),
            335 => 
            array (
                'id' => 336,
                'country_id' => 145,
                'region_id' => NULL,
                'name' => 'Luxembourg',
                'full_name' => NULL,
                'code' => 'WLX',
            ),
            336 => 
            array (
                'id' => 337,
                'country_id' => 145,
                'region_id' => NULL,
                'name' => 'Namur',
                'full_name' => NULL,
                'code' => 'WNA',
            ),
            337 => 
            array (
                'id' => 338,
                'country_id' => 145,
                'region_id' => NULL,
                'name' => 'West-Vlaanderen',
                'full_name' => NULL,
                'code' => 'VWV',
            ),
            338 => 
            array (
                'id' => 339,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Elbląg',
                'full_name' => NULL,
                'code' => 'ELB',
            ),
            339 => 
            array (
                'id' => 340,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Olsztyn',
                'full_name' => NULL,
                'code' => 'OLS',
            ),
            340 => 
            array (
                'id' => 341,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Ostrołeka',
                'full_name' => NULL,
                'code' => 'OSS',
            ),
            341 => 
            array (
                'id' => 342,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Bydgoszcz',
                'full_name' => NULL,
                'code' => 'BZG',
            ),
            342 => 
            array (
                'id' => 343,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Piotrkow',
                'full_name' => NULL,
                'code' => 'PIO',
            ),
            343 => 
            array (
                'id' => 344,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Bytom',
                'full_name' => NULL,
                'code' => 'BYT',
            ),
            344 => 
            array (
                'id' => 345,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Biała Podlaska',
                'full_name' => NULL,
                'code' => 'BAP',
            ),
            345 => 
            array (
                'id' => 346,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Białystok',
                'full_name' => NULL,
                'code' => 'BIA',
            ),
            346 => 
            array (
                'id' => 347,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Opole',
                'full_name' => NULL,
                'code' => 'OPO',
            ),
            347 => 
            array (
                'id' => 348,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Poznan',
                'full_name' => NULL,
                'code' => 'POZ',
            ),
            348 => 
            array (
                'id' => 349,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Dabrowa Gornicza',
                'full_name' => NULL,
                'code' => 'DAB',
            ),
            349 => 
            array (
                'id' => 350,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Gorzow Wlkp',
                'full_name' => NULL,
                'code' => 'GOW',
            ),
            350 => 
            array (
                'id' => 351,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Wroclaw',
                'full_name' => NULL,
                'code' => 'WRO',
            ),
            351 => 
            array (
                'id' => 352,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Wlocławek',
                'full_name' => NULL,
                'code' => 'WLO',
            ),
            352 => 
            array (
                'id' => 353,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Gdansk',
                'full_name' => NULL,
                'code' => 'GDN',
            ),
            353 => 
            array (
                'id' => 354,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Gdynia',
                'full_name' => NULL,
                'code' => 'GDY',
            ),
            354 => 
            array (
                'id' => 355,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Gliwice',
                'full_name' => NULL,
                'code' => 'GWC',
            ),
            355 => 
            array (
                'id' => 356,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Grudziadz',
                'full_name' => NULL,
                'code' => 'GRU',
            ),
            356 => 
            array (
                'id' => 357,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Chełm',
                'full_name' => NULL,
                'code' => 'CHO',
            ),
            357 => 
            array (
                'id' => 358,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Warszawa',
                'full_name' => NULL,
                'code' => 'WAW',
            ),
            358 => 
            array (
                'id' => 359,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Chorzow',
                'full_name' => NULL,
                'code' => 'CHZ',
            ),
            359 => 
            array (
                'id' => 360,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Kalisz',
                'full_name' => NULL,
                'code' => 'KAL',
            ),
            360 => 
            array (
                'id' => 361,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Katowice',
                'full_name' => NULL,
                'code' => 'KTW',
            ),
            361 => 
            array (
                'id' => 362,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Kielce',
                'full_name' => NULL,
                'code' => 'KLC',
            ),
            362 => 
            array (
                'id' => 363,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Konin',
                'full_name' => NULL,
                'code' => 'KON',
            ),
            363 => 
            array (
                'id' => 364,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Koszalin',
                'full_name' => NULL,
                'code' => 'OSZ',
            ),
            364 => 
            array (
                'id' => 365,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Krakow',
                'full_name' => NULL,
                'code' => 'KRK',
            ),
            365 => 
            array (
                'id' => 366,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Krosno',
                'full_name' => NULL,
                'code' => 'KRO',
            ),
            366 => 
            array (
                'id' => 367,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Radom',
                'full_name' => NULL,
                'code' => 'RDM',
            ),
            367 => 
            array (
                'id' => 368,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Legnica',
                'full_name' => NULL,
                'code' => 'LEG',
            ),
            368 => 
            array (
                'id' => 369,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Leszno',
                'full_name' => NULL,
                'code' => 'LEZ',
            ),
            369 => 
            array (
                'id' => 370,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Lublin',
                'full_name' => NULL,
                'code' => 'LUL',
            ),
            370 => 
            array (
                'id' => 371,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Ruda Sl',
                'full_name' => NULL,
                'code' => 'RDS',
            ),
            371 => 
            array (
                'id' => 372,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Lodz',
                'full_name' => NULL,
                'code' => 'LOD',
            ),
            372 => 
            array (
                'id' => 373,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Zielona Gora',
                'full_name' => NULL,
                'code' => 'IEG',
            ),
            373 => 
            array (
                'id' => 374,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Mysłowice',
                'full_name' => NULL,
                'code' => 'MYL',
            ),
            374 => 
            array (
                'id' => 375,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Piła',
                'full_name' => NULL,
                'code' => 'PIL',
            ),
            375 => 
            array (
                'id' => 376,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Przemysl',
                'full_name' => NULL,
                'code' => 'PRZ',
            ),
            376 => 
            array (
                'id' => 377,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Plock',
                'full_name' => NULL,
                'code' => 'PLO',
            ),
            377 => 
            array (
                'id' => 378,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Ciechanow',
                'full_name' => NULL,
                'code' => 'CIE',
            ),
            378 => 
            array (
                'id' => 379,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Rzeszow',
                'full_name' => NULL,
                'code' => 'RZE',
            ),
            379 => 
            array (
                'id' => 380,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Szczecin',
                'full_name' => NULL,
                'code' => 'SZZ',
            ),
            380 => 
            array (
                'id' => 381,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Skierniewice',
                'full_name' => NULL,
                'code' => 'SKI',
            ),
            381 => 
            array (
                'id' => 382,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Slupsk',
                'full_name' => NULL,
                'code' => 'SLP',
            ),
            382 => 
            array (
                'id' => 383,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Suwałki',
                'full_name' => NULL,
                'code' => 'SWL',
            ),
            383 => 
            array (
                'id' => 384,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Sopot',
                'full_name' => NULL,
                'code' => 'SOP',
            ),
            384 => 
            array (
                'id' => 385,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Sosnowiec',
                'full_name' => NULL,
                'code' => 'SWC',
            ),
            385 => 
            array (
                'id' => 386,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Tarnow',
                'full_name' => NULL,
                'code' => 'TAR',
            ),
            386 => 
            array (
                'id' => 387,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Tarnobrzeg',
                'full_name' => NULL,
                'code' => 'QEP',
            ),
            387 => 
            array (
                'id' => 388,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Tychy',
                'full_name' => NULL,
                'code' => 'TYY',
            ),
            388 => 
            array (
                'id' => 389,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Torun',
                'full_name' => NULL,
                'code' => 'TOR',
            ),
            389 => 
            array (
                'id' => 390,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Walbrzych',
                'full_name' => NULL,
                'code' => 'WZH',
            ),
            390 => 
            array (
                'id' => 391,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Lomza',
                'full_name' => NULL,
                'code' => 'QOY',
            ),
            391 => 
            array (
                'id' => 392,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Siemianowice Sl',
                'full_name' => NULL,
                'code' => 'SOW',
            ),
            392 => 
            array (
                'id' => 393,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Swinoujscie',
                'full_name' => NULL,
                'code' => 'SWI',
            ),
            393 => 
            array (
                'id' => 394,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Swietochłowice',
                'full_name' => NULL,
                'code' => 'SWT',
            ),
            394 => 
            array (
                'id' => 395,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Siedlce',
                'full_name' => NULL,
                'code' => 'SDC',
            ),
            395 => 
            array (
                'id' => 396,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Sieradz',
                'full_name' => NULL,
                'code' => 'SIR',
            ),
            396 => 
            array (
                'id' => 397,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Nowy Sacz',
                'full_name' => NULL,
                'code' => 'NOW',
            ),
            397 => 
            array (
                'id' => 398,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Jaworzno',
                'full_name' => NULL,
                'code' => 'JAW',
            ),
            398 => 
            array (
                'id' => 399,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Jelenia Gora',
                'full_name' => NULL,
                'code' => 'JEG',
            ),
            399 => 
            array (
                'id' => 400,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Zabrze',
                'full_name' => NULL,
                'code' => 'ZAB',
            ),
            400 => 
            array (
                'id' => 401,
                'country_id' => 154,
                'region_id' => NULL,
                'name' => 'Zamosc',
                'full_name' => NULL,
                'code' => 'ZAM',
            ),
            401 => 
            array (
                'id' => 402,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'El Alto',
                'full_name' => NULL,
                'code' => 'ALT',
            ),
            402 => 
            array (
                'id' => 403,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'Oruro',
                'full_name' => NULL,
                'code' => 'ORU',
            ),
            403 => 
            array (
                'id' => 404,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'El Beni',
                'full_name' => NULL,
                'code' => 'BEN',
            ),
            404 => 
            array (
                'id' => 405,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'Potosi',
                'full_name' => NULL,
                'code' => 'POI',
            ),
            405 => 
            array (
                'id' => 406,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'Quillacollo',
                'full_name' => NULL,
                'code' => 'QUI',
            ),
            406 => 
            array (
                'id' => 407,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'Cochabamba',
                'full_name' => NULL,
                'code' => 'CBB',
            ),
            407 => 
            array (
                'id' => 408,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'La Paz',
                'full_name' => NULL,
                'code' => 'LPB',
            ),
            408 => 
            array (
                'id' => 409,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'Pando',
                'full_name' => NULL,
                'code' => 'PAN',
            ),
            409 => 
            array (
                'id' => 410,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'Chuquisaca',
                'full_name' => NULL,
                'code' => 'CHU',
            ),
            410 => 
            array (
                'id' => 411,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'Sacaba',
                'full_name' => NULL,
                'code' => 'SAC',
            ),
            411 => 
            array (
                'id' => 412,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'Santa Cruz',
                'full_name' => NULL,
                'code' => 'SRZ',
            ),
            412 => 
            array (
                'id' => 413,
                'country_id' => 210,
                'region_id' => NULL,
                'name' => 'Tarija',
                'full_name' => NULL,
                'code' => 'TJA',
            ),
            413 => 
            array (
                'id' => 414,
                'country_id' => 139,
                'region_id' => NULL,
                'name' => 'Posavski',
                'full_name' => NULL,
                'code' => 'FPO',
            ),
            414 => 
            array (
                'id' => 415,
                'country_id' => 139,
                'region_id' => NULL,
                'name' => 'Bosansko-Podrinjski',
                'full_name' => NULL,
                'code' => 'FBP',
            ),
            415 => 
            array (
                'id' => 416,
                'country_id' => 139,
                'region_id' => NULL,
                'name' => 'Tomislavgrad',
                'full_name' => NULL,
                'code' => 'FTO',
            ),
            416 => 
            array (
                'id' => 417,
                'country_id' => 139,
                'region_id' => NULL,
                'name' => 'Hercegovacko-Neretvanski',
                'full_name' => NULL,
                'code' => 'FHN',
            ),
            417 => 
            array (
                'id' => 418,
                'country_id' => 139,
                'region_id' => NULL,
                'name' => 'Sarajevo',
                'full_name' => NULL,
                'code' => 'FSA',
            ),
            418 => 
            array (
                'id' => 419,
                'country_id' => 139,
                'region_id' => NULL,
                'name' => 'Tuzlanski-Podrinjski',
                'full_name' => NULL,
                'code' => 'FTU',
            ),
            419 => 
            array (
                'id' => 420,
                'country_id' => 139,
                'region_id' => NULL,
                'name' => 'Unsko-Sanski',
                'full_name' => NULL,
                'code' => 'FUS',
            ),
            420 => 
            array (
                'id' => 421,
                'country_id' => 139,
                'region_id' => NULL,
                'name' => 'Hercegovacko-Bosanski',
                'full_name' => NULL,
                'code' => 'FHB',
            ),
            421 => 
            array (
                'id' => 422,
                'country_id' => 139,
                'region_id' => NULL,
                'name' => 'Zapadno-Hercegovaki',
                'full_name' => NULL,
                'code' => 'FZH',
            ),
            422 => 
            array (
                'id' => 423,
                'country_id' => 139,
                'region_id' => NULL,
                'name' => 'Zenicko-Dobojski',
                'full_name' => NULL,
                'code' => 'FZE',
            ),
            423 => 
            array (
                'id' => 424,
                'country_id' => 139,
                'region_id' => NULL,
                'name' => 'Srednjo-Bosanski',
                'full_name' => NULL,
                'code' => 'FSB',
            ),
            424 => 
            array (
                'id' => 425,
                'country_id' => 209,
                'region_id' => NULL,
                'name' => 'Belize',
                'full_name' => NULL,
                'code' => 'BZ',
            ),
            425 => 
            array (
                'id' => 426,
                'country_id' => 209,
                'region_id' => NULL,
                'name' => 'Orange Walk',
                'full_name' => NULL,
                'code' => 'OW',
            ),
            426 => 
            array (
                'id' => 427,
                'country_id' => 209,
                'region_id' => NULL,
                'name' => 'Cayo',
                'full_name' => NULL,
                'code' => 'CY',
            ),
            427 => 
            array (
                'id' => 428,
                'country_id' => 209,
                'region_id' => NULL,
                'name' => 'Corozal',
                'full_name' => NULL,
                'code' => 'CR',
            ),
            428 => 
            array (
                'id' => 429,
                'country_id' => 209,
                'region_id' => NULL,
                'name' => 'Stann Creek',
                'full_name' => NULL,
                'code' => 'SC',
            ),
            429 => 
            array (
                'id' => 430,
                'country_id' => 209,
                'region_id' => NULL,
                'name' => 'Toledo',
                'full_name' => NULL,
                'code' => 'TO',
            ),
            430 => 
            array (
                'id' => 431,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Bale',
                'full_name' => NULL,
                'code' => 'BAL',
            ),
            431 => 
            array (
                'id' => 432,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Bam',
                'full_name' => NULL,
                'code' => 'BAM',
            ),
            432 => 
            array (
                'id' => 433,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Banwa',
                'full_name' => NULL,
                'code' => 'BAN',
            ),
            433 => 
            array (
                'id' => 434,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Bazega',
                'full_name' => NULL,
                'code' => 'BAZ',
            ),
            434 => 
            array (
                'id' => 435,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Poni',
                'full_name' => NULL,
                'code' => 'PON',
            ),
            435 => 
            array (
                'id' => 436,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Boulgou',
                'full_name' => NULL,
                'code' => 'BLG',
            ),
            436 => 
            array (
                'id' => 437,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Boulkiemde',
                'full_name' => NULL,
                'code' => 'BOK',
            ),
            437 => 
            array (
                'id' => 438,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Bougouriba',
                'full_name' => NULL,
                'code' => 'BOR',
            ),
            438 => 
            array (
                'id' => 439,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Ganzourgou',
                'full_name' => NULL,
                'code' => 'GAN',
            ),
            439 => 
            array (
                'id' => 440,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Gourma',
                'full_name' => NULL,
                'code' => 'GOU',
            ),
            440 => 
            array (
                'id' => 441,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Ziro',
                'full_name' => NULL,
                'code' => 'ZIR',
            ),
            441 => 
            array (
                'id' => 442,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Kadiogo',
                'full_name' => NULL,
                'code' => 'KAD',
            ),
            442 => 
            array (
                'id' => 443,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Kenedougou',
                'full_name' => NULL,
                'code' => 'KEN',
            ),
            443 => 
            array (
                'id' => 444,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Komondjari',
                'full_name' => NULL,
                'code' => 'KOO',
            ),
            444 => 
            array (
                'id' => 445,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Comoe',
                'full_name' => NULL,
                'code' => 'COM',
            ),
            445 => 
            array (
                'id' => 446,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Kompienga',
                'full_name' => NULL,
                'code' => 'KOP',
            ),
            446 => 
            array (
                'id' => 447,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Kossi',
                'full_name' => NULL,
                'code' => 'KOS',
            ),
            447 => 
            array (
                'id' => 448,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Koulpelogo',
                'full_name' => NULL,
                'code' => 'KOL',
            ),
            448 => 
            array (
                'id' => 449,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Kourweogo',
                'full_name' => NULL,
                'code' => 'KOW',
            ),
            449 => 
            array (
                'id' => 450,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Kouritenga',
                'full_name' => NULL,
                'code' => 'KOT',
            ),
            450 => 
            array (
                'id' => 451,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Leraba',
                'full_name' => NULL,
                'code' => 'LER',
            ),
            451 => 
            array (
                'id' => 452,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Loroum',
                'full_name' => NULL,
                'code' => 'LOR',
            ),
            452 => 
            array (
                'id' => 453,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Mouhoun',
                'full_name' => NULL,
                'code' => 'MOU',
            ),
            453 => 
            array (
                'id' => 454,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Namentenga',
                'full_name' => NULL,
                'code' => 'NAM',
            ),
            454 => 
            array (
                'id' => 455,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Nahouri',
                'full_name' => NULL,
                'code' => 'NAH',
            ),
            455 => 
            array (
                'id' => 456,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Nayala',
                'full_name' => NULL,
                'code' => 'NAY',
            ),
            456 => 
            array (
                'id' => 457,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Gnagna',
                'full_name' => NULL,
                'code' => 'GNA',
            ),
            457 => 
            array (
                'id' => 458,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Noumbiel',
                'full_name' => NULL,
                'code' => 'NOU',
            ),
            458 => 
            array (
                'id' => 459,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Passore',
                'full_name' => NULL,
                'code' => 'PAS',
            ),
            459 => 
            array (
                'id' => 460,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Seno',
                'full_name' => NULL,
                'code' => 'SEN',
            ),
            460 => 
            array (
                'id' => 461,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Sanguie',
                'full_name' => NULL,
                'code' => 'SAG',
            ),
            461 => 
            array (
                'id' => 462,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Sanmatenga',
                'full_name' => NULL,
                'code' => 'SAM',
            ),
            462 => 
            array (
                'id' => 463,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Sourou',
                'full_name' => NULL,
                'code' => 'SOR',
            ),
            463 => 
            array (
                'id' => 464,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Soum',
                'full_name' => NULL,
                'code' => 'SOM',
            ),
            464 => 
            array (
                'id' => 465,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Tapoa',
                'full_name' => NULL,
                'code' => 'TAP',
            ),
            465 => 
            array (
                'id' => 466,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Tuy',
                'full_name' => NULL,
                'code' => 'TUY',
            ),
            466 => 
            array (
                'id' => 467,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Houet',
                'full_name' => NULL,
                'code' => 'HOU',
            ),
            467 => 
            array (
                'id' => 468,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Oubritenga',
                'full_name' => NULL,
                'code' => 'OUB',
            ),
            468 => 
            array (
                'id' => 469,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Oudalan',
                'full_name' => NULL,
                'code' => 'OUD',
            ),
            469 => 
            array (
                'id' => 470,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Sissili',
                'full_name' => NULL,
                'code' => 'SIS',
            ),
            470 => 
            array (
                'id' => 471,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Yagha',
                'full_name' => NULL,
                'code' => 'YAG',
            ),
            471 => 
            array (
                'id' => 472,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Yatenga',
                'full_name' => NULL,
                'code' => 'YAT',
            ),
            472 => 
            array (
                'id' => 473,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Ioba',
                'full_name' => NULL,
                'code' => 'IOA',
            ),
            473 => 
            array (
                'id' => 474,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Zoundweogo',
                'full_name' => NULL,
                'code' => 'ZOW',
            ),
            474 => 
            array (
                'id' => 475,
                'country_id' => 9,
                'region_id' => NULL,
                'name' => 'Zondoma',
                'full_name' => NULL,
                'code' => 'ZOD',
            ),
            475 => 
            array (
                'id' => 476,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Bubanza',
                'full_name' => NULL,
                'code' => 'BB',
            ),
            476 => 
            array (
                'id' => 477,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Bururi',
                'full_name' => NULL,
                'code' => 'BR',
            ),
            477 => 
            array (
                'id' => 478,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Bujumbura Mairie',
                'full_name' => NULL,
                'code' => 'BM',
            ),
            478 => 
            array (
                'id' => 479,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Bujumbura Rural',
                'full_name' => NULL,
                'code' => 'BU',
            ),
            479 => 
            array (
                'id' => 480,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Ngozi',
                'full_name' => NULL,
                'code' => 'NG',
            ),
            480 => 
            array (
                'id' => 481,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Kirundo',
                'full_name' => NULL,
                'code' => 'KI',
            ),
            481 => 
            array (
                'id' => 482,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Gitega',
                'full_name' => NULL,
                'code' => 'GI',
            ),
            482 => 
            array (
                'id' => 483,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Karuzi',
                'full_name' => NULL,
                'code' => 'KR',
            ),
            483 => 
            array (
                'id' => 484,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Kayanza',
                'full_name' => NULL,
                'code' => 'KY',
            ),
            484 => 
            array (
                'id' => 485,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Cankuzo',
                'full_name' => NULL,
                'code' => 'CA',
            ),
            485 => 
            array (
                'id' => 486,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Rutana',
                'full_name' => NULL,
                'code' => 'RT',
            ),
            486 => 
            array (
                'id' => 487,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Ruyigi',
                'full_name' => NULL,
                'code' => 'RY',
            ),
            487 => 
            array (
                'id' => 488,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Makamba',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            488 => 
            array (
                'id' => 489,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Muramvya',
                'full_name' => NULL,
                'code' => 'MU',
            ),
            489 => 
            array (
                'id' => 490,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Mwaro',
                'full_name' => NULL,
                'code' => 'MW',
            ),
            490 => 
            array (
                'id' => 491,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Muyinga',
                'full_name' => NULL,
                'code' => 'MY',
            ),
            491 => 
            array (
                'id' => 492,
                'country_id' => 50,
                'region_id' => NULL,
                'name' => 'Cibitoke',
                'full_name' => NULL,
                'code' => 'CI',
            ),
            492 => 
            array (
                'id' => 493,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Haeju',
                'full_name' => NULL,
                'code' => 'HAE',
            ),
            493 => 
            array (
                'id' => 494,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Hyesan',
                'full_name' => NULL,
                'code' => 'HYE',
            ),
            494 => 
            array (
                'id' => 495,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Kanggye',
                'full_name' => NULL,
                'code' => 'KAN',
            ),
            495 => 
            array (
                'id' => 496,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Kaesong',
                'full_name' => NULL,
                'code' => 'KSN',
            ),
            496 => 
            array (
                'id' => 497,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Naseon',
                'full_name' => NULL,
                'code' => 'NAS',
            ),
            497 => 
            array (
                'id' => 498,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Namp\'o',
                'full_name' => NULL,
                'code' => 'NAM',
            ),
            498 => 
            array (
                'id' => 499,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Pyongyang',
                'full_name' => NULL,
                'code' => 'FNJ',
            ),
            499 => 
            array (
                'id' => 500,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Ch\'ongjin',
                'full_name' => NULL,
                'code' => 'CHO',
            ),
        ));
        \DB::table('world_cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Sariwon',
                'full_name' => NULL,
                'code' => 'SAR',
            ),
            1 => 
            array (
                'id' => 502,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Hamhung',
                'full_name' => NULL,
                'code' => 'HAM',
            ),
            2 => 
            array (
                'id' => 503,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Sinuiju',
                'full_name' => NULL,
                'code' => 'SII',
            ),
            3 => 
            array (
                'id' => 504,
                'country_id' => 73,
                'region_id' => NULL,
                'name' => 'Wonsan',
                'full_name' => NULL,
                'code' => 'WON',
            ),
            4 => 
            array (
                'id' => 505,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Aarhus',
                'full_name' => NULL,
                'code' => 'AR',
            ),
            5 => 
            array (
                'id' => 506,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Nordjylland',
                'full_name' => NULL,
                'code' => 'VSV',
            ),
            6 => 
            array (
                'id' => 507,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Bornholm',
                'full_name' => NULL,
                'code' => 'BO',
            ),
            7 => 
            array (
                'id' => 508,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Frederiksborg',
                'full_name' => NULL,
                'code' => 'FRE',
            ),
            8 => 
            array (
                'id' => 509,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Fyn',
                'full_name' => NULL,
                'code' => 'FY',
            ),
            9 => 
            array (
                'id' => 510,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Copenhagen',
                'full_name' => NULL,
                'code' => 'CPH',
            ),
            10 => 
            array (
                'id' => 511,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Ribe',
                'full_name' => NULL,
                'code' => 'RIB',
            ),
            11 => 
            array (
                'id' => 512,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Ringkoebing',
                'full_name' => NULL,
                'code' => 'RKG',
            ),
            12 => 
            array (
                'id' => 513,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Roskilde',
                'full_name' => NULL,
                'code' => 'RKE',
            ),
            13 => 
            array (
                'id' => 514,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Soenderjylland',
                'full_name' => NULL,
                'code' => 'VBI',
            ),
            14 => 
            array (
                'id' => 515,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Storstroem',
                'full_name' => NULL,
                'code' => 'ST',
            ),
            15 => 
            array (
                'id' => 516,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Viborg',
                'full_name' => NULL,
                'code' => 'VIB',
            ),
            16 => 
            array (
                'id' => 517,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Vejle',
                'full_name' => NULL,
                'code' => 'VEJ',
            ),
            17 => 
            array (
                'id' => 518,
                'country_id' => 147,
                'region_id' => NULL,
                'name' => 'Vestsjaelland',
                'full_name' => NULL,
                'code' => 'VS',
            ),
            18 => 
            array (
                'id' => 519,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Arnsberg',
                'full_name' => NULL,
                'code' => 'ARN',
            ),
            19 => 
            array (
                'id' => 520,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Erfurt',
                'full_name' => NULL,
                'code' => 'ERF',
            ),
            20 => 
            array (
                'id' => 521,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Ansbach',
                'full_name' => NULL,
                'code' => 'ANS',
            ),
            21 => 
            array (
                'id' => 522,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Augsburg',
                'full_name' => NULL,
                'code' => 'AGB',
            ),
            22 => 
            array (
                'id' => 523,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Berlin',
                'full_name' => NULL,
                'code' => 'BE',
            ),
            23 => 
            array (
                'id' => 524,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Bayreuth',
                'full_name' => NULL,
                'code' => 'BYU',
            ),
            24 => 
            array (
                'id' => 525,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Bielefeld',
                'full_name' => NULL,
                'code' => 'BFE',
            ),
            25 => 
            array (
                'id' => 526,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Potsdam',
                'full_name' => NULL,
                'code' => 'POT',
            ),
            26 => 
            array (
                'id' => 527,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Bochum',
                'full_name' => NULL,
                'code' => 'BOM',
            ),
            27 => 
            array (
                'id' => 528,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Bremen',
                'full_name' => NULL,
                'code' => 'HB',
            ),
            28 => 
            array (
                'id' => 529,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Brunswick',
                'full_name' => NULL,
                'code' => 'BRW',
            ),
            29 => 
            array (
                'id' => 530,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Darmstadt',
                'full_name' => NULL,
                'code' => 'DAR',
            ),
            30 => 
            array (
                'id' => 531,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Detmold',
                'full_name' => NULL,
                'code' => 'DET',
            ),
            31 => 
            array (
                'id' => 532,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Dresden',
                'full_name' => NULL,
                'code' => 'DRS',
            ),
            32 => 
            array (
                'id' => 533,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Dessau',
                'full_name' => NULL,
                'code' => 'DES',
            ),
            33 => 
            array (
                'id' => 534,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Dusseldorf',
                'full_name' => NULL,
                'code' => 'DUS',
            ),
            34 => 
            array (
                'id' => 535,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Frankfurt',
                'full_name' => NULL,
                'code' => 'FFO',
            ),
            35 => 
            array (
                'id' => 536,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Freiburg',
                'full_name' => NULL,
                'code' => 'FBG',
            ),
            36 => 
            array (
                'id' => 537,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Halle',
                'full_name' => NULL,
                'code' => 'HAE',
            ),
            37 => 
            array (
                'id' => 538,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Hamburg',
                'full_name' => NULL,
                'code' => 'HH',
            ),
            38 => 
            array (
                'id' => 539,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Hannover',
                'full_name' => NULL,
                'code' => 'HAJ',
            ),
            39 => 
            array (
                'id' => 540,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Kiel',
                'full_name' => NULL,
                'code' => 'KEL',
            ),
            40 => 
            array (
                'id' => 541,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'GieBen',
                'full_name' => NULL,
                'code' => 'GBN',
            ),
            41 => 
            array (
                'id' => 542,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Karlsruhe',
                'full_name' => NULL,
                'code' => 'KAE',
            ),
            42 => 
            array (
                'id' => 543,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Kassel',
                'full_name' => NULL,
                'code' => 'KAS',
            ),
            43 => 
            array (
                'id' => 544,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Chemnitz',
                'full_name' => NULL,
                'code' => 'CHE',
            ),
            44 => 
            array (
                'id' => 545,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Koblenz',
                'full_name' => NULL,
                'code' => 'KOB',
            ),
            45 => 
            array (
                'id' => 546,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Cologne',
                'full_name' => NULL,
                'code' => 'CGN',
            ),
            46 => 
            array (
                'id' => 547,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Leipzig',
                'full_name' => NULL,
                'code' => 'LEJ',
            ),
            47 => 
            array (
                'id' => 548,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Landshut',
                'full_name' => NULL,
                'code' => 'LDH',
            ),
            48 => 
            array (
                'id' => 549,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Luneburg',
                'full_name' => NULL,
                'code' => 'LBG',
            ),
            49 => 
            array (
                'id' => 550,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Magdeburg',
                'full_name' => NULL,
                'code' => 'MAG',
            ),
            50 => 
            array (
                'id' => 551,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Mannheim',
                'full_name' => NULL,
                'code' => 'MHG',
            ),
            51 => 
            array (
                'id' => 552,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Mainz',
                'full_name' => NULL,
                'code' => 'MAI',
            ),
            52 => 
            array (
                'id' => 553,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Muenster',
                'full_name' => NULL,
                'code' => 'MUN',
            ),
            53 => 
            array (
                'id' => 554,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Munich',
                'full_name' => NULL,
                'code' => 'MUC',
            ),
            54 => 
            array (
                'id' => 555,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Nuremberg',
                'full_name' => NULL,
                'code' => 'NUE',
            ),
            55 => 
            array (
                'id' => 556,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Schwerin',
                'full_name' => NULL,
                'code' => 'SWH',
            ),
            56 => 
            array (
                'id' => 557,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Stuttgart',
                'full_name' => NULL,
                'code' => 'STR',
            ),
            57 => 
            array (
                'id' => 558,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Trier',
                'full_name' => NULL,
                'code' => 'TRI',
            ),
            58 => 
            array (
                'id' => 559,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Wiesbaden',
                'full_name' => NULL,
                'code' => 'WIB',
            ),
            59 => 
            array (
                'id' => 560,
                'country_id' => 149,
                'region_id' => NULL,
                'name' => 'Wuerzburg',
                'full_name' => NULL,
                'code' => 'WUG',
            ),
            60 => 
            array (
                'id' => 561,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Aileu',
                'full_name' => NULL,
                'code' => 'AL',
            ),
            61 => 
            array (
                'id' => 562,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Ainaro',
                'full_name' => NULL,
                'code' => 'AN',
            ),
            62 => 
            array (
                'id' => 563,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Ermera',
                'full_name' => NULL,
                'code' => 'ER',
            ),
            63 => 
            array (
                'id' => 564,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Ambeno',
                'full_name' => NULL,
                'code' => 'AM',
            ),
            64 => 
            array (
                'id' => 565,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Baucau',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            65 => 
            array (
                'id' => 566,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Bobonaro',
                'full_name' => NULL,
                'code' => 'BO',
            ),
            66 => 
            array (
                'id' => 567,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Dili',
                'full_name' => NULL,
                'code' => 'DI',
            ),
            67 => 
            array (
                'id' => 568,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Kovalima',
                'full_name' => NULL,
                'code' => 'KO',
            ),
            68 => 
            array (
                'id' => 569,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Lautem',
                'full_name' => NULL,
                'code' => 'LA',
            ),
            69 => 
            array (
                'id' => 570,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Liquica',
                'full_name' => NULL,
                'code' => 'LI',
            ),
            70 => 
            array (
                'id' => 571,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Manatuto',
                'full_name' => NULL,
                'code' => 'MT',
            ),
            71 => 
            array (
                'id' => 572,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Manofahi',
                'full_name' => NULL,
                'code' => 'MF',
            ),
            72 => 
            array (
                'id' => 573,
                'country_id' => 88,
                'region_id' => NULL,
                'name' => 'Viqueque',
                'full_name' => NULL,
                'code' => 'VI',
            ),
            73 => 
            array (
                'id' => 574,
                'country_id' => 42,
                'region_id' => NULL,
                'name' => 'Maritime',
                'full_name' => NULL,
                'code' => 'M',
            ),
            74 => 
            array (
                'id' => 575,
                'country_id' => 42,
                'region_id' => NULL,
                'name' => 'Savanes',
                'full_name' => NULL,
                'code' => 'S',
            ),
            75 => 
            array (
                'id' => 576,
                'country_id' => 42,
                'region_id' => NULL,
                'name' => 'Plateaux',
                'full_name' => NULL,
                'code' => 'P',
            ),
            76 => 
            array (
                'id' => 577,
                'country_id' => 42,
                'region_id' => NULL,
                'name' => 'Kara',
                'full_name' => NULL,
                'code' => 'K',
            ),
            77 => 
            array (
                'id' => 578,
                'country_id' => 42,
                'region_id' => NULL,
                'name' => 'Centre',
                'full_name' => NULL,
                'code' => 'C',
            ),
            78 => 
            array (
                'id' => 579,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Abakan',
                'full_name' => NULL,
                'code' => 'ABA',
            ),
            79 => 
            array (
                'id' => 580,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Arkhangelsk',
                'full_name' => NULL,
                'code' => 'ARK',
            ),
            80 => 
            array (
                'id' => 581,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Aginskoye',
                'full_name' => NULL,
                'code' => 'AGI',
            ),
            81 => 
            array (
                'id' => 582,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Anadyr',
                'full_name' => NULL,
                'code' => 'DYR',
            ),
            82 => 
            array (
                'id' => 583,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Astrakhan',
                'full_name' => NULL,
                'code' => 'AST',
            ),
            83 => 
            array (
                'id' => 584,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Elista',
                'full_name' => NULL,
                'code' => 'ESL',
            ),
            84 => 
            array (
                'id' => 585,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Orel',
                'full_name' => NULL,
                'code' => 'ORL',
            ),
            85 => 
            array (
                'id' => 586,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Orenburg',
                'full_name' => NULL,
                'code' => 'ORE',
            ),
            86 => 
            array (
                'id' => 587,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Barnaul',
                'full_name' => NULL,
                'code' => 'BAX',
            ),
            87 => 
            array (
                'id' => 588,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Penza',
                'full_name' => NULL,
                'code' => 'PNZ',
            ),
            88 => 
            array (
                'id' => 589,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Petropavlovsk-Kamchatskiy',
                'full_name' => NULL,
                'code' => 'PKC',
            ),
            89 => 
            array (
                'id' => 590,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Petrozavodsk',
                'full_name' => NULL,
                'code' => 'PES',
            ),
            90 => 
            array (
                'id' => 591,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Perm',
                'full_name' => NULL,
                'code' => 'PER',
            ),
            91 => 
            array (
                'id' => 592,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Birobidzan',
                'full_name' => NULL,
                'code' => 'BBZ',
            ),
            92 => 
            array (
                'id' => 593,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Belgorod',
                'full_name' => NULL,
                'code' => 'BEL',
            ),
            93 => 
            array (
                'id' => 594,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Chabarovsk',
                'full_name' => NULL,
                'code' => 'COK',
            ),
            94 => 
            array (
                'id' => 595,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Blagoveshchensk',
                'full_name' => NULL,
                'code' => 'BQS',
            ),
            95 => 
            array (
                'id' => 596,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Bryansk',
                'full_name' => NULL,
                'code' => 'BRY',
            ),
            96 => 
            array (
                'id' => 597,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Chelyabinsk',
                'full_name' => NULL,
                'code' => 'CHE',
            ),
            97 => 
            array (
                'id' => 598,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Chita',
                'full_name' => NULL,
                'code' => 'CHI',
            ),
            98 => 
            array (
                'id' => 599,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Rostov-na-Donu',
                'full_name' => NULL,
                'code' => 'ROS',
            ),
            99 => 
            array (
                'id' => 600,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Omsk',
                'full_name' => NULL,
                'code' => 'OMS',
            ),
            100 => 
            array (
                'id' => 601,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Volgograd',
                'full_name' => NULL,
                'code' => 'VOG',
            ),
            101 => 
            array (
                'id' => 602,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Vladimir',
                'full_name' => NULL,
                'code' => 'VMR',
            ),
            102 => 
            array (
                'id' => 603,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Vladikavkaz',
                'full_name' => NULL,
                'code' => 'VLA',
            ),
            103 => 
            array (
                'id' => 604,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Gorno-Altajsk',
                'full_name' => NULL,
                'code' => 'GOA',
            ),
            104 => 
            array (
                'id' => 605,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Grozny',
                'full_name' => NULL,
                'code' => 'GRV',
            ),
            105 => 
            array (
                'id' => 606,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Vladivostok',
                'full_name' => NULL,
                'code' => 'VVO',
            ),
            106 => 
            array (
                'id' => 607,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Khanty-Mansiysk',
                'full_name' => NULL,
                'code' => 'KHM',
            ),
            107 => 
            array (
                'id' => 608,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Kirov',
                'full_name' => NULL,
                'code' => 'KIR',
            ),
            108 => 
            array (
                'id' => 609,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Kaliningrad',
                'full_name' => NULL,
                'code' => 'KGD',
            ),
            109 => 
            array (
                'id' => 610,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Kazan',
                'full_name' => NULL,
                'code' => 'KZN',
            ),
            110 => 
            array (
                'id' => 611,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Kaluga',
                'full_name' => NULL,
                'code' => 'KLF',
            ),
            111 => 
            array (
                'id' => 612,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Kostroma',
                'full_name' => NULL,
                'code' => 'KOS',
            ),
            112 => 
            array (
                'id' => 613,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Krasnodar',
                'full_name' => NULL,
                'code' => 'KRR',
            ),
            113 => 
            array (
                'id' => 614,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Krasnojarsk',
                'full_name' => NULL,
                'code' => 'KYA',
            ),
            114 => 
            array (
                'id' => 615,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Kemerovo',
                'full_name' => NULL,
                'code' => 'KEM',
            ),
            115 => 
            array (
                'id' => 616,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Kyzyl',
                'full_name' => NULL,
                'code' => 'KYZ',
            ),
            116 => 
            array (
                'id' => 617,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Kudymkar',
                'full_name' => NULL,
                'code' => 'KUD',
            ),
            117 => 
            array (
                'id' => 618,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Kurgan',
                'full_name' => NULL,
                'code' => 'KRO',
            ),
            118 => 
            array (
                'id' => 619,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Kursk',
                'full_name' => NULL,
                'code' => 'URS',
            ),
            119 => 
            array (
                'id' => 620,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Lipeck',
                'full_name' => NULL,
                'code' => 'LIP',
            ),
            120 => 
            array (
                'id' => 621,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Ryazan',
                'full_name' => NULL,
                'code' => 'RYA',
            ),
            121 => 
            array (
                'id' => 622,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Makhachkala',
                'full_name' => NULL,
                'code' => 'MCX',
            ),
            122 => 
            array (
                'id' => 623,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Magadan',
                'full_name' => NULL,
                'code' => 'MAG',
            ),
            123 => 
            array (
                'id' => 624,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Magas',
                'full_name' => NULL,
                'code' => 'IN',
            ),
            124 => 
            array (
                'id' => 625,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Maykop',
                'full_name' => NULL,
                'code' => 'MAY',
            ),
            125 => 
            array (
                'id' => 626,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Murmansk',
                'full_name' => NULL,
                'code' => 'MMK',
            ),
            126 => 
            array (
                'id' => 627,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Moscow',
                'full_name' => NULL,
                'code' => 'MOW',
            ),
            127 => 
            array (
                'id' => 628,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Nalchik',
                'full_name' => NULL,
                'code' => 'NAL',
            ),
            128 => 
            array (
                'id' => 629,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Naryan-Mar',
                'full_name' => NULL,
                'code' => 'NNM',
            ),
            129 => 
            array (
                'id' => 630,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Juzno-Sachalinsk',
                'full_name' => NULL,
                'code' => 'JSA',
            ),
            130 => 
            array (
                'id' => 631,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Velikij Novgorod',
                'full_name' => NULL,
                'code' => 'VUS',
            ),
            131 => 
            array (
                'id' => 632,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Palana',
                'full_name' => NULL,
                'code' => 'PAL',
            ),
            132 => 
            array (
                'id' => 633,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Pskov',
                'full_name' => NULL,
                'code' => 'PSK',
            ),
            133 => 
            array (
                'id' => 634,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Cheboksary',
                'full_name' => NULL,
                'code' => 'CSY',
            ),
            134 => 
            array (
                'id' => 635,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Cherkessk',
                'full_name' => NULL,
                'code' => 'CKS',
            ),
            135 => 
            array (
                'id' => 636,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Tyumen',
                'full_name' => NULL,
                'code' => 'TYU',
            ),
            136 => 
            array (
                'id' => 637,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Saratov',
                'full_name' => NULL,
                'code' => 'SAR',
            ),
            137 => 
            array (
                'id' => 638,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Saransk',
                'full_name' => NULL,
                'code' => 'SKX',
            ),
            138 => 
            array (
                'id' => 639,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Salekhard',
                'full_name' => NULL,
                'code' => 'SLY',
            ),
            139 => 
            array (
                'id' => 640,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Samara',
                'full_name' => NULL,
                'code' => 'SAM',
            ),
            140 => 
            array (
                'id' => 641,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Syktyvkar',
                'full_name' => NULL,
                'code' => 'SCW',
            ),
            141 => 
            array (
                'id' => 642,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'St. Peterburg',
                'full_name' => NULL,
                'code' => 'SPE',
            ),
            142 => 
            array (
                'id' => 643,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Smolensk',
                'full_name' => NULL,
                'code' => 'LNX',
            ),
            143 => 
            array (
                'id' => 644,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Stavropol',
                'full_name' => NULL,
                'code' => 'STA',
            ),
            144 => 
            array (
                'id' => 645,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Tambov',
                'full_name' => NULL,
                'code' => 'TAM',
            ),
            145 => 
            array (
                'id' => 646,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Tver',
                'full_name' => NULL,
                'code' => 'TVE',
            ),
            146 => 
            array (
                'id' => 647,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Tula',
                'full_name' => NULL,
                'code' => 'TUL',
            ),
            147 => 
            array (
                'id' => 648,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Tomsk',
                'full_name' => NULL,
                'code' => 'TOM',
            ),
            148 => 
            array (
                'id' => 649,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Voronezh',
                'full_name' => NULL,
                'code' => 'VOR',
            ),
            149 => 
            array (
                'id' => 650,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Vologda',
                'full_name' => NULL,
                'code' => 'VLG',
            ),
            150 => 
            array (
                'id' => 651,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Ufa',
                'full_name' => NULL,
                'code' => 'UFA',
            ),
            151 => 
            array (
                'id' => 652,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Ulan-Ude',
                'full_name' => NULL,
                'code' => 'UUD',
            ),
            152 => 
            array (
                'id' => 653,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Uljanovsk',
                'full_name' => NULL,
                'code' => 'ULY',
            ),
            153 => 
            array (
                'id' => 654,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Ust-Ordynsky',
                'full_name' => NULL,
                'code' => 'UOB',
            ),
            154 => 
            array (
                'id' => 655,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Niznij Novgorod',
                'full_name' => NULL,
                'code' => 'GOJ',
            ),
            155 => 
            array (
                'id' => 656,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Novosibirsk',
                'full_name' => NULL,
                'code' => 'NVS',
            ),
            156 => 
            array (
                'id' => 657,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Jakutsk',
                'full_name' => NULL,
                'code' => 'JAK',
            ),
            157 => 
            array (
                'id' => 658,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Jaroslavl',
                'full_name' => NULL,
                'code' => 'JAR',
            ),
            158 => 
            array (
                'id' => 659,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Jekaterinburg',
                'full_name' => NULL,
                'code' => 'JEK',
            ),
            159 => 
            array (
                'id' => 660,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Irkutsk',
                'full_name' => NULL,
                'code' => 'IKT',
            ),
            160 => 
            array (
                'id' => 661,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Izhevsk',
                'full_name' => NULL,
                'code' => 'IJK',
            ),
            161 => 
            array (
                'id' => 662,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Ivanovo',
                'full_name' => NULL,
                'code' => 'IVO',
            ),
            162 => 
            array (
                'id' => 663,
                'country_id' => 118,
                'region_id' => NULL,
                'name' => 'Yoshkar-Ola',
                'full_name' => NULL,
                'code' => 'YOL',
            ),
            163 => 
            array (
                'id' => 664,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Azuay',
                'full_name' => NULL,
                'code' => 'A',
            ),
            164 => 
            array (
                'id' => 665,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'El Oro',
                'full_name' => NULL,
                'code' => 'O',
            ),
            165 => 
            array (
                'id' => 666,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Esmeraldas',
                'full_name' => NULL,
                'code' => 'E',
            ),
            166 => 
            array (
                'id' => 667,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Bolivar',
                'full_name' => NULL,
                'code' => 'B',
            ),
            167 => 
            array (
                'id' => 668,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Guayas',
                'full_name' => NULL,
                'code' => 'G',
            ),
            168 => 
            array (
                'id' => 669,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Galapagos',
                'full_name' => NULL,
                'code' => 'W',
            ),
            169 => 
            array (
                'id' => 670,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Carchi',
                'full_name' => NULL,
                'code' => 'C',
            ),
            170 => 
            array (
                'id' => 671,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Canar',
                'full_name' => NULL,
                'code' => 'F',
            ),
            171 => 
            array (
                'id' => 672,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Cotopaxi',
                'full_name' => NULL,
                'code' => 'X',
            ),
            172 => 
            array (
                'id' => 673,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Loja',
                'full_name' => NULL,
                'code' => 'L',
            ),
            173 => 
            array (
                'id' => 674,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Los Rios',
                'full_name' => NULL,
                'code' => 'R',
            ),
            174 => 
            array (
                'id' => 675,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Manabi',
                'full_name' => NULL,
                'code' => 'M',
            ),
            175 => 
            array (
                'id' => 676,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Morona-Santiago',
                'full_name' => NULL,
                'code' => 'S',
            ),
            176 => 
            array (
                'id' => 677,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Napo, Orellana',
                'full_name' => NULL,
                'code' => 'D',
            ),
            177 => 
            array (
                'id' => 678,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Pastaza',
                'full_name' => NULL,
                'code' => 'Y',
            ),
            178 => 
            array (
                'id' => 679,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Pichincha',
                'full_name' => NULL,
                'code' => 'P',
            ),
            179 => 
            array (
                'id' => 680,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Chimborazo',
                'full_name' => NULL,
                'code' => 'H',
            ),
            180 => 
            array (
                'id' => 681,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Zamora-Chinchipe',
                'full_name' => NULL,
                'code' => 'Z',
            ),
            181 => 
            array (
                'id' => 682,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Sucumbios',
                'full_name' => NULL,
                'code' => 'U',
            ),
            182 => 
            array (
                'id' => 683,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Tungurahua',
                'full_name' => NULL,
                'code' => 'T',
            ),
            183 => 
            array (
                'id' => 684,
                'country_id' => 194,
                'region_id' => NULL,
                'name' => 'Imbabura',
                'full_name' => NULL,
                'code' => 'I',
            ),
            184 => 
            array (
                'id' => 685,
                'country_id' => 10,
                'region_id' => NULL,
                'name' => 'Anseba',
                'full_name' => NULL,
                'code' => 'KE',
            ),
            185 => 
            array (
                'id' => 686,
                'country_id' => 10,
                'region_id' => NULL,
                'name' => 'Semenawi Keyih Bahri',
                'full_name' => NULL,
                'code' => 'SK',
            ),
            186 => 
            array (
                'id' => 687,
                'country_id' => 10,
                'region_id' => NULL,
                'name' => 'Gash Barka',
                'full_name' => NULL,
                'code' => 'BR',
            ),
            187 => 
            array (
                'id' => 688,
                'country_id' => 10,
                'region_id' => NULL,
                'name' => 'Debub',
                'full_name' => NULL,
                'code' => 'DE',
            ),
            188 => 
            array (
                'id' => 689,
                'country_id' => 10,
                'region_id' => NULL,
                'name' => 'Debubawi Keyih Bahri',
                'full_name' => NULL,
                'code' => 'DK',
            ),
            189 => 
            array (
                'id' => 690,
                'country_id' => 10,
                'region_id' => NULL,
                'name' => 'Maekel',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            190 => 
            array (
                'id' => 691,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Arles',
                'full_name' => NULL,
                'code' => 'ARL',
            ),
            191 => 
            array (
                'id' => 692,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Ajaccio',
                'full_name' => NULL,
                'code' => 'AJA',
            ),
            192 => 
            array (
                'id' => 693,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Aix-en-Provence',
                'full_name' => NULL,
                'code' => 'QXB',
            ),
            193 => 
            array (
                'id' => 694,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Orleans',
                'full_name' => NULL,
                'code' => 'ORR',
            ),
            194 => 
            array (
                'id' => 695,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Paris',
                'full_name' => NULL,
                'code' => 'PAR',
            ),
            195 => 
            array (
                'id' => 696,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Besancon',
                'full_name' => NULL,
                'code' => 'BSN',
            ),
            196 => 
            array (
                'id' => 697,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Dijon',
                'full_name' => NULL,
                'code' => 'DIJ',
            ),
            197 => 
            array (
                'id' => 698,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Frejus',
                'full_name' => NULL,
                'code' => 'FRJ',
            ),
            198 => 
            array (
                'id' => 699,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Caen',
                'full_name' => NULL,
                'code' => 'CFR',
            ),
            199 => 
            array (
                'id' => 700,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Rennes',
                'full_name' => NULL,
                'code' => 'RNS',
            ),
            200 => 
            array (
                'id' => 701,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Lyon',
                'full_name' => NULL,
                'code' => 'LIO',
            ),
            201 => 
            array (
                'id' => 702,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Lille',
                'full_name' => NULL,
                'code' => 'LLE',
            ),
            202 => 
            array (
                'id' => 703,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Limoges',
                'full_name' => NULL,
                'code' => 'LIG',
            ),
            203 => 
            array (
                'id' => 704,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Rouen',
                'full_name' => NULL,
                'code' => 'URO',
            ),
            204 => 
            array (
                'id' => 705,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Marseille',
                'full_name' => NULL,
                'code' => 'MRS',
            ),
            205 => 
            array (
                'id' => 706,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Metz',
                'full_name' => NULL,
                'code' => 'MZM',
            ),
            206 => 
            array (
                'id' => 707,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Montpellier',
                'full_name' => NULL,
                'code' => 'MPL',
            ),
            207 => 
            array (
                'id' => 708,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Nantes',
                'full_name' => NULL,
                'code' => 'NTE',
            ),
            208 => 
            array (
                'id' => 709,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Nice',
                'full_name' => NULL,
                'code' => 'NCE',
            ),
            209 => 
            array (
                'id' => 710,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Chalons-en-Champagne',
                'full_name' => NULL,
                'code' => 'CSM',
            ),
            210 => 
            array (
                'id' => 711,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Toulouse',
                'full_name' => NULL,
                'code' => 'TLS',
            ),
            211 => 
            array (
                'id' => 712,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Valence',
                'full_name' => NULL,
                'code' => 'VAA',
            ),
            212 => 
            array (
                'id' => 713,
                'country_id' => 150,
                'region_id' => NULL,
                'name' => 'Amiens',
                'full_name' => NULL,
                'code' => 'AMI',
            ),
            213 => 
            array (
                'id' => 714,
                'country_id' => 99,
                'region_id' => NULL,
                'name' => 'Davao',
                'full_name' => NULL,
                'code' => 'DOR',
            ),
            214 => 
            array (
                'id' => 715,
                'country_id' => 99,
                'region_id' => NULL,
                'name' => 'Caloocan',
                'full_name' => NULL,
                'code' => 'CAO',
            ),
            215 => 
            array (
                'id' => 716,
                'country_id' => 99,
                'region_id' => NULL,
                'name' => 'Manila',
                'full_name' => NULL,
                'code' => 'MNL',
            ),
            216 => 
            array (
                'id' => 717,
                'country_id' => 99,
                'region_id' => NULL,
                'name' => 'Cebu',
                'full_name' => NULL,
                'code' => 'CEB',
            ),
            217 => 
            array (
                'id' => 718,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Espoo',
                'full_name' => NULL,
                'code' => 'ESP',
            ),
            218 => 
            array (
                'id' => 719,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Oulu',
                'full_name' => NULL,
                'code' => 'OLU',
            ),
            219 => 
            array (
                'id' => 720,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Pori',
                'full_name' => NULL,
                'code' => 'POR',
            ),
            220 => 
            array (
                'id' => 721,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Porvoo',
                'full_name' => NULL,
                'code' => 'PRV',
            ),
            221 => 
            array (
                'id' => 722,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Hameenlinna',
                'full_name' => NULL,
                'code' => 'HMY',
            ),
            222 => 
            array (
                'id' => 723,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Helsinki',
                'full_name' => NULL,
                'code' => 'HEL',
            ),
            223 => 
            array (
                'id' => 724,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Kajaani',
                'full_name' => NULL,
                'code' => 'KAJ',
            ),
            224 => 
            array (
                'id' => 725,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Kokkola',
                'full_name' => NULL,
                'code' => 'KOK',
            ),
            225 => 
            array (
                'id' => 726,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Kotka',
                'full_name' => NULL,
                'code' => 'KTK',
            ),
            226 => 
            array (
                'id' => 727,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Kuopio',
                'full_name' => NULL,
                'code' => 'KUO',
            ),
            227 => 
            array (
                'id' => 728,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Lahti',
                'full_name' => NULL,
                'code' => 'LHI',
            ),
            228 => 
            array (
                'id' => 729,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Lappeenranta',
                'full_name' => NULL,
                'code' => 'LPP',
            ),
            229 => 
            array (
                'id' => 730,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Rovaniemi',
                'full_name' => NULL,
                'code' => 'RVN',
            ),
            230 => 
            array (
                'id' => 731,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Mariehamn',
                'full_name' => NULL,
                'code' => 'MHQ',
            ),
            231 => 
            array (
                'id' => 732,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Mikkeli',
                'full_name' => NULL,
                'code' => 'MIK',
            ),
            232 => 
            array (
                'id' => 733,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Tampere',
                'full_name' => NULL,
                'code' => 'TMP',
            ),
            233 => 
            array (
                'id' => 734,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Turku',
                'full_name' => NULL,
                'code' => 'TKU',
            ),
            234 => 
            array (
                'id' => 735,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Vaasa',
                'full_name' => NULL,
                'code' => 'VAA',
            ),
            235 => 
            array (
                'id' => 736,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Vantaa',
                'full_name' => NULL,
                'code' => 'VAT',
            ),
            236 => 
            array (
                'id' => 737,
                'country_id' => 162,
                'region_id' => NULL,
                'name' => 'Joensuu',
                'full_name' => NULL,
                'code' => 'JOE',
            ),
            237 => 
            array (
                'id' => 738,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Paul',
                'full_name' => NULL,
                'code' => 'PA',
            ),
            238 => 
            array (
                'id' => 739,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Porto Novo',
                'full_name' => NULL,
                'code' => 'PN',
            ),
            239 => 
            array (
                'id' => 740,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Boa Vista',
                'full_name' => NULL,
                'code' => 'BV',
            ),
            240 => 
            array (
                'id' => 741,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Brava',
                'full_name' => NULL,
                'code' => 'BR',
            ),
            241 => 
            array (
                'id' => 742,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Ribeira Grande',
                'full_name' => NULL,
                'code' => 'RG',
            ),
            242 => 
            array (
                'id' => 743,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Fogo',
                'full_name' => NULL,
                'code' => 'FO',
            ),
            243 => 
            array (
                'id' => 744,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Maio',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            244 => 
            array (
                'id' => 745,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Mosteiros',
                'full_name' => NULL,
                'code' => 'MO',
            ),
            245 => 
            array (
                'id' => 746,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Praia',
                'full_name' => NULL,
                'code' => 'PR',
            ),
            246 => 
            array (
                'id' => 747,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Sal',
                'full_name' => NULL,
                'code' => 'SL',
            ),
            247 => 
            array (
                'id' => 748,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Santo Antao',
                'full_name' => NULL,
                'code' => 'SA',
            ),
            248 => 
            array (
                'id' => 749,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Santiago',
                'full_name' => NULL,
                'code' => 'IA',
            ),
            249 => 
            array (
                'id' => 750,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Sao Domingos',
                'full_name' => NULL,
                'code' => 'SD',
            ),
            250 => 
            array (
                'id' => 751,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Sao Filipe',
                'full_name' => NULL,
                'code' => 'SF',
            ),
            251 => 
            array (
                'id' => 752,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Santa Catarina',
                'full_name' => NULL,
                'code' => 'CA',
            ),
            252 => 
            array (
                'id' => 753,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Santa Cruz',
                'full_name' => NULL,
                'code' => 'CR',
            ),
            253 => 
            array (
                'id' => 754,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Sao Miguel',
                'full_name' => NULL,
                'code' => 'SM',
            ),
            254 => 
            array (
                'id' => 755,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Sao Nicolau',
                'full_name' => NULL,
                'code' => 'SN',
            ),
            255 => 
            array (
                'id' => 756,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Sao Vicente',
                'full_name' => NULL,
                'code' => 'SV',
            ),
            256 => 
            array (
                'id' => 757,
                'country_id' => 49,
                'region_id' => NULL,
                'name' => 'Tarrafal',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            257 => 
            array (
                'id' => 758,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Arauca',
                'full_name' => NULL,
                'code' => 'ARA',
            ),
            258 => 
            array (
                'id' => 759,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Antioquia',
                'full_name' => NULL,
                'code' => 'ANT',
            ),
            259 => 
            array (
                'id' => 760,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Norte de Santander',
                'full_name' => NULL,
                'code' => 'NDS',
            ),
            260 => 
            array (
                'id' => 761,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Bogota',
                'full_name' => NULL,
                'code' => 'BDC',
            ),
            261 => 
            array (
                'id' => 762,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Bolivar',
                'full_name' => NULL,
                'code' => 'BOL',
            ),
            262 => 
            array (
                'id' => 763,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Boyaca',
                'full_name' => NULL,
                'code' => 'BOY',
            ),
            263 => 
            array (
                'id' => 764,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Atlantico',
                'full_name' => NULL,
                'code' => 'ATL',
            ),
            264 => 
            array (
                'id' => 765,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Guaviare',
                'full_name' => NULL,
                'code' => 'GVR',
            ),
            265 => 
            array (
                'id' => 766,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'La Guajira',
                'full_name' => NULL,
                'code' => 'GJR',
            ),
            266 => 
            array (
                'id' => 767,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Guainia',
                'full_name' => NULL,
                'code' => 'GNA',
            ),
            267 => 
            array (
                'id' => 768,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Quindio',
                'full_name' => NULL,
                'code' => 'QUI',
            ),
            268 => 
            array (
                'id' => 769,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Caldas',
                'full_name' => NULL,
                'code' => 'CAL',
            ),
            269 => 
            array (
                'id' => 770,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Caqueta',
                'full_name' => NULL,
                'code' => 'CAQ',
            ),
            270 => 
            array (
                'id' => 771,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Casanare',
                'full_name' => NULL,
                'code' => 'CAS',
            ),
            271 => 
            array (
                'id' => 772,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Cauca',
                'full_name' => NULL,
                'code' => 'CAU',
            ),
            272 => 
            array (
                'id' => 773,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Valle del Cauca',
                'full_name' => NULL,
                'code' => 'VDC',
            ),
            273 => 
            array (
                'id' => 774,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Cordoba',
                'full_name' => NULL,
                'code' => 'COR',
            ),
            274 => 
            array (
                'id' => 775,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Cundinamarca',
                'full_name' => NULL,
                'code' => 'CAM',
            ),
            275 => 
            array (
                'id' => 776,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Risaralda',
                'full_name' => NULL,
                'code' => 'RIS',
            ),
            276 => 
            array (
                'id' => 777,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Magdalena',
                'full_name' => NULL,
                'code' => 'MAG',
            ),
            277 => 
            array (
                'id' => 778,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Meta',
                'full_name' => NULL,
                'code' => 'MET',
            ),
            278 => 
            array (
                'id' => 779,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Narino',
                'full_name' => NULL,
                'code' => 'NAR',
            ),
            279 => 
            array (
                'id' => 780,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Putumayo',
                'full_name' => NULL,
                'code' => 'PUT',
            ),
            280 => 
            array (
                'id' => 781,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Choco',
                'full_name' => NULL,
                'code' => 'CHO',
            ),
            281 => 
            array (
                'id' => 782,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Cesar',
                'full_name' => NULL,
                'code' => 'CES',
            ),
            282 => 
            array (
                'id' => 783,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Santander',
                'full_name' => NULL,
                'code' => 'SAN',
            ),
            283 => 
            array (
                'id' => 784,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'San Andres y Providencia',
                'full_name' => NULL,
                'code' => 'SAP',
            ),
            284 => 
            array (
                'id' => 785,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Sucre',
                'full_name' => NULL,
                'code' => 'SUC',
            ),
            285 => 
            array (
                'id' => 786,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Tolima',
                'full_name' => NULL,
                'code' => 'TOL',
            ),
            286 => 
            array (
                'id' => 787,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Vichada',
                'full_name' => NULL,
                'code' => 'VIC',
            ),
            287 => 
            array (
                'id' => 788,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Vaupes',
                'full_name' => NULL,
                'code' => 'VAU',
            ),
            288 => 
            array (
                'id' => 789,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Huila',
                'full_name' => NULL,
                'code' => 'HUI',
            ),
            289 => 
            array (
                'id' => 790,
                'country_id' => 187,
                'region_id' => NULL,
                'name' => 'Amazonas',
                'full_name' => NULL,
                'code' => 'AMZ',
            ),
            290 => 
            array (
                'id' => 791,
                'country_id' => 103,
                'region_id' => NULL,
                'name' => 'Alajuela',
                'full_name' => NULL,
                'code' => 'A',
            ),
            291 => 
            array (
                'id' => 792,
                'country_id' => 103,
                'region_id' => NULL,
                'name' => 'Heredia',
                'full_name' => NULL,
                'code' => 'H',
            ),
            292 => 
            array (
                'id' => 793,
                'country_id' => 103,
                'region_id' => NULL,
                'name' => 'Guanacaste',
                'full_name' => NULL,
                'code' => 'G',
            ),
            293 => 
            array (
                'id' => 794,
                'country_id' => 103,
                'region_id' => NULL,
                'name' => 'Cartago',
                'full_name' => NULL,
                'code' => 'C',
            ),
            294 => 
            array (
                'id' => 795,
                'country_id' => 103,
                'region_id' => NULL,
                'name' => 'Limon',
                'full_name' => NULL,
                'code' => 'L',
            ),
            295 => 
            array (
                'id' => 796,
                'country_id' => 103,
                'region_id' => NULL,
                'name' => 'Puntarenas',
                'full_name' => NULL,
                'code' => 'P',
            ),
            296 => 
            array (
                'id' => 797,
                'country_id' => 103,
                'region_id' => NULL,
                'name' => 'San Jose',
                'full_name' => NULL,
                'code' => 'SJ',
            ),
            297 => 
            array (
                'id' => 798,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Holguin',
                'full_name' => NULL,
                'code' => '11',
            ),
            298 => 
            array (
                'id' => 799,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Pinar del Rio',
                'full_name' => NULL,
                'code' => '1',
            ),
            299 => 
            array (
                'id' => 800,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Villa Clara',
                'full_name' => NULL,
                'code' => '5',
            ),
            300 => 
            array (
                'id' => 801,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Granma',
                'full_name' => NULL,
                'code' => '12',
            ),
            301 => 
            array (
                'id' => 802,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Guantanamo',
                'full_name' => NULL,
                'code' => '14',
            ),
            302 => 
            array (
                'id' => 803,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'La Habana',
                'full_name' => NULL,
                'code' => '2',
            ),
            303 => 
            array (
                'id' => 804,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Ciudad de la Habana',
                'full_name' => NULL,
                'code' => '3',
            ),
            304 => 
            array (
                'id' => 805,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Camaguey',
                'full_name' => NULL,
                'code' => '9',
            ),
            305 => 
            array (
                'id' => 806,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Las Tunas',
                'full_name' => NULL,
                'code' => '10',
            ),
            306 => 
            array (
                'id' => 807,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Matanzas',
                'full_name' => NULL,
                'code' => '4',
            ),
            307 => 
            array (
                'id' => 808,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Mayari',
                'full_name' => NULL,
                'code' => 'MAY',
            ),
            308 => 
            array (
                'id' => 809,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Manzanillo',
                'full_name' => NULL,
                'code' => 'MZO',
            ),
            309 => 
            array (
                'id' => 810,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Isla de la Juventud',
                'full_name' => NULL,
                'code' => '99',
            ),
            310 => 
            array (
                'id' => 811,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Santiago de Cuba',
                'full_name' => NULL,
                'code' => '13',
            ),
            311 => 
            array (
                'id' => 812,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Sancti Spiritus',
                'full_name' => NULL,
                'code' => '7',
            ),
            312 => 
            array (
                'id' => 813,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Cienfuegos',
                'full_name' => NULL,
                'code' => '6',
            ),
            313 => 
            array (
                'id' => 814,
                'country_id' => 104,
                'region_id' => NULL,
                'name' => 'Ciego de Avila',
                'full_name' => NULL,
                'code' => '8',
            ),
            314 => 
            array (
                'id' => 815,
                'country_id' => 188,
                'region_id' => NULL,
                'name' => 'Essequibo Islands-West Demerara',
                'full_name' => NULL,
                'code' => 'EW',
            ),
            315 => 
            array (
                'id' => 816,
                'country_id' => 188,
                'region_id' => NULL,
                'name' => 'Barima-Waini',
                'full_name' => NULL,
                'code' => 'BW',
            ),
            316 => 
            array (
                'id' => 817,
                'country_id' => 188,
                'region_id' => NULL,
                'name' => 'Pomeroon-Supenaam',
                'full_name' => NULL,
                'code' => 'PM',
            ),
            317 => 
            array (
                'id' => 818,
                'country_id' => 188,
                'region_id' => NULL,
                'name' => 'Potaro-Siparuni',
                'full_name' => NULL,
                'code' => 'PI',
            ),
            318 => 
            array (
                'id' => 819,
                'country_id' => 188,
                'region_id' => NULL,
                'name' => 'Demerara-Mahaica',
                'full_name' => NULL,
                'code' => 'DM',
            ),
            319 => 
            array (
                'id' => 820,
                'country_id' => 188,
                'region_id' => NULL,
                'name' => 'East Berbice-Corentyne',
                'full_name' => NULL,
                'code' => 'EC',
            ),
            320 => 
            array (
                'id' => 821,
                'country_id' => 188,
                'region_id' => NULL,
                'name' => 'Cuyuni-Mazaruni',
                'full_name' => NULL,
                'code' => 'CM',
            ),
            321 => 
            array (
                'id' => 822,
                'country_id' => 188,
                'region_id' => NULL,
                'name' => 'Mahaica-Berbice',
                'full_name' => NULL,
                'code' => 'MB',
            ),
            322 => 
            array (
                'id' => 823,
                'country_id' => 188,
                'region_id' => NULL,
                'name' => 'Upper Demerara-Berbice',
                'full_name' => NULL,
                'code' => 'UD',
            ),
            323 => 
            array (
                'id' => 824,
                'country_id' => 188,
                'region_id' => NULL,
                'name' => 'Upper Takutu-Upper Essequibo',
                'full_name' => NULL,
                'code' => 'UT',
            ),
            324 => 
            array (
                'id' => 825,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Arkalyk',
                'full_name' => NULL,
                'code' => 'AYK',
            ),
            325 => 
            array (
                'id' => 826,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Aqmola',
                'full_name' => NULL,
                'code' => 'AKM',
            ),
            326 => 
            array (
                'id' => 827,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Aksu',
                'full_name' => NULL,
                'code' => 'AKS',
            ),
            327 => 
            array (
                'id' => 828,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Aqtobe',
                'full_name' => NULL,
                'code' => 'AKT',
            ),
            328 => 
            array (
                'id' => 829,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Almaty',
                'full_name' => NULL,
                'code' => 'ALA',
            ),
            329 => 
            array (
                'id' => 830,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Arys',
                'full_name' => NULL,
                'code' => 'ARY',
            ),
            330 => 
            array (
                'id' => 831,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Astana',
                'full_name' => NULL,
                'code' => 'AST',
            ),
            331 => 
            array (
                'id' => 832,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Atyrau',
                'full_name' => NULL,
                'code' => 'ATY',
            ),
            332 => 
            array (
                'id' => 833,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Ekibastuz',
                'full_name' => NULL,
                'code' => 'EKB',
            ),
            333 => 
            array (
                'id' => 834,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Balkhash',
                'full_name' => NULL,
                'code' => 'BXH',
            ),
            334 => 
            array (
                'id' => 835,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Pavlodar',
                'full_name' => NULL,
                'code' => 'PAV',
            ),
            335 => 
            array (
                'id' => 836,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Soltustik Qazaqstan',
                'full_name' => NULL,
                'code' => 'SEV',
            ),
            336 => 
            array (
                'id' => 837,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Shyghys Qazaqstan',
                'full_name' => NULL,
                'code' => 'VOS',
            ),
            337 => 
            array (
                'id' => 838,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Zyryanovsk',
                'full_name' => NULL,
                'code' => 'ZYR',
            ),
            338 => 
            array (
                'id' => 839,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Zhambyl',
                'full_name' => NULL,
                'code' => 'DMB',
            ),
            339 => 
            array (
                'id' => 840,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Zhezkazgan',
                'full_name' => NULL,
                'code' => 'DZH',
            ),
            340 => 
            array (
                'id' => 841,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Qaraghandy',
                'full_name' => NULL,
                'code' => 'KAR',
            ),
            341 => 
            array (
                'id' => 842,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Karazhal',
                'full_name' => NULL,
                'code' => 'KZO',
            ),
            342 => 
            array (
                'id' => 843,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Kapchagay',
                'full_name' => NULL,
                'code' => 'KAP',
            ),
            343 => 
            array (
                'id' => 844,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Qostanay',
                'full_name' => NULL,
                'code' => 'KST',
            ),
            344 => 
            array (
                'id' => 845,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Qyzylorda',
                'full_name' => NULL,
                'code' => 'KZY',
            ),
            345 => 
            array (
                'id' => 846,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Kentau',
                'full_name' => NULL,
                'code' => 'KEN',
            ),
            346 => 
            array (
                'id' => 847,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Kurchatov',
                'full_name' => NULL,
                'code' => 'KUR',
            ),
            347 => 
            array (
                'id' => 848,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Lisakovsk',
                'full_name' => NULL,
                'code' => 'LKK',
            ),
            348 => 
            array (
                'id' => 849,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Leninogorsk',
                'full_name' => NULL,
                'code' => 'LEN',
            ),
            349 => 
            array (
                'id' => 850,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Rudny',
                'full_name' => NULL,
                'code' => 'RUD',
            ),
            350 => 
            array (
                'id' => 851,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Mangghystau',
                'full_name' => NULL,
                'code' => 'MAN',
            ),
            351 => 
            array (
                'id' => 852,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Ongtustik Qazaqstan',
                'full_name' => NULL,
                'code' => 'KGT',
            ),
            352 => 
            array (
                'id' => 853,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Saran',
                'full_name' => NULL,
                'code' => 'SAR',
            ),
            353 => 
            array (
                'id' => 854,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Semey',
                'full_name' => NULL,
                'code' => 'SEM',
            ),
            354 => 
            array (
                'id' => 855,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Shakhtinsk',
                'full_name' => NULL,
                'code' => 'SAK',
            ),
            355 => 
            array (
                'id' => 856,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Stepnogorsk',
                'full_name' => NULL,
                'code' => 'STE',
            ),
            356 => 
            array (
                'id' => 857,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Tekeli',
                'full_name' => NULL,
                'code' => 'TEK',
            ),
            357 => 
            array (
                'id' => 858,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Temirtau',
                'full_name' => NULL,
                'code' => 'TEM',
            ),
            358 => 
            array (
                'id' => 859,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Turkestan',
                'full_name' => NULL,
                'code' => 'TUR',
            ),
            359 => 
            array (
                'id' => 860,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Batys Qazaqstan',
                'full_name' => NULL,
                'code' => 'ZAP',
            ),
            360 => 
            array (
                'id' => 861,
                'country_id' => 98,
                'region_id' => NULL,
                'name' => 'Zhanaozen',
                'full_name' => NULL,
                'code' => 'ZHA',
            ),
            361 => 
            array (
                'id' => 862,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Almere',
                'full_name' => NULL,
                'code' => 'AER',
            ),
            362 => 
            array (
                'id' => 863,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Amersfoort',
                'full_name' => NULL,
                'code' => 'AME',
            ),
            363 => 
            array (
                'id' => 864,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Amsterdam',
                'full_name' => NULL,
                'code' => 'AMS',
            ),
            364 => 
            array (
                'id' => 865,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Arnhem',
                'full_name' => NULL,
                'code' => 'ARN',
            ),
            365 => 
            array (
                'id' => 866,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Apeldoorn',
                'full_name' => NULL,
                'code' => 'APE',
            ),
            366 => 
            array (
                'id' => 867,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Assen',
                'full_name' => NULL,
                'code' => 'ASS',
            ),
            367 => 
            array (
                'id' => 868,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Ede',
                'full_name' => NULL,
                'code' => 'EDE',
            ),
            368 => 
            array (
                'id' => 869,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Emmen',
                'full_name' => NULL,
                'code' => 'EMM',
            ),
            369 => 
            array (
                'id' => 870,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Eindhoven',
                'full_name' => NULL,
                'code' => 'EIN',
            ),
            370 => 
            array (
                'id' => 871,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Breda',
                'full_name' => NULL,
                'code' => 'BRD',
            ),
            371 => 
            array (
                'id' => 872,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Tilburg',
                'full_name' => NULL,
                'code' => 'TLB',
            ),
            372 => 
            array (
                'id' => 873,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Dordrecht',
                'full_name' => NULL,
                'code' => 'DOR',
            ),
            373 => 
            array (
                'id' => 874,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Enschede',
                'full_name' => NULL,
                'code' => 'ENS',
            ),
            374 => 
            array (
                'id' => 875,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Groningen',
                'full_name' => NULL,
                'code' => 'GRQ',
            ),
            375 => 
            array (
                'id' => 876,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Haarlem',
                'full_name' => NULL,
                'code' => 'HRA',
            ),
            376 => 
            array (
                'id' => 877,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Hague',
                'full_name' => NULL,
                'code' => 'HAG',
            ),
            377 => 
            array (
                'id' => 878,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Hoofddorp',
                'full_name' => NULL,
                'code' => 'HFD',
            ),
            378 => 
            array (
                'id' => 879,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Leiden',
                'full_name' => NULL,
                'code' => 'LID',
            ),
            379 => 
            array (
                'id' => 880,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Lelystad',
                'full_name' => NULL,
                'code' => 'LEY',
            ),
            380 => 
            array (
                'id' => 881,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Rotterdam',
                'full_name' => NULL,
                'code' => 'RTM',
            ),
            381 => 
            array (
                'id' => 882,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Leeuwarden',
                'full_name' => NULL,
                'code' => 'LWR',
            ),
            382 => 
            array (
                'id' => 883,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Maastricht',
                'full_name' => NULL,
                'code' => 'MST',
            ),
            383 => 
            array (
                'id' => 884,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Middelburg',
                'full_name' => NULL,
                'code' => 'MDL',
            ),
            384 => 
            array (
                'id' => 885,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Nijmegen',
                'full_name' => NULL,
                'code' => 'NIJ',
            ),
            385 => 
            array (
                'id' => 886,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => '\'s-Hertogenbosch',
                'full_name' => NULL,
                'code' => 'HTB',
            ),
            386 => 
            array (
                'id' => 887,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Utrecht',
                'full_name' => NULL,
                'code' => 'UTC',
            ),
            387 => 
            array (
                'id' => 888,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Zwolle',
                'full_name' => NULL,
                'code' => 'ZWO',
            ),
            388 => 
            array (
                'id' => 889,
                'country_id' => 141,
                'region_id' => NULL,
                'name' => 'Zoetermeer',
                'full_name' => NULL,
                'code' => 'ZTM',
            ),
            389 => 
            array (
                'id' => 890,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Atlantida',
                'full_name' => NULL,
                'code' => 'AT',
            ),
            390 => 
            array (
                'id' => 891,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'El Paraiso',
                'full_name' => NULL,
                'code' => 'PA',
            ),
            391 => 
            array (
                'id' => 892,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Ocotepeque',
                'full_name' => NULL,
                'code' => 'OC',
            ),
            392 => 
            array (
                'id' => 893,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Olancho',
                'full_name' => NULL,
                'code' => 'OL',
            ),
            393 => 
            array (
                'id' => 894,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Francisco Morazan',
                'full_name' => NULL,
                'code' => 'FM',
            ),
            394 => 
            array (
                'id' => 895,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Gracias a Dios',
                'full_name' => NULL,
                'code' => 'GD',
            ),
            395 => 
            array (
                'id' => 896,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Islas de la Bahia',
                'full_name' => NULL,
                'code' => 'IB',
            ),
            396 => 
            array (
                'id' => 897,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Cortes',
                'full_name' => NULL,
                'code' => 'CR',
            ),
            397 => 
            array (
                'id' => 898,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Colon',
                'full_name' => NULL,
                'code' => 'CL',
            ),
            398 => 
            array (
                'id' => 899,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Comayagua',
                'full_name' => NULL,
                'code' => 'CM',
            ),
            399 => 
            array (
                'id' => 900,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Copan',
                'full_name' => NULL,
                'code' => 'CP',
            ),
            400 => 
            array (
                'id' => 901,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'La Paz',
                'full_name' => NULL,
                'code' => 'PZ',
            ),
            401 => 
            array (
                'id' => 902,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Lempira',
                'full_name' => NULL,
                'code' => 'LE',
            ),
            402 => 
            array (
                'id' => 903,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Choluteca',
                'full_name' => NULL,
                'code' => 'CH',
            ),
            403 => 
            array (
                'id' => 904,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Choloma',
                'full_name' => NULL,
                'code' => 'CHO',
            ),
            404 => 
            array (
                'id' => 905,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Valle',
                'full_name' => NULL,
                'code' => 'VA',
            ),
            405 => 
            array (
                'id' => 906,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Santa Barbara',
                'full_name' => NULL,
                'code' => 'SB',
            ),
            406 => 
            array (
                'id' => 907,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Intibuca',
                'full_name' => NULL,
                'code' => 'IN',
            ),
            407 => 
            array (
                'id' => 908,
                'country_id' => 113,
                'region_id' => NULL,
                'name' => 'Yoro',
                'full_name' => NULL,
                'code' => 'YO',
            ),
            408 => 
            array (
                'id' => 909,
                'country_id' => 180,
                'region_id' => NULL,
                'name' => 'Phoenix Islands',
                'full_name' => NULL,
                'code' => 'PHO',
            ),
            409 => 
            array (
                'id' => 910,
                'country_id' => 180,
                'region_id' => NULL,
                'name' => 'Gilberts Islands',
                'full_name' => NULL,
                'code' => 'GIL',
            ),
            410 => 
            array (
                'id' => 911,
                'country_id' => 180,
                'region_id' => NULL,
                'name' => 'Line Islands',
                'full_name' => NULL,
                'code' => 'LIN',
            ),
            411 => 
            array (
                'id' => 912,
                'country_id' => 52,
                'region_id' => NULL,
                'name' => 'Ali Sabih',
                'full_name' => NULL,
                'code' => 'S',
            ),
            412 => 
            array (
                'id' => 913,
                'country_id' => 52,
                'region_id' => NULL,
                'name' => 'Obock',
                'full_name' => NULL,
                'code' => 'O',
            ),
            413 => 
            array (
                'id' => 914,
                'country_id' => 52,
                'region_id' => NULL,
                'name' => 'Dikhil',
                'full_name' => NULL,
                'code' => 'K',
            ),
            414 => 
            array (
                'id' => 915,
                'country_id' => 52,
                'region_id' => NULL,
                'name' => 'Tadjoura',
                'full_name' => NULL,
                'code' => 'T',
            ),
            415 => 
            array (
                'id' => 916,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Osh',
                'full_name' => NULL,
                'code' => 'O',
            ),
            416 => 
            array (
                'id' => 917,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Batken',
                'full_name' => NULL,
                'code' => 'B',
            ),
            417 => 
            array (
                'id' => 918,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Bishkek',
                'full_name' => NULL,
                'code' => 'GB',
            ),
            418 => 
            array (
                'id' => 919,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Chuy',
                'full_name' => NULL,
                'code' => 'C',
            ),
            419 => 
            array (
                'id' => 920,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Jalal-Abad',
                'full_name' => NULL,
                'code' => 'J',
            ),
            420 => 
            array (
                'id' => 921,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Karabalta',
                'full_name' => NULL,
                'code' => 'KBA',
            ),
            421 => 
            array (
                'id' => 922,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Kara-Kol',
                'full_name' => NULL,
                'code' => 'KKO',
            ),
            422 => 
            array (
                'id' => 923,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Kant',
                'full_name' => NULL,
                'code' => 'KAN',
            ),
            423 => 
            array (
                'id' => 924,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Kok-Jangak',
                'full_name' => NULL,
                'code' => 'KJ',
            ),
            424 => 
            array (
                'id' => 925,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Mailuu-Suu',
                'full_name' => NULL,
                'code' => 'MS',
            ),
            425 => 
            array (
                'id' => 926,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Naryn',
                'full_name' => NULL,
                'code' => 'N',
            ),
            426 => 
            array (
                'id' => 927,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Suluktu',
                'full_name' => NULL,
                'code' => 'SU',
            ),
            427 => 
            array (
                'id' => 928,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Talas',
                'full_name' => NULL,
                'code' => 'T',
            ),
            428 => 
            array (
                'id' => 929,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Tash-Kumyr',
                'full_name' => NULL,
                'code' => 'TK',
            ),
            429 => 
            array (
                'id' => 930,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Uzgen',
                'full_name' => NULL,
                'code' => 'UG',
            ),
            430 => 
            array (
                'id' => 931,
                'country_id' => 65,
                'region_id' => NULL,
                'name' => 'Ysyk-Kol',
                'full_name' => NULL,
                'code' => 'Y',
            ),
            431 => 
            array (
                'id' => 932,
                'country_id' => 15,
                'region_id' => NULL,
                'name' => 'Boke',
                'full_name' => NULL,
                'code' => 'BOK',
            ),
            432 => 
            array (
                'id' => 933,
                'country_id' => 15,
                'region_id' => NULL,
                'name' => 'Nzerekore',
                'full_name' => NULL,
                'code' => 'NZR',
            ),
            433 => 
            array (
                'id' => 934,
                'country_id' => 15,
                'region_id' => NULL,
                'name' => 'Faranah',
                'full_name' => NULL,
                'code' => 'FRN',
            ),
            434 => 
            array (
                'id' => 935,
                'country_id' => 15,
                'region_id' => NULL,
                'name' => 'Kindia',
                'full_name' => NULL,
                'code' => 'KND',
            ),
            435 => 
            array (
                'id' => 936,
                'country_id' => 15,
                'region_id' => NULL,
                'name' => 'Kankan',
                'full_name' => NULL,
                'code' => 'KNK',
            ),
            436 => 
            array (
                'id' => 937,
                'country_id' => 15,
                'region_id' => NULL,
                'name' => 'Conakry',
                'full_name' => NULL,
                'code' => 'CNK',
            ),
            437 => 
            array (
                'id' => 938,
                'country_id' => 15,
                'region_id' => NULL,
                'name' => 'Labe',
                'full_name' => NULL,
                'code' => 'LAB',
            ),
            438 => 
            array (
                'id' => 939,
                'country_id' => 15,
                'region_id' => NULL,
                'name' => 'Mamou',
                'full_name' => NULL,
                'code' => 'MAM',
            ),
            439 => 
            array (
                'id' => 940,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Abbotsford',
                'full_name' => NULL,
                'code' => 'ABB',
            ),
            440 => 
            array (
                'id' => 941,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Edmonton',
                'full_name' => NULL,
                'code' => 'EDM',
            ),
            441 => 
            array (
                'id' => 942,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Oshawa',
                'full_name' => NULL,
                'code' => 'OSH',
            ),
            442 => 
            array (
                'id' => 943,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Barrie',
                'full_name' => NULL,
                'code' => 'BAR',
            ),
            443 => 
            array (
                'id' => 944,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Cape Breton',
                'full_name' => NULL,
                'code' => 'CBR',
            ),
            444 => 
            array (
                'id' => 945,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Toronto',
                'full_name' => NULL,
                'code' => 'TOR',
            ),
            445 => 
            array (
                'id' => 946,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Fredericton',
                'full_name' => NULL,
                'code' => 'FRE',
            ),
            446 => 
            array (
                'id' => 947,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Guelph',
                'full_name' => NULL,
                'code' => 'GLP',
            ),
            447 => 
            array (
                'id' => 948,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Halifax',
                'full_name' => NULL,
                'code' => 'HAL',
            ),
            448 => 
            array (
                'id' => 949,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Hamilton',
                'full_name' => NULL,
                'code' => 'HAM',
            ),
            449 => 
            array (
                'id' => 950,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Whitehorse',
                'full_name' => NULL,
                'code' => 'YXY',
            ),
            450 => 
            array (
                'id' => 951,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Kelowna',
                'full_name' => NULL,
                'code' => 'KWL',
            ),
            451 => 
            array (
                'id' => 952,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Brampton',
                'full_name' => NULL,
                'code' => 'BRP',
            ),
            452 => 
            array (
                'id' => 953,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Kingston',
                'full_name' => NULL,
                'code' => 'KGN',
            ),
            453 => 
            array (
                'id' => 954,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Calgary',
                'full_name' => NULL,
                'code' => 'CAL',
            ),
            454 => 
            array (
                'id' => 955,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Quebec',
                'full_name' => NULL,
                'code' => 'QUE',
            ),
            455 => 
            array (
                'id' => 956,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Regina',
                'full_name' => NULL,
                'code' => 'REG',
            ),
            456 => 
            array (
                'id' => 957,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'London',
                'full_name' => NULL,
                'code' => 'LOD',
            ),
            457 => 
            array (
                'id' => 958,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Montreal',
                'full_name' => NULL,
                'code' => 'MTR',
            ),
            458 => 
            array (
                'id' => 959,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Sudbury',
                'full_name' => NULL,
                'code' => 'SUD',
            ),
            459 => 
            array (
                'id' => 960,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Saskatoon',
                'full_name' => NULL,
                'code' => 'SAK',
            ),
            460 => 
            array (
                'id' => 961,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Trois-Rivieres',
                'full_name' => NULL,
                'code' => 'TRR',
            ),
            461 => 
            array (
                'id' => 962,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Thunder Bay',
                'full_name' => NULL,
                'code' => 'THU',
            ),
            462 => 
            array (
                'id' => 963,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Sherbrooke',
                'full_name' => NULL,
                'code' => 'SBE',
            ),
            463 => 
            array (
                'id' => 964,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'St. Catharines',
                'full_name' => NULL,
                'code' => 'SCA',
            ),
            464 => 
            array (
                'id' => 965,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Saint-John\'s',
                'full_name' => NULL,
                'code' => 'SJB',
            ),
            465 => 
            array (
                'id' => 966,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Victoria',
                'full_name' => NULL,
                'code' => 'VIC',
            ),
            466 => 
            array (
                'id' => 967,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Vancouver',
                'full_name' => NULL,
                'code' => 'VAN',
            ),
            467 => 
            array (
                'id' => 968,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Winnipeg',
                'full_name' => NULL,
                'code' => 'WNP',
            ),
            468 => 
            array (
                'id' => 969,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Windsor',
                'full_name' => NULL,
                'code' => 'WDR',
            ),
            469 => 
            array (
                'id' => 970,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Ottawa',
                'full_name' => NULL,
                'code' => 'OTT',
            ),
            470 => 
            array (
                'id' => 971,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Charlottetown',
                'full_name' => NULL,
                'code' => 'CHA',
            ),
            471 => 
            array (
                'id' => 972,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Yellowknife',
                'full_name' => NULL,
                'code' => 'YZF',
            ),
            472 => 
            array (
                'id' => 973,
                'country_id' => 166,
                'region_id' => NULL,
                'name' => 'Iqaluit',
                'full_name' => NULL,
                'code' => 'IQL',
            ),
            473 => 
            array (
                'id' => 974,
                'country_id' => 19,
                'region_id' => NULL,
                'name' => 'Ashanti',
                'full_name' => NULL,
                'code' => 'AS',
            ),
            474 => 
            array (
                'id' => 975,
                'country_id' => 19,
                'region_id' => NULL,
                'name' => 'Obuasi',
                'full_name' => NULL,
                'code' => 'OBU',
            ),
            475 => 
            array (
                'id' => 976,
                'country_id' => 19,
                'region_id' => NULL,
                'name' => 'Northern',
                'full_name' => NULL,
                'code' => 'NO',
            ),
            476 => 
            array (
                'id' => 977,
                'country_id' => 19,
                'region_id' => NULL,
                'name' => 'Brong Ahafo',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            477 => 
            array (
                'id' => 978,
                'country_id' => 19,
                'region_id' => NULL,
                'name' => 'Greater Accra',
                'full_name' => NULL,
                'code' => 'GA',
            ),
            478 => 
            array (
                'id' => 979,
                'country_id' => 19,
                'region_id' => NULL,
                'name' => 'Eastern',
                'full_name' => NULL,
                'code' => 'EA',
            ),
            479 => 
            array (
                'id' => 980,
                'country_id' => 19,
                'region_id' => NULL,
                'name' => 'Upper East',
                'full_name' => NULL,
                'code' => 'UE',
            ),
            480 => 
            array (
                'id' => 981,
                'country_id' => 19,
                'region_id' => NULL,
                'name' => 'Upper West',
                'full_name' => NULL,
                'code' => 'UW',
            ),
            481 => 
            array (
                'id' => 982,
                'country_id' => 19,
                'region_id' => NULL,
                'name' => 'Volta',
                'full_name' => NULL,
                'code' => 'VO',
            ),
            482 => 
            array (
                'id' => 983,
                'country_id' => 19,
                'region_id' => NULL,
                'name' => 'Western',
                'full_name' => NULL,
                'code' => 'WE',
            ),
            483 => 
            array (
                'id' => 984,
                'country_id' => 19,
                'region_id' => NULL,
                'name' => 'Central',
                'full_name' => NULL,
                'code' => 'CE',
            ),
            484 => 
            array (
                'id' => 985,
                'country_id' => 18,
                'region_id' => NULL,
                'name' => 'Ogooue-Lolo',
                'full_name' => NULL,
                'code' => 'OL',
            ),
            485 => 
            array (
                'id' => 986,
                'country_id' => 18,
                'region_id' => NULL,
                'name' => 'Ogooue-Ivindo',
                'full_name' => NULL,
                'code' => 'OI',
            ),
            486 => 
            array (
                'id' => 987,
                'country_id' => 18,
                'region_id' => NULL,
                'name' => 'Ogooue-Maritime',
                'full_name' => NULL,
                'code' => 'OM',
            ),
            487 => 
            array (
                'id' => 988,
                'country_id' => 18,
                'region_id' => NULL,
                'name' => 'Ngounie',
                'full_name' => NULL,
                'code' => 'NG',
            ),
            488 => 
            array (
                'id' => 989,
                'country_id' => 18,
                'region_id' => NULL,
                'name' => 'Estuaire',
                'full_name' => NULL,
                'code' => 'ES',
            ),
            489 => 
            array (
                'id' => 990,
                'country_id' => 18,
                'region_id' => NULL,
                'name' => 'Nyanga',
                'full_name' => NULL,
                'code' => 'NY',
            ),
            490 => 
            array (
                'id' => 991,
                'country_id' => 18,
                'region_id' => NULL,
                'name' => 'Haut-Ogooue',
                'full_name' => NULL,
                'code' => 'HO',
            ),
            491 => 
            array (
                'id' => 992,
                'country_id' => 18,
                'region_id' => NULL,
                'name' => 'Woleu-Ntem',
                'full_name' => NULL,
                'code' => 'WN',
            ),
            492 => 
            array (
                'id' => 993,
                'country_id' => 18,
                'region_id' => NULL,
                'name' => 'Moyen-Ogooue',
                'full_name' => NULL,
                'code' => 'MO',
            ),
            493 => 
            array (
                'id' => 994,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Otdar Mean Chey',
                'full_name' => NULL,
                'code' => 'OC',
            ),
            494 => 
            array (
                'id' => 995,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Krong Keb',
                'full_name' => NULL,
                'code' => 'KB',
            ),
            495 => 
            array (
                'id' => 996,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Preah Vihear',
                'full_name' => NULL,
                'code' => 'PR',
            ),
            496 => 
            array (
                'id' => 997,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Krong Pailin',
                'full_name' => NULL,
                'code' => 'PL',
            ),
            497 => 
            array (
                'id' => 998,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Banteay Mean Chey',
                'full_name' => NULL,
                'code' => 'BM',
            ),
            498 => 
            array (
                'id' => 999,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Kampong Chhnang',
                'full_name' => NULL,
                'code' => 'KZC',
            ),
            499 => 
            array (
                'id' => 1000,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Kampong Spoe',
                'full_name' => NULL,
                'code' => 'KO',
            ),
        ));
        \DB::table('world_cities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Kampong Thum',
                'full_name' => NULL,
                'code' => 'KZK',
            ),
            1 => 
            array (
                'id' => 1002,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Kampong Cham',
                'full_name' => NULL,
                'code' => 'KM',
            ),
            2 => 
            array (
                'id' => 1003,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Prey Veng',
                'full_name' => NULL,
                'code' => 'PG',
            ),
            3 => 
            array (
                'id' => 1004,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Takev',
                'full_name' => NULL,
                'code' => 'TK',
            ),
            4 => 
            array (
                'id' => 1005,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Svay Rieng',
                'full_name' => NULL,
                'code' => 'SVR',
            ),
            5 => 
            array (
                'id' => 1006,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Kandal',
                'full_name' => NULL,
                'code' => 'KL',
            ),
            6 => 
            array (
                'id' => 1007,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Kaoh Kong',
                'full_name' => NULL,
                'code' => 'KKZ',
            ),
            7 => 
            array (
                'id' => 1008,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Kampot',
                'full_name' => NULL,
                'code' => 'KMT',
            ),
            8 => 
            array (
                'id' => 1009,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Phnum Penh',
                'full_name' => NULL,
                'code' => 'PNH',
            ),
            9 => 
            array (
                'id' => 1010,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Kracheh',
                'full_name' => NULL,
                'code' => 'KH',
            ),
            10 => 
            array (
                'id' => 1011,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Rotanak Kiri',
                'full_name' => NULL,
                'code' => 'RBE',
            ),
            11 => 
            array (
                'id' => 1012,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Bat Dambang',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            12 => 
            array (
                'id' => 1013,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Mondol Kiri',
                'full_name' => NULL,
                'code' => 'MWV',
            ),
            13 => 
            array (
                'id' => 1014,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Pouthĭsat',
                'full_name' => NULL,
                'code' => 'PO',
            ),
            14 => 
            array (
                'id' => 1015,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Stoeng Treng',
                'full_name' => NULL,
                'code' => 'TNX',
            ),
            15 => 
            array (
                'id' => 1016,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Krong Preah',
                'full_name' => NULL,
                'code' => 'KA',
            ),
            16 => 
            array (
                'id' => 1017,
                'country_id' => 91,
                'region_id' => NULL,
                'name' => 'Siem Reab',
                'full_name' => NULL,
                'code' => 'REP',
            ),
            17 => 
            array (
                'id' => 1018,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Olomoucky',
                'full_name' => NULL,
                'code' => 'OL',
            ),
            18 => 
            array (
                'id' => 1019,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Plzensky',
                'full_name' => NULL,
                'code' => 'PL',
            ),
            19 => 
            array (
                'id' => 1020,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Prague',
                'full_name' => NULL,
                'code' => 'PR',
            ),
            20 => 
            array (
                'id' => 1021,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Kralovehradecky',
                'full_name' => NULL,
                'code' => 'KR',
            ),
            21 => 
            array (
                'id' => 1022,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Karlovarsky',
                'full_name' => NULL,
                'code' => 'KA',
            ),
            22 => 
            array (
                'id' => 1023,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Liberecky',
                'full_name' => NULL,
                'code' => 'LI',
            ),
            23 => 
            array (
                'id' => 1024,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Moravskoslezsky',
                'full_name' => NULL,
                'code' => 'MO',
            ),
            24 => 
            array (
                'id' => 1025,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Jihomoravsky',
                'full_name' => NULL,
                'code' => 'JC',
            ),
            25 => 
            array (
                'id' => 1026,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Pardubicky',
                'full_name' => NULL,
                'code' => 'PA',
            ),
            26 => 
            array (
                'id' => 1027,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Vysocina',
                'full_name' => NULL,
                'code' => 'VY',
            ),
            27 => 
            array (
                'id' => 1028,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Ustecky',
                'full_name' => NULL,
                'code' => 'US',
            ),
            28 => 
            array (
                'id' => 1029,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Stredocesky',
                'full_name' => NULL,
                'code' => 'ST',
            ),
            29 => 
            array (
                'id' => 1030,
                'country_id' => 136,
                'region_id' => NULL,
                'name' => 'Zlinsky',
                'full_name' => NULL,
                'code' => 'ZL',
            ),
            30 => 
            array (
                'id' => 1031,
                'country_id' => 14,
                'region_id' => NULL,
                'name' => 'Matabeleland North',
                'full_name' => NULL,
                'code' => 'MN',
            ),
            31 => 
            array (
                'id' => 1032,
                'country_id' => 14,
                'region_id' => NULL,
                'name' => 'Bulawayo',
                'full_name' => NULL,
                'code' => 'BU',
            ),
            32 => 
            array (
                'id' => 1033,
                'country_id' => 14,
                'region_id' => NULL,
                'name' => 'Mashonaland East',
                'full_name' => NULL,
                'code' => 'ME',
            ),
            33 => 
            array (
                'id' => 1034,
                'country_id' => 14,
                'region_id' => NULL,
                'name' => 'Harare',
                'full_name' => NULL,
                'code' => 'HA',
            ),
            34 => 
            array (
                'id' => 1035,
                'country_id' => 14,
                'region_id' => NULL,
                'name' => 'Manicaland',
                'full_name' => NULL,
                'code' => 'ML',
            ),
            35 => 
            array (
                'id' => 1036,
                'country_id' => 14,
                'region_id' => NULL,
                'name' => 'Masvingo',
                'full_name' => NULL,
                'code' => 'MV',
            ),
            36 => 
            array (
                'id' => 1037,
                'country_id' => 14,
                'region_id' => NULL,
                'name' => 'Matabeleland South',
                'full_name' => NULL,
                'code' => 'MS',
            ),
            37 => 
            array (
                'id' => 1038,
                'country_id' => 14,
                'region_id' => NULL,
                'name' => 'Mashonaland West',
                'full_name' => NULL,
                'code' => 'MW',
            ),
            38 => 
            array (
                'id' => 1039,
                'country_id' => 14,
                'region_id' => NULL,
                'name' => 'Midlands',
                'full_name' => NULL,
                'code' => 'MD',
            ),
            39 => 
            array (
                'id' => 1040,
                'country_id' => 14,
                'region_id' => NULL,
                'name' => 'Mashonaland Central',
                'full_name' => NULL,
                'code' => 'MC',
            ),
            40 => 
            array (
                'id' => 1041,
                'country_id' => 1,
                'region_id' => NULL,
                'name' => 'Adamaoua',
                'full_name' => NULL,
                'code' => 'ADA',
            ),
            41 => 
            array (
                'id' => 1042,
                'country_id' => 1,
                'region_id' => NULL,
                'name' => 'Nord',
                'full_name' => NULL,
                'code' => 'NOR',
            ),
            42 => 
            array (
                'id' => 1043,
                'country_id' => 1,
                'region_id' => NULL,
                'name' => 'Extreme-Nord',
                'full_name' => NULL,
                'code' => 'EXN',
            ),
            43 => 
            array (
                'id' => 1044,
                'country_id' => 1,
                'region_id' => NULL,
                'name' => 'Littoral',
                'full_name' => NULL,
                'code' => 'LIT',
            ),
            44 => 
            array (
                'id' => 1045,
                'country_id' => 1,
                'region_id' => NULL,
                'name' => 'Est',
                'full_name' => NULL,
                'code' => 'EST',
            ),
            45 => 
            array (
                'id' => 1046,
                'country_id' => 1,
                'region_id' => NULL,
                'name' => 'Sud',
                'full_name' => NULL,
                'code' => 'SUD',
            ),
            46 => 
            array (
                'id' => 1047,
                'country_id' => 1,
                'region_id' => NULL,
                'name' => 'Nord-Oueste',
                'full_name' => NULL,
                'code' => 'NOT',
            ),
            47 => 
            array (
                'id' => 1048,
                'country_id' => 1,
                'region_id' => NULL,
                'name' => 'Ouest',
                'full_name' => NULL,
                'code' => 'OUE',
            ),
            48 => 
            array (
                'id' => 1049,
                'country_id' => 1,
                'region_id' => NULL,
                'name' => 'Sud-Oueste',
                'full_name' => NULL,
                'code' => 'SOU',
            ),
            49 => 
            array (
                'id' => 1050,
                'country_id' => 1,
                'region_id' => NULL,
                'name' => 'Centre',
                'full_name' => NULL,
                'code' => 'CEN',
            ),
            50 => 
            array (
                'id' => 1051,
                'country_id' => 96,
                'region_id' => NULL,
                'name' => 'Madinat ach Shamal',
                'full_name' => NULL,
                'code' => 'MS',
            ),
            51 => 
            array (
                'id' => 1052,
                'country_id' => 96,
                'region_id' => NULL,
                'name' => 'Ad Dawhah',
                'full_name' => NULL,
                'code' => 'DW',
            ),
            52 => 
            array (
                'id' => 1053,
                'country_id' => 96,
                'region_id' => NULL,
                'name' => 'Al Ghuwariyah',
                'full_name' => NULL,
                'code' => 'GW',
            ),
            53 => 
            array (
                'id' => 1054,
                'country_id' => 96,
                'region_id' => NULL,
                'name' => 'Al Khawr',
                'full_name' => NULL,
                'code' => 'KR',
            ),
            54 => 
            array (
                'id' => 1055,
                'country_id' => 96,
                'region_id' => NULL,
                'name' => 'Jariyan al Batnah',
                'full_name' => NULL,
                'code' => 'JB',
            ),
            55 => 
            array (
                'id' => 1056,
                'country_id' => 96,
                'region_id' => NULL,
                'name' => 'Ar Rayyan',
                'full_name' => NULL,
                'code' => 'RN',
            ),
            56 => 
            array (
                'id' => 1057,
                'country_id' => 96,
                'region_id' => NULL,
                'name' => 'Al Wakrah',
                'full_name' => NULL,
                'code' => 'WK',
            ),
            57 => 
            array (
                'id' => 1058,
                'country_id' => 96,
                'region_id' => NULL,
                'name' => 'Umm Salal',
                'full_name' => NULL,
                'code' => 'UL',
            ),
            58 => 
            array (
                'id' => 1059,
                'country_id' => 96,
                'region_id' => NULL,
                'name' => 'Al Jumaliyah',
                'full_name' => NULL,
                'code' => 'JM',
            ),
            59 => 
            array (
                'id' => 1060,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Agnebi',
                'full_name' => NULL,
                'code' => 'AG',
            ),
            60 => 
            array (
                'id' => 1061,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Bafing',
                'full_name' => NULL,
                'code' => 'BF',
            ),
            61 => 
            array (
                'id' => 1062,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Vallee du Bandama',
                'full_name' => NULL,
                'code' => 'VB',
            ),
            62 => 
            array (
                'id' => 1063,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Denguele',
                'full_name' => NULL,
                'code' => 'DE',
            ),
            63 => 
            array (
                'id' => 1064,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Nzi-Comoe',
                'full_name' => NULL,
                'code' => 'NC',
            ),
            64 => 
            array (
                'id' => 1065,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Fromager',
                'full_name' => NULL,
                'code' => 'FR',
            ),
            65 => 
            array (
                'id' => 1066,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Lacs',
                'full_name' => NULL,
                'code' => 'LC',
            ),
            66 => 
            array (
                'id' => 1067,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Marahoue',
                'full_name' => NULL,
                'code' => 'MR',
            ),
            67 => 
            array (
                'id' => 1068,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Sud-Bandama',
                'full_name' => NULL,
                'code' => 'SB',
            ),
            68 => 
            array (
                'id' => 1069,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Sud-Comoe',
                'full_name' => NULL,
                'code' => 'SC',
            ),
            69 => 
            array (
                'id' => 1070,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Haut-Sassandra',
                'full_name' => NULL,
                'code' => 'HT',
            ),
            70 => 
            array (
                'id' => 1071,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Savanes',
                'full_name' => NULL,
                'code' => 'SV',
            ),
            71 => 
            array (
                'id' => 1072,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Montagnes',
                'full_name' => NULL,
                'code' => 'DH',
            ),
            72 => 
            array (
                'id' => 1073,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Worodougou',
                'full_name' => NULL,
                'code' => 'WR',
            ),
            73 => 
            array (
                'id' => 1074,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Bas-Sassandra',
                'full_name' => NULL,
                'code' => 'BS',
            ),
            74 => 
            array (
                'id' => 1075,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Lagunes',
                'full_name' => NULL,
                'code' => 'LG',
            ),
            75 => 
            array (
                'id' => 1076,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Zanzan',
                'full_name' => NULL,
                'code' => 'ZA',
            ),
            76 => 
            array (
                'id' => 1077,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Moyen-Cavally',
                'full_name' => NULL,
                'code' => 'MV',
            ),
            77 => 
            array (
                'id' => 1078,
                'country_id' => 6,
                'region_id' => NULL,
                'name' => 'Moyen-Comoe',
                'full_name' => NULL,
                'code' => 'MC',
            ),
            78 => 
            array (
                'id' => 1079,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Osjecko-Baranjska',
                'full_name' => NULL,
                'code' => '14',
            ),
            79 => 
            array (
                'id' => 1080,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Bjelovarsko-Bilogorska',
                'full_name' => NULL,
                'code' => '7',
            ),
            80 => 
            array (
                'id' => 1081,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Primorsko-Goranska',
                'full_name' => NULL,
                'code' => '8',
            ),
            81 => 
            array (
                'id' => 1082,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Pozega-Slavonia',
                'full_name' => NULL,
                'code' => '11',
            ),
            82 => 
            array (
                'id' => 1083,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Brodsko-Posavska',
                'full_name' => NULL,
                'code' => '12',
            ),
            83 => 
            array (
                'id' => 1084,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Dubrovacko-Neretvanska',
                'full_name' => NULL,
                'code' => '19',
            ),
            84 => 
            array (
                'id' => 1085,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Karlovacka',
                'full_name' => NULL,
                'code' => '4',
            ),
            85 => 
            array (
                'id' => 1086,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Koprivnicko-Krizevacka',
                'full_name' => NULL,
                'code' => '6',
            ),
            86 => 
            array (
                'id' => 1087,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Krapinsko-Zagorska',
                'full_name' => NULL,
                'code' => '2',
            ),
            87 => 
            array (
                'id' => 1088,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Licko-Senjska',
                'full_name' => NULL,
                'code' => '9',
            ),
            88 => 
            array (
                'id' => 1089,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Medimurska',
                'full_name' => NULL,
                'code' => '20',
            ),
            89 => 
            array (
                'id' => 1090,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Zagrebacka',
                'full_name' => NULL,
                'code' => '1',
            ),
            90 => 
            array (
                'id' => 1091,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Grad Zagreb',
                'full_name' => NULL,
                'code' => '21',
            ),
            91 => 
            array (
                'id' => 1092,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Splitsko-Dalmatinska',
                'full_name' => NULL,
                'code' => '17',
            ),
            92 => 
            array (
                'id' => 1093,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Varazdinska',
                'full_name' => NULL,
                'code' => '5',
            ),
            93 => 
            array (
                'id' => 1094,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Viroviticko-Podravska',
                'full_name' => NULL,
                'code' => '10',
            ),
            94 => 
            array (
                'id' => 1095,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Vukovarsko-Srijemska',
                'full_name' => NULL,
                'code' => '16',
            ),
            95 => 
            array (
                'id' => 1096,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Sibensko-Kninska',
                'full_name' => NULL,
                'code' => '15',
            ),
            96 => 
            array (
                'id' => 1097,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Sisacko-Moslavacka',
                'full_name' => NULL,
                'code' => '3',
            ),
            97 => 
            array (
                'id' => 1098,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Istarska',
                'full_name' => NULL,
                'code' => '18',
            ),
            98 => 
            array (
                'id' => 1099,
                'country_id' => 142,
                'region_id' => NULL,
                'name' => 'Zadarska',
                'full_name' => NULL,
                'code' => '13',
            ),
            99 => 
            array (
                'id' => 1100,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Elgeyo-Marakwet',
                'full_name' => NULL,
                'code' => 'EMA',
            ),
            100 => 
            array (
                'id' => 1101,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Baringo',
                'full_name' => NULL,
                'code' => 'BAR',
            ),
            101 => 
            array (
                'id' => 1102,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Bungoma',
                'full_name' => NULL,
                'code' => 'BUN',
            ),
            102 => 
            array (
                'id' => 1103,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Bomet',
                'full_name' => NULL,
                'code' => 'BOM',
            ),
            103 => 
            array (
                'id' => 1104,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Busia',
                'full_name' => NULL,
                'code' => 'BUS',
            ),
            104 => 
            array (
                'id' => 1105,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Embu',
                'full_name' => NULL,
                'code' => 'EMB',
            ),
            105 => 
            array (
                'id' => 1106,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Homa Bay',
                'full_name' => NULL,
                'code' => 'HOB',
            ),
            106 => 
            array (
                'id' => 1107,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Kiambu',
                'full_name' => NULL,
                'code' => 'KIA',
            ),
            107 => 
            array (
                'id' => 1108,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Kilifi',
                'full_name' => NULL,
                'code' => 'KIL',
            ),
            108 => 
            array (
                'id' => 1109,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Kirinyaga',
                'full_name' => NULL,
                'code' => 'KIR',
            ),
            109 => 
            array (
                'id' => 1110,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Kisumu',
                'full_name' => NULL,
                'code' => 'KIS',
            ),
            110 => 
            array (
                'id' => 1111,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Kitui',
                'full_name' => NULL,
                'code' => 'KIT',
            ),
            111 => 
            array (
                'id' => 1112,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Kisii',
                'full_name' => NULL,
                'code' => 'KII',
            ),
            112 => 
            array (
                'id' => 1113,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Garissa',
                'full_name' => NULL,
                'code' => 'GAS',
            ),
            113 => 
            array (
                'id' => 1114,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Kakamega',
                'full_name' => NULL,
                'code' => 'KAK',
            ),
            114 => 
            array (
                'id' => 1115,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Kajiado',
                'full_name' => NULL,
                'code' => 'KAJ',
            ),
            115 => 
            array (
                'id' => 1116,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Kericho',
                'full_name' => NULL,
                'code' => 'KEY',
            ),
            116 => 
            array (
                'id' => 1117,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Kwale',
                'full_name' => NULL,
                'code' => 'KWA',
            ),
            117 => 
            array (
                'id' => 1118,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Lamu',
                'full_name' => NULL,
                'code' => 'LAU',
            ),
            118 => 
            array (
                'id' => 1119,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Laikipia',
                'full_name' => NULL,
                'code' => 'LAI',
            ),
            119 => 
            array (
                'id' => 1120,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Machakos',
                'full_name' => NULL,
                'code' => 'MAC',
            ),
            120 => 
            array (
                'id' => 1121,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Makueni',
                'full_name' => NULL,
                'code' => 'MAK',
            ),
            121 => 
            array (
                'id' => 1122,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Marsabit',
                'full_name' => NULL,
                'code' => 'RBT',
            ),
            122 => 
            array (
                'id' => 1123,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Mandera',
                'full_name' => NULL,
                'code' => 'MAN',
            ),
            123 => 
            array (
                'id' => 1124,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Meru',
                'full_name' => NULL,
                'code' => 'MER',
            ),
            124 => 
            array (
                'id' => 1125,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Mombasa',
                'full_name' => NULL,
                'code' => 'MOM',
            ),
            125 => 
            array (
                'id' => 1126,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Migori',
                'full_name' => NULL,
                'code' => 'MIG',
            ),
            126 => 
            array (
                'id' => 1127,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Muranga',
                'full_name' => NULL,
                'code' => 'MUR',
            ),
            127 => 
            array (
                'id' => 1128,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Nakuru',
                'full_name' => NULL,
                'code' => 'NUU',
            ),
            128 => 
            array (
                'id' => 1129,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Narok',
                'full_name' => NULL,
                'code' => 'NAR',
            ),
            129 => 
            array (
                'id' => 1130,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Nandi',
                'full_name' => NULL,
                'code' => 'NAN',
            ),
            130 => 
            array (
                'id' => 1131,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Nairobi',
                'full_name' => NULL,
                'code' => 'NA',
            ),
            131 => 
            array (
                'id' => 1132,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Nithi',
                'full_name' => NULL,
                'code' => 'NIT',
            ),
            132 => 
            array (
                'id' => 1133,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Nyamira',
                'full_name' => NULL,
                'code' => 'NYM',
            ),
            133 => 
            array (
                'id' => 1134,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Nyandarua',
                'full_name' => NULL,
                'code' => 'NYN',
            ),
            134 => 
            array (
                'id' => 1135,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Nyeri',
                'full_name' => NULL,
                'code' => 'NYE',
            ),
            135 => 
            array (
                'id' => 1136,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Samburu',
                'full_name' => NULL,
                'code' => 'UAS',
            ),
            136 => 
            array (
                'id' => 1137,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Tana River',
                'full_name' => NULL,
                'code' => 'TRI',
            ),
            137 => 
            array (
                'id' => 1138,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Taita-Taveta',
                'full_name' => NULL,
                'code' => 'TTA',
            ),
            138 => 
            array (
                'id' => 1139,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Trans-Nzoia',
                'full_name' => NULL,
                'code' => 'TNZ',
            ),
            139 => 
            array (
                'id' => 1140,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Turkana',
                'full_name' => NULL,
                'code' => 'TUR',
            ),
            140 => 
            array (
                'id' => 1141,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Wajir',
                'full_name' => NULL,
                'code' => 'WJR',
            ),
            141 => 
            array (
                'id' => 1142,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Uasin Gishu',
                'full_name' => NULL,
                'code' => 'UGI',
            ),
            142 => 
            array (
                'id' => 1143,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Vihiga',
                'full_name' => NULL,
                'code' => 'VIH',
            ),
            143 => 
            array (
                'id' => 1144,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'West Pokot',
                'full_name' => NULL,
                'code' => 'WPO',
            ),
            144 => 
            array (
                'id' => 1145,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Siaya',
                'full_name' => NULL,
                'code' => 'SIA',
            ),
            145 => 
            array (
                'id' => 1146,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Isiolo',
                'full_name' => NULL,
                'code' => 'ISI',
            ),
            146 => 
            array (
                'id' => 1147,
                'country_id' => 56,
                'region_id' => NULL,
                'name' => 'Central',
                'full_name' => NULL,
                'code' => 'CE',
            ),
            147 => 
            array (
                'id' => 1148,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Aluksnes',
                'full_name' => NULL,
                'code' => 'ALU',
            ),
            148 => 
            array (
                'id' => 1149,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Aizkraukles',
                'full_name' => NULL,
                'code' => 'AIZ',
            ),
            149 => 
            array (
                'id' => 1150,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Ogres',
                'full_name' => NULL,
                'code' => 'OGR',
            ),
            150 => 
            array (
                'id' => 1151,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Balvu',
                'full_name' => NULL,
                'code' => 'BAL',
            ),
            151 => 
            array (
                'id' => 1152,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Bauskas',
                'full_name' => NULL,
                'code' => 'BAU',
            ),
            152 => 
            array (
                'id' => 1153,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Cesu',
                'full_name' => NULL,
                'code' => 'CES',
            ),
            153 => 
            array (
                'id' => 1154,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Dobeles',
                'full_name' => NULL,
                'code' => 'DOB',
            ),
            154 => 
            array (
                'id' => 1155,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Gulbenes',
                'full_name' => NULL,
                'code' => 'GUL',
            ),
            155 => 
            array (
                'id' => 1156,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Jekabpils',
                'full_name' => NULL,
                'code' => 'JEK',
            ),
            156 => 
            array (
                'id' => 1157,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Kraslavas',
                'full_name' => NULL,
                'code' => 'KRA',
            ),
            157 => 
            array (
                'id' => 1158,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Kuldigas',
                'full_name' => NULL,
                'code' => 'KUL',
            ),
            158 => 
            array (
                'id' => 1159,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Rezeknes',
                'full_name' => NULL,
                'code' => 'RZR',
            ),
            159 => 
            array (
                'id' => 1160,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Rigas',
                'full_name' => NULL,
                'code' => 'RGA',
            ),
            160 => 
            array (
                'id' => 1161,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Liepajas',
                'full_name' => NULL,
                'code' => 'LPK',
            ),
            161 => 
            array (
                'id' => 1162,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Limbazu',
                'full_name' => NULL,
                'code' => 'LIM',
            ),
            162 => 
            array (
                'id' => 1163,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Ludzas',
                'full_name' => NULL,
                'code' => 'LUD',
            ),
            163 => 
            array (
                'id' => 1164,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Madonas',
                'full_name' => NULL,
                'code' => 'MAD',
            ),
            164 => 
            array (
                'id' => 1165,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Preilu',
                'full_name' => NULL,
                'code' => 'PRE',
            ),
            165 => 
            array (
                'id' => 1166,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Saldus',
                'full_name' => NULL,
                'code' => 'SAL',
            ),
            166 => 
            array (
                'id' => 1167,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Talsu',
                'full_name' => NULL,
                'code' => 'TAL',
            ),
            167 => 
            array (
                'id' => 1168,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Daugavpils',
                'full_name' => NULL,
                'code' => 'DGR',
            ),
            168 => 
            array (
                'id' => 1169,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Tukuma',
                'full_name' => NULL,
                'code' => 'TUK',
            ),
            169 => 
            array (
                'id' => 1170,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Valkas',
                'full_name' => NULL,
                'code' => 'VLK',
            ),
            170 => 
            array (
                'id' => 1171,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Valmieras',
                'full_name' => NULL,
                'code' => 'VLM',
            ),
            171 => 
            array (
                'id' => 1172,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Ventspils',
                'full_name' => NULL,
                'code' => 'VSL',
            ),
            172 => 
            array (
                'id' => 1173,
                'country_id' => 131,
                'region_id' => NULL,
                'name' => 'Jelgavas',
                'full_name' => NULL,
                'code' => 'JGR',
            ),
            173 => 
            array (
                'id' => 1174,
                'country_id' => 34,
                'region_id' => NULL,
                'name' => 'Berea',
                'full_name' => NULL,
                'code' => 'D',
            ),
            174 => 
            array (
                'id' => 1175,
                'country_id' => 34,
                'region_id' => NULL,
                'name' => 'Butha-Buthe',
                'full_name' => NULL,
                'code' => 'B',
            ),
            175 => 
            array (
                'id' => 1176,
                'country_id' => 34,
                'region_id' => NULL,
                'name' => 'Quthing',
                'full_name' => NULL,
                'code' => 'G',
            ),
            176 => 
            array (
                'id' => 1177,
                'country_id' => 34,
                'region_id' => NULL,
                'name' => 'Qachas Nek',
                'full_name' => NULL,
                'code' => 'H',
            ),
            177 => 
            array (
                'id' => 1178,
                'country_id' => 34,
                'region_id' => NULL,
                'name' => 'Leribe',
                'full_name' => NULL,
                'code' => 'C',
            ),
            178 => 
            array (
                'id' => 1179,
                'country_id' => 34,
                'region_id' => NULL,
                'name' => 'Mafeteng',
                'full_name' => NULL,
                'code' => 'E',
            ),
            179 => 
            array (
                'id' => 1180,
                'country_id' => 34,
                'region_id' => NULL,
                'name' => 'Maseru',
                'full_name' => NULL,
                'code' => 'A',
            ),
            180 => 
            array (
                'id' => 1181,
                'country_id' => 34,
                'region_id' => NULL,
                'name' => 'Mohales Hoek',
                'full_name' => NULL,
                'code' => 'F',
            ),
            181 => 
            array (
                'id' => 1182,
                'country_id' => 34,
                'region_id' => NULL,
                'name' => 'Mokhotlong',
                'full_name' => NULL,
                'code' => 'J',
            ),
            182 => 
            array (
                'id' => 1183,
                'country_id' => 34,
                'region_id' => NULL,
                'name' => 'Thaba-Tseka',
                'full_name' => NULL,
                'code' => 'K',
            ),
            183 => 
            array (
                'id' => 1184,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Attapu',
                'full_name' => NULL,
                'code' => 'AT',
            ),
            184 => 
            array (
                'id' => 1185,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Bolikhamxai',
                'full_name' => NULL,
                'code' => 'BL',
            ),
            185 => 
            array (
                'id' => 1186,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Bokeo',
                'full_name' => NULL,
                'code' => 'BK',
            ),
            186 => 
            array (
                'id' => 1187,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Xiangkhoang',
                'full_name' => NULL,
                'code' => 'XI',
            ),
            187 => 
            array (
                'id' => 1188,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Phongsali',
                'full_name' => NULL,
                'code' => 'PH',
            ),
            188 => 
            array (
                'id' => 1189,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Khammouan',
                'full_name' => NULL,
                'code' => 'KH',
            ),
            189 => 
            array (
                'id' => 1190,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Houaphan',
                'full_name' => NULL,
                'code' => 'HO',
            ),
            190 => 
            array (
                'id' => 1191,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Louangphrabang',
                'full_name' => NULL,
                'code' => 'LP',
            ),
            191 => 
            array (
                'id' => 1192,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Louang Namtha',
                'full_name' => NULL,
                'code' => 'LM',
            ),
            192 => 
            array (
                'id' => 1193,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Xaisomboun',
                'full_name' => NULL,
                'code' => 'XN',
            ),
            193 => 
            array (
                'id' => 1194,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Xekong',
                'full_name' => NULL,
                'code' => 'XE',
            ),
            194 => 
            array (
                'id' => 1195,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Saravan',
                'full_name' => NULL,
                'code' => 'SL',
            ),
            195 => 
            array (
                'id' => 1196,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Savannakhet',
                'full_name' => NULL,
                'code' => 'SV',
            ),
            196 => 
            array (
                'id' => 1197,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Xaignabouri',
                'full_name' => NULL,
                'code' => 'XA',
            ),
            197 => 
            array (
                'id' => 1198,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Vientiane',
                'full_name' => NULL,
                'code' => 'VI',
            ),
            198 => 
            array (
                'id' => 1199,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Oudomxai',
                'full_name' => NULL,
                'code' => 'OU',
            ),
            199 => 
            array (
                'id' => 1200,
                'country_id' => 69,
                'region_id' => NULL,
                'name' => 'Champasak',
                'full_name' => NULL,
                'code' => 'CH',
            ),
            200 => 
            array (
                'id' => 1201,
                'country_id' => 77,
                'region_id' => NULL,
                'name' => 'Ash-Shamal',
                'full_name' => NULL,
                'code' => 'AS',
            ),
            201 => 
            array (
                'id' => 1202,
                'country_id' => 77,
                'region_id' => NULL,
                'name' => 'Al-Biqa',
                'full_name' => NULL,
                'code' => 'BI',
            ),
            202 => 
            array (
                'id' => 1203,
                'country_id' => 77,
                'region_id' => NULL,
                'name' => 'Bayrut',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            203 => 
            array (
                'id' => 1204,
                'country_id' => 77,
                'region_id' => NULL,
                'name' => 'Jabal Lubnan',
                'full_name' => NULL,
                'code' => 'JL',
            ),
            204 => 
            array (
                'id' => 1205,
                'country_id' => 77,
                'region_id' => NULL,
                'name' => 'An-Nabatiyah',
                'full_name' => NULL,
                'code' => 'NA',
            ),
            205 => 
            array (
                'id' => 1206,
                'country_id' => 77,
                'region_id' => NULL,
                'name' => 'Al-Janub',
                'full_name' => NULL,
                'code' => 'JA',
            ),
            206 => 
            array (
                'id' => 1207,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Gbarpolu',
                'full_name' => NULL,
                'code' => 'GBA',
            ),
            207 => 
            array (
                'id' => 1208,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Bong',
                'full_name' => NULL,
                'code' => 'BG',
            ),
            208 => 
            array (
                'id' => 1209,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Bopolu',
                'full_name' => NULL,
                'code' => 'BOP',
            ),
            209 => 
            array (
                'id' => 1210,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Bomi',
                'full_name' => NULL,
                'code' => 'BM',
            ),
            210 => 
            array (
                'id' => 1211,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Grand Bassa',
                'full_name' => NULL,
                'code' => 'GB',
            ),
            211 => 
            array (
                'id' => 1212,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Grand Gedeh',
                'full_name' => NULL,
                'code' => 'GG',
            ),
            212 => 
            array (
                'id' => 1213,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Grand Cape Mount',
                'full_name' => NULL,
                'code' => 'CM',
            ),
            213 => 
            array (
                'id' => 1214,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Grand Kru',
                'full_name' => NULL,
                'code' => 'GK',
            ),
            214 => 
            array (
                'id' => 1215,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Fish Town',
                'full_name' => NULL,
                'code' => 'FT',
            ),
            215 => 
            array (
                'id' => 1216,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'River Gee',
                'full_name' => NULL,
                'code' => 'RG',
            ),
            216 => 
            array (
                'id' => 1217,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'River Cess',
                'full_name' => NULL,
                'code' => 'RI',
            ),
            217 => 
            array (
                'id' => 1218,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Lofa',
                'full_name' => NULL,
                'code' => 'LO',
            ),
            218 => 
            array (
                'id' => 1219,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Margibi',
                'full_name' => NULL,
                'code' => 'MG',
            ),
            219 => 
            array (
                'id' => 1220,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Maryland',
                'full_name' => NULL,
                'code' => 'MY',
            ),
            220 => 
            array (
                'id' => 1221,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Montserrado',
                'full_name' => NULL,
                'code' => 'MO',
            ),
            221 => 
            array (
                'id' => 1222,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Nimba',
                'full_name' => NULL,
                'code' => 'NI',
            ),
            222 => 
            array (
                'id' => 1223,
                'country_id' => 37,
                'region_id' => NULL,
                'name' => 'Sinoe',
                'full_name' => NULL,
                'code' => 'SI',
            ),
            223 => 
            array (
                'id' => 1224,
                'country_id' => 132,
                'region_id' => NULL,
                'name' => 'Alytus',
                'full_name' => NULL,
                'code' => 'AL',
            ),
            224 => 
            array (
                'id' => 1225,
                'country_id' => 132,
                'region_id' => NULL,
                'name' => 'Kaunas',
                'full_name' => NULL,
                'code' => 'KA',
            ),
            225 => 
            array (
                'id' => 1226,
                'country_id' => 132,
                'region_id' => NULL,
                'name' => 'Klaipeda',
                'full_name' => NULL,
                'code' => 'KL',
            ),
            226 => 
            array (
                'id' => 1227,
                'country_id' => 132,
                'region_id' => NULL,
                'name' => 'Marijampole',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            227 => 
            array (
                'id' => 1228,
                'country_id' => 132,
                'region_id' => NULL,
                'name' => 'Panevezys',
                'full_name' => NULL,
                'code' => 'PA',
            ),
            228 => 
            array (
                'id' => 1229,
                'country_id' => 132,
                'region_id' => NULL,
                'name' => 'Taurages',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            229 => 
            array (
                'id' => 1230,
                'country_id' => 132,
                'region_id' => NULL,
                'name' => 'Telsiu',
                'full_name' => NULL,
                'code' => 'TE',
            ),
            230 => 
            array (
                'id' => 1231,
                'country_id' => 132,
                'region_id' => NULL,
                'name' => 'Vilnius',
                'full_name' => NULL,
                'code' => 'VI',
            ),
            231 => 
            array (
                'id' => 1232,
                'country_id' => 132,
                'region_id' => NULL,
                'name' => 'Utenos',
                'full_name' => NULL,
                'code' => 'UT',
            ),
            232 => 
            array (
                'id' => 1233,
                'country_id' => 132,
                'region_id' => NULL,
                'name' => 'Siauliai',
                'full_name' => NULL,
                'code' => 'SI',
            ),
            233 => 
            array (
                'id' => 1234,
                'country_id' => 132,
                'region_id' => NULL,
                'name' => 'Akmenes',
                'full_name' => NULL,
                'code' => 'AKM',
            ),
            234 => 
            array (
                'id' => 1235,
                'country_id' => 152,
                'region_id' => NULL,
                'name' => 'Diekirch',
                'full_name' => NULL,
                'code' => 'DD',
            ),
            235 => 
            array (
                'id' => 1236,
                'country_id' => 152,
                'region_id' => NULL,
                'name' => 'Grevenmacher',
                'full_name' => NULL,
                'code' => 'GG',
            ),
            236 => 
            array (
                'id' => 1237,
                'country_id' => 152,
                'region_id' => NULL,
                'name' => 'Luxembourg',
                'full_name' => NULL,
                'code' => 'LL',
            ),
            237 => 
            array (
                'id' => 1238,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Byumba',
                'full_name' => NULL,
                'code' => 'BY',
            ),
            238 => 
            array (
                'id' => 1239,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Butare',
                'full_name' => NULL,
                'code' => 'BU',
            ),
            239 => 
            array (
                'id' => 1240,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Nyanza',
                'full_name' => NULL,
                'code' => 'NY',
            ),
            240 => 
            array (
                'id' => 1241,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Kibungo',
                'full_name' => NULL,
                'code' => 'KG',
            ),
            241 => 
            array (
                'id' => 1242,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Kibuye',
                'full_name' => NULL,
                'code' => 'KY',
            ),
            242 => 
            array (
                'id' => 1243,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Kigali-Ngali',
                'full_name' => NULL,
                'code' => 'KR',
            ),
            243 => 
            array (
                'id' => 1244,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Kigali-Ville',
                'full_name' => NULL,
                'code' => 'KV',
            ),
            244 => 
            array (
                'id' => 1245,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Gikongoro',
                'full_name' => NULL,
                'code' => 'GK',
            ),
            245 => 
            array (
                'id' => 1246,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Gisenyi',
                'full_name' => NULL,
                'code' => 'GS',
            ),
            246 => 
            array (
                'id' => 1247,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Gitarama',
                'full_name' => NULL,
                'code' => 'GT',
            ),
            247 => 
            array (
                'id' => 1248,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Kabuga',
                'full_name' => NULL,
                'code' => 'KA',
            ),
            248 => 
            array (
                'id' => 1249,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Rwamagana',
                'full_name' => NULL,
                'code' => 'RW',
            ),
            249 => 
            array (
                'id' => 1250,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Ruhango',
                'full_name' => NULL,
                'code' => 'RH',
            ),
            250 => 
            array (
                'id' => 1251,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Ruhengeri',
                'full_name' => NULL,
                'code' => 'RU',
            ),
            251 => 
            array (
                'id' => 1252,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Cyangugu',
                'full_name' => NULL,
                'code' => 'CY',
            ),
            252 => 
            array (
                'id' => 1253,
                'country_id' => 4,
                'region_id' => NULL,
                'name' => 'Umutara',
                'full_name' => NULL,
                'code' => 'UM',
            ),
            253 => 
            array (
                'id' => 1254,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Alba Iulia',
                'full_name' => NULL,
                'code' => 'AL',
            ),
            254 => 
            array (
                'id' => 1255,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Arad',
                'full_name' => NULL,
                'code' => 'AR',
            ),
            255 => 
            array (
                'id' => 1256,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Oradea',
                'full_name' => NULL,
                'code' => 'OR',
            ),
            256 => 
            array (
                'id' => 1257,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Bacau',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            257 => 
            array (
                'id' => 1258,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Baia Mare',
                'full_name' => NULL,
                'code' => 'BM',
            ),
            258 => 
            array (
                'id' => 1259,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Bistrita',
                'full_name' => NULL,
                'code' => 'BN',
            ),
            259 => 
            array (
                'id' => 1260,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Botosani',
                'full_name' => NULL,
                'code' => 'BO',
            ),
            260 => 
            array (
                'id' => 1261,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Bucuresti',
                'full_name' => NULL,
                'code' => 'BC',
            ),
            261 => 
            array (
                'id' => 1262,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Brasov',
                'full_name' => NULL,
                'code' => 'BS',
            ),
            262 => 
            array (
                'id' => 1263,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Braila',
                'full_name' => NULL,
                'code' => 'BL',
            ),
            263 => 
            array (
                'id' => 1264,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Buzau',
                'full_name' => NULL,
                'code' => 'BZ',
            ),
            264 => 
            array (
                'id' => 1265,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Drobeta-Turnu Severin',
                'full_name' => NULL,
                'code' => 'DT',
            ),
            265 => 
            array (
                'id' => 1266,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Deva',
                'full_name' => NULL,
                'code' => 'DE',
            ),
            266 => 
            array (
                'id' => 1267,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Timisoara',
                'full_name' => NULL,
                'code' => 'TI',
            ),
            267 => 
            array (
                'id' => 1268,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Focsani',
                'full_name' => NULL,
                'code' => 'FO',
            ),
            268 => 
            array (
                'id' => 1269,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Galati',
                'full_name' => NULL,
                'code' => 'GL',
            ),
            269 => 
            array (
                'id' => 1270,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Giurgiu',
                'full_name' => NULL,
                'code' => 'GG',
            ),
            270 => 
            array (
                'id' => 1271,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Constanta',
                'full_name' => NULL,
                'code' => 'CT',
            ),
            271 => 
            array (
                'id' => 1272,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Craiova',
                'full_name' => NULL,
                'code' => 'DO',
            ),
            272 => 
            array (
                'id' => 1273,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Calarasi',
                'full_name' => NULL,
                'code' => 'CR',
            ),
            273 => 
            array (
                'id' => 1274,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Cluj-Napoca',
                'full_name' => NULL,
                'code' => 'CN',
            ),
            274 => 
            array (
                'id' => 1275,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'XRimnicu Vilcea',
                'full_name' => NULL,
                'code' => 'VI',
            ),
            275 => 
            array (
                'id' => 1276,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Resita',
                'full_name' => NULL,
                'code' => 'RE',
            ),
            276 => 
            array (
                'id' => 1277,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Miercurea-Ciuc',
                'full_name' => NULL,
                'code' => 'MC',
            ),
            277 => 
            array (
                'id' => 1278,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Pitesti',
                'full_name' => NULL,
                'code' => 'PI',
            ),
            278 => 
            array (
                'id' => 1279,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Piatra Neamt',
                'full_name' => NULL,
                'code' => 'PN',
            ),
            279 => 
            array (
                'id' => 1280,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Ploiesti',
                'full_name' => NULL,
                'code' => 'PL',
            ),
            280 => 
            array (
                'id' => 1281,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Satu Mare',
                'full_name' => NULL,
                'code' => 'SM',
            ),
            281 => 
            array (
                'id' => 1282,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Sfantu-Gheorghe',
                'full_name' => NULL,
                'code' => 'SG',
            ),
            282 => 
            array (
                'id' => 1283,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Slatina',
                'full_name' => NULL,
                'code' => 'ST',
            ),
            283 => 
            array (
                'id' => 1284,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Slobozia',
                'full_name' => NULL,
                'code' => 'SB',
            ),
            284 => 
            array (
                'id' => 1285,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Suceava',
                'full_name' => NULL,
                'code' => 'SU',
            ),
            285 => 
            array (
                'id' => 1286,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Targovişte',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            286 => 
            array (
                'id' => 1287,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Tirgu Mures',
                'full_name' => NULL,
                'code' => 'TM',
            ),
            287 => 
            array (
                'id' => 1288,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Tirgu-Jiu',
                'full_name' => NULL,
                'code' => 'TJ',
            ),
            288 => 
            array (
                'id' => 1289,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Tulcea',
                'full_name' => NULL,
                'code' => 'TU',
            ),
            289 => 
            array (
                'id' => 1290,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Vaslui',
                'full_name' => NULL,
                'code' => 'VA',
            ),
            290 => 
            array (
                'id' => 1291,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Sibiu',
                'full_name' => NULL,
                'code' => 'SO',
            ),
            291 => 
            array (
                'id' => 1292,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Iasi',
                'full_name' => NULL,
                'code' => 'IS',
            ),
            292 => 
            array (
                'id' => 1293,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Alexandria',
                'full_name' => NULL,
                'code' => 'AD',
            ),
            293 => 
            array (
                'id' => 1294,
                'country_id' => 126,
                'region_id' => NULL,
                'name' => 'Zalau',
                'full_name' => NULL,
                'code' => 'ZA',
            ),
            294 => 
            array (
                'id' => 1295,
                'country_id' => 3,
                'region_id' => NULL,
                'name' => 'Antsiranana',
                'full_name' => NULL,
                'code' => 'AS',
            ),
            295 => 
            array (
                'id' => 1296,
                'country_id' => 3,
                'region_id' => NULL,
                'name' => 'Fianarantsoa',
                'full_name' => NULL,
                'code' => 'FN',
            ),
            296 => 
            array (
                'id' => 1297,
                'country_id' => 3,
                'region_id' => NULL,
                'name' => 'Mahajanga',
                'full_name' => NULL,
                'code' => 'MJ',
            ),
            297 => 
            array (
                'id' => 1298,
                'country_id' => 3,
                'region_id' => NULL,
                'name' => 'Antananarivo',
                'full_name' => NULL,
                'code' => 'AN',
            ),
            298 => 
            array (
                'id' => 1299,
                'country_id' => 3,
                'region_id' => NULL,
                'name' => 'Toamasina',
                'full_name' => NULL,
                'code' => 'TM',
            ),
            299 => 
            array (
                'id' => 1300,
                'country_id' => 3,
                'region_id' => NULL,
                'name' => 'Toliary',
                'full_name' => NULL,
                'code' => 'TL',
            ),
            300 => 
            array (
                'id' => 1301,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'Addu Atoll',
                'full_name' => NULL,
                'code' => 'ADD',
            ),
            301 => 
            array (
                'id' => 1302,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'North Ari Atoll',
                'full_name' => NULL,
                'code' => 'AAD',
            ),
            302 => 
            array (
                'id' => 1303,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'North Thiladhunmathi',
                'full_name' => NULL,
                'code' => 'THD',
            ),
            303 => 
            array (
                'id' => 1304,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'North Maalhosmadhulu',
                'full_name' => NULL,
                'code' => 'MAD',
            ),
            304 => 
            array (
                'id' => 1305,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'North Miladhunmadhulu',
                'full_name' => NULL,
                'code' => 'MLD',
            ),
            305 => 
            array (
                'id' => 1306,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'North Nilandhe Atoll',
                'full_name' => NULL,
                'code' => 'NAD',
            ),
            306 => 
            array (
                'id' => 1307,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'North Huvadhu Atoll',
                'full_name' => NULL,
                'code' => 'HAD',
            ),
            307 => 
            array (
                'id' => 1308,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'Faadhippolhu',
                'full_name' => NULL,
                'code' => 'FAA',
            ),
            308 => 
            array (
                'id' => 1309,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'Felidhu Atoll',
                'full_name' => NULL,
                'code' => 'FEA',
            ),
            309 => 
            array (
                'id' => 1310,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'Foammulah',
                'full_name' => NULL,
                'code' => 'FMU',
            ),
            310 => 
            array (
                'id' => 1311,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'Hadhdhunmathi',
                'full_name' => NULL,
                'code' => 'HDH',
            ),
            311 => 
            array (
                'id' => 1312,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'Kolhumadulu',
                'full_name' => NULL,
                'code' => 'KLH',
            ),
            312 => 
            array (
                'id' => 1313,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'Male',
                'full_name' => NULL,
                'code' => 'MAL',
            ),
            313 => 
            array (
                'id' => 1314,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'Male Atoll',
                'full_name' => NULL,
                'code' => 'MAA',
            ),
            314 => 
            array (
                'id' => 1315,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'Mulakatholhu',
                'full_name' => NULL,
                'code' => 'MUA',
            ),
            315 => 
            array (
                'id' => 1316,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'South Ari Atoll',
                'full_name' => NULL,
                'code' => 'AAU',
            ),
            316 => 
            array (
                'id' => 1317,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'South Thiladhunmathi',
                'full_name' => NULL,
                'code' => 'THU',
            ),
            317 => 
            array (
                'id' => 1318,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'South Maalhosmadulu',
                'full_name' => NULL,
                'code' => 'MAU',
            ),
            318 => 
            array (
                'id' => 1319,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'South Miladhunmadhulu',
                'full_name' => NULL,
                'code' => 'MLU',
            ),
            319 => 
            array (
                'id' => 1320,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'South Nilandhe Atoll',
                'full_name' => NULL,
                'code' => 'NAU',
            ),
            320 => 
            array (
                'id' => 1321,
                'country_id' => 80,
                'region_id' => NULL,
                'name' => 'South Huvadhu Atoll',
                'full_name' => NULL,
                'code' => 'HAU',
            ),
            321 => 
            array (
                'id' => 1322,
                'country_id' => 47,
                'region_id' => NULL,
                'name' => 'Northern',
                'full_name' => NULL,
                'code' => 'N',
            ),
            322 => 
            array (
                'id' => 1323,
                'country_id' => 47,
                'region_id' => NULL,
                'name' => 'Southern',
                'full_name' => NULL,
                'code' => 'S',
            ),
            323 => 
            array (
                'id' => 1324,
                'country_id' => 47,
                'region_id' => NULL,
                'name' => 'Central',
                'full_name' => NULL,
                'code' => 'C',
            ),
            324 => 
            array (
                'id' => 1325,
                'country_id' => 21,
                'region_id' => NULL,
                'name' => 'Bamako',
                'full_name' => NULL,
                'code' => 'CD',
            ),
            325 => 
            array (
                'id' => 1326,
                'country_id' => 21,
                'region_id' => NULL,
                'name' => 'Kidal',
                'full_name' => NULL,
                'code' => 'KD',
            ),
            326 => 
            array (
                'id' => 1327,
                'country_id' => 21,
                'region_id' => NULL,
                'name' => 'Gao',
                'full_name' => NULL,
                'code' => 'GA',
            ),
            327 => 
            array (
                'id' => 1328,
                'country_id' => 21,
                'region_id' => NULL,
                'name' => 'Kayes',
                'full_name' => NULL,
                'code' => 'KY',
            ),
            328 => 
            array (
                'id' => 1329,
                'country_id' => 21,
                'region_id' => NULL,
                'name' => 'Koulikoro',
                'full_name' => NULL,
                'code' => 'KL',
            ),
            329 => 
            array (
                'id' => 1330,
                'country_id' => 21,
                'region_id' => NULL,
                'name' => 'Mopti',
                'full_name' => NULL,
                'code' => 'MP',
            ),
            330 => 
            array (
                'id' => 1331,
                'country_id' => 21,
                'region_id' => NULL,
                'name' => 'Segou',
                'full_name' => NULL,
                'code' => 'SG',
            ),
            331 => 
            array (
                'id' => 1332,
                'country_id' => 21,
                'region_id' => NULL,
                'name' => 'Tombouctou',
                'full_name' => NULL,
                'code' => 'TB',
            ),
            332 => 
            array (
                'id' => 1333,
                'country_id' => 21,
                'region_id' => NULL,
                'name' => 'Sikasso',
                'full_name' => NULL,
                'code' => 'SK',
            ),
            333 => 
            array (
                'id' => 1334,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Adrar',
                'full_name' => NULL,
                'code' => 'AD',
            ),
            334 => 
            array (
                'id' => 1335,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'El-Acaba',
                'full_name' => NULL,
                'code' => 'AS',
            ),
            335 => 
            array (
                'id' => 1336,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Brakna',
                'full_name' => NULL,
                'code' => 'BR',
            ),
            336 => 
            array (
                'id' => 1337,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Hodh el-Gharbi',
                'full_name' => NULL,
                'code' => 'HG',
            ),
            337 => 
            array (
                'id' => 1338,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Gorgol',
                'full_name' => NULL,
                'code' => 'GO',
            ),
            338 => 
            array (
                'id' => 1339,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Guidimaka',
                'full_name' => NULL,
                'code' => 'GM',
            ),
            339 => 
            array (
                'id' => 1340,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Dakhlet Nouadhibou',
                'full_name' => NULL,
                'code' => 'DN',
            ),
            340 => 
            array (
                'id' => 1341,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Nouakchott',
                'full_name' => NULL,
                'code' => 'NO',
            ),
            341 => 
            array (
                'id' => 1342,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Tagant',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            342 => 
            array (
                'id' => 1343,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Trarza',
                'full_name' => NULL,
                'code' => 'TR',
            ),
            343 => 
            array (
                'id' => 1344,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Tiris Zemmour',
                'full_name' => NULL,
                'code' => 'TZ',
            ),
            344 => 
            array (
                'id' => 1345,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Hodh ech-Chargui',
                'full_name' => NULL,
                'code' => 'HC',
            ),
            345 => 
            array (
                'id' => 1346,
                'country_id' => 23,
                'region_id' => NULL,
                'name' => 'Inchiri',
                'full_name' => NULL,
                'code' => 'IN',
            ),
            346 => 
            array (
                'id' => 1347,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Bayanhongor',
                'full_name' => NULL,
                'code' => '69',
            ),
            347 => 
            array (
                'id' => 1348,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Bayan-Ulgiy',
                'full_name' => NULL,
                'code' => '71',
            ),
            348 => 
            array (
                'id' => 1349,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Bulgan',
                'full_name' => NULL,
                'code' => '67',
            ),
            349 => 
            array (
                'id' => 1350,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Darhan-Uul',
                'full_name' => NULL,
                'code' => '37',
            ),
            350 => 
            array (
                'id' => 1351,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Dornod',
                'full_name' => NULL,
                'code' => '61',
            ),
            351 => 
            array (
                'id' => 1352,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Dornogovi',
                'full_name' => NULL,
                'code' => '63',
            ),
            352 => 
            array (
                'id' => 1353,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Orhon',
                'full_name' => NULL,
                'code' => '35',
            ),
            353 => 
            array (
                'id' => 1354,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Govi-Altay',
                'full_name' => NULL,
                'code' => '65',
            ),
            354 => 
            array (
                'id' => 1355,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Govisumber',
                'full_name' => NULL,
                'code' => '64',
            ),
            355 => 
            array (
                'id' => 1356,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Arhangay',
                'full_name' => NULL,
                'code' => '73',
            ),
            356 => 
            array (
                'id' => 1357,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Hovd',
                'full_name' => NULL,
                'code' => '43',
            ),
            357 => 
            array (
                'id' => 1358,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Hentiy',
                'full_name' => NULL,
                'code' => '39',
            ),
            358 => 
            array (
                'id' => 1359,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Hovsgol',
                'full_name' => NULL,
                'code' => '41',
            ),
            359 => 
            array (
                'id' => 1360,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Umnogovi',
                'full_name' => NULL,
                'code' => 'UMN',
            ),
            360 => 
            array (
                'id' => 1361,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Uvorhangay',
                'full_name' => NULL,
                'code' => 'UVO',
            ),
            361 => 
            array (
                'id' => 1362,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Selenge',
                'full_name' => NULL,
                'code' => '49',
            ),
            362 => 
            array (
                'id' => 1363,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Suhbaatar',
                'full_name' => NULL,
                'code' => '51',
            ),
            363 => 
            array (
                'id' => 1364,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Uvs',
                'full_name' => NULL,
                'code' => '46',
            ),
            364 => 
            array (
                'id' => 1365,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Ulaanbaatar hot',
                'full_name' => NULL,
                'code' => '1',
            ),
            365 => 
            array (
                'id' => 1366,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Dzavhan',
                'full_name' => NULL,
                'code' => '57',
            ),
            366 => 
            array (
                'id' => 1367,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Dundgovi',
                'full_name' => NULL,
                'code' => '59',
            ),
            367 => 
            array (
                'id' => 1368,
                'country_id' => 83,
                'region_id' => NULL,
                'name' => 'Tov',
                'full_name' => NULL,
                'code' => '47',
            ),
            368 => 
            array (
                'id' => 1369,
                'country_id' => 93,
                'region_id' => NULL,
                'name' => 'Dhaka',
                'full_name' => NULL,
                'code' => 'DAC',
            ),
            369 => 
            array (
                'id' => 1370,
                'country_id' => 93,
                'region_id' => NULL,
                'name' => 'Chittagong',
                'full_name' => NULL,
                'code' => 'CGP',
            ),
            370 => 
            array (
                'id' => 1371,
                'country_id' => 93,
                'region_id' => NULL,
                'name' => 'Khulna',
                'full_name' => NULL,
                'code' => 'KHL',
            ),
            371 => 
            array (
                'id' => 1372,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Arequipa',
                'full_name' => NULL,
                'code' => 'AR',
            ),
            372 => 
            array (
                'id' => 1373,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Apurimac',
                'full_name' => NULL,
                'code' => 'AP',
            ),
            373 => 
            array (
                'id' => 1374,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Ayacucho',
                'full_name' => NULL,
                'code' => 'AY',
            ),
            374 => 
            array (
                'id' => 1375,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Ancash',
                'full_name' => NULL,
                'code' => 'AN',
            ),
            375 => 
            array (
                'id' => 1376,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Juliaca',
                'full_name' => NULL,
                'code' => 'JUL',
            ),
            376 => 
            array (
                'id' => 1377,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Junin',
                'full_name' => NULL,
                'code' => 'JU',
            ),
            377 => 
            array (
                'id' => 1378,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Cajamarca',
                'full_name' => NULL,
                'code' => 'CJ',
            ),
            378 => 
            array (
                'id' => 1379,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Callao',
                'full_name' => NULL,
                'code' => 'CL',
            ),
            379 => 
            array (
                'id' => 1380,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Cusco',
                'full_name' => NULL,
                'code' => 'CU',
            ),
            380 => 
            array (
                'id' => 1381,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'La Libertad',
                'full_name' => NULL,
                'code' => 'LD',
            ),
            381 => 
            array (
                'id' => 1382,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Lambayeque',
                'full_name' => NULL,
                'code' => 'LY',
            ),
            382 => 
            array (
                'id' => 1383,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Lima',
                'full_name' => NULL,
                'code' => 'LI',
            ),
            383 => 
            array (
                'id' => 1384,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Loreto',
                'full_name' => NULL,
                'code' => 'LO',
            ),
            384 => 
            array (
                'id' => 1385,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Madre de Dios',
                'full_name' => NULL,
                'code' => 'MD',
            ),
            385 => 
            array (
                'id' => 1386,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Moquegua',
                'full_name' => NULL,
                'code' => 'MO',
            ),
            386 => 
            array (
                'id' => 1387,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Pasco',
                'full_name' => NULL,
                'code' => 'PA',
            ),
            387 => 
            array (
                'id' => 1388,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Piura',
                'full_name' => NULL,
                'code' => 'PI',
            ),
            388 => 
            array (
                'id' => 1389,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Puno',
                'full_name' => NULL,
                'code' => 'PU',
            ),
            389 => 
            array (
                'id' => 1390,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Chimbote',
                'full_name' => NULL,
                'code' => 'CHM',
            ),
            390 => 
            array (
                'id' => 1391,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Chincha Alta',
                'full_name' => NULL,
                'code' => 'CHI',
            ),
            391 => 
            array (
                'id' => 1392,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'San Martin',
                'full_name' => NULL,
                'code' => 'SM',
            ),
            392 => 
            array (
                'id' => 1393,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Sullana',
                'full_name' => NULL,
                'code' => 'SUL',
            ),
            393 => 
            array (
                'id' => 1394,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Tacna',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            394 => 
            array (
                'id' => 1395,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Tumbes',
                'full_name' => NULL,
                'code' => 'TU',
            ),
            395 => 
            array (
                'id' => 1396,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Huanuco',
                'full_name' => NULL,
                'code' => 'HO',
            ),
            396 => 
            array (
                'id' => 1397,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Huancavelica',
                'full_name' => NULL,
                'code' => 'HV',
            ),
            397 => 
            array (
                'id' => 1398,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Ucayali',
                'full_name' => NULL,
                'code' => 'UC',
            ),
            398 => 
            array (
                'id' => 1399,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Amazonas',
                'full_name' => NULL,
                'code' => 'AM',
            ),
            399 => 
            array (
                'id' => 1400,
                'country_id' => 190,
                'region_id' => NULL,
                'name' => 'Ica',
                'full_name' => NULL,
                'code' => 'IC',
            ),
            400 => 
            array (
                'id' => 1401,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Bago',
                'full_name' => NULL,
                'code' => 'BG',
            ),
            401 => 
            array (
                'id' => 1402,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Shan',
                'full_name' => NULL,
                'code' => 'SH',
            ),
            402 => 
            array (
                'id' => 1403,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Tanintharyi',
                'full_name' => NULL,
                'code' => 'TN',
            ),
            403 => 
            array (
                'id' => 1404,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Kayin',
                'full_name' => NULL,
                'code' => 'KN',
            ),
            404 => 
            array (
                'id' => 1405,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Kachin',
                'full_name' => NULL,
                'code' => 'KC',
            ),
            405 => 
            array (
                'id' => 1406,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Kayah',
                'full_name' => NULL,
                'code' => 'KH',
            ),
            406 => 
            array (
                'id' => 1407,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Magway',
                'full_name' => NULL,
                'code' => 'MG',
            ),
            407 => 
            array (
                'id' => 1408,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Mandalay',
                'full_name' => NULL,
                'code' => 'MD',
            ),
            408 => 
            array (
                'id' => 1409,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Mon',
                'full_name' => NULL,
                'code' => 'MN',
            ),
            409 => 
            array (
                'id' => 1410,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Chin',
                'full_name' => NULL,
                'code' => 'CH',
            ),
            410 => 
            array (
                'id' => 1411,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Rakhine',
                'full_name' => NULL,
                'code' => 'RK',
            ),
            411 => 
            array (
                'id' => 1412,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Sagaing',
                'full_name' => NULL,
                'code' => 'SG',
            ),
            412 => 
            array (
                'id' => 1413,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Yangon',
                'full_name' => NULL,
                'code' => 'YG',
            ),
            413 => 
            array (
                'id' => 1414,
                'country_id' => 86,
                'region_id' => NULL,
                'name' => 'Ayeyarwady',
                'full_name' => NULL,
                'code' => 'AY',
            ),
            414 => 
            array (
                'id' => 1415,
                'country_id' => 46,
                'region_id' => NULL,
                'name' => 'Tangier',
                'full_name' => NULL,
                'code' => 'TGR',
            ),
            415 => 
            array (
                'id' => 1416,
                'country_id' => 46,
                'region_id' => NULL,
                'name' => 'Tetouan',
                'full_name' => NULL,
                'code' => 'TET',
            ),
            416 => 
            array (
                'id' => 1417,
                'country_id' => 46,
                'region_id' => NULL,
                'name' => 'Fes',
                'full_name' => NULL,
                'code' => 'FES',
            ),
            417 => 
            array (
                'id' => 1418,
                'country_id' => 46,
                'region_id' => NULL,
                'name' => 'Casablanca',
                'full_name' => NULL,
                'code' => 'CBL',
            ),
            418 => 
            array (
                'id' => 1419,
                'country_id' => 46,
                'region_id' => NULL,
                'name' => 'Rabat',
                'full_name' => NULL,
                'code' => 'RSA',
            ),
            419 => 
            array (
                'id' => 1420,
                'country_id' => 46,
                'region_id' => NULL,
                'name' => 'Marrakech',
                'full_name' => NULL,
                'code' => 'MRK',
            ),
            420 => 
            array (
                'id' => 1421,
                'country_id' => 46,
                'region_id' => NULL,
                'name' => 'Meknes',
                'full_name' => NULL,
                'code' => 'MKN',
            ),
            421 => 
            array (
                'id' => 1422,
                'country_id' => 46,
                'region_id' => NULL,
                'name' => 'Oujda',
                'full_name' => NULL,
                'code' => 'OUJ',
            ),
            422 => 
            array (
                'id' => 1423,
                'country_id' => 46,
                'region_id' => NULL,
                'name' => 'Western Sahara',
                'full_name' => NULL,
                'code' => 'WSH',
            ),
            423 => 
            array (
                'id' => 1424,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Aguascalientes',
                'full_name' => NULL,
                'code' => 'AGU',
            ),
            424 => 
            array (
                'id' => 1425,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Acapulco',
                'full_name' => NULL,
                'code' => 'ACA',
            ),
            425 => 
            array (
                'id' => 1426,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Hermosillo',
                'full_name' => NULL,
                'code' => 'HMO',
            ),
            426 => 
            array (
                'id' => 1427,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Campeche',
                'full_name' => NULL,
                'code' => 'CAM',
            ),
            427 => 
            array (
                'id' => 1428,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Obregon',
                'full_name' => NULL,
                'code' => 'OBR',
            ),
            428 => 
            array (
                'id' => 1429,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Orizaba',
                'full_name' => NULL,
                'code' => 'ORI',
            ),
            429 => 
            array (
                'id' => 1430,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Valles',
                'full_name' => NULL,
                'code' => 'VHM',
            ),
            430 => 
            array (
                'id' => 1431,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Puerto Vallarta',
                'full_name' => NULL,
                'code' => 'PVR',
            ),
            431 => 
            array (
                'id' => 1432,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Villahermosa',
                'full_name' => NULL,
                'code' => 'VSA',
            ),
            432 => 
            array (
                'id' => 1433,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Poza Rica de Hidalgo',
                'full_name' => NULL,
                'code' => 'PRH',
            ),
            433 => 
            array (
                'id' => 1434,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Tijuana',
                'full_name' => NULL,
                'code' => 'TIJ',
            ),
            434 => 
            array (
                'id' => 1435,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Durango',
                'full_name' => NULL,
                'code' => 'DUR',
            ),
            435 => 
            array (
                'id' => 1436,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Ensenada',
                'full_name' => NULL,
                'code' => 'ESE',
            ),
            436 => 
            array (
                'id' => 1437,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Guadalajara',
                'full_name' => NULL,
                'code' => 'GDL',
            ),
            437 => 
            array (
                'id' => 1438,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Guanajuato',
                'full_name' => NULL,
                'code' => 'GUA',
            ),
            438 => 
            array (
                'id' => 1439,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Jalapa',
                'full_name' => NULL,
                'code' => 'JAL',
            ),
            439 => 
            array (
                'id' => 1440,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Juarez',
                'full_name' => NULL,
                'code' => 'JUZ',
            ),
            440 => 
            array (
                'id' => 1441,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Benito Juare',
                'full_name' => NULL,
                'code' => 'BJU',
            ),
            441 => 
            array (
                'id' => 1442,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Carmen',
                'full_name' => NULL,
                'code' => 'CAR',
            ),
            442 => 
            array (
                'id' => 1443,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Colima',
                'full_name' => NULL,
                'code' => 'COL',
            ),
            443 => 
            array (
                'id' => 1444,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Queretaro',
                'full_name' => NULL,
                'code' => 'QUE',
            ),
            444 => 
            array (
                'id' => 1445,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Cuernavaca',
                'full_name' => NULL,
                'code' => 'CVC',
            ),
            445 => 
            array (
                'id' => 1446,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Culiacan',
                'full_name' => NULL,
                'code' => 'CUL',
            ),
            446 => 
            array (
                'id' => 1447,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Coatzacoalcos',
                'full_name' => NULL,
                'code' => 'COA',
            ),
            447 => 
            array (
                'id' => 1448,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'La Paz',
                'full_name' => NULL,
                'code' => 'LAP',
            ),
            448 => 
            array (
                'id' => 1449,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Leon',
                'full_name' => NULL,
                'code' => 'LEN',
            ),
            449 => 
            array (
                'id' => 1450,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Reynosa',
                'full_name' => NULL,
                'code' => 'REX',
            ),
            450 => 
            array (
                'id' => 1451,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Los Mochis',
                'full_name' => NULL,
                'code' => 'LMM',
            ),
            451 => 
            array (
                'id' => 1452,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Mazatlan',
                'full_name' => NULL,
                'code' => 'MZT',
            ),
            452 => 
            array (
                'id' => 1453,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Matamoros',
                'full_name' => NULL,
                'code' => 'MAM',
            ),
            453 => 
            array (
                'id' => 1454,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Merida',
                'full_name' => NULL,
                'code' => 'MID',
            ),
            454 => 
            array (
                'id' => 1455,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Monclova',
                'full_name' => NULL,
                'code' => 'LOV',
            ),
            455 => 
            array (
                'id' => 1456,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Monterrey',
                'full_name' => NULL,
                'code' => 'MTY',
            ),
            456 => 
            array (
                'id' => 1457,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Morelia',
                'full_name' => NULL,
                'code' => 'MLM',
            ),
            457 => 
            array (
                'id' => 1458,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Mexico City',
                'full_name' => NULL,
                'code' => 'MEX',
            ),
            458 => 
            array (
                'id' => 1459,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Mexicali',
                'full_name' => NULL,
                'code' => 'MXL',
            ),
            459 => 
            array (
                'id' => 1460,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Nogales',
                'full_name' => NULL,
                'code' => 'NOG',
            ),
            460 => 
            array (
                'id' => 1461,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Pachuca',
                'full_name' => NULL,
                'code' => 'PAC',
            ),
            461 => 
            array (
                'id' => 1462,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Puebla',
                'full_name' => NULL,
                'code' => 'PUE',
            ),
            462 => 
            array (
                'id' => 1463,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Chilpancingo',
                'full_name' => NULL,
                'code' => 'CHI',
            ),
            463 => 
            array (
                'id' => 1464,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Chihuahua',
                'full_name' => NULL,
                'code' => 'CHH',
            ),
            464 => 
            array (
                'id' => 1465,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Cheturnal',
                'full_name' => NULL,
                'code' => 'CTM',
            ),
            465 => 
            array (
                'id' => 1466,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Saltillo',
                'full_name' => NULL,
                'code' => 'SLW',
            ),
            466 => 
            array (
                'id' => 1467,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Zacatecas',
                'full_name' => NULL,
                'code' => 'ZAC',
            ),
            467 => 
            array (
                'id' => 1468,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Celaya',
                'full_name' => NULL,
                'code' => 'CLY',
            ),
            468 => 
            array (
                'id' => 1469,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'San Luis Potosi',
                'full_name' => NULL,
                'code' => 'SLP',
            ),
            469 => 
            array (
                'id' => 1470,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Tapachula',
                'full_name' => NULL,
                'code' => 'TAP',
            ),
            470 => 
            array (
                'id' => 1471,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Tampico',
                'full_name' => NULL,
                'code' => 'TAM',
            ),
            471 => 
            array (
                'id' => 1472,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Tlaxcala',
                'full_name' => NULL,
                'code' => 'TLA',
            ),
            472 => 
            array (
                'id' => 1473,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Tepic',
                'full_name' => NULL,
                'code' => 'TPQ',
            ),
            473 => 
            array (
                'id' => 1474,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Tehuacan',
                'full_name' => NULL,
                'code' => 'TCN',
            ),
            474 => 
            array (
                'id' => 1475,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Tuxtla Gutierrez',
                'full_name' => NULL,
                'code' => 'TGZ',
            ),
            475 => 
            array (
                'id' => 1476,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Torreon',
                'full_name' => NULL,
                'code' => 'TRC',
            ),
            476 => 
            array (
                'id' => 1477,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Toluca',
                'full_name' => NULL,
                'code' => 'TLC',
            ),
            477 => 
            array (
                'id' => 1478,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Oaxaca',
                'full_name' => NULL,
                'code' => 'OAX',
            ),
            478 => 
            array (
                'id' => 1479,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Victoria',
                'full_name' => NULL,
                'code' => 'VIC',
            ),
            479 => 
            array (
                'id' => 1480,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Veracruz',
                'full_name' => NULL,
                'code' => 'VER',
            ),
            480 => 
            array (
                'id' => 1481,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Uruapan',
                'full_name' => NULL,
                'code' => 'UPN',
            ),
            481 => 
            array (
                'id' => 1482,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Nuevo Laredo',
                'full_name' => NULL,
                'code' => 'NLE',
            ),
            482 => 
            array (
                'id' => 1483,
                'country_id' => 106,
                'region_id' => NULL,
                'name' => 'Irapuato',
                'full_name' => NULL,
                'code' => 'IRP',
            ),
            483 => 
            array (
                'id' => 1484,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Erongo',
                'full_name' => NULL,
                'code' => 'ER',
            ),
            484 => 
            array (
                'id' => 1485,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Ohangwena',
                'full_name' => NULL,
                'code' => 'OW',
            ),
            485 => 
            array (
                'id' => 1486,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Okavango',
                'full_name' => NULL,
                'code' => 'KV',
            ),
            486 => 
            array (
                'id' => 1487,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Omaheke',
                'full_name' => NULL,
                'code' => 'OK',
            ),
            487 => 
            array (
                'id' => 1488,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Omusati',
                'full_name' => NULL,
                'code' => 'OT',
            ),
            488 => 
            array (
                'id' => 1489,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Otjozondjupa',
                'full_name' => NULL,
                'code' => 'OJ',
            ),
            489 => 
            array (
                'id' => 1490,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Oshana',
                'full_name' => NULL,
                'code' => 'ON',
            ),
            490 => 
            array (
                'id' => 1491,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Oshikoto',
                'full_name' => NULL,
                'code' => 'OO',
            ),
            491 => 
            array (
                'id' => 1492,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Hardap',
                'full_name' => NULL,
                'code' => 'HA',
            ),
            492 => 
            array (
                'id' => 1493,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Khomas',
                'full_name' => NULL,
                'code' => 'KH',
            ),
            493 => 
            array (
                'id' => 1494,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Karas',
                'full_name' => NULL,
                'code' => 'KR',
            ),
            494 => 
            array (
                'id' => 1495,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Caprivi',
                'full_name' => NULL,
                'code' => 'CA',
            ),
            495 => 
            array (
                'id' => 1496,
                'country_id' => 43,
                'region_id' => NULL,
                'name' => 'Kunene',
                'full_name' => NULL,
                'code' => 'KU',
            ),
            496 => 
            array (
                'id' => 1497,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Upington',
                'full_name' => NULL,
                'code' => 'UTN',
            ),
            497 => 
            array (
                'id' => 1498,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Mount Ayliff',
                'full_name' => NULL,
                'code' => 'MAY',
            ),
            498 => 
            array (
                'id' => 1499,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Pietermaritzburg',
                'full_name' => NULL,
                'code' => 'PZB',
            ),
            499 => 
            array (
                'id' => 1500,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Pietersburg',
                'full_name' => NULL,
                'code' => 'PTG',
            ),
        ));
        \DB::table('world_cities')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Pretoria',
                'full_name' => NULL,
                'code' => 'PRY',
            ),
            1 => 
            array (
                'id' => 1502,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Bisho',
                'full_name' => NULL,
                'code' => 'BIY',
            ),
            2 => 
            array (
                'id' => 1503,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Bredasdorp',
                'full_name' => NULL,
                'code' => 'BDD',
            ),
            3 => 
            array (
                'id' => 1504,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Bloemfontein',
                'full_name' => NULL,
                'code' => 'BFN',
            ),
            4 => 
            array (
                'id' => 1505,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Bronkhorstspruit',
                'full_name' => NULL,
                'code' => 'BHT',
            ),
            5 => 
            array (
                'id' => 1506,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'De Aar',
                'full_name' => NULL,
                'code' => 'DAA',
            ),
            6 => 
            array (
                'id' => 1507,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Durban',
                'full_name' => NULL,
                'code' => 'DUR',
            ),
            7 => 
            array (
                'id' => 1508,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Dundee',
                'full_name' => NULL,
                'code' => 'DUN',
            ),
            8 => 
            array (
                'id' => 1509,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Barkley East',
                'full_name' => NULL,
                'code' => 'BAE',
            ),
            9 => 
            array (
                'id' => 1510,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'East London',
                'full_name' => NULL,
                'code' => 'ELS',
            ),
            10 => 
            array (
                'id' => 1511,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Vryburg',
                'full_name' => NULL,
                'code' => 'VRU',
            ),
            11 => 
            array (
                'id' => 1512,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Vereeniging',
                'full_name' => NULL,
                'code' => 'VGG',
            ),
            12 => 
            array (
                'id' => 1513,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Groblersdal',
                'full_name' => NULL,
                'code' => 'GBD',
            ),
            13 => 
            array (
                'id' => 1514,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Giyani',
                'full_name' => NULL,
                'code' => 'GIY',
            ),
            14 => 
            array (
                'id' => 1515,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Kimberley',
                'full_name' => NULL,
                'code' => 'KIM',
            ),
            15 => 
            array (
                'id' => 1516,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Cape Town',
                'full_name' => NULL,
                'code' => 'CPT',
            ),
            16 => 
            array (
                'id' => 1517,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Klerksdorp',
                'full_name' => NULL,
                'code' => 'KXE',
            ),
            17 => 
            array (
                'id' => 1518,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Kuruman',
                'full_name' => NULL,
                'code' => 'KMH',
            ),
            18 => 
            array (
                'id' => 1519,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Queenstown',
                'full_name' => NULL,
                'code' => 'UTW',
            ),
            19 => 
            array (
                'id' => 1520,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Ladysmith',
                'full_name' => NULL,
                'code' => 'LAY',
            ),
            20 => 
            array (
                'id' => 1521,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Randfontein',
                'full_name' => NULL,
                'code' => 'RFT',
            ),
            21 => 
            array (
                'id' => 1522,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Richards Bay',
                'full_name' => NULL,
                'code' => 'RCB',
            ),
            22 => 
            array (
                'id' => 1523,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Rustenburg',
                'full_name' => NULL,
                'code' => 'RSB',
            ),
            23 => 
            array (
                'id' => 1524,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Middelburg',
                'full_name' => NULL,
                'code' => 'MDB',
            ),
            24 => 
            array (
                'id' => 1525,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Mkuze',
                'full_name' => NULL,
                'code' => 'MZQ',
            ),
            25 => 
            array (
                'id' => 1526,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Moorreesburg',
                'full_name' => NULL,
                'code' => 'MOO',
            ),
            26 => 
            array (
                'id' => 1527,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Nelspruit',
                'full_name' => NULL,
                'code' => 'NLP',
            ),
            27 => 
            array (
                'id' => 1528,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Nylstroom',
                'full_name' => NULL,
                'code' => 'NYL',
            ),
            28 => 
            array (
                'id' => 1529,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Newcastle',
                'full_name' => NULL,
                'code' => 'NCS',
            ),
            29 => 
            array (
                'id' => 1530,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'George',
                'full_name' => NULL,
                'code' => 'GRJ',
            ),
            30 => 
            array (
                'id' => 1531,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Sasolburg',
                'full_name' => NULL,
                'code' => 'SAS',
            ),
            31 => 
            array (
                'id' => 1532,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Secunda',
                'full_name' => NULL,
                'code' => 'ZEC',
            ),
            32 => 
            array (
                'id' => 1533,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Ixopo',
                'full_name' => NULL,
                'code' => 'IXO',
            ),
            33 => 
            array (
                'id' => 1534,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Trompsburg',
                'full_name' => NULL,
                'code' => 'TPB',
            ),
            34 => 
            array (
                'id' => 1535,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Springbok',
                'full_name' => NULL,
                'code' => 'SBU',
            ),
            35 => 
            array (
                'id' => 1536,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Thulamahashe',
                'full_name' => NULL,
                'code' => 'TLH',
            ),
            36 => 
            array (
                'id' => 1537,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Thohoyandou',
                'full_name' => NULL,
                'code' => 'THY',
            ),
            37 => 
            array (
                'id' => 1538,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Witsieshoek',
                'full_name' => NULL,
                'code' => 'WSH',
            ),
            38 => 
            array (
                'id' => 1539,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Welkom',
                'full_name' => NULL,
                'code' => 'WEL',
            ),
            39 => 
            array (
                'id' => 1540,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Ulundi',
                'full_name' => NULL,
                'code' => 'ULD',
            ),
            40 => 
            array (
                'id' => 1541,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Umtata',
                'full_name' => NULL,
                'code' => 'UTT',
            ),
            41 => 
            array (
                'id' => 1542,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Worcester',
                'full_name' => NULL,
                'code' => 'WOR',
            ),
            42 => 
            array (
                'id' => 1543,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Beaufort West',
                'full_name' => NULL,
                'code' => 'BEW',
            ),
            43 => 
            array (
                'id' => 1544,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Port Shepstone',
                'full_name' => NULL,
                'code' => 'PSS',
            ),
            44 => 
            array (
                'id' => 1545,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Port Elizabeth',
                'full_name' => NULL,
                'code' => 'PLZ',
            ),
            45 => 
            array (
                'id' => 1546,
                'country_id' => 36,
                'region_id' => NULL,
                'name' => 'Johannesburg',
                'full_name' => NULL,
                'code' => 'JNB',
            ),
            46 => 
            array (
                'id' => 1547,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Bagmati',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            47 => 
            array (
                'id' => 1548,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Dhawalagiri',
                'full_name' => NULL,
                'code' => 'DH',
            ),
            48 => 
            array (
                'id' => 1549,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Gandaki',
                'full_name' => NULL,
                'code' => 'GA',
            ),
            49 => 
            array (
                'id' => 1550,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Kosi',
                'full_name' => NULL,
                'code' => 'KO',
            ),
            50 => 
            array (
                'id' => 1551,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Karnali',
                'full_name' => NULL,
                'code' => 'KA',
            ),
            51 => 
            array (
                'id' => 1552,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Janakpur',
                'full_name' => NULL,
                'code' => 'JA',
            ),
            52 => 
            array (
                'id' => 1553,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Rapti',
                'full_name' => NULL,
                'code' => 'RA',
            ),
            53 => 
            array (
                'id' => 1554,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Lumbini',
                'full_name' => NULL,
                'code' => 'LU',
            ),
            54 => 
            array (
                'id' => 1555,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Mahakali',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            55 => 
            array (
                'id' => 1556,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Mechi',
                'full_name' => NULL,
                'code' => 'ME',
            ),
            56 => 
            array (
                'id' => 1557,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Narayani',
                'full_name' => NULL,
                'code' => 'NA',
            ),
            57 => 
            array (
                'id' => 1558,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Bheri',
                'full_name' => NULL,
                'code' => 'BH',
            ),
            58 => 
            array (
                'id' => 1559,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Sogarmatha',
                'full_name' => NULL,
                'code' => 'SA',
            ),
            59 => 
            array (
                'id' => 1560,
                'country_id' => 97,
                'region_id' => NULL,
                'name' => 'Seti',
                'full_name' => NULL,
                'code' => 'SE',
            ),
            60 => 
            array (
                'id' => 1561,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Esteli',
                'full_name' => NULL,
                'code' => 'ES',
            ),
            61 => 
            array (
                'id' => 1562,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Atlantico Norte',
                'full_name' => NULL,
                'code' => 'AN',
            ),
            62 => 
            array (
                'id' => 1563,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Boaco',
                'full_name' => NULL,
                'code' => 'BO',
            ),
            63 => 
            array (
                'id' => 1564,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Granada',
                'full_name' => NULL,
                'code' => 'GR',
            ),
            64 => 
            array (
                'id' => 1565,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Carazo',
                'full_name' => NULL,
                'code' => 'CA',
            ),
            65 => 
            array (
                'id' => 1566,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Leon',
                'full_name' => NULL,
                'code' => 'LE',
            ),
            66 => 
            array (
                'id' => 1567,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Rivas',
                'full_name' => NULL,
                'code' => 'RV',
            ),
            67 => 
            array (
                'id' => 1568,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Madriz',
                'full_name' => NULL,
                'code' => 'MD',
            ),
            68 => 
            array (
                'id' => 1569,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Managua',
                'full_name' => NULL,
                'code' => 'MN',
            ),
            69 => 
            array (
                'id' => 1570,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Masaya',
                'full_name' => NULL,
                'code' => 'MS',
            ),
            70 => 
            array (
                'id' => 1571,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Matagalpa',
                'full_name' => NULL,
                'code' => 'MT',
            ),
            71 => 
            array (
                'id' => 1572,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Atlantico Sur',
                'full_name' => NULL,
                'code' => 'AS',
            ),
            72 => 
            array (
                'id' => 1573,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Chinandega',
                'full_name' => NULL,
                'code' => 'CD',
            ),
            73 => 
            array (
                'id' => 1574,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Chontales',
                'full_name' => NULL,
                'code' => 'CT',
            ),
            74 => 
            array (
                'id' => 1575,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Rio San Juan',
                'full_name' => NULL,
                'code' => 'SJ',
            ),
            75 => 
            array (
                'id' => 1576,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Jinotega',
                'full_name' => NULL,
                'code' => 'JI',
            ),
            76 => 
            array (
                'id' => 1577,
                'country_id' => 107,
                'region_id' => NULL,
                'name' => 'Nueva Segovia',
                'full_name' => NULL,
                'code' => 'NS',
            ),
            77 => 
            array (
                'id' => 1578,
                'country_id' => 40,
                'region_id' => NULL,
                'name' => 'Agadez',
                'full_name' => NULL,
                'code' => 'AJY',
            ),
            78 => 
            array (
                'id' => 1579,
                'country_id' => 40,
                'region_id' => NULL,
                'name' => 'Diffa',
                'full_name' => NULL,
                'code' => 'DIF',
            ),
            79 => 
            array (
                'id' => 1580,
                'country_id' => 40,
                'region_id' => NULL,
                'name' => 'Tillaberi',
                'full_name' => NULL,
                'code' => 'TIL',
            ),
            80 => 
            array (
                'id' => 1581,
                'country_id' => 40,
                'region_id' => NULL,
                'name' => 'Dosso',
                'full_name' => NULL,
                'code' => 'DSS',
            ),
            81 => 
            array (
                'id' => 1582,
                'country_id' => 40,
                'region_id' => NULL,
                'name' => 'Zinder',
                'full_name' => NULL,
                'code' => 'ZND',
            ),
            82 => 
            array (
                'id' => 1583,
                'country_id' => 40,
                'region_id' => NULL,
                'name' => 'Maradi',
                'full_name' => NULL,
                'code' => 'MFQ',
            ),
            83 => 
            array (
                'id' => 1584,
                'country_id' => 40,
                'region_id' => NULL,
                'name' => 'Niamey C.U.',
                'full_name' => NULL,
                'code' => 'NIM',
            ),
            84 => 
            array (
                'id' => 1585,
                'country_id' => 40,
                'region_id' => NULL,
                'name' => 'Tahoua',
                'full_name' => NULL,
                'code' => 'THZ',
            ),
            85 => 
            array (
                'id' => 1586,
                'country_id' => 48,
                'region_id' => NULL,
                'name' => 'Abuja',
                'full_name' => NULL,
                'code' => 'ABV',
            ),
            86 => 
            array (
                'id' => 1587,
                'country_id' => 48,
                'region_id' => NULL,
                'name' => 'Ogbomosho',
                'full_name' => NULL,
                'code' => 'OGB',
            ),
            87 => 
            array (
                'id' => 1588,
                'country_id' => 48,
                'region_id' => NULL,
                'name' => 'Kano',
                'full_name' => NULL,
                'code' => 'KAN',
            ),
            88 => 
            array (
                'id' => 1589,
                'country_id' => 48,
                'region_id' => NULL,
                'name' => 'Lagos',
                'full_name' => NULL,
                'code' => 'LOS',
            ),
            89 => 
            array (
                'id' => 1590,
                'country_id' => 48,
                'region_id' => NULL,
                'name' => 'Ibadan',
                'full_name' => NULL,
                'code' => 'IBA',
            ),
            90 => 
            array (
                'id' => 1591,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Akershus',
                'full_name' => NULL,
                'code' => '2',
            ),
            91 => 
            array (
                'id' => 1592,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Oppland',
                'full_name' => NULL,
                'code' => '5',
            ),
            92 => 
            array (
                'id' => 1593,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Oslo',
                'full_name' => NULL,
                'code' => '3',
            ),
            93 => 
            array (
                'id' => 1594,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Nord-Trondelag',
                'full_name' => NULL,
                'code' => '17',
            ),
            94 => 
            array (
                'id' => 1595,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Buskerud',
                'full_name' => NULL,
                'code' => '6',
            ),
            95 => 
            array (
                'id' => 1596,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Aust-Agder',
                'full_name' => NULL,
                'code' => '9',
            ),
            96 => 
            array (
                'id' => 1597,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Ostfold',
                'full_name' => NULL,
                'code' => '1',
            ),
            97 => 
            array (
                'id' => 1598,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Finnmark',
                'full_name' => NULL,
                'code' => '20',
            ),
            98 => 
            array (
                'id' => 1599,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Hedmark',
                'full_name' => NULL,
                'code' => '4',
            ),
            99 => 
            array (
                'id' => 1600,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Hordaland',
                'full_name' => NULL,
                'code' => '12',
            ),
            100 => 
            array (
                'id' => 1601,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Rogaland',
                'full_name' => NULL,
                'code' => '11',
            ),
            101 => 
            array (
                'id' => 1602,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'More og Romsdal',
                'full_name' => NULL,
                'code' => '15',
            ),
            102 => 
            array (
                'id' => 1603,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Sor-Trondelag',
                'full_name' => NULL,
                'code' => '16',
            ),
            103 => 
            array (
                'id' => 1604,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Nordland',
                'full_name' => NULL,
                'code' => '18',
            ),
            104 => 
            array (
                'id' => 1605,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Sogn og Fjordane',
                'full_name' => NULL,
                'code' => '14',
            ),
            105 => 
            array (
                'id' => 1606,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Telemark',
                'full_name' => NULL,
                'code' => '8',
            ),
            106 => 
            array (
                'id' => 1607,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Troms',
                'full_name' => NULL,
                'code' => '19',
            ),
            107 => 
            array (
                'id' => 1608,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Vest-Agder',
                'full_name' => NULL,
                'code' => '10',
            ),
            108 => 
            array (
                'id' => 1609,
                'country_id' => 125,
                'region_id' => NULL,
                'name' => 'Vestfold',
                'full_name' => NULL,
                'code' => '7',
            ),
            109 => 
            array (
                'id' => 1610,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Alentejo Litoral',
                'full_name' => NULL,
                'code' => 'ALL',
            ),
            110 => 
            array (
                'id' => 1611,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Pinhal Litoral',
                'full_name' => NULL,
                'code' => 'PLT',
            ),
            111 => 
            array (
                'id' => 1612,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Porto',
                'full_name' => NULL,
                'code' => 'VDP',
            ),
            112 => 
            array (
                'id' => 1613,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Douro',
                'full_name' => NULL,
                'code' => 'MDR',
            ),
            113 => 
            array (
                'id' => 1614,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Entre Douro e Vouga',
                'full_name' => NULL,
                'code' => 'EDV',
            ),
            114 => 
            array (
                'id' => 1615,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Faro',
                'full_name' => NULL,
                'code' => 'FAO',
            ),
            115 => 
            array (
                'id' => 1616,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Funchal',
                'full_name' => NULL,
                'code' => 'FUN',
            ),
            116 => 
            array (
                'id' => 1617,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Cavado',
                'full_name' => NULL,
                'code' => 'CAV',
            ),
            117 => 
            array (
                'id' => 1618,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Cova da Beira',
                'full_name' => NULL,
                'code' => 'CLB',
            ),
            118 => 
            array (
                'id' => 1619,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Lisboa',
                'full_name' => NULL,
                'code' => 'LIS',
            ),
            119 => 
            array (
                'id' => 1620,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Leziria do Tejo',
                'full_name' => NULL,
                'code' => 'LTE',
            ),
            120 => 
            array (
                'id' => 1621,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Medio Tejo',
                'full_name' => NULL,
                'code' => 'MTE',
            ),
            121 => 
            array (
                'id' => 1622,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Minho-Lima',
                'full_name' => NULL,
                'code' => 'MLI',
            ),
            122 => 
            array (
                'id' => 1623,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Beira Interior Norte',
                'full_name' => NULL,
                'code' => 'BIN',
            ),
            123 => 
            array (
                'id' => 1624,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Beira Interior Sul',
                'full_name' => NULL,
                'code' => 'BIS',
            ),
            124 => 
            array (
                'id' => 1625,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Pinhal Interior Norte',
                'full_name' => NULL,
                'code' => 'PIN',
            ),
            125 => 
            array (
                'id' => 1626,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Pinhal Interior Sul',
                'full_name' => NULL,
                'code' => 'PIS',
            ),
            126 => 
            array (
                'id' => 1627,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Ponta Delgada',
                'full_name' => NULL,
                'code' => 'PDL',
            ),
            127 => 
            array (
                'id' => 1628,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Peninsula de Setubal',
                'full_name' => NULL,
                'code' => 'PSE',
            ),
            128 => 
            array (
                'id' => 1629,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Serra da Estrela',
                'full_name' => NULL,
                'code' => 'SES',
            ),
            129 => 
            array (
                'id' => 1630,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Alto Alentejo',
                'full_name' => NULL,
                'code' => 'AAT',
            ),
            130 => 
            array (
                'id' => 1631,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Alto Tros-os-Montes',
                'full_name' => NULL,
                'code' => 'ATM',
            ),
            131 => 
            array (
                'id' => 1632,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Tamega',
                'full_name' => NULL,
                'code' => 'TAM',
            ),
            132 => 
            array (
                'id' => 1633,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Ave',
                'full_name' => NULL,
                'code' => 'AES',
            ),
            133 => 
            array (
                'id' => 1634,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Oeste',
                'full_name' => NULL,
                'code' => 'OES',
            ),
            134 => 
            array (
                'id' => 1635,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Baixo Alentejo',
                'full_name' => NULL,
                'code' => 'BAL',
            ),
            135 => 
            array (
                'id' => 1636,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Baixo Vouga',
                'full_name' => NULL,
                'code' => 'BVO',
            ),
            136 => 
            array (
                'id' => 1637,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Baixo Mondego',
                'full_name' => NULL,
                'code' => 'BMO',
            ),
            137 => 
            array (
                'id' => 1638,
                'country_id' => 153,
                'region_id' => NULL,
                'name' => 'Alentejo Central',
                'full_name' => NULL,
                'code' => 'ALC',
            ),
            138 => 
            array (
                'id' => 1639,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Ehime',
                'full_name' => NULL,
                'code' => '38',
            ),
            139 => 
            array (
                'id' => 1640,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Aichi',
                'full_name' => NULL,
                'code' => '23',
            ),
            140 => 
            array (
                'id' => 1641,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Hokkaido',
                'full_name' => NULL,
                'code' => '1',
            ),
            141 => 
            array (
                'id' => 1642,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Hyogo',
                'full_name' => NULL,
                'code' => '28',
            ),
            142 => 
            array (
                'id' => 1643,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Okinawa',
                'full_name' => NULL,
                'code' => '47',
            ),
            143 => 
            array (
                'id' => 1644,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Ibaraki',
                'full_name' => NULL,
                'code' => '8',
            ),
            144 => 
            array (
                'id' => 1645,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Osaka',
                'full_name' => NULL,
                'code' => '27',
            ),
            145 => 
            array (
                'id' => 1646,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Oita',
                'full_name' => NULL,
                'code' => '44',
            ),
            146 => 
            array (
                'id' => 1647,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Shimane',
                'full_name' => NULL,
                'code' => '32',
            ),
            147 => 
            array (
                'id' => 1648,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Tokushima',
                'full_name' => NULL,
                'code' => '36',
            ),
            148 => 
            array (
                'id' => 1649,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Tokyo',
                'full_name' => NULL,
                'code' => '13',
            ),
            149 => 
            array (
                'id' => 1650,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Fukushima',
                'full_name' => NULL,
                'code' => '7',
            ),
            150 => 
            array (
                'id' => 1651,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Fukuoka',
                'full_name' => NULL,
                'code' => '40',
            ),
            151 => 
            array (
                'id' => 1652,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Fukui',
                'full_name' => NULL,
                'code' => '18',
            ),
            152 => 
            array (
                'id' => 1653,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Toyama',
                'full_name' => NULL,
                'code' => '16',
            ),
            153 => 
            array (
                'id' => 1654,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Okayama',
                'full_name' => NULL,
                'code' => '33',
            ),
            154 => 
            array (
                'id' => 1655,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Kochi',
                'full_name' => NULL,
                'code' => '39',
            ),
            155 => 
            array (
                'id' => 1656,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Miyagi',
                'full_name' => NULL,
                'code' => '4',
            ),
            156 => 
            array (
                'id' => 1657,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Miyazaki',
                'full_name' => NULL,
                'code' => '45',
            ),
            157 => 
            array (
                'id' => 1658,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Hiroshima',
                'full_name' => NULL,
                'code' => '34',
            ),
            158 => 
            array (
                'id' => 1659,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Wakayama',
                'full_name' => NULL,
                'code' => '30',
            ),
            159 => 
            array (
                'id' => 1660,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Kyoto',
                'full_name' => NULL,
                'code' => '26',
            ),
            160 => 
            array (
                'id' => 1661,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Shizuoka',
                'full_name' => NULL,
                'code' => '22',
            ),
            161 => 
            array (
                'id' => 1662,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Tochigi',
                'full_name' => NULL,
                'code' => '9',
            ),
            162 => 
            array (
                'id' => 1663,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Kagoshima',
                'full_name' => NULL,
                'code' => '46',
            ),
            163 => 
            array (
                'id' => 1664,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Nara',
                'full_name' => NULL,
                'code' => '29',
            ),
            164 => 
            array (
                'id' => 1665,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Tottori',
                'full_name' => NULL,
                'code' => '31',
            ),
            165 => 
            array (
                'id' => 1666,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Gifu',
                'full_name' => NULL,
                'code' => '21',
            ),
            166 => 
            array (
                'id' => 1667,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Saitama',
                'full_name' => NULL,
                'code' => '11',
            ),
            167 => 
            array (
                'id' => 1668,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Chiba',
                'full_name' => NULL,
                'code' => '12',
            ),
            168 => 
            array (
                'id' => 1669,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Aomori',
                'full_name' => NULL,
                'code' => '2',
            ),
            169 => 
            array (
                'id' => 1670,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Akita',
                'full_name' => NULL,
                'code' => '5',
            ),
            170 => 
            array (
                'id' => 1671,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Gunma',
                'full_name' => NULL,
                'code' => '10',
            ),
            171 => 
            array (
                'id' => 1672,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Mie',
                'full_name' => NULL,
                'code' => '24',
            ),
            172 => 
            array (
                'id' => 1673,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Yamaguchi',
                'full_name' => NULL,
                'code' => '35',
            ),
            173 => 
            array (
                'id' => 1674,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Yamanashi',
                'full_name' => NULL,
                'code' => '19',
            ),
            174 => 
            array (
                'id' => 1675,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Yamagata',
                'full_name' => NULL,
                'code' => '6',
            ),
            175 => 
            array (
                'id' => 1676,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Kanagawa',
                'full_name' => NULL,
                'code' => '14',
            ),
            176 => 
            array (
                'id' => 1677,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Ishikawa',
                'full_name' => NULL,
                'code' => '17',
            ),
            177 => 
            array (
                'id' => 1678,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Kagawa',
                'full_name' => NULL,
                'code' => '37',
            ),
            178 => 
            array (
                'id' => 1679,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Niigata',
                'full_name' => NULL,
                'code' => '15',
            ),
            179 => 
            array (
                'id' => 1680,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Kumamoto',
                'full_name' => NULL,
                'code' => '43',
            ),
            180 => 
            array (
                'id' => 1681,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Iwate',
                'full_name' => NULL,
                'code' => '3',
            ),
            181 => 
            array (
                'id' => 1682,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Nagasaki',
                'full_name' => NULL,
                'code' => '42',
            ),
            182 => 
            array (
                'id' => 1683,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Nagano',
                'full_name' => NULL,
                'code' => '20',
            ),
            183 => 
            array (
                'id' => 1684,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Shiga',
                'full_name' => NULL,
                'code' => '25',
            ),
            184 => 
            array (
                'id' => 1685,
                'country_id' => 62,
                'region_id' => NULL,
                'name' => 'Saga',
                'full_name' => NULL,
                'code' => '41',
            ),
            185 => 
            array (
                'id' => 1686,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Norrbottens',
                'full_name' => NULL,
                'code' => 'BD',
            ),
            186 => 
            array (
                'id' => 1687,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Blekinge',
                'full_name' => NULL,
                'code' => 'K',
            ),
            187 => 
            array (
                'id' => 1688,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Dalarnas',
                'full_name' => NULL,
                'code' => 'DLN',
            ),
            188 => 
            array (
                'id' => 1689,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Ustergotland',
                'full_name' => NULL,
                'code' => 'UGL',
            ),
            189 => 
            array (
                'id' => 1690,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Orebro',
                'full_name' => NULL,
                'code' => 'T',
            ),
            190 => 
            array (
                'id' => 1691,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Gotlands',
                'full_name' => NULL,
                'code' => 'I',
            ),
            191 => 
            array (
                'id' => 1692,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Hallands',
                'full_name' => NULL,
                'code' => 'N',
            ),
            192 => 
            array (
                'id' => 1693,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Kalmar',
                'full_name' => NULL,
                'code' => 'H',
            ),
            193 => 
            array (
                'id' => 1694,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Kronobergs',
                'full_name' => NULL,
                'code' => 'G',
            ),
            194 => 
            array (
                'id' => 1695,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Sodermanlands',
                'full_name' => NULL,
                'code' => 'D',
            ),
            195 => 
            array (
                'id' => 1696,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Stockholms',
                'full_name' => NULL,
                'code' => 'AB',
            ),
            196 => 
            array (
                'id' => 1697,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Skane',
                'full_name' => NULL,
                'code' => 'M',
            ),
            197 => 
            array (
                'id' => 1698,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Varmlands',
                'full_name' => NULL,
                'code' => 'S',
            ),
            198 => 
            array (
                'id' => 1699,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Uppsala',
                'full_name' => NULL,
                'code' => 'C',
            ),
            199 => 
            array (
                'id' => 1700,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Vasterbottens',
                'full_name' => NULL,
                'code' => 'AC',
            ),
            200 => 
            array (
                'id' => 1701,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Vastmanlands',
                'full_name' => NULL,
                'code' => 'U',
            ),
            201 => 
            array (
                'id' => 1702,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Vasternorrlands',
                'full_name' => NULL,
                'code' => 'Y',
            ),
            202 => 
            array (
                'id' => 1703,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Vastra Gotalands',
                'full_name' => NULL,
                'code' => 'O',
            ),
            203 => 
            array (
                'id' => 1704,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Jonkopings',
                'full_name' => NULL,
                'code' => 'F',
            ),
            204 => 
            array (
                'id' => 1705,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Gavleborgs',
                'full_name' => NULL,
                'code' => 'X',
            ),
            205 => 
            array (
                'id' => 1706,
                'country_id' => 128,
                'region_id' => NULL,
                'name' => 'Jamtlands',
                'full_name' => NULL,
                'code' => 'Z',
            ),
            206 => 
            array (
                'id' => 1707,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Aargau',
                'full_name' => NULL,
                'code' => 'AG',
            ),
            207 => 
            array (
                'id' => 1708,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Basel－Sstadt',
                'full_name' => NULL,
                'code' => 'BS',
            ),
            208 => 
            array (
                'id' => 1709,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Basel Landschaft',
                'full_name' => NULL,
                'code' => 'BL',
            ),
            209 => 
            array (
                'id' => 1710,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Bern',
                'full_name' => NULL,
                'code' => 'BE',
            ),
            210 => 
            array (
                'id' => 1711,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Zug',
                'full_name' => NULL,
                'code' => 'ZG',
            ),
            211 => 
            array (
                'id' => 1712,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Freiburg',
                'full_name' => NULL,
                'code' => 'FR',
            ),
            212 => 
            array (
                'id' => 1713,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Glarus',
                'full_name' => NULL,
                'code' => 'GL',
            ),
            213 => 
            array (
                'id' => 1714,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Graubünden',
                'full_name' => NULL,
                'code' => 'GR',
            ),
            214 => 
            array (
                'id' => 1715,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Luzern',
                'full_name' => NULL,
                'code' => 'LU',
            ),
            215 => 
            array (
                'id' => 1716,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Lausanne',
                'full_name' => NULL,
                'code' => 'LA',
            ),
            216 => 
            array (
                'id' => 1717,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Neuchatel',
                'full_name' => NULL,
                'code' => 'NE',
            ),
            217 => 
            array (
                'id' => 1718,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Appenzell Innerrhodn',
                'full_name' => NULL,
                'code' => 'AI',
            ),
            218 => 
            array (
                'id' => 1719,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Geneve',
                'full_name' => NULL,
                'code' => 'GE',
            ),
            219 => 
            array (
                'id' => 1720,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Jura',
                'full_name' => NULL,
                'code' => 'JU',
            ),
            220 => 
            array (
                'id' => 1721,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Schaffhausen',
                'full_name' => NULL,
                'code' => 'SH',
            ),
            221 => 
            array (
                'id' => 1722,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Obwalden',
                'full_name' => NULL,
                'code' => 'OW',
            ),
            222 => 
            array (
                'id' => 1723,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'St.Gallen',
                'full_name' => NULL,
                'code' => 'SG',
            ),
            223 => 
            array (
                'id' => 1724,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Schwyz',
                'full_name' => NULL,
                'code' => 'SZ',
            ),
            224 => 
            array (
                'id' => 1725,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Zurich',
                'full_name' => NULL,
                'code' => 'ZH',
            ),
            225 => 
            array (
                'id' => 1726,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Solothurn',
                'full_name' => NULL,
                'code' => 'SO',
            ),
            226 => 
            array (
                'id' => 1727,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Ticino',
                'full_name' => NULL,
                'code' => 'TI',
            ),
            227 => 
            array (
                'id' => 1728,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Thurgau',
                'full_name' => NULL,
                'code' => 'TG',
            ),
            228 => 
            array (
                'id' => 1729,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Wallis',
                'full_name' => NULL,
                'code' => 'VS',
            ),
            229 => 
            array (
                'id' => 1730,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Appenzell Ausserrhon',
                'full_name' => NULL,
                'code' => 'AR',
            ),
            230 => 
            array (
                'id' => 1731,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Vaud',
                'full_name' => NULL,
                'code' => 'VD',
            ),
            231 => 
            array (
                'id' => 1732,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Uri',
                'full_name' => NULL,
                'code' => 'UR',
            ),
            232 => 
            array (
                'id' => 1733,
                'country_id' => 129,
                'region_id' => NULL,
                'name' => 'Nidwalden',
                'full_name' => NULL,
                'code' => 'NW',
            ),
            233 => 
            array (
                'id' => 1734,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Apopa',
                'full_name' => NULL,
                'code' => 'APO',
            ),
            234 => 
            array (
                'id' => 1735,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Ahuachapan',
                'full_name' => NULL,
                'code' => 'AH',
            ),
            235 => 
            array (
                'id' => 1736,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Litoral',
                'full_name' => NULL,
                'code' => 'LI',
            ),
            236 => 
            array (
                'id' => 1737,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Chalatenango',
                'full_name' => NULL,
                'code' => 'CH',
            ),
            237 => 
            array (
                'id' => 1738,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Delgado',
                'full_name' => NULL,
                'code' => 'DE',
            ),
            238 => 
            array (
                'id' => 1739,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Kie-Ntem',
                'full_name' => NULL,
                'code' => 'KN',
            ),
            239 => 
            array (
                'id' => 1740,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Cabanas',
                'full_name' => NULL,
                'code' => 'CA',
            ),
            240 => 
            array (
                'id' => 1741,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Cuscatlan',
                'full_name' => NULL,
                'code' => 'CU',
            ),
            241 => 
            array (
                'id' => 1742,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'La Paz',
                'full_name' => NULL,
                'code' => 'PZ',
            ),
            242 => 
            array (
                'id' => 1743,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'La Libertad',
                'full_name' => NULL,
                'code' => 'LB',
            ),
            243 => 
            array (
                'id' => 1744,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'La Union',
                'full_name' => NULL,
                'code' => 'UN',
            ),
            244 => 
            array (
                'id' => 1745,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Mejicanos',
                'full_name' => NULL,
                'code' => 'MEJ',
            ),
            245 => 
            array (
                'id' => 1746,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Morazan',
                'full_name' => NULL,
                'code' => 'MO',
            ),
            246 => 
            array (
                'id' => 1747,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Santa Ana',
                'full_name' => NULL,
                'code' => 'SA',
            ),
            247 => 
            array (
                'id' => 1748,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'San Miguel',
                'full_name' => NULL,
                'code' => 'SM',
            ),
            248 => 
            array (
                'id' => 1749,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'San Salvador',
                'full_name' => NULL,
                'code' => 'SS',
            ),
            249 => 
            array (
                'id' => 1750,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'San Vicente',
                'full_name' => NULL,
                'code' => 'SV',
            ),
            250 => 
            array (
                'id' => 1751,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Sonsonate',
                'full_name' => NULL,
                'code' => 'SO',
            ),
            251 => 
            array (
                'id' => 1752,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Soyapango',
                'full_name' => NULL,
                'code' => 'SOY',
            ),
            252 => 
            array (
                'id' => 1753,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Wele-Nzas',
                'full_name' => NULL,
                'code' => 'WN',
            ),
            253 => 
            array (
                'id' => 1754,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Usulutan',
                'full_name' => NULL,
                'code' => 'US',
            ),
            254 => 
            array (
                'id' => 1755,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Ilopango',
                'full_name' => NULL,
                'code' => 'IL',
            ),
            255 => 
            array (
                'id' => 1756,
                'country_id' => 110,
                'region_id' => NULL,
                'name' => 'Centro Sur',
                'full_name' => NULL,
                'code' => 'CS',
            ),
            256 => 
            array (
                'id' => 1757,
                'country_id' => 213,
                'region_id' => NULL,
                'name' => 'Beograd',
                'full_name' => NULL,
                'code' => 'BEG',
            ),
            257 => 
            array (
                'id' => 1758,
                'country_id' => 213,
                'region_id' => NULL,
                'name' => 'Podgorica',
                'full_name' => NULL,
                'code' => 'POD',
            ),
            258 => 
            array (
                'id' => 1759,
                'country_id' => 213,
                'region_id' => NULL,
                'name' => 'Kragujevac',
                'full_name' => NULL,
                'code' => 'KGV',
            ),
            259 => 
            array (
                'id' => 1760,
                'country_id' => 213,
                'region_id' => NULL,
                'name' => 'Nis',
                'full_name' => NULL,
                'code' => 'INI',
            ),
            260 => 
            array (
                'id' => 1761,
                'country_id' => 213,
                'region_id' => NULL,
                'name' => 'Novi Sad',
                'full_name' => NULL,
                'code' => 'NVS',
            ),
            261 => 
            array (
                'id' => 1762,
                'country_id' => 213,
                'region_id' => NULL,
                'name' => 'Pristina',
                'full_name' => NULL,
                'code' => 'PRN',
            ),
            262 => 
            array (
                'id' => 1763,
                'country_id' => 213,
                'region_id' => NULL,
                'name' => 'Subotica',
                'full_name' => NULL,
                'code' => 'SUB',
            ),
            263 => 
            array (
                'id' => 1764,
                'country_id' => 213,
                'region_id' => NULL,
                'name' => 'Zemun',
                'full_name' => NULL,
                'code' => 'ZEM',
            ),
            264 => 
            array (
                'id' => 1765,
                'country_id' => 16,
                'region_id' => NULL,
                'name' => 'Northern',
                'full_name' => NULL,
                'code' => 'N',
            ),
            265 => 
            array (
                'id' => 1766,
                'country_id' => 16,
                'region_id' => NULL,
                'name' => 'Eastern',
                'full_name' => NULL,
                'code' => 'E',
            ),
            266 => 
            array (
                'id' => 1767,
                'country_id' => 16,
                'region_id' => NULL,
                'name' => 'Southern',
                'full_name' => NULL,
                'code' => 'S',
            ),
            267 => 
            array (
                'id' => 1768,
                'country_id' => 16,
                'region_id' => NULL,
                'name' => 'Western',
                'full_name' => NULL,
                'code' => 'W',
            ),
            268 => 
            array (
                'id' => 1769,
                'country_id' => 29,
                'region_id' => NULL,
                'name' => 'Dakar',
                'full_name' => NULL,
                'code' => 'DA',
            ),
            269 => 
            array (
                'id' => 1770,
                'country_id' => 29,
                'region_id' => NULL,
                'name' => 'Fatick',
                'full_name' => NULL,
                'code' => 'FA',
            ),
            270 => 
            array (
                'id' => 1771,
                'country_id' => 29,
                'region_id' => NULL,
                'name' => 'Ziguinchor',
                'full_name' => NULL,
                'code' => 'ZI',
            ),
            271 => 
            array (
                'id' => 1772,
                'country_id' => 29,
                'region_id' => NULL,
                'name' => 'Thies',
                'full_name' => NULL,
                'code' => 'TH',
            ),
            272 => 
            array (
                'id' => 1773,
                'country_id' => 29,
                'region_id' => NULL,
                'name' => 'Diourbel',
                'full_name' => NULL,
                'code' => 'DI',
            ),
            273 => 
            array (
                'id' => 1774,
                'country_id' => 29,
                'region_id' => NULL,
                'name' => 'Kaolack',
                'full_name' => NULL,
                'code' => 'KA',
            ),
            274 => 
            array (
                'id' => 1775,
                'country_id' => 29,
                'region_id' => NULL,
                'name' => 'Kolda',
                'full_name' => NULL,
                'code' => 'KO',
            ),
            275 => 
            array (
                'id' => 1776,
                'country_id' => 29,
                'region_id' => NULL,
                'name' => 'Louga',
                'full_name' => NULL,
                'code' => 'LO',
            ),
            276 => 
            array (
                'id' => 1777,
                'country_id' => 29,
                'region_id' => NULL,
                'name' => 'Matam',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            277 => 
            array (
                'id' => 1778,
                'country_id' => 29,
                'region_id' => NULL,
                'name' => 'Saint-Louis',
                'full_name' => NULL,
                'code' => 'SL',
            ),
            278 => 
            array (
                'id' => 1779,
                'country_id' => 29,
                'region_id' => NULL,
                'name' => 'Tambacounda',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            279 => 
            array (
                'id' => 1780,
                'country_id' => 146,
                'region_id' => NULL,
                'name' => 'Famagusta',
                'full_name' => NULL,
                'code' => '4',
            ),
            280 => 
            array (
                'id' => 1781,
                'country_id' => 146,
                'region_id' => NULL,
                'name' => 'Kyrenia',
                'full_name' => NULL,
                'code' => '6',
            ),
            281 => 
            array (
                'id' => 1782,
                'country_id' => 146,
                'region_id' => NULL,
                'name' => 'Larnaca',
                'full_name' => NULL,
                'code' => '3',
            ),
            282 => 
            array (
                'id' => 1783,
                'country_id' => 146,
                'region_id' => NULL,
                'name' => 'Limassol',
                'full_name' => NULL,
                'code' => '2',
            ),
            283 => 
            array (
                'id' => 1784,
                'country_id' => 146,
                'region_id' => NULL,
                'name' => 'Nicosia',
                'full_name' => NULL,
                'code' => '1',
            ),
            284 => 
            array (
                'id' => 1785,
                'country_id' => 146,
                'region_id' => NULL,
                'name' => 'Pafos',
                'full_name' => NULL,
                'code' => '5',
            ),
            285 => 
            array (
                'id' => 1786,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Arar',
                'full_name' => NULL,
                'code' => 'ARA',
            ),
            286 => 
            array (
                'id' => 1787,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Abha',
                'full_name' => NULL,
                'code' => 'AHB',
            ),
            287 => 
            array (
                'id' => 1788,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Al Bahah',
                'full_name' => NULL,
                'code' => 'BH',
            ),
            288 => 
            array (
                'id' => 1789,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Buraydah',
                'full_name' => NULL,
                'code' => 'BUR',
            ),
            289 => 
            array (
                'id' => 1790,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Dammam',
                'full_name' => NULL,
                'code' => 'DAM',
            ),
            290 => 
            array (
                'id' => 1791,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Hafar al-Batin',
                'full_name' => NULL,
                'code' => 'HBT',
            ),
            291 => 
            array (
                'id' => 1792,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Hail',
                'full_name' => NULL,
                'code' => 'HL',
            ),
            292 => 
            array (
                'id' => 1793,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Khamis Mushayt',
                'full_name' => NULL,
                'code' => 'KMX',
            ),
            293 => 
            array (
                'id' => 1794,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Al-Kharj',
                'full_name' => NULL,
                'code' => 'AKH',
            ),
            294 => 
            array (
                'id' => 1795,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Al-Hufuf',
                'full_name' => NULL,
                'code' => 'HFF',
            ),
            295 => 
            array (
                'id' => 1796,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Jiddah',
                'full_name' => NULL,
                'code' => 'JED',
            ),
            296 => 
            array (
                'id' => 1797,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Jizan',
                'full_name' => NULL,
                'code' => 'JZ',
            ),
            297 => 
            array (
                'id' => 1798,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Riyad',
                'full_name' => NULL,
                'code' => 'RD',
            ),
            298 => 
            array (
                'id' => 1799,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Medina',
                'full_name' => NULL,
                'code' => 'MED',
            ),
            299 => 
            array (
                'id' => 1800,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Makkah',
                'full_name' => NULL,
                'code' => 'ML',
            ),
            300 => 
            array (
                'id' => 1801,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Al-Mubarraz',
                'full_name' => NULL,
                'code' => 'MBR',
            ),
            301 => 
            array (
                'id' => 1802,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Najran',
                'full_name' => NULL,
                'code' => 'NR',
            ),
            302 => 
            array (
                'id' => 1803,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Sakaka',
                'full_name' => NULL,
                'code' => 'SAK',
            ),
            303 => 
            array (
                'id' => 1804,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Tabuk',
                'full_name' => NULL,
                'code' => 'TB',
            ),
            304 => 
            array (
                'id' => 1805,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'At Tarif',
                'full_name' => NULL,
                'code' => 'TAR',
            ),
            305 => 
            array (
                'id' => 1806,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Yanbu al-Bahr',
                'full_name' => NULL,
                'code' => 'YNB',
            ),
            306 => 
            array (
                'id' => 1807,
                'country_id' => 94,
                'region_id' => NULL,
                'name' => 'Al-Jubayl',
                'full_name' => NULL,
                'code' => 'JBI',
            ),
            307 => 
            array (
                'id' => 1808,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Anuradhapura',
                'full_name' => NULL,
                'code' => 'ADP',
            ),
            308 => 
            array (
                'id' => 1809,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Ampara',
                'full_name' => NULL,
                'code' => 'AMP',
            ),
            309 => 
            array (
                'id' => 1810,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Badulla',
                'full_name' => NULL,
                'code' => 'BAD',
            ),
            310 => 
            array (
                'id' => 1811,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Batticaloa',
                'full_name' => NULL,
                'code' => 'BTC',
            ),
            311 => 
            array (
                'id' => 1812,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Polonnaruwa',
                'full_name' => NULL,
                'code' => 'POL',
            ),
            312 => 
            array (
                'id' => 1813,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Hambantota',
                'full_name' => NULL,
                'code' => 'HBA',
            ),
            313 => 
            array (
                'id' => 1814,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Kilinochchi',
                'full_name' => NULL,
                'code' => 'KIL',
            ),
            314 => 
            array (
                'id' => 1815,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Galle',
                'full_name' => NULL,
                'code' => 'GAL',
            ),
            315 => 
            array (
                'id' => 1816,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Gampaha',
                'full_name' => NULL,
                'code' => 'GAM',
            ),
            316 => 
            array (
                'id' => 1817,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Jaffna',
                'full_name' => NULL,
                'code' => 'JAF',
            ),
            317 => 
            array (
                'id' => 1818,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Kalutara',
                'full_name' => NULL,
                'code' => 'KLT',
            ),
            318 => 
            array (
                'id' => 1819,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Kegalle',
                'full_name' => NULL,
                'code' => 'KEG',
            ),
            319 => 
            array (
                'id' => 1820,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Kandy',
                'full_name' => NULL,
                'code' => 'KAN',
            ),
            320 => 
            array (
                'id' => 1821,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Colombo',
                'full_name' => NULL,
                'code' => 'CMB',
            ),
            321 => 
            array (
                'id' => 1822,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Kurunegala',
                'full_name' => NULL,
                'code' => 'KUR',
            ),
            322 => 
            array (
                'id' => 1823,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Ratnapura',
                'full_name' => NULL,
                'code' => 'RAT',
            ),
            323 => 
            array (
                'id' => 1824,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Mannar',
                'full_name' => NULL,
                'code' => 'MAN',
            ),
            324 => 
            array (
                'id' => 1825,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Matale',
                'full_name' => NULL,
                'code' => 'MAT',
            ),
            325 => 
            array (
                'id' => 1826,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Matara',
                'full_name' => NULL,
                'code' => 'MAA',
            ),
            326 => 
            array (
                'id' => 1827,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Monaragala',
                'full_name' => NULL,
                'code' => 'MON',
            ),
            327 => 
            array (
                'id' => 1828,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Mullathivu',
                'full_name' => NULL,
                'code' => 'MUL',
            ),
            328 => 
            array (
                'id' => 1829,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Nuwara Eliya',
                'full_name' => NULL,
                'code' => 'NUE',
            ),
            329 => 
            array (
                'id' => 1830,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Puttalam',
                'full_name' => NULL,
                'code' => 'PUT',
            ),
            330 => 
            array (
                'id' => 1831,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Trincomalee',
                'full_name' => NULL,
                'code' => 'TRR',
            ),
            331 => 
            array (
                'id' => 1832,
                'country_id' => 67,
                'region_id' => NULL,
                'name' => 'Vavuniya',
                'full_name' => NULL,
                'code' => 'VAV',
            ),
            332 => 
            array (
                'id' => 1833,
                'country_id' => 137,
                'region_id' => NULL,
                'name' => 'Banskobystricky',
                'full_name' => NULL,
                'code' => 'BBY',
            ),
            333 => 
            array (
                'id' => 1834,
                'country_id' => 137,
                'region_id' => NULL,
                'name' => 'Bratislavsky',
                'full_name' => NULL,
                'code' => 'BTS',
            ),
            334 => 
            array (
                'id' => 1835,
                'country_id' => 137,
                'region_id' => NULL,
                'name' => 'Koricky',
                'full_name' => NULL,
                'code' => 'KOR',
            ),
            335 => 
            array (
                'id' => 1836,
                'country_id' => 137,
                'region_id' => NULL,
                'name' => 'Nitriansky',
                'full_name' => NULL,
                'code' => 'NRA',
            ),
            336 => 
            array (
                'id' => 1837,
                'country_id' => 137,
                'region_id' => NULL,
                'name' => 'Prerovsky',
                'full_name' => NULL,
                'code' => 'POV',
            ),
            337 => 
            array (
                'id' => 1838,
                'country_id' => 137,
                'region_id' => NULL,
                'name' => 'Rilinsky',
                'full_name' => NULL,
                'code' => 'RIL',
            ),
            338 => 
            array (
                'id' => 1839,
                'country_id' => 137,
                'region_id' => NULL,
                'name' => 'Trnavsky',
                'full_name' => NULL,
                'code' => 'TNA',
            ),
            339 => 
            array (
                'id' => 1840,
                'country_id' => 137,
                'region_id' => NULL,
                'name' => 'Trenriansky',
                'full_name' => NULL,
                'code' => 'TRE',
            ),
            340 => 
            array (
                'id' => 1841,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Obalno-kraska',
                'full_name' => NULL,
                'code' => 'OKR',
            ),
            341 => 
            array (
                'id' => 1842,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Osrednjeslovenska',
                'full_name' => NULL,
                'code' => 'OSR',
            ),
            342 => 
            array (
                'id' => 1843,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Podravska',
                'full_name' => NULL,
                'code' => 'POD',
            ),
            343 => 
            array (
                'id' => 1844,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Pomurska',
                'full_name' => NULL,
                'code' => 'POM',
            ),
            344 => 
            array (
                'id' => 1845,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Dolenjska',
                'full_name' => NULL,
                'code' => 'DLJ',
            ),
            345 => 
            array (
                'id' => 1846,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Gorenjska',
                'full_name' => NULL,
                'code' => 'GSZ',
            ),
            346 => 
            array (
                'id' => 1847,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Goriska',
                'full_name' => NULL,
                'code' => 'GSK',
            ),
            347 => 
            array (
                'id' => 1848,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Koroska',
                'full_name' => NULL,
                'code' => 'KOR',
            ),
            348 => 
            array (
                'id' => 1849,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Notranjsko-kraska',
                'full_name' => NULL,
                'code' => 'NKR',
            ),
            349 => 
            array (
                'id' => 1850,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Savinjska',
                'full_name' => NULL,
                'code' => 'SAV',
            ),
            350 => 
            array (
                'id' => 1851,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Spodnjeposavska',
                'full_name' => NULL,
                'code' => 'SPO',
            ),
            351 => 
            array (
                'id' => 1852,
                'country_id' => 135,
                'region_id' => NULL,
                'name' => 'Zasavska',
                'full_name' => NULL,
                'code' => 'ZAS',
            ),
            352 => 
            array (
                'id' => 1853,
                'country_id' => 55,
                'region_id' => NULL,
                'name' => 'Ash-Shamaliyah',
                'full_name' => NULL,
                'code' => 'ASH',
            ),
            353 => 
            array (
                'id' => 1854,
                'country_id' => 55,
                'region_id' => NULL,
                'name' => 'Al-Istiwaiyah',
                'full_name' => NULL,
                'code' => 'SIS',
            ),
            354 => 
            array (
                'id' => 1855,
                'country_id' => 55,
                'region_id' => NULL,
                'name' => 'Darfur',
                'full_name' => NULL,
                'code' => 'SDA',
            ),
            355 => 
            array (
                'id' => 1856,
                'country_id' => 55,
                'region_id' => NULL,
                'name' => 'Ash-Sharqiyah',
                'full_name' => NULL,
                'code' => 'SHA',
            ),
            356 => 
            array (
                'id' => 1857,
                'country_id' => 55,
                'region_id' => NULL,
                'name' => 'Bahr al-Ghazal',
                'full_name' => NULL,
                'code' => 'SBG',
            ),
            357 => 
            array (
                'id' => 1858,
                'country_id' => 55,
                'region_id' => NULL,
                'name' => 'Al-Khartum',
                'full_name' => NULL,
                'code' => 'KRT',
            ),
            358 => 
            array (
                'id' => 1859,
                'country_id' => 55,
                'region_id' => NULL,
                'name' => 'Kurdufan',
                'full_name' => NULL,
                'code' => 'GKU',
            ),
            359 => 
            array (
                'id' => 1860,
                'country_id' => 55,
                'region_id' => NULL,
                'name' => 'Aali an-Nil',
                'full_name' => NULL,
                'code' => 'ANB',
            ),
            360 => 
            array (
                'id' => 1861,
                'country_id' => 55,
                'region_id' => NULL,
                'name' => 'Al Wasta',
                'full_name' => NULL,
                'code' => 'WDH',
            ),
            361 => 
            array (
                'id' => 1862,
                'country_id' => 191,
                'region_id' => NULL,
                'name' => 'Brokopondo',
                'full_name' => NULL,
                'code' => 'BR',
            ),
            362 => 
            array (
                'id' => 1863,
                'country_id' => 191,
                'region_id' => NULL,
                'name' => 'Coronie',
                'full_name' => NULL,
                'code' => 'CR',
            ),
            363 => 
            array (
                'id' => 1864,
                'country_id' => 191,
                'region_id' => NULL,
                'name' => 'Commewijne',
                'full_name' => NULL,
                'code' => 'CM',
            ),
            364 => 
            array (
                'id' => 1865,
                'country_id' => 191,
                'region_id' => NULL,
                'name' => 'Marowijne',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            365 => 
            array (
                'id' => 1866,
                'country_id' => 191,
                'region_id' => NULL,
                'name' => 'Nickerie',
                'full_name' => NULL,
                'code' => 'NI',
            ),
            366 => 
            array (
                'id' => 1867,
                'country_id' => 191,
                'region_id' => NULL,
                'name' => 'Para',
                'full_name' => NULL,
                'code' => 'PA',
            ),
            367 => 
            array (
                'id' => 1868,
                'country_id' => 191,
                'region_id' => NULL,
                'name' => 'Paramaribo',
                'full_name' => NULL,
                'code' => 'PM',
            ),
            368 => 
            array (
                'id' => 1869,
                'country_id' => 191,
                'region_id' => NULL,
                'name' => 'Saramacca',
                'full_name' => NULL,
                'code' => 'SA',
            ),
            369 => 
            array (
                'id' => 1870,
                'country_id' => 191,
                'region_id' => NULL,
                'name' => 'Wanica',
                'full_name' => NULL,
                'code' => 'WA',
            ),
            370 => 
            array (
                'id' => 1871,
                'country_id' => 191,
                'region_id' => NULL,
                'name' => 'Sipaliwini',
                'full_name' => NULL,
                'code' => 'SI',
            ),
            371 => 
            array (
                'id' => 1872,
                'country_id' => 175,
                'region_id' => NULL,
                'name' => 'Guadalcanal',
                'full_name' => NULL,
                'code' => 'GC',
            ),
            372 => 
            array (
                'id' => 1873,
                'country_id' => 175,
                'region_id' => NULL,
                'name' => 'Honiara',
                'full_name' => NULL,
                'code' => 'HO',
            ),
            373 => 
            array (
                'id' => 1874,
                'country_id' => 175,
                'region_id' => NULL,
                'name' => 'Rennell and Bellona',
                'full_name' => NULL,
                'code' => 'RB',
            ),
            374 => 
            array (
                'id' => 1875,
                'country_id' => 175,
                'region_id' => NULL,
                'name' => 'Makira',
                'full_name' => NULL,
                'code' => 'MK',
            ),
            375 => 
            array (
                'id' => 1876,
                'country_id' => 175,
                'region_id' => NULL,
                'name' => 'Malaita',
                'full_name' => NULL,
                'code' => 'ML',
            ),
            376 => 
            array (
                'id' => 1877,
                'country_id' => 175,
                'region_id' => NULL,
                'name' => 'Choiseul',
                'full_name' => NULL,
                'code' => 'CH',
            ),
            377 => 
            array (
                'id' => 1878,
                'country_id' => 175,
                'region_id' => NULL,
                'name' => 'Temotu',
                'full_name' => NULL,
                'code' => 'TM',
            ),
            378 => 
            array (
                'id' => 1879,
                'country_id' => 175,
                'region_id' => NULL,
                'name' => 'Western',
                'full_name' => NULL,
                'code' => 'WE',
            ),
            379 => 
            array (
                'id' => 1880,
                'country_id' => 175,
                'region_id' => NULL,
                'name' => 'Isabel',
                'full_name' => NULL,
                'code' => 'IS',
            ),
            380 => 
            array (
                'id' => 1881,
                'country_id' => 175,
                'region_id' => NULL,
                'name' => 'Central Islands',
                'full_name' => NULL,
                'code' => 'CE',
            ),
            381 => 
            array (
                'id' => 1882,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Dushanbe',
                'full_name' => NULL,
                'code' => 'DYU',
            ),
            382 => 
            array (
                'id' => 1883,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Khorugh',
                'full_name' => NULL,
                'code' => 'KHO',
            ),
            383 => 
            array (
                'id' => 1884,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Kanibadam',
                'full_name' => NULL,
                'code' => 'KAN',
            ),
            384 => 
            array (
                'id' => 1885,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Kofarnihon',
                'full_name' => NULL,
                'code' => 'KOF',
            ),
            385 => 
            array (
                'id' => 1886,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Khujand',
                'full_name' => NULL,
                'code' => 'KHU',
            ),
            386 => 
            array (
                'id' => 1887,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Kurgan-Tjube',
                'full_name' => NULL,
                'code' => 'KTJ',
            ),
            387 => 
            array (
                'id' => 1888,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Kulob',
                'full_name' => NULL,
                'code' => 'KLB',
            ),
            388 => 
            array (
                'id' => 1889,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Rogun',
                'full_name' => NULL,
                'code' => 'RGU',
            ),
            389 => 
            array (
                'id' => 1890,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Nurek',
                'full_name' => NULL,
                'code' => 'NUR',
            ),
            390 => 
            array (
                'id' => 1891,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Pendzhikent',
                'full_name' => NULL,
                'code' => 'PJK',
            ),
            391 => 
            array (
                'id' => 1892,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Sarband',
                'full_name' => NULL,
                'code' => 'SBA',
            ),
            392 => 
            array (
                'id' => 1893,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Taboshar',
                'full_name' => NULL,
                'code' => 'TBS',
            ),
            393 => 
            array (
                'id' => 1894,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Tursunzade',
                'full_name' => NULL,
                'code' => 'TSZ',
            ),
            394 => 
            array (
                'id' => 1895,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Ura-Tjube',
                'full_name' => NULL,
                'code' => 'UTJ',
            ),
            395 => 
            array (
                'id' => 1896,
                'country_id' => 72,
                'region_id' => NULL,
                'name' => 'Isfara',
                'full_name' => NULL,
                'code' => 'ISF',
            ),
            396 => 
            array (
                'id' => 1897,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Amnat Charoen',
                'full_name' => NULL,
                'code' => '37',
            ),
            397 => 
            array (
                'id' => 1898,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Prachuap Khiri Khan',
                'full_name' => NULL,
                'code' => '77',
            ),
            398 => 
            array (
                'id' => 1899,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Pathum Thani',
                'full_name' => NULL,
                'code' => '13',
            ),
            399 => 
            array (
                'id' => 1900,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Prachin Buri',
                'full_name' => NULL,
                'code' => '25',
            ),
            400 => 
            array (
                'id' => 1901,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Kanchanaburi',
                'full_name' => NULL,
                'code' => '71',
            ),
            401 => 
            array (
                'id' => 1902,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Saraburi',
                'full_name' => NULL,
                'code' => '19',
            ),
            402 => 
            array (
                'id' => 1903,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Pattani',
                'full_name' => NULL,
                'code' => '94',
            ),
            403 => 
            array (
                'id' => 1904,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Samut Prakan',
                'full_name' => NULL,
                'code' => '11',
            ),
            404 => 
            array (
                'id' => 1905,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Nakhon Sawan',
                'full_name' => NULL,
                'code' => '60',
            ),
            405 => 
            array (
                'id' => 1906,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Chachoengsao',
                'full_name' => NULL,
                'code' => '24',
            ),
            406 => 
            array (
                'id' => 1907,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Phetchabun',
                'full_name' => NULL,
                'code' => '76',
            ),
            407 => 
            array (
                'id' => 1908,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Phatthalung',
                'full_name' => NULL,
                'code' => '93',
            ),
            408 => 
            array (
                'id' => 1909,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Chai Nat',
                'full_name' => NULL,
                'code' => '18',
            ),
            409 => 
            array (
                'id' => 1910,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Chaiyaphum',
                'full_name' => NULL,
                'code' => '36',
            ),
            410 => 
            array (
                'id' => 1911,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Uttaradit',
                'full_name' => NULL,
                'code' => '53',
            ),
            411 => 
            array (
                'id' => 1912,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Chumphon',
                'full_name' => NULL,
                'code' => '86',
            ),
            412 => 
            array (
                'id' => 1913,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Chon Buri',
                'full_name' => NULL,
                'code' => '20',
            ),
            413 => 
            array (
                'id' => 1914,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Tak',
                'full_name' => NULL,
                'code' => '63',
            ),
            414 => 
            array (
                'id' => 1915,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Trat',
                'full_name' => NULL,
                'code' => '23',
            ),
            415 => 
            array (
                'id' => 1916,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Phra Nakhon Si Ayutthaya',
                'full_name' => NULL,
                'code' => '14',
            ),
            416 => 
            array (
                'id' => 1917,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Trang',
                'full_name' => NULL,
                'code' => '92',
            ),
            417 => 
            array (
                'id' => 1918,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Phetchaburi',
                'full_name' => NULL,
                'code' => '78',
            ),
            418 => 
            array (
                'id' => 1919,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Nakhon Pathom',
                'full_name' => NULL,
                'code' => '73',
            ),
            419 => 
            array (
                'id' => 1920,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Kamphaeng Phet',
                'full_name' => NULL,
                'code' => '62',
            ),
            420 => 
            array (
                'id' => 1921,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Ang Thong',
                'full_name' => NULL,
                'code' => '15',
            ),
            421 => 
            array (
                'id' => 1922,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Lop Buri',
                'full_name' => NULL,
                'code' => '16',
            ),
            422 => 
            array (
                'id' => 1923,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Kalasin',
                'full_name' => NULL,
                'code' => '46',
            ),
            423 => 
            array (
                'id' => 1924,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Krabi',
                'full_name' => NULL,
                'code' => '81',
            ),
            424 => 
            array (
                'id' => 1925,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Chanthaburi',
                'full_name' => NULL,
                'code' => '22',
            ),
            425 => 
            array (
                'id' => 1926,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Khon Kaen',
                'full_name' => NULL,
                'code' => '40',
            ),
            426 => 
            array (
                'id' => 1927,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Rayong',
                'full_name' => NULL,
                'code' => '21',
            ),
            427 => 
            array (
                'id' => 1928,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Nong Khai',
                'full_name' => NULL,
                'code' => '43',
            ),
            428 => 
            array (
                'id' => 1929,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Nong Bua Lamphu',
                'full_name' => NULL,
                'code' => '39',
            ),
            429 => 
            array (
                'id' => 1930,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Ratchaburi',
                'full_name' => NULL,
                'code' => '70',
            ),
            430 => 
            array (
                'id' => 1931,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Loei',
                'full_name' => NULL,
                'code' => '42',
            ),
            431 => 
            array (
                'id' => 1932,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Roi Et',
                'full_name' => NULL,
                'code' => '45',
            ),
            432 => 
            array (
                'id' => 1933,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Samut Sakhon',
                'full_name' => NULL,
                'code' => '74',
            ),
            433 => 
            array (
                'id' => 1934,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Ranong',
                'full_name' => NULL,
                'code' => '85',
            ),
            434 => 
            array (
                'id' => 1935,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Nakhon Si Thammarat',
                'full_name' => NULL,
                'code' => '80',
            ),
            435 => 
            array (
                'id' => 1936,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Maha Sarakham',
                'full_name' => NULL,
                'code' => '44',
            ),
            436 => 
            array (
                'id' => 1937,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Bangkok',
                'full_name' => NULL,
                'code' => '10',
            ),
            437 => 
            array (
                'id' => 1938,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Mukdahan',
                'full_name' => NULL,
                'code' => '49',
            ),
            438 => 
            array (
                'id' => 1939,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Nakhon Nayok',
                'full_name' => NULL,
                'code' => '26',
            ),
            439 => 
            array (
                'id' => 1940,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Nakhon Phanom',
                'full_name' => NULL,
                'code' => '48',
            ),
            440 => 
            array (
                'id' => 1941,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Nan',
                'full_name' => NULL,
                'code' => '55',
            ),
            441 => 
            array (
                'id' => 1942,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Lamphun',
                'full_name' => NULL,
                'code' => '51',
            ),
            442 => 
            array (
                'id' => 1943,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Nonthaburi',
                'full_name' => NULL,
                'code' => '12',
            ),
            443 => 
            array (
                'id' => 1944,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Phrae',
                'full_name' => NULL,
                'code' => '54',
            ),
            444 => 
            array (
                'id' => 1945,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Phayao',
                'full_name' => NULL,
                'code' => '56',
            ),
            445 => 
            array (
                'id' => 1946,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Phangnga',
                'full_name' => NULL,
                'code' => '82',
            ),
            446 => 
            array (
                'id' => 1947,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Phitsanulok',
                'full_name' => NULL,
                'code' => '65',
            ),
            447 => 
            array (
                'id' => 1948,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Phichit',
                'full_name' => NULL,
                'code' => '66',
            ),
            448 => 
            array (
                'id' => 1949,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Phuket',
                'full_name' => NULL,
                'code' => '83',
            ),
            449 => 
            array (
                'id' => 1950,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Chiang Rai',
                'full_name' => NULL,
                'code' => '57',
            ),
            450 => 
            array (
                'id' => 1951,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Chiang Mai',
                'full_name' => NULL,
                'code' => '50',
            ),
            451 => 
            array (
                'id' => 1952,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Sakon Nakhon',
                'full_name' => NULL,
                'code' => '47',
            ),
            452 => 
            array (
                'id' => 1953,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Satun',
                'full_name' => NULL,
                'code' => '91',
            ),
            453 => 
            array (
                'id' => 1954,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Sa Kaeo',
                'full_name' => NULL,
                'code' => '27',
            ),
            454 => 
            array (
                'id' => 1955,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Si sa ket',
                'full_name' => NULL,
                'code' => '33',
            ),
            455 => 
            array (
                'id' => 1956,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Songkhla',
                'full_name' => NULL,
                'code' => '90',
            ),
            456 => 
            array (
                'id' => 1957,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Sukhothai',
                'full_name' => NULL,
                'code' => '64',
            ),
            457 => 
            array (
                'id' => 1958,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Surat Thani',
                'full_name' => NULL,
                'code' => '84',
            ),
            458 => 
            array (
                'id' => 1959,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Surin',
                'full_name' => NULL,
                'code' => '32',
            ),
            459 => 
            array (
                'id' => 1960,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Suphan Buri',
                'full_name' => NULL,
                'code' => '72',
            ),
            460 => 
            array (
                'id' => 1961,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Narathiwat',
                'full_name' => NULL,
                'code' => '96',
            ),
            461 => 
            array (
                'id' => 1962,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Udon Thani',
                'full_name' => NULL,
                'code' => '41',
            ),
            462 => 
            array (
                'id' => 1963,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Uthai Thani',
                'full_name' => NULL,
                'code' => '61',
            ),
            463 => 
            array (
                'id' => 1964,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Ubon Ratchathani',
                'full_name' => NULL,
                'code' => '34',
            ),
            464 => 
            array (
                'id' => 1965,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Buri Ram',
                'full_name' => NULL,
                'code' => '31',
            ),
            465 => 
            array (
                'id' => 1966,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Sing Buri',
                'full_name' => NULL,
                'code' => '17',
            ),
            466 => 
            array (
                'id' => 1967,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Yasothon',
                'full_name' => NULL,
                'code' => '35',
            ),
            467 => 
            array (
                'id' => 1968,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Yala',
                'full_name' => NULL,
                'code' => '95',
            ),
            468 => 
            array (
                'id' => 1969,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Mae Hong Son',
                'full_name' => NULL,
                'code' => '58',
            ),
            469 => 
            array (
                'id' => 1970,
                'country_id' => 66,
                'region_id' => NULL,
                'name' => 'Samut Songkhram',
                'full_name' => NULL,
                'code' => '75',
            ),
            470 => 
            array (
                'id' => 1971,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Arusha',
                'full_name' => NULL,
                'code' => 'AR',
            ),
            471 => 
            array (
                'id' => 1972,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Kaskazini Pemba',
                'full_name' => NULL,
                'code' => 'PN',
            ),
            472 => 
            array (
                'id' => 1973,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Kusini Pemba',
                'full_name' => NULL,
                'code' => 'PS',
            ),
            473 => 
            array (
                'id' => 1974,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Pwani',
                'full_name' => NULL,
                'code' => 'PW',
            ),
            474 => 
            array (
                'id' => 1975,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Dar es Salaam',
                'full_name' => NULL,
                'code' => 'DS',
            ),
            475 => 
            array (
                'id' => 1976,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Dodoma',
                'full_name' => NULL,
                'code' => 'DO',
            ),
            476 => 
            array (
                'id' => 1977,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Kigoma',
                'full_name' => NULL,
                'code' => 'KI',
            ),
            477 => 
            array (
                'id' => 1978,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Kagera',
                'full_name' => NULL,
                'code' => 'KA',
            ),
            478 => 
            array (
                'id' => 1979,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Lindi',
                'full_name' => NULL,
                'code' => 'LN',
            ),
            479 => 
            array (
                'id' => 1980,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Rukwa',
                'full_name' => NULL,
                'code' => 'RK',
            ),
            480 => 
            array (
                'id' => 1981,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Ruvuma',
                'full_name' => NULL,
                'code' => 'RV',
            ),
            481 => 
            array (
                'id' => 1982,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Mara',
                'full_name' => NULL,
                'code' => 'MR',
            ),
            482 => 
            array (
                'id' => 1983,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Manyara',
                'full_name' => NULL,
                'code' => 'MY',
            ),
            483 => 
            array (
                'id' => 1984,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Morogoro',
                'full_name' => NULL,
                'code' => 'MO',
            ),
            484 => 
            array (
                'id' => 1985,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Mbeya',
                'full_name' => NULL,
                'code' => 'MB',
            ),
            485 => 
            array (
                'id' => 1986,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Mtwara',
                'full_name' => NULL,
                'code' => 'MT',
            ),
            486 => 
            array (
                'id' => 1987,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Mwanza',
                'full_name' => NULL,
                'code' => 'MW',
            ),
            487 => 
            array (
                'id' => 1988,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Kilimanjaro',
                'full_name' => NULL,
                'code' => 'KJ',
            ),
            488 => 
            array (
                'id' => 1989,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Zanzibar',
                'full_name' => NULL,
                'code' => 'ZN',
            ),
            489 => 
            array (
                'id' => 1990,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Kaskazini Unguja',
                'full_name' => NULL,
                'code' => 'UN',
            ),
            490 => 
            array (
                'id' => 1991,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Kusini Unguja',
                'full_name' => NULL,
                'code' => 'US',
            ),
            491 => 
            array (
                'id' => 1992,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Mjini Magharibi',
                'full_name' => NULL,
                'code' => 'MM',
            ),
            492 => 
            array (
                'id' => 1993,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Tabora',
                'full_name' => NULL,
                'code' => 'TB',
            ),
            493 => 
            array (
                'id' => 1994,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Tanga',
                'full_name' => NULL,
                'code' => 'TN',
            ),
            494 => 
            array (
                'id' => 1995,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Singida',
                'full_name' => NULL,
                'code' => 'SI',
            ),
            495 => 
            array (
                'id' => 1996,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Shinyanga',
                'full_name' => NULL,
                'code' => 'SH',
            ),
            496 => 
            array (
                'id' => 1997,
                'country_id' => 20,
                'region_id' => NULL,
                'name' => 'Iringa',
                'full_name' => NULL,
                'code' => 'IR',
            ),
            497 => 
            array (
                'id' => 1998,
                'country_id' => 169,
                'region_id' => NULL,
                'name' => 'Eua',
                'full_name' => NULL,
                'code' => 'E',
            ),
            498 => 
            array (
                'id' => 1999,
                'country_id' => 169,
                'region_id' => NULL,
                'name' => 'Haapai',
                'full_name' => NULL,
                'code' => 'H',
            ),
            499 => 
            array (
                'id' => 2000,
                'country_id' => 169,
                'region_id' => NULL,
                'name' => 'Niuas',
                'full_name' => NULL,
                'code' => 'N',
            ),
        ));
        \DB::table('world_cities')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'country_id' => 169,
                'region_id' => NULL,
                'name' => 'Tongatapu',
                'full_name' => NULL,
                'code' => 'T',
            ),
            1 => 
            array (
                'id' => 2002,
                'country_id' => 169,
                'region_id' => NULL,
                'name' => 'Vavau',
                'full_name' => NULL,
                'code' => 'V',
            ),
            2 => 
            array (
                'id' => 2003,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Ariana',
                'full_name' => NULL,
                'code' => 'AR',
            ),
            3 => 
            array (
                'id' => 2004,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Beja',
                'full_name' => NULL,
                'code' => 'BJ',
            ),
            4 => 
            array (
                'id' => 2005,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Ben Arous',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            5 => 
            array (
                'id' => 2006,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Bizerte',
                'full_name' => NULL,
                'code' => 'BI',
            ),
            6 => 
            array (
                'id' => 2007,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Kebili',
                'full_name' => NULL,
                'code' => 'KB',
            ),
            7 => 
            array (
                'id' => 2008,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Gabes',
                'full_name' => NULL,
                'code' => 'GB',
            ),
            8 => 
            array (
                'id' => 2009,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Gafsa',
                'full_name' => NULL,
                'code' => 'GF',
            ),
            9 => 
            array (
                'id' => 2010,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Jendouba',
                'full_name' => NULL,
                'code' => 'JE',
            ),
            10 => 
            array (
                'id' => 2011,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Le Kef',
                'full_name' => NULL,
                'code' => 'LK',
            ),
            11 => 
            array (
                'id' => 2012,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Kasserine',
                'full_name' => NULL,
                'code' => 'KS',
            ),
            12 => 
            array (
                'id' => 2013,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Kairouan',
                'full_name' => NULL,
                'code' => 'KR',
            ),
            13 => 
            array (
                'id' => 2014,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Mahdia',
                'full_name' => NULL,
                'code' => 'MH',
            ),
            14 => 
            array (
                'id' => 2015,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Manouba',
                'full_name' => NULL,
                'code' => 'MN',
            ),
            15 => 
            array (
                'id' => 2016,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Medenine',
                'full_name' => NULL,
                'code' => 'ME',
            ),
            16 => 
            array (
                'id' => 2017,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Monastir',
                'full_name' => NULL,
                'code' => 'MO',
            ),
            17 => 
            array (
                'id' => 2018,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Nabeul',
                'full_name' => NULL,
                'code' => 'NA',
            ),
            18 => 
            array (
                'id' => 2019,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Sfax',
                'full_name' => NULL,
                'code' => 'SF',
            ),
            19 => 
            array (
                'id' => 2020,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Sousse',
                'full_name' => NULL,
                'code' => 'SO',
            ),
            20 => 
            array (
                'id' => 2021,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Tataouine',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            21 => 
            array (
                'id' => 2022,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Tunis',
                'full_name' => NULL,
                'code' => 'TU',
            ),
            22 => 
            array (
                'id' => 2023,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Tozeur',
                'full_name' => NULL,
                'code' => 'TO',
            ),
            23 => 
            array (
                'id' => 2024,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Sidi Bouzid',
                'full_name' => NULL,
                'code' => 'SD',
            ),
            24 => 
            array (
                'id' => 2025,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Siliana',
                'full_name' => NULL,
                'code' => 'SL',
            ),
            25 => 
            array (
                'id' => 2026,
                'country_id' => 38,
                'region_id' => NULL,
                'name' => 'Zaghouan',
                'full_name' => NULL,
                'code' => 'ZA',
            ),
            26 => 
            array (
                'id' => 2027,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Adana',
                'full_name' => NULL,
                'code' => 'ADA',
            ),
            27 => 
            array (
                'id' => 2028,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Adiyaman',
                'full_name' => NULL,
                'code' => 'ADI',
            ),
            28 => 
            array (
                'id' => 2029,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Ardahan',
                'full_name' => NULL,
                'code' => 'ARD',
            ),
            29 => 
            array (
                'id' => 2030,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Artvin',
                'full_name' => NULL,
                'code' => 'ART',
            ),
            30 => 
            array (
                'id' => 2031,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Afyon',
                'full_name' => NULL,
                'code' => 'AFY',
            ),
            31 => 
            array (
                'id' => 2032,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Aksaray',
                'full_name' => NULL,
                'code' => 'AKS',
            ),
            32 => 
            array (
                'id' => 2033,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Agri',
                'full_name' => NULL,
                'code' => 'AGR',
            ),
            33 => 
            array (
                'id' => 2034,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Amasya',
                'full_name' => NULL,
                'code' => 'AMA',
            ),
            34 => 
            array (
                'id' => 2035,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Edirne',
                'full_name' => NULL,
                'code' => 'EDI',
            ),
            35 => 
            array (
                'id' => 2036,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Erzincan',
                'full_name' => NULL,
                'code' => 'EZC',
            ),
            36 => 
            array (
                'id' => 2037,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Erzurum',
                'full_name' => NULL,
                'code' => 'EZR',
            ),
            37 => 
            array (
                'id' => 2038,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Elazig',
                'full_name' => NULL,
                'code' => 'ELA',
            ),
            38 => 
            array (
                'id' => 2039,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Eskisehir',
                'full_name' => NULL,
                'code' => 'ESK',
            ),
            39 => 
            array (
                'id' => 2040,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Aydin',
                'full_name' => NULL,
                'code' => 'AYI',
            ),
            40 => 
            array (
                'id' => 2041,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Ankara',
                'full_name' => NULL,
                'code' => 'ANK',
            ),
            41 => 
            array (
                'id' => 2042,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Antalya',
                'full_name' => NULL,
                'code' => 'ANT',
            ),
            42 => 
            array (
                'id' => 2043,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Ordu',
                'full_name' => NULL,
                'code' => 'ORD',
            ),
            43 => 
            array (
                'id' => 2044,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Bartin',
                'full_name' => NULL,
                'code' => 'BAR',
            ),
            44 => 
            array (
                'id' => 2045,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Balikesir',
                'full_name' => NULL,
                'code' => 'BAL',
            ),
            45 => 
            array (
                'id' => 2046,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Batman',
                'full_name' => NULL,
                'code' => 'BAT',
            ),
            46 => 
            array (
                'id' => 2047,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Bayburt',
                'full_name' => NULL,
                'code' => 'BAY',
            ),
            47 => 
            array (
                'id' => 2048,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Bilecik',
                'full_name' => NULL,
                'code' => 'BIL',
            ),
            48 => 
            array (
                'id' => 2049,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Bitlis',
                'full_name' => NULL,
                'code' => 'BIT',
            ),
            49 => 
            array (
                'id' => 2050,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Bingol',
                'full_name' => NULL,
                'code' => 'BIN',
            ),
            50 => 
            array (
                'id' => 2051,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Bolu',
                'full_name' => NULL,
                'code' => 'BOL',
            ),
            51 => 
            array (
                'id' => 2052,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Burdur',
                'full_name' => NULL,
                'code' => 'BRD',
            ),
            52 => 
            array (
                'id' => 2053,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Bursa',
                'full_name' => NULL,
                'code' => 'BRS',
            ),
            53 => 
            array (
                'id' => 2054,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Cankiri',
                'full_name' => NULL,
                'code' => 'CKR',
            ),
            54 => 
            array (
                'id' => 2055,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Denizli',
                'full_name' => NULL,
                'code' => 'DEN',
            ),
            55 => 
            array (
                'id' => 2056,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Diyarbakir',
                'full_name' => NULL,
                'code' => 'DIY',
            ),
            56 => 
            array (
                'id' => 2057,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Van',
                'full_name' => NULL,
                'code' => 'VAN',
            ),
            57 => 
            array (
                'id' => 2058,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Hakkari',
                'full_name' => NULL,
                'code' => 'HKR',
            ),
            58 => 
            array (
                'id' => 2059,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Hatay',
                'full_name' => NULL,
                'code' => 'HTY',
            ),
            59 => 
            array (
                'id' => 2060,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Kilis',
                'full_name' => NULL,
                'code' => 'KLS',
            ),
            60 => 
            array (
                'id' => 2061,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Giresun',
                'full_name' => NULL,
                'code' => 'GIR',
            ),
            61 => 
            array (
                'id' => 2062,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Gaziantep',
                'full_name' => NULL,
                'code' => 'GAZ',
            ),
            62 => 
            array (
                'id' => 2063,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Gumushane',
                'full_name' => NULL,
                'code' => 'GMS',
            ),
            63 => 
            array (
                'id' => 2064,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Kars',
                'full_name' => NULL,
                'code' => 'KRS',
            ),
            64 => 
            array (
                'id' => 2065,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Kahraman Maras',
                'full_name' => NULL,
                'code' => 'KAH',
            ),
            65 => 
            array (
                'id' => 2066,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Karabuk',
                'full_name' => NULL,
                'code' => 'KRB',
            ),
            66 => 
            array (
                'id' => 2067,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Karaman',
                'full_name' => NULL,
                'code' => 'KRM',
            ),
            67 => 
            array (
                'id' => 2068,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Kastamonu',
                'full_name' => NULL,
                'code' => 'KAS',
            ),
            68 => 
            array (
                'id' => 2069,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Kayseri',
                'full_name' => NULL,
                'code' => 'KAY',
            ),
            69 => 
            array (
                'id' => 2070,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Kocaeli',
                'full_name' => NULL,
                'code' => 'KOC',
            ),
            70 => 
            array (
                'id' => 2071,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Kirklareli',
                'full_name' => NULL,
                'code' => 'KLR',
            ),
            71 => 
            array (
                'id' => 2072,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Konya',
                'full_name' => NULL,
                'code' => 'KON',
            ),
            72 => 
            array (
                'id' => 2073,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Kirsehir',
                'full_name' => NULL,
                'code' => 'KRH',
            ),
            73 => 
            array (
                'id' => 2074,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Kirikkale',
                'full_name' => NULL,
                'code' => 'KRK',
            ),
            74 => 
            array (
                'id' => 2075,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Urfa',
                'full_name' => NULL,
                'code' => 'URF',
            ),
            75 => 
            array (
                'id' => 2076,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Rize',
                'full_name' => NULL,
                'code' => 'RIZ',
            ),
            76 => 
            array (
                'id' => 2077,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Mardin',
                'full_name' => NULL,
                'code' => 'MAR',
            ),
            77 => 
            array (
                'id' => 2078,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Malatya',
                'full_name' => NULL,
                'code' => 'MAL',
            ),
            78 => 
            array (
                'id' => 2079,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Manisa',
                'full_name' => NULL,
                'code' => 'MAN',
            ),
            79 => 
            array (
                'id' => 2080,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Mugla',
                'full_name' => NULL,
                'code' => 'MUG',
            ),
            80 => 
            array (
                'id' => 2081,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Mus',
                'full_name' => NULL,
                'code' => 'MUS',
            ),
            81 => 
            array (
                'id' => 2082,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Nevsehir',
                'full_name' => NULL,
                'code' => 'NEV',
            ),
            82 => 
            array (
                'id' => 2083,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Nigde',
                'full_name' => NULL,
                'code' => 'NIG',
            ),
            83 => 
            array (
                'id' => 2084,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Canakkale',
                'full_name' => NULL,
                'code' => 'CKL',
            ),
            84 => 
            array (
                'id' => 2085,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Corum',
                'full_name' => NULL,
                'code' => 'COR',
            ),
            85 => 
            array (
                'id' => 2086,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Kutahya',
                'full_name' => NULL,
                'code' => 'KUT',
            ),
            86 => 
            array (
                'id' => 2087,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Sakarya',
                'full_name' => NULL,
                'code' => 'SAK',
            ),
            87 => 
            array (
                'id' => 2088,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Samsun',
                'full_name' => NULL,
                'code' => 'SAM',
            ),
            88 => 
            array (
                'id' => 2089,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Tekirdag',
                'full_name' => NULL,
                'code' => 'TEL',
            ),
            89 => 
            array (
                'id' => 2090,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Trabzon',
                'full_name' => NULL,
                'code' => 'TRA',
            ),
            90 => 
            array (
                'id' => 2091,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Tunceli',
                'full_name' => NULL,
                'code' => 'TUN',
            ),
            91 => 
            array (
                'id' => 2092,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Tokat',
                'full_name' => NULL,
                'code' => 'TOK',
            ),
            92 => 
            array (
                'id' => 2093,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Usak',
                'full_name' => NULL,
                'code' => 'USK',
            ),
            93 => 
            array (
                'id' => 2094,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Sirnak',
                'full_name' => NULL,
                'code' => 'SIR',
            ),
            94 => 
            array (
                'id' => 2095,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Siirt',
                'full_name' => NULL,
                'code' => 'SII',
            ),
            95 => 
            array (
                'id' => 2096,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Sinop',
                'full_name' => NULL,
                'code' => 'SIN',
            ),
            96 => 
            array (
                'id' => 2097,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Sivas',
                'full_name' => NULL,
                'code' => 'SIV',
            ),
            97 => 
            array (
                'id' => 2098,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Igdir',
                'full_name' => NULL,
                'code' => 'IGD',
            ),
            98 => 
            array (
                'id' => 2099,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Icel',
                'full_name' => NULL,
                'code' => 'ICE',
            ),
            99 => 
            array (
                'id' => 2100,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Isparta',
                'full_name' => NULL,
                'code' => 'ISP',
            ),
            100 => 
            array (
                'id' => 2101,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Istanbul',
                'full_name' => NULL,
                'code' => 'IST',
            ),
            101 => 
            array (
                'id' => 2102,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Izmir',
                'full_name' => NULL,
                'code' => 'IZM',
            ),
            102 => 
            array (
                'id' => 2103,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Yozgat',
                'full_name' => NULL,
                'code' => 'YOZ',
            ),
            103 => 
            array (
                'id' => 2104,
                'country_id' => 134,
                'region_id' => NULL,
                'name' => 'Zonguldak',
                'full_name' => NULL,
                'code' => 'ZON',
            ),
            104 => 
            array (
                'id' => 2105,
                'country_id' => 95,
                'region_id' => NULL,
                'name' => 'Ahal',
                'full_name' => NULL,
                'code' => 'A',
            ),
            105 => 
            array (
                'id' => 2106,
                'country_id' => 95,
                'region_id' => NULL,
                'name' => 'Ashgabat',
                'full_name' => NULL,
                'code' => 'ASB',
            ),
            106 => 
            array (
                'id' => 2107,
                'country_id' => 95,
                'region_id' => NULL,
                'name' => 'Balkan',
                'full_name' => NULL,
                'code' => 'B',
            ),
            107 => 
            array (
                'id' => 2108,
                'country_id' => 95,
                'region_id' => NULL,
                'name' => 'Dashoguz',
                'full_name' => NULL,
                'code' => 'D',
            ),
            108 => 
            array (
                'id' => 2109,
                'country_id' => 95,
                'region_id' => NULL,
                'name' => 'Lebap',
                'full_name' => NULL,
                'code' => 'L',
            ),
            109 => 
            array (
                'id' => 2110,
                'country_id' => 95,
                'region_id' => NULL,
                'name' => 'Mary',
                'full_name' => NULL,
                'code' => 'M',
            ),
            110 => 
            array (
                'id' => 2111,
                'country_id' => 95,
                'region_id' => NULL,
                'name' => 'Nebitdag',
                'full_name' => NULL,
                'code' => 'NEB',
            ),
            111 => 
            array (
                'id' => 2112,
                'country_id' => 174,
                'region_id' => NULL,
                'name' => 'Malampa',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            112 => 
            array (
                'id' => 2113,
                'country_id' => 174,
                'region_id' => NULL,
                'name' => 'Penama',
                'full_name' => NULL,
                'code' => 'PE',
            ),
            113 => 
            array (
                'id' => 2114,
                'country_id' => 174,
                'region_id' => NULL,
                'name' => 'Sanma',
                'full_name' => NULL,
                'code' => 'SA',
            ),
            114 => 
            array (
                'id' => 2115,
                'country_id' => 174,
                'region_id' => NULL,
                'name' => 'Tafea',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            115 => 
            array (
                'id' => 2116,
                'country_id' => 174,
                'region_id' => NULL,
                'name' => 'Torba',
                'full_name' => NULL,
                'code' => 'TO',
            ),
            116 => 
            array (
                'id' => 2117,
                'country_id' => 174,
                'region_id' => NULL,
                'name' => 'Shefa',
                'full_name' => NULL,
                'code' => 'SH',
            ),
            117 => 
            array (
                'id' => 2118,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'El Progreso',
                'full_name' => NULL,
                'code' => 'PR',
            ),
            118 => 
            array (
                'id' => 2119,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Escuintla',
                'full_name' => NULL,
                'code' => 'ES',
            ),
            119 => 
            array (
                'id' => 2120,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Jalapa',
                'full_name' => NULL,
                'code' => 'JA',
            ),
            120 => 
            array (
                'id' => 2121,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Jutiapa',
                'full_name' => NULL,
                'code' => 'JU',
            ),
            121 => 
            array (
                'id' => 2122,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Quiche',
                'full_name' => NULL,
                'code' => 'QC',
            ),
            122 => 
            array (
                'id' => 2123,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Quetzaltenango',
                'full_name' => NULL,
                'code' => 'QZ',
            ),
            123 => 
            array (
                'id' => 2124,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Retalhuleu',
                'full_name' => NULL,
                'code' => 'RE',
            ),
            124 => 
            array (
                'id' => 2125,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Mixco',
                'full_name' => NULL,
                'code' => 'MIX',
            ),
            125 => 
            array (
                'id' => 2126,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Peten',
                'full_name' => NULL,
                'code' => 'PE',
            ),
            126 => 
            array (
                'id' => 2127,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Chiquimula',
                'full_name' => NULL,
                'code' => 'CQ',
            ),
            127 => 
            array (
                'id' => 2128,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Chimaltenango',
                'full_name' => NULL,
                'code' => 'CM',
            ),
            128 => 
            array (
                'id' => 2129,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Zacapa',
                'full_name' => NULL,
                'code' => 'ZA',
            ),
            129 => 
            array (
                'id' => 2130,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Sacatepequez',
                'full_name' => NULL,
                'code' => 'ST',
            ),
            130 => 
            array (
                'id' => 2131,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Alta Verapaz',
                'full_name' => NULL,
                'code' => 'AV',
            ),
            131 => 
            array (
                'id' => 2132,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Santa Rosa',
                'full_name' => NULL,
                'code' => 'SR',
            ),
            132 => 
            array (
                'id' => 2133,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'San Marcos',
                'full_name' => NULL,
                'code' => 'SM',
            ),
            133 => 
            array (
                'id' => 2134,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Suchitepequez',
                'full_name' => NULL,
                'code' => 'SU',
            ),
            134 => 
            array (
                'id' => 2135,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Solola',
                'full_name' => NULL,
                'code' => 'SO',
            ),
            135 => 
            array (
                'id' => 2136,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Totonicapan',
                'full_name' => NULL,
                'code' => 'TO',
            ),
            136 => 
            array (
                'id' => 2137,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Guatemala',
                'full_name' => NULL,
                'code' => 'GU',
            ),
            137 => 
            array (
                'id' => 2138,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Huehuetenango',
                'full_name' => NULL,
                'code' => 'HU',
            ),
            138 => 
            array (
                'id' => 2139,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Baja Verapaz',
                'full_name' => NULL,
                'code' => 'BV',
            ),
            139 => 
            array (
                'id' => 2140,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Villa Nueva',
                'full_name' => NULL,
                'code' => 'VIN',
            ),
            140 => 
            array (
                'id' => 2141,
                'country_id' => 114,
                'region_id' => NULL,
                'name' => 'Izabal',
                'full_name' => NULL,
                'code' => 'IZ',
            ),
            141 => 
            array (
                'id' => 2142,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Aragua',
                'full_name' => NULL,
                'code' => 'D',
            ),
            142 => 
            array (
                'id' => 2143,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Delta Amacuro',
                'full_name' => NULL,
                'code' => 'Y',
            ),
            143 => 
            array (
                'id' => 2144,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Apure',
                'full_name' => NULL,
                'code' => 'C',
            ),
            144 => 
            array (
                'id' => 2145,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Anzoategui',
                'full_name' => NULL,
                'code' => 'B',
            ),
            145 => 
            array (
                'id' => 2146,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Barinas',
                'full_name' => NULL,
                'code' => 'E',
            ),
            146 => 
            array (
                'id' => 2147,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Bolivar',
                'full_name' => NULL,
                'code' => 'F',
            ),
            147 => 
            array (
                'id' => 2148,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Portuguesa',
                'full_name' => NULL,
                'code' => 'P',
            ),
            148 => 
            array (
                'id' => 2149,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Falcon',
                'full_name' => NULL,
                'code' => 'I',
            ),
            149 => 
            array (
                'id' => 2150,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Guarico',
                'full_name' => NULL,
                'code' => 'J',
            ),
            150 => 
            array (
                'id' => 2151,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Caracas',
                'full_name' => NULL,
                'code' => 'A',
            ),
            151 => 
            array (
                'id' => 2152,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Carabobo',
                'full_name' => NULL,
                'code' => 'G',
            ),
            152 => 
            array (
                'id' => 2153,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Cojedes',
                'full_name' => NULL,
                'code' => 'H',
            ),
            153 => 
            array (
                'id' => 2154,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Lara',
                'full_name' => NULL,
                'code' => 'K',
            ),
            154 => 
            array (
                'id' => 2155,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Dependencias Federales',
                'full_name' => NULL,
                'code' => 'W',
            ),
            155 => 
            array (
                'id' => 2156,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Merida',
                'full_name' => NULL,
                'code' => 'L',
            ),
            156 => 
            array (
                'id' => 2157,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Miranda',
                'full_name' => NULL,
                'code' => 'M',
            ),
            157 => 
            array (
                'id' => 2158,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Monagas',
                'full_name' => NULL,
                'code' => 'N',
            ),
            158 => 
            array (
                'id' => 2159,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Sucre',
                'full_name' => NULL,
                'code' => 'R',
            ),
            159 => 
            array (
                'id' => 2160,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Zulia',
                'full_name' => NULL,
                'code' => 'V',
            ),
            160 => 
            array (
                'id' => 2161,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Tachira',
                'full_name' => NULL,
                'code' => 'S',
            ),
            161 => 
            array (
                'id' => 2162,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Trujillo',
                'full_name' => NULL,
                'code' => 'T',
            ),
            162 => 
            array (
                'id' => 2163,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Estado Nueva Esparta',
                'full_name' => NULL,
                'code' => 'O',
            ),
            163 => 
            array (
                'id' => 2164,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Yaracuy',
                'full_name' => NULL,
                'code' => 'U',
            ),
            164 => 
            array (
                'id' => 2165,
                'country_id' => 192,
                'region_id' => NULL,
                'name' => 'Amazonas',
                'full_name' => NULL,
                'code' => 'Z',
            ),
            165 => 
            array (
                'id' => 2166,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Arua',
                'full_name' => NULL,
                'code' => 'ARU',
            ),
            166 => 
            array (
                'id' => 2167,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Apac',
                'full_name' => NULL,
                'code' => 'APC',
            ),
            167 => 
            array (
                'id' => 2168,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Adjumani',
                'full_name' => NULL,
                'code' => 'ADJ',
            ),
            168 => 
            array (
                'id' => 2169,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Bundibugyo',
                'full_name' => NULL,
                'code' => 'BUN',
            ),
            169 => 
            array (
                'id' => 2170,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Bugiri',
                'full_name' => NULL,
                'code' => 'BUG',
            ),
            170 => 
            array (
                'id' => 2171,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Busia',
                'full_name' => NULL,
                'code' => 'BUS',
            ),
            171 => 
            array (
                'id' => 2172,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Bushenyi',
                'full_name' => NULL,
                'code' => 'BSH',
            ),
            172 => 
            array (
                'id' => 2173,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Ntungamo',
                'full_name' => NULL,
                'code' => 'NTU',
            ),
            173 => 
            array (
                'id' => 2174,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Gulu',
                'full_name' => NULL,
                'code' => 'GUL',
            ),
            174 => 
            array (
                'id' => 2175,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Hoima',
                'full_name' => NULL,
                'code' => 'HOI',
            ),
            175 => 
            array (
                'id' => 2176,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kibaale',
                'full_name' => NULL,
                'code' => 'KBA',
            ),
            176 => 
            array (
                'id' => 2177,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kiboga',
                'full_name' => NULL,
                'code' => 'KIB',
            ),
            177 => 
            array (
                'id' => 2178,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kyenjojo',
                'full_name' => NULL,
                'code' => 'KYE',
            ),
            178 => 
            array (
                'id' => 2179,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kisoro',
                'full_name' => NULL,
                'code' => 'KIS',
            ),
            179 => 
            array (
                'id' => 2180,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kitgum',
                'full_name' => NULL,
                'code' => 'KIT',
            ),
            180 => 
            array (
                'id' => 2181,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Jinja',
                'full_name' => NULL,
                'code' => 'JIN',
            ),
            181 => 
            array (
                'id' => 2182,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kabale',
                'full_name' => NULL,
                'code' => 'KBL',
            ),
            182 => 
            array (
                'id' => 2183,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kabarole',
                'full_name' => NULL,
                'code' => 'KAR',
            ),
            183 => 
            array (
                'id' => 2184,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kaberamaido',
                'full_name' => NULL,
                'code' => 'KAB',
            ),
            184 => 
            array (
                'id' => 2185,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kalangala',
                'full_name' => NULL,
                'code' => 'KAL',
            ),
            185 => 
            array (
                'id' => 2186,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kamwenge',
                'full_name' => NULL,
                'code' => 'KAM',
            ),
            186 => 
            array (
                'id' => 2187,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kamuli',
                'full_name' => NULL,
                'code' => 'KML',
            ),
            187 => 
            array (
                'id' => 2188,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kanungu',
                'full_name' => NULL,
                'code' => 'KAN',
            ),
            188 => 
            array (
                'id' => 2189,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kapchorwa',
                'full_name' => NULL,
                'code' => 'KPC',
            ),
            189 => 
            array (
                'id' => 2190,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kasese',
                'full_name' => NULL,
                'code' => 'KAS',
            ),
            190 => 
            array (
                'id' => 2191,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Katakwi',
                'full_name' => NULL,
                'code' => 'KTK',
            ),
            191 => 
            array (
                'id' => 2192,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kayunga',
                'full_name' => NULL,
                'code' => 'KAY',
            ),
            192 => 
            array (
                'id' => 2193,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kampala',
                'full_name' => NULL,
                'code' => 'KMP',
            ),
            193 => 
            array (
                'id' => 2194,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kotido',
                'full_name' => NULL,
                'code' => 'KOT',
            ),
            194 => 
            array (
                'id' => 2195,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Kumi',
                'full_name' => NULL,
                'code' => 'KUM',
            ),
            195 => 
            array (
                'id' => 2196,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Rakai',
                'full_name' => NULL,
                'code' => 'RAK',
            ),
            196 => 
            array (
                'id' => 2197,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Lira',
                'full_name' => NULL,
                'code' => 'LIR',
            ),
            197 => 
            array (
                'id' => 2198,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Luwero',
                'full_name' => NULL,
                'code' => 'LUW',
            ),
            198 => 
            array (
                'id' => 2199,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Rukungiri',
                'full_name' => NULL,
                'code' => 'RUK',
            ),
            199 => 
            array (
                'id' => 2200,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Masaka',
                'full_name' => NULL,
                'code' => 'MAS',
            ),
            200 => 
            array (
                'id' => 2201,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Masindi',
                'full_name' => NULL,
                'code' => 'MSN',
            ),
            201 => 
            array (
                'id' => 2202,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Mayuge',
                'full_name' => NULL,
                'code' => 'MAY',
            ),
            202 => 
            array (
                'id' => 2203,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Moroto',
                'full_name' => NULL,
                'code' => 'MRT',
            ),
            203 => 
            array (
                'id' => 2204,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Moyo',
                'full_name' => NULL,
                'code' => 'MOY',
            ),
            204 => 
            array (
                'id' => 2205,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Mbarara',
                'full_name' => NULL,
                'code' => 'MBR',
            ),
            205 => 
            array (
                'id' => 2206,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Mbale',
                'full_name' => NULL,
                'code' => 'MBA',
            ),
            206 => 
            array (
                'id' => 2207,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Mpigi',
                'full_name' => NULL,
                'code' => 'MPI',
            ),
            207 => 
            array (
                'id' => 2208,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Mubende',
                'full_name' => NULL,
                'code' => 'MUB',
            ),
            208 => 
            array (
                'id' => 2209,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Mukono',
                'full_name' => NULL,
                'code' => 'MUK',
            ),
            209 => 
            array (
                'id' => 2210,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Nakapiripirit',
                'full_name' => NULL,
                'code' => 'NAK',
            ),
            210 => 
            array (
                'id' => 2211,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Nakasongola',
                'full_name' => NULL,
                'code' => 'NKS',
            ),
            211 => 
            array (
                'id' => 2212,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Nebbi',
                'full_name' => NULL,
                'code' => 'NEB',
            ),
            212 => 
            array (
                'id' => 2213,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Pader',
                'full_name' => NULL,
                'code' => 'PAD',
            ),
            213 => 
            array (
                'id' => 2214,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Pallisa',
                'full_name' => NULL,
                'code' => 'PAL',
            ),
            214 => 
            array (
                'id' => 2215,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Sembabule',
                'full_name' => NULL,
                'code' => 'SEM',
            ),
            215 => 
            array (
                'id' => 2216,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Soroti',
                'full_name' => NULL,
                'code' => 'SOR',
            ),
            216 => 
            array (
                'id' => 2217,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Tororo',
                'full_name' => NULL,
                'code' => 'TOR',
            ),
            217 => 
            array (
                'id' => 2218,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Wakiso',
                'full_name' => NULL,
                'code' => 'WAK',
            ),
            218 => 
            array (
                'id' => 2219,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Sironko',
                'full_name' => NULL,
                'code' => 'SIR',
            ),
            219 => 
            array (
                'id' => 2220,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Iganga',
                'full_name' => NULL,
                'code' => 'IGA',
            ),
            220 => 
            array (
                'id' => 2221,
                'country_id' => 24,
                'region_id' => NULL,
                'name' => 'Yumbe',
                'full_name' => NULL,
                'code' => 'YUM',
            ),
            221 => 
            array (
                'id' => 2222,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Odessa',
                'full_name' => NULL,
                'code' => '51',
            ),
            222 => 
            array (
                'id' => 2223,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Poltava',
                'full_name' => NULL,
                'code' => '53',
            ),
            223 => 
            array (
                'id' => 2224,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Dnipropetrovsk',
                'full_name' => NULL,
                'code' => '12',
            ),
            224 => 
            array (
                'id' => 2225,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Donetsk',
                'full_name' => NULL,
                'code' => '14',
            ),
            225 => 
            array (
                'id' => 2226,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Kharkiv',
                'full_name' => NULL,
                'code' => '63',
            ),
            226 => 
            array (
                'id' => 2227,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Khersonsrka',
                'full_name' => NULL,
                'code' => '65',
            ),
            227 => 
            array (
                'id' => 2228,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Khmelnytsky',
                'full_name' => NULL,
                'code' => '68',
            ),
            228 => 
            array (
                'id' => 2229,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Kyiv',
                'full_name' => NULL,
                'code' => '30',
            ),
            229 => 
            array (
                'id' => 2230,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Kirovohrad',
                'full_name' => NULL,
                'code' => '35',
            ),
            230 => 
            array (
                'id' => 2231,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Ternopil',
                'full_name' => NULL,
                'code' => '61',
            ),
            231 => 
            array (
                'id' => 2232,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Respublika Krym',
                'full_name' => NULL,
                'code' => '43',
            ),
            232 => 
            array (
                'id' => 2233,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Lviv',
                'full_name' => NULL,
                'code' => '46',
            ),
            233 => 
            array (
                'id' => 2234,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Luhansk',
                'full_name' => NULL,
                'code' => '9',
            ),
            234 => 
            array (
                'id' => 2235,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Rivne',
                'full_name' => NULL,
                'code' => '56',
            ),
            235 => 
            array (
                'id' => 2236,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Mykolayiv',
                'full_name' => NULL,
                'code' => '48',
            ),
            236 => 
            array (
                'id' => 2237,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Cherkasy',
                'full_name' => NULL,
                'code' => '71',
            ),
            237 => 
            array (
                'id' => 2238,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Chernihiv',
                'full_name' => NULL,
                'code' => '74',
            ),
            238 => 
            array (
                'id' => 2239,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Chernivtsi',
                'full_name' => NULL,
                'code' => '77',
            ),
            239 => 
            array (
                'id' => 2240,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Zhytomyr',
                'full_name' => NULL,
                'code' => '18',
            ),
            240 => 
            array (
                'id' => 2241,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Sumy',
                'full_name' => NULL,
                'code' => '59',
            ),
            241 => 
            array (
                'id' => 2242,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Zakarpatska',
                'full_name' => NULL,
                'code' => '21',
            ),
            242 => 
            array (
                'id' => 2243,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Vinnytsya',
                'full_name' => NULL,
                'code' => '5',
            ),
            243 => 
            array (
                'id' => 2244,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Volyn',
                'full_name' => NULL,
                'code' => '7',
            ),
            244 => 
            array (
                'id' => 2245,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Ivano-Frankivsk',
                'full_name' => NULL,
                'code' => '26',
            ),
            245 => 
            array (
                'id' => 2246,
                'country_id' => 120,
                'region_id' => NULL,
                'name' => 'Zaporizhzhya',
                'full_name' => NULL,
                'code' => '23',
            ),
            246 => 
            array (
                'id' => 2247,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Artigas',
                'full_name' => NULL,
                'code' => 'AR',
            ),
            247 => 
            array (
                'id' => 2248,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Durazno',
                'full_name' => NULL,
                'code' => 'DU',
            ),
            248 => 
            array (
                'id' => 2249,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Florida',
                'full_name' => NULL,
                'code' => 'FA',
            ),
            249 => 
            array (
                'id' => 2250,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Flores',
                'full_name' => NULL,
                'code' => 'FS',
            ),
            250 => 
            array (
                'id' => 2251,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Canelones',
                'full_name' => NULL,
                'code' => 'CA',
            ),
            251 => 
            array (
                'id' => 2252,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Colonia',
                'full_name' => NULL,
                'code' => 'CO',
            ),
            252 => 
            array (
                'id' => 2253,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Lavalleja',
                'full_name' => NULL,
                'code' => 'LA',
            ),
            253 => 
            array (
                'id' => 2254,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Rivera',
                'full_name' => NULL,
                'code' => 'RV',
            ),
            254 => 
            array (
                'id' => 2255,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Rocha',
                'full_name' => NULL,
                'code' => 'RO',
            ),
            255 => 
            array (
                'id' => 2256,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Maldonado',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            256 => 
            array (
                'id' => 2257,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Montevideo',
                'full_name' => NULL,
                'code' => 'MO',
            ),
            257 => 
            array (
                'id' => 2258,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Rio Negro',
                'full_name' => NULL,
                'code' => 'RN',
            ),
            258 => 
            array (
                'id' => 2259,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Paysandu',
                'full_name' => NULL,
                'code' => 'PA',
            ),
            259 => 
            array (
                'id' => 2260,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Salto',
                'full_name' => NULL,
                'code' => 'SL',
            ),
            260 => 
            array (
                'id' => 2261,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Cerro Largo',
                'full_name' => NULL,
                'code' => 'CL',
            ),
            261 => 
            array (
                'id' => 2262,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Treinta y Tres',
                'full_name' => NULL,
                'code' => 'TT',
            ),
            262 => 
            array (
                'id' => 2263,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'San Jose',
                'full_name' => NULL,
                'code' => 'SJ',
            ),
            263 => 
            array (
                'id' => 2264,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Soriano',
                'full_name' => NULL,
                'code' => 'SO',
            ),
            264 => 
            array (
                'id' => 2265,
                'country_id' => 193,
                'region_id' => NULL,
                'name' => 'Tacuarembo',
                'full_name' => NULL,
                'code' => 'TAW',
            ),
            265 => 
            array (
                'id' => 2266,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Andijon',
                'full_name' => NULL,
                'code' => 'AN',
            ),
            266 => 
            array (
                'id' => 2267,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Buxoro',
                'full_name' => NULL,
                'code' => 'BU',
            ),
            267 => 
            array (
                'id' => 2268,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Fargona',
                'full_name' => NULL,
                'code' => 'FA',
            ),
            268 => 
            array (
                'id' => 2269,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Xorazm',
                'full_name' => NULL,
                'code' => 'XO',
            ),
            269 => 
            array (
                'id' => 2270,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Jizzax',
                'full_name' => NULL,
                'code' => 'JI',
            ),
            270 => 
            array (
                'id' => 2271,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Qoraqalpogiston',
                'full_name' => NULL,
                'code' => 'QR',
            ),
            271 => 
            array (
                'id' => 2272,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Qasqadaryo',
                'full_name' => NULL,
                'code' => 'QA',
            ),
            272 => 
            array (
                'id' => 2273,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Namangan',
                'full_name' => NULL,
                'code' => 'NG',
            ),
            273 => 
            array (
                'id' => 2274,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Navoiy',
                'full_name' => NULL,
                'code' => 'NW',
            ),
            274 => 
            array (
                'id' => 2275,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Samarqand',
                'full_name' => NULL,
                'code' => 'SA',
            ),
            275 => 
            array (
                'id' => 2276,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Surxondaryo',
                'full_name' => NULL,
                'code' => 'SU',
            ),
            276 => 
            array (
                'id' => 2277,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Toshkent',
                'full_name' => NULL,
                'code' => 'TK',
            ),
            277 => 
            array (
                'id' => 2278,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Toshkent Shahri',
                'full_name' => NULL,
                'code' => 'TO',
            ),
            278 => 
            array (
                'id' => 2279,
                'country_id' => 60,
                'region_id' => NULL,
                'name' => 'Sirdaryo',
                'full_name' => NULL,
                'code' => 'SI',
            ),
            279 => 
            array (
                'id' => 2280,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Almeria',
                'full_name' => NULL,
                'code' => 'LEI',
            ),
            280 => 
            array (
                'id' => 2281,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Albacete',
                'full_name' => NULL,
                'code' => 'ALB',
            ),
            281 => 
            array (
                'id' => 2282,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Alava',
                'full_name' => NULL,
                'code' => 'ALA',
            ),
            282 => 
            array (
                'id' => 2283,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Alicante',
                'full_name' => NULL,
                'code' => 'ALC',
            ),
            283 => 
            array (
                'id' => 2284,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Asturias',
                'full_name' => NULL,
                'code' => 'AST',
            ),
            284 => 
            array (
                'id' => 2285,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Avila',
                'full_name' => NULL,
                'code' => 'AVI',
            ),
            285 => 
            array (
                'id' => 2286,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Orense',
                'full_name' => NULL,
                'code' => 'ORE',
            ),
            286 => 
            array (
                'id' => 2287,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Badajoz',
                'full_name' => NULL,
                'code' => 'BJZ',
            ),
            287 => 
            array (
                'id' => 2288,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Baleares',
                'full_name' => NULL,
                'code' => 'BLR',
            ),
            288 => 
            array (
                'id' => 2289,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Valladolid',
                'full_name' => NULL,
                'code' => 'VLL',
            ),
            289 => 
            array (
                'id' => 2290,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Valencia',
                'full_name' => NULL,
                'code' => 'VLC',
            ),
            290 => 
            array (
                'id' => 2291,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Barcelona',
                'full_name' => NULL,
                'code' => 'BCN',
            ),
            291 => 
            array (
                'id' => 2292,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Vizcaya',
                'full_name' => NULL,
                'code' => 'VSE',
            ),
            292 => 
            array (
                'id' => 2293,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Burgos',
                'full_name' => NULL,
                'code' => 'BUR',
            ),
            293 => 
            array (
                'id' => 2294,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Granada',
                'full_name' => NULL,
                'code' => 'GRX',
            ),
            294 => 
            array (
                'id' => 2295,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Guadalajara',
                'full_name' => NULL,
                'code' => 'GUA',
            ),
            295 => 
            array (
                'id' => 2296,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Jaen',
                'full_name' => NULL,
                'code' => 'JAE',
            ),
            296 => 
            array (
                'id' => 2297,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Gerona',
                'full_name' => NULL,
                'code' => 'GRO',
            ),
            297 => 
            array (
                'id' => 2298,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Guipuzcoa',
                'full_name' => NULL,
                'code' => 'GUI',
            ),
            298 => 
            array (
                'id' => 2299,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Cadiz',
                'full_name' => NULL,
                'code' => 'CAD',
            ),
            299 => 
            array (
                'id' => 2300,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Caceres',
                'full_name' => NULL,
                'code' => 'CCS',
            ),
            300 => 
            array (
                'id' => 2301,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Cludad Real',
                'full_name' => NULL,
                'code' => 'CIR',
            ),
            301 => 
            array (
                'id' => 2302,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Castellon',
                'full_name' => NULL,
                'code' => 'CAS',
            ),
            302 => 
            array (
                'id' => 2303,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Cordoba',
                'full_name' => NULL,
                'code' => 'ODB',
            ),
            303 => 
            array (
                'id' => 2304,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Cuenca',
                'full_name' => NULL,
                'code' => 'CUE',
            ),
            304 => 
            array (
                'id' => 2305,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'La Coruna',
                'full_name' => NULL,
                'code' => 'LCG',
            ),
            305 => 
            array (
                'id' => 2306,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'La Rioja',
                'full_name' => NULL,
                'code' => 'ARL',
            ),
            306 => 
            array (
                'id' => 2307,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Las Palmas',
                'full_name' => NULL,
                'code' => 'LPA',
            ),
            307 => 
            array (
                'id' => 2308,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Leon',
                'full_name' => NULL,
                'code' => 'LEN',
            ),
            308 => 
            array (
                'id' => 2309,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Lleida',
                'full_name' => NULL,
                'code' => 'LLE',
            ),
            309 => 
            array (
                'id' => 2310,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Provincia de Lugo',
                'full_name' => NULL,
                'code' => 'LGO',
            ),
            310 => 
            array (
                'id' => 2311,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Madrid',
                'full_name' => NULL,
                'code' => 'MAD',
            ),
            311 => 
            array (
                'id' => 2312,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Malaga',
                'full_name' => NULL,
                'code' => 'AGP',
            ),
            312 => 
            array (
                'id' => 2313,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Murcia',
                'full_name' => NULL,
                'code' => 'MJV',
            ),
            313 => 
            array (
                'id' => 2314,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Navarra',
                'full_name' => NULL,
                'code' => 'NVV',
            ),
            314 => 
            array (
                'id' => 2315,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Palencia',
                'full_name' => NULL,
                'code' => 'PAC',
            ),
            315 => 
            array (
                'id' => 2316,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Provincia de Pontevedra',
                'full_name' => NULL,
                'code' => 'PEV',
            ),
            316 => 
            array (
                'id' => 2317,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Zaragoza',
                'full_name' => NULL,
                'code' => 'ZAZ',
            ),
            317 => 
            array (
                'id' => 2318,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Salamanca',
                'full_name' => NULL,
                'code' => 'SLM',
            ),
            318 => 
            array (
                'id' => 2319,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Zamora',
                'full_name' => NULL,
                'code' => 'ZMR',
            ),
            319 => 
            array (
                'id' => 2320,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Segovia',
                'full_name' => NULL,
                'code' => 'SEG',
            ),
            320 => 
            array (
                'id' => 2321,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Sevilla',
                'full_name' => NULL,
                'code' => 'SVQ',
            ),
            321 => 
            array (
                'id' => 2322,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Santander',
                'full_name' => NULL,
                'code' => 'SDR',
            ),
            322 => 
            array (
                'id' => 2323,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Santa Cruz de Tenerife',
                'full_name' => NULL,
                'code' => 'SCT',
            ),
            323 => 
            array (
                'id' => 2324,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Soria',
                'full_name' => NULL,
                'code' => 'SOR',
            ),
            324 => 
            array (
                'id' => 2325,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Tarragona',
                'full_name' => NULL,
                'code' => 'TAR',
            ),
            325 => 
            array (
                'id' => 2326,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Teruel',
                'full_name' => NULL,
                'code' => 'TER',
            ),
            326 => 
            array (
                'id' => 2327,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Toledo',
                'full_name' => NULL,
                'code' => 'TOL',
            ),
            327 => 
            array (
                'id' => 2328,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Huelva',
                'full_name' => NULL,
                'code' => 'HUV',
            ),
            328 => 
            array (
                'id' => 2329,
                'country_id' => 155,
                'region_id' => NULL,
                'name' => 'Huesca',
                'full_name' => NULL,
                'code' => 'HUC',
            ),
            329 => 
            array (
                'id' => 2330,
                'country_id' => 143,
                'region_id' => NULL,
                'name' => 'Peiraievs',
                'full_name' => NULL,
                'code' => 'PRI',
            ),
            330 => 
            array (
                'id' => 2331,
                'country_id' => 143,
                'region_id' => NULL,
                'name' => 'Dodecanese',
                'full_name' => NULL,
                'code' => 'DO',
            ),
            331 => 
            array (
                'id' => 2332,
                'country_id' => 143,
                'region_id' => NULL,
                'name' => 'Chanion',
                'full_name' => NULL,
                'code' => 'CHQ',
            ),
            332 => 
            array (
                'id' => 2333,
                'country_id' => 143,
                'region_id' => NULL,
                'name' => 'Cyclades',
                'full_name' => NULL,
                'code' => 'CY',
            ),
            333 => 
            array (
                'id' => 2334,
                'country_id' => 143,
                'region_id' => NULL,
                'name' => 'Lasithiou',
                'full_name' => NULL,
                'code' => 'LST',
            ),
            334 => 
            array (
                'id' => 2335,
                'country_id' => 143,
                'region_id' => NULL,
                'name' => 'Lesbos',
                'full_name' => NULL,
                'code' => 'LES',
            ),
            335 => 
            array (
                'id' => 2336,
                'country_id' => 143,
                'region_id' => NULL,
                'name' => 'Rethymnis',
                'full_name' => NULL,
                'code' => 'RET',
            ),
            336 => 
            array (
                'id' => 2337,
                'country_id' => 143,
                'region_id' => NULL,
                'name' => 'Samos',
                'full_name' => NULL,
                'code' => 'SMI',
            ),
            337 => 
            array (
                'id' => 2338,
                'country_id' => 143,
                'region_id' => NULL,
                'name' => 'Athens',
                'full_name' => NULL,
                'code' => 'ATH',
            ),
            338 => 
            array (
                'id' => 2339,
                'country_id' => 143,
                'region_id' => NULL,
                'name' => 'Irakleiou',
                'full_name' => NULL,
                'code' => 'HER',
            ),
            339 => 
            array (
                'id' => 2340,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Auckland',
                'full_name' => NULL,
                'code' => 'AUK',
            ),
            340 => 
            array (
                'id' => 2341,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'North Shore',
                'full_name' => NULL,
                'code' => 'NSH',
            ),
            341 => 
            array (
                'id' => 2342,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Palmerston North',
                'full_name' => NULL,
                'code' => 'PMR',
            ),
            342 => 
            array (
                'id' => 2343,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Far North',
                'full_name' => NULL,
                'code' => 'FNR',
            ),
            343 => 
            array (
                'id' => 2344,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Blenheim',
                'full_name' => NULL,
                'code' => 'BHE',
            ),
            344 => 
            array (
                'id' => 2345,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Dunedin',
                'full_name' => NULL,
                'code' => 'DUD',
            ),
            345 => 
            array (
                'id' => 2346,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Greymouth',
                'full_name' => NULL,
                'code' => 'GMN',
            ),
            346 => 
            array (
                'id' => 2347,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Hamilton',
                'full_name' => NULL,
                'code' => 'HLZ',
            ),
            347 => 
            array (
                'id' => 2348,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Hastings',
                'full_name' => NULL,
                'code' => 'HAS',
            ),
            348 => 
            array (
                'id' => 2349,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Waitakere',
                'full_name' => NULL,
                'code' => 'WAE',
            ),
            349 => 
            array (
                'id' => 2350,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Gisborne',
                'full_name' => NULL,
                'code' => 'GIS',
            ),
            350 => 
            array (
                'id' => 2351,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Kaipara',
                'full_name' => NULL,
                'code' => 'KAI',
            ),
            351 => 
            array (
                'id' => 2352,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Christchurch',
                'full_name' => NULL,
                'code' => 'CHC',
            ),
            352 => 
            array (
                'id' => 2353,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Richmond',
                'full_name' => NULL,
                'code' => 'RMD',
            ),
            353 => 
            array (
                'id' => 2354,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Manukau',
                'full_name' => NULL,
                'code' => 'MNK',
            ),
            354 => 
            array (
                'id' => 2355,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Nelson',
                'full_name' => NULL,
                'code' => 'NSN',
            ),
            355 => 
            array (
                'id' => 2356,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Napier',
                'full_name' => NULL,
                'code' => 'NPE',
            ),
            356 => 
            array (
                'id' => 2357,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Stratford',
                'full_name' => NULL,
                'code' => 'STR',
            ),
            357 => 
            array (
                'id' => 2358,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Taumarunui',
                'full_name' => NULL,
                'code' => 'TAU',
            ),
            358 => 
            array (
                'id' => 2359,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Whakatane',
                'full_name' => NULL,
                'code' => 'WHK',
            ),
            359 => 
            array (
                'id' => 2360,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Whangarei',
                'full_name' => NULL,
                'code' => 'WRE',
            ),
            360 => 
            array (
                'id' => 2361,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Wanganui',
                'full_name' => NULL,
                'code' => 'WAG',
            ),
            361 => 
            array (
                'id' => 2362,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'New Plymouth',
                'full_name' => NULL,
                'code' => 'NPL',
            ),
            362 => 
            array (
                'id' => 2363,
                'country_id' => 182,
                'region_id' => NULL,
                'name' => 'Invercargill',
                'full_name' => NULL,
                'code' => 'IVC',
            ),
            363 => 
            array (
                'id' => 2364,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Baranya',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            364 => 
            array (
                'id' => 2365,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Bacs-Kiskun',
                'full_name' => NULL,
                'code' => 'BK',
            ),
            365 => 
            array (
                'id' => 2366,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Borsod-Abauj-Zemplen',
                'full_name' => NULL,
                'code' => 'BZ',
            ),
            366 => 
            array (
                'id' => 2367,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Bekes',
                'full_name' => NULL,
                'code' => 'BE',
            ),
            367 => 
            array (
                'id' => 2368,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Budapest',
                'full_name' => NULL,
                'code' => 'BU',
            ),
            368 => 
            array (
                'id' => 2369,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Fejer',
                'full_name' => NULL,
                'code' => 'FE',
            ),
            369 => 
            array (
                'id' => 2370,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Hajdu-Bihar',
                'full_name' => NULL,
                'code' => 'HB',
            ),
            370 => 
            array (
                'id' => 2371,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Heves',
                'full_name' => NULL,
                'code' => 'HE',
            ),
            371 => 
            array (
                'id' => 2372,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Jasz-Nagykun-Szolnok',
                'full_name' => NULL,
                'code' => 'JN',
            ),
            372 => 
            array (
                'id' => 2373,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Gyor-Moson-Sopron',
                'full_name' => NULL,
                'code' => 'GS',
            ),
            373 => 
            array (
                'id' => 2374,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Komarom-Esztergom',
                'full_name' => NULL,
                'code' => 'KE',
            ),
            374 => 
            array (
                'id' => 2375,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Nograd',
                'full_name' => NULL,
                'code' => 'NO',
            ),
            375 => 
            array (
                'id' => 2376,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Pest',
                'full_name' => NULL,
                'code' => 'PE',
            ),
            376 => 
            array (
                'id' => 2377,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Csongrad',
                'full_name' => NULL,
                'code' => 'CS',
            ),
            377 => 
            array (
                'id' => 2378,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Somogy',
                'full_name' => NULL,
                'code' => 'SO',
            ),
            378 => 
            array (
                'id' => 2379,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Szabolcs-Szatmar-Bereg',
                'full_name' => NULL,
                'code' => 'SZ',
            ),
            379 => 
            array (
                'id' => 2380,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Tolna',
                'full_name' => NULL,
                'code' => 'TO',
            ),
            380 => 
            array (
                'id' => 2381,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Veszprem',
                'full_name' => NULL,
                'code' => 'VE',
            ),
            381 => 
            array (
                'id' => 2382,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Vas',
                'full_name' => NULL,
                'code' => 'VA',
            ),
            382 => 
            array (
                'id' => 2383,
                'country_id' => 121,
                'region_id' => NULL,
                'name' => 'Zala',
                'full_name' => NULL,
                'code' => 'ZA',
            ),
            383 => 
            array (
                'id' => 2384,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Halab',
                'full_name' => NULL,
                'code' => 'HL',
            ),
            384 => 
            array (
                'id' => 2385,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Rif Dimashq',
                'full_name' => NULL,
                'code' => 'RD',
            ),
            385 => 
            array (
                'id' => 2386,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Madinat Dimashq',
                'full_name' => NULL,
                'code' => 'DI',
            ),
            386 => 
            array (
                'id' => 2387,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Dayr az Zawr',
                'full_name' => NULL,
                'code' => 'DZ',
            ),
            387 => 
            array (
                'id' => 2388,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Dara',
                'full_name' => NULL,
                'code' => 'DA',
            ),
            388 => 
            array (
                'id' => 2389,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Hamah',
                'full_name' => NULL,
                'code' => 'HM',
            ),
            389 => 
            array (
                'id' => 2390,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Al Hasakah',
                'full_name' => NULL,
                'code' => 'HA',
            ),
            390 => 
            array (
                'id' => 2391,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Hims',
                'full_name' => NULL,
                'code' => 'HI',
            ),
            391 => 
            array (
                'id' => 2392,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Al Ghab',
                'full_name' => NULL,
                'code' => 'GH',
            ),
            392 => 
            array (
                'id' => 2393,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Al-Qamishli',
                'full_name' => NULL,
                'code' => 'QA',
            ),
            393 => 
            array (
                'id' => 2394,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Al Qunaytirah',
                'full_name' => NULL,
                'code' => 'QU',
            ),
            394 => 
            array (
                'id' => 2395,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Ar Raqqah',
                'full_name' => NULL,
                'code' => 'RQ',
            ),
            395 => 
            array (
                'id' => 2396,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Al Ladhiqiyah',
                'full_name' => NULL,
                'code' => 'LA',
            ),
            396 => 
            array (
                'id' => 2397,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'As Suwayda',
                'full_name' => NULL,
                'code' => 'SU',
            ),
            397 => 
            array (
                'id' => 2398,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Tartus',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            398 => 
            array (
                'id' => 2399,
                'country_id' => 59,
                'region_id' => NULL,
                'name' => 'Idlib',
                'full_name' => NULL,
                'code' => 'ID',
            ),
            399 => 
            array (
                'id' => 2400,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'Portland',
                'full_name' => NULL,
                'code' => 'POR',
            ),
            400 => 
            array (
                'id' => 2401,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'Hanover',
                'full_name' => NULL,
                'code' => 'HAN',
            ),
            401 => 
            array (
                'id' => 2402,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'Kingston',
                'full_name' => NULL,
                'code' => 'KIN',
            ),
            402 => 
            array (
                'id' => 2403,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'Clarendon',
                'full_name' => NULL,
                'code' => 'CLA',
            ),
            403 => 
            array (
                'id' => 2404,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'Manchester',
                'full_name' => NULL,
                'code' => 'MAN',
            ),
            404 => 
            array (
                'id' => 2405,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'St. Andrews',
                'full_name' => NULL,
                'code' => 'AND',
            ),
            405 => 
            array (
                'id' => 2406,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'St. Ann',
                'full_name' => NULL,
                'code' => 'ANN',
            ),
            406 => 
            array (
                'id' => 2407,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'St. Catherine',
                'full_name' => NULL,
                'code' => 'CAT',
            ),
            407 => 
            array (
                'id' => 2408,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'St. Mary',
                'full_name' => NULL,
                'code' => 'MAR',
            ),
            408 => 
            array (
                'id' => 2409,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'St. Thomas',
                'full_name' => NULL,
                'code' => 'THO',
            ),
            409 => 
            array (
                'id' => 2410,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'St. Elizabeth',
                'full_name' => NULL,
                'code' => 'ELI',
            ),
            410 => 
            array (
                'id' => 2411,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'St. James',
                'full_name' => NULL,
                'code' => 'JAM',
            ),
            411 => 
            array (
                'id' => 2412,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'Trelawny',
                'full_name' => NULL,
                'code' => 'TRL',
            ),
            412 => 
            array (
                'id' => 2413,
                'country_id' => 202,
                'region_id' => NULL,
                'name' => 'Westmoreland',
                'full_name' => NULL,
                'code' => 'WML',
            ),
            413 => 
            array (
                'id' => 2414,
                'country_id' => 116,
                'region_id' => NULL,
                'name' => 'Armavir',
                'full_name' => NULL,
                'code' => 'ARM',
            ),
            414 => 
            array (
                'id' => 2415,
                'country_id' => 116,
                'region_id' => NULL,
                'name' => 'Aragacotn',
                'full_name' => NULL,
                'code' => 'AGT',
            ),
            415 => 
            array (
                'id' => 2416,
                'country_id' => 116,
                'region_id' => NULL,
                'name' => 'Ararat',
                'full_name' => NULL,
                'code' => 'ARA',
            ),
            416 => 
            array (
                'id' => 2417,
                'country_id' => 116,
                'region_id' => NULL,
                'name' => 'Yerevan',
                'full_name' => NULL,
                'code' => 'EVN',
            ),
            417 => 
            array (
                'id' => 2418,
                'country_id' => 116,
                'region_id' => NULL,
                'name' => 'Gelarkunik',
                'full_name' => NULL,
                'code' => 'GEG',
            ),
            418 => 
            array (
                'id' => 2419,
                'country_id' => 116,
                'region_id' => NULL,
                'name' => 'Kotayk',
                'full_name' => NULL,
                'code' => 'KOT',
            ),
            419 => 
            array (
                'id' => 2420,
                'country_id' => 116,
                'region_id' => NULL,
                'name' => 'Lorri',
                'full_name' => NULL,
                'code' => 'LOR',
            ),
            420 => 
            array (
                'id' => 2421,
                'country_id' => 116,
                'region_id' => NULL,
                'name' => 'Tavus',
                'full_name' => NULL,
                'code' => 'TAV',
            ),
            421 => 
            array (
                'id' => 2422,
                'country_id' => 116,
                'region_id' => NULL,
                'name' => 'VayocJor',
                'full_name' => NULL,
                'code' => 'VAY',
            ),
            422 => 
            array (
                'id' => 2423,
                'country_id' => 116,
                'region_id' => NULL,
                'name' => 'Shirak',
                'full_name' => NULL,
                'code' => 'SHI',
            ),
            423 => 
            array (
                'id' => 2424,
                'country_id' => 116,
                'region_id' => NULL,
                'name' => 'Syunik',
                'full_name' => NULL,
                'code' => 'SYU',
            ),
            424 => 
            array (
                'id' => 2425,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Abyan',
                'full_name' => NULL,
                'code' => 'AB',
            ),
            425 => 
            array (
                'id' => 2426,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Amran Sana',
                'full_name' => NULL,
                'code' => 'AM',
            ),
            426 => 
            array (
                'id' => 2427,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Al-Bayda',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            427 => 
            array (
                'id' => 2428,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Ad-Dali',
                'full_name' => NULL,
                'code' => 'DA',
            ),
            428 => 
            array (
                'id' => 2429,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Hadramawt',
                'full_name' => NULL,
                'code' => 'HD',
            ),
            429 => 
            array (
                'id' => 2430,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Hajjah',
                'full_name' => NULL,
                'code' => 'HJ',
            ),
            430 => 
            array (
                'id' => 2431,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Al-Hudaydah',
                'full_name' => NULL,
                'code' => 'HU',
            ),
            431 => 
            array (
                'id' => 2432,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Al-Jawf',
                'full_name' => NULL,
                'code' => 'JA',
            ),
            432 => 
            array (
                'id' => 2433,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Lahij',
                'full_name' => NULL,
                'code' => 'LA',
            ),
            433 => 
            array (
                'id' => 2434,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Marib',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            434 => 
            array (
                'id' => 2435,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Al-Mahrah',
                'full_name' => NULL,
                'code' => 'MR',
            ),
            435 => 
            array (
                'id' => 2436,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Al-Mahwit',
                'full_name' => NULL,
                'code' => 'MW',
            ),
            436 => 
            array (
                'id' => 2437,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Sadah',
                'full_name' => NULL,
                'code' => 'SD',
            ),
            437 => 
            array (
                'id' => 2438,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Sana',
                'full_name' => NULL,
                'code' => 'SN',
            ),
            438 => 
            array (
                'id' => 2439,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Seiyun',
                'full_name' => NULL,
                'code' => 'GXF',
            ),
            439 => 
            array (
                'id' => 2440,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Shabwah',
                'full_name' => NULL,
                'code' => 'SH',
            ),
            440 => 
            array (
                'id' => 2441,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Taizz',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            441 => 
            array (
                'id' => 2442,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Ash-Shihr',
                'full_name' => NULL,
                'code' => 'ASR',
            ),
            442 => 
            array (
                'id' => 2443,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Adan',
                'full_name' => NULL,
                'code' => 'AD',
            ),
            443 => 
            array (
                'id' => 2444,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Ibb',
                'full_name' => NULL,
                'code' => 'IB',
            ),
            444 => 
            array (
                'id' => 2445,
                'country_id' => 89,
                'region_id' => NULL,
                'name' => 'Dhamar',
                'full_name' => NULL,
                'code' => 'DH',
            ),
            445 => 
            array (
                'id' => 2446,
                'country_id' => 82,
                'region_id' => NULL,
                'name' => 'Ashdod',
                'full_name' => NULL,
                'code' => 'ASH',
            ),
            446 => 
            array (
                'id' => 2447,
                'country_id' => 82,
                'region_id' => NULL,
                'name' => 'Beersheba',
                'full_name' => NULL,
                'code' => 'BEV',
            ),
            447 => 
            array (
                'id' => 2448,
                'country_id' => 82,
                'region_id' => NULL,
                'name' => 'Bat Yam',
                'full_name' => NULL,
                'code' => 'BAT',
            ),
            448 => 
            array (
                'id' => 2449,
                'country_id' => 82,
                'region_id' => NULL,
                'name' => 'Haifa',
                'full_name' => NULL,
                'code' => 'HFA',
            ),
            449 => 
            array (
                'id' => 2450,
                'country_id' => 82,
                'region_id' => NULL,
                'name' => 'Holon',
                'full_name' => NULL,
                'code' => 'HOL',
            ),
            450 => 
            array (
                'id' => 2451,
                'country_id' => 82,
                'region_id' => NULL,
                'name' => 'Netanya',
                'full_name' => NULL,
                'code' => 'NAT',
            ),
            451 => 
            array (
                'id' => 2452,
                'country_id' => 82,
                'region_id' => NULL,
                'name' => 'Tel Aviv-Yafo',
                'full_name' => NULL,
                'code' => 'TLV',
            ),
            452 => 
            array (
                'id' => 2453,
                'country_id' => 82,
                'region_id' => NULL,
                'name' => 'Jerusalem',
                'full_name' => NULL,
                'code' => 'J',
            ),
            453 => 
            array (
                'id' => 2454,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Asti',
                'full_name' => NULL,
                'code' => 'AST',
            ),
            454 => 
            array (
                'id' => 2455,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Ascoli Piceno',
                'full_name' => NULL,
                'code' => 'ASP',
            ),
            455 => 
            array (
                'id' => 2456,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Ancona',
                'full_name' => NULL,
                'code' => 'AOI',
            ),
            456 => 
            array (
                'id' => 2457,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Olbia-Tempio',
                'full_name' => NULL,
                'code' => 'OLB',
            ),
            457 => 
            array (
                'id' => 2458,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Oristano',
                'full_name' => NULL,
                'code' => 'QOS',
            ),
            458 => 
            array (
                'id' => 2459,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Aosta',
                'full_name' => NULL,
                'code' => 'AOT',
            ),
            459 => 
            array (
                'id' => 2460,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Palermo',
                'full_name' => NULL,
                'code' => 'PMO',
            ),
            460 => 
            array (
                'id' => 2461,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Bari',
                'full_name' => NULL,
                'code' => 'BRI',
            ),
            461 => 
            array (
                'id' => 2462,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Bergamo',
                'full_name' => NULL,
                'code' => 'BGO',
            ),
            462 => 
            array (
                'id' => 2463,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Benevento',
                'full_name' => NULL,
                'code' => 'BEN',
            ),
            463 => 
            array (
                'id' => 2464,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Pisa',
                'full_name' => NULL,
                'code' => 'PSA',
            ),
            464 => 
            array (
                'id' => 2465,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Pordenone',
                'full_name' => NULL,
                'code' => 'PRD',
            ),
            465 => 
            array (
                'id' => 2466,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Potenza',
                'full_name' => NULL,
                'code' => 'QPO',
            ),
            466 => 
            array (
                'id' => 2467,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Bologna',
                'full_name' => NULL,
                'code' => 'BLQ',
            ),
            467 => 
            array (
                'id' => 2468,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Biella',
                'full_name' => NULL,
                'code' => 'BIE',
            ),
            468 => 
            array (
                'id' => 2469,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Brescia',
                'full_name' => NULL,
                'code' => 'BRC',
            ),
            469 => 
            array (
                'id' => 2470,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Brindisi',
                'full_name' => NULL,
                'code' => 'BDS',
            ),
            470 => 
            array (
                'id' => 2471,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Trieste',
                'full_name' => NULL,
                'code' => 'TRS',
            ),
            471 => 
            array (
                'id' => 2472,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Turin',
                'full_name' => NULL,
                'code' => 'TRN',
            ),
            472 => 
            array (
                'id' => 2473,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Ferrara',
                'full_name' => NULL,
                'code' => 'FRR',
            ),
            473 => 
            array (
                'id' => 2474,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Firenze',
                'full_name' => NULL,
                'code' => 'FLR',
            ),
            474 => 
            array (
                'id' => 2475,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Foggia',
                'full_name' => NULL,
                'code' => 'FOG',
            ),
            475 => 
            array (
                'id' => 2476,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Cagliari',
                'full_name' => NULL,
                'code' => 'CAG',
            ),
            476 => 
            array (
                'id' => 2477,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Caserta',
                'full_name' => NULL,
                'code' => 'CST',
            ),
            477 => 
            array (
                'id' => 2478,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Catania',
                'full_name' => NULL,
                'code' => 'CTA',
            ),
            478 => 
            array (
                'id' => 2479,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Catanzaro',
                'full_name' => NULL,
                'code' => 'QCZ',
            ),
            479 => 
            array (
                'id' => 2480,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Campobasso',
                'full_name' => NULL,
                'code' => 'COB',
            ),
            480 => 
            array (
                'id' => 2481,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Como',
                'full_name' => NULL,
                'code' => 'CIY',
            ),
            481 => 
            array (
                'id' => 2482,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Cosenza',
                'full_name' => NULL,
                'code' => 'QCS',
            ),
            482 => 
            array (
                'id' => 2483,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Crotone',
                'full_name' => NULL,
                'code' => 'CRV',
            ),
            483 => 
            array (
                'id' => 2484,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Cuneo',
                'full_name' => NULL,
                'code' => 'CUN',
            ),
            484 => 
            array (
                'id' => 2485,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'L\'Aquila',
                'full_name' => NULL,
                'code' => 'LAQ',
            ),
            485 => 
            array (
                'id' => 2486,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'La Spezia',
                'full_name' => NULL,
                'code' => 'SPE',
            ),
            486 => 
            array (
                'id' => 2487,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Lecco',
                'full_name' => NULL,
                'code' => 'LCO',
            ),
            487 => 
            array (
                'id' => 2488,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Lecce',
                'full_name' => NULL,
                'code' => 'LCC',
            ),
            488 => 
            array (
                'id' => 2489,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Reggio Emilia',
                'full_name' => NULL,
                'code' => 'RNE',
            ),
            489 => 
            array (
                'id' => 2490,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Reggio Calabria',
                'full_name' => NULL,
                'code' => 'REG',
            ),
            490 => 
            array (
                'id' => 2491,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Livorno',
                'full_name' => NULL,
                'code' => 'LIV',
            ),
            491 => 
            array (
                'id' => 2492,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Roma',
                'full_name' => NULL,
                'code' => 'ROM',
            ),
            492 => 
            array (
                'id' => 2493,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Massa-Carrara',
                'full_name' => NULL,
                'code' => 'MCR',
            ),
            493 => 
            array (
                'id' => 2494,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Matera',
                'full_name' => NULL,
                'code' => 'MTR',
            ),
            494 => 
            array (
                'id' => 2495,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Monza e Brianza',
                'full_name' => NULL,
                'code' => 'MZA',
            ),
            495 => 
            array (
                'id' => 2496,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Milano',
                'full_name' => NULL,
                'code' => 'MIL',
            ),
            496 => 
            array (
                'id' => 2497,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Modena',
                'full_name' => NULL,
                'code' => 'MOD',
            ),
            497 => 
            array (
                'id' => 2498,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Messina',
                'full_name' => NULL,
                'code' => 'MSN',
            ),
            498 => 
            array (
                'id' => 2499,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Naples',
                'full_name' => NULL,
                'code' => 'NAP',
            ),
            499 => 
            array (
                'id' => 2500,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Nuoro',
                'full_name' => NULL,
                'code' => 'QNU',
            ),
        ));
        \DB::table('world_cities')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Novara',
                'full_name' => NULL,
                'code' => 'NVR',
            ),
            1 => 
            array (
                'id' => 2502,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Parma',
                'full_name' => NULL,
                'code' => 'PMF',
            ),
            2 => 
            array (
                'id' => 2503,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Pavia',
                'full_name' => NULL,
                'code' => 'PAV',
            ),
            3 => 
            array (
                'id' => 2504,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Perugia',
                'full_name' => NULL,
                'code' => 'PEG',
            ),
            4 => 
            array (
                'id' => 2505,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Genova',
                'full_name' => NULL,
                'code' => 'CAX',
            ),
            5 => 
            array (
                'id' => 2506,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Salerno',
                'full_name' => NULL,
                'code' => 'SAL',
            ),
            6 => 
            array (
                'id' => 2507,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Sassari',
                'full_name' => NULL,
                'code' => 'QSS',
            ),
            7 => 
            array (
                'id' => 2508,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Savona',
                'full_name' => NULL,
                'code' => 'SVN',
            ),
            8 => 
            array (
                'id' => 2509,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Taranto',
                'full_name' => NULL,
                'code' => 'TAR',
            ),
            9 => 
            array (
                'id' => 2510,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Trapani',
                'full_name' => NULL,
                'code' => 'TPS',
            ),
            10 => 
            array (
                'id' => 2511,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Trento',
                'full_name' => NULL,
                'code' => 'TRT',
            ),
            11 => 
            array (
                'id' => 2512,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Venice',
                'full_name' => NULL,
                'code' => 'VCE',
            ),
            12 => 
            array (
                'id' => 2513,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Vercelli',
                'full_name' => NULL,
                'code' => 'VRL',
            ),
            13 => 
            array (
                'id' => 2514,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Viterbo',
                'full_name' => NULL,
                'code' => 'VIT',
            ),
            14 => 
            array (
                'id' => 2515,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Udine',
                'full_name' => NULL,
                'code' => 'UDN',
            ),
            15 => 
            array (
                'id' => 2516,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Syracuse',
                'full_name' => NULL,
                'code' => 'SYR',
            ),
            16 => 
            array (
                'id' => 2517,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Siena',
                'full_name' => NULL,
                'code' => 'SNA',
            ),
            17 => 
            array (
                'id' => 2518,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Alessandria',
                'full_name' => NULL,
                'code' => 'ALE',
            ),
            18 => 
            array (
                'id' => 2519,
                'country_id' => 151,
                'region_id' => NULL,
                'name' => 'Isernia',
                'full_name' => NULL,
                'code' => 'ISE',
            ),
            19 => 
            array (
                'id' => 2520,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Aizawl',
                'full_name' => NULL,
                'code' => 'AJL',
            ),
            20 => 
            array (
                'id' => 2521,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Bangalore',
                'full_name' => NULL,
                'code' => 'BLR',
            ),
            21 => 
            array (
                'id' => 2522,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Pondicherry',
                'full_name' => NULL,
                'code' => 'PNY',
            ),
            22 => 
            array (
                'id' => 2523,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Bhopal',
                'full_name' => NULL,
                'code' => 'BHO',
            ),
            23 => 
            array (
                'id' => 2524,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Bhubaneswar',
                'full_name' => NULL,
                'code' => 'BBI',
            ),
            24 => 
            array (
                'id' => 2525,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Chandigarh',
                'full_name' => NULL,
                'code' => 'IXC',
            ),
            25 => 
            array (
                'id' => 2526,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Daman',
                'full_name' => NULL,
                'code' => 'DAM',
            ),
            26 => 
            array (
                'id' => 2527,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Diu',
                'full_name' => NULL,
                'code' => 'DIU',
            ),
            27 => 
            array (
                'id' => 2528,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Gangtok',
                'full_name' => NULL,
                'code' => 'GTO',
            ),
            28 => 
            array (
                'id' => 2529,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Coimbatore',
                'full_name' => NULL,
                'code' => 'CJB',
            ),
            29 => 
            array (
                'id' => 2530,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Calcutta',
                'full_name' => NULL,
                'code' => 'CCU',
            ),
            30 => 
            array (
                'id' => 2531,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Karaikal',
                'full_name' => NULL,
                'code' => 'KRK',
            ),
            31 => 
            array (
                'id' => 2532,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Jabalpur',
                'full_name' => NULL,
                'code' => 'JLR',
            ),
            32 => 
            array (
                'id' => 2533,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Jalandhar',
                'full_name' => NULL,
                'code' => 'JUC',
            ),
            33 => 
            array (
                'id' => 2534,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Jodhpur',
                'full_name' => NULL,
                'code' => 'JDH',
            ),
            34 => 
            array (
                'id' => 2535,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Chennai',
                'full_name' => NULL,
                'code' => 'MAA',
            ),
            35 => 
            array (
                'id' => 2536,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Kavaratti',
                'full_name' => NULL,
                'code' => 'KVA',
            ),
            36 => 
            array (
                'id' => 2537,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Kohima',
                'full_name' => NULL,
                'code' => 'KOM',
            ),
            37 => 
            array (
                'id' => 2538,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Mahe',
                'full_name' => NULL,
                'code' => 'MAH',
            ),
            38 => 
            array (
                'id' => 2539,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Madurai',
                'full_name' => NULL,
                'code' => 'IXM',
            ),
            39 => 
            array (
                'id' => 2540,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Sambalpur',
                'full_name' => NULL,
                'code' => 'SLR',
            ),
            40 => 
            array (
                'id' => 2541,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Trivandrum',
                'full_name' => NULL,
                'code' => 'TRV',
            ),
            41 => 
            array (
                'id' => 2542,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Udaipur',
                'full_name' => NULL,
                'code' => 'UDR',
            ),
            42 => 
            array (
                'id' => 2543,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Shillong',
                'full_name' => NULL,
                'code' => 'SHL',
            ),
            43 => 
            array (
                'id' => 2544,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Silvassa',
                'full_name' => NULL,
                'code' => 'SIL',
            ),
            44 => 
            array (
                'id' => 2545,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'New Delhi',
                'full_name' => NULL,
                'code' => 'ICD',
            ),
            45 => 
            array (
                'id' => 2546,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Yanam',
                'full_name' => NULL,
                'code' => 'SRV',
            ),
            46 => 
            array (
                'id' => 2547,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Imphal',
                'full_name' => NULL,
                'code' => 'IMF',
            ),
            47 => 
            array (
                'id' => 2548,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Indore',
                'full_name' => NULL,
                'code' => 'IDR',
            ),
            48 => 
            array (
                'id' => 2549,
                'country_id' => 85,
                'region_id' => NULL,
                'name' => 'Jaipur',
                'full_name' => NULL,
                'code' => 'JAI',
            ),
            49 => 
            array (
                'id' => 2550,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Bali',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            50 => 
            array (
                'id' => 2551,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Kepulauan Bangka Belitung',
                'full_name' => NULL,
                'code' => 'BB',
            ),
            51 => 
            array (
                'id' => 2552,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Sulawesi Utara',
                'full_name' => NULL,
                'code' => 'SA',
            ),
            52 => 
            array (
                'id' => 2553,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Sumatera Utara',
                'full_name' => NULL,
                'code' => 'SU',
            ),
            53 => 
            array (
                'id' => 2554,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Daerah Tingkat I Kalimantan Barat',
                'full_name' => NULL,
                'code' => 'KB',
            ),
            54 => 
            array (
                'id' => 2555,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Kalimantan Timur',
                'full_name' => NULL,
                'code' => 'KI',
            ),
            55 => 
            array (
                'id' => 2556,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Sulawesi Tenggara',
                'full_name' => NULL,
                'code' => 'SG',
            ),
            56 => 
            array (
                'id' => 2557,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Nusa Tenggara Timur',
                'full_name' => NULL,
                'code' => 'NT',
            ),
            57 => 
            array (
                'id' => 2558,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Java Timur',
                'full_name' => NULL,
                'code' => 'JI',
            ),
            58 => 
            array (
                'id' => 2559,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Riau',
                'full_name' => NULL,
                'code' => 'RI',
            ),
            59 => 
            array (
                'id' => 2560,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Maluku',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            60 => 
            array (
                'id' => 2561,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Bengkulu',
                'full_name' => NULL,
                'code' => 'BE',
            ),
            61 => 
            array (
                'id' => 2562,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Lampung',
                'full_name' => NULL,
                'code' => 'LA',
            ),
            62 => 
            array (
                'id' => 2563,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Kalimantan Selatan',
                'full_name' => NULL,
                'code' => 'KS',
            ),
            63 => 
            array (
                'id' => 2564,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Sulawesi Selatan',
                'full_name' => NULL,
                'code' => 'SN',
            ),
            64 => 
            array (
                'id' => 2565,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Sumatera Selatan',
                'full_name' => NULL,
                'code' => 'SS',
            ),
            65 => 
            array (
                'id' => 2566,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Daerah Istimewa Yogyakarta',
                'full_name' => NULL,
                'code' => 'YO',
            ),
            66 => 
            array (
                'id' => 2567,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Banten',
                'full_name' => NULL,
                'code' => 'BT',
            ),
            67 => 
            array (
                'id' => 2568,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Nusa Tenggara Barat',
                'full_name' => NULL,
                'code' => 'NB',
            ),
            68 => 
            array (
                'id' => 2569,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Sumatera Barat',
                'full_name' => NULL,
                'code' => 'SR',
            ),
            69 => 
            array (
                'id' => 2570,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Java Barat',
                'full_name' => NULL,
                'code' => 'JB',
            ),
            70 => 
            array (
                'id' => 2571,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Jakarta Raya',
                'full_name' => NULL,
                'code' => 'JK',
            ),
            71 => 
            array (
                'id' => 2572,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Aceh',
                'full_name' => NULL,
                'code' => 'AC',
            ),
            72 => 
            array (
                'id' => 2573,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Irian Jaya',
                'full_name' => NULL,
                'code' => 'IJ',
            ),
            73 => 
            array (
                'id' => 2574,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Jambi',
                'full_name' => NULL,
                'code' => 'JA',
            ),
            74 => 
            array (
                'id' => 2575,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Kalimantan Tengah',
                'full_name' => NULL,
                'code' => 'KT',
            ),
            75 => 
            array (
                'id' => 2576,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Sulawesi Tengah',
                'full_name' => NULL,
                'code' => 'ST',
            ),
            76 => 
            array (
                'id' => 2577,
                'country_id' => 81,
                'region_id' => NULL,
                'name' => 'Java Tengah',
                'full_name' => NULL,
                'code' => 'JT',
            ),
            77 => 
            array (
                'id' => 2578,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Allun',
                'full_name' => NULL,
                'code' => 'AJ',
            ),
            78 => 
            array (
                'id' => 2579,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Amman',
                'full_name' => NULL,
                'code' => 'AM',
            ),
            79 => 
            array (
                'id' => 2580,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Balqa',
                'full_name' => NULL,
                'code' => 'BA',
            ),
            80 => 
            array (
                'id' => 2581,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Jarash',
                'full_name' => NULL,
                'code' => 'JA',
            ),
            81 => 
            array (
                'id' => 2582,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Karak',
                'full_name' => NULL,
                'code' => 'KA',
            ),
            82 => 
            array (
                'id' => 2583,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Rusayfah',
                'full_name' => NULL,
                'code' => 'RU',
            ),
            83 => 
            array (
                'id' => 2584,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Maan',
                'full_name' => NULL,
                'code' => 'MN',
            ),
            84 => 
            array (
                'id' => 2585,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Madaba',
                'full_name' => NULL,
                'code' => 'MD',
            ),
            85 => 
            array (
                'id' => 2586,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Mafraq',
                'full_name' => NULL,
                'code' => 'MF',
            ),
            86 => 
            array (
                'id' => 2587,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Tafiela',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            87 => 
            array (
                'id' => 2588,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Aqaba',
                'full_name' => NULL,
                'code' => 'AQ',
            ),
            88 => 
            array (
                'id' => 2589,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Irbid',
                'full_name' => NULL,
                'code' => 'IR',
            ),
            89 => 
            array (
                'id' => 2590,
                'country_id' => 63,
                'region_id' => NULL,
                'name' => 'Zarqa',
                'full_name' => NULL,
                'code' => 'ZA',
            ),
            90 => 
            array (
                'id' => 2591,
                'country_id' => 64,
                'region_id' => NULL,
                'name' => 'Haiphong',
                'full_name' => NULL,
                'code' => 'HP',
            ),
            91 => 
            array (
                'id' => 2592,
                'country_id' => 64,
                'region_id' => NULL,
                'name' => 'Hanoi',
                'full_name' => NULL,
                'code' => 'HI',
            ),
            92 => 
            array (
                'id' => 2593,
                'country_id' => 64,
                'region_id' => NULL,
                'name' => 'Ho Chi Minh City',
                'full_name' => NULL,
                'code' => 'HC',
            ),
            93 => 
            array (
                'id' => 2594,
                'country_id' => 39,
                'region_id' => NULL,
                'name' => 'Northern',
                'full_name' => NULL,
                'code' => 'NO',
            ),
            94 => 
            array (
                'id' => 2595,
                'country_id' => 39,
                'region_id' => NULL,
                'name' => 'Eastern',
                'full_name' => NULL,
                'code' => 'EA',
            ),
            95 => 
            array (
                'id' => 2596,
                'country_id' => 39,
                'region_id' => NULL,
                'name' => 'Luapula',
                'full_name' => NULL,
                'code' => 'LP',
            ),
            96 => 
            array (
                'id' => 2597,
                'country_id' => 39,
                'region_id' => NULL,
                'name' => 'Lusaka',
                'full_name' => NULL,
                'code' => 'LK',
            ),
            97 => 
            array (
                'id' => 2598,
                'country_id' => 39,
                'region_id' => NULL,
                'name' => 'Southern',
                'full_name' => NULL,
                'code' => 'SO',
            ),
            98 => 
            array (
                'id' => 2599,
                'country_id' => 39,
                'region_id' => NULL,
                'name' => 'Copperbelt',
                'full_name' => NULL,
                'code' => 'CB',
            ),
            99 => 
            array (
                'id' => 2600,
                'country_id' => 39,
                'region_id' => NULL,
                'name' => 'North-Western',
                'full_name' => NULL,
                'code' => 'NW',
            ),
            100 => 
            array (
                'id' => 2601,
                'country_id' => 39,
                'region_id' => NULL,
                'name' => 'Western',
                'full_name' => NULL,
                'code' => 'WE',
            ),
            101 => 
            array (
                'id' => 2602,
                'country_id' => 39,
                'region_id' => NULL,
                'name' => 'Central',
                'full_name' => NULL,
                'code' => 'CE',
            ),
            102 => 
            array (
                'id' => 2603,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Region de la Araucania',
                'full_name' => NULL,
                'code' => 'AR',
            ),
            103 => 
            array (
                'id' => 2604,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Region de Atacama',
                'full_name' => NULL,
                'code' => 'AT',
            ),
            104 => 
            array (
                'id' => 2605,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Region de Antofagasta',
                'full_name' => NULL,
                'code' => 'AN',
            ),
            105 => 
            array (
                'id' => 2606,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Region del Biobio',
                'full_name' => NULL,
                'code' => 'BI',
            ),
            106 => 
            array (
                'id' => 2607,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Libertador',
                'full_name' => NULL,
                'code' => 'LI',
            ),
            107 => 
            array (
                'id' => 2608,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Region de los Lagos',
                'full_name' => NULL,
                'code' => 'LL',
            ),
            108 => 
            array (
                'id' => 2609,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Region de Coquimbo',
                'full_name' => NULL,
                'code' => 'CO',
            ),
            109 => 
            array (
                'id' => 2610,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Region del Maule',
                'full_name' => NULL,
                'code' => 'ML',
            ),
            110 => 
            array (
                'id' => 2611,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Magallanes y Antartica Chilena',
                'full_name' => NULL,
                'code' => 'MA',
            ),
            111 => 
            array (
                'id' => 2612,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Metropolitana de Santiago',
                'full_name' => NULL,
                'code' => 'RM',
            ),
            112 => 
            array (
                'id' => 2613,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Region de Tarapaca',
                'full_name' => NULL,
                'code' => 'TA',
            ),
            113 => 
            array (
                'id' => 2614,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Region de Valparaiso',
                'full_name' => NULL,
                'code' => 'VS',
            ),
            114 => 
            array (
                'id' => 2615,
                'country_id' => 186,
                'region_id' => NULL,
                'name' => 'Region de Alsen del General Carlos Ibanez del',
                'full_name' => NULL,
                'code' => 'AI',
            ),
            115 => 
            array (
                'id' => 2616,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Bamingui-Bangoran',
                'full_name' => NULL,
                'code' => 'BB',
            ),
            116 => 
            array (
                'id' => 2617,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Bangui',
                'full_name' => NULL,
                'code' => 'BGF',
            ),
            117 => 
            array (
                'id' => 2618,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Bimbo',
                'full_name' => NULL,
                'code' => 'BI',
            ),
            118 => 
            array (
                'id' => 2619,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Kemo',
                'full_name' => NULL,
                'code' => 'KG',
            ),
            119 => 
            array (
                'id' => 2620,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Lobaye',
                'full_name' => NULL,
                'code' => 'LB',
            ),
            120 => 
            array (
                'id' => 2621,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Mambere-Kadei',
                'full_name' => NULL,
                'code' => 'HS',
            ),
            121 => 
            array (
                'id' => 2622,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Mbomou',
                'full_name' => NULL,
                'code' => 'MB',
            ),
            122 => 
            array (
                'id' => 2623,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Nana-Gribizi',
                'full_name' => NULL,
                'code' => 'KB',
            ),
            123 => 
            array (
                'id' => 2624,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Nana-Mambere',
                'full_name' => NULL,
                'code' => 'NM',
            ),
            124 => 
            array (
                'id' => 2625,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Sangha-Mbaere',
                'full_name' => NULL,
                'code' => 'SE',
            ),
            125 => 
            array (
                'id' => 2626,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Haute-Kotto',
                'full_name' => NULL,
                'code' => 'HK',
            ),
            126 => 
            array (
                'id' => 2627,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Haut-Mbomou',
                'full_name' => NULL,
                'code' => 'HM',
            ),
            127 => 
            array (
                'id' => 2628,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Ouaka',
                'full_name' => NULL,
                'code' => 'UK',
            ),
            128 => 
            array (
                'id' => 2629,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Vakaga',
                'full_name' => NULL,
                'code' => 'VK',
            ),
            129 => 
            array (
                'id' => 2630,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Ouham',
                'full_name' => NULL,
                'code' => 'AC',
            ),
            130 => 
            array (
                'id' => 2631,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Ouham-Pende',
                'full_name' => NULL,
                'code' => 'OP',
            ),
            131 => 
            array (
                'id' => 2632,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Ombella-Mpoko',
                'full_name' => NULL,
                'code' => 'MP',
            ),
            132 => 
            array (
                'id' => 2633,
                'country_id' => 33,
                'region_id' => NULL,
                'name' => 'Basse-Kotto',
                'full_name' => NULL,
                'code' => 'BK',
            ),
            133 => 
            array (
                'id' => 2634,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Dongcheng',
                'full_name' => NULL,
                'code' => '1',
            ),
            134 => 
            array (
                'id' => 2635,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Xicheng',
                'full_name' => NULL,
                'code' => '2',
            ),
            135 => 
            array (
                'id' => 2636,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Chaoyang',
                'full_name' => NULL,
                'code' => '5',
            ),
            136 => 
            array (
                'id' => 2637,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Fengtai',
                'full_name' => NULL,
                'code' => '6',
            ),
            137 => 
            array (
                'id' => 2638,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Shijingshan',
                'full_name' => NULL,
                'code' => '7',
            ),
            138 => 
            array (
                'id' => 2639,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Haidian',
                'full_name' => NULL,
                'code' => '8',
            ),
            139 => 
            array (
                'id' => 2640,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Mentougou',
                'full_name' => NULL,
                'code' => '9',
            ),
            140 => 
            array (
                'id' => 2641,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Fangshan',
                'full_name' => NULL,
                'code' => '11',
            ),
            141 => 
            array (
                'id' => 2642,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Tongzhou',
                'full_name' => NULL,
                'code' => '12',
            ),
            142 => 
            array (
                'id' => 2643,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Shunyi',
                'full_name' => NULL,
                'code' => '13',
            ),
            143 => 
            array (
                'id' => 2644,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Changping',
                'full_name' => NULL,
                'code' => '21',
            ),
            144 => 
            array (
                'id' => 2645,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Daxing',
                'full_name' => NULL,
                'code' => '24',
            ),
            145 => 
            array (
                'id' => 2646,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Pinggu',
                'full_name' => NULL,
                'code' => '26',
            ),
            146 => 
            array (
                'id' => 2647,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Huairou',
                'full_name' => NULL,
                'code' => '27',
            ),
            147 => 
            array (
                'id' => 2648,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Miyun',
                'full_name' => NULL,
                'code' => '28',
            ),
            148 => 
            array (
                'id' => 2649,
                'country_id' => 101,
                'region_id' => 26,
                'name' => 'Yanqing',
                'full_name' => NULL,
                'code' => '29',
            ),
            149 => 
            array (
                'id' => 2650,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Heping',
                'full_name' => NULL,
                'code' => '1',
            ),
            150 => 
            array (
                'id' => 2651,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Hedong',
                'full_name' => NULL,
                'code' => '2',
            ),
            151 => 
            array (
                'id' => 2652,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Hexi',
                'full_name' => NULL,
                'code' => '3',
            ),
            152 => 
            array (
                'id' => 2653,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Nankai',
                'full_name' => NULL,
                'code' => '4',
            ),
            153 => 
            array (
                'id' => 2654,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Hebei',
                'full_name' => NULL,
                'code' => '5',
            ),
            154 => 
            array (
                'id' => 2655,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Hongqiao',
                'full_name' => NULL,
                'code' => '6',
            ),
            155 => 
            array (
                'id' => 2656,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Binghaixinqu',
                'full_name' => NULL,
                'code' => '26',
            ),
            156 => 
            array (
                'id' => 2657,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Dongli',
                'full_name' => NULL,
                'code' => '10',
            ),
            157 => 
            array (
                'id' => 2658,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Xiqing',
                'full_name' => NULL,
                'code' => '11',
            ),
            158 => 
            array (
                'id' => 2659,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Jinnan',
                'full_name' => NULL,
                'code' => '12',
            ),
            159 => 
            array (
                'id' => 2660,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Beichen',
                'full_name' => NULL,
                'code' => '13',
            ),
            160 => 
            array (
                'id' => 2661,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Ninghe',
                'full_name' => NULL,
                'code' => '21',
            ),
            161 => 
            array (
                'id' => 2662,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Wuqing',
                'full_name' => NULL,
                'code' => '22',
            ),
            162 => 
            array (
                'id' => 2663,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Jinghai',
                'full_name' => NULL,
                'code' => '23',
            ),
            163 => 
            array (
                'id' => 2664,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Baodi',
                'full_name' => NULL,
                'code' => '24',
            ),
            164 => 
            array (
                'id' => 2665,
                'country_id' => 101,
                'region_id' => 52,
                'name' => 'Jixian',
                'full_name' => NULL,
                'code' => '25',
            ),
            165 => 
            array (
                'id' => 2666,
                'country_id' => 101,
                'region_id' => 34,
                'name' => 'Shijiazhuang',
                'full_name' => NULL,
                'code' => '1',
            ),
            166 => 
            array (
                'id' => 2667,
                'country_id' => 101,
                'region_id' => 34,
                'name' => 'Tangshan',
                'full_name' => NULL,
                'code' => '2',
            ),
            167 => 
            array (
                'id' => 2668,
                'country_id' => 101,
                'region_id' => 34,
                'name' => 'Qinhuangdao',
                'full_name' => NULL,
                'code' => '3',
            ),
            168 => 
            array (
                'id' => 2669,
                'country_id' => 101,
                'region_id' => 34,
                'name' => 'Handan',
                'full_name' => NULL,
                'code' => '4',
            ),
            169 => 
            array (
                'id' => 2670,
                'country_id' => 101,
                'region_id' => 34,
                'name' => 'Xingtai',
                'full_name' => NULL,
                'code' => '5',
            ),
            170 => 
            array (
                'id' => 2671,
                'country_id' => 101,
                'region_id' => 34,
                'name' => 'Baoding',
                'full_name' => NULL,
                'code' => '6',
            ),
            171 => 
            array (
                'id' => 2672,
                'country_id' => 101,
                'region_id' => 34,
                'name' => 'Zhangjiakou',
                'full_name' => NULL,
                'code' => '7',
            ),
            172 => 
            array (
                'id' => 2673,
                'country_id' => 101,
                'region_id' => 34,
                'name' => 'Chengde',
                'full_name' => NULL,
                'code' => '8',
            ),
            173 => 
            array (
                'id' => 2674,
                'country_id' => 101,
                'region_id' => 34,
                'name' => 'Cangzhou',
                'full_name' => NULL,
                'code' => '9',
            ),
            174 => 
            array (
                'id' => 2675,
                'country_id' => 101,
                'region_id' => 34,
                'name' => 'Langfang',
                'full_name' => NULL,
                'code' => '10',
            ),
            175 => 
            array (
                'id' => 2676,
                'country_id' => 101,
                'region_id' => 34,
                'name' => 'Hengshui',
                'full_name' => NULL,
                'code' => '11',
            ),
            176 => 
            array (
                'id' => 2677,
                'country_id' => 101,
                'region_id' => 49,
                'name' => 'Taiyuan',
                'full_name' => NULL,
                'code' => '1',
            ),
            177 => 
            array (
                'id' => 2678,
                'country_id' => 101,
                'region_id' => 49,
                'name' => 'Datong',
                'full_name' => NULL,
                'code' => '2',
            ),
            178 => 
            array (
                'id' => 2679,
                'country_id' => 101,
                'region_id' => 49,
                'name' => 'Yangquan',
                'full_name' => NULL,
                'code' => '3',
            ),
            179 => 
            array (
                'id' => 2680,
                'country_id' => 101,
                'region_id' => 49,
                'name' => 'Changzhi',
                'full_name' => NULL,
                'code' => '4',
            ),
            180 => 
            array (
                'id' => 2681,
                'country_id' => 101,
                'region_id' => 49,
                'name' => 'Jincheng',
                'full_name' => NULL,
                'code' => '5',
            ),
            181 => 
            array (
                'id' => 2682,
                'country_id' => 101,
                'region_id' => 49,
                'name' => 'Shuozhou',
                'full_name' => NULL,
                'code' => '6',
            ),
            182 => 
            array (
                'id' => 2683,
                'country_id' => 101,
                'region_id' => 49,
                'name' => 'Jinzhong',
                'full_name' => NULL,
                'code' => '7',
            ),
            183 => 
            array (
                'id' => 2684,
                'country_id' => 101,
                'region_id' => 49,
                'name' => 'Yuncheng',
                'full_name' => NULL,
                'code' => '8',
            ),
            184 => 
            array (
                'id' => 2685,
                'country_id' => 101,
                'region_id' => 49,
                'name' => 'Xinzhou',
                'full_name' => NULL,
                'code' => '9',
            ),
            185 => 
            array (
                'id' => 2686,
                'country_id' => 101,
                'region_id' => 49,
                'name' => 'Linfen',
                'full_name' => NULL,
                'code' => '10',
            ),
            186 => 
            array (
                'id' => 2687,
                'country_id' => 101,
                'region_id' => 49,
                'name' => 'luliang',
                'full_name' => NULL,
                'code' => '11',
            ),
            187 => 
            array (
                'id' => 2688,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Hohhot',
                'full_name' => NULL,
                'code' => '1',
            ),
            188 => 
            array (
                'id' => 2689,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Baotou',
                'full_name' => NULL,
                'code' => '2',
            ),
            189 => 
            array (
                'id' => 2690,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Wuhai',
                'full_name' => NULL,
                'code' => '3',
            ),
            190 => 
            array (
                'id' => 2691,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Chifeng',
                'full_name' => NULL,
                'code' => '4',
            ),
            191 => 
            array (
                'id' => 2692,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Tongliao',
                'full_name' => NULL,
                'code' => '5',
            ),
            192 => 
            array (
                'id' => 2693,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Ordos',
                'full_name' => NULL,
                'code' => '6',
            ),
            193 => 
            array (
                'id' => 2694,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Hulun Buir',
                'full_name' => NULL,
                'code' => '7',
            ),
            194 => 
            array (
                'id' => 2695,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Bayannur',
                'full_name' => NULL,
                'code' => '8',
            ),
            195 => 
            array (
                'id' => 2696,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Ulan Qab',
                'full_name' => NULL,
                'code' => '9',
            ),
            196 => 
            array (
                'id' => 2697,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Xing\'an',
                'full_name' => NULL,
                'code' => '22',
            ),
            197 => 
            array (
                'id' => 2698,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Xilin Gol',
                'full_name' => NULL,
                'code' => '25',
            ),
            198 => 
            array (
                'id' => 2699,
                'country_id' => 101,
                'region_id' => 39,
                'name' => 'Alxa',
                'full_name' => NULL,
                'code' => '29',
            ),
            199 => 
            array (
                'id' => 2700,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Shenyang',
                'full_name' => NULL,
                'code' => '1',
            ),
            200 => 
            array (
                'id' => 2701,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Dalian',
                'full_name' => NULL,
                'code' => '2',
            ),
            201 => 
            array (
                'id' => 2702,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Anshan',
                'full_name' => NULL,
                'code' => '3',
            ),
            202 => 
            array (
                'id' => 2703,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Fushun',
                'full_name' => NULL,
                'code' => '4',
            ),
            203 => 
            array (
                'id' => 2704,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Benxi',
                'full_name' => NULL,
                'code' => '5',
            ),
            204 => 
            array (
                'id' => 2705,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Dandong',
                'full_name' => NULL,
                'code' => '6',
            ),
            205 => 
            array (
                'id' => 2706,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Jinzhou',
                'full_name' => NULL,
                'code' => '7',
            ),
            206 => 
            array (
                'id' => 2707,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Yingkou',
                'full_name' => NULL,
                'code' => '8',
            ),
            207 => 
            array (
                'id' => 2708,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Fuxin',
                'full_name' => NULL,
                'code' => '9',
            ),
            208 => 
            array (
                'id' => 2709,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Liaoyang',
                'full_name' => NULL,
                'code' => '10',
            ),
            209 => 
            array (
                'id' => 2710,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Panjin',
                'full_name' => NULL,
                'code' => '11',
            ),
            210 => 
            array (
                'id' => 2711,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Tieling',
                'full_name' => NULL,
                'code' => '12',
            ),
            211 => 
            array (
                'id' => 2712,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Chaoyang',
                'full_name' => NULL,
                'code' => '13',
            ),
            212 => 
            array (
                'id' => 2713,
                'country_id' => 101,
                'region_id' => 43,
                'name' => 'Huludao',
                'full_name' => NULL,
                'code' => '14',
            ),
            213 => 
            array (
                'id' => 2714,
                'country_id' => 101,
                'region_id' => 42,
                'name' => 'Changchun',
                'full_name' => NULL,
                'code' => '1',
            ),
            214 => 
            array (
                'id' => 2715,
                'country_id' => 101,
                'region_id' => 42,
                'name' => 'Jilin',
                'full_name' => NULL,
                'code' => '2',
            ),
            215 => 
            array (
                'id' => 2716,
                'country_id' => 101,
                'region_id' => 42,
                'name' => 'Siping',
                'full_name' => NULL,
                'code' => '3',
            ),
            216 => 
            array (
                'id' => 2717,
                'country_id' => 101,
                'region_id' => 42,
                'name' => 'Liaoyuan',
                'full_name' => NULL,
                'code' => '4',
            ),
            217 => 
            array (
                'id' => 2718,
                'country_id' => 101,
                'region_id' => 42,
                'name' => 'Tonghua',
                'full_name' => NULL,
                'code' => '5',
            ),
            218 => 
            array (
                'id' => 2719,
                'country_id' => 101,
                'region_id' => 42,
                'name' => 'Baishan',
                'full_name' => NULL,
                'code' => '6',
            ),
            219 => 
            array (
                'id' => 2720,
                'country_id' => 101,
                'region_id' => 42,
                'name' => 'Songyuan',
                'full_name' => NULL,
                'code' => '7',
            ),
            220 => 
            array (
                'id' => 2721,
                'country_id' => 101,
                'region_id' => 42,
                'name' => 'Baicheng',
                'full_name' => NULL,
                'code' => '8',
            ),
            221 => 
            array (
                'id' => 2722,
                'country_id' => 101,
                'region_id' => 42,
                'name' => 'Yanbian Korean Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '24',
            ),
            222 => 
            array (
                'id' => 2723,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Harbin',
                'full_name' => NULL,
                'code' => '1',
            ),
            223 => 
            array (
                'id' => 2724,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Qiqihar',
                'full_name' => NULL,
                'code' => '2',
            ),
            224 => 
            array (
                'id' => 2725,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Jixi',
                'full_name' => NULL,
                'code' => '3',
            ),
            225 => 
            array (
                'id' => 2726,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Hegang',
                'full_name' => NULL,
                'code' => '4',
            ),
            226 => 
            array (
                'id' => 2727,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Shuangyashan',
                'full_name' => NULL,
                'code' => '5',
            ),
            227 => 
            array (
                'id' => 2728,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Daqing',
                'full_name' => NULL,
                'code' => '6',
            ),
            228 => 
            array (
                'id' => 2729,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Yichun',
                'full_name' => NULL,
                'code' => '7',
            ),
            229 => 
            array (
                'id' => 2730,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Jiamusi',
                'full_name' => NULL,
                'code' => '8',
            ),
            230 => 
            array (
                'id' => 2731,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Qitaihe',
                'full_name' => NULL,
                'code' => '9',
            ),
            231 => 
            array (
                'id' => 2732,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Mudanjiang',
                'full_name' => NULL,
                'code' => '10',
            ),
            232 => 
            array (
                'id' => 2733,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Heihe',
                'full_name' => NULL,
                'code' => '11',
            ),
            233 => 
            array (
                'id' => 2734,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Suihua',
                'full_name' => NULL,
                'code' => '12',
            ),
            234 => 
            array (
                'id' => 2735,
                'country_id' => 101,
                'region_id' => 35,
                'name' => 'Da Hinggan Ling',
                'full_name' => NULL,
                'code' => '27',
            ),
            235 => 
            array (
                'id' => 2736,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Huangpu',
                'full_name' => NULL,
                'code' => '1',
            ),
            236 => 
            array (
                'id' => 2737,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Luwan',
                'full_name' => NULL,
                'code' => '3',
            ),
            237 => 
            array (
                'id' => 2738,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Xuhui',
                'full_name' => NULL,
                'code' => '4',
            ),
            238 => 
            array (
                'id' => 2739,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Changning',
                'full_name' => NULL,
                'code' => '5',
            ),
            239 => 
            array (
                'id' => 2740,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Jing\'an',
                'full_name' => NULL,
                'code' => '6',
            ),
            240 => 
            array (
                'id' => 2741,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Putuo',
                'full_name' => NULL,
                'code' => '7',
            ),
            241 => 
            array (
                'id' => 2742,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Zhabei',
                'full_name' => NULL,
                'code' => '8',
            ),
            242 => 
            array (
                'id' => 2743,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Hongkou',
                'full_name' => NULL,
                'code' => '9',
            ),
            243 => 
            array (
                'id' => 2744,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Yangpu',
                'full_name' => NULL,
                'code' => '11',
            ),
            244 => 
            array (
                'id' => 2745,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Minhang',
                'full_name' => NULL,
                'code' => '12',
            ),
            245 => 
            array (
                'id' => 2746,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Baoshan',
                'full_name' => NULL,
                'code' => '13',
            ),
            246 => 
            array (
                'id' => 2747,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Jiading',
                'full_name' => NULL,
                'code' => '14',
            ),
            247 => 
            array (
                'id' => 2748,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Pudong New Area',
                'full_name' => NULL,
                'code' => '15',
            ),
            248 => 
            array (
                'id' => 2749,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Jinshan',
                'full_name' => NULL,
                'code' => '16',
            ),
            249 => 
            array (
                'id' => 2750,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Songjiang',
                'full_name' => NULL,
                'code' => '17',
            ),
            250 => 
            array (
                'id' => 2751,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Fengxian',
                'full_name' => NULL,
                'code' => '26',
            ),
            251 => 
            array (
                'id' => 2752,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Qingpu',
                'full_name' => NULL,
                'code' => '29',
            ),
            252 => 
            array (
                'id' => 2753,
                'country_id' => 101,
                'region_id' => 48,
                'name' => 'Chongming',
                'full_name' => NULL,
                'code' => '30',
            ),
            253 => 
            array (
                'id' => 2754,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Nanjing',
                'full_name' => NULL,
                'code' => '1',
            ),
            254 => 
            array (
                'id' => 2755,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Wuxi',
                'full_name' => NULL,
                'code' => '2',
            ),
            255 => 
            array (
                'id' => 2756,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Xuzhou',
                'full_name' => NULL,
                'code' => '3',
            ),
            256 => 
            array (
                'id' => 2757,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Changzhou',
                'full_name' => NULL,
                'code' => '4',
            ),
            257 => 
            array (
                'id' => 2758,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Suzhou',
                'full_name' => NULL,
                'code' => '5',
            ),
            258 => 
            array (
                'id' => 2759,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Nantong',
                'full_name' => NULL,
                'code' => '6',
            ),
            259 => 
            array (
                'id' => 2760,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Lianyungang',
                'full_name' => NULL,
                'code' => '7',
            ),
            260 => 
            array (
                'id' => 2761,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Huai\'an',
                'full_name' => NULL,
                'code' => '8',
            ),
            261 => 
            array (
                'id' => 2762,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Yancheng',
                'full_name' => NULL,
                'code' => '9',
            ),
            262 => 
            array (
                'id' => 2763,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Yangzhou',
                'full_name' => NULL,
                'code' => '10',
            ),
            263 => 
            array (
                'id' => 2764,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Zhenjiang',
                'full_name' => NULL,
                'code' => '11',
            ),
            264 => 
            array (
                'id' => 2765,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Taizhou',
                'full_name' => NULL,
                'code' => '12',
            ),
            265 => 
            array (
                'id' => 2766,
                'country_id' => 101,
                'region_id' => 40,
                'name' => 'Suqian',
                'full_name' => NULL,
                'code' => '13',
            ),
            266 => 
            array (
                'id' => 2767,
                'country_id' => 101,
                'region_id' => 56,
                'name' => 'Hangzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            267 => 
            array (
                'id' => 2768,
                'country_id' => 101,
                'region_id' => 56,
                'name' => 'Ningbo',
                'full_name' => NULL,
                'code' => '2',
            ),
            268 => 
            array (
                'id' => 2769,
                'country_id' => 101,
                'region_id' => 56,
                'name' => 'Wenzhou',
                'full_name' => NULL,
                'code' => '3',
            ),
            269 => 
            array (
                'id' => 2770,
                'country_id' => 101,
                'region_id' => 56,
                'name' => 'Jiaxing',
                'full_name' => NULL,
                'code' => '4',
            ),
            270 => 
            array (
                'id' => 2771,
                'country_id' => 101,
                'region_id' => 56,
                'name' => 'Huzhou',
                'full_name' => NULL,
                'code' => '5',
            ),
            271 => 
            array (
                'id' => 2772,
                'country_id' => 101,
                'region_id' => 56,
                'name' => 'Shaoxing',
                'full_name' => NULL,
                'code' => '6',
            ),
            272 => 
            array (
                'id' => 2773,
                'country_id' => 101,
                'region_id' => 56,
                'name' => 'Jinhua',
                'full_name' => NULL,
                'code' => '7',
            ),
            273 => 
            array (
                'id' => 2774,
                'country_id' => 101,
                'region_id' => 56,
                'name' => 'Quzhou',
                'full_name' => NULL,
                'code' => '8',
            ),
            274 => 
            array (
                'id' => 2775,
                'country_id' => 101,
                'region_id' => 56,
                'name' => 'Zhoushan',
                'full_name' => NULL,
                'code' => '9',
            ),
            275 => 
            array (
                'id' => 2776,
                'country_id' => 101,
                'region_id' => 56,
                'name' => 'Taizhou',
                'full_name' => NULL,
                'code' => '10',
            ),
            276 => 
            array (
                'id' => 2777,
                'country_id' => 101,
                'region_id' => 56,
                'name' => 'Lishui',
                'full_name' => NULL,
                'code' => '11',
            ),
            277 => 
            array (
                'id' => 2778,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Hefei',
                'full_name' => NULL,
                'code' => '1',
            ),
            278 => 
            array (
                'id' => 2779,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Wuhu',
                'full_name' => NULL,
                'code' => '2',
            ),
            279 => 
            array (
                'id' => 2780,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Bengbu',
                'full_name' => NULL,
                'code' => '3',
            ),
            280 => 
            array (
                'id' => 2781,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Huainan',
                'full_name' => NULL,
                'code' => '4',
            ),
            281 => 
            array (
                'id' => 2782,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Ma\'anshan',
                'full_name' => NULL,
                'code' => '5',
            ),
            282 => 
            array (
                'id' => 2783,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Huaibei',
                'full_name' => NULL,
                'code' => '6',
            ),
            283 => 
            array (
                'id' => 2784,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Tongling',
                'full_name' => NULL,
                'code' => '7',
            ),
            284 => 
            array (
                'id' => 2785,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Anqing',
                'full_name' => NULL,
                'code' => '8',
            ),
            285 => 
            array (
                'id' => 2786,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Huangshan',
                'full_name' => NULL,
                'code' => '10',
            ),
            286 => 
            array (
                'id' => 2787,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Chuzhou',
                'full_name' => NULL,
                'code' => '11',
            ),
            287 => 
            array (
                'id' => 2788,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Fuyang',
                'full_name' => NULL,
                'code' => '12',
            ),
            288 => 
            array (
                'id' => 2789,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Suzhou',
                'full_name' => NULL,
                'code' => '13',
            ),
            289 => 
            array (
                'id' => 2790,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Lu\'an',
                'full_name' => NULL,
                'code' => '15',
            ),
            290 => 
            array (
                'id' => 2791,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Bozhou',
                'full_name' => NULL,
                'code' => '16',
            ),
            291 => 
            array (
                'id' => 2792,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Chizhou',
                'full_name' => NULL,
                'code' => '17',
            ),
            292 => 
            array (
                'id' => 2793,
                'country_id' => 101,
                'region_id' => 25,
                'name' => 'Xuancheng',
                'full_name' => NULL,
                'code' => '18',
            ),
            293 => 
            array (
                'id' => 2794,
                'country_id' => 101,
                'region_id' => 28,
                'name' => 'Fuzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            294 => 
            array (
                'id' => 2795,
                'country_id' => 101,
                'region_id' => 28,
                'name' => 'Xiamen',
                'full_name' => NULL,
                'code' => '2',
            ),
            295 => 
            array (
                'id' => 2796,
                'country_id' => 101,
                'region_id' => 28,
                'name' => 'Putian',
                'full_name' => NULL,
                'code' => '3',
            ),
            296 => 
            array (
                'id' => 2797,
                'country_id' => 101,
                'region_id' => 28,
                'name' => 'Sanming',
                'full_name' => NULL,
                'code' => '4',
            ),
            297 => 
            array (
                'id' => 2798,
                'country_id' => 101,
                'region_id' => 28,
                'name' => 'Quanzhou',
                'full_name' => NULL,
                'code' => '5',
            ),
            298 => 
            array (
                'id' => 2799,
                'country_id' => 101,
                'region_id' => 28,
                'name' => 'Zhangzhou',
                'full_name' => NULL,
                'code' => '6',
            ),
            299 => 
            array (
                'id' => 2800,
                'country_id' => 101,
                'region_id' => 28,
                'name' => 'Nanping',
                'full_name' => NULL,
                'code' => '7',
            ),
            300 => 
            array (
                'id' => 2801,
                'country_id' => 101,
                'region_id' => 28,
                'name' => 'Longyan',
                'full_name' => NULL,
                'code' => '8',
            ),
            301 => 
            array (
                'id' => 2802,
                'country_id' => 101,
                'region_id' => 28,
                'name' => 'Ningde',
                'full_name' => NULL,
                'code' => '9',
            ),
            302 => 
            array (
                'id' => 2803,
                'country_id' => 101,
                'region_id' => 41,
                'name' => 'Nanchang',
                'full_name' => NULL,
                'code' => '1',
            ),
            303 => 
            array (
                'id' => 2804,
                'country_id' => 101,
                'region_id' => 41,
                'name' => 'Jingdezhen',
                'full_name' => NULL,
                'code' => '2',
            ),
            304 => 
            array (
                'id' => 2805,
                'country_id' => 101,
                'region_id' => 41,
                'name' => 'Pingxiang',
                'full_name' => NULL,
                'code' => '3',
            ),
            305 => 
            array (
                'id' => 2806,
                'country_id' => 101,
                'region_id' => 41,
                'name' => 'Jiujiang',
                'full_name' => NULL,
                'code' => '4',
            ),
            306 => 
            array (
                'id' => 2807,
                'country_id' => 101,
                'region_id' => 41,
                'name' => 'Xinyu',
                'full_name' => NULL,
                'code' => '5',
            ),
            307 => 
            array (
                'id' => 2808,
                'country_id' => 101,
                'region_id' => 41,
                'name' => 'Yingtan',
                'full_name' => NULL,
                'code' => '6',
            ),
            308 => 
            array (
                'id' => 2809,
                'country_id' => 101,
                'region_id' => 41,
                'name' => 'Ganzhou',
                'full_name' => NULL,
                'code' => '7',
            ),
            309 => 
            array (
                'id' => 2810,
                'country_id' => 101,
                'region_id' => 41,
                'name' => 'Ji\'an',
                'full_name' => NULL,
                'code' => '8',
            ),
            310 => 
            array (
                'id' => 2811,
                'country_id' => 101,
                'region_id' => 41,
                'name' => 'Yichun',
                'full_name' => NULL,
                'code' => '9',
            ),
            311 => 
            array (
                'id' => 2812,
                'country_id' => 101,
                'region_id' => 41,
                'name' => 'Fuzhou',
                'full_name' => NULL,
                'code' => '10',
            ),
            312 => 
            array (
                'id' => 2813,
                'country_id' => 101,
                'region_id' => 41,
                'name' => 'Shangrao',
                'full_name' => NULL,
                'code' => '11',
            ),
            313 => 
            array (
                'id' => 2814,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Jinan',
                'full_name' => NULL,
                'code' => '1',
            ),
            314 => 
            array (
                'id' => 2815,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Qingdao',
                'full_name' => NULL,
                'code' => '2',
            ),
            315 => 
            array (
                'id' => 2816,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Zibo',
                'full_name' => NULL,
                'code' => '3',
            ),
            316 => 
            array (
                'id' => 2817,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Zaozhuang',
                'full_name' => NULL,
                'code' => '4',
            ),
            317 => 
            array (
                'id' => 2818,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Dongying',
                'full_name' => NULL,
                'code' => '5',
            ),
            318 => 
            array (
                'id' => 2819,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Yantai',
                'full_name' => NULL,
                'code' => '6',
            ),
            319 => 
            array (
                'id' => 2820,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Weifang',
                'full_name' => NULL,
                'code' => '7',
            ),
            320 => 
            array (
                'id' => 2821,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Jining',
                'full_name' => NULL,
                'code' => '8',
            ),
            321 => 
            array (
                'id' => 2822,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Tai\'an',
                'full_name' => NULL,
                'code' => '9',
            ),
            322 => 
            array (
                'id' => 2823,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Weihai',
                'full_name' => NULL,
                'code' => '10',
            ),
            323 => 
            array (
                'id' => 2824,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Rizhao',
                'full_name' => NULL,
                'code' => '11',
            ),
            324 => 
            array (
                'id' => 2825,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Laiwu',
                'full_name' => NULL,
                'code' => '12',
            ),
            325 => 
            array (
                'id' => 2826,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Linyi',
                'full_name' => NULL,
                'code' => '13',
            ),
            326 => 
            array (
                'id' => 2827,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Dezhou',
                'full_name' => NULL,
                'code' => '14',
            ),
            327 => 
            array (
                'id' => 2828,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Liaocheng',
                'full_name' => NULL,
                'code' => '15',
            ),
            328 => 
            array (
                'id' => 2829,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Binzhou',
                'full_name' => NULL,
                'code' => '16',
            ),
            329 => 
            array (
                'id' => 2830,
                'country_id' => 101,
                'region_id' => 47,
                'name' => 'Heze',
                'full_name' => NULL,
                'code' => '17',
            ),
            330 => 
            array (
                'id' => 2831,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Zhengzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            331 => 
            array (
                'id' => 2832,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Kaifeng',
                'full_name' => NULL,
                'code' => '2',
            ),
            332 => 
            array (
                'id' => 2833,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Luoyang',
                'full_name' => NULL,
                'code' => '3',
            ),
            333 => 
            array (
                'id' => 2834,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Pingdingshan',
                'full_name' => NULL,
                'code' => '4',
            ),
            334 => 
            array (
                'id' => 2835,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Anyang',
                'full_name' => NULL,
                'code' => '5',
            ),
            335 => 
            array (
                'id' => 2836,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Hebi',
                'full_name' => NULL,
                'code' => '6',
            ),
            336 => 
            array (
                'id' => 2837,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Xinxiang',
                'full_name' => NULL,
                'code' => '7',
            ),
            337 => 
            array (
                'id' => 2838,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Jiaozuo',
                'full_name' => NULL,
                'code' => '8',
            ),
            338 => 
            array (
                'id' => 2839,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Puyang',
                'full_name' => NULL,
                'code' => '9',
            ),
            339 => 
            array (
                'id' => 2840,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Xuchang',
                'full_name' => NULL,
                'code' => '10',
            ),
            340 => 
            array (
                'id' => 2841,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Luohe',
                'full_name' => NULL,
                'code' => '11',
            ),
            341 => 
            array (
                'id' => 2842,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Sanmenxia',
                'full_name' => NULL,
                'code' => '12',
            ),
            342 => 
            array (
                'id' => 2843,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Nanyang',
                'full_name' => NULL,
                'code' => '13',
            ),
            343 => 
            array (
                'id' => 2844,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Shangqiu',
                'full_name' => NULL,
                'code' => '14',
            ),
            344 => 
            array (
                'id' => 2845,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Xinyang',
                'full_name' => NULL,
                'code' => '15',
            ),
            345 => 
            array (
                'id' => 2846,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Zhoukou',
                'full_name' => NULL,
                'code' => '16',
            ),
            346 => 
            array (
                'id' => 2847,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Zhumadian',
                'full_name' => NULL,
                'code' => '17',
            ),
            347 => 
            array (
                'id' => 2848,
                'country_id' => 101,
                'region_id' => 36,
                'name' => 'Jiyuan',
                'full_name' => NULL,
                'code' => '18',
            ),
            348 => 
            array (
                'id' => 2849,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Wuhan',
                'full_name' => NULL,
                'code' => '1',
            ),
            349 => 
            array (
                'id' => 2850,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Huangshi',
                'full_name' => NULL,
                'code' => '2',
            ),
            350 => 
            array (
                'id' => 2851,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Shiyan',
                'full_name' => NULL,
                'code' => '3',
            ),
            351 => 
            array (
                'id' => 2852,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Yichang',
                'full_name' => NULL,
                'code' => '5',
            ),
            352 => 
            array (
                'id' => 2853,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Xiangyang',
                'full_name' => NULL,
                'code' => '6',
            ),
            353 => 
            array (
                'id' => 2854,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Ezhou',
                'full_name' => NULL,
                'code' => '7',
            ),
            354 => 
            array (
                'id' => 2855,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Jingmen',
                'full_name' => NULL,
                'code' => '8',
            ),
            355 => 
            array (
                'id' => 2856,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Xiaogan',
                'full_name' => NULL,
                'code' => '9',
            ),
            356 => 
            array (
                'id' => 2857,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Jingzhou',
                'full_name' => NULL,
                'code' => '10',
            ),
            357 => 
            array (
                'id' => 2858,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Huanggang',
                'full_name' => NULL,
                'code' => '11',
            ),
            358 => 
            array (
                'id' => 2859,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Xianning',
                'full_name' => NULL,
                'code' => '12',
            ),
            359 => 
            array (
                'id' => 2860,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Suizhou',
                'full_name' => NULL,
                'code' => '13',
            ),
            360 => 
            array (
                'id' => 2861,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Enshi Tujia-Miao Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '28',
            ),
            361 => 
            array (
                'id' => 2862,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Xiantao',
                'full_name' => NULL,
                'code' => '94',
            ),
            362 => 
            array (
                'id' => 2863,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Qianjiang',
                'full_name' => NULL,
                'code' => '95',
            ),
            363 => 
            array (
                'id' => 2864,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Tianmen',
                'full_name' => NULL,
                'code' => '96',
            ),
            364 => 
            array (
                'id' => 2865,
                'country_id' => 101,
                'region_id' => 37,
                'name' => 'Shennongjia',
                'full_name' => NULL,
                'code' => 'A21',
            ),
            365 => 
            array (
                'id' => 2866,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Changsha',
                'full_name' => NULL,
                'code' => '1',
            ),
            366 => 
            array (
                'id' => 2867,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Zhuzhou',
                'full_name' => NULL,
                'code' => '2',
            ),
            367 => 
            array (
                'id' => 2868,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Xiangtan',
                'full_name' => NULL,
                'code' => '3',
            ),
            368 => 
            array (
                'id' => 2869,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Hengyang',
                'full_name' => NULL,
                'code' => '4',
            ),
            369 => 
            array (
                'id' => 2870,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Shaoyang',
                'full_name' => NULL,
                'code' => '5',
            ),
            370 => 
            array (
                'id' => 2871,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Yueyang',
                'full_name' => NULL,
                'code' => '6',
            ),
            371 => 
            array (
                'id' => 2872,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Changde',
                'full_name' => NULL,
                'code' => '7',
            ),
            372 => 
            array (
                'id' => 2873,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Zhangjiajie',
                'full_name' => NULL,
                'code' => '8',
            ),
            373 => 
            array (
                'id' => 2874,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Yiyang',
                'full_name' => NULL,
                'code' => '9',
            ),
            374 => 
            array (
                'id' => 2875,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Chenzhou',
                'full_name' => NULL,
                'code' => '10',
            ),
            375 => 
            array (
                'id' => 2876,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Yongzhou',
                'full_name' => NULL,
                'code' => '11',
            ),
            376 => 
            array (
                'id' => 2877,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Huaihua',
                'full_name' => NULL,
                'code' => '12',
            ),
            377 => 
            array (
                'id' => 2878,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Loudi',
                'full_name' => NULL,
                'code' => '13',
            ),
            378 => 
            array (
                'id' => 2879,
                'country_id' => 101,
                'region_id' => 38,
                'name' => 'Xiangxi Tujia-Miao Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '31',
            ),
            379 => 
            array (
                'id' => 2880,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Guangzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            380 => 
            array (
                'id' => 2881,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Shaoguan',
                'full_name' => NULL,
                'code' => '2',
            ),
            381 => 
            array (
                'id' => 2882,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Shenzhen',
                'full_name' => NULL,
                'code' => '3',
            ),
            382 => 
            array (
                'id' => 2883,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Zhuhai',
                'full_name' => NULL,
                'code' => '4',
            ),
            383 => 
            array (
                'id' => 2884,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Shantou',
                'full_name' => NULL,
                'code' => '5',
            ),
            384 => 
            array (
                'id' => 2885,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Foshan',
                'full_name' => NULL,
                'code' => '6',
            ),
            385 => 
            array (
                'id' => 2886,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Jiangmen',
                'full_name' => NULL,
                'code' => '7',
            ),
            386 => 
            array (
                'id' => 2887,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Zhanjiang',
                'full_name' => NULL,
                'code' => '8',
            ),
            387 => 
            array (
                'id' => 2888,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Maoming',
                'full_name' => NULL,
                'code' => '9',
            ),
            388 => 
            array (
                'id' => 2889,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Zhaoqing',
                'full_name' => NULL,
                'code' => '12',
            ),
            389 => 
            array (
                'id' => 2890,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Huizhou',
                'full_name' => NULL,
                'code' => '13',
            ),
            390 => 
            array (
                'id' => 2891,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Meizhou',
                'full_name' => NULL,
                'code' => '14',
            ),
            391 => 
            array (
                'id' => 2892,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Shanwei',
                'full_name' => NULL,
                'code' => '15',
            ),
            392 => 
            array (
                'id' => 2893,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Heyuan',
                'full_name' => NULL,
                'code' => '16',
            ),
            393 => 
            array (
                'id' => 2894,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Yangjiang',
                'full_name' => NULL,
                'code' => '17',
            ),
            394 => 
            array (
                'id' => 2895,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Qingyuan',
                'full_name' => NULL,
                'code' => '18',
            ),
            395 => 
            array (
                'id' => 2896,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Dongguan',
                'full_name' => NULL,
                'code' => '19',
            ),
            396 => 
            array (
                'id' => 2897,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Zhongshan',
                'full_name' => NULL,
                'code' => '20',
            ),
            397 => 
            array (
                'id' => 2898,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Chaozhou',
                'full_name' => NULL,
                'code' => '51',
            ),
            398 => 
            array (
                'id' => 2899,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Jieyang',
                'full_name' => NULL,
                'code' => '52',
            ),
            399 => 
            array (
                'id' => 2900,
                'country_id' => 101,
                'region_id' => 30,
                'name' => 'Yunfu',
                'full_name' => NULL,
                'code' => '53',
            ),
            400 => 
            array (
                'id' => 2901,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Nanning',
                'full_name' => NULL,
                'code' => '1',
            ),
            401 => 
            array (
                'id' => 2902,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Liuzhou',
                'full_name' => NULL,
                'code' => '2',
            ),
            402 => 
            array (
                'id' => 2903,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Guilin',
                'full_name' => NULL,
                'code' => '3',
            ),
            403 => 
            array (
                'id' => 2904,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Wuzhou',
                'full_name' => NULL,
                'code' => '4',
            ),
            404 => 
            array (
                'id' => 2905,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Beihai',
                'full_name' => NULL,
                'code' => '5',
            ),
            405 => 
            array (
                'id' => 2906,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Fangchenggang',
                'full_name' => NULL,
                'code' => '6',
            ),
            406 => 
            array (
                'id' => 2907,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Qinzhou',
                'full_name' => NULL,
                'code' => '7',
            ),
            407 => 
            array (
                'id' => 2908,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Guigang',
                'full_name' => NULL,
                'code' => '8',
            ),
            408 => 
            array (
                'id' => 2909,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Yulin',
                'full_name' => NULL,
                'code' => '9',
            ),
            409 => 
            array (
                'id' => 2910,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Baise',
                'full_name' => NULL,
                'code' => '10',
            ),
            410 => 
            array (
                'id' => 2911,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Hezhou',
                'full_name' => NULL,
                'code' => '11',
            ),
            411 => 
            array (
                'id' => 2912,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Hechi',
                'full_name' => NULL,
                'code' => '12',
            ),
            412 => 
            array (
                'id' => 2913,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Laibin',
                'full_name' => NULL,
                'code' => '13',
            ),
            413 => 
            array (
                'id' => 2914,
                'country_id' => 101,
                'region_id' => 31,
                'name' => 'Chongzuo',
                'full_name' => NULL,
                'code' => '14',
            ),
            414 => 
            array (
                'id' => 2915,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Haikou',
                'full_name' => NULL,
                'code' => '1',
            ),
            415 => 
            array (
                'id' => 2916,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Sanya',
                'full_name' => NULL,
                'code' => '2',
            ),
            416 => 
            array (
                'id' => 2917,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Shansha',
                'full_name' => NULL,
                'code' => '3',
            ),
            417 => 
            array (
                'id' => 2918,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Wuzhishan',
                'full_name' => NULL,
                'code' => '91',
            ),
            418 => 
            array (
                'id' => 2919,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Qionghai',
                'full_name' => NULL,
                'code' => '92',
            ),
            419 => 
            array (
                'id' => 2920,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Danzhou',
                'full_name' => NULL,
                'code' => '93',
            ),
            420 => 
            array (
                'id' => 2921,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Wenchang',
                'full_name' => NULL,
                'code' => '95',
            ),
            421 => 
            array (
                'id' => 2922,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Wanning',
                'full_name' => NULL,
                'code' => '96',
            ),
            422 => 
            array (
                'id' => 2923,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Dongfang',
                'full_name' => NULL,
                'code' => '97',
            ),
            423 => 
            array (
                'id' => 2924,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Ding\'an',
                'full_name' => NULL,
                'code' => 'A25',
            ),
            424 => 
            array (
                'id' => 2925,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Tunchang',
                'full_name' => NULL,
                'code' => 'A26',
            ),
            425 => 
            array (
                'id' => 2926,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Cengmai',
                'full_name' => NULL,
                'code' => 'A27',
            ),
            426 => 
            array (
                'id' => 2927,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Lingao',
                'full_name' => NULL,
                'code' => 'A28',
            ),
            427 => 
            array (
                'id' => 2928,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Baisha Li Autonomous County',
                'full_name' => NULL,
                'code' => 'A30',
            ),
            428 => 
            array (
                'id' => 2929,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Jiang Li Autonomous County',
                'full_name' => NULL,
                'code' => 'A31',
            ),
            429 => 
            array (
                'id' => 2930,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Ledong Li Autonomous County',
                'full_name' => NULL,
                'code' => 'A33',
            ),
            430 => 
            array (
                'id' => 2931,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Lingshui Li Autonomous County',
                'full_name' => NULL,
                'code' => 'A34',
            ),
            431 => 
            array (
                'id' => 2932,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Baoting Li-Miao Autonomous County',
                'full_name' => NULL,
                'code' => 'A35',
            ),
            432 => 
            array (
                'id' => 2933,
                'country_id' => 101,
                'region_id' => 33,
                'name' => 'Qiongzhong Li-Miao Autonomous County',
                'full_name' => NULL,
                'code' => 'A36',
            ),
            433 => 
            array (
                'id' => 2934,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Wanzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            434 => 
            array (
                'id' => 2935,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Fuling',
                'full_name' => NULL,
                'code' => '2',
            ),
            435 => 
            array (
                'id' => 2936,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Yuzhong',
                'full_name' => NULL,
                'code' => '3',
            ),
            436 => 
            array (
                'id' => 2937,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Dadukou',
                'full_name' => NULL,
                'code' => '4',
            ),
            437 => 
            array (
                'id' => 2938,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Jiangbei',
                'full_name' => NULL,
                'code' => '5',
            ),
            438 => 
            array (
                'id' => 2939,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Shapingba',
                'full_name' => NULL,
                'code' => '6',
            ),
            439 => 
            array (
                'id' => 2940,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Jiulongpo',
                'full_name' => NULL,
                'code' => '7',
            ),
            440 => 
            array (
                'id' => 2941,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Nan\'an',
                'full_name' => NULL,
                'code' => '8',
            ),
            441 => 
            array (
                'id' => 2942,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Beibei',
                'full_name' => NULL,
                'code' => '9',
            ),
            442 => 
            array (
                'id' => 2943,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Liangjiang',
                'full_name' => 'Liangjiang New Area ',
                'code' => '85',
            ),
            443 => 
            array (
                'id' => 2944,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Wansheng',
                'full_name' => NULL,
                'code' => '10',
            ),
            444 => 
            array (
                'id' => 2945,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Shuangqiao',
                'full_name' => NULL,
                'code' => '11',
            ),
            445 => 
            array (
                'id' => 2946,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Yubei',
                'full_name' => NULL,
                'code' => '12',
            ),
            446 => 
            array (
                'id' => 2947,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Ba\'nan',
                'full_name' => NULL,
                'code' => '13',
            ),
            447 => 
            array (
                'id' => 2948,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Changshou',
                'full_name' => NULL,
                'code' => '21',
            ),
            448 => 
            array (
                'id' => 2949,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Qijiang',
                'full_name' => NULL,
                'code' => '22',
            ),
            449 => 
            array (
                'id' => 2950,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Tongnan',
                'full_name' => NULL,
                'code' => '23',
            ),
            450 => 
            array (
                'id' => 2951,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Tongliang',
                'full_name' => NULL,
                'code' => '24',
            ),
            451 => 
            array (
                'id' => 2952,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Dazu',
                'full_name' => NULL,
                'code' => '25',
            ),
            452 => 
            array (
                'id' => 2953,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Rongchang',
                'full_name' => NULL,
                'code' => '26',
            ),
            453 => 
            array (
                'id' => 2954,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Bishan',
                'full_name' => NULL,
                'code' => '27',
            ),
            454 => 
            array (
                'id' => 2955,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Liangping',
                'full_name' => NULL,
                'code' => '28',
            ),
            455 => 
            array (
                'id' => 2956,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Chengkou',
                'full_name' => NULL,
                'code' => '29',
            ),
            456 => 
            array (
                'id' => 2957,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Fengdu',
                'full_name' => NULL,
                'code' => '30',
            ),
            457 => 
            array (
                'id' => 2958,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Dianjiang',
                'full_name' => NULL,
                'code' => '31',
            ),
            458 => 
            array (
                'id' => 2959,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Wulong',
                'full_name' => NULL,
                'code' => '32',
            ),
            459 => 
            array (
                'id' => 2960,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Zhongxian',
                'full_name' => NULL,
                'code' => '33',
            ),
            460 => 
            array (
                'id' => 2961,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Kaixian',
                'full_name' => NULL,
                'code' => '34',
            ),
            461 => 
            array (
                'id' => 2962,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Yunyang',
                'full_name' => NULL,
                'code' => '35',
            ),
            462 => 
            array (
                'id' => 2963,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Fengjie',
                'full_name' => NULL,
                'code' => '36',
            ),
            463 => 
            array (
                'id' => 2964,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Wushan',
                'full_name' => NULL,
                'code' => '37',
            ),
            464 => 
            array (
                'id' => 2965,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Wuxi',
                'full_name' => NULL,
                'code' => '38',
            ),
            465 => 
            array (
                'id' => 2966,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Qianjiang',
                'full_name' => NULL,
                'code' => '39',
            ),
            466 => 
            array (
                'id' => 2967,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Shizhu Tujia Autonomous Country',
                'full_name' => NULL,
                'code' => '40',
            ),
            467 => 
            array (
                'id' => 2968,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Xiushan Tujia-Miao Autonomous Country',
                'full_name' => NULL,
                'code' => '41',
            ),
            468 => 
            array (
                'id' => 2969,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Youyang Tujia-Miao Autonomous Country',
                'full_name' => NULL,
                'code' => '42',
            ),
            469 => 
            array (
                'id' => 2970,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Pengshui Miao-Tujia Autonomous Country',
                'full_name' => NULL,
                'code' => '43',
            ),
            470 => 
            array (
                'id' => 2971,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Jiangjin',
                'full_name' => NULL,
                'code' => '81',
            ),
            471 => 
            array (
                'id' => 2972,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Hechuan',
                'full_name' => NULL,
                'code' => '82',
            ),
            472 => 
            array (
                'id' => 2973,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Yongchuan',
                'full_name' => NULL,
                'code' => '83',
            ),
            473 => 
            array (
                'id' => 2974,
                'country_id' => 101,
                'region_id' => 27,
                'name' => 'Liangjiangxinqu',
                'full_name' => NULL,
                'code' => '84',
            ),
            474 => 
            array (
                'id' => 2975,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Chengdu',
                'full_name' => NULL,
                'code' => '1',
            ),
            475 => 
            array (
                'id' => 2976,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Zigong',
                'full_name' => NULL,
                'code' => '3',
            ),
            476 => 
            array (
                'id' => 2977,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Panzhihua',
                'full_name' => NULL,
                'code' => '4',
            ),
            477 => 
            array (
                'id' => 2978,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Luzhou',
                'full_name' => NULL,
                'code' => '5',
            ),
            478 => 
            array (
                'id' => 2979,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Deyang',
                'full_name' => NULL,
                'code' => '6',
            ),
            479 => 
            array (
                'id' => 2980,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Mianyang',
                'full_name' => NULL,
                'code' => '7',
            ),
            480 => 
            array (
                'id' => 2981,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Guangyuan',
                'full_name' => NULL,
                'code' => '8',
            ),
            481 => 
            array (
                'id' => 2982,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Suining',
                'full_name' => NULL,
                'code' => '9',
            ),
            482 => 
            array (
                'id' => 2983,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Neijiang',
                'full_name' => NULL,
                'code' => '10',
            ),
            483 => 
            array (
                'id' => 2984,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Leshan',
                'full_name' => NULL,
                'code' => '11',
            ),
            484 => 
            array (
                'id' => 2985,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Nanchong',
                'full_name' => NULL,
                'code' => '13',
            ),
            485 => 
            array (
                'id' => 2986,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Meishan',
                'full_name' => NULL,
                'code' => '14',
            ),
            486 => 
            array (
                'id' => 2987,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Yibin',
                'full_name' => NULL,
                'code' => '15',
            ),
            487 => 
            array (
                'id' => 2988,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Guang\'an',
                'full_name' => NULL,
                'code' => '16',
            ),
            488 => 
            array (
                'id' => 2989,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Dazhou',
                'full_name' => NULL,
                'code' => '17',
            ),
            489 => 
            array (
                'id' => 2990,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Ya\'an',
                'full_name' => NULL,
                'code' => '18',
            ),
            490 => 
            array (
                'id' => 2991,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Bazhong',
                'full_name' => NULL,
                'code' => '19',
            ),
            491 => 
            array (
                'id' => 2992,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Ziyang',
                'full_name' => NULL,
                'code' => '20',
            ),
            492 => 
            array (
                'id' => 2993,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Aba Tibetan-Qiang Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '32',
            ),
            493 => 
            array (
                'id' => 2994,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Garze Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '33',
            ),
            494 => 
            array (
                'id' => 2995,
                'country_id' => 101,
                'region_id' => 50,
                'name' => 'Liangshan Yi Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '34',
            ),
            495 => 
            array (
                'id' => 2996,
                'country_id' => 101,
                'region_id' => 32,
                'name' => 'Guiyang',
                'full_name' => NULL,
                'code' => '1',
            ),
            496 => 
            array (
                'id' => 2997,
                'country_id' => 101,
                'region_id' => 32,
                'name' => 'Liupanshui',
                'full_name' => NULL,
                'code' => '2',
            ),
            497 => 
            array (
                'id' => 2998,
                'country_id' => 101,
                'region_id' => 32,
                'name' => 'Zunyi',
                'full_name' => NULL,
                'code' => '3',
            ),
            498 => 
            array (
                'id' => 2999,
                'country_id' => 101,
                'region_id' => 32,
                'name' => 'Anshun',
                'full_name' => NULL,
                'code' => '4',
            ),
            499 => 
            array (
                'id' => 3000,
                'country_id' => 101,
                'region_id' => 32,
                'name' => 'Tongren',
                'full_name' => NULL,
                'code' => '22',
            ),
        ));
        \DB::table('world_cities')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'country_id' => 101,
                'region_id' => 32,
                'name' => 'Qianxinan Buyi-Miao Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '23',
            ),
            1 => 
            array (
                'id' => 3002,
                'country_id' => 101,
                'region_id' => 32,
                'name' => 'Bijie',
                'full_name' => NULL,
                'code' => '24',
            ),
            2 => 
            array (
                'id' => 3003,
                'country_id' => 101,
                'region_id' => 32,
                'name' => 'Qiandongnan Miao-Dong Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '26',
            ),
            3 => 
            array (
                'id' => 3004,
                'country_id' => 101,
                'region_id' => 32,
                'name' => 'Qiannan Buyi Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '27',
            ),
            4 => 
            array (
                'id' => 3005,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Kunming',
                'full_name' => NULL,
                'code' => '1',
            ),
            5 => 
            array (
                'id' => 3006,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Qujing',
                'full_name' => NULL,
                'code' => '3',
            ),
            6 => 
            array (
                'id' => 3007,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Yuxi',
                'full_name' => NULL,
                'code' => '4',
            ),
            7 => 
            array (
                'id' => 3008,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Baoshan',
                'full_name' => NULL,
                'code' => '5',
            ),
            8 => 
            array (
                'id' => 3009,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Zhaotong',
                'full_name' => NULL,
                'code' => '6',
            ),
            9 => 
            array (
                'id' => 3010,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Lijiang',
                'full_name' => NULL,
                'code' => '7',
            ),
            10 => 
            array (
                'id' => 3011,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Pu\'er',
                'full_name' => NULL,
                'code' => '8',
            ),
            11 => 
            array (
                'id' => 3012,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Lincang',
                'full_name' => NULL,
                'code' => '9',
            ),
            12 => 
            array (
                'id' => 3013,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Chuxiong Yi Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '23',
            ),
            13 => 
            array (
                'id' => 3014,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Honghe Hani-Yi Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '25',
            ),
            14 => 
            array (
                'id' => 3015,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Wenshan Zhuang-Miao Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '26',
            ),
            15 => 
            array (
                'id' => 3016,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Xishuangbanna Dai Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '28',
            ),
            16 => 
            array (
                'id' => 3017,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Dali Bai Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '29',
            ),
            17 => 
            array (
                'id' => 3018,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Dehong Dai-Jingpo Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '31',
            ),
            18 => 
            array (
                'id' => 3019,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Nujiang Lisu Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '33',
            ),
            19 => 
            array (
                'id' => 3020,
                'country_id' => 101,
                'region_id' => 55,
                'name' => 'Diqing Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '34',
            ),
            20 => 
            array (
                'id' => 3021,
                'country_id' => 101,
                'region_id' => 53,
                'name' => 'Lhasa',
                'full_name' => NULL,
                'code' => '1',
            ),
            21 => 
            array (
                'id' => 3022,
                'country_id' => 101,
                'region_id' => 53,
                'name' => 'Qamdo',
                'full_name' => NULL,
                'code' => '21',
            ),
            22 => 
            array (
                'id' => 3023,
                'country_id' => 101,
                'region_id' => 53,
                'name' => 'Shannan',
                'full_name' => NULL,
                'code' => '22',
            ),
            23 => 
            array (
                'id' => 3024,
                'country_id' => 101,
                'region_id' => 53,
                'name' => 'Xigaze',
                'full_name' => NULL,
                'code' => '23',
            ),
            24 => 
            array (
                'id' => 3025,
                'country_id' => 101,
                'region_id' => 53,
                'name' => 'Nagqu',
                'full_name' => NULL,
                'code' => '24',
            ),
            25 => 
            array (
                'id' => 3026,
                'country_id' => 101,
                'region_id' => 53,
                'name' => 'Ngari',
                'full_name' => NULL,
                'code' => '25',
            ),
            26 => 
            array (
                'id' => 3027,
                'country_id' => 101,
                'region_id' => 53,
                'name' => 'Nyingchi',
                'full_name' => NULL,
                'code' => '26',
            ),
            27 => 
            array (
                'id' => 3028,
                'country_id' => 101,
                'region_id' => 46,
                'name' => 'Xi\'an',
                'full_name' => NULL,
                'code' => '1',
            ),
            28 => 
            array (
                'id' => 3029,
                'country_id' => 101,
                'region_id' => 46,
                'name' => 'Tongchuan',
                'full_name' => NULL,
                'code' => '2',
            ),
            29 => 
            array (
                'id' => 3030,
                'country_id' => 101,
                'region_id' => 46,
                'name' => 'Baoji',
                'full_name' => NULL,
                'code' => '3',
            ),
            30 => 
            array (
                'id' => 3031,
                'country_id' => 101,
                'region_id' => 46,
                'name' => 'Xianyang',
                'full_name' => NULL,
                'code' => '4',
            ),
            31 => 
            array (
                'id' => 3032,
                'country_id' => 101,
                'region_id' => 46,
                'name' => 'Weinan',
                'full_name' => NULL,
                'code' => '5',
            ),
            32 => 
            array (
                'id' => 3033,
                'country_id' => 101,
                'region_id' => 46,
                'name' => 'Yan\'an',
                'full_name' => NULL,
                'code' => '6',
            ),
            33 => 
            array (
                'id' => 3034,
                'country_id' => 101,
                'region_id' => 46,
                'name' => 'Hanzhong',
                'full_name' => NULL,
                'code' => '7',
            ),
            34 => 
            array (
                'id' => 3035,
                'country_id' => 101,
                'region_id' => 46,
                'name' => 'Yulin',
                'full_name' => NULL,
                'code' => '8',
            ),
            35 => 
            array (
                'id' => 3036,
                'country_id' => 101,
                'region_id' => 46,
                'name' => 'Ankang',
                'full_name' => NULL,
                'code' => '9',
            ),
            36 => 
            array (
                'id' => 3037,
                'country_id' => 101,
                'region_id' => 46,
                'name' => 'Shangluo',
                'full_name' => NULL,
                'code' => '10',
            ),
            37 => 
            array (
                'id' => 3038,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Lanzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            38 => 
            array (
                'id' => 3039,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Jinchang',
                'full_name' => NULL,
                'code' => '2',
            ),
            39 => 
            array (
                'id' => 3040,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Baiyin',
                'full_name' => NULL,
                'code' => '3',
            ),
            40 => 
            array (
                'id' => 3041,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Tianshui',
                'full_name' => NULL,
                'code' => '4',
            ),
            41 => 
            array (
                'id' => 3042,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Jiayuguan',
                'full_name' => NULL,
                'code' => '5',
            ),
            42 => 
            array (
                'id' => 3043,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Wuwei',
                'full_name' => NULL,
                'code' => '6',
            ),
            43 => 
            array (
                'id' => 3044,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Zhangye',
                'full_name' => NULL,
                'code' => '7',
            ),
            44 => 
            array (
                'id' => 3045,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Pingliang',
                'full_name' => NULL,
                'code' => '8',
            ),
            45 => 
            array (
                'id' => 3046,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Jiuquan',
                'full_name' => NULL,
                'code' => '9',
            ),
            46 => 
            array (
                'id' => 3047,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Qingyang',
                'full_name' => NULL,
                'code' => '10',
            ),
            47 => 
            array (
                'id' => 3048,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Dingxi',
                'full_name' => NULL,
                'code' => '11',
            ),
            48 => 
            array (
                'id' => 3049,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Longnan',
                'full_name' => NULL,
                'code' => '12',
            ),
            49 => 
            array (
                'id' => 3050,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Linxia Hui Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '29',
            ),
            50 => 
            array (
                'id' => 3051,
                'country_id' => 101,
                'region_id' => 29,
                'name' => 'Gannan Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '30',
            ),
            51 => 
            array (
                'id' => 3052,
                'country_id' => 101,
                'region_id' => 45,
                'name' => 'Xining',
                'full_name' => NULL,
                'code' => '1',
            ),
            52 => 
            array (
                'id' => 3053,
                'country_id' => 101,
                'region_id' => 45,
                'name' => 'Haidong',
                'full_name' => NULL,
                'code' => '21',
            ),
            53 => 
            array (
                'id' => 3054,
                'country_id' => 101,
                'region_id' => 45,
                'name' => 'Haibei Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '22',
            ),
            54 => 
            array (
                'id' => 3055,
                'country_id' => 101,
                'region_id' => 45,
                'name' => 'Huangnan Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '23',
            ),
            55 => 
            array (
                'id' => 3056,
                'country_id' => 101,
                'region_id' => 45,
                'name' => 'Hainan Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '25',
            ),
            56 => 
            array (
                'id' => 3057,
                'country_id' => 101,
                'region_id' => 45,
                'name' => 'Guoluo Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '26',
            ),
            57 => 
            array (
                'id' => 3058,
                'country_id' => 101,
                'region_id' => 45,
                'name' => 'Yushu Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '27',
            ),
            58 => 
            array (
                'id' => 3059,
                'country_id' => 101,
                'region_id' => 45,
                'name' => 'Haixi Mongol-Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '28',
            ),
            59 => 
            array (
                'id' => 3060,
                'country_id' => 101,
                'region_id' => 44,
                'name' => 'Yinchuan',
                'full_name' => NULL,
                'code' => '1',
            ),
            60 => 
            array (
                'id' => 3061,
                'country_id' => 101,
                'region_id' => 44,
                'name' => 'Shizuishan',
                'full_name' => NULL,
                'code' => '2',
            ),
            61 => 
            array (
                'id' => 3062,
                'country_id' => 101,
                'region_id' => 44,
                'name' => 'Wuzhong',
                'full_name' => NULL,
                'code' => '3',
            ),
            62 => 
            array (
                'id' => 3063,
                'country_id' => 101,
                'region_id' => 44,
                'name' => 'Guyuan',
                'full_name' => NULL,
                'code' => '4',
            ),
            63 => 
            array (
                'id' => 3064,
                'country_id' => 101,
                'region_id' => 44,
                'name' => 'Zhongwei',
                'full_name' => NULL,
                'code' => '5',
            ),
            64 => 
            array (
                'id' => 3065,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Urumqi',
                'full_name' => NULL,
                'code' => '1',
            ),
            65 => 
            array (
                'id' => 3066,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Karamay',
                'full_name' => NULL,
                'code' => '2',
            ),
            66 => 
            array (
                'id' => 3067,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Turpan',
                'full_name' => NULL,
                'code' => '21',
            ),
            67 => 
            array (
                'id' => 3068,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Hami',
                'full_name' => NULL,
                'code' => '22',
            ),
            68 => 
            array (
                'id' => 3069,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Changji Hui Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '23',
            ),
            69 => 
            array (
                'id' => 3070,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Bortala Mongol Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '27',
            ),
            70 => 
            array (
                'id' => 3071,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Bayingolin Mongol Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '28',
            ),
            71 => 
            array (
                'id' => 3072,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Aksu',
                'full_name' => NULL,
                'code' => '29',
            ),
            72 => 
            array (
                'id' => 3073,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Kizilsu Kirgiz Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '30',
            ),
            73 => 
            array (
                'id' => 3074,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Kashi',
                'full_name' => NULL,
                'code' => '31',
            ),
            74 => 
            array (
                'id' => 3075,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Hotan',
                'full_name' => NULL,
                'code' => '32',
            ),
            75 => 
            array (
                'id' => 3076,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Ili Kazakh Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '40',
            ),
            76 => 
            array (
                'id' => 3077,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Tacheng',
                'full_name' => NULL,
                'code' => '42',
            ),
            77 => 
            array (
                'id' => 3078,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Altay',
                'full_name' => NULL,
                'code' => '43',
            ),
            78 => 
            array (
                'id' => 3079,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Shihezi',
                'full_name' => NULL,
                'code' => '91',
            ),
            79 => 
            array (
                'id' => 3080,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Alar',
                'full_name' => NULL,
                'code' => '92',
            ),
            80 => 
            array (
                'id' => 3081,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Tumsuk',
                'full_name' => NULL,
                'code' => '93',
            ),
            81 => 
            array (
                'id' => 3082,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Wujiaqu',
                'full_name' => NULL,
                'code' => '94',
            ),
            82 => 
            array (
                'id' => 3083,
                'country_id' => 101,
                'region_id' => 54,
                'name' => 'Beitun',
                'full_name' => NULL,
                'code' => '95',
            ),
            83 => 
            array (
                'id' => 3084,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Taipei City',
                'full_name' => NULL,
                'code' => '1',
            ),
            84 => 
            array (
                'id' => 3085,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Kaohsiung City',
                'full_name' => NULL,
                'code' => '2',
            ),
            85 => 
            array (
                'id' => 3086,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Keelung City',
                'full_name' => NULL,
                'code' => '3',
            ),
            86 => 
            array (
                'id' => 3087,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Taichung City',
                'full_name' => NULL,
                'code' => '4',
            ),
            87 => 
            array (
                'id' => 3088,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Tainan City',
                'full_name' => NULL,
                'code' => '5',
            ),
            88 => 
            array (
                'id' => 3089,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Hsinchu City',
                'full_name' => NULL,
                'code' => '6',
            ),
            89 => 
            array (
                'id' => 3090,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Chiayi City',
                'full_name' => NULL,
                'code' => '7',
            ),
            90 => 
            array (
                'id' => 3091,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Taipei County',
                'full_name' => NULL,
                'code' => '8',
            ),
            91 => 
            array (
                'id' => 3092,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Ilan County',
                'full_name' => NULL,
                'code' => '9',
            ),
            92 => 
            array (
                'id' => 3093,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Taoyuan County',
                'full_name' => NULL,
                'code' => '10',
            ),
            93 => 
            array (
                'id' => 3094,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Hsinchu County',
                'full_name' => NULL,
                'code' => '11',
            ),
            94 => 
            array (
                'id' => 3095,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Miaoli County',
                'full_name' => NULL,
                'code' => '12',
            ),
            95 => 
            array (
                'id' => 3096,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Taichung County',
                'full_name' => NULL,
                'code' => '13',
            ),
            96 => 
            array (
                'id' => 3097,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Changhwa County',
                'full_name' => NULL,
                'code' => '14',
            ),
            97 => 
            array (
                'id' => 3098,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Nantou County',
                'full_name' => NULL,
                'code' => '15',
            ),
            98 => 
            array (
                'id' => 3099,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Yunnlin County',
                'full_name' => NULL,
                'code' => '16',
            ),
            99 => 
            array (
                'id' => 3100,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Chiayi County',
                'full_name' => NULL,
                'code' => '17',
            ),
            100 => 
            array (
                'id' => 3101,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Tainan County',
                'full_name' => NULL,
                'code' => '18',
            ),
            101 => 
            array (
                'id' => 3102,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Kaohsiung County',
                'full_name' => NULL,
                'code' => '19',
            ),
            102 => 
            array (
                'id' => 3103,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Pingtung County',
                'full_name' => NULL,
                'code' => '20',
            ),
            103 => 
            array (
                'id' => 3104,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Taitung County',
                'full_name' => NULL,
                'code' => '22',
            ),
            104 => 
            array (
                'id' => 3105,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Hualian County',
                'full_name' => NULL,
                'code' => '23',
            ),
            105 => 
            array (
                'id' => 3106,
                'country_id' => 101,
                'region_id' => 51,
                'name' => 'Penghu County',
                'full_name' => NULL,
                'code' => '21',
            ),
            106 => 
            array (
                'id' => 3107,
                'country_id' => 170,
                'region_id' => 114,
                'name' => 'Palmerston',
                'full_name' => NULL,
                'code' => 'PAL',
            ),
            107 => 
            array (
                'id' => 3108,
                'country_id' => 170,
                'region_id' => 114,
                'name' => 'Darwin',
                'full_name' => NULL,
                'code' => 'DRW',
            ),
            108 => 
            array (
                'id' => 3109,
                'country_id' => 170,
                'region_id' => 112,
                'name' => 'Canberra',
                'full_name' => NULL,
                'code' => 'CBR',
            ),
            109 => 
            array (
                'id' => 3110,
                'country_id' => 170,
                'region_id' => 115,
                'name' => 'Brisbane',
                'full_name' => NULL,
                'code' => 'BNE',
            ),
            110 => 
            array (
                'id' => 3111,
                'country_id' => 170,
                'region_id' => 115,
                'name' => 'Gold Coast',
                'full_name' => NULL,
                'code' => 'OOL',
            ),
            111 => 
            array (
                'id' => 3112,
                'country_id' => 170,
                'region_id' => 115,
                'name' => 'Cairns',
                'full_name' => NULL,
                'code' => 'CNS',
            ),
            112 => 
            array (
                'id' => 3113,
                'country_id' => 170,
                'region_id' => 115,
                'name' => 'Caloundra',
                'full_name' => NULL,
                'code' => 'CUD',
            ),
            113 => 
            array (
                'id' => 3114,
                'country_id' => 170,
                'region_id' => 115,
                'name' => 'Townsville',
                'full_name' => NULL,
                'code' => 'TSV',
            ),
            114 => 
            array (
                'id' => 3115,
                'country_id' => 170,
                'region_id' => 115,
                'name' => 'Toowoomba',
                'full_name' => NULL,
                'code' => 'TWB',
            ),
            115 => 
            array (
                'id' => 3116,
                'country_id' => 170,
                'region_id' => 116,
                'name' => 'Adelaide',
                'full_name' => NULL,
                'code' => 'ADL',
            ),
            116 => 
            array (
                'id' => 3117,
                'country_id' => 170,
                'region_id' => 116,
                'name' => 'Port Augusta',
                'full_name' => NULL,
                'code' => 'PUG',
            ),
            117 => 
            array (
                'id' => 3118,
                'country_id' => 170,
                'region_id' => 116,
                'name' => 'Mount Gambier',
                'full_name' => NULL,
                'code' => 'MGB',
            ),
            118 => 
            array (
                'id' => 3119,
                'country_id' => 170,
                'region_id' => 116,
                'name' => 'Whyalla',
                'full_name' => NULL,
                'code' => 'WAY',
            ),
            119 => 
            array (
                'id' => 3120,
                'country_id' => 170,
                'region_id' => 116,
                'name' => 'Port Lincoln',
                'full_name' => NULL,
                'code' => 'PLO',
            ),
            120 => 
            array (
                'id' => 3121,
                'country_id' => 170,
                'region_id' => 116,
                'name' => 'Murray Bridge',
                'full_name' => NULL,
                'code' => 'MYB',
            ),
            121 => 
            array (
                'id' => 3122,
                'country_id' => 170,
                'region_id' => 116,
                'name' => 'Port Pirie',
                'full_name' => NULL,
                'code' => 'PPI',
            ),
            122 => 
            array (
                'id' => 3123,
                'country_id' => 170,
                'region_id' => 116,
                'name' => 'Victor Harbor',
                'full_name' => NULL,
                'code' => 'VHA',
            ),
            123 => 
            array (
                'id' => 3124,
                'country_id' => 170,
                'region_id' => 117,
                'name' => 'Burnie',
                'full_name' => NULL,
                'code' => 'BWT',
            ),
            124 => 
            array (
                'id' => 3125,
                'country_id' => 170,
                'region_id' => 117,
                'name' => 'Devonport',
                'full_name' => NULL,
                'code' => 'DPO',
            ),
            125 => 
            array (
                'id' => 3126,
                'country_id' => 170,
                'region_id' => 117,
                'name' => 'Hobart',
                'full_name' => NULL,
                'code' => 'HBA',
            ),
            126 => 
            array (
                'id' => 3127,
                'country_id' => 170,
                'region_id' => 117,
                'name' => 'Launceston',
                'full_name' => NULL,
                'code' => 'LST',
            ),
            127 => 
            array (
                'id' => 3128,
                'country_id' => 170,
                'region_id' => 118,
                'name' => 'Geelong',
                'full_name' => NULL,
                'code' => 'GEX',
            ),
            128 => 
            array (
                'id' => 3129,
                'country_id' => 170,
                'region_id' => 118,
                'name' => 'Melbourne',
                'full_name' => NULL,
                'code' => 'MEL',
            ),
            129 => 
            array (
                'id' => 3130,
                'country_id' => 170,
                'region_id' => 119,
                'name' => 'Albany',
                'full_name' => NULL,
                'code' => 'ALH',
            ),
            130 => 
            array (
                'id' => 3131,
                'country_id' => 170,
                'region_id' => 119,
                'name' => 'Bunbury',
                'full_name' => NULL,
                'code' => 'BUY',
            ),
            131 => 
            array (
                'id' => 3132,
                'country_id' => 170,
                'region_id' => 119,
                'name' => 'Fremantle',
                'full_name' => NULL,
                'code' => 'FRE',
            ),
            132 => 
            array (
                'id' => 3133,
                'country_id' => 170,
                'region_id' => 119,
                'name' => 'Geraldton',
                'full_name' => NULL,
                'code' => 'GET',
            ),
            133 => 
            array (
                'id' => 3134,
                'country_id' => 170,
                'region_id' => 119,
                'name' => 'Kalgoorlie',
                'full_name' => NULL,
                'code' => 'KGI',
            ),
            134 => 
            array (
                'id' => 3135,
                'country_id' => 170,
                'region_id' => 119,
                'name' => 'Mandurah',
                'full_name' => NULL,
                'code' => 'MDU',
            ),
            135 => 
            array (
                'id' => 3136,
                'country_id' => 170,
                'region_id' => 119,
                'name' => 'Perth',
                'full_name' => NULL,
                'code' => 'PER',
            ),
            136 => 
            array (
                'id' => 3137,
                'country_id' => 170,
                'region_id' => 113,
                'name' => 'Newcastle',
                'full_name' => NULL,
                'code' => 'NTL',
            ),
            137 => 
            array (
                'id' => 3138,
                'country_id' => 170,
                'region_id' => 113,
                'name' => 'Wollongong',
                'full_name' => NULL,
                'code' => 'WOL',
            ),
            138 => 
            array (
                'id' => 3139,
                'country_id' => 170,
                'region_id' => 113,
                'name' => 'Sydney',
                'full_name' => NULL,
                'code' => 'HBS',
            ),
            139 => 
            array (
                'id' => 3140,
                'country_id' => 58,
                'region_id' => 3,
                'name' => 'Dalseong-gun',
                'full_name' => NULL,
                'code' => 'DSG',
            ),
            140 => 
            array (
                'id' => 3141,
                'country_id' => 58,
                'region_id' => 3,
                'name' => 'Daegu',
                'full_name' => NULL,
                'code' => 'TAE',
            ),
            141 => 
            array (
                'id' => 3142,
                'country_id' => 58,
                'region_id' => 3,
                'name' => 'Suseong-gu',
                'full_name' => NULL,
                'code' => 'SUS',
            ),
            142 => 
            array (
                'id' => 3143,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Chuncheon',
                'full_name' => NULL,
                'code' => 'CHC',
            ),
            143 => 
            array (
                'id' => 3144,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Donghae',
                'full_name' => NULL,
                'code' => 'TGH',
            ),
            144 => 
            array (
                'id' => 3145,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Goseong County',
                'full_name' => NULL,
                'code' => 'GSG',
            ),
            145 => 
            array (
                'id' => 3146,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Hoengseong County',
                'full_name' => NULL,
                'code' => 'HSG',
            ),
            146 => 
            array (
                'id' => 3147,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Hongcheon County',
                'full_name' => NULL,
                'code' => 'HCN',
            ),
            147 => 
            array (
                'id' => 3148,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Hwacheon County',
                'full_name' => NULL,
                'code' => 'HCH',
            ),
            148 => 
            array (
                'id' => 3149,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Gangneung',
                'full_name' => NULL,
                'code' => 'KAG',
            ),
            149 => 
            array (
                'id' => 3150,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Jeongseon County',
                'full_name' => NULL,
                'code' => 'JSE',
            ),
            150 => 
            array (
                'id' => 3151,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Inje County',
                'full_name' => NULL,
                'code' => 'IJE',
            ),
            151 => 
            array (
                'id' => 3152,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Yeongwol County',
                'full_name' => NULL,
                'code' => 'YWL',
            ),
            152 => 
            array (
                'id' => 3153,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Pyeongchang County',
                'full_name' => NULL,
                'code' => 'POG',
            ),
            153 => 
            array (
                'id' => 3154,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Samcheok',
                'full_name' => NULL,
                'code' => 'SUK',
            ),
            154 => 
            array (
                'id' => 3155,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Sokcho',
                'full_name' => NULL,
                'code' => 'SHO',
            ),
            155 => 
            array (
                'id' => 3156,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Taebaek',
                'full_name' => NULL,
                'code' => 'TBK',
            ),
            156 => 
            array (
                'id' => 3157,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Cheorwon County',
                'full_name' => NULL,
                'code' => 'CWN',
            ),
            157 => 
            array (
                'id' => 3158,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Yangyang County',
                'full_name' => NULL,
                'code' => 'YNY',
            ),
            158 => 
            array (
                'id' => 3159,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Yanggu County',
                'full_name' => NULL,
                'code' => 'YGU',
            ),
            159 => 
            array (
                'id' => 3160,
                'country_id' => 58,
                'region_id' => 4,
                'name' => 'Wonju',
                'full_name' => NULL,
                'code' => 'WJU',
            ),
            160 => 
            array (
                'id' => 3161,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Anseong',
                'full_name' => NULL,
                'code' => 'ASG',
            ),
            161 => 
            array (
                'id' => 3162,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Ansan',
                'full_name' => NULL,
                'code' => 'ASN',
            ),
            162 => 
            array (
                'id' => 3163,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Anyang',
                'full_name' => NULL,
                'code' => 'ANY',
            ),
            163 => 
            array (
                'id' => 3164,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Pocheon',
                'full_name' => NULL,
                'code' => 'POC',
            ),
            164 => 
            array (
                'id' => 3165,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Seongnam',
                'full_name' => NULL,
                'code' => 'SEO',
            ),
            165 => 
            array (
                'id' => 3166,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Dongducheon',
                'full_name' => NULL,
                'code' => 'DDC',
            ),
            166 => 
            array (
                'id' => 3167,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Bucheon',
                'full_name' => NULL,
                'code' => 'BCN',
            ),
            167 => 
            array (
                'id' => 3168,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Goyang',
                'full_name' => NULL,
                'code' => 'GYG',
            ),
            168 => 
            array (
                'id' => 3169,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Gwangmyeong',
                'full_name' => NULL,
                'code' => 'GMG',
            ),
            169 => 
            array (
                'id' => 3170,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Gwangju',
                'full_name' => NULL,
                'code' => 'KWU',
            ),
            170 => 
            array (
                'id' => 3171,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Gwacheon',
                'full_name' => NULL,
                'code' => 'GCN',
            ),
            171 => 
            array (
                'id' => 3172,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Hanam',
                'full_name' => NULL,
                'code' => 'HNM',
            ),
            172 => 
            array (
                'id' => 3173,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Hwaseong',
                'full_name' => NULL,
                'code' => 'HCH',
            ),
            173 => 
            array (
                'id' => 3174,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Gapyeong County',
                'full_name' => NULL,
                'code' => 'GPG',
            ),
            174 => 
            array (
                'id' => 3175,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Gimpo',
                'full_name' => NULL,
                'code' => 'GMP',
            ),
            175 => 
            array (
                'id' => 3176,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Guri',
                'full_name' => NULL,
                'code' => 'GRI',
            ),
            176 => 
            array (
                'id' => 3177,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Gunpo',
                'full_name' => NULL,
                'code' => 'GUN',
            ),
            177 => 
            array (
                'id' => 3178,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Yeoju County',
                'full_name' => NULL,
                'code' => 'YJU',
            ),
            178 => 
            array (
                'id' => 3179,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Icheon',
                'full_name' => NULL,
                'code' => 'ICE',
            ),
            179 => 
            array (
                'id' => 3180,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Yeoncheon County',
                'full_name' => NULL,
                'code' => 'YCN',
            ),
            180 => 
            array (
                'id' => 3181,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Yongin',
                'full_name' => NULL,
                'code' => 'YNG',
            ),
            181 => 
            array (
                'id' => 3182,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Namyangju',
                'full_name' => NULL,
                'code' => 'NYU',
            ),
            182 => 
            array (
                'id' => 3183,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Pyeongtaek',
                'full_name' => NULL,
                'code' => 'PTK',
            ),
            183 => 
            array (
                'id' => 3184,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Paju',
                'full_name' => NULL,
                'code' => 'PJU',
            ),
            184 => 
            array (
                'id' => 3185,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Siheung',
                'full_name' => NULL,
                'code' => 'SHE',
            ),
            185 => 
            array (
                'id' => 3186,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Suwon',
                'full_name' => NULL,
                'code' => 'SUO',
            ),
            186 => 
            array (
                'id' => 3187,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Osan',
                'full_name' => NULL,
                'code' => 'OSN',
            ),
            187 => 
            array (
                'id' => 3188,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Yangpyeong County',
                'full_name' => NULL,
                'code' => 'YPG',
            ),
            188 => 
            array (
                'id' => 3189,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Yangju',
                'full_name' => NULL,
                'code' => 'YYU',
            ),
            189 => 
            array (
                'id' => 3190,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Uiwang',
                'full_name' => NULL,
                'code' => 'UWN',
            ),
            190 => 
            array (
                'id' => 3191,
                'country_id' => 58,
                'region_id' => 5,
                'name' => 'Uijeongbu',
                'full_name' => NULL,
                'code' => 'UIJ',
            ),
            191 => 
            array (
                'id' => 3192,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Andong',
                'full_name' => NULL,
                'code' => 'ADG',
            ),
            192 => 
            array (
                'id' => 3193,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Bonghwa County',
                'full_name' => NULL,
                'code' => 'BHA',
            ),
            193 => 
            array (
                'id' => 3194,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Goryeong County',
                'full_name' => NULL,
                'code' => 'GRG',
            ),
            194 => 
            array (
                'id' => 3195,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Gumi',
                'full_name' => NULL,
                'code' => 'KUM',
            ),
            195 => 
            array (
                'id' => 3196,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Gimcheon',
                'full_name' => NULL,
                'code' => 'KMC',
            ),
            196 => 
            array (
                'id' => 3197,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Gunwi County',
                'full_name' => NULL,
                'code' => 'GWI',
            ),
            197 => 
            array (
                'id' => 3198,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Yecheon County',
                'full_name' => NULL,
                'code' => 'YEC',
            ),
            198 => 
            array (
                'id' => 3199,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Pohang',
                'full_name' => NULL,
                'code' => 'KPO',
            ),
            199 => 
            array (
                'id' => 3200,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Chilgok County',
                'full_name' => NULL,
                'code' => 'CGK',
            ),
            200 => 
            array (
                'id' => 3201,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Cheongdo County',
                'full_name' => NULL,
                'code' => 'CDO',
            ),
            201 => 
            array (
                'id' => 3202,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Cheongsong County',
                'full_name' => NULL,
                'code' => 'CSG',
            ),
            202 => 
            array (
                'id' => 3203,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Gyeongsan',
                'full_name' => NULL,
                'code' => 'GYS',
            ),
            203 => 
            array (
                'id' => 3204,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Gyeongju',
                'full_name' => NULL,
                'code' => 'GJU',
            ),
            204 => 
            array (
                'id' => 3205,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Yeongju',
                'full_name' => NULL,
                'code' => 'YEJ',
            ),
            205 => 
            array (
                'id' => 3206,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Sangju',
                'full_name' => NULL,
                'code' => 'SJU',
            ),
            206 => 
            array (
                'id' => 3207,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Uljin County',
                'full_name' => NULL,
                'code' => 'UJN',
            ),
            207 => 
            array (
                'id' => 3208,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Mungyeong',
                'full_name' => NULL,
                'code' => 'MGG',
            ),
            208 => 
            array (
                'id' => 3209,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Seongju County',
                'full_name' => NULL,
                'code' => 'SEJ',
            ),
            209 => 
            array (
                'id' => 3210,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Uiseong County',
                'full_name' => NULL,
                'code' => 'USG',
            ),
            210 => 
            array (
                'id' => 3211,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Yeongyang County',
                'full_name' => NULL,
                'code' => 'YYG',
            ),
            211 => 
            array (
                'id' => 3212,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Yeongdeok County',
                'full_name' => NULL,
                'code' => 'YDK',
            ),
            212 => 
            array (
                'id' => 3213,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Yeongcheon',
                'full_name' => NULL,
                'code' => 'YCH',
            ),
            213 => 
            array (
                'id' => 3214,
                'country_id' => 58,
                'region_id' => 1,
                'name' => 'Ulleung County',
                'full_name' => NULL,
                'code' => 'ULG',
            ),
            214 => 
            array (
                'id' => 3215,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Changnyeong County',
                'full_name' => NULL,
                'code' => 'CNG',
            ),
            215 => 
            array (
                'id' => 3216,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Changwon',
                'full_name' => NULL,
                'code' => 'CHW',
            ),
            216 => 
            array (
                'id' => 3217,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Goseong County',
                'full_name' => NULL,
                'code' => 'GSO',
            ),
            217 => 
            array (
                'id' => 3218,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Hadong County',
                'full_name' => NULL,
                'code' => 'HDG',
            ),
            218 => 
            array (
                'id' => 3219,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Gimhae',
                'full_name' => NULL,
                'code' => 'KMH',
            ),
            219 => 
            array (
                'id' => 3220,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Jinju',
                'full_name' => NULL,
                'code' => 'HIN',
            ),
            220 => 
            array (
                'id' => 3221,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Geochang County',
                'full_name' => NULL,
                'code' => 'GCH',
            ),
            221 => 
            array (
                'id' => 3222,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Geoje',
                'full_name' => NULL,
                'code' => 'KJE',
            ),
            222 => 
            array (
                'id' => 3223,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Yangsan',
                'full_name' => NULL,
                'code' => 'YSN',
            ),
            223 => 
            array (
                'id' => 3224,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Masan',
                'full_name' => NULL,
                'code' => 'MAS',
            ),
            224 => 
            array (
                'id' => 3225,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Miryang',
                'full_name' => NULL,
                'code' => 'MIR',
            ),
            225 => 
            array (
                'id' => 3226,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Namhae County',
                'full_name' => NULL,
                'code' => 'NHE',
            ),
            226 => 
            array (
                'id' => 3227,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Sancheong County',
                'full_name' => NULL,
                'code' => 'SCH',
            ),
            227 => 
            array (
                'id' => 3228,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Sacheon',
                'full_name' => NULL,
                'code' => 'SAH',
            ),
            228 => 
            array (
                'id' => 3229,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Tongyeong',
                'full_name' => NULL,
                'code' => 'TYG',
            ),
            229 => 
            array (
                'id' => 3230,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Hapcheon County',
                'full_name' => NULL,
                'code' => 'HCE',
            ),
            230 => 
            array (
                'id' => 3231,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Haman County',
                'full_name' => NULL,
                'code' => 'HAN',
            ),
            231 => 
            array (
                'id' => 3232,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Hamyang County',
                'full_name' => NULL,
                'code' => 'HYG',
            ),
            232 => 
            array (
                'id' => 3233,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Uiryeong County',
                'full_name' => NULL,
                'code' => 'URG',
            ),
            233 => 
            array (
                'id' => 3234,
                'country_id' => 58,
                'region_id' => 2,
                'name' => 'Jinhae',
                'full_name' => NULL,
                'code' => 'CHF',
            ),
            234 => 
            array (
                'id' => 3235,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Sunchang County',
                'full_name' => NULL,
                'code' => 'SCG',
            ),
            235 => 
            array (
                'id' => 3236,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Buan County',
                'full_name' => NULL,
                'code' => 'PUS',
            ),
            236 => 
            array (
                'id' => 3237,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Gochang County',
                'full_name' => NULL,
                'code' => 'GCG',
            ),
            237 => 
            array (
                'id' => 3238,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Gimje',
                'full_name' => NULL,
                'code' => 'GJE',
            ),
            238 => 
            array (
                'id' => 3239,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Jeongeup',
                'full_name' => NULL,
                'code' => 'JEO',
            ),
            239 => 
            array (
                'id' => 3240,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Muju County',
                'full_name' => NULL,
                'code' => 'MJU',
            ),
            240 => 
            array (
                'id' => 3241,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Namwon',
                'full_name' => NULL,
                'code' => 'NWN',
            ),
            241 => 
            array (
                'id' => 3242,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Jeonju',
                'full_name' => NULL,
                'code' => 'JNJ',
            ),
            242 => 
            array (
                'id' => 3243,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Gunsan',
                'full_name' => NULL,
                'code' => 'KUV',
            ),
            243 => 
            array (
                'id' => 3244,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Imsil County',
                'full_name' => NULL,
                'code' => 'ISL',
            ),
            244 => 
            array (
                'id' => 3245,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Wanju County',
                'full_name' => NULL,
                'code' => 'WAJ',
            ),
            245 => 
            array (
                'id' => 3246,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Iksan',
                'full_name' => NULL,
                'code' => 'IKS',
            ),
            246 => 
            array (
                'id' => 3247,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Jangsu County',
                'full_name' => NULL,
                'code' => 'JSU',
            ),
            247 => 
            array (
                'id' => 3248,
                'country_id' => 58,
                'region_id' => 6,
                'name' => 'Jinan County',
                'full_name' => NULL,
                'code' => 'JAN',
            ),
            248 => 
            array (
                'id' => 3249,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Boseong County',
                'full_name' => NULL,
                'code' => 'BSG',
            ),
            249 => 
            array (
                'id' => 3250,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Goheung County',
                'full_name' => NULL,
                'code' => 'GHG',
            ),
            250 => 
            array (
                'id' => 3251,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Gokseong County',
                'full_name' => NULL,
                'code' => 'GSE',
            ),
            251 => 
            array (
                'id' => 3252,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Wando County',
                'full_name' => NULL,
                'code' => 'WND',
            ),
            252 => 
            array (
                'id' => 3253,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Gwangyang',
                'full_name' => NULL,
                'code' => 'KAN',
            ),
            253 => 
            array (
                'id' => 3254,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Haenam County',
                'full_name' => NULL,
                'code' => 'HAE',
            ),
            254 => 
            array (
                'id' => 3255,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Hwasun County',
                'full_name' => NULL,
                'code' => 'HSN',
            ),
            255 => 
            array (
                'id' => 3256,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Gangjin County',
                'full_name' => NULL,
                'code' => 'GJN',
            ),
            256 => 
            array (
                'id' => 3257,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Yeosu',
                'full_name' => NULL,
                'code' => 'YOS',
            ),
            257 => 
            array (
                'id' => 3258,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Yeonggwang County',
                'full_name' => NULL,
                'code' => 'YGG',
            ),
            258 => 
            array (
                'id' => 3259,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Yeongam County',
                'full_name' => NULL,
                'code' => 'YAM',
            ),
            259 => 
            array (
                'id' => 3260,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Naju',
                'full_name' => NULL,
                'code' => 'NJU',
            ),
            260 => 
            array (
                'id' => 3261,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Mokpo',
                'full_name' => NULL,
                'code' => 'MOK',
            ),
            261 => 
            array (
                'id' => 3262,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Gurye County',
                'full_name' => NULL,
                'code' => 'GRE',
            ),
            262 => 
            array (
                'id' => 3263,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Suncheon',
                'full_name' => NULL,
                'code' => 'SYS',
            ),
            263 => 
            array (
                'id' => 3264,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Damyang County',
                'full_name' => NULL,
                'code' => 'DYA',
            ),
            264 => 
            array (
                'id' => 3265,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Muan County',
                'full_name' => NULL,
                'code' => 'MAN',
            ),
            265 => 
            array (
                'id' => 3266,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Hampyeong County',
                'full_name' => NULL,
                'code' => 'HPG',
            ),
            266 => 
            array (
                'id' => 3267,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Sinan County',
                'full_name' => NULL,
                'code' => 'SAN',
            ),
            267 => 
            array (
                'id' => 3268,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Jangseong County',
                'full_name' => NULL,
                'code' => 'JSN',
            ),
            268 => 
            array (
                'id' => 3269,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Jangheung County',
                'full_name' => NULL,
                'code' => 'JHG',
            ),
            269 => 
            array (
                'id' => 3270,
                'country_id' => 58,
                'region_id' => 7,
                'name' => 'Jindo County',
                'full_name' => NULL,
                'code' => 'JDO',
            ),
            270 => 
            array (
                'id' => 3271,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Boeun County',
                'full_name' => NULL,
                'code' => 'BEN',
            ),
            271 => 
            array (
                'id' => 3272,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Jeungpyeong County',
                'full_name' => NULL,
                'code' => 'JYG',
            ),
            272 => 
            array (
                'id' => 3273,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Danyang County',
                'full_name' => NULL,
                'code' => 'DYG',
            ),
            273 => 
            array (
                'id' => 3274,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Jecheon',
                'full_name' => NULL,
                'code' => 'JCH',
            ),
            274 => 
            array (
                'id' => 3275,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Goesan County',
                'full_name' => NULL,
                'code' => 'GSN',
            ),
            275 => 
            array (
                'id' => 3276,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Cheongwon County',
                'full_name' => NULL,
                'code' => 'CWO',
            ),
            276 => 
            array (
                'id' => 3277,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Cheongju',
                'full_name' => NULL,
                'code' => 'CJJ',
            ),
            277 => 
            array (
                'id' => 3278,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Okcheon County',
                'full_name' => NULL,
                'code' => 'OCN',
            ),
            278 => 
            array (
                'id' => 3279,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Eumseong County',
                'full_name' => NULL,
                'code' => 'ESG',
            ),
            279 => 
            array (
                'id' => 3280,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Yeongdong County',
                'full_name' => NULL,
                'code' => 'YDG',
            ),
            280 => 
            array (
                'id' => 3281,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Jincheon County',
                'full_name' => NULL,
                'code' => 'JCN',
            ),
            281 => 
            array (
                'id' => 3282,
                'country_id' => 58,
                'region_id' => 8,
                'name' => 'Chungju',
                'full_name' => NULL,
                'code' => 'CHU',
            ),
            282 => 
            array (
                'id' => 3283,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Boryeong',
                'full_name' => NULL,
                'code' => 'BOR',
            ),
            283 => 
            array (
                'id' => 3284,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Buyeo County',
                'full_name' => NULL,
                'code' => 'BYO',
            ),
            284 => 
            array (
                'id' => 3285,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Gongju',
                'full_name' => NULL,
                'code' => 'GOJ',
            ),
            285 => 
            array (
                'id' => 3286,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Hongseong County',
                'full_name' => NULL,
                'code' => 'HSE',
            ),
            286 => 
            array (
                'id' => 3287,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Gyeryong',
                'full_name' => NULL,
                'code' => 'GYE',
            ),
            287 => 
            array (
                'id' => 3288,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Geumsan County',
                'full_name' => NULL,
                'code' => 'GSA',
            ),
            288 => 
            array (
                'id' => 3289,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Yesan County',
                'full_name' => NULL,
                'code' => 'YOS',
            ),
            289 => 
            array (
                'id' => 3290,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Nonsan',
                'full_name' => NULL,
                'code' => 'NSN',
            ),
            290 => 
            array (
                'id' => 3291,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Cheongyang County',
                'full_name' => NULL,
                'code' => 'CYG',
            ),
            291 => 
            array (
                'id' => 3292,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Seosan',
                'full_name' => NULL,
                'code' => 'SSA',
            ),
            292 => 
            array (
                'id' => 3293,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Seocheon County',
                'full_name' => NULL,
                'code' => 'SCE',
            ),
            293 => 
            array (
                'id' => 3294,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Taean County',
                'full_name' => NULL,
                'code' => 'TAN',
            ),
            294 => 
            array (
                'id' => 3295,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Dangjin County',
                'full_name' => NULL,
                'code' => 'TJI',
            ),
            295 => 
            array (
                'id' => 3296,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Cheonan',
                'full_name' => NULL,
                'code' => 'CHO',
            ),
            296 => 
            array (
                'id' => 3297,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Asan',
                'full_name' => NULL,
                'code' => 'ASA',
            ),
            297 => 
            array (
                'id' => 3298,
                'country_id' => 58,
                'region_id' => 9,
                'name' => 'Yeongi County',
                'full_name' => NULL,
                'code' => 'YGI',
            ),
            298 => 
            array (
                'id' => 3299,
                'country_id' => 87,
                'region_id' => 20,
                'name' => 'Butterworth',
                'full_name' => NULL,
                'code' => 'BWH',
            ),
            299 => 
            array (
                'id' => 3300,
                'country_id' => 87,
                'region_id' => 20,
                'name' => 'George Town',
                'full_name' => NULL,
                'code' => 'PEN',
            ),
            300 => 
            array (
                'id' => 3301,
                'country_id' => 87,
                'region_id' => 20,
                'name' => 'Bukit Mertajam',
                'full_name' => NULL,
                'code' => 'BMJ',
            ),
            301 => 
            array (
                'id' => 3302,
                'country_id' => 87,
                'region_id' => 20,
                'name' => 'Nibong Tebal',
                'full_name' => NULL,
                'code' => 'NTE',
            ),
            302 => 
            array (
                'id' => 3303,
                'country_id' => 87,
                'region_id' => 19,
                'name' => 'Kangar',
                'full_name' => NULL,
                'code' => 'KGR',
            ),
            303 => 
            array (
                'id' => 3304,
                'country_id' => 87,
                'region_id' => 24,
                'name' => 'Kemaman',
                'full_name' => NULL,
                'code' => 'KEM',
            ),
            304 => 
            array (
                'id' => 3305,
                'country_id' => 87,
                'region_id' => 24,
                'name' => 'Kuala Terengganu',
                'full_name' => NULL,
                'code' => 'TGG',
            ),
            305 => 
            array (
                'id' => 3306,
                'country_id' => 87,
                'region_id' => 24,
                'name' => 'Dungun',
                'full_name' => NULL,
                'code' => 'DGN',
            ),
            306 => 
            array (
                'id' => 3307,
                'country_id' => 87,
                'region_id' => 24,
                'name' => 'Marang',
                'full_name' => NULL,
                'code' => 'MAR',
            ),
            307 => 
            array (
                'id' => 3308,
                'country_id' => 87,
                'region_id' => 24,
                'name' => 'Setiu',
                'full_name' => NULL,
                'code' => 'SET',
            ),
            308 => 
            array (
                'id' => 3309,
                'country_id' => 87,
                'region_id' => 24,
                'name' => 'Hulu',
                'full_name' => NULL,
                'code' => 'HUL',
            ),
            309 => 
            array (
                'id' => 3310,
                'country_id' => 87,
                'region_id' => 24,
                'name' => 'Besut',
                'full_name' => NULL,
                'code' => 'BES',
            ),
            310 => 
            array (
                'id' => 3311,
                'country_id' => 87,
                'region_id' => 11,
                'name' => 'Padang Terap',
                'full_name' => NULL,
                'code' => 'PGT',
            ),
            311 => 
            array (
                'id' => 3312,
                'country_id' => 87,
                'region_id' => 11,
                'name' => 'Pendang',
                'full_name' => NULL,
                'code' => 'PEN',
            ),
            312 => 
            array (
                'id' => 3313,
                'country_id' => 87,
                'region_id' => 11,
                'name' => 'Langkawi',
                'full_name' => NULL,
                'code' => 'LGK',
            ),
            313 => 
            array (
                'id' => 3314,
                'country_id' => 87,
                'region_id' => 11,
                'name' => 'Kota Setar',
                'full_name' => NULL,
                'code' => 'KOR',
            ),
            314 => 
            array (
                'id' => 3315,
                'country_id' => 87,
                'region_id' => 11,
                'name' => 'Kubang Pasu',
                'full_name' => NULL,
                'code' => 'KPA',
            ),
            315 => 
            array (
                'id' => 3316,
                'country_id' => 87,
                'region_id' => 11,
                'name' => 'Kuala Muda',
                'full_name' => NULL,
                'code' => 'KMU',
            ),
            316 => 
            array (
                'id' => 3317,
                'country_id' => 87,
                'region_id' => 11,
                'name' => 'Baling',
                'full_name' => NULL,
                'code' => 'BLZ',
            ),
            317 => 
            array (
                'id' => 3318,
                'country_id' => 87,
                'region_id' => 11,
                'name' => 'Kulim',
                'full_name' => NULL,
                'code' => 'KLM',
            ),
            318 => 
            array (
                'id' => 3319,
                'country_id' => 87,
                'region_id' => 11,
                'name' => 'Bandar Baharu',
                'full_name' => NULL,
                'code' => 'BMA',
            ),
            319 => 
            array (
                'id' => 3320,
                'country_id' => 87,
                'region_id' => 12,
                'name' => 'Pasir Putih',
                'full_name' => NULL,
                'code' => 'PPU',
            ),
            320 => 
            array (
                'id' => 3321,
                'country_id' => 87,
                'region_id' => 12,
                'name' => 'Pasir Mas',
                'full_name' => NULL,
                'code' => 'PMA',
            ),
            321 => 
            array (
                'id' => 3322,
                'country_id' => 87,
                'region_id' => 12,
                'name' => 'Tanah Merah',
                'full_name' => NULL,
                'code' => 'TMR',
            ),
            322 => 
            array (
                'id' => 3323,
                'country_id' => 87,
                'region_id' => 12,
                'name' => 'Tumpat',
                'full_name' => NULL,
                'code' => 'TUM',
            ),
            323 => 
            array (
                'id' => 3324,
                'country_id' => 87,
                'region_id' => 12,
                'name' => 'Bachok',
                'full_name' => NULL,
                'code' => 'BAC',
            ),
            324 => 
            array (
                'id' => 3325,
                'country_id' => 87,
                'region_id' => 12,
                'name' => 'Kota Bharu',
                'full_name' => NULL,
                'code' => 'KBR',
            ),
            325 => 
            array (
                'id' => 3326,
                'country_id' => 87,
                'region_id' => 12,
                'name' => 'Kuala Krai',
                'full_name' => NULL,
                'code' => 'KUG',
            ),
            326 => 
            array (
                'id' => 3327,
                'country_id' => 87,
                'region_id' => 12,
                'name' => 'Gua Musang',
                'full_name' => NULL,
                'code' => 'GMU',
            ),
            327 => 
            array (
                'id' => 3328,
                'country_id' => 87,
                'region_id' => 12,
                'name' => 'Machang',
                'full_name' => NULL,
                'code' => 'MAC',
            ),
            328 => 
            array (
                'id' => 3329,
                'country_id' => 87,
                'region_id' => 12,
                'name' => 'Jeli',
                'full_name' => NULL,
                'code' => 'JEL',
            ),
            329 => 
            array (
                'id' => 3330,
                'country_id' => 87,
                'region_id' => 13,
                'name' => 'Kuala Lumpur',
                'full_name' => NULL,
                'code' => 'KUL',
            ),
            330 => 
            array (
                'id' => 3331,
                'country_id' => 87,
                'region_id' => 15,
                'name' => 'Melaka',
                'full_name' => NULL,
                'code' => 'MEL',
            ),
            331 => 
            array (
                'id' => 3332,
                'country_id' => 87,
                'region_id' => 15,
                'name' => 'Alor Gajah',
                'full_name' => NULL,
                'code' => 'AOG',
            ),
            332 => 
            array (
                'id' => 3333,
                'country_id' => 87,
                'region_id' => 15,
                'name' => 'Jasin',
                'full_name' => NULL,
                'code' => 'JAS',
            ),
            333 => 
            array (
                'id' => 3334,
                'country_id' => 87,
                'region_id' => 14,
                'name' => 'Labuan',
                'full_name' => NULL,
                'code' => 'LBU',
            ),
            334 => 
            array (
                'id' => 3335,
                'country_id' => 87,
                'region_id' => 14,
                'name' => 'Victoria',
                'full_name' => NULL,
                'code' => 'VIC',
            ),
            335 => 
            array (
                'id' => 3336,
                'country_id' => 87,
                'region_id' => 17,
                'name' => 'Bera',
                'full_name' => NULL,
                'code' => 'BER',
            ),
            336 => 
            array (
                'id' => 3337,
                'country_id' => 87,
                'region_id' => 17,
                'name' => 'Pekan',
                'full_name' => NULL,
                'code' => 'PEK',
            ),
            337 => 
            array (
                'id' => 3338,
                'country_id' => 87,
                'region_id' => 17,
                'name' => 'Temerloh',
                'full_name' => NULL,
                'code' => 'TEM',
            ),
            338 => 
            array (
                'id' => 3339,
                'country_id' => 87,
                'region_id' => 17,
                'name' => 'Jerantut',
                'full_name' => NULL,
                'code' => 'JER',
            ),
            339 => 
            array (
                'id' => 3340,
                'country_id' => 87,
                'region_id' => 17,
                'name' => 'Kuantan',
                'full_name' => NULL,
                'code' => 'KUA',
            ),
            340 => 
            array (
                'id' => 3341,
                'country_id' => 87,
                'region_id' => 17,
                'name' => 'Cameron Highlands',
                'full_name' => NULL,
                'code' => 'CAH',
            ),
            341 => 
            array (
                'id' => 3342,
                'country_id' => 87,
                'region_id' => 17,
                'name' => 'Raub',
                'full_name' => NULL,
                'code' => 'RAU',
            ),
            342 => 
            array (
                'id' => 3343,
                'country_id' => 87,
                'region_id' => 17,
                'name' => 'Kuala Lipis',
                'full_name' => NULL,
                'code' => 'KUL',
            ),
            343 => 
            array (
                'id' => 3344,
                'country_id' => 87,
                'region_id' => 17,
                'name' => 'Maran',
                'full_name' => NULL,
                'code' => 'MAR',
            ),
            344 => 
            array (
                'id' => 3345,
                'country_id' => 87,
                'region_id' => 17,
                'name' => 'Bentong',
                'full_name' => NULL,
                'code' => 'BEN',
            ),
            345 => 
            array (
                'id' => 3346,
                'country_id' => 87,
                'region_id' => 17,
                'name' => 'Rompin',
                'full_name' => NULL,
                'code' => 'TOM',
            ),
            346 => 
            array (
                'id' => 3347,
                'country_id' => 87,
                'region_id' => 18,
                'name' => 'Teluk Intan',
                'full_name' => NULL,
                'code' => 'TAS',
            ),
            347 => 
            array (
                'id' => 3348,
                'country_id' => 87,
                'region_id' => 18,
                'name' => 'Tanjung Malim',
                'full_name' => NULL,
                'code' => 'TAM',
            ),
            348 => 
            array (
                'id' => 3349,
                'country_id' => 87,
                'region_id' => 18,
                'name' => 'Sungai Siput',
                'full_name' => NULL,
                'code' => 'SSP',
            ),
            349 => 
            array (
                'id' => 3350,
                'country_id' => 87,
                'region_id' => 18,
                'name' => 'Lumut',
                'full_name' => NULL,
                'code' => 'LUM',
            ),
            350 => 
            array (
                'id' => 3351,
                'country_id' => 87,
                'region_id' => 18,
                'name' => 'Batu Gajah',
                'full_name' => NULL,
                'code' => 'BGA',
            ),
            351 => 
            array (
                'id' => 3352,
                'country_id' => 87,
                'region_id' => 18,
                'name' => 'Kuala Kangsar',
                'full_name' => NULL,
                'code' => 'KAR',
            ),
            352 => 
            array (
                'id' => 3353,
                'country_id' => 87,
                'region_id' => 18,
                'name' => 'Taiping',
                'full_name' => NULL,
                'code' => 'TPG',
            ),
            353 => 
            array (
                'id' => 3354,
                'country_id' => 87,
                'region_id' => 18,
                'name' => 'Ipoh',
                'full_name' => NULL,
                'code' => 'IPH',
            ),
            354 => 
            array (
                'id' => 3355,
                'country_id' => 87,
                'region_id' => 10,
                'name' => 'Pontian',
                'full_name' => NULL,
                'code' => 'POW',
            ),
            355 => 
            array (
                'id' => 3356,
                'country_id' => 87,
                'region_id' => 10,
                'name' => 'Mersing',
                'full_name' => NULL,
                'code' => 'MEP',
            ),
            356 => 
            array (
                'id' => 3357,
                'country_id' => 87,
                'region_id' => 10,
                'name' => 'Kota Tinggi',
                'full_name' => NULL,
                'code' => 'KTI',
            ),
            357 => 
            array (
                'id' => 3358,
                'country_id' => 87,
                'region_id' => 10,
                'name' => 'Kluang',
                'full_name' => NULL,
                'code' => 'KLA',
            ),
            358 => 
            array (
                'id' => 3359,
                'country_id' => 87,
                'region_id' => 10,
                'name' => 'Batu Pahat',
                'full_name' => NULL,
                'code' => 'BAT',
            ),
            359 => 
            array (
                'id' => 3360,
                'country_id' => 87,
                'region_id' => 10,
                'name' => 'Muar',
                'full_name' => NULL,
                'code' => 'MUA',
            ),
            360 => 
            array (
                'id' => 3361,
                'country_id' => 87,
                'region_id' => 10,
                'name' => 'Segamat',
                'full_name' => NULL,
                'code' => 'SGM',
            ),
            361 => 
            array (
                'id' => 3362,
                'country_id' => 87,
                'region_id' => 10,
                'name' => 'Johor Bahru',
                'full_name' => NULL,
                'code' => 'JHB',
            ),
            362 => 
            array (
                'id' => 3363,
                'country_id' => 87,
                'region_id' => 16,
                'name' => 'Port Dickson',
                'full_name' => NULL,
                'code' => 'PDI',
            ),
            363 => 
            array (
                'id' => 3364,
                'country_id' => 87,
                'region_id' => 16,
                'name' => 'Tampin',
                'full_name' => NULL,
                'code' => 'TAI',
            ),
            364 => 
            array (
                'id' => 3365,
                'country_id' => 87,
                'region_id' => 16,
                'name' => 'Seremban',
                'full_name' => NULL,
                'code' => 'SRB',
            ),
            365 => 
            array (
                'id' => 3366,
                'country_id' => 87,
                'region_id' => 16,
                'name' => 'Kuala Pilah',
                'full_name' => NULL,
                'code' => 'KPI',
            ),
            366 => 
            array (
                'id' => 3367,
                'country_id' => 87,
                'region_id' => 16,
                'name' => 'Rembau',
                'full_name' => NULL,
                'code' => 'REM',
            ),
            367 => 
            array (
                'id' => 3368,
                'country_id' => 87,
                'region_id' => 16,
                'name' => 'Jempol',
                'full_name' => NULL,
                'code' => 'JEP',
            ),
            368 => 
            array (
                'id' => 3369,
                'country_id' => 87,
                'region_id' => 16,
                'name' => 'Jelebu',
                'full_name' => NULL,
                'code' => 'JEL',
            ),
            369 => 
            array (
                'id' => 3370,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Papar',
                'full_name' => NULL,
                'code' => 'PAP',
            ),
            370 => 
            array (
                'id' => 3371,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Beaufort',
                'full_name' => NULL,
                'code' => 'BEF',
            ),
            371 => 
            array (
                'id' => 3372,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Beluran',
                'full_name' => NULL,
                'code' => 'BEL',
            ),
            372 => 
            array (
                'id' => 3373,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Pitas',
                'full_name' => NULL,
                'code' => 'PIT',
            ),
            373 => 
            array (
                'id' => 3374,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Penampang',
                'full_name' => NULL,
                'code' => 'PMP',
            ),
            374 => 
            array (
                'id' => 3375,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Tambunan',
                'full_name' => NULL,
                'code' => 'TAB',
            ),
            375 => 
            array (
                'id' => 3376,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Tenom',
                'full_name' => NULL,
                'code' => 'TEN',
            ),
            376 => 
            array (
                'id' => 3377,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Tawau',
                'full_name' => NULL,
                'code' => 'TAW',
            ),
            377 => 
            array (
                'id' => 3378,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Tuaran',
                'full_name' => NULL,
                'code' => 'TUR',
            ),
            378 => 
            array (
                'id' => 3379,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Kota Kinabalu',
                'full_name' => NULL,
                'code' => 'BKI',
            ),
            379 => 
            array (
                'id' => 3380,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Kota Marudu',
                'full_name' => NULL,
                'code' => 'KMU',
            ),
            380 => 
            array (
                'id' => 3381,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Keningau',
                'full_name' => NULL,
                'code' => 'KEG',
            ),
            381 => 
            array (
                'id' => 3382,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Kudat',
                'full_name' => NULL,
                'code' => 'KUD',
            ),
            382 => 
            array (
                'id' => 3383,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Kota Belud',
                'full_name' => NULL,
                'code' => 'KBD',
            ),
            383 => 
            array (
                'id' => 3384,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Kunak',
                'full_name' => NULL,
                'code' => 'KUN',
            ),
            384 => 
            array (
                'id' => 3385,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Kuala Penyu',
                'full_name' => NULL,
                'code' => 'KPU',
            ),
            385 => 
            array (
                'id' => 3386,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Kinabatangan',
                'full_name' => NULL,
                'code' => 'KBT',
            ),
            386 => 
            array (
                'id' => 3387,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Ranau',
                'full_name' => NULL,
                'code' => 'RNU',
            ),
            387 => 
            array (
                'id' => 3388,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Lahad Datu',
                'full_name' => NULL,
                'code' => 'LDU',
            ),
            388 => 
            array (
                'id' => 3389,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Nabawan',
                'full_name' => NULL,
                'code' => 'NAB',
            ),
            389 => 
            array (
                'id' => 3390,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Sandakan',
                'full_name' => NULL,
                'code' => 'SDK',
            ),
            390 => 
            array (
                'id' => 3391,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Sipitang',
                'full_name' => NULL,
                'code' => 'SPT',
            ),
            391 => 
            array (
                'id' => 3392,
                'country_id' => 87,
                'region_id' => 21,
                'name' => 'Semporna',
                'full_name' => NULL,
                'code' => 'SMM',
            ),
            392 => 
            array (
                'id' => 3393,
                'country_id' => 87,
                'region_id' => 22,
                'name' => 'Kuching',
                'full_name' => NULL,
                'code' => 'KCH',
            ),
            393 => 
            array (
                'id' => 3394,
                'country_id' => 87,
                'region_id' => 22,
                'name' => 'Kapit',
                'full_name' => NULL,
                'code' => 'KPI',
            ),
            394 => 
            array (
                'id' => 3395,
                'country_id' => 87,
                'region_id' => 22,
                'name' => 'Limbang',
                'full_name' => NULL,
                'code' => 'LMN',
            ),
            395 => 
            array (
                'id' => 3396,
                'country_id' => 87,
                'region_id' => 22,
                'name' => 'Miri',
                'full_name' => NULL,
                'code' => 'MYY',
            ),
            396 => 
            array (
                'id' => 3397,
                'country_id' => 87,
                'region_id' => 22,
                'name' => 'Bintulu',
                'full_name' => NULL,
                'code' => 'BTU',
            ),
            397 => 
            array (
                'id' => 3398,
                'country_id' => 87,
                'region_id' => 22,
                'name' => 'Mukah',
                'full_name' => NULL,
                'code' => 'MKM',
            ),
            398 => 
            array (
                'id' => 3399,
                'country_id' => 87,
                'region_id' => 22,
                'name' => 'Betong',
                'full_name' => NULL,
                'code' => 'BTG',
            ),
            399 => 
            array (
                'id' => 3400,
                'country_id' => 87,
                'region_id' => 22,
                'name' => 'Samarahan',
                'full_name' => NULL,
                'code' => 'SMH',
            ),
            400 => 
            array (
                'id' => 3401,
                'country_id' => 87,
                'region_id' => 22,
                'name' => 'Sri Aman',
                'full_name' => NULL,
                'code' => 'SAM',
            ),
            401 => 
            array (
                'id' => 3402,
                'country_id' => 87,
                'region_id' => 22,
                'name' => 'Sarikei',
                'full_name' => NULL,
                'code' => 'SAR',
            ),
            402 => 
            array (
                'id' => 3403,
                'country_id' => 87,
                'region_id' => 22,
                'name' => 'Sibu',
                'full_name' => NULL,
                'code' => 'SBW',
            ),
            403 => 
            array (
                'id' => 3404,
                'country_id' => 87,
                'region_id' => 23,
                'name' => 'Petaling',
                'full_name' => NULL,
                'code' => 'PJA',
            ),
            404 => 
            array (
                'id' => 3405,
                'country_id' => 87,
                'region_id' => 23,
                'name' => 'Gombak',
                'full_name' => NULL,
                'code' => 'GOM',
            ),
            405 => 
            array (
                'id' => 3406,
                'country_id' => 87,
                'region_id' => 23,
                'name' => 'Kuala Langat',
                'full_name' => NULL,
                'code' => 'KLG',
            ),
            406 => 
            array (
                'id' => 3407,
                'country_id' => 87,
                'region_id' => 23,
                'name' => 'Kuala Selangor',
                'full_name' => NULL,
                'code' => 'KSL',
            ),
            407 => 
            array (
                'id' => 3408,
                'country_id' => 87,
                'region_id' => 23,
                'name' => 'Sabak Bernam',
                'full_name' => NULL,
                'code' => 'SBM',
            ),
            408 => 
            array (
                'id' => 3409,
                'country_id' => 87,
                'region_id' => 23,
                'name' => 'Hulu Langat',
                'full_name' => NULL,
                'code' => 'HUL',
            ),
            409 => 
            array (
                'id' => 3410,
                'country_id' => 87,
                'region_id' => 23,
                'name' => 'Hulu Selangor',
                'full_name' => NULL,
                'code' => 'HUS',
            ),
            410 => 
            array (
                'id' => 3411,
                'country_id' => 87,
                'region_id' => 23,
                'name' => 'Sepang',
                'full_name' => NULL,
                'code' => 'SEP',
            ),
            411 => 
            array (
                'id' => 3412,
                'country_id' => 167,
                'region_id' => 64,
                'name' => 'Fayetteville',
                'full_name' => NULL,
                'code' => 'FYV',
            ),
            412 => 
            array (
                'id' => 3413,
                'country_id' => 167,
                'region_id' => 64,
                'name' => 'Fort Smith',
                'full_name' => NULL,
                'code' => 'FSM',
            ),
            413 => 
            array (
                'id' => 3414,
                'country_id' => 167,
                'region_id' => 64,
                'name' => 'Little Rock',
                'full_name' => NULL,
                'code' => 'LIT',
            ),
            414 => 
            array (
                'id' => 3415,
                'country_id' => 167,
                'region_id' => 61,
                'name' => 'Birmingham',
                'full_name' => NULL,
                'code' => 'BHM',
            ),
            415 => 
            array (
                'id' => 3416,
                'country_id' => 167,
                'region_id' => 61,
                'name' => 'Montgomery',
                'full_name' => NULL,
                'code' => 'MGM',
            ),
            416 => 
            array (
                'id' => 3417,
                'country_id' => 167,
                'region_id' => 61,
                'name' => 'Mobile',
                'full_name' => NULL,
                'code' => 'MOB',
            ),
            417 => 
            array (
                'id' => 3418,
                'country_id' => 167,
                'region_id' => 62,
                'name' => 'Anchorage',
                'full_name' => NULL,
                'code' => 'ANC',
            ),
            418 => 
            array (
                'id' => 3419,
                'country_id' => 167,
                'region_id' => 62,
                'name' => 'Fairbanks',
                'full_name' => NULL,
                'code' => 'FAI',
            ),
            419 => 
            array (
                'id' => 3420,
                'country_id' => 167,
                'region_id' => 62,
                'name' => 'Juneau',
                'full_name' => NULL,
                'code' => 'JNU',
            ),
            420 => 
            array (
                'id' => 3421,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'Idaho Falls',
                'full_name' => NULL,
                'code' => 'IDA',
            ),
            421 => 
            array (
                'id' => 3422,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'Pocatello',
                'full_name' => NULL,
                'code' => 'PIH',
            ),
            422 => 
            array (
                'id' => 3423,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'Boise',
                'full_name' => NULL,
                'code' => 'BOI',
            ),
            423 => 
            array (
                'id' => 3424,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'Blackfoot',
                'full_name' => NULL,
                'code' => 'BLK',
            ),
            424 => 
            array (
                'id' => 3425,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'Coeur d\'Alene',
                'full_name' => NULL,
                'code' => 'COE',
            ),
            425 => 
            array (
                'id' => 3426,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'Lewiston',
                'full_name' => NULL,
                'code' => 'LWS',
            ),
            426 => 
            array (
                'id' => 3427,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'Moscow',
                'full_name' => NULL,
                'code' => 'MJL',
            ),
            427 => 
            array (
                'id' => 3428,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'Murphy',
                'full_name' => NULL,
                'code' => 'ZMU',
            ),
            428 => 
            array (
                'id' => 3429,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'Nampa',
                'full_name' => NULL,
                'code' => 'NPA',
            ),
            429 => 
            array (
                'id' => 3430,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'Ketchum',
                'full_name' => NULL,
                'code' => 'QKM',
            ),
            430 => 
            array (
                'id' => 3431,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'Sun Valley',
                'full_name' => NULL,
                'code' => 'SVY',
            ),
            431 => 
            array (
                'id' => 3432,
                'country_id' => 167,
                'region_id' => 73,
                'name' => 'American Falls',
                'full_name' => NULL,
                'code' => 'YAF',
            ),
            432 => 
            array (
                'id' => 3433,
                'country_id' => 167,
                'region_id' => 76,
                'name' => 'Davenport',
                'full_name' => NULL,
                'code' => 'DVN',
            ),
            433 => 
            array (
                'id' => 3434,
                'country_id' => 167,
                'region_id' => 76,
                'name' => 'Des Moines',
                'full_name' => NULL,
                'code' => 'DSM',
            ),
            434 => 
            array (
                'id' => 3435,
                'country_id' => 167,
                'region_id' => 76,
                'name' => 'Cedar Rapids',
                'full_name' => NULL,
                'code' => 'CID',
            ),
            435 => 
            array (
                'id' => 3436,
                'country_id' => 167,
                'region_id' => 95,
                'name' => 'Bismarck',
                'full_name' => NULL,
                'code' => 'BIS',
            ),
            436 => 
            array (
                'id' => 3437,
                'country_id' => 167,
                'region_id' => 95,
                'name' => 'Grand Forks',
                'full_name' => NULL,
                'code' => 'GFK',
            ),
            437 => 
            array (
                'id' => 3438,
                'country_id' => 167,
                'region_id' => 95,
                'name' => 'Fargo',
                'full_name' => NULL,
                'code' => 'FAR',
            ),
            438 => 
            array (
                'id' => 3439,
                'country_id' => 167,
                'region_id' => 95,
                'name' => 'Minot',
                'full_name' => NULL,
                'code' => 'MOT',
            ),
            439 => 
            array (
                'id' => 3440,
                'country_id' => 167,
                'region_id' => 94,
                'name' => 'Asheville',
                'full_name' => NULL,
                'code' => 'AEV',
            ),
            440 => 
            array (
                'id' => 3441,
                'country_id' => 167,
                'region_id' => 94,
                'name' => 'Durham',
                'full_name' => NULL,
                'code' => 'DHH',
            ),
            441 => 
            array (
                'id' => 3442,
                'country_id' => 167,
                'region_id' => 94,
                'name' => 'Greensboro',
                'full_name' => NULL,
                'code' => 'GBO',
            ),
            442 => 
            array (
                'id' => 3443,
                'country_id' => 167,
                'region_id' => 94,
                'name' => 'Chapel Hill',
                'full_name' => NULL,
                'code' => 'CHE',
            ),
            443 => 
            array (
                'id' => 3444,
                'country_id' => 167,
                'region_id' => 94,
                'name' => 'Raleigh',
                'full_name' => NULL,
                'code' => 'RAG',
            ),
            444 => 
            array (
                'id' => 3445,
                'country_id' => 167,
                'region_id' => 94,
                'name' => 'Raleigh-Durham',
                'full_name' => NULL,
                'code' => 'RDU',
            ),
            445 => 
            array (
                'id' => 3446,
                'country_id' => 167,
                'region_id' => 94,
                'name' => 'Charlotte',
                'full_name' => NULL,
                'code' => 'CRQ',
            ),
            446 => 
            array (
                'id' => 3447,
                'country_id' => 167,
                'region_id' => 99,
                'name' => 'Allentown',
                'full_name' => NULL,
                'code' => 'AEW',
            ),
            447 => 
            array (
                'id' => 3448,
                'country_id' => 167,
                'region_id' => 99,
                'name' => 'Philadephia',
                'full_name' => NULL,
                'code' => 'PHL',
            ),
            448 => 
            array (
                'id' => 3449,
                'country_id' => 167,
                'region_id' => 99,
                'name' => 'Pittsburgh',
                'full_name' => NULL,
                'code' => 'PIT',
            ),
            449 => 
            array (
                'id' => 3450,
                'country_id' => 167,
                'region_id' => 104,
                'name' => 'El Paso',
                'full_name' => NULL,
                'code' => 'ELP',
            ),
            450 => 
            array (
                'id' => 3451,
                'country_id' => 167,
                'region_id' => 104,
                'name' => 'Austin',
                'full_name' => NULL,
                'code' => 'AUS',
            ),
            451 => 
            array (
                'id' => 3452,
                'country_id' => 167,
                'region_id' => 104,
                'name' => 'Dallas',
                'full_name' => NULL,
                'code' => 'DAL',
            ),
            452 => 
            array (
                'id' => 3453,
                'country_id' => 167,
                'region_id' => 104,
                'name' => 'Corpus Christi',
                'full_name' => NULL,
                'code' => 'CRP',
            ),
            453 => 
            array (
                'id' => 3454,
                'country_id' => 167,
                'region_id' => 104,
                'name' => 'Galveston',
                'full_name' => NULL,
                'code' => 'GLS',
            ),
            454 => 
            array (
                'id' => 3455,
                'country_id' => 167,
                'region_id' => 104,
                'name' => 'Laredo',
                'full_name' => NULL,
                'code' => 'LRD',
            ),
            455 => 
            array (
                'id' => 3456,
                'country_id' => 167,
                'region_id' => 104,
                'name' => 'McAllen',
                'full_name' => NULL,
                'code' => 'TXC',
            ),
            456 => 
            array (
                'id' => 3457,
                'country_id' => 167,
                'region_id' => 104,
                'name' => 'San Antonio',
                'full_name' => NULL,
                'code' => 'SAT',
            ),
            457 => 
            array (
                'id' => 3458,
                'country_id' => 167,
                'region_id' => 104,
                'name' => 'Houston',
                'full_name' => NULL,
                'code' => 'HOU',
            ),
            458 => 
            array (
                'id' => 3459,
                'country_id' => 167,
                'region_id' => 96,
                'name' => 'Dayton',
                'full_name' => NULL,
                'code' => 'DYT',
            ),
            459 => 
            array (
                'id' => 3460,
                'country_id' => 167,
                'region_id' => 96,
                'name' => 'Columbus',
                'full_name' => NULL,
                'code' => 'CZX',
            ),
            460 => 
            array (
                'id' => 3461,
                'country_id' => 167,
                'region_id' => 96,
                'name' => 'Cleveland',
                'full_name' => NULL,
                'code' => 'CLE',
            ),
            461 => 
            array (
                'id' => 3462,
                'country_id' => 167,
                'region_id' => 96,
                'name' => 'Toledo',
                'full_name' => NULL,
                'code' => 'TOL',
            ),
            462 => 
            array (
                'id' => 3463,
                'country_id' => 167,
                'region_id' => 96,
                'name' => 'Cincinnati',
                'full_name' => NULL,
                'code' => 'CVG',
            ),
            463 => 
            array (
                'id' => 3464,
                'country_id' => 167,
                'region_id' => 97,
                'name' => 'Oklahoma City',
                'full_name' => NULL,
                'code' => 'OKC',
            ),
            464 => 
            array (
                'id' => 3465,
                'country_id' => 167,
                'region_id' => 97,
                'name' => 'Norman',
                'full_name' => NULL,
                'code' => 'OUN',
            ),
            465 => 
            array (
                'id' => 3466,
                'country_id' => 167,
                'region_id' => 97,
                'name' => 'Tulsa',
                'full_name' => NULL,
                'code' => 'TUL',
            ),
            466 => 
            array (
                'id' => 3467,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Bend',
                'full_name' => NULL,
                'code' => 'BZO',
            ),
            467 => 
            array (
                'id' => 3468,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Portland',
                'full_name' => NULL,
                'code' => 'PDX',
            ),
            468 => 
            array (
                'id' => 3469,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'The Dalles',
                'full_name' => NULL,
                'code' => 'DLS',
            ),
            469 => 
            array (
                'id' => 3470,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Dallas',
                'full_name' => NULL,
                'code' => 'DAC',
            ),
            470 => 
            array (
                'id' => 3471,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Tillamook',
                'full_name' => NULL,
                'code' => 'TLM',
            ),
            471 => 
            array (
                'id' => 3472,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Grant\'s Pass',
                'full_name' => NULL,
                'code' => 'XFX',
            ),
            472 => 
            array (
                'id' => 3473,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Hood River',
                'full_name' => NULL,
                'code' => 'HDX',
            ),
            473 => 
            array (
                'id' => 3474,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Crater Lake',
                'full_name' => NULL,
                'code' => 'CTR',
            ),
            474 => 
            array (
                'id' => 3475,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Corvallis',
                'full_name' => NULL,
                'code' => 'YCV',
            ),
            475 => 
            array (
                'id' => 3476,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Coos Bay',
                'full_name' => NULL,
                'code' => 'COB',
            ),
            476 => 
            array (
                'id' => 3477,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Medford',
                'full_name' => NULL,
                'code' => 'MFR',
            ),
            477 => 
            array (
                'id' => 3478,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Salem',
                'full_name' => NULL,
                'code' => 'SLE',
            ),
            478 => 
            array (
                'id' => 3479,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'St Helens',
                'full_name' => NULL,
                'code' => 'STH',
            ),
            479 => 
            array (
                'id' => 3480,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Springfield',
                'full_name' => NULL,
                'code' => 'SPY',
            ),
            480 => 
            array (
                'id' => 3481,
                'country_id' => 167,
                'region_id' => 98,
                'name' => 'Eugene',
                'full_name' => NULL,
                'code' => 'EUG',
            ),
            481 => 
            array (
                'id' => 3482,
                'country_id' => 167,
                'region_id' => 70,
                'name' => 'Orlando',
                'full_name' => NULL,
                'code' => 'ORL',
            ),
            482 => 
            array (
                'id' => 3483,
                'country_id' => 167,
                'region_id' => 70,
                'name' => 'Key West',
                'full_name' => NULL,
                'code' => 'EYW',
            ),
            483 => 
            array (
                'id' => 3484,
                'country_id' => 167,
                'region_id' => 70,
                'name' => 'Jacksonville',
                'full_name' => NULL,
                'code' => 'JAX',
            ),
            484 => 
            array (
                'id' => 3485,
                'country_id' => 167,
                'region_id' => 70,
                'name' => 'Cape Canaveral',
                'full_name' => NULL,
                'code' => 'CPV',
            ),
            485 => 
            array (
                'id' => 3486,
                'country_id' => 167,
                'region_id' => 70,
                'name' => 'Fort Lauderdale',
                'full_name' => NULL,
                'code' => 'FLL',
            ),
            486 => 
            array (
                'id' => 3487,
                'country_id' => 167,
                'region_id' => 70,
                'name' => 'Miami',
                'full_name' => NULL,
                'code' => 'MIA',
            ),
            487 => 
            array (
                'id' => 3488,
                'country_id' => 167,
                'region_id' => 70,
                'name' => 'St. Petersburg',
                'full_name' => NULL,
                'code' => 'PIE',
            ),
            488 => 
            array (
                'id' => 3489,
                'country_id' => 167,
                'region_id' => 70,
                'name' => 'Tallahassee',
                'full_name' => NULL,
                'code' => 'TLH',
            ),
            489 => 
            array (
                'id' => 3490,
                'country_id' => 167,
                'region_id' => 70,
                'name' => 'Tampa',
                'full_name' => NULL,
                'code' => 'TPA',
            ),
            490 => 
            array (
                'id' => 3491,
                'country_id' => 167,
                'region_id' => 106,
                'name' => 'Burlington',
                'full_name' => NULL,
                'code' => 'BTV',
            ),
            491 => 
            array (
                'id' => 3492,
                'country_id' => 167,
                'region_id' => 106,
                'name' => 'Rutland',
                'full_name' => NULL,
                'code' => 'RUT',
            ),
            492 => 
            array (
                'id' => 3493,
                'country_id' => 167,
                'region_id' => 106,
                'name' => 'South Burlington',
                'full_name' => NULL,
                'code' => 'ZBR',
            ),
            493 => 
            array (
                'id' => 3494,
                'country_id' => 167,
                'region_id' => 69,
                'name' => 'Washington D.C.',
                'full_name' => NULL,
                'code' => 'WAS',
            ),
            494 => 
            array (
                'id' => 3495,
                'country_id' => 167,
                'region_id' => 108,
                'name' => 'Spokane',
                'full_name' => NULL,
                'code' => 'GEG',
            ),
            495 => 
            array (
                'id' => 3496,
                'country_id' => 167,
                'region_id' => 108,
                'name' => 'Tacoma',
                'full_name' => NULL,
                'code' => 'TTW',
            ),
            496 => 
            array (
                'id' => 3497,
                'country_id' => 167,
                'region_id' => 108,
                'name' => 'Seattle',
                'full_name' => NULL,
                'code' => 'SEA',
            ),
            497 => 
            array (
                'id' => 3498,
                'country_id' => 167,
                'region_id' => 111,
                'name' => 'Evanston',
                'full_name' => NULL,
                'code' => 'EVD',
            ),
            498 => 
            array (
                'id' => 3499,
                'country_id' => 167,
                'region_id' => 111,
                'name' => 'Casper',
                'full_name' => NULL,
                'code' => 'CPR',
            ),
            499 => 
            array (
                'id' => 3500,
                'country_id' => 167,
                'region_id' => 111,
                'name' => 'Laramie',
                'full_name' => NULL,
                'code' => 'LAR',
            ),
        ));
        \DB::table('world_cities')->insert(array (
            0 => 
            array (
                'id' => 3501,
                'country_id' => 167,
                'region_id' => 111,
                'name' => 'Rock Springs',
                'full_name' => NULL,
                'code' => 'RKS',
            ),
            1 => 
            array (
                'id' => 3502,
                'country_id' => 167,
                'region_id' => 111,
                'name' => 'Cheyenne',
                'full_name' => NULL,
                'code' => 'CYS',
            ),
            2 => 
            array (
                'id' => 3503,
                'country_id' => 167,
                'region_id' => 111,
                'name' => 'Sheridan',
                'full_name' => NULL,
                'code' => 'SHR',
            ),
            3 => 
            array (
                'id' => 3504,
                'country_id' => 167,
                'region_id' => 65,
                'name' => 'San Francisco',
                'full_name' => NULL,
                'code' => 'SFO',
            ),
            4 => 
            array (
                'id' => 3505,
                'country_id' => 167,
                'region_id' => 65,
                'name' => 'Los Angeles',
                'full_name' => NULL,
                'code' => 'LAX',
            ),
            5 => 
            array (
                'id' => 3506,
                'country_id' => 167,
                'region_id' => 65,
                'name' => 'San Diego',
                'full_name' => NULL,
                'code' => 'SAN',
            ),
            6 => 
            array (
                'id' => 3507,
                'country_id' => 167,
                'region_id' => 65,
                'name' => 'San Jose',
                'full_name' => NULL,
                'code' => 'SJC',
            ),
            7 => 
            array (
                'id' => 3508,
                'country_id' => 167,
                'region_id' => 77,
                'name' => 'Abilene',
                'full_name' => NULL,
                'code' => 'ABZ',
            ),
            8 => 
            array (
                'id' => 3509,
                'country_id' => 167,
                'region_id' => 77,
                'name' => 'Overland Park',
                'full_name' => NULL,
                'code' => 'OVL',
            ),
            9 => 
            array (
                'id' => 3510,
                'country_id' => 167,
                'region_id' => 77,
                'name' => 'Hutchinson',
                'full_name' => NULL,
                'code' => 'HCH',
            ),
            10 => 
            array (
                'id' => 3511,
                'country_id' => 167,
                'region_id' => 77,
                'name' => 'Kansas City',
                'full_name' => NULL,
                'code' => 'KCK',
            ),
            11 => 
            array (
                'id' => 3512,
                'country_id' => 167,
                'region_id' => 77,
                'name' => 'Leavenworth',
                'full_name' => NULL,
                'code' => 'XIA',
            ),
            12 => 
            array (
                'id' => 3513,
                'country_id' => 167,
                'region_id' => 77,
                'name' => 'Lawrence',
                'full_name' => NULL,
                'code' => 'LWC',
            ),
            13 => 
            array (
                'id' => 3514,
                'country_id' => 167,
                'region_id' => 77,
                'name' => 'Manhattan',
                'full_name' => NULL,
                'code' => 'MHK',
            ),
            14 => 
            array (
                'id' => 3515,
                'country_id' => 167,
                'region_id' => 77,
                'name' => 'Topeka',
                'full_name' => NULL,
                'code' => 'TOP',
            ),
            15 => 
            array (
                'id' => 3516,
                'country_id' => 167,
                'region_id' => 77,
                'name' => 'Wichita',
                'full_name' => NULL,
                'code' => 'ICT',
            ),
            16 => 
            array (
                'id' => 3517,
                'country_id' => 167,
                'region_id' => 67,
                'name' => 'Bridgeport',
                'full_name' => NULL,
                'code' => 'BDR',
            ),
            17 => 
            array (
                'id' => 3518,
                'country_id' => 167,
                'region_id' => 67,
                'name' => 'Darien',
                'full_name' => NULL,
                'code' => 'DAQ',
            ),
            18 => 
            array (
                'id' => 3519,
                'country_id' => 167,
                'region_id' => 67,
                'name' => 'Greenwich',
                'full_name' => NULL,
                'code' => 'GRH',
            ),
            19 => 
            array (
                'id' => 3520,
                'country_id' => 167,
                'region_id' => 67,
                'name' => 'Hartford',
                'full_name' => NULL,
                'code' => 'HFD',
            ),
            20 => 
            array (
                'id' => 3521,
                'country_id' => 167,
                'region_id' => 67,
                'name' => 'Middletown',
                'full_name' => NULL,
                'code' => 'XIN',
            ),
            21 => 
            array (
                'id' => 3522,
                'country_id' => 167,
                'region_id' => 67,
                'name' => 'New Haven',
                'full_name' => NULL,
                'code' => 'HVN',
            ),
            22 => 
            array (
                'id' => 3523,
                'country_id' => 167,
                'region_id' => 67,
                'name' => 'Westport',
                'full_name' => NULL,
                'code' => 'WPT',
            ),
            23 => 
            array (
                'id' => 3524,
                'country_id' => 167,
                'region_id' => 67,
                'name' => 'Waterbury',
                'full_name' => NULL,
                'code' => 'WAT',
            ),
            24 => 
            array (
                'id' => 3525,
                'country_id' => 167,
                'region_id' => 67,
                'name' => 'New Britain',
                'full_name' => NULL,
                'code' => 'NWT',
            ),
            25 => 
            array (
                'id' => 3526,
                'country_id' => 167,
                'region_id' => 66,
                'name' => 'Aspen',
                'full_name' => NULL,
                'code' => 'ASE',
            ),
            26 => 
            array (
                'id' => 3527,
                'country_id' => 167,
                'region_id' => 66,
                'name' => 'Aurora',
                'full_name' => NULL,
                'code' => 'AUX',
            ),
            27 => 
            array (
                'id' => 3528,
                'country_id' => 167,
                'region_id' => 66,
                'name' => 'Boulder',
                'full_name' => NULL,
                'code' => 'WBU',
            ),
            28 => 
            array (
                'id' => 3529,
                'country_id' => 167,
                'region_id' => 66,
                'name' => 'Grand Junction',
                'full_name' => NULL,
                'code' => 'GJT',
            ),
            29 => 
            array (
                'id' => 3530,
                'country_id' => 167,
                'region_id' => 66,
                'name' => 'Denver',
                'full_name' => NULL,
                'code' => 'DEN',
            ),
            30 => 
            array (
                'id' => 3531,
                'country_id' => 167,
                'region_id' => 66,
                'name' => 'Fort Collins',
                'full_name' => NULL,
                'code' => 'FNL',
            ),
            31 => 
            array (
                'id' => 3532,
                'country_id' => 167,
                'region_id' => 66,
                'name' => 'Colorado Springs',
                'full_name' => NULL,
                'code' => 'COS',
            ),
            32 => 
            array (
                'id' => 3533,
                'country_id' => 167,
                'region_id' => 66,
                'name' => 'Vail',
                'full_name' => NULL,
                'code' => 'VAC',
            ),
            33 => 
            array (
                'id' => 3534,
                'country_id' => 167,
                'region_id' => 78,
                'name' => 'Lexington',
                'full_name' => NULL,
                'code' => 'LEX',
            ),
            34 => 
            array (
                'id' => 3535,
                'country_id' => 167,
                'region_id' => 78,
                'name' => 'Louisville',
                'full_name' => NULL,
                'code' => 'LUI',
            ),
            35 => 
            array (
                'id' => 3536,
                'country_id' => 167,
                'region_id' => 78,
                'name' => 'Owensboro',
                'full_name' => NULL,
                'code' => 'OWB',
            ),
            36 => 
            array (
                'id' => 3537,
                'country_id' => 167,
                'region_id' => 79,
                'name' => 'Baton Rouge',
                'full_name' => NULL,
                'code' => 'BTR',
            ),
            37 => 
            array (
                'id' => 3538,
                'country_id' => 167,
                'region_id' => 79,
                'name' => 'Shreveport',
                'full_name' => NULL,
                'code' => 'SHV',
            ),
            38 => 
            array (
                'id' => 3539,
                'country_id' => 167,
                'region_id' => 79,
                'name' => 'New Orleans',
                'full_name' => NULL,
                'code' => 'MSY',
            ),
            39 => 
            array (
                'id' => 3540,
                'country_id' => 167,
                'region_id' => 100,
                'name' => 'Pawtucket',
                'full_name' => NULL,
                'code' => 'PAW',
            ),
            40 => 
            array (
                'id' => 3541,
                'country_id' => 167,
                'region_id' => 100,
                'name' => 'Cranston',
                'full_name' => NULL,
                'code' => 'CQH',
            ),
            41 => 
            array (
                'id' => 3542,
                'country_id' => 167,
                'region_id' => 100,
                'name' => 'Newport',
                'full_name' => NULL,
                'code' => 'NPO',
            ),
            42 => 
            array (
                'id' => 3543,
                'country_id' => 167,
                'region_id' => 100,
                'name' => 'Providence',
                'full_name' => NULL,
                'code' => 'PVD',
            ),
            43 => 
            array (
                'id' => 3544,
                'country_id' => 167,
                'region_id' => 100,
                'name' => 'Westerly',
                'full_name' => NULL,
                'code' => 'WST',
            ),
            44 => 
            array (
                'id' => 3545,
                'country_id' => 167,
                'region_id' => 100,
                'name' => 'Woonsocket',
                'full_name' => NULL,
                'code' => 'SFN',
            ),
            45 => 
            array (
                'id' => 3546,
                'country_id' => 167,
                'region_id' => 100,
                'name' => 'Warwick',
                'full_name' => NULL,
                'code' => 'UZO',
            ),
            46 => 
            array (
                'id' => 3547,
                'country_id' => 167,
                'region_id' => 81,
                'name' => 'Balitmore',
                'full_name' => NULL,
                'code' => 'BAL',
            ),
            47 => 
            array (
                'id' => 3548,
                'country_id' => 167,
                'region_id' => 81,
                'name' => 'Gaithersburg',
                'full_name' => NULL,
                'code' => 'GAI',
            ),
            48 => 
            array (
                'id' => 3549,
                'country_id' => 167,
                'region_id' => 81,
                'name' => 'Rockville',
                'full_name' => NULL,
                'code' => 'RKV',
            ),
            49 => 
            array (
                'id' => 3550,
                'country_id' => 167,
                'region_id' => 82,
                'name' => 'Boston',
                'full_name' => NULL,
                'code' => 'BZD',
            ),
            50 => 
            array (
                'id' => 3551,
                'country_id' => 167,
                'region_id' => 82,
                'name' => 'Springfield',
                'full_name' => NULL,
                'code' => 'SFY',
            ),
            51 => 
            array (
                'id' => 3552,
                'country_id' => 167,
                'region_id' => 82,
                'name' => 'Worcester',
                'full_name' => NULL,
                'code' => 'ORH',
            ),
            52 => 
            array (
                'id' => 3553,
                'country_id' => 167,
                'region_id' => 87,
                'name' => 'Billings',
                'full_name' => NULL,
                'code' => 'BGS',
            ),
            53 => 
            array (
                'id' => 3554,
                'country_id' => 167,
                'region_id' => 87,
                'name' => 'Great Falls',
                'full_name' => NULL,
                'code' => 'GTF',
            ),
            54 => 
            array (
                'id' => 3555,
                'country_id' => 167,
                'region_id' => 87,
                'name' => 'Missoula',
                'full_name' => NULL,
                'code' => 'MSO',
            ),
            55 => 
            array (
                'id' => 3556,
                'country_id' => 167,
                'region_id' => 86,
                'name' => 'Columbia',
                'full_name' => NULL,
                'code' => 'COV',
            ),
            56 => 
            array (
                'id' => 3557,
                'country_id' => 167,
                'region_id' => 86,
                'name' => 'Jefferson City',
                'full_name' => NULL,
                'code' => 'JEF',
            ),
            57 => 
            array (
                'id' => 3558,
                'country_id' => 167,
                'region_id' => 86,
                'name' => 'Kansas City',
                'full_name' => NULL,
                'code' => 'MKC',
            ),
            58 => 
            array (
                'id' => 3559,
                'country_id' => 167,
                'region_id' => 86,
                'name' => 'Sanit Louis',
                'full_name' => NULL,
                'code' => 'STL',
            ),
            59 => 
            array (
                'id' => 3560,
                'country_id' => 167,
                'region_id' => 86,
                'name' => 'Springfield',
                'full_name' => NULL,
                'code' => 'SGF',
            ),
            60 => 
            array (
                'id' => 3561,
                'country_id' => 167,
                'region_id' => 85,
                'name' => 'Biloxi',
                'full_name' => NULL,
                'code' => 'BIX',
            ),
            61 => 
            array (
                'id' => 3562,
                'country_id' => 167,
                'region_id' => 85,
                'name' => 'Gulfport',
                'full_name' => NULL,
                'code' => 'GPT',
            ),
            62 => 
            array (
                'id' => 3563,
                'country_id' => 167,
                'region_id' => 85,
                'name' => 'Greenville',
                'full_name' => NULL,
                'code' => 'GLH',
            ),
            63 => 
            array (
                'id' => 3564,
                'country_id' => 167,
                'region_id' => 85,
                'name' => 'Hattiesburg',
                'full_name' => NULL,
                'code' => 'HBG',
            ),
            64 => 
            array (
                'id' => 3565,
                'country_id' => 167,
                'region_id' => 85,
                'name' => 'Jackson',
                'full_name' => NULL,
                'code' => 'JAN',
            ),
            65 => 
            array (
                'id' => 3566,
                'country_id' => 167,
                'region_id' => 85,
                'name' => 'Meridian',
                'full_name' => NULL,
                'code' => 'MEI',
            ),
            66 => 
            array (
                'id' => 3567,
                'country_id' => 167,
                'region_id' => 85,
                'name' => 'Vicksburg',
                'full_name' => NULL,
                'code' => 'VKS',
            ),
            67 => 
            array (
                'id' => 3568,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Ann Arbor',
                'full_name' => NULL,
                'code' => 'ARB',
            ),
            68 => 
            array (
                'id' => 3569,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Battle Creek',
                'full_name' => NULL,
                'code' => 'BTL',
            ),
            69 => 
            array (
                'id' => 3570,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Bay City',
                'full_name' => NULL,
                'code' => 'BCY',
            ),
            70 => 
            array (
                'id' => 3571,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Grand Rapids',
                'full_name' => NULL,
                'code' => 'GRR',
            ),
            71 => 
            array (
                'id' => 3572,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Dearborn',
                'full_name' => NULL,
                'code' => 'DEO',
            ),
            72 => 
            array (
                'id' => 3573,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Detroit',
                'full_name' => NULL,
                'code' => 'DET',
            ),
            73 => 
            array (
                'id' => 3574,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Flint',
                'full_name' => NULL,
                'code' => 'FNT',
            ),
            74 => 
            array (
                'id' => 3575,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Wyandotte',
                'full_name' => NULL,
                'code' => 'WYD',
            ),
            75 => 
            array (
                'id' => 3576,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Kalamazoo',
                'full_name' => NULL,
                'code' => 'AZO',
            ),
            76 => 
            array (
                'id' => 3577,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Lansing',
                'full_name' => NULL,
                'code' => 'LAN',
            ),
            77 => 
            array (
                'id' => 3578,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Muskegon',
                'full_name' => NULL,
                'code' => 'MKG',
            ),
            78 => 
            array (
                'id' => 3579,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Pontiac',
                'full_name' => NULL,
                'code' => 'PTK',
            ),
            79 => 
            array (
                'id' => 3580,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Saginaw',
                'full_name' => NULL,
                'code' => 'SGM',
            ),
            80 => 
            array (
                'id' => 3581,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Sault Ste Marie',
                'full_name' => NULL,
                'code' => 'SSM',
            ),
            81 => 
            array (
                'id' => 3582,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Warren',
                'full_name' => NULL,
                'code' => 'WAM',
            ),
            82 => 
            array (
                'id' => 3583,
                'country_id' => 167,
                'region_id' => 83,
                'name' => 'Port Huron',
                'full_name' => NULL,
                'code' => 'PHN',
            ),
            83 => 
            array (
                'id' => 3584,
                'country_id' => 167,
                'region_id' => 80,
                'name' => 'Bangor',
                'full_name' => NULL,
                'code' => 'BNQ',
            ),
            84 => 
            array (
                'id' => 3585,
                'country_id' => 167,
                'region_id' => 80,
                'name' => 'Portland',
                'full_name' => NULL,
                'code' => 'POL',
            ),
            85 => 
            array (
                'id' => 3586,
                'country_id' => 167,
                'region_id' => 80,
                'name' => 'Lewiston',
                'full_name' => NULL,
                'code' => 'QLW',
            ),
            86 => 
            array (
                'id' => 3587,
                'country_id' => 167,
                'region_id' => 84,
                'name' => 'Rochester',
                'full_name' => NULL,
                'code' => 'RST',
            ),
            87 => 
            array (
                'id' => 3588,
                'country_id' => 167,
                'region_id' => 84,
                'name' => 'Minneapolis',
                'full_name' => NULL,
                'code' => 'MES',
            ),
            88 => 
            array (
                'id' => 3589,
                'country_id' => 167,
                'region_id' => 84,
                'name' => 'Saint Paul',
                'full_name' => NULL,
                'code' => 'STP',
            ),
            89 => 
            array (
                'id' => 3590,
                'country_id' => 167,
                'region_id' => 102,
                'name' => 'Aberdeen',
                'full_name' => NULL,
                'code' => 'ABK',
            ),
            90 => 
            array (
                'id' => 3591,
                'country_id' => 167,
                'region_id' => 102,
                'name' => 'Rapid City',
                'full_name' => NULL,
                'code' => 'RAP',
            ),
            91 => 
            array (
                'id' => 3592,
                'country_id' => 167,
                'region_id' => 102,
                'name' => 'Sioux Falls',
                'full_name' => NULL,
                'code' => 'FSD',
            ),
            92 => 
            array (
                'id' => 3593,
                'country_id' => 167,
                'region_id' => 101,
                'name' => 'North Charleston',
                'full_name' => NULL,
                'code' => 'NTS',
            ),
            93 => 
            array (
                'id' => 3594,
                'country_id' => 167,
                'region_id' => 101,
                'name' => 'Charleston',
                'full_name' => NULL,
                'code' => 'CHS',
            ),
            94 => 
            array (
                'id' => 3595,
                'country_id' => 167,
                'region_id' => 101,
                'name' => 'Columbia',
                'full_name' => NULL,
                'code' => 'COV',
            ),
            95 => 
            array (
                'id' => 3596,
                'country_id' => 167,
                'region_id' => 88,
                'name' => 'Omaha',
                'full_name' => NULL,
                'code' => 'OMA',
            ),
            96 => 
            array (
                'id' => 3597,
                'country_id' => 167,
                'region_id' => 88,
                'name' => 'Bellevue',
                'full_name' => NULL,
                'code' => 'XDE',
            ),
            97 => 
            array (
                'id' => 3598,
                'country_id' => 167,
                'region_id' => 88,
                'name' => 'Lincoln',
                'full_name' => NULL,
                'code' => 'LNK',
            ),
            98 => 
            array (
                'id' => 3599,
                'country_id' => 167,
                'region_id' => 89,
                'name' => 'Elko',
                'full_name' => NULL,
                'code' => 'EKO',
            ),
            99 => 
            array (
                'id' => 3600,
                'country_id' => 167,
                'region_id' => 89,
                'name' => 'North Las Vegas',
                'full_name' => NULL,
                'code' => 'NVS',
            ),
            100 => 
            array (
                'id' => 3601,
                'country_id' => 167,
                'region_id' => 89,
                'name' => 'Virginia City',
                'full_name' => NULL,
                'code' => 'VGI',
            ),
            101 => 
            array (
                'id' => 3602,
                'country_id' => 167,
                'region_id' => 89,
                'name' => 'Henderson',
                'full_name' => NULL,
                'code' => 'HNZ',
            ),
            102 => 
            array (
                'id' => 3603,
                'country_id' => 167,
                'region_id' => 89,
                'name' => 'Carson City',
                'full_name' => NULL,
                'code' => 'CSN',
            ),
            103 => 
            array (
                'id' => 3604,
                'country_id' => 167,
                'region_id' => 89,
                'name' => 'Las Vegas',
                'full_name' => NULL,
                'code' => 'LAS',
            ),
            104 => 
            array (
                'id' => 3605,
                'country_id' => 167,
                'region_id' => 89,
                'name' => 'Reno',
                'full_name' => NULL,
                'code' => 'RNO',
            ),
            105 => 
            array (
                'id' => 3606,
                'country_id' => 167,
                'region_id' => 89,
                'name' => 'Sparks',
                'full_name' => NULL,
                'code' => 'SPK',
            ),
            106 => 
            array (
                'id' => 3607,
                'country_id' => 167,
                'region_id' => 93,
                'name' => 'Buffalo',
                'full_name' => NULL,
                'code' => 'FFO',
            ),
            107 => 
            array (
                'id' => 3608,
                'country_id' => 167,
                'region_id' => 93,
                'name' => 'Rochester',
                'full_name' => NULL,
                'code' => 'ROC',
            ),
            108 => 
            array (
                'id' => 3609,
                'country_id' => 167,
                'region_id' => 93,
                'name' => 'New York',
                'full_name' => NULL,
                'code' => 'QEE',
            ),
            109 => 
            array (
                'id' => 3610,
                'country_id' => 167,
                'region_id' => 68,
                'name' => 'Dover',
                'full_name' => NULL,
                'code' => 'DOR',
            ),
            110 => 
            array (
                'id' => 3611,
                'country_id' => 167,
                'region_id' => 68,
                'name' => 'Newark',
                'full_name' => NULL,
                'code' => 'NWK',
            ),
            111 => 
            array (
                'id' => 3612,
                'country_id' => 167,
                'region_id' => 68,
                'name' => 'Wilmington',
                'full_name' => NULL,
                'code' => 'ILG',
            ),
            112 => 
            array (
                'id' => 3613,
                'country_id' => 167,
                'region_id' => 103,
                'name' => 'Bristol',
                'full_name' => NULL,
                'code' => 'BSJ',
            ),
            113 => 
            array (
                'id' => 3614,
                'country_id' => 167,
                'region_id' => 103,
                'name' => 'Chattanooga',
                'full_name' => NULL,
                'code' => 'CHA',
            ),
            114 => 
            array (
                'id' => 3615,
                'country_id' => 167,
                'region_id' => 103,
                'name' => 'Kingsport',
                'full_name' => NULL,
                'code' => 'TRI',
            ),
            115 => 
            array (
                'id' => 3616,
                'country_id' => 167,
                'region_id' => 103,
                'name' => 'Memphis',
                'full_name' => NULL,
                'code' => 'MEM',
            ),
            116 => 
            array (
                'id' => 3617,
                'country_id' => 167,
                'region_id' => 103,
                'name' => 'Nashville',
                'full_name' => NULL,
                'code' => 'BNA',
            ),
            117 => 
            array (
                'id' => 3618,
                'country_id' => 167,
                'region_id' => 103,
                'name' => 'Knoxville',
                'full_name' => NULL,
                'code' => 'TYS',
            ),
            118 => 
            array (
                'id' => 3619,
                'country_id' => 167,
                'region_id' => 103,
                'name' => 'Tri-City Area',
                'full_name' => NULL,
                'code' => 'YTC',
            ),
            119 => 
            array (
                'id' => 3620,
                'country_id' => 167,
                'region_id' => 103,
                'name' => 'Smyrna',
                'full_name' => NULL,
                'code' => 'MQY',
            ),
            120 => 
            array (
                'id' => 3621,
                'country_id' => 167,
                'region_id' => 103,
                'name' => 'Spring Hill',
                'full_name' => NULL,
                'code' => 'RGI',
            ),
            121 => 
            array (
                'id' => 3622,
                'country_id' => 167,
                'region_id' => 103,
                'name' => 'Johnson City',
                'full_name' => NULL,
                'code' => 'JCY',
            ),
            122 => 
            array (
                'id' => 3623,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'Appleton',
                'full_name' => NULL,
                'code' => 'ATW',
            ),
            123 => 
            array (
                'id' => 3624,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'Oshkosh',
                'full_name' => NULL,
                'code' => 'OSH',
            ),
            124 => 
            array (
                'id' => 3625,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'Green Bay',
                'full_name' => NULL,
                'code' => 'GBK',
            ),
            125 => 
            array (
                'id' => 3626,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'Kenosha',
                'full_name' => NULL,
                'code' => 'ENW',
            ),
            126 => 
            array (
                'id' => 3627,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'LaCrosse',
                'full_name' => NULL,
                'code' => 'LSE',
            ),
            127 => 
            array (
                'id' => 3628,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'Racine',
                'full_name' => NULL,
                'code' => 'RAC',
            ),
            128 => 
            array (
                'id' => 3629,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'Manitowoc',
                'full_name' => NULL,
                'code' => 'MTW',
            ),
            129 => 
            array (
                'id' => 3630,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'Madison',
                'full_name' => NULL,
                'code' => 'QMD',
            ),
            130 => 
            array (
                'id' => 3631,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'Milwaukee',
                'full_name' => NULL,
                'code' => 'MKE',
            ),
            131 => 
            array (
                'id' => 3632,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'Eau Claire',
                'full_name' => NULL,
                'code' => 'EAU',
            ),
            132 => 
            array (
                'id' => 3633,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'Wausau',
                'full_name' => NULL,
                'code' => 'AUW',
            ),
            133 => 
            array (
                'id' => 3634,
                'country_id' => 167,
                'region_id' => 110,
                'name' => 'Sheboygan',
                'full_name' => NULL,
                'code' => 'SBM',
            ),
            134 => 
            array (
                'id' => 3635,
                'country_id' => 167,
                'region_id' => 107,
                'name' => 'Virginia Beach',
                'full_name' => NULL,
                'code' => 'VAB',
            ),
            135 => 
            array (
                'id' => 3636,
                'country_id' => 167,
                'region_id' => 107,
                'name' => 'Norfolk',
                'full_name' => NULL,
                'code' => 'ORF',
            ),
            136 => 
            array (
                'id' => 3637,
                'country_id' => 167,
                'region_id' => 107,
                'name' => 'Chesapeake',
                'full_name' => NULL,
                'code' => 'HTW',
            ),
            137 => 
            array (
                'id' => 3638,
                'country_id' => 167,
                'region_id' => 109,
                'name' => 'Charleston',
                'full_name' => NULL,
                'code' => 'CRW',
            ),
            138 => 
            array (
                'id' => 3639,
                'country_id' => 167,
                'region_id' => 109,
                'name' => 'Huntington',
                'full_name' => NULL,
                'code' => 'HNU',
            ),
            139 => 
            array (
                'id' => 3640,
                'country_id' => 167,
                'region_id' => 109,
                'name' => 'Parkersburg',
                'full_name' => NULL,
                'code' => 'PKB',
            ),
            140 => 
            array (
                'id' => 3641,
                'country_id' => 167,
                'region_id' => 72,
                'name' => 'Kailua',
                'full_name' => NULL,
                'code' => 'KHH',
            ),
            141 => 
            array (
                'id' => 3642,
                'country_id' => 167,
                'region_id' => 72,
                'name' => 'Honolulu',
                'full_name' => NULL,
                'code' => 'HNL',
            ),
            142 => 
            array (
                'id' => 3643,
                'country_id' => 167,
                'region_id' => 72,
                'name' => 'Hilo',
                'full_name' => NULL,
                'code' => 'ITO',
            ),
            143 => 
            array (
                'id' => 3644,
                'country_id' => 167,
                'region_id' => 90,
                'name' => 'Concord',
                'full_name' => NULL,
                'code' => 'CON',
            ),
            144 => 
            array (
                'id' => 3645,
                'country_id' => 167,
                'region_id' => 90,
                'name' => 'Manchester',
                'full_name' => NULL,
                'code' => 'MHT',
            ),
            145 => 
            array (
                'id' => 3646,
                'country_id' => 167,
                'region_id' => 90,
                'name' => 'Nashua',
                'full_name' => NULL,
                'code' => 'ASH',
            ),
            146 => 
            array (
                'id' => 3647,
                'country_id' => 167,
                'region_id' => 92,
                'name' => 'Albuquerque',
                'full_name' => NULL,
                'code' => 'ABQ',
            ),
            147 => 
            array (
                'id' => 3648,
                'country_id' => 167,
                'region_id' => 92,
                'name' => 'Las Cruces',
                'full_name' => NULL,
                'code' => 'LRU',
            ),
            148 => 
            array (
                'id' => 3649,
                'country_id' => 167,
                'region_id' => 92,
                'name' => 'Roswell',
                'full_name' => NULL,
                'code' => 'ROW',
            ),
            149 => 
            array (
                'id' => 3650,
                'country_id' => 167,
                'region_id' => 92,
                'name' => 'Santa Fe',
                'full_name' => NULL,
                'code' => 'SAF',
            ),
            150 => 
            array (
                'id' => 3651,
                'country_id' => 167,
                'region_id' => 91,
                'name' => 'Newark',
                'full_name' => NULL,
                'code' => 'NRK',
            ),
            151 => 
            array (
                'id' => 3652,
                'country_id' => 167,
                'region_id' => 91,
                'name' => 'Paterson',
                'full_name' => NULL,
                'code' => 'PAT',
            ),
            152 => 
            array (
                'id' => 3653,
                'country_id' => 167,
                'region_id' => 91,
                'name' => 'Jersey City',
                'full_name' => NULL,
                'code' => 'JEC',
            ),
            153 => 
            array (
                'id' => 3654,
                'country_id' => 167,
                'region_id' => 63,
                'name' => 'Phoenix',
                'full_name' => NULL,
                'code' => 'PHX',
            ),
            154 => 
            array (
                'id' => 3655,
                'country_id' => 167,
                'region_id' => 63,
                'name' => 'Glendale',
                'full_name' => NULL,
                'code' => 'GDA',
            ),
            155 => 
            array (
                'id' => 3656,
                'country_id' => 167,
                'region_id' => 63,
                'name' => 'Mesa',
                'full_name' => NULL,
                'code' => 'MQA',
            ),
            156 => 
            array (
                'id' => 3657,
                'country_id' => 167,
                'region_id' => 63,
                'name' => 'Scottsdale',
                'full_name' => NULL,
                'code' => 'STZ',
            ),
            157 => 
            array (
                'id' => 3658,
                'country_id' => 167,
                'region_id' => 63,
                'name' => 'Tempe',
                'full_name' => NULL,
                'code' => 'TPE',
            ),
            158 => 
            array (
                'id' => 3659,
                'country_id' => 167,
                'region_id' => 63,
                'name' => 'Tucson',
                'full_name' => NULL,
                'code' => 'TUC',
            ),
            159 => 
            array (
                'id' => 3660,
                'country_id' => 167,
                'region_id' => 63,
                'name' => 'Yuma',
                'full_name' => NULL,
                'code' => 'YUM',
            ),
            160 => 
            array (
                'id' => 3661,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Alton',
                'full_name' => NULL,
                'code' => 'ALN',
            ),
            161 => 
            array (
                'id' => 3662,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Aurora',
                'full_name' => NULL,
                'code' => 'AUZ',
            ),
            162 => 
            array (
                'id' => 3663,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Bloomington',
                'full_name' => NULL,
                'code' => 'BLO',
            ),
            163 => 
            array (
                'id' => 3664,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Danville',
                'full_name' => NULL,
                'code' => 'DVI',
            ),
            164 => 
            array (
                'id' => 3665,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'De Kalb',
                'full_name' => NULL,
                'code' => 'DEK',
            ),
            165 => 
            array (
                'id' => 3666,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Decatur',
                'full_name' => NULL,
                'code' => 'DEC',
            ),
            166 => 
            array (
                'id' => 3667,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'East St Louis',
                'full_name' => NULL,
                'code' => 'ESL',
            ),
            167 => 
            array (
                'id' => 3668,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Champaign-Urbana',
                'full_name' => NULL,
                'code' => 'CMI',
            ),
            168 => 
            array (
                'id' => 3669,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Galesburg',
                'full_name' => NULL,
                'code' => 'GSU',
            ),
            169 => 
            array (
                'id' => 3670,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Carbondale',
                'full_name' => NULL,
                'code' => 'MDH',
            ),
            170 => 
            array (
                'id' => 3671,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Rock Island',
                'full_name' => NULL,
                'code' => 'RKI',
            ),
            171 => 
            array (
                'id' => 3672,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Rockford',
                'full_name' => NULL,
                'code' => 'RFD',
            ),
            172 => 
            array (
                'id' => 3673,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Normal',
                'full_name' => NULL,
                'code' => 'NOM',
            ),
            173 => 
            array (
                'id' => 3674,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Peoria',
                'full_name' => NULL,
                'code' => 'PLA',
            ),
            174 => 
            array (
                'id' => 3675,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Centralia',
                'full_name' => NULL,
                'code' => 'CRA',
            ),
            175 => 
            array (
                'id' => 3676,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Springfield',
                'full_name' => NULL,
                'code' => 'SPI',
            ),
            176 => 
            array (
                'id' => 3677,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Waukegan',
                'full_name' => NULL,
                'code' => 'UGN',
            ),
            177 => 
            array (
                'id' => 3678,
                'country_id' => 167,
                'region_id' => 74,
                'name' => 'Chicago',
                'full_name' => NULL,
                'code' => 'CHI',
            ),
            178 => 
            array (
                'id' => 3679,
                'country_id' => 167,
                'region_id' => 75,
                'name' => 'Evansville',
                'full_name' => NULL,
                'code' => 'EVV',
            ),
            179 => 
            array (
                'id' => 3680,
                'country_id' => 167,
                'region_id' => 75,
                'name' => 'Fort Wayne',
                'full_name' => NULL,
                'code' => 'FWA',
            ),
            180 => 
            array (
                'id' => 3681,
                'country_id' => 167,
                'region_id' => 75,
                'name' => 'Indianapolis',
                'full_name' => NULL,
                'code' => 'IND',
            ),
            181 => 
            array (
                'id' => 3682,
                'country_id' => 167,
                'region_id' => 105,
                'name' => 'Ogden',
                'full_name' => NULL,
                'code' => 'OGD',
            ),
            182 => 
            array (
                'id' => 3683,
                'country_id' => 167,
                'region_id' => 105,
                'name' => 'Layton',
                'full_name' => NULL,
                'code' => 'LTJ',
            ),
            183 => 
            array (
                'id' => 3684,
                'country_id' => 167,
                'region_id' => 105,
                'name' => 'Orem',
                'full_name' => NULL,
                'code' => 'OEU',
            ),
            184 => 
            array (
                'id' => 3685,
                'country_id' => 167,
                'region_id' => 105,
                'name' => 'Park City',
                'full_name' => NULL,
                'code' => 'PAC',
            ),
            185 => 
            array (
                'id' => 3686,
                'country_id' => 167,
                'region_id' => 105,
                'name' => 'Provo',
                'full_name' => NULL,
                'code' => 'PVU',
            ),
            186 => 
            array (
                'id' => 3687,
                'country_id' => 167,
                'region_id' => 105,
                'name' => 'St.George',
                'full_name' => NULL,
                'code' => 'SGU',
            ),
            187 => 
            array (
                'id' => 3688,
                'country_id' => 167,
                'region_id' => 105,
                'name' => 'West Valley City',
                'full_name' => NULL,
                'code' => 'WVC',
            ),
            188 => 
            array (
                'id' => 3689,
                'country_id' => 167,
                'region_id' => 105,
                'name' => 'Salt Lake City',
                'full_name' => NULL,
                'code' => 'SLC',
            ),
            189 => 
            array (
                'id' => 3690,
                'country_id' => 167,
                'region_id' => 71,
                'name' => 'Augusta',
                'full_name' => NULL,
                'code' => 'AUT',
            ),
            190 => 
            array (
                'id' => 3691,
                'country_id' => 167,
                'region_id' => 71,
                'name' => 'Columbus',
                'full_name' => NULL,
                'code' => 'CZX',
            ),
            191 => 
            array (
                'id' => 3692,
                'country_id' => 167,
                'region_id' => 71,
                'name' => 'Macon',
                'full_name' => NULL,
                'code' => 'MCN',
            ),
            192 => 
            array (
                'id' => 3693,
                'country_id' => 167,
                'region_id' => 71,
                'name' => 'Savannah',
                'full_name' => NULL,
                'code' => 'SAV',
            ),
            193 => 
            array (
                'id' => 3694,
                'country_id' => 167,
                'region_id' => 71,
                'name' => 'Atlanta',
                'full_name' => NULL,
                'code' => 'TAT',
            ),
            194 => 
            array (
                'id' => 3695,
                'country_id' => 148,
                'region_id' => 58,
                'name' => 'Belfast',
                'full_name' => NULL,
                'code' => 'BFS',
            ),
            195 => 
            array (
                'id' => 3696,
                'country_id' => 148,
                'region_id' => 58,
                'name' => 'Derry',
                'full_name' => NULL,
                'code' => 'DRY',
            ),
            196 => 
            array (
                'id' => 3697,
                'country_id' => 148,
                'region_id' => 58,
                'name' => 'Lisburn',
                'full_name' => NULL,
                'code' => 'LSB',
            ),
            197 => 
            array (
                'id' => 3698,
                'country_id' => 148,
                'region_id' => 58,
                'name' => 'Newry',
                'full_name' => NULL,
                'code' => 'NYM',
            ),
            198 => 
            array (
                'id' => 3699,
                'country_id' => 148,
                'region_id' => 59,
                'name' => 'Aberdeen',
                'full_name' => NULL,
                'code' => 'ABD',
            ),
            199 => 
            array (
                'id' => 3700,
                'country_id' => 148,
                'region_id' => 59,
                'name' => 'Edinburgh',
                'full_name' => NULL,
                'code' => 'EDH',
            ),
            200 => 
            array (
                'id' => 3701,
                'country_id' => 148,
                'region_id' => 59,
                'name' => 'Dundee',
                'full_name' => NULL,
                'code' => 'DND',
            ),
            201 => 
            array (
                'id' => 3702,
                'country_id' => 148,
                'region_id' => 59,
                'name' => 'Glasgow',
                'full_name' => NULL,
                'code' => 'GLG',
            ),
            202 => 
            array (
                'id' => 3703,
                'country_id' => 148,
                'region_id' => 59,
                'name' => 'Stirling',
                'full_name' => NULL,
                'code' => 'STG',
            ),
            203 => 
            array (
                'id' => 3704,
                'country_id' => 148,
                'region_id' => 59,
                'name' => 'Inverness',
                'full_name' => NULL,
                'code' => 'INV',
            ),
            204 => 
            array (
                'id' => 3705,
                'country_id' => 148,
                'region_id' => 60,
                'name' => 'Bangor',
                'full_name' => NULL,
                'code' => 'BAN',
            ),
            205 => 
            array (
                'id' => 3706,
                'country_id' => 148,
                'region_id' => 60,
                'name' => 'Cardiff',
                'full_name' => NULL,
                'code' => 'CDF',
            ),
            206 => 
            array (
                'id' => 3707,
                'country_id' => 148,
                'region_id' => 60,
                'name' => 'Newport',
                'full_name' => NULL,
                'code' => 'NWP',
            ),
            207 => 
            array (
                'id' => 3708,
                'country_id' => 148,
                'region_id' => 60,
                'name' => 'Swansea',
                'full_name' => NULL,
                'code' => 'SWA',
            ),
            208 => 
            array (
                'id' => 3709,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Exeter',
                'full_name' => NULL,
                'code' => 'EXE',
            ),
            209 => 
            array (
                'id' => 3710,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Bath',
                'full_name' => NULL,
                'code' => 'BAS',
            ),
            210 => 
            array (
                'id' => 3711,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Peterborough',
                'full_name' => NULL,
                'code' => 'PTE',
            ),
            211 => 
            array (
                'id' => 3712,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Birmingham',
                'full_name' => NULL,
                'code' => 'BIR',
            ),
            212 => 
            array (
                'id' => 3713,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Bradford',
                'full_name' => NULL,
                'code' => 'BRD',
            ),
            213 => 
            array (
                'id' => 3714,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Brighton & Hove',
                'full_name' => NULL,
                'code' => 'BNH',
            ),
            214 => 
            array (
                'id' => 3715,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Bristol',
                'full_name' => NULL,
                'code' => 'BST',
            ),
            215 => 
            array (
                'id' => 3716,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Derby',
                'full_name' => NULL,
                'code' => 'DER',
            ),
            216 => 
            array (
                'id' => 3717,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Durham',
                'full_name' => NULL,
                'code' => 'DUR',
            ),
            217 => 
            array (
                'id' => 3718,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Gloucester',
                'full_name' => NULL,
                'code' => 'GLO',
            ),
            218 => 
            array (
                'id' => 3719,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Kingston upon Hull',
                'full_name' => NULL,
                'code' => 'KUH',
            ),
            219 => 
            array (
                'id' => 3720,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Hereford',
                'full_name' => NULL,
                'code' => 'HAF',
            ),
            220 => 
            array (
                'id' => 3721,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Cambridge',
                'full_name' => NULL,
                'code' => 'CAM',
            ),
            221 => 
            array (
                'id' => 3722,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Carlisle',
                'full_name' => NULL,
                'code' => 'CAX',
            ),
            222 => 
            array (
                'id' => 3723,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Canterbury',
                'full_name' => NULL,
                'code' => 'CNG',
            ),
            223 => 
            array (
                'id' => 3724,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Coventry',
                'full_name' => NULL,
                'code' => 'COV',
            ),
            224 => 
            array (
                'id' => 3725,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Lancaster',
                'full_name' => NULL,
                'code' => 'LAN',
            ),
            225 => 
            array (
                'id' => 3726,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Ripon',
                'full_name' => NULL,
                'code' => 'RIP',
            ),
            226 => 
            array (
                'id' => 3727,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Lichfield',
                'full_name' => NULL,
                'code' => 'LHF',
            ),
            227 => 
            array (
                'id' => 3728,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Liverpool',
                'full_name' => NULL,
                'code' => 'LIV',
            ),
            228 => 
            array (
                'id' => 3729,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Leeds',
                'full_name' => NULL,
                'code' => 'LDS',
            ),
            229 => 
            array (
                'id' => 3730,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Leicester',
                'full_name' => NULL,
                'code' => 'LCE',
            ),
            230 => 
            array (
                'id' => 3731,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Lincoln',
                'full_name' => NULL,
                'code' => 'LCN',
            ),
            231 => 
            array (
                'id' => 3732,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'London',
                'full_name' => NULL,
                'code' => 'LND',
            ),
            232 => 
            array (
                'id' => 3733,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Manchester',
                'full_name' => NULL,
                'code' => 'MAN',
            ),
            233 => 
            array (
                'id' => 3734,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Southampton',
                'full_name' => NULL,
                'code' => 'STH',
            ),
            234 => 
            array (
                'id' => 3735,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Oxford',
                'full_name' => NULL,
                'code' => 'OXF',
            ),
            235 => 
            array (
                'id' => 3736,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Newcastle',
                'full_name' => NULL,
                'code' => 'NCL',
            ),
            236 => 
            array (
                'id' => 3737,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Nottingham',
                'full_name' => NULL,
                'code' => 'NGM',
            ),
            237 => 
            array (
                'id' => 3738,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Norwich',
                'full_name' => NULL,
                'code' => 'NRW',
            ),
            238 => 
            array (
                'id' => 3739,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Portsmouth',
                'full_name' => NULL,
                'code' => 'POR',
            ),
            239 => 
            array (
                'id' => 3740,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Preston',
                'full_name' => NULL,
                'code' => 'PRE',
            ),
            240 => 
            array (
                'id' => 3741,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Plymouth',
                'full_name' => NULL,
                'code' => 'PLY',
            ),
            241 => 
            array (
                'id' => 3742,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Chichester',
                'full_name' => NULL,
                'code' => 'CST',
            ),
            242 => 
            array (
                'id' => 3743,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Chester',
                'full_name' => NULL,
                'code' => 'CEG',
            ),
            243 => 
            array (
                'id' => 3744,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Sunderland',
                'full_name' => NULL,
                'code' => 'SUN',
            ),
            244 => 
            array (
                'id' => 3745,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Saint Albans',
                'full_name' => NULL,
                'code' => 'TBL',
            ),
            245 => 
            array (
                'id' => 3746,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Salisbury',
                'full_name' => NULL,
                'code' => 'SLS',
            ),
            246 => 
            array (
                'id' => 3747,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Salford',
                'full_name' => NULL,
                'code' => 'SLF',
            ),
            247 => 
            array (
                'id' => 3748,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Truro',
                'full_name' => NULL,
                'code' => 'TRU',
            ),
            248 => 
            array (
                'id' => 3749,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Stoke-on-Trent',
                'full_name' => NULL,
                'code' => 'SOT',
            ),
            249 => 
            array (
                'id' => 3750,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Wells',
                'full_name' => NULL,
                'code' => 'WLS',
            ),
            250 => 
            array (
                'id' => 3751,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Wakefield',
                'full_name' => NULL,
                'code' => 'WKF',
            ),
            251 => 
            array (
                'id' => 3752,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Winchester',
                'full_name' => NULL,
                'code' => 'WNE',
            ),
            252 => 
            array (
                'id' => 3753,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Wolverhampton',
                'full_name' => NULL,
                'code' => 'WOV',
            ),
            253 => 
            array (
                'id' => 3754,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Worcester',
                'full_name' => NULL,
                'code' => 'WOR',
            ),
            254 => 
            array (
                'id' => 3755,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Sheffield',
                'full_name' => NULL,
                'code' => 'SHE',
            ),
            255 => 
            array (
                'id' => 3756,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'Ely',
                'full_name' => NULL,
                'code' => 'ELY',
            ),
            256 => 
            array (
                'id' => 3757,
                'country_id' => 148,
                'region_id' => 57,
                'name' => 'York',
                'full_name' => NULL,
                'code' => 'YOR',
            ),
        ));
        
        
    }
}