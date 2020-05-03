<?php

use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          $coupons = Coupon::insert([
            [
              'name' => 'Electronics',
              'code' => 'hadk73',
              'type' => 'day',
              'value' => '333',
              'shiping' => 'Electronics',
              'start_date' => '12-12-2019',
              'end_date' => '13-12-2019',
              'product' => '3',
              'category' => '4',
              'coupons_limit' => '23',
              'customer_limit' => '44',
              'status' => 1,


            ],
            [
              'name' => 'fashion',
              'code' => 'hadk73',
              'type' => 'day',
              'value' => '333',
              'shiping' => 'Electronics',
              'start_date' => '12-12-2019',
              'end_date' => '13-12-2019',
              'product' => '3',
              'category' => '4',
              'coupons_limit' => '23',
              'customer_limit' => '44',
              'status' => 1,


            ],

            [
              'name' => 'ti-shirt',
              'code' => '47kfh',
              'type' => 'night',
              'value' => '383h',
              'shiping' => 'free',
              'start_date' => '12-4-2019',
              'end_date' => '13-12-2019',
              'product' => '3',
              'category' => '4',
              'coupons_limit' => '23',
              'customer_limit' => '44',
              'status' => 1,


            ],

          ]);


    }
}
