<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorldDivisionsLocaleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('world_divisions_locale')->truncate();
        
        \DB::table('world_divisions_locale')->insert(array (
            0 => 
            array (
                'id' => 1,
                'division_id' => 1,
                'name' => '庆尚北道',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            1 => 
            array (
                'id' => 2,
                'division_id' => 2,
                'name' => '庆尚南道',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            2 => 
            array (
                'id' => 3,
                'division_id' => 3,
                'name' => '大邱',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            3 => 
            array (
                'id' => 4,
                'division_id' => 4,
                'name' => '江原道',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            4 => 
            array (
                'id' => 5,
                'division_id' => 5,
                'name' => '京畿道',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            5 => 
            array (
                'id' => 6,
                'division_id' => 6,
                'name' => '全罗北道',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            6 => 
            array (
                'id' => 7,
                'division_id' => 7,
                'name' => '全罗南道',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            7 => 
            array (
                'id' => 8,
                'division_id' => 8,
                'name' => '忠清北道',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            8 => 
            array (
                'id' => 9,
                'division_id' => 9,
                'name' => '忠清南道',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            9 => 
            array (
                'id' => 10,
                'division_id' => 10,
                'name' => '柔佛',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            10 => 
            array (
                'id' => 11,
                'division_id' => 11,
                'name' => '吉打',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            11 => 
            array (
                'id' => 12,
                'division_id' => 12,
                'name' => '吉兰丹',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            12 => 
            array (
                'id' => 13,
                'division_id' => 13,
                'name' => '吉隆坡',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            13 => 
            array (
                'id' => 14,
                'division_id' => 14,
                'name' => '纳闽',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            14 => 
            array (
                'id' => 15,
                'division_id' => 15,
                'name' => '马六甲',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            15 => 
            array (
                'id' => 16,
                'division_id' => 16,
                'name' => '森美兰',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            16 => 
            array (
                'id' => 17,
                'division_id' => 17,
                'name' => '彭亨',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            17 => 
            array (
                'id' => 18,
                'division_id' => 18,
                'name' => '霹雳',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            18 => 
            array (
                'id' => 19,
                'division_id' => 19,
                'name' => '玻璃市',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            19 => 
            array (
                'id' => 20,
                'division_id' => 20,
                'name' => '槟榔屿',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            20 => 
            array (
                'id' => 21,
                'division_id' => 21,
                'name' => '沙巴',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            21 => 
            array (
                'id' => 22,
                'division_id' => 22,
                'name' => '沙捞越',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            22 => 
            array (
                'id' => 23,
                'division_id' => 23,
                'name' => '雪兰莪',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            23 => 
            array (
                'id' => 24,
                'division_id' => 24,
                'name' => '丁加奴',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            24 => 
            array (
                'id' => 25,
                'division_id' => 25,
                'name' => '安徽',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            25 => 
            array (
                'id' => 26,
                'division_id' => 26,
                'name' => '北京',
                'abbr' => '京',
                'alias' => NULL,
                'full_name' => '北京市',
                'locale' => 'zh-cn',
            ),
            26 => 
            array (
                'id' => 27,
                'division_id' => 27,
                'name' => '重庆',
                'abbr' => '渝',
                'alias' => NULL,
                'full_name' => '重庆市',
                'locale' => 'zh-cn',
            ),
            27 => 
            array (
                'id' => 28,
                'division_id' => 28,
                'name' => '福建',
                'abbr' => '闽',
                'alias' => NULL,
                'full_name' => '福建省',
                'locale' => 'zh-cn',
            ),
            28 => 
            array (
                'id' => 29,
                'division_id' => 29,
                'name' => '甘肃',
                'abbr' => '甘',
                'alias' => '陇',
                'full_name' => '甘肃省',
                'locale' => 'zh-cn',
            ),
            29 => 
            array (
                'id' => 30,
                'division_id' => 30,
                'name' => '广东',
                'abbr' => '粤',
                'alias' => NULL,
                'full_name' => '广东省',
                'locale' => 'zh-cn',
            ),
            30 => 
            array (
                'id' => 31,
                'division_id' => 31,
                'name' => '广西',
                'abbr' => '桂',
                'alias' => NULL,
                'full_name' => '广西壮族自治区',
                'locale' => 'zh-cn',
            ),
            31 => 
            array (
                'id' => 32,
                'division_id' => 32,
                'name' => '贵州',
                'abbr' => '贵',
                'alias' => '黔',
                'full_name' => '贵州市',
                'locale' => 'zh-cn',
            ),
            32 => 
            array (
                'id' => 33,
                'division_id' => 33,
                'name' => '海南',
                'abbr' => '琼',
                'alias' => NULL,
                'full_name' => '河南省',
                'locale' => 'zh-cn',
            ),
            33 => 
            array (
                'id' => 34,
                'division_id' => 34,
                'name' => '河北',
                'abbr' => '冀',
                'alias' => NULL,
                'full_name' => '河北省',
                'locale' => 'zh-cn',
            ),
            34 => 
            array (
                'id' => 35,
                'division_id' => 35,
                'name' => '黑龙江',
                'abbr' => '黑',
                'alias' => NULL,
                'full_name' => '黑龙江省',
                'locale' => 'zh-cn',
            ),
            35 => 
            array (
                'id' => 36,
                'division_id' => 36,
                'name' => '河南',
                'abbr' => '豫',
                'alias' => NULL,
                'full_name' => '河南省',
                'locale' => 'zh-cn',
            ),
            36 => 
            array (
                'id' => 37,
                'division_id' => 37,
                'name' => '湖北',
                'abbr' => '鄂',
                'alias' => NULL,
                'full_name' => '湖北省',
                'locale' => 'zh-cn',
            ),
            37 => 
            array (
                'id' => 38,
                'division_id' => 38,
                'name' => '湖南',
                'abbr' => '湘',
                'alias' => NULL,
                'full_name' => '湖南省',
                'locale' => 'zh-cn',
            ),
            38 => 
            array (
                'id' => 39,
                'division_id' => 39,
                'name' => '内蒙古',
                'abbr' => '蒙',
                'alias' => NULL,
                'full_name' => '内蒙古自治区',
                'locale' => 'zh-cn',
            ),
            39 => 
            array (
                'id' => 40,
                'division_id' => 40,
                'name' => '江苏',
                'abbr' => '苏',
                'alias' => NULL,
                'full_name' => '江苏省',
                'locale' => 'zh-cn',
            ),
            40 => 
            array (
                'id' => 41,
                'division_id' => 41,
                'name' => '江西',
                'abbr' => '赣',
                'alias' => NULL,
                'full_name' => '江西省',
                'locale' => 'zh-cn',
            ),
            41 => 
            array (
                'id' => 42,
                'division_id' => 42,
                'name' => '吉林',
                'abbr' => '吉',
                'alias' => NULL,
                'full_name' => '吉林省',
                'locale' => 'zh-cn',
            ),
            42 => 
            array (
                'id' => 43,
                'division_id' => 43,
                'name' => '辽宁',
                'abbr' => '辽',
                'alias' => NULL,
                'full_name' => '辽宁省',
                'locale' => 'zh-cn',
            ),
            43 => 
            array (
                'id' => 44,
                'division_id' => 44,
                'name' => '宁夏',
                'abbr' => '宁',
                'alias' => NULL,
                'full_name' => '宁夏回族自治区',
                'locale' => 'zh-cn',
            ),
            44 => 
            array (
                'id' => 45,
                'division_id' => 45,
                'name' => '青海',
                'abbr' => '青',
                'alias' => NULL,
                'full_name' => '青海省',
                'locale' => 'zh-cn',
            ),
            45 => 
            array (
                'id' => 46,
                'division_id' => 46,
                'name' => '陕西',
                'abbr' => '陕',
                'alias' => '秦',
                'full_name' => '陕西省',
                'locale' => 'zh-cn',
            ),
            46 => 
            array (
                'id' => 47,
                'division_id' => 47,
                'name' => '山东',
                'abbr' => '鲁',
                'alias' => NULL,
                'full_name' => '山东省',
                'locale' => 'zh-cn',
            ),
            47 => 
            array (
                'id' => 48,
                'division_id' => 48,
                'name' => '上海',
                'abbr' => '沪',
                'alias' => NULL,
                'full_name' => '上海市',
                'locale' => 'zh-cn',
            ),
            48 => 
            array (
                'id' => 49,
                'division_id' => 49,
                'name' => '山西',
                'abbr' => '晋',
                'alias' => NULL,
                'full_name' => '山西省',
                'locale' => 'zh-cn',
            ),
            49 => 
            array (
                'id' => 50,
                'division_id' => 50,
                'name' => '四川',
                'abbr' => '川',
                'alias' => NULL,
                'full_name' => '四川省',
                'locale' => 'zh-cn',
            ),
            50 => 
            array (
                'id' => 51,
                'division_id' => 51,
                'name' => '台湾',
                'abbr' => '台',
                'alias' => NULL,
                'full_name' => '台湾省',
                'locale' => 'zh-cn',
            ),
            51 => 
            array (
                'id' => 52,
                'division_id' => 52,
                'name' => '天津',
                'abbr' => '津',
                'alias' => NULL,
                'full_name' => '天津市',
                'locale' => 'zh-cn',
            ),
            52 => 
            array (
                'id' => 53,
                'division_id' => 53,
                'name' => '西藏',
                'abbr' => '藏',
                'alias' => NULL,
                'full_name' => '西藏自治区',
                'locale' => 'zh-cn',
            ),
            53 => 
            array (
                'id' => 54,
                'division_id' => 54,
                'name' => '新疆',
                'abbr' => '新',
                'alias' => NULL,
                'full_name' => '新疆维吾尔自治区',
                'locale' => 'zh-cn',
            ),
            54 => 
            array (
                'id' => 55,
                'division_id' => 55,
                'name' => '云南',
                'abbr' => '云',
                'alias' => '滇',
                'full_name' => '云南省',
                'locale' => 'zh-cn',
            ),
            55 => 
            array (
                'id' => 56,
                'division_id' => 56,
                'name' => '浙江',
                'abbr' => '浙',
                'alias' => NULL,
                'full_name' => '浙江省',
                'locale' => 'zh-cn',
            ),
            56 => 
            array (
                'id' => 57,
                'division_id' => 57,
                'name' => '英格兰',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            57 => 
            array (
                'id' => 58,
                'division_id' => 58,
                'name' => '北爱尔兰',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            58 => 
            array (
                'id' => 59,
                'division_id' => 59,
                'name' => '苏格兰',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            59 => 
            array (
                'id' => 60,
                'division_id' => 60,
                'name' => '威尔士',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            60 => 
            array (
                'id' => 61,
                'division_id' => 61,
                'name' => '阿拉巴马',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            61 => 
            array (
                'id' => 62,
                'division_id' => 62,
                'name' => '阿拉斯加',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            62 => 
            array (
                'id' => 63,
                'division_id' => 63,
                'name' => '亚利桑那',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            63 => 
            array (
                'id' => 64,
                'division_id' => 64,
                'name' => '阿肯色',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            64 => 
            array (
                'id' => 65,
                'division_id' => 65,
                'name' => '加利福尼亚',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            65 => 
            array (
                'id' => 66,
                'division_id' => 66,
                'name' => '科罗拉多',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            66 => 
            array (
                'id' => 67,
                'division_id' => 67,
                'name' => '康涅狄格',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            67 => 
            array (
                'id' => 68,
                'division_id' => 68,
                'name' => '特拉华',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            68 => 
            array (
                'id' => 69,
                'division_id' => 69,
                'name' => '哥伦比亚特区',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            69 => 
            array (
                'id' => 70,
                'division_id' => 70,
                'name' => '佛罗里达',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            70 => 
            array (
                'id' => 71,
                'division_id' => 71,
                'name' => '佐治亚',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            71 => 
            array (
                'id' => 72,
                'division_id' => 72,
                'name' => '夏威夷',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            72 => 
            array (
                'id' => 73,
                'division_id' => 73,
                'name' => '爱达荷',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            73 => 
            array (
                'id' => 74,
                'division_id' => 74,
                'name' => '伊利诺斯',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            74 => 
            array (
                'id' => 75,
                'division_id' => 75,
                'name' => '印第安那',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            75 => 
            array (
                'id' => 76,
                'division_id' => 76,
                'name' => '爱荷华',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            76 => 
            array (
                'id' => 77,
                'division_id' => 77,
                'name' => '堪萨斯',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            77 => 
            array (
                'id' => 78,
                'division_id' => 78,
                'name' => '肯塔基',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            78 => 
            array (
                'id' => 79,
                'division_id' => 79,
                'name' => '路易斯安那',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            79 => 
            array (
                'id' => 80,
                'division_id' => 80,
                'name' => '缅因',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            80 => 
            array (
                'id' => 81,
                'division_id' => 81,
                'name' => '马里兰',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            81 => 
            array (
                'id' => 82,
                'division_id' => 82,
                'name' => '马萨诸塞',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            82 => 
            array (
                'id' => 83,
                'division_id' => 83,
                'name' => '密歇根',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            83 => 
            array (
                'id' => 84,
                'division_id' => 84,
                'name' => '明尼苏达',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            84 => 
            array (
                'id' => 85,
                'division_id' => 85,
                'name' => '密西西比',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            85 => 
            array (
                'id' => 86,
                'division_id' => 86,
                'name' => '密苏里',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            86 => 
            array (
                'id' => 87,
                'division_id' => 87,
                'name' => '蒙大拿',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            87 => 
            array (
                'id' => 88,
                'division_id' => 88,
                'name' => '内布拉斯加',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            88 => 
            array (
                'id' => 89,
                'division_id' => 89,
                'name' => '内华达',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            89 => 
            array (
                'id' => 90,
                'division_id' => 90,
                'name' => '新罕布什尔',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            90 => 
            array (
                'id' => 91,
                'division_id' => 91,
                'name' => '新泽西',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            91 => 
            array (
                'id' => 92,
                'division_id' => 92,
                'name' => '新墨西哥',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            92 => 
            array (
                'id' => 93,
                'division_id' => 93,
                'name' => '纽约',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            93 => 
            array (
                'id' => 94,
                'division_id' => 94,
                'name' => '北卡罗来纳',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            94 => 
            array (
                'id' => 95,
                'division_id' => 95,
                'name' => '北达科他',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            95 => 
            array (
                'id' => 96,
                'division_id' => 96,
                'name' => '俄亥俄',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            96 => 
            array (
                'id' => 97,
                'division_id' => 97,
                'name' => '俄克拉荷马',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            97 => 
            array (
                'id' => 98,
                'division_id' => 98,
                'name' => '俄勒冈',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            98 => 
            array (
                'id' => 99,
                'division_id' => 99,
                'name' => '宾夕法尼亚',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            99 => 
            array (
                'id' => 100,
                'division_id' => 100,
                'name' => '罗德岛',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            100 => 
            array (
                'id' => 101,
                'division_id' => 101,
                'name' => '南卡罗来纳',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            101 => 
            array (
                'id' => 102,
                'division_id' => 102,
                'name' => '南达科他',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            102 => 
            array (
                'id' => 103,
                'division_id' => 103,
                'name' => '田纳西',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            103 => 
            array (
                'id' => 104,
                'division_id' => 104,
                'name' => '德克萨斯',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            104 => 
            array (
                'id' => 105,
                'division_id' => 105,
                'name' => '犹他',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            105 => 
            array (
                'id' => 106,
                'division_id' => 106,
                'name' => '佛蒙特',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            106 => 
            array (
                'id' => 107,
                'division_id' => 107,
                'name' => '维吉尼亚',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            107 => 
            array (
                'id' => 108,
                'division_id' => 108,
                'name' => '华盛顿',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            108 => 
            array (
                'id' => 109,
                'division_id' => 109,
                'name' => '西佛吉尼亚',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            109 => 
            array (
                'id' => 110,
                'division_id' => 110,
                'name' => '威斯康星',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            110 => 
            array (
                'id' => 111,
                'division_id' => 111,
                'name' => '怀俄明',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            111 => 
            array (
                'id' => 112,
                'division_id' => 112,
                'name' => '堪培拉',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            112 => 
            array (
                'id' => 113,
                'division_id' => 113,
                'name' => '新南威尔士',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            113 => 
            array (
                'id' => 114,
                'division_id' => 114,
                'name' => '北部地区',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            114 => 
            array (
                'id' => 115,
                'division_id' => 115,
                'name' => '昆士兰',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            115 => 
            array (
                'id' => 116,
                'division_id' => 116,
                'name' => '南澳大利亚',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            116 => 
            array (
                'id' => 117,
                'division_id' => 117,
                'name' => '塔斯马尼亚',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            117 => 
            array (
                'id' => 118,
                'division_id' => 118,
                'name' => '维多利亚',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            118 => 
            array (
                'id' => 119,
                'division_id' => 119,
                'name' => '西澳大利亚',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'zh-cn',
            ),
            119 => 
            array (
                'id' => 120,
                'division_id' => 121,
                'name' => '香港',
                'abbr' => '港',
                'alias' => NULL,
                'full_name' => '香港特别行政区',
                'locale' => 'zh-cn',
            ),
            120 => 
            array (
                'id' => 121,
                'division_id' => 122,
                'name' => '澳门',
                'abbr' => '澳',
                'alias' => NULL,
                'full_name' => '澳门特别行政区',
                'locale' => 'zh-cn',
            ),
            121 => 
            array (
                'id' => 122,
                'division_id' => 1,
                'name' => 'Chungcheongbuk-do',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            122 => 
            array (
                'id' => 123,
                'division_id' => 2,
                'name' => 'Chungcheongnam-do',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            123 => 
            array (
                'id' => 124,
                'division_id' => 3,
                'name' => 'Daegu',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            124 => 
            array (
                'id' => 125,
                'division_id' => 4,
                'name' => 'Gangwon-do',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            125 => 
            array (
                'id' => 126,
                'division_id' => 5,
                'name' => 'Gyeonggi-do',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            126 => 
            array (
                'id' => 127,
                'division_id' => 6,
                'name' => 'Gyeongsangbuk-do',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            127 => 
            array (
                'id' => 128,
                'division_id' => 7,
                'name' => 'Gyeongsangnam-do',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            128 => 
            array (
                'id' => 129,
                'division_id' => 8,
                'name' => 'Jeollabuk-do',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            129 => 
            array (
                'id' => 130,
                'division_id' => 9,
                'name' => 'Jeollanam-do',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            130 => 
            array (
                'id' => 131,
                'division_id' => 10,
                'name' => 'Johor',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            131 => 
            array (
                'id' => 132,
                'division_id' => 11,
                'name' => 'Kedah',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            132 => 
            array (
                'id' => 133,
                'division_id' => 12,
                'name' => 'Kelantan',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            133 => 
            array (
                'id' => 134,
                'division_id' => 13,
                'name' => 'Kuala Lumpur',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            134 => 
            array (
                'id' => 135,
                'division_id' => 14,
                'name' => 'Labuan',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            135 => 
            array (
                'id' => 136,
                'division_id' => 15,
                'name' => 'Malacca',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            136 => 
            array (
                'id' => 137,
                'division_id' => 16,
                'name' => 'Negeri Sembilan',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            137 => 
            array (
                'id' => 138,
                'division_id' => 17,
                'name' => 'Pahang',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            138 => 
            array (
                'id' => 139,
                'division_id' => 18,
                'name' => 'Perak',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            139 => 
            array (
                'id' => 140,
                'division_id' => 19,
                'name' => 'Perlis',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            140 => 
            array (
                'id' => 141,
                'division_id' => 20,
                'name' => 'Pulau Pinang',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            141 => 
            array (
                'id' => 142,
                'division_id' => 21,
                'name' => 'Sabah',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            142 => 
            array (
                'id' => 143,
                'division_id' => 22,
                'name' => 'Sarawak',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            143 => 
            array (
                'id' => 144,
                'division_id' => 23,
                'name' => 'Selangor',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            144 => 
            array (
                'id' => 145,
                'division_id' => 24,
                'name' => 'Terengganu',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            145 => 
            array (
                'id' => 146,
                'division_id' => 25,
                'name' => 'Anhui',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            146 => 
            array (
                'id' => 147,
                'division_id' => 26,
                'name' => 'Beijing',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            147 => 
            array (
                'id' => 148,
                'division_id' => 27,
                'name' => 'Chongqing',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            148 => 
            array (
                'id' => 149,
                'division_id' => 28,
                'name' => 'Fujian',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            149 => 
            array (
                'id' => 150,
                'division_id' => 29,
                'name' => 'Gansu',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            150 => 
            array (
                'id' => 151,
                'division_id' => 30,
                'name' => 'Guangdong',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            151 => 
            array (
                'id' => 152,
                'division_id' => 31,
                'name' => 'Guangxi',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            152 => 
            array (
                'id' => 153,
                'division_id' => 32,
                'name' => 'Guizhou',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            153 => 
            array (
                'id' => 154,
                'division_id' => 33,
                'name' => 'Hainan',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            154 => 
            array (
                'id' => 155,
                'division_id' => 34,
                'name' => 'Hebei',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            155 => 
            array (
                'id' => 156,
                'division_id' => 35,
                'name' => 'Heilongjiang',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            156 => 
            array (
                'id' => 157,
                'division_id' => 36,
                'name' => 'Henan',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            157 => 
            array (
                'id' => 158,
                'division_id' => 37,
                'name' => 'Hubei',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            158 => 
            array (
                'id' => 159,
                'division_id' => 38,
                'name' => 'Hunan',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            159 => 
            array (
                'id' => 160,
                'division_id' => 39,
                'name' => 'Inner Mongolia',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            160 => 
            array (
                'id' => 161,
                'division_id' => 40,
                'name' => 'Jiangsu',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            161 => 
            array (
                'id' => 162,
                'division_id' => 41,
                'name' => 'Jiangxi',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            162 => 
            array (
                'id' => 163,
                'division_id' => 42,
                'name' => 'Jilin',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            163 => 
            array (
                'id' => 164,
                'division_id' => 43,
                'name' => 'Liaoning',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            164 => 
            array (
                'id' => 165,
                'division_id' => 44,
                'name' => 'Ningxia',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            165 => 
            array (
                'id' => 166,
                'division_id' => 45,
                'name' => 'Qinghai',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            166 => 
            array (
                'id' => 167,
                'division_id' => 46,
                'name' => 'Shaanxi',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            167 => 
            array (
                'id' => 168,
                'division_id' => 47,
                'name' => 'Shandong',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            168 => 
            array (
                'id' => 169,
                'division_id' => 48,
                'name' => 'Shanghai',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            169 => 
            array (
                'id' => 170,
                'division_id' => 49,
                'name' => 'Shanxi',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            170 => 
            array (
                'id' => 171,
                'division_id' => 50,
                'name' => 'Sichuan',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            171 => 
            array (
                'id' => 172,
                'division_id' => 51,
                'name' => 'Taiwan',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            172 => 
            array (
                'id' => 173,
                'division_id' => 52,
                'name' => 'Tianjin',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            173 => 
            array (
                'id' => 174,
                'division_id' => 53,
                'name' => 'Tibet',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            174 => 
            array (
                'id' => 175,
                'division_id' => 54,
                'name' => 'Xinjiang',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            175 => 
            array (
                'id' => 176,
                'division_id' => 55,
                'name' => 'Yunnan',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            176 => 
            array (
                'id' => 177,
                'division_id' => 56,
                'name' => 'Zhejiang',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            177 => 
            array (
                'id' => 178,
                'division_id' => 57,
                'name' => 'England',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            178 => 
            array (
                'id' => 179,
                'division_id' => 58,
                'name' => 'Northern Ireland',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            179 => 
            array (
                'id' => 180,
                'division_id' => 59,
                'name' => 'Scotland',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            180 => 
            array (
                'id' => 181,
                'division_id' => 60,
                'name' => 'Wales',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            181 => 
            array (
                'id' => 182,
                'division_id' => 61,
                'name' => 'Alabama',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            182 => 
            array (
                'id' => 183,
                'division_id' => 62,
                'name' => 'Alaska',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            183 => 
            array (
                'id' => 184,
                'division_id' => 63,
                'name' => 'Arizona',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            184 => 
            array (
                'id' => 185,
                'division_id' => 64,
                'name' => 'Arkansas',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            185 => 
            array (
                'id' => 186,
                'division_id' => 65,
                'name' => 'California',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            186 => 
            array (
                'id' => 187,
                'division_id' => 66,
                'name' => 'Colorado',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            187 => 
            array (
                'id' => 188,
                'division_id' => 67,
                'name' => 'Connecticut',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            188 => 
            array (
                'id' => 189,
                'division_id' => 68,
                'name' => 'Delaware',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            189 => 
            array (
                'id' => 190,
                'division_id' => 69,
                'name' => 'District of Columbia',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            190 => 
            array (
                'id' => 191,
                'division_id' => 70,
                'name' => 'Florida',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            191 => 
            array (
                'id' => 192,
                'division_id' => 71,
                'name' => 'Georgia',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            192 => 
            array (
                'id' => 193,
                'division_id' => 72,
                'name' => 'Hawaii',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            193 => 
            array (
                'id' => 194,
                'division_id' => 73,
                'name' => 'Idaho',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            194 => 
            array (
                'id' => 195,
                'division_id' => 74,
                'name' => 'Illinois',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            195 => 
            array (
                'id' => 196,
                'division_id' => 75,
                'name' => 'Indiana',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            196 => 
            array (
                'id' => 197,
                'division_id' => 76,
                'name' => 'Iowa',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            197 => 
            array (
                'id' => 198,
                'division_id' => 77,
                'name' => 'Kansas',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            198 => 
            array (
                'id' => 199,
                'division_id' => 78,
                'name' => 'Kentucky',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            199 => 
            array (
                'id' => 200,
                'division_id' => 79,
                'name' => 'Louisiana',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            200 => 
            array (
                'id' => 201,
                'division_id' => 80,
                'name' => 'Maine',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            201 => 
            array (
                'id' => 202,
                'division_id' => 81,
                'name' => 'Maryland',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            202 => 
            array (
                'id' => 203,
                'division_id' => 82,
                'name' => 'Massachusetts',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            203 => 
            array (
                'id' => 204,
                'division_id' => 83,
                'name' => 'Michigan',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            204 => 
            array (
                'id' => 205,
                'division_id' => 84,
                'name' => 'Minnesota',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            205 => 
            array (
                'id' => 206,
                'division_id' => 85,
                'name' => 'Mississippi',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            206 => 
            array (
                'id' => 207,
                'division_id' => 86,
                'name' => 'Missouri',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            207 => 
            array (
                'id' => 208,
                'division_id' => 87,
                'name' => 'Montana',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            208 => 
            array (
                'id' => 209,
                'division_id' => 88,
                'name' => 'Nebraska',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            209 => 
            array (
                'id' => 210,
                'division_id' => 89,
                'name' => 'Nevada',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            210 => 
            array (
                'id' => 211,
                'division_id' => 90,
                'name' => 'New Hampshire',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            211 => 
            array (
                'id' => 212,
                'division_id' => 91,
                'name' => 'New Jersey',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            212 => 
            array (
                'id' => 213,
                'division_id' => 92,
                'name' => 'New Mexico',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            213 => 
            array (
                'id' => 214,
                'division_id' => 93,
                'name' => 'New York',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            214 => 
            array (
                'id' => 215,
                'division_id' => 94,
                'name' => 'North Carolina',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            215 => 
            array (
                'id' => 216,
                'division_id' => 95,
                'name' => 'North Dakota',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            216 => 
            array (
                'id' => 217,
                'division_id' => 96,
                'name' => 'Ohio',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            217 => 
            array (
                'id' => 218,
                'division_id' => 97,
                'name' => 'Oklahoma',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            218 => 
            array (
                'id' => 219,
                'division_id' => 98,
                'name' => 'Oregon',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            219 => 
            array (
                'id' => 220,
                'division_id' => 99,
                'name' => 'Pennsylvania',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            220 => 
            array (
                'id' => 221,
                'division_id' => 100,
                'name' => 'Rhode Island',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            221 => 
            array (
                'id' => 222,
                'division_id' => 101,
                'name' => 'South Carolina',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            222 => 
            array (
                'id' => 223,
                'division_id' => 102,
                'name' => 'South Dakota',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            223 => 
            array (
                'id' => 224,
                'division_id' => 103,
                'name' => 'Tennessee',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            224 => 
            array (
                'id' => 225,
                'division_id' => 104,
                'name' => 'Texas',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            225 => 
            array (
                'id' => 226,
                'division_id' => 105,
                'name' => 'Utah',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            226 => 
            array (
                'id' => 227,
                'division_id' => 106,
                'name' => 'Vermont',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            227 => 
            array (
                'id' => 228,
                'division_id' => 107,
                'name' => 'Virginia',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            228 => 
            array (
                'id' => 229,
                'division_id' => 108,
                'name' => 'Washington',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            229 => 
            array (
                'id' => 230,
                'division_id' => 109,
                'name' => 'West Virginia',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            230 => 
            array (
                'id' => 231,
                'division_id' => 110,
                'name' => 'Wisconsin',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            231 => 
            array (
                'id' => 232,
                'division_id' => 111,
                'name' => 'Wyoming',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            232 => 
            array (
                'id' => 233,
                'division_id' => 112,
                'name' => 'Australian Capital Territory',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            233 => 
            array (
                'id' => 234,
                'division_id' => 113,
                'name' => 'New South Wales',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            234 => 
            array (
                'id' => 235,
                'division_id' => 114,
                'name' => 'Northern Territory',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            235 => 
            array (
                'id' => 236,
                'division_id' => 115,
                'name' => 'Queensland',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            236 => 
            array (
                'id' => 237,
                'division_id' => 116,
                'name' => 'South Australia',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            237 => 
            array (
                'id' => 238,
                'division_id' => 117,
                'name' => 'Tasmania',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            238 => 
            array (
                'id' => 239,
                'division_id' => 118,
                'name' => 'Victoria',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            239 => 
            array (
                'id' => 240,
                'division_id' => 119,
                'name' => 'Western Australia',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            240 => 
            array (
                'id' => 241,
                'division_id' => 121,
                'name' => 'Hongkong',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
            241 => 
            array (
                'id' => 242,
                'division_id' => 122,
                'name' => 'Macau',
                'abbr' => NULL,
                'alias' => NULL,
                'full_name' => NULL,
                'locale' => 'en',
            ),
        ));
        
        
    }
}