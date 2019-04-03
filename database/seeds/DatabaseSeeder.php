<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('BannerTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('ContactTableSeeder');
        $this->call('MenuTableSeeder');
        $this->call('MenuChildTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('ProductTableSeeder');
        Model::reguard();
    }
}
