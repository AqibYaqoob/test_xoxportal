<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2019-08-13 01:23:25',
                'updated_at' => '2019-08-13 01:23:25',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'manager',
                'display_name' => 'Manager',
                'created_at' => '2019-09-03 04:16:53',
                'updated_at' => '2019-09-03 04:16:53',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'test-role',
                'display_name' => 'Test Role',
                'created_at' => '2019-09-06 02:00:30',
                'updated_at' => '2019-09-06 02:00:30',
            ),
        ));
        
        
    }
}