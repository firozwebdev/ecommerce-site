<?php

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $sliders = Slider::insert([
        [
          'title' => 'Demo Slider',
          'link'=>'',
          'images' => '/demo/slider-1.jpg',
          'status' => 1
        ],

        [
          'title' => 'Demo Slider',
          'link'=>'',
          'images' => '/demo/slider-2.jpg',
          'status' => 1
        ],
        [
          'title' => 'Demo Slider',
          'link'=>'',
          'images' => '/demo/slider-3.jpg',
          'status' => 1
        ],
      ]);
    }
}
