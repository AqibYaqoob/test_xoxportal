<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2019-08-13 01:23:27',
                'updated_at' => '2019-08-13 01:23:27',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2019-08-13 01:23:27',
                'updated_at' => '2019-08-13 01:23:27',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2019-08-13 01:23:27',
                'updated_at' => '2019-08-13 01:23:27',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2019-08-13 01:23:27',
                'updated_at' => '2019-08-13 01:23:27',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2019-08-13 01:23:27',
                'updated_at' => '2019-08-13 01:23:27',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2019-08-13 01:23:28',
                'updated_at' => '2019-08-13 01:23:28',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2019-08-13 01:23:28',
                'updated_at' => '2019-08-13 01:23:28',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2019-08-13 01:23:28',
                'updated_at' => '2019-08-13 01:23:28',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2019-08-13 01:23:28',
                'updated_at' => '2019-08-13 01:23:28',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2019-08-13 01:23:28',
                'updated_at' => '2019-08-13 01:23:28',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2019-08-13 01:23:29',
                'updated_at' => '2019-08-13 01:23:29',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2019-08-13 01:23:29',
                'updated_at' => '2019-08-13 01:23:29',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2019-08-13 01:23:29',
                'updated_at' => '2019-08-13 01:23:29',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2019-08-13 01:23:29',
                'updated_at' => '2019-08-13 01:23:29',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2019-08-13 01:23:29',
                'updated_at' => '2019-08-13 01:23:29',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_blog_posts',
                'table_name' => NULL,
                'created_at' => '2019-08-26 13:40:26',
                'updated_at' => '2019-08-26 13:40:26',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_blog_posts',
                'table_name' => NULL,
                'created_at' => '2019-08-26 13:40:26',
                'updated_at' => '2019-08-26 13:40:26',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_blog_posts',
                'table_name' => NULL,
                'created_at' => '2019-08-26 13:40:26',
                'updated_at' => '2019-08-26 13:40:26',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_blog_posts',
                'table_name' => NULL,
                'created_at' => '2019-08-26 13:40:27',
                'updated_at' => '2019-08-26 13:40:27',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_blog_posts',
                'table_name' => NULL,
                'created_at' => '2019-08-26 13:40:27',
                'updated_at' => '2019-08-26 13:40:27',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2019-08-26 13:40:27',
                'updated_at' => '2019-08-26 13:40:27',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2019-08-26 13:40:27',
                'updated_at' => '2019-08-26 13:40:27',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2019-08-26 13:40:27',
                'updated_at' => '2019-08-26 13:40:27',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2019-08-26 13:40:27',
                'updated_at' => '2019-08-26 13:40:27',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_blog_posts',
                'table_name' => 'blog_posts',
                'created_at' => '2019-08-26 13:40:27',
                'updated_at' => '2019-08-26 13:40:27',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_pages',
                'table_name' => NULL,
                'created_at' => '2019-08-26 13:40:37',
                'updated_at' => '2019-08-26 13:40:37',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_pages',
                'table_name' => NULL,
                'created_at' => '2019-08-26 13:40:37',
                'updated_at' => '2019-08-26 13:40:37',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_pages',
                'table_name' => NULL,
                'created_at' => '2019-08-26 13:40:37',
                'updated_at' => '2019-08-26 13:40:37',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_pages',
                'table_name' => NULL,
                'created_at' => '2019-08-26 13:40:38',
                'updated_at' => '2019-08-26 13:40:38',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_pages',
                'table_name' => NULL,
                'created_at' => '2019-08-26 13:40:38',
                'updated_at' => '2019-08-26 13:40:38',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_page_blocks',
                'table_name' => 'page_blocks',
                'created_at' => '2019-08-26 13:54:32',
                'updated_at' => '2019-08-26 13:54:32',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_page_blocks',
                'table_name' => 'page_blocks',
                'created_at' => '2019-08-26 13:54:33',
                'updated_at' => '2019-08-26 13:54:33',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_page_blocks',
                'table_name' => 'page_blocks',
                'created_at' => '2019-08-26 13:54:33',
                'updated_at' => '2019-08-26 13:54:33',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_page_blocks',
                'table_name' => 'page_blocks',
                'created_at' => '2019-08-26 13:54:34',
                'updated_at' => '2019-08-26 13:54:34',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_page_blocks',
                'table_name' => 'page_blocks',
                'created_at' => '2019-08-26 13:54:34',
                'updated_at' => '2019-08-26 13:54:34',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_terms_condition_categories',
                'table_name' => 'terms_condition_categories',
                'created_at' => '2019-09-06 03:53:17',
                'updated_at' => '2019-09-06 03:53:17',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_terms_condition_categories',
                'table_name' => 'terms_condition_categories',
                'created_at' => '2019-09-06 03:53:18',
                'updated_at' => '2019-09-06 03:53:18',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_terms_condition_categories',
                'table_name' => 'terms_condition_categories',
                'created_at' => '2019-09-06 03:53:19',
                'updated_at' => '2019-09-06 03:53:19',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_terms_condition_categories',
                'table_name' => 'terms_condition_categories',
                'created_at' => '2019-09-06 03:53:19',
                'updated_at' => '2019-09-06 03:53:19',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_terms_condition_categories',
                'table_name' => 'terms_condition_categories',
                'created_at' => '2019-09-06 03:53:20',
                'updated_at' => '2019-09-06 03:53:20',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2019-09-06 06:31:36',
                'updated_at' => '2019-09-06 06:31:36',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2019-09-06 06:31:37',
                'updated_at' => '2019-09-06 06:31:37',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2019-09-06 06:31:37',
                'updated_at' => '2019-09-06 06:31:37',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2019-09-06 06:31:38',
                'updated_at' => '2019-09-06 06:31:38',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2019-09-06 06:31:38',
                'updated_at' => '2019-09-06 06:31:38',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'browse_faq_details',
                'table_name' => 'faq_details',
                'created_at' => '2019-09-06 06:45:28',
                'updated_at' => '2019-09-06 06:45:28',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'read_faq_details',
                'table_name' => 'faq_details',
                'created_at' => '2019-09-06 06:45:29',
                'updated_at' => '2019-09-06 06:45:29',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'edit_faq_details',
                'table_name' => 'faq_details',
                'created_at' => '2019-09-06 06:45:29',
                'updated_at' => '2019-09-06 06:45:29',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'add_faq_details',
                'table_name' => 'faq_details',
                'created_at' => '2019-09-06 06:45:30',
                'updated_at' => '2019-09-06 06:45:30',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'delete_faq_details',
                'table_name' => 'faq_details',
                'created_at' => '2019-09-06 06:45:31',
                'updated_at' => '2019-09-06 06:45:31',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-09-17 08:43:38',
                'updated_at' => '2019-09-17 08:43:38',
            ),
        ));
        
        
    }
}