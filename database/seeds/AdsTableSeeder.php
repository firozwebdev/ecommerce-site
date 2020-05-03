<?php

use Illuminate\Database\Seeder;
use App\Ads;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   $ads=Ads::insert([
      [

      'title' => 'Demo Ads',
      'link'=>'',
      'images' => '/seed/ads (1).jpg',
      'status' => 1
    ],

      [

      'title' => 'Demo Ads',
      'link'=>'',
      'images' => '/seed/ads (2).jpg',
      'status' => 1
    ],




        ]);
    }
}
