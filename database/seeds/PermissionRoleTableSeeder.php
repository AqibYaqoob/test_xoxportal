<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 4,
            ),
            3 => 
            array (
                'permission_id' => 1,
                'role_id' => 5,
            ),
            4 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 2,
                'role_id' => 2,
            ),
            6 => 
            array (
                'permission_id' => 2,
                'role_id' => 4,
            ),
            7 => 
            array (
                'permission_id' => 2,
                'role_id' => 5,
            ),
            8 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 3,
                'role_id' => 2,
            ),
            10 => 
            array (
                'permission_id' => 3,
                'role_id' => 4,
            ),
            11 => 
            array (
                'permission_id' => 3,
                'role_id' => 5,
            ),
            12 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 4,
                'role_id' => 2,
            ),
            14 => 
            array (
                'permission_id' => 4,
                'role_id' => 4,
            ),
            15 => 
            array (
                'permission_id' => 4,
                'role_id' => 5,
            ),
            16 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 5,
                'role_id' => 2,
            ),
            18 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            19 => 
            array (
                'permission_id' => 5,
                'role_id' => 5,
            ),
            20 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 6,
                'role_id' => 2,
            ),
            22 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            23 => 
            array (
                'permission_id' => 6,
                'role_id' => 5,
            ),
            24 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 7,
                'role_id' => 2,
            ),
            26 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            27 => 
            array (
                'permission_id' => 7,
                'role_id' => 5,
            ),
            28 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            29 => 
            array (
                'permission_id' => 8,
                'role_id' => 2,
            ),
            30 => 
            array (
                'permission_id' => 8,
                'role_id' => 4,
            ),
            31 => 
            array (
                'permission_id' => 8,
                'role_id' => 5,
            ),
            32 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            33 => 
            array (
                'permission_id' => 9,
                'role_id' => 2,
            ),
            34 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            35 => 
            array (
                'permission_id' => 9,
                'role_id' => 5,
            ),
            36 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 10,
                'role_id' => 2,
            ),
            38 => 
            array (
                'permission_id' => 10,
                'role_id' => 4,
            ),
            39 => 
            array (
                'permission_id' => 10,
                'role_id' => 5,
            ),
            40 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 11,
                'role_id' => 4,
            ),
            42 => 
            array (
                'permission_id' => 11,
                'role_id' => 5,
            ),
            43 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            44 => 
            array (
                'permission_id' => 12,
                'role_id' => 4,
            ),
            45 => 
            array (
                'permission_id' => 12,
                'role_id' => 5,
            ),
            46 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            47 => 
            array (
                'permission_id' => 13,
                'role_id' => 4,
            ),
            48 => 
            array (
                'permission_id' => 13,
                'role_id' => 5,
            ),
            49 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            51 => 
            array (
                'permission_id' => 14,
                'role_id' => 5,
            ),
            52 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            53 => 
            array (
                'permission_id' => 15,
                'role_id' => 4,
            ),
            54 => 
            array (
                'permission_id' => 15,
                'role_id' => 5,
            ),
            55 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            56 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
            57 => 
            array (
                'permission_id' => 16,
                'role_id' => 5,
            ),
            58 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            59 => 
            array (
                'permission_id' => 17,
                'role_id' => 4,
            ),
            60 => 
            array (
                'permission_id' => 17,
                'role_id' => 5,
            ),
            61 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            62 => 
            array (
                'permission_id' => 18,
                'role_id' => 4,
            ),
            63 => 
            array (
                'permission_id' => 18,
                'role_id' => 5,
            ),
            64 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            65 => 
            array (
                'permission_id' => 19,
                'role_id' => 4,
            ),
            66 => 
            array (
                'permission_id' => 19,
                'role_id' => 5,
            ),
            67 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            68 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            69 => 
            array (
                'permission_id' => 20,
                'role_id' => 5,
            ),
            70 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            71 => 
            array (
                'permission_id' => 21,
                'role_id' => 2,
            ),
            72 => 
            array (
                'permission_id' => 21,
                'role_id' => 4,
            ),
            73 => 
            array (
                'permission_id' => 21,
                'role_id' => 5,
            ),
            74 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            75 => 
            array (
                'permission_id' => 22,
                'role_id' => 2,
            ),
            76 => 
            array (
                'permission_id' => 22,
                'role_id' => 4,
            ),
            77 => 
            array (
                'permission_id' => 22,
                'role_id' => 5,
            ),
            78 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            79 => 
            array (
                'permission_id' => 23,
                'role_id' => 2,
            ),
            80 => 
            array (
                'permission_id' => 23,
                'role_id' => 4,
            ),
            81 => 
            array (
                'permission_id' => 23,
                'role_id' => 5,
            ),
            82 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            83 => 
            array (
                'permission_id' => 24,
                'role_id' => 2,
            ),
            84 => 
            array (
                'permission_id' => 24,
                'role_id' => 4,
            ),
            85 => 
            array (
                'permission_id' => 24,
                'role_id' => 5,
            ),
            86 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            87 => 
            array (
                'permission_id' => 25,
                'role_id' => 2,
            ),
            88 => 
            array (
                'permission_id' => 25,
                'role_id' => 4,
            ),
            89 => 
            array (
                'permission_id' => 25,
                'role_id' => 5,
            ),
            90 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            91 => 
            array (
                'permission_id' => 26,
                'role_id' => 5,
            ),
            92 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            93 => 
            array (
                'permission_id' => 27,
                'role_id' => 5,
            ),
            94 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            95 => 
            array (
                'permission_id' => 28,
                'role_id' => 5,
            ),
            96 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            97 => 
            array (
                'permission_id' => 29,
                'role_id' => 5,
            ),
            98 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            99 => 
            array (
                'permission_id' => 30,
                'role_id' => 5,
            ),
            100 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            101 => 
            array (
                'permission_id' => 31,
                'role_id' => 5,
            ),
            102 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            103 => 
            array (
                'permission_id' => 32,
                'role_id' => 5,
            ),
            104 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            105 => 
            array (
                'permission_id' => 33,
                'role_id' => 5,
            ),
            106 => 
            array (
                'permission_id' => 34,
                'role_id' => 1,
            ),
            107 => 
            array (
                'permission_id' => 34,
                'role_id' => 5,
            ),
            108 => 
            array (
                'permission_id' => 35,
                'role_id' => 1,
            ),
            109 => 
            array (
                'permission_id' => 35,
                'role_id' => 5,
            ),
            110 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            111 => 
            array (
                'permission_id' => 36,
                'role_id' => 2,
            ),
            112 => 
            array (
                'permission_id' => 36,
                'role_id' => 4,
            ),
            113 => 
            array (
                'permission_id' => 36,
                'role_id' => 5,
            ),
            114 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            115 => 
            array (
                'permission_id' => 37,
                'role_id' => 2,
            ),
            116 => 
            array (
                'permission_id' => 37,
                'role_id' => 4,
            ),
            117 => 
            array (
                'permission_id' => 37,
                'role_id' => 5,
            ),
            118 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            119 => 
            array (
                'permission_id' => 38,
                'role_id' => 2,
            ),
            120 => 
            array (
                'permission_id' => 38,
                'role_id' => 4,
            ),
            121 => 
            array (
                'permission_id' => 38,
                'role_id' => 5,
            ),
            122 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            123 => 
            array (
                'permission_id' => 39,
                'role_id' => 2,
            ),
            124 => 
            array (
                'permission_id' => 39,
                'role_id' => 4,
            ),
            125 => 
            array (
                'permission_id' => 39,
                'role_id' => 5,
            ),
            126 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            127 => 
            array (
                'permission_id' => 40,
                'role_id' => 2,
            ),
            128 => 
            array (
                'permission_id' => 40,
                'role_id' => 4,
            ),
            129 => 
            array (
                'permission_id' => 40,
                'role_id' => 5,
            ),
            130 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            131 => 
            array (
                'permission_id' => 41,
                'role_id' => 4,
            ),
            132 => 
            array (
                'permission_id' => 41,
                'role_id' => 5,
            ),
            133 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            134 => 
            array (
                'permission_id' => 42,
                'role_id' => 4,
            ),
            135 => 
            array (
                'permission_id' => 42,
                'role_id' => 5,
            ),
            136 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            137 => 
            array (
                'permission_id' => 43,
                'role_id' => 4,
            ),
            138 => 
            array (
                'permission_id' => 43,
                'role_id' => 5,
            ),
            139 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            140 => 
            array (
                'permission_id' => 44,
                'role_id' => 4,
            ),
            141 => 
            array (
                'permission_id' => 44,
                'role_id' => 5,
            ),
            142 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            143 => 
            array (
                'permission_id' => 45,
                'role_id' => 4,
            ),
            144 => 
            array (
                'permission_id' => 45,
                'role_id' => 5,
            ),
            145 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            146 => 
            array (
                'permission_id' => 46,
                'role_id' => 5,
            ),
            147 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            148 => 
            array (
                'permission_id' => 47,
                'role_id' => 5,
            ),
            149 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            150 => 
            array (
                'permission_id' => 48,
                'role_id' => 5,
            ),
            151 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            152 => 
            array (
                'permission_id' => 49,
                'role_id' => 5,
            ),
            153 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            154 => 
            array (
                'permission_id' => 50,
                'role_id' => 5,
            ),
            155 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            156 => 
            array (
                'permission_id' => 51,
                'role_id' => 4,
            ),
            157 => 
            array (
                'permission_id' => 51,
                'role_id' => 5,
            ),
            158 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            159 => 
            array (
                'permission_id' => 52,
                'role_id' => 4,
            ),
            160 => 
            array (
                'permission_id' => 52,
                'role_id' => 5,
            ),
            161 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            162 => 
            array (
                'permission_id' => 53,
                'role_id' => 4,
            ),
            163 => 
            array (
                'permission_id' => 53,
                'role_id' => 5,
            ),
            164 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            165 => 
            array (
                'permission_id' => 54,
                'role_id' => 4,
            ),
            166 => 
            array (
                'permission_id' => 54,
                'role_id' => 5,
            ),
            167 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            168 => 
            array (
                'permission_id' => 55,
                'role_id' => 4,
            ),
            169 => 
            array (
                'permission_id' => 55,
                'role_id' => 5,
            ),
            170 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            171 => 
            array (
                'permission_id' => 56,
                'role_id' => 4,
            ),
            172 => 
            array (
                'permission_id' => 56,
                'role_id' => 5,
            ),
            173 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            174 => 
            array (
                'permission_id' => 57,
                'role_id' => 4,
            ),
            175 => 
            array (
                'permission_id' => 57,
                'role_id' => 5,
            ),
            176 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            177 => 
            array (
                'permission_id' => 58,
                'role_id' => 4,
            ),
            178 => 
            array (
                'permission_id' => 58,
                'role_id' => 5,
            ),
            179 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            180 => 
            array (
                'permission_id' => 59,
                'role_id' => 4,
            ),
            181 => 
            array (
                'permission_id' => 59,
                'role_id' => 5,
            ),
            182 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            183 => 
            array (
                'permission_id' => 60,
                'role_id' => 4,
            ),
            184 => 
            array (
                'permission_id' => 60,
                'role_id' => 5,
            ),
            185 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            186 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            187 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            188 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            189 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            190 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            191 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            192 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            193 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            194 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            195 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            196 => 
            array (
                'permission_id' => 72,
                'role_id' => 1,
            ),
            197 => 
            array (
                'permission_id' => 73,
                'role_id' => 1,
            ),
            198 => 
            array (
                'permission_id' => 74,
                'role_id' => 1,
            ),
            199 => 
            array (
                'permission_id' => 75,
                'role_id' => 1,
            ),
            200 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
        ));
        
        
    }
}