<?php

use Illuminate\Database\Seeder;

class BodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Bod::class,3)->create();
    }
}
