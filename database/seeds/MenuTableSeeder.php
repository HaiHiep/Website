<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert([
            [
                'men_name' => 'Home',
                'men_position' => 1,
                'men_active' => 1,
                'men_root' => 1,
                'men_created_at' => new DateTime,
                'men_updated_at' => new DateTime,
            ],
            [
                'men_name' => 'Shop',
                'men_position' => 2,
                'men_active' => 1,
                'men_root' => 1,
                'men_created_at' => new DateTime,
                'men_updated_at' => new DateTime,
            ],
            [
                'men_name' => 'Category',
                'men_position' => 3,
                'men_active' => 1,
                'men_root' => 1,
                'men_created_at' => new DateTime,
                'men_updated_at' => new DateTime,
            ],
            [
                'men_name' => 'Contact',
                'men_position' => 4,
                'men_active' => 1,
                'men_root' => 1,
                'men_created_at' => new DateTime,
                'men_updated_at' => new DateTime,
            ],
            [
                'men_name' => 'User',
                'men_position' => 5,
                'men_active' => 1,
                'men_root' => 1,
                'men_created_at' => new DateTime,
                'men_updated_at' => new DateTime,
            ],
        ]);
    }
}
