<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'use_name' => 'hoangthanhcong',
                'use_email' => str_random(12).'@email.com',
                'use_password' => bcrypt('123456'),
                'use_address' => 'Dai kim-Hoang Mai- Ha Noi',
                'use_phone' => '0375394511',
                'use_active' => 1,
                'use_gender' => 1,
                'use_role' => 1,
                'use_birthday' => Carbon::parse('1996-09-01'),
                'use_created_at' => new DateTime,
                'use_updated_at' => new DateTime,
            ],
            [
                'use_name' => 'damhaihiep',
                'use_email' => str_random(12).'@email.com',
                'use_password' => bcrypt('123456'),
                'use_address' => 'Thuong tin- Ha Noi',
                'use_phone' => '03542394123',
                'use_active' => 1,
                'use_gender' => 1,
                'use_role' => 1,
                'use_birthday' => Carbon::parse('1998-12-01'),
                'use_created_at' => new DateTime,
                'use_updated_at' => new DateTime,
            ],
            [
                'use_name' => 'customerTest',
                'use_email' => str_random(12).'@email.com',
                'use_password' => bcrypt('123456'),
                'use_address' => 'Ho Chi Minh',
                'use_phone' => '0372341232',
                'use_active' => 1,
                'use_gender' => 1,
                'use_role' => 1,
                'use_birthday' => Carbon::parse('2000-4-01'),
                'use_created_at' => new DateTime,
                'use_updated_at' => new DateTime,
            ],
        ]);
    }
}
