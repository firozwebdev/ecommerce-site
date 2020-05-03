<?php

use Illuminate\Database\Seeder;

use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
      $products = Product::insert([
        [
          'product_name' => 'Samsung Galaxy Tab Active 2',
          'product_title' => 'Kısa açıklama',
          'sub_category_id' => '2',
          'slug' => str_slug('Samsung Galaxy Tab Active 2'),
          'product_price' => '200',
          'special_price' => '100',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 5,
          'sku' => 'dhjadskj',
          'stock' => '1',
          'multiple' => json_encode(['/demo/product_9.jpg','/demo/product_10.jpg','/demo/product_11.jpg']),
          'description' => 'dahjfakhjhfffffffffjahds',
          'color' => json_encode(['yellow','Black']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',

        ],
         [
          'product_name' => 'Samsung notepaad',
          'product_title' => 'Samsung 84',
          'sub_category_id' => '2',
          'slug' => str_slug('Samsung-notepad'),
          'product_price' => '200',
          'special_price' => '100',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 2,
          'sku' => 'dhjadskj',
          'stock' => '1',
          'multiple' => json_encode(['/demo/product_12.jpg','/demo/product_13.jpg','/demo/product_14.jpg']),
          'description' => 'dahjfakhjhfffffffffjahds',
          'color' => json_encode(['yellow','Black']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',

        ],
         [
          'product_name' => 'Huwaei',
          'product_title' => 'max pro21',
          'sub_category_id' => '5',
          'slug' => str_slug('Huwaei'),
          'product_price' => '400',
          'special_price' => '100',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 2,
          'sku' => 'djs822',
          'stock' => '0',
          'multiple' => json_encode(['/demo/product_15.jpg','/demo/product_16.jpg','/demo/product_17.jpg']),
          'description' => 'nothing to be serious on this track',
          'color' => json_encode(['green','braown']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',

        ],
         [
          'product_name' => 'Oppo 39',
          'product_title' => 'oppo 9g',
          'sub_category_id' => '2',
          'slug' => str_slug('Oppo 39'),
          'product_price' => '4002',
          'special_price' => '1020',
          'start_date' => '10/12/19',
          'end_date' => '10/12/19',
          'product_quantity' => 10,
          'sku' => 'dsksk38',
          'stock' => '1',
          'multiple' => json_encode(['/demo/product_12.jpg','/demo/product_14.jpg','/demo/product_16.jpg']),
          'description' => 'this product quality is so good',
          'color' => json_encode(['black','white']),
          'video_link' => 'https://www.youtube.com/watch?v=E2wa0BTHRMs',
          'warrantly' => '2',
          'status' => '1',


        ],

      ]);

    }
}
