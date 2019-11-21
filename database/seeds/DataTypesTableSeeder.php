<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-08-13 01:23:23',
                'updated_at' => '2019-08-13 01:23:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-08-13 01:23:23',
                'updated_at' => '2019-08-13 01:23:23',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-08-13 01:23:23',
                'updated_at' => '2019-08-13 01:23:23',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'Pvtl\\VoyagerBlog\\Category',
                'policy_name' => NULL,
                'controller' => '\\TCG\\Voyager\\Http\\Controllers\\VoyagerBaseController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-08-13 01:23:27',
                'updated_at' => '2019-08-26 13:40:28',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-08-13 01:23:27',
                'updated_at' => '2019-08-13 01:23:27',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'Pvtl\\VoyagerPageBlocks\\Page',
                'policy_name' => NULL,
                'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-08-13 01:23:28',
                'updated_at' => '2019-09-17 08:51:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'blog_posts',
                'slug' => 'blog_posts',
                'display_name_singular' => 'Blog Post',
                'display_name_plural' => 'Blog Posts',
                'icon' => 'voyager-news',
                'model_name' => 'Pvtl\\VoyagerFrontend\\BlogPost',
                'policy_name' => NULL,
                'controller' => '\\Pvtl\\VoyagerFrontend\\Http\\Controllers\\PostController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-08-26 13:40:25',
                'updated_at' => '2019-09-17 08:48:55',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'page_blocks',
                'slug' => 'page-blocks',
                'display_name_singular' => 'Page Block',
                'display_name_plural' => 'Page Blocks',
                'icon' => 'voyager-file-text',
                'model_name' => 'Pvtl\\VoyagerPageBlocks\\PageBlock',
                'policy_name' => NULL,
                'controller' => '\\Pvtl\\VoyagerPageBlocks\\Http\\Controllers\\PageBlockController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-08-26 13:54:29',
                'updated_at' => '2019-08-26 13:54:29',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'terms_condition_categories',
                'slug' => 'terms-condition-categories',
                'display_name_singular' => 'Terms & Condition',
                'display_name_plural' => 'Terms & Conditions',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\TermsConditionCategory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Options which will be shown on Terms and Condition Page to get specific Details.',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"created_at","order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-09-06 03:53:14',
                'updated_at' => '2019-09-06 05:01:16',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'faq_categories',
                'slug' => 'faq-categories',
                'display_name_singular' => 'Faq Category',
                'display_name_plural' => 'Faq Categories',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\FaqCategory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Faq Categories',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"created_at","order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-09-06 06:31:32',
                'updated_at' => '2019-09-06 06:59:00',
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'faq_details',
                'slug' => 'faq-details',
                'display_name_singular' => 'Faq Detail',
                'display_name_plural' => 'Faq Details',
                'icon' => 'voyager-info-circled',
                'model_name' => 'App\\FaqDetail',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'No Description',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"created_at","order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-09-06 06:45:23',
                'updated_at' => '2019-09-11 00:05:23',
            ),
        ));
        
        
    }
}