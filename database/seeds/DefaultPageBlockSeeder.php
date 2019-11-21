<?php

use Illuminate\Database\Seeder;

class DefaultPageBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_blocks')->insert
        ([
            [
                'id'                => 1,
                'page_id'           => 1,
                'type'              => 'template',
                'path'              => 'static_banner_content_upside',
                'data'              => '{"image":"480px","image_height":0,"image_height_sm":0,"image_height_lg":0,"heading":"","content":"","button_text":"","link":"","padding_top":"","padding_bottom":""}',
                'is_hidden'         => 0,
                'is_minimized'      => 0,
                'is_delete_denied'  => 0,
                'cache_ttl'         => 0,
                'order'             => 1,
                'created_at'        => now(),
                'updated_at'        => now(),

            ],

            [
                'id'               => 2,
                'page_id'          => 1,
                'type'             => 'template',
                'path'             => 'default_home_page_image',
                'data'             => '{"default_image":""}',
                'is_hidden'        => 0,
                'is_minimized'     => 0,
                'is_delete_denied' => 0,
                'cache_ttl'        => 0,
                'order'            => 2,
                'created_at'       => now(),
                'updated_at'       => now(),
            ]
        ]);

    }
}
