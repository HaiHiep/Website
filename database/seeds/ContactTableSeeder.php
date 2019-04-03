<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->insert([
        	[
        		'con_address' => 'Đại Kim - Hoàng Mai - Hà Nội',
        		'con_phone' => '0375394511',
        		'con_mail' => 'shopchanga@gmail.com',
        		'con_face' => '/faceshop',
        		'con_des' => 'Bán Chăn ga giá tốt',
        		'con_created_at' => new DateTime,
    			'con_updated_at' => new DateTime,
    		],
    	]);
    }
}
