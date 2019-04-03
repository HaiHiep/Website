<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('products')->insert([
    		[
    			'pro_name' => 'San pham 01',
    			'pro_price' => 175.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham rat tot',
    			'pro_guarantee'=>'12 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    		[
    			'pro_name' => 'San pham 02',
    			'pro_price' => 12.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham rat tot sax',
    			'pro_guarantee'=>'4 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    		[
    			'pro_name' => 'San pham 03',
    			'pro_price' => 45.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham tot',
    			'pro_guarantee'=>'12 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    		[
    			'pro_name' => 'San pham 04',
    			'pro_price' => 1725.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham xấu',
    			'pro_guarantee'=>'7 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    		[
    			'pro_name' => 'San pham 05',
    			'pro_price' => 125.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham dep',
    			'pro_guarantee'=>'13 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    		[
    			'pro_name' => 'San pham 06',
    			'pro_price' => 475.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham thu 6',
    			'pro_guarantee'=>'5 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    		[
    			'pro_name' => 'San pham 01',
    			'pro_price' => 855.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham dep ',
    			'pro_guarantee'=>'14 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    		[
    			'pro_name' => 'San pham 08',
    			'pro_price' => 195.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham rat tod sqst',
    			'pro_guarantee'=>'12 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    		[
    			'pro_name' => 'San pham 09',
    			'pro_price' => 65.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham rat dep sqst',
    			'pro_guarantee'=>'12 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    		[
    			'pro_name' => 'San pham 10',
    			'pro_price' => 42.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham sang tod sqst',
    			'pro_guarantee'=>'12 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    		[
    			'pro_name' => 'San pham 11',
    			'pro_price' => 12.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham rat tod sqst',
    			'pro_guarantee'=>'12 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    		[
    			'pro_name' => 'San pham 12',
    			'pro_price' => 32.00,
    			'pro_active' => 1,
    			'pro_description' => 'San pham rat tod sqst',
    			'pro_guarantee'=>'12 thang',
    			'pro_created_at' => new DateTime,
    			'pro_updated_at' => new DateTime,
    		],
    	]);
    }
}
