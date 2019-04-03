<?php

use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'ban_content' => 'Sản phẩm mới nhập giá hấp dẫn, Trải nghiệm tốt cho nhiều khách hàng!',
                'ban_img' => 'banner-img.png',
                'ban_created_at' => new DateTime,
                'ban_updated_at' => new DateTime,
            ],
            [
                'ban_content' => 'Sản phẩm mới chất lượng, Nhập khẩu hàn quốc',
                'ban_img' => 'banner-img.png',
                'ban_created_at' => new DateTime,
                'ban_updated_at' => new DateTime,
            ],
            [
                'ban_content' => 'Sản phẩm nội địa, Giá hấp dẫn, Ưu đãi sinh viên',
                'ban_img' => 'banner-img.png',
                'ban_created_at' => new DateTime,
                'ban_updated_at' => new DateTime,
            ],
            [
                'ban_content' => 'Sản phẩm giảm giá dịp lễ tết, Ưu đãi lên tới 70%',
                'ban_img' => 'banner-img.png',
                'ban_created_at' => new DateTime,
                'ban_updated_at' => new DateTime,
            ],
        ]);
    }
}
