<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenusTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(AdsTableSeeder::class);

         // Role comes before Admin seeder here.
        $this->call(RoleTableSeeder::class);
        $this->call(AdminTableSeeder::class);
    }
}
