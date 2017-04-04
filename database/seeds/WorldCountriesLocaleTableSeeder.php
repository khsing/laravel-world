<?php

use Illuminate\Database\Seeder;

class WorldCountriesLocaleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('world_countries_locale')->delete();
        
        \DB::table('world_countries_locale')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 1,
                'name' => '喀麦隆',
                'alias' => NULL,
                'full_name' => '喀麦隆共和国',
                'locale' => 'zh-cn',
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 2,
                'name' => '贝宁',
                'alias' => NULL,
                'full_name' => '贝宁共和国',
                'locale' => 'zh-cn',
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 3,
                'name' => '马达加斯加',
                'alias' => NULL,
                'full_name' => '马达加斯加共和国',
                'locale' => 'zh-cn',
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 4,
                'name' => '卢旺达',
                'alias' => NULL,
                'full_name' => '卢旺达共和国',
                'locale' => 'zh-cn',
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 5,
                'name' => '塞舌尔',
                'alias' => NULL,
                'full_name' => '塞舌尔共和国',
                'locale' => 'zh-cn',
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 6,
                'name' => '科特迪瓦',
                'alias' => NULL,
                'full_name' => '科特迪瓦共和国',
                'locale' => 'zh-cn',
            ),
            6 => 
            array (
                'id' => 7,
                'country_id' => 7,
                'name' => '埃及',
                'alias' => NULL,
                'full_name' => '阿拉伯埃及共和国',
                'locale' => 'zh-cn',
            ),
            7 => 
            array (
                'id' => 8,
                'country_id' => 8,
                'name' => '毛里求斯',
                'alias' => NULL,
                'full_name' => '毛里求斯共和国',
                'locale' => 'zh-cn',
            ),
            8 => 
            array (
                'id' => 9,
                'country_id' => 9,
                'name' => '布基纳法索',
                'alias' => NULL,
                'full_name' => '布基纳法索',
                'locale' => 'zh-cn',
            ),
            9 => 
            array (
                'id' => 10,
                'country_id' => 10,
                'name' => '厄立特里亚',
                'alias' => NULL,
                'full_name' => '厄立特里亚国',
                'locale' => 'zh-cn',
            ),
            10 => 
            array (
                'id' => 11,
                'country_id' => 11,
                'name' => '圣多美和普林西比',
                'alias' => NULL,
                'full_name' => '圣多美和普林西比民主共和国',
                'locale' => 'zh-cn',
            ),
            11 => 
            array (
                'id' => 12,
                'country_id' => 12,
                'name' => '安哥拉',
                'alias' => NULL,
                'full_name' => '安哥拉共和国',
                'locale' => 'zh-cn',
            ),
            12 => 
            array (
                'id' => 13,
                'country_id' => 13,
                'name' => '利比亚',
                'alias' => NULL,
                'full_name' => '利比亚国',
                'locale' => 'zh-cn',
            ),
            13 => 
            array (
                'id' => 14,
                'country_id' => 14,
                'name' => '津巴布韦',
                'alias' => NULL,
                'full_name' => '津巴布韦共和国',
                'locale' => 'zh-cn',
            ),
            14 => 
            array (
                'id' => 15,
                'country_id' => 15,
                'name' => '几内亚',
                'alias' => NULL,
                'full_name' => '几内亚共和国',
                'locale' => 'zh-cn',
            ),
            15 => 
            array (
                'id' => 16,
                'country_id' => 16,
                'name' => '塞拉利昂',
                'alias' => NULL,
                'full_name' => '塞拉利昂共和国',
                'locale' => 'zh-cn',
            ),
            16 => 
            array (
                'id' => 17,
                'country_id' => 17,
                'name' => '留尼汪',
                'alias' => NULL,
                'full_name' => '留尼汪岛',
                'locale' => 'zh-cn',
            ),
            17 => 
            array (
                'id' => 18,
                'country_id' => 18,
                'name' => '加蓬',
                'alias' => NULL,
                'full_name' => '加蓬共和国',
                'locale' => 'zh-cn',
            ),
            18 => 
            array (
                'id' => 19,
                'country_id' => 19,
                'name' => '加纳',
                'alias' => NULL,
                'full_name' => '加纳共和国',
                'locale' => 'zh-cn',
            ),
            19 => 
            array (
                'id' => 20,
                'country_id' => 20,
                'name' => '坦桑尼亚',
                'alias' => NULL,
                'full_name' => '坦桑尼亚联合共和国',
                'locale' => 'zh-cn',
            ),
            20 => 
            array (
                'id' => 21,
                'country_id' => 21,
                'name' => '马里',
                'alias' => NULL,
                'full_name' => '马里共和国',
                'locale' => 'zh-cn',
            ),
            21 => 
            array (
                'id' => 22,
                'country_id' => 22,
                'name' => '索马里',
                'alias' => NULL,
                'full_name' => '索马里联邦共和国',
                'locale' => 'zh-cn',
            ),
            22 => 
            array (
                'id' => 23,
                'country_id' => 23,
                'name' => '毛里塔尼亚',
                'alias' => NULL,
                'full_name' => '毛里塔尼亚伊斯兰共和国',
                'locale' => 'zh-cn',
            ),
            23 => 
            array (
                'id' => 24,
                'country_id' => 24,
                'name' => '乌干达',
                'alias' => NULL,
                'full_name' => '乌干达共和国',
                'locale' => 'zh-cn',
            ),
            24 => 
            array (
                'id' => 25,
                'country_id' => 25,
                'name' => '乍得',
                'alias' => NULL,
                'full_name' => '乍得共和国',
                'locale' => 'zh-cn',
            ),
            25 => 
            array (
                'id' => 26,
                'country_id' => 26,
                'name' => '马约特岛',
                'alias' => NULL,
                'full_name' => '马约特岛',
                'locale' => 'zh-cn',
            ),
            26 => 
            array (
                'id' => 27,
                'country_id' => 27,
                'name' => '科摩罗',
                'alias' => NULL,
                'full_name' => '科摩罗联盟',
                'locale' => 'zh-cn',
            ),
            27 => 
            array (
                'id' => 28,
                'country_id' => 28,
                'name' => '博茨瓦纳',
                'alias' => NULL,
                'full_name' => '博茨瓦纳共和国',
                'locale' => 'zh-cn',
            ),
            28 => 
            array (
                'id' => 29,
                'country_id' => 29,
                'name' => '塞内加尔',
                'alias' => NULL,
                'full_name' => '塞内加尔共和国',
                'locale' => 'zh-cn',
            ),
            29 => 
            array (
                'id' => 30,
                'country_id' => 30,
                'name' => '斯威士兰',
                'alias' => NULL,
                'full_name' => '斯威士兰王国',
                'locale' => 'zh-cn',
            ),
            30 => 
            array (
                'id' => 31,
                'country_id' => 31,
                'name' => '几内亚比绍',
                'alias' => NULL,
                'full_name' => '几内亚比绍共和国',
                'locale' => 'zh-cn',
            ),
            31 => 
            array (
                'id' => 32,
                'country_id' => 32,
                'name' => '民主刚果',
                'alias' => NULL,
                'full_name' => '刚果民主共和国',
                'locale' => 'zh-cn',
            ),
            32 => 
            array (
                'id' => 33,
                'country_id' => 33,
                'name' => '中非',
                'alias' => NULL,
                'full_name' => '中非共和国',
                'locale' => 'zh-cn',
            ),
            33 => 
            array (
                'id' => 34,
                'country_id' => 34,
                'name' => '莱索托',
                'alias' => NULL,
                'full_name' => '莱索托王国',
                'locale' => 'zh-cn',
            ),
            34 => 
            array (
                'id' => 35,
                'country_id' => 35,
                'name' => '刚果',
                'alias' => NULL,
                'full_name' => '刚果共和国',
                'locale' => 'zh-cn',
            ),
            35 => 
            array (
                'id' => 36,
                'country_id' => 36,
                'name' => '南非',
                'alias' => NULL,
                'full_name' => '南非共和国',
                'locale' => 'zh-cn',
            ),
            36 => 
            array (
                'id' => 37,
                'country_id' => 37,
                'name' => '利比里亚',
                'alias' => NULL,
                'full_name' => '利比里亚共和国',
                'locale' => 'zh-cn',
            ),
            37 => 
            array (
                'id' => 38,
                'country_id' => 38,
                'name' => '突尼斯',
                'alias' => NULL,
                'full_name' => '突尼斯共和国',
                'locale' => 'zh-cn',
            ),
            38 => 
            array (
                'id' => 39,
                'country_id' => 39,
                'name' => '赞比亚',
                'alias' => NULL,
                'full_name' => '赞比亚共和国',
                'locale' => 'zh-cn',
            ),
            39 => 
            array (
                'id' => 40,
                'country_id' => 40,
                'name' => '尼日尔',
                'alias' => NULL,
                'full_name' => '尼日尔共和国',
                'locale' => 'zh-cn',
            ),
            40 => 
            array (
                'id' => 41,
                'country_id' => 41,
                'name' => '西撒哈拉',
                'alias' => NULL,
                'full_name' => '阿拉伯撒哈拉民主共和国',
                'locale' => 'zh-cn',
            ),
            41 => 
            array (
                'id' => 42,
                'country_id' => 42,
                'name' => '多哥',
                'alias' => NULL,
                'full_name' => '多哥共和国',
                'locale' => 'zh-cn',
            ),
            42 => 
            array (
                'id' => 43,
                'country_id' => 43,
                'name' => '纳米比亚',
                'alias' => NULL,
                'full_name' => '纳米比亚共和国',
                'locale' => 'zh-cn',
            ),
            43 => 
            array (
                'id' => 44,
                'country_id' => 44,
                'name' => '莫桑比克',
                'alias' => NULL,
                'full_name' => '莫桑比克共和国',
                'locale' => 'zh-cn',
            ),
            44 => 
            array (
                'id' => 45,
                'country_id' => 45,
                'name' => '埃塞俄比亚',
                'alias' => NULL,
                'full_name' => '埃塞俄比亚联邦民主共和国',
                'locale' => 'zh-cn',
            ),
            45 => 
            array (
                'id' => 46,
                'country_id' => 46,
                'name' => '摩洛哥',
                'alias' => NULL,
                'full_name' => '摩洛哥王国',
                'locale' => 'zh-cn',
            ),
            46 => 
            array (
                'id' => 47,
                'country_id' => 47,
                'name' => '马拉维',
                'alias' => NULL,
                'full_name' => '马拉维共和国',
                'locale' => 'zh-cn',
            ),
            47 => 
            array (
                'id' => 48,
                'country_id' => 48,
                'name' => '尼日利亚',
                'alias' => NULL,
                'full_name' => '尼日利亚联邦共和国',
                'locale' => 'zh-cn',
            ),
            48 => 
            array (
                'id' => 49,
                'country_id' => 49,
                'name' => '佛得角',
                'alias' => NULL,
                'full_name' => '佛得角共和国',
                'locale' => 'zh-cn',
            ),
            49 => 
            array (
                'id' => 50,
                'country_id' => 50,
                'name' => '布隆迪',
                'alias' => NULL,
                'full_name' => '布隆迪共和国',
                'locale' => 'zh-cn',
            ),
            50 => 
            array (
                'id' => 51,
                'country_id' => 51,
                'name' => '阿尔及利亚',
                'alias' => NULL,
                'full_name' => '阿尔及利亚民主人民共和国',
                'locale' => 'zh-cn',
            ),
            51 => 
            array (
                'id' => 52,
                'country_id' => 52,
                'name' => '吉布提',
                'alias' => NULL,
                'full_name' => '吉布提共和国',
                'locale' => 'zh-cn',
            ),
            52 => 
            array (
                'id' => 53,
                'country_id' => 53,
                'name' => '冈比亚',
                'alias' => NULL,
                'full_name' => '冈比亚伊斯兰共和国',
                'locale' => 'zh-cn',
            ),
            53 => 
            array (
                'id' => 54,
                'country_id' => 54,
                'name' => '赤道几内亚',
                'alias' => NULL,
                'full_name' => '赤道几内亚共和国',
                'locale' => 'zh-cn',
            ),
            54 => 
            array (
                'id' => 55,
                'country_id' => 55,
                'name' => '苏丹',
                'alias' => NULL,
                'full_name' => '苏丹共和国',
                'locale' => 'zh-cn',
            ),
            55 => 
            array (
                'id' => 56,
                'country_id' => 56,
                'name' => '肯尼亚',
                'alias' => NULL,
                'full_name' => '肯尼亚共和国',
                'locale' => 'zh-cn',
            ),
            56 => 
            array (
                'id' => 57,
                'country_id' => 57,
                'name' => '新加坡',
                'alias' => NULL,
                'full_name' => '新加坡共和国',
                'locale' => 'zh-cn',
            ),
            57 => 
            array (
                'id' => 58,
                'country_id' => 58,
                'name' => '韩国',
                'alias' => NULL,
                'full_name' => '大韩民国',
                'locale' => 'zh-cn',
            ),
            58 => 
            array (
                'id' => 59,
                'country_id' => 59,
                'name' => '叙利亚',
                'alias' => NULL,
                'full_name' => '阿拉伯叙利亚共和国',
                'locale' => 'zh-cn',
            ),
            59 => 
            array (
                'id' => 60,
                'country_id' => 60,
                'name' => '乌兹别克斯坦',
                'alias' => NULL,
                'full_name' => '乌兹别克斯坦共和国',
                'locale' => 'zh-cn',
            ),
            60 => 
            array (
                'id' => 61,
                'country_id' => 61,
                'name' => '巴林',
                'alias' => NULL,
                'full_name' => '巴林王国',
                'locale' => 'zh-cn',
            ),
            61 => 
            array (
                'id' => 62,
                'country_id' => 62,
                'name' => '日本',
                'alias' => NULL,
                'full_name' => '日本国',
                'locale' => 'zh-cn',
            ),
            62 => 
            array (
                'id' => 63,
                'country_id' => 63,
                'name' => '约旦',
                'alias' => NULL,
                'full_name' => '约旦哈希姆王国',
                'locale' => 'zh-cn',
            ),
            63 => 
            array (
                'id' => 64,
                'country_id' => 64,
                'name' => '越南',
                'alias' => NULL,
                'full_name' => '越南社会主义共和国',
                'locale' => 'zh-cn',
            ),
            64 => 
            array (
                'id' => 65,
                'country_id' => 65,
                'name' => '吉尔吉斯斯坦',
                'alias' => NULL,
                'full_name' => '吉尔吉斯共和国',
                'locale' => 'zh-cn',
            ),
            65 => 
            array (
                'id' => 66,
                'country_id' => 66,
                'name' => '泰国',
                'alias' => NULL,
                'full_name' => '泰王国',
                'locale' => 'zh-cn',
            ),
            66 => 
            array (
                'id' => 67,
                'country_id' => 67,
                'name' => '斯里兰卡',
                'alias' => NULL,
                'full_name' => '斯里兰卡民主社会主义共和国',
                'locale' => 'zh-cn',
            ),
            67 => 
            array (
                'id' => 68,
                'country_id' => 68,
                'name' => '阿联酋',
                'alias' => NULL,
                'full_name' => '阿拉伯联合酋长国',
                'locale' => 'zh-cn',
            ),
            68 => 
            array (
                'id' => 69,
                'country_id' => 69,
                'name' => '老挝',
                'alias' => NULL,
                'full_name' => '老挝人民民主共和国',
                'locale' => 'zh-cn',
            ),
            69 => 
            array (
                'id' => 70,
                'country_id' => 70,
                'name' => '阿富汗',
                'alias' => NULL,
                'full_name' => '阿富汗斯坦伊斯兰共和国',
                'locale' => 'zh-cn',
            ),
            70 => 
            array (
                'id' => 71,
                'country_id' => 71,
                'name' => '中国澳门',
                'alias' => NULL,
                'full_name' => '中华人民共和国澳门特别行政区',
                'locale' => 'zh-cn',
            ),
            71 => 
            array (
                'id' => 72,
                'country_id' => 72,
                'name' => '塔吉克斯坦',
                'alias' => NULL,
                'full_name' => '塔吉克斯坦共和国',
                'locale' => 'zh-cn',
            ),
            72 => 
            array (
                'id' => 73,
                'country_id' => 73,
                'name' => '朝鲜',
                'alias' => NULL,
                'full_name' => '朝鲜民主主义人民共和国',
                'locale' => 'zh-cn',
            ),
            73 => 
            array (
                'id' => 74,
                'country_id' => 74,
                'name' => '巴勒斯坦',
                'alias' => NULL,
                'full_name' => '巴勒斯坦国',
                'locale' => 'zh-cn',
            ),
            74 => 
            array (
                'id' => 75,
                'country_id' => 75,
                'name' => '中国香港',
                'alias' => NULL,
                'full_name' => '中华人民共和国香港特别行政区',
                'locale' => 'zh-cn',
            ),
            75 => 
            array (
                'id' => 76,
                'country_id' => 76,
                'name' => '伊拉克',
                'alias' => NULL,
                'full_name' => '伊拉克共和国',
                'locale' => 'zh-cn',
            ),
            76 => 
            array (
                'id' => 77,
                'country_id' => 77,
                'name' => '黎巴嫩',
                'alias' => NULL,
                'full_name' => '黎巴嫩共和国',
                'locale' => 'zh-cn',
            ),
            77 => 
            array (
                'id' => 78,
                'country_id' => 78,
                'name' => '科威特',
                'alias' => NULL,
                'full_name' => '科威特国',
                'locale' => 'zh-cn',
            ),
            78 => 
            array (
                'id' => 79,
                'country_id' => 79,
                'name' => '文莱',
                'alias' => NULL,
                'full_name' => '文莱达鲁萨兰国',
                'locale' => 'zh-cn',
            ),
            79 => 
            array (
                'id' => 80,
                'country_id' => 80,
                'name' => '马尔代夫',
                'alias' => NULL,
                'full_name' => '马尔代夫共和国',
                'locale' => 'zh-cn',
            ),
            80 => 
            array (
                'id' => 81,
                'country_id' => 81,
                'name' => '印度尼西亚',
                'alias' => NULL,
                'full_name' => '印度尼西亚共和国',
                'locale' => 'zh-cn',
            ),
            81 => 
            array (
                'id' => 82,
                'country_id' => 82,
                'name' => '以色列',
                'alias' => NULL,
                'full_name' => '以色列国',
                'locale' => 'zh-cn',
            ),
            82 => 
            array (
                'id' => 83,
                'country_id' => 83,
                'name' => '蒙古',
                'alias' => NULL,
                'full_name' => '蒙古国',
                'locale' => 'zh-cn',
            ),
            83 => 
            array (
                'id' => 84,
                'country_id' => 84,
                'name' => '阿曼',
                'alias' => NULL,
                'full_name' => '阿曼苏丹国',
                'locale' => 'zh-cn',
            ),
            84 => 
            array (
                'id' => 85,
                'country_id' => 85,
                'name' => '印度',
                'alias' => NULL,
                'full_name' => '印度共和国',
                'locale' => 'zh-cn',
            ),
            85 => 
            array (
                'id' => 86,
                'country_id' => 86,
                'name' => '缅甸',
                'alias' => NULL,
                'full_name' => '缅甸联邦共和国',
                'locale' => 'zh-cn',
            ),
            86 => 
            array (
                'id' => 87,
                'country_id' => 87,
                'name' => '马来西亚',
                'alias' => NULL,
                'full_name' => '马来西亚联邦',
                'locale' => 'zh-cn',
            ),
            87 => 
            array (
                'id' => 88,
                'country_id' => 88,
                'name' => '东帝汶',
                'alias' => NULL,
                'full_name' => '东帝汶民主共和国',
                'locale' => 'zh-cn',
            ),
            88 => 
            array (
                'id' => 89,
                'country_id' => 89,
                'name' => '也门',
                'alias' => NULL,
                'full_name' => '也门共和国',
                'locale' => 'zh-cn',
            ),
            89 => 
            array (
                'id' => 90,
                'country_id' => 90,
                'name' => '不丹',
                'alias' => NULL,
                'full_name' => '不丹王国',
                'locale' => 'zh-cn',
            ),
            90 => 
            array (
                'id' => 91,
                'country_id' => 91,
                'name' => '柬埔寨',
                'alias' => NULL,
                'full_name' => '柬埔寨王国',
                'locale' => 'zh-cn',
            ),
            91 => 
            array (
                'id' => 92,
                'country_id' => 92,
                'name' => '巴基斯坦',
                'alias' => NULL,
                'full_name' => '巴基斯坦伊斯兰共和国',
                'locale' => 'zh-cn',
            ),
            92 => 
            array (
                'id' => 93,
                'country_id' => 93,
                'name' => '孟加拉国',
                'alias' => NULL,
                'full_name' => '孟加拉人民共和国',
                'locale' => 'zh-cn',
            ),
            93 => 
            array (
                'id' => 94,
                'country_id' => 94,
                'name' => '沙特阿拉伯',
                'alias' => NULL,
                'full_name' => '沙特阿拉伯王国',
                'locale' => 'zh-cn',
            ),
            94 => 
            array (
                'id' => 95,
                'country_id' => 95,
                'name' => '土库曼斯坦',
                'alias' => NULL,
                'full_name' => '土库曼斯坦',
                'locale' => 'zh-cn',
            ),
            95 => 
            array (
                'id' => 96,
                'country_id' => 96,
                'name' => '卡塔尔',
                'alias' => NULL,
                'full_name' => '卡塔尔国',
                'locale' => 'zh-cn',
            ),
            96 => 
            array (
                'id' => 97,
                'country_id' => 97,
                'name' => '尼泊尔',
                'alias' => NULL,
                'full_name' => '尼泊尔联邦民主共和国',
                'locale' => 'zh-cn',
            ),
            97 => 
            array (
                'id' => 98,
                'country_id' => 98,
                'name' => '哈萨克斯坦',
                'alias' => NULL,
                'full_name' => '哈萨克斯坦共和国',
                'locale' => 'zh-cn',
            ),
            98 => 
            array (
                'id' => 99,
                'country_id' => 99,
                'name' => '菲律宾',
                'alias' => NULL,
                'full_name' => '菲律宾共和国',
                'locale' => 'zh-cn',
            ),
            99 => 
            array (
                'id' => 100,
                'country_id' => 100,
                'name' => '中国台湾',
                'alias' => NULL,
                'full_name' => '中国台湾',
                'locale' => 'zh-cn',
            ),
            100 => 
            array (
                'id' => 101,
                'country_id' => 101,
                'name' => '中国',
                'alias' => NULL,
                'full_name' => '中华人民共和国',
                'locale' => 'zh-cn',
            ),
            101 => 
            array (
                'id' => 102,
                'country_id' => 102,
                'name' => '伊朗',
                'alias' => NULL,
                'full_name' => '伊朗伊斯兰共和国',
                'locale' => 'zh-cn',
            ),
            102 => 
            array (
                'id' => 103,
                'country_id' => 103,
                'name' => '哥斯达黎加',
                'alias' => NULL,
                'full_name' => '哥斯达黎加共和国',
                'locale' => 'zh-cn',
            ),
            103 => 
            array (
                'id' => 104,
                'country_id' => 104,
                'name' => '古巴',
                'alias' => NULL,
                'full_name' => '古巴共和国',
                'locale' => 'zh-cn',
            ),
            104 => 
            array (
                'id' => 105,
                'country_id' => 105,
                'name' => '多米尼加',
                'alias' => NULL,
                'full_name' => '多米尼加共和国',
                'locale' => 'zh-cn',
            ),
            105 => 
            array (
                'id' => 106,
                'country_id' => 106,
                'name' => '墨西哥',
                'alias' => NULL,
                'full_name' => '墨西哥合众国',
                'locale' => 'zh-cn',
            ),
            106 => 
            array (
                'id' => 107,
                'country_id' => 107,
                'name' => '尼加拉瓜',
                'alias' => NULL,
                'full_name' => '尼加拉瓜共和国',
                'locale' => 'zh-cn',
            ),
            107 => 
            array (
                'id' => 108,
                'country_id' => 108,
                'name' => '巴拿马',
                'alias' => NULL,
                'full_name' => '巴拿马共和国',
                'locale' => 'zh-cn',
            ),
            108 => 
            array (
                'id' => 109,
                'country_id' => 109,
                'name' => '荷属安地列斯群岛',
                'alias' => NULL,
                'full_name' => '荷属安地列斯群岛',
                'locale' => 'zh-cn',
            ),
            109 => 
            array (
                'id' => 110,
                'country_id' => 110,
                'name' => '萨尔瓦多',
                'alias' => NULL,
                'full_name' => '萨尔瓦多共和国',
                'locale' => 'zh-cn',
            ),
            110 => 
            array (
                'id' => 111,
                'country_id' => 111,
                'name' => '波多黎各',
                'alias' => NULL,
                'full_name' => '波多黎各自由邦',
                'locale' => 'zh-cn',
            ),
            111 => 
            array (
                'id' => 112,
                'country_id' => 112,
                'name' => '圣文森特和格纳丁斯',
                'alias' => NULL,
                'full_name' => '圣文森特和格林纳丁斯',
                'locale' => 'zh-cn',
            ),
            112 => 
            array (
                'id' => 113,
                'country_id' => 113,
                'name' => '洪都拉斯',
                'alias' => NULL,
                'full_name' => '洪都拉斯共和国',
                'locale' => 'zh-cn',
            ),
            113 => 
            array (
                'id' => 114,
                'country_id' => 114,
                'name' => '危地马拉',
                'alias' => NULL,
                'full_name' => '危地马拉共和国',
                'locale' => 'zh-cn',
            ),
            114 => 
            array (
                'id' => 115,
                'country_id' => 115,
                'name' => '格鲁吉亚',
                'alias' => NULL,
                'full_name' => '格鲁吉亚',
                'locale' => 'zh-cn',
            ),
            115 => 
            array (
                'id' => 116,
                'country_id' => 116,
                'name' => '亚美尼亚',
                'alias' => NULL,
                'full_name' => '亚美尼亚共和国',
                'locale' => 'zh-cn',
            ),
            116 => 
            array (
                'id' => 117,
                'country_id' => 117,
                'name' => '阿塞拜疆',
                'alias' => NULL,
                'full_name' => '阿塞拜疆共和国',
                'locale' => 'zh-cn',
            ),
            117 => 
            array (
                'id' => 118,
                'country_id' => 118,
                'name' => '白俄罗斯',
                'alias' => NULL,
                'full_name' => '白俄罗斯共和国',
                'locale' => 'zh-cn',
            ),
            118 => 
            array (
                'id' => 119,
                'country_id' => 119,
                'name' => '俄罗斯联邦',
                'alias' => NULL,
                'full_name' => '俄罗斯联邦',
                'locale' => 'zh-cn',
            ),
            119 => 
            array (
                'id' => 120,
                'country_id' => 120,
                'name' => '乌克兰',
                'alias' => NULL,
                'full_name' => '乌克兰',
                'locale' => 'zh-cn',
            ),
            120 => 
            array (
                'id' => 121,
                'country_id' => 121,
                'name' => '匈牙利',
                'alias' => NULL,
                'full_name' => '匈牙利',
                'locale' => 'zh-cn',
            ),
            121 => 
            array (
                'id' => 122,
                'country_id' => 122,
                'name' => '冰岛',
                'alias' => NULL,
                'full_name' => '冰岛共和国',
                'locale' => 'zh-cn',
            ),
            122 => 
            array (
                'id' => 123,
                'country_id' => 123,
                'name' => '马耳他',
                'alias' => NULL,
                'full_name' => '马耳他共和国',
                'locale' => 'zh-cn',
            ),
            123 => 
            array (
                'id' => 124,
                'country_id' => 124,
                'name' => '摩纳哥',
                'alias' => NULL,
                'full_name' => '摩纳哥公国',
                'locale' => 'zh-cn',
            ),
            124 => 
            array (
                'id' => 125,
                'country_id' => 125,
                'name' => '挪威',
                'alias' => NULL,
                'full_name' => '挪威王国',
                'locale' => 'zh-cn',
            ),
            125 => 
            array (
                'id' => 126,
                'country_id' => 126,
                'name' => '罗马尼亚',
                'alias' => NULL,
                'full_name' => '罗马尼亚',
                'locale' => 'zh-cn',
            ),
            126 => 
            array (
                'id' => 127,
                'country_id' => 127,
                'name' => '圣马力诺',
                'alias' => NULL,
                'full_name' => '圣马力诺共和国',
                'locale' => 'zh-cn',
            ),
            127 => 
            array (
                'id' => 128,
                'country_id' => 128,
                'name' => '瑞典',
                'alias' => NULL,
                'full_name' => '瑞典王国',
                'locale' => 'zh-cn',
            ),
            128 => 
            array (
                'id' => 129,
                'country_id' => 129,
                'name' => '瑞士',
                'alias' => NULL,
                'full_name' => '瑞士联邦',
                'locale' => 'zh-cn',
            ),
            129 => 
            array (
                'id' => 130,
                'country_id' => 130,
                'name' => '爱沙尼亚',
                'alias' => NULL,
                'full_name' => '爱沙尼亚共和国',
                'locale' => 'zh-cn',
            ),
            130 => 
            array (
                'id' => 131,
                'country_id' => 131,
                'name' => '拉脱维亚',
                'alias' => NULL,
                'full_name' => '拉脱维亚共和国',
                'locale' => 'zh-cn',
            ),
            131 => 
            array (
                'id' => 132,
                'country_id' => 132,
                'name' => '立陶宛',
                'alias' => NULL,
                'full_name' => '立陶宛共和国',
                'locale' => 'zh-cn',
            ),
            132 => 
            array (
                'id' => 133,
                'country_id' => 133,
                'name' => '摩尔多瓦',
                'alias' => NULL,
                'full_name' => '摩尔多瓦共和国',
                'locale' => 'zh-cn',
            ),
            133 => 
            array (
                'id' => 134,
                'country_id' => 134,
                'name' => '土耳其',
                'alias' => NULL,
                'full_name' => '土耳其共和国',
                'locale' => 'zh-cn',
            ),
            134 => 
            array (
                'id' => 135,
                'country_id' => 135,
                'name' => '斯洛文尼亚',
                'alias' => NULL,
                'full_name' => '斯洛文尼亚共和国',
                'locale' => 'zh-cn',
            ),
            135 => 
            array (
                'id' => 136,
                'country_id' => 136,
                'name' => '捷克',
                'alias' => NULL,
                'full_name' => '捷克共和国',
                'locale' => 'zh-cn',
            ),
            136 => 
            array (
                'id' => 137,
                'country_id' => 137,
                'name' => '斯洛伐克',
                'alias' => NULL,
                'full_name' => '斯洛伐克共和国',
                'locale' => 'zh-cn',
            ),
            137 => 
            array (
                'id' => 138,
                'country_id' => 138,
                'name' => '马其顿',
                'alias' => NULL,
                'full_name' => '马其顿共和国',
                'locale' => 'zh-cn',
            ),
            138 => 
            array (
                'id' => 139,
                'country_id' => 139,
                'name' => '波斯尼亚和黑塞哥维那',
                'alias' => NULL,
                'full_name' => '波斯尼亚和黑塞哥维那',
                'locale' => 'zh-cn',
            ),
            139 => 
            array (
                'id' => 140,
                'country_id' => 140,
                'name' => '梵蒂冈城国',
                'alias' => NULL,
                'full_name' => '梵蒂冈城国',
                'locale' => 'zh-cn',
            ),
            140 => 
            array (
                'id' => 141,
                'country_id' => 141,
                'name' => '荷兰',
                'alias' => NULL,
                'full_name' => '尼德兰王国',
                'locale' => 'zh-cn',
            ),
            141 => 
            array (
                'id' => 142,
                'country_id' => 142,
                'name' => '克罗地亚',
                'alias' => NULL,
                'full_name' => '克罗地亚共和国',
                'locale' => 'zh-cn',
            ),
            142 => 
            array (
                'id' => 143,
                'country_id' => 143,
                'name' => '希腊',
                'alias' => NULL,
                'full_name' => '希腊共和国',
                'locale' => 'zh-cn',
            ),
            143 => 
            array (
                'id' => 144,
                'country_id' => 144,
                'name' => '爱尔兰',
                'alias' => NULL,
                'full_name' => '爱尔兰共和国',
                'locale' => 'zh-cn',
            ),
            144 => 
            array (
                'id' => 145,
                'country_id' => 145,
                'name' => '比利时',
                'alias' => NULL,
                'full_name' => '比利时王国',
                'locale' => 'zh-cn',
            ),
            145 => 
            array (
                'id' => 146,
                'country_id' => 146,
                'name' => '塞浦路斯',
                'alias' => NULL,
                'full_name' => '塞浦路斯共和国',
                'locale' => 'zh-cn',
            ),
            146 => 
            array (
                'id' => 147,
                'country_id' => 147,
                'name' => '丹麦',
                'alias' => NULL,
                'full_name' => '丹麦王国',
                'locale' => 'zh-cn',
            ),
            147 => 
            array (
                'id' => 148,
                'country_id' => 148,
                'name' => '英国',
                'alias' => NULL,
                'full_name' => '大不列颠及北爱尔兰联合王国',
                'locale' => 'zh-cn',
            ),
            148 => 
            array (
                'id' => 149,
                'country_id' => 149,
                'name' => '德国',
                'alias' => NULL,
                'full_name' => '德意志联邦共和国',
                'locale' => 'zh-cn',
            ),
            149 => 
            array (
                'id' => 150,
                'country_id' => 150,
                'name' => '法国',
                'alias' => NULL,
                'full_name' => '法兰西共和国',
                'locale' => 'zh-cn',
            ),
            150 => 
            array (
                'id' => 151,
                'country_id' => 151,
                'name' => '意大利',
                'alias' => NULL,
                'full_name' => '意大利共和国',
                'locale' => 'zh-cn',
            ),
            151 => 
            array (
                'id' => 152,
                'country_id' => 152,
                'name' => '卢森堡',
                'alias' => NULL,
                'full_name' => '卢森堡大公国',
                'locale' => 'zh-cn',
            ),
            152 => 
            array (
                'id' => 153,
                'country_id' => 153,
                'name' => '葡萄牙',
                'alias' => NULL,
                'full_name' => '葡萄牙共和国',
                'locale' => 'zh-cn',
            ),
            153 => 
            array (
                'id' => 154,
                'country_id' => 154,
                'name' => '波兰',
                'alias' => NULL,
                'full_name' => '波兰共和国',
                'locale' => 'zh-cn',
            ),
            154 => 
            array (
                'id' => 155,
                'country_id' => 155,
                'name' => '西班牙',
                'alias' => NULL,
                'full_name' => '西班牙王国',
                'locale' => 'zh-cn',
            ),
            155 => 
            array (
                'id' => 156,
                'country_id' => 156,
                'name' => '阿尔巴尼亚',
                'alias' => NULL,
                'full_name' => '阿尔巴尼亚共和国',
                'locale' => 'zh-cn',
            ),
            156 => 
            array (
                'id' => 157,
                'country_id' => 157,
                'name' => '安道尔',
                'alias' => NULL,
                'full_name' => '安道尔公国',
                'locale' => 'zh-cn',
            ),
            157 => 
            array (
                'id' => 158,
                'country_id' => 158,
                'name' => '列支敦士登',
                'alias' => NULL,
                'full_name' => '列支敦士登公国',
                'locale' => 'zh-cn',
            ),
            158 => 
            array (
                'id' => 159,
                'country_id' => 159,
                'name' => '塞黑',
                'alias' => NULL,
                'full_name' => '塞尔维亚和黑山',
                'locale' => 'zh-cn',
            ),
            159 => 
            array (
                'id' => 160,
                'country_id' => 160,
                'name' => '奥地利',
                'alias' => NULL,
                'full_name' => '奥地利共和国',
                'locale' => 'zh-cn',
            ),
            160 => 
            array (
                'id' => 161,
                'country_id' => 161,
                'name' => '保加利亚',
                'alias' => NULL,
                'full_name' => '保加利亚共和国',
                'locale' => 'zh-cn',
            ),
            161 => 
            array (
                'id' => 162,
                'country_id' => 162,
                'name' => '芬兰',
                'alias' => NULL,
                'full_name' => '芬兰共和国',
                'locale' => 'zh-cn',
            ),
            162 => 
            array (
                'id' => 163,
                'country_id' => 163,
                'name' => '直布罗陀',
                'alias' => NULL,
                'full_name' => '直布罗陀',
                'locale' => 'zh-cn',
            ),
            163 => 
            array (
                'id' => 164,
                'country_id' => 164,
                'name' => '多米尼克',
                'alias' => NULL,
                'full_name' => '多米尼克国',
                'locale' => 'zh-cn',
            ),
            164 => 
            array (
                'id' => 165,
                'country_id' => 165,
                'name' => '百慕大',
                'alias' => NULL,
                'full_name' => '百慕大群岛',
                'locale' => 'zh-cn',
            ),
            165 => 
            array (
                'id' => 166,
                'country_id' => 166,
                'name' => '加拿大',
                'alias' => NULL,
                'full_name' => '加拿大',
                'locale' => 'zh-cn',
            ),
            166 => 
            array (
                'id' => 167,
                'country_id' => 167,
                'name' => '美国',
                'alias' => NULL,
                'full_name' => '美利坚合众国',
                'locale' => 'zh-cn',
            ),
            167 => 
            array (
                'id' => 168,
                'country_id' => 168,
                'name' => '格陵兰',
                'alias' => NULL,
                'full_name' => '格陵兰',
                'locale' => 'zh-cn',
            ),
            168 => 
            array (
                'id' => 169,
                'country_id' => 169,
                'name' => '汤加',
                'alias' => NULL,
                'full_name' => '汤加王国',
                'locale' => 'zh-cn',
            ),
            169 => 
            array (
                'id' => 170,
                'country_id' => 170,
                'name' => '澳大利亚',
                'alias' => NULL,
                'full_name' => '澳大利亚联邦',
                'locale' => 'zh-cn',
            ),
            170 => 
            array (
                'id' => 171,
                'country_id' => 171,
                'name' => '库克群岛',
                'alias' => NULL,
                'full_name' => '库克群岛',
                'locale' => 'zh-cn',
            ),
            171 => 
            array (
                'id' => 172,
                'country_id' => 172,
                'name' => '瑙鲁',
                'alias' => NULL,
                'full_name' => '瑙鲁共和国',
                'locale' => 'zh-cn',
            ),
            172 => 
            array (
                'id' => 173,
                'country_id' => 173,
                'name' => '新喀里多尼亚',
                'alias' => NULL,
                'full_name' => '新喀里多尼亚',
                'locale' => 'zh-cn',
            ),
            173 => 
            array (
                'id' => 174,
                'country_id' => 174,
                'name' => '瓦努阿图',
                'alias' => NULL,
                'full_name' => '瓦努阿图共和国',
                'locale' => 'zh-cn',
            ),
            174 => 
            array (
                'id' => 175,
                'country_id' => 175,
                'name' => '所罗门群岛',
                'alias' => NULL,
                'full_name' => '所罗门群岛',
                'locale' => 'zh-cn',
            ),
            175 => 
            array (
                'id' => 176,
                'country_id' => 176,
                'name' => '萨摩亚',
                'alias' => NULL,
                'full_name' => '萨摩亚独立国',
                'locale' => 'zh-cn',
            ),
            176 => 
            array (
                'id' => 177,
                'country_id' => 177,
                'name' => '图瓦卢',
                'alias' => NULL,
                'full_name' => '图瓦卢',
                'locale' => 'zh-cn',
            ),
            177 => 
            array (
                'id' => 178,
                'country_id' => 178,
                'name' => '密克罗尼西亚联邦',
                'alias' => NULL,
                'full_name' => '密克罗尼西亚联邦',
                'locale' => 'zh-cn',
            ),
            178 => 
            array (
                'id' => 179,
                'country_id' => 179,
                'name' => '马绍尔群岛',
                'alias' => NULL,
                'full_name' => '马绍尔群岛共和国',
                'locale' => 'zh-cn',
            ),
            179 => 
            array (
                'id' => 180,
                'country_id' => 180,
                'name' => '基里巴斯',
                'alias' => NULL,
                'full_name' => '基里巴斯共和国',
                'locale' => 'zh-cn',
            ),
            180 => 
            array (
                'id' => 181,
                'country_id' => 181,
                'name' => '法属玻利尼西亚',
                'alias' => NULL,
                'full_name' => '法属波利尼西亚',
                'locale' => 'zh-cn',
            ),
            181 => 
            array (
                'id' => 182,
                'country_id' => 182,
                'name' => '新西兰',
                'alias' => NULL,
                'full_name' => '新西兰',
                'locale' => 'zh-cn',
            ),
            182 => 
            array (
                'id' => 183,
                'country_id' => 183,
                'name' => '斐济',
                'alias' => NULL,
                'full_name' => '斐济共和国',
                'locale' => 'zh-cn',
            ),
            183 => 
            array (
                'id' => 184,
                'country_id' => 184,
                'name' => '巴布亚新几内亚',
                'alias' => NULL,
                'full_name' => '巴布亚新几内亚独立国',
                'locale' => 'zh-cn',
            ),
            184 => 
            array (
                'id' => 185,
                'country_id' => 185,
                'name' => '帕劳',
                'alias' => NULL,
                'full_name' => '帕劳共和国',
                'locale' => 'zh-cn',
            ),
            185 => 
            array (
                'id' => 186,
                'country_id' => 186,
                'name' => '智利',
                'alias' => NULL,
                'full_name' => '智利共和国',
                'locale' => 'zh-cn',
            ),
            186 => 
            array (
                'id' => 187,
                'country_id' => 187,
                'name' => '哥伦比亚',
                'alias' => NULL,
                'full_name' => '哥伦比亚共和国',
                'locale' => 'zh-cn',
            ),
            187 => 
            array (
                'id' => 188,
                'country_id' => 188,
                'name' => '圭亚那',
                'alias' => NULL,
                'full_name' => '圭亚那共和国',
                'locale' => 'zh-cn',
            ),
            188 => 
            array (
                'id' => 189,
                'country_id' => 189,
                'name' => '巴拉圭',
                'alias' => NULL,
                'full_name' => '巴拉圭共和国',
                'locale' => 'zh-cn',
            ),
            189 => 
            array (
                'id' => 190,
                'country_id' => 190,
                'name' => '秘鲁',
                'alias' => NULL,
                'full_name' => '秘鲁共和国',
                'locale' => 'zh-cn',
            ),
            190 => 
            array (
                'id' => 191,
                'country_id' => 191,
                'name' => '苏里南',
                'alias' => NULL,
                'full_name' => '苏里南共和国',
                'locale' => 'zh-cn',
            ),
            191 => 
            array (
                'id' => 192,
                'country_id' => 192,
                'name' => '委内瑞拉',
                'alias' => NULL,
                'full_name' => '委内瑞拉玻利瓦尔共和国',
                'locale' => 'zh-cn',
            ),
            192 => 
            array (
                'id' => 193,
                'country_id' => 193,
                'name' => '乌拉圭',
                'alias' => NULL,
                'full_name' => '乌拉圭东岸共和国',
                'locale' => 'zh-cn',
            ),
            193 => 
            array (
                'id' => 194,
                'country_id' => 194,
                'name' => '厄瓜多尔',
                'alias' => NULL,
                'full_name' => '厄瓜多尔共和国',
                'locale' => 'zh-cn',
            ),
            194 => 
            array (
                'id' => 195,
                'country_id' => 195,
                'name' => '安提瓜和巴布达',
                'alias' => NULL,
                'full_name' => '安提瓜和巴布达',
                'locale' => 'zh-cn',
            ),
            195 => 
            array (
                'id' => 196,
                'country_id' => 196,
                'name' => '阿鲁巴岛',
                'alias' => NULL,
                'full_name' => '阿鲁巴',
                'locale' => 'zh-cn',
            ),
            196 => 
            array (
                'id' => 197,
                'country_id' => 197,
                'name' => '巴哈马',
                'alias' => NULL,
                'full_name' => '巴哈马国',
                'locale' => 'zh-cn',
            ),
            197 => 
            array (
                'id' => 198,
                'country_id' => 198,
                'name' => '巴巴多斯',
                'alias' => NULL,
                'full_name' => '巴巴多斯',
                'locale' => 'zh-cn',
            ),
            198 => 
            array (
                'id' => 199,
                'country_id' => 199,
                'name' => '开曼群岛',
                'alias' => NULL,
                'full_name' => '开曼群岛',
                'locale' => 'zh-cn',
            ),
            199 => 
            array (
                'id' => 200,
                'country_id' => 200,
                'name' => '格林纳达',
                'alias' => NULL,
                'full_name' => '格林纳达',
                'locale' => 'zh-cn',
            ),
            200 => 
            array (
                'id' => 201,
                'country_id' => 201,
                'name' => '海地',
                'alias' => NULL,
                'full_name' => '海地共和国',
                'locale' => 'zh-cn',
            ),
            201 => 
            array (
                'id' => 202,
                'country_id' => 202,
                'name' => '牙买加',
                'alias' => NULL,
                'full_name' => '牙买加',
                'locale' => 'zh-cn',
            ),
            202 => 
            array (
                'id' => 203,
                'country_id' => 203,
                'name' => '马提尼克',
                'alias' => NULL,
                'full_name' => '马提尼克岛',
                'locale' => 'zh-cn',
            ),
            203 => 
            array (
                'id' => 204,
                'country_id' => 204,
                'name' => '蒙特塞拉特',
                'alias' => NULL,
                'full_name' => '蒙特塞拉特岛',
                'locale' => 'zh-cn',
            ),
            204 => 
            array (
                'id' => 205,
                'country_id' => 205,
                'name' => '特立尼达和多巴哥',
                'alias' => NULL,
                'full_name' => '特立尼达和多巴哥共和国',
                'locale' => 'zh-cn',
            ),
            205 => 
            array (
                'id' => 206,
                'country_id' => 206,
                'name' => '圣其茨-尼维斯',
                'alias' => NULL,
                'full_name' => '圣基茨和尼维斯联邦',
                'locale' => 'zh-cn',
            ),
            206 => 
            array (
                'id' => 207,
                'country_id' => 207,
                'name' => '圣皮埃尔和密克隆',
                'alias' => NULL,
                'full_name' => '圣皮埃尔和密克隆群岛',
                'locale' => 'zh-cn',
            ),
            207 => 
            array (
                'id' => 208,
                'country_id' => 208,
                'name' => '阿根廷',
                'alias' => NULL,
                'full_name' => '阿根廷共和国',
                'locale' => 'zh-cn',
            ),
            208 => 
            array (
                'id' => 209,
                'country_id' => 209,
                'name' => '伯利兹',
                'alias' => NULL,
                'full_name' => '伯利兹',
                'locale' => 'zh-cn',
            ),
            209 => 
            array (
                'id' => 210,
                'country_id' => 210,
                'name' => '玻利维亚',
                'alias' => NULL,
                'full_name' => '玻利维亚共和国',
                'locale' => 'zh-cn',
            ),
            210 => 
            array (
                'id' => 211,
                'country_id' => 211,
                'name' => '巴西',
                'alias' => NULL,
                'full_name' => '巴西联邦共和国',
                'locale' => 'zh-cn',
            ),
            211 => 
            array (
                'id' => 212,
                'country_id' => 212,
                'name' => '美属萨摩亚群岛',
                'alias' => NULL,
                'full_name' => '美国美属萨摩亚群岛',
                'locale' => 'zh-cn',
            ),
            212 => 
            array (
                'id' => 213,
                'country_id' => 213,
                'name' => '奥兰群岛',
                'alias' => NULL,
                'full_name' => '芬兰奥兰群岛',
                'locale' => 'zh-cn',
            ),
            213 => 
            array (
                'id' => 214,
                'country_id' => 214,
                'name' => '圣巴托洛缪岛',
                'alias' => NULL,
                'full_name' => '法国圣巴托洛缪岛',
                'locale' => 'zh-cn',
            ),
            214 => 
            array (
                'id' => 215,
                'country_id' => 215,
                'name' => '博内尔岛、圣尤斯特歇斯岛和萨巴岛',
                'alias' => NULL,
                'full_name' => '荷兰博内尔岛、圣尤斯特歇斯岛和萨巴岛',
                'locale' => 'zh-cn',
            ),
            215 => 
            array (
                'id' => 216,
                'country_id' => 216,
                'name' => '布韦岛',
                'alias' => NULL,
                'full_name' => '挪威布韦岛',
                'locale' => 'zh-cn',
            ),
            216 => 
            array (
                'id' => 217,
                'country_id' => 217,
                'name' => '科科斯群岛',
                'alias' => NULL,
                'full_name' => '澳大利亚科科斯群岛',
                'locale' => 'zh-cn',
            ),
            217 => 
            array (
                'id' => 218,
                'country_id' => 218,
                'name' => '库拉索',
                'alias' => NULL,
                'full_name' => '荷兰库拉索',
                'locale' => 'zh-cn',
            ),
            218 => 
            array (
                'id' => 219,
                'country_id' => 219,
                'name' => '圣诞岛',
                'alias' => NULL,
                'full_name' => '澳大利亚圣诞岛',
                'locale' => 'zh-cn',
            ),
            219 => 
            array (
                'id' => 220,
                'country_id' => 220,
            'name' => '福克兰群岛(马尔维纳斯)',
                'alias' => NULL,
            'full_name' => '英国福克兰群岛(马尔维纳斯)',
                'locale' => 'zh-cn',
            ),
            220 => 
            array (
                'id' => 221,
                'country_id' => 221,
                'name' => '法罗群岛',
                'alias' => NULL,
                'full_name' => '丹麦法罗群岛',
                'locale' => 'zh-cn',
            ),
            221 => 
            array (
                'id' => 222,
                'country_id' => 222,
                'name' => '法属圭亚那',
                'alias' => NULL,
                'full_name' => '法国法属圭亚那',
                'locale' => 'zh-cn',
            ),
            222 => 
            array (
                'id' => 223,
                'country_id' => 223,
                'name' => '根西岛',
                'alias' => NULL,
                'full_name' => '英国根西岛',
                'locale' => 'zh-cn',
            ),
            223 => 
            array (
                'id' => 224,
                'country_id' => 224,
                'name' => '南乔治亚岛和南桑威奇群岛',
                'alias' => NULL,
                'full_name' => '英国南乔治亚岛和南桑威奇群岛',
                'locale' => 'zh-cn',
            ),
            224 => 
            array (
                'id' => 225,
                'country_id' => 225,
                'name' => '关岛',
                'alias' => NULL,
                'full_name' => '美国关岛',
                'locale' => 'zh-cn',
            ),
            225 => 
            array (
                'id' => 226,
                'country_id' => 226,
                'name' => '赫德岛和麦克唐纳群岛',
                'alias' => NULL,
                'full_name' => '澳大利亚赫德岛和麦克唐纳群岛',
                'locale' => 'zh-cn',
            ),
            226 => 
            array (
                'id' => 227,
                'country_id' => 227,
                'name' => '英属马恩岛',
                'alias' => NULL,
                'full_name' => '英国英属马恩岛',
                'locale' => 'zh-cn',
            ),
            227 => 
            array (
                'id' => 228,
                'country_id' => 228,
                'name' => '英属印度洋领地',
                'alias' => NULL,
                'full_name' => '英国英属印度洋领地',
                'locale' => 'zh-cn',
            ),
            228 => 
            array (
                'id' => 229,
                'country_id' => 229,
                'name' => '泽西岛',
                'alias' => NULL,
                'full_name' => '英国泽西岛',
                'locale' => 'zh-cn',
            ),
            229 => 
            array (
                'id' => 230,
                'country_id' => 230,
                'name' => '圣卢西亚',
                'alias' => NULL,
                'full_name' => '英国圣卢西亚',
                'locale' => 'zh-cn',
            ),
            230 => 
            array (
                'id' => 231,
                'country_id' => 231,
                'name' => '圣马丁岛',
                'alias' => NULL,
                'full_name' => '法国圣马丁岛',
                'locale' => 'zh-cn',
            ),
            231 => 
            array (
                'id' => 232,
                'country_id' => 232,
                'name' => '北马里亚纳群岛自由邦',
                'alias' => NULL,
                'full_name' => '美国北马里亚纳群岛自由邦',
                'locale' => 'zh-cn',
            ),
            232 => 
            array (
                'id' => 233,
                'country_id' => 233,
                'name' => '诺福克岛',
                'alias' => NULL,
                'full_name' => '美国诺福克岛',
                'locale' => 'zh-cn',
            ),
            233 => 
            array (
                'id' => 234,
                'country_id' => 234,
                'name' => '纽埃',
                'alias' => NULL,
                'full_name' => '新西兰纽埃',
                'locale' => 'zh-cn',
            ),
            234 => 
            array (
                'id' => 235,
                'country_id' => 235,
                'name' => '圣皮埃尔和密克隆群岛',
                'alias' => NULL,
                'full_name' => '法国圣皮埃尔和密克隆群岛',
                'locale' => 'zh-cn',
            ),
            235 => 
            array (
                'id' => 236,
                'country_id' => 236,
                'name' => '皮特凯恩群岛',
                'alias' => NULL,
                'full_name' => '英国皮特凯恩群岛',
                'locale' => 'zh-cn',
            ),
            236 => 
            array (
                'id' => 237,
                'country_id' => 237,
                'name' => '圣赫勒拿岛',
                'alias' => NULL,
                'full_name' => '英国圣赫勒拿岛',
                'locale' => 'zh-cn',
            ),
            237 => 
            array (
                'id' => 238,
                'country_id' => 238,
                'name' => '斯瓦尔巴群岛',
                'alias' => NULL,
                'full_name' => '挪威斯瓦尔巴群岛',
                'locale' => 'zh-cn',
            ),
            238 => 
            array (
                'id' => 239,
                'country_id' => 239,
                'name' => '圣马丁岛',
                'alias' => NULL,
                'full_name' => '荷兰圣马丁岛',
                'locale' => 'zh-cn',
            ),
            239 => 
            array (
                'id' => 240,
                'country_id' => 240,
                'name' => '特克斯和凯科斯群岛',
                'alias' => NULL,
                'full_name' => '英国特克斯和凯科斯群岛',
                'locale' => 'zh-cn',
            ),
            240 => 
            array (
                'id' => 241,
                'country_id' => 241,
                'name' => '法属南部领地',
                'alias' => NULL,
                'full_name' => '法国法属南部领地',
                'locale' => 'zh-cn',
            ),
            241 => 
            array (
                'id' => 242,
                'country_id' => 242,
                'name' => '托克劳群岛',
                'alias' => NULL,
                'full_name' => '新西兰托克劳群岛',
                'locale' => 'zh-cn',
            ),
            242 => 
            array (
                'id' => 243,
                'country_id' => 243,
                'name' => '美国本土外小岛屿',
                'alias' => NULL,
                'full_name' => '美国本土外小岛屿',
                'locale' => 'zh-cn',
            ),
            243 => 
            array (
                'id' => 244,
                'country_id' => 244,
                'name' => '英属维尔京群岛',
                'alias' => NULL,
                'full_name' => '英国英属维尔京群岛',
                'locale' => 'zh-cn',
            ),
            244 => 
            array (
                'id' => 245,
                'country_id' => 245,
                'name' => '美属维尔京群岛',
                'alias' => NULL,
                'full_name' => '美国美属维尔京群岛',
                'locale' => 'zh-cn',
            ),
            245 => 
            array (
                'id' => 246,
                'country_id' => 246,
                'name' => '瓦利斯和富图纳群岛',
                'alias' => NULL,
                'full_name' => '法国瓦利斯和富图纳群岛',
                'locale' => 'zh-cn',
            ),
            246 => 
            array (
                'id' => 247,
                'country_id' => 247,
                'name' => '科索沃',
                'alias' => NULL,
                'full_name' => '科索沃共和国',
                'locale' => 'zh-cn',
            ),
        ));
        
        
    }
}