<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2019-08-13 01:23:24',
                'updated_at' => '2019-08-13 01:23:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'website',
                'created_at' => '2019-08-18 23:18:03',
                'updated_at' => '2019-08-18 23:18:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'about_us',
                'created_at' => '2019-08-19 03:10:20',
                'updated_at' => '2019-08-19 03:10:20',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'get_to_know',
                'created_at' => '2019-08-19 03:13:55',
                'updated_at' => '2019-08-19 03:13:55',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'support',
                'created_at' => '2019-08-19 03:15:36',
                'updated_at' => '2019-08-19 03:15:36',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'primary',
                'created_at' => '2019-08-26 13:40:28',
                'updated_at' => '2019-08-26 13:40:28',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'social',
                'created_at' => '2019-08-26 13:40:38',
                'updated_at' => '2019-08-26 13:40:38',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'products_nav',
                'created_at' => '2019-08-27 07:48:11',
                'updated_at' => '2019-08-27 07:48:11',
            ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'main_menu',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Shop & Learn',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'shop&learn',
                    'created_at' => now(),
                    'updated_at' => now(),
                ),
        ));
        
        
    }
}