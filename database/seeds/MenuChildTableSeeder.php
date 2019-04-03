<?php

use Illuminate\Database\Seeder;

class MenuChildTableSeeder extends Seeder
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
    			'men_name' => 'Shopping Cart',
    			'men_position' => 1,
    			'men_parent' =>2,
    			'men_active' => 1,
    			'men_root' => 1,
    			'men_created_at' => new DateTime,
    			'men_updated_at' => new DateTime,
    		],
    		[
    			'men_name' => 'Order',
    			'men_position' => 2,
    			'men_parent' =>2,
    			'men_active' => 1,
    			'men_root' => 1,
    			'men_created_at' => new DateTime,
    			'men_updated_at' => new DateTime,
    		],
    		[
    			'men_name' => 'Product Checkout',
    			'men_position' => 3,
    			'men_parent' =>2,
    			'men_active' => 1,
    			'men_root' => 1,
    			'men_created_at' => new DateTime,
    			'men_updated_at' => new DateTime,
    		],
    		[
    			'men_name' => 'Confirmation',
    			'men_position' => 4,
    			'men_parent' =>2,
    			'men_active' => 1,
    			'men_root' => 1,
    			'men_created_at' => new DateTime,
    			'men_updated_at' => new DateTime,
    		],
    		[
    			'men_name' => 'Login',
    			'men_position' => 1,
    			'men_parent' =>5,
    			'men_active' => 1,
    			'men_root' => 1,
    			'men_created_at' => new DateTime,
    			'men_updated_at' => new DateTime,
    		],
    		[
    			'men_name' => 'Logout',
    			'men_position' => 2,
    			'men_parent' =>5,
    			'men_active' => 1,
    			'men_root' => 1,
    			'men_created_at' => new DateTime,
    			'men_updated_at' => new DateTime,
    		],
    		[
    			'men_name' => 'Information User',
    			'men_position' => 3,
    			'men_parent' =>5,
    			'men_active' => 1,
    			'men_root' => 1,
    			'men_created_at' => new DateTime,
    			'men_updated_at' => new DateTime,
    		],
    	]);
    }
}
