<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'cat_name' => 'Hàng Nhập Khẩu',
                'cat_active' => 1,
                'cat_has_child' => 1,
                'cat_root' => 1,
                'cat_created_at' => new DateTime,
                'cat_updated_at' => new DateTime,
            ],
            [
                'cat_name' => 'Hàng Nội Địa',
                'cat_active' => 1,
                'cat_has_child' => 1,
                'cat_root' => 1,
                'cat_created_at' => new DateTime,
                'cat_updated_at' => new DateTime,
            ],
            [
                'cat_name' => 'Hàn Quốc',
                'cat_active' => 1,
                'cat_has_child' => 1,
                'cat_root' => 1,
                'cat_created_at' => new DateTime,
                'cat_updated_at' => new DateTime,
            ],
            [
                'cat_name' => 'Việt Nam',
                'cat_active' => 1,
                'cat_has_child' => 1,
                'cat_root' => 1,
                'cat_created_at' => new DateTime,
                'cat_updated_at' => new DateTime,
            ],
            [
                'cat_name' => 'Hàng Giảm Giá',
                'cat_active' => 1,
                'cat_has_child' => 1,
                'cat_root' => 1,
                'cat_created_at' => new DateTime,
                'cat_updated_at' => new DateTime,
            ],
        ]);
    }
}
