<?php

use Illuminate\Database\Seeder;

// Models
use App\Models\Menu;
use App\Models\Category;
use App\Models\SubCategory;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = Menu::insert([
          [
            'name' => 'Electronics',
            'description' => 'None',
            'menu_icon' => '',
            'slug' => str_slug('Electronics'),
            'status' => 1
          ],
          [
            'name' => 'Accessories',
            'description' => 'None',
            'menu_icon' => '',
            'slug' => str_slug('Accessories'),
            'status' => 1
          ],
          [
            'name' => ' Backpacks',
            'description' => 'None',
            'menu_icon' => '',
            'slug' => str_slug('Backpacks'),
            'status' => 1
          ],
        ]);


        $categories = Category::insert([
          [
            'name' => 'Laptops',
            'menu_id' => 1,
            'description' => 'None',
            'category_icon' => '/demo/category (1).jpg',
            'slug' => str_slug('Laptops'),
            'status' => 1
          ],
          [

            'name' => 'Desktop',
            'menu_id' => 1,
            'description' => 'None',
            'category_icon' => '/demo/category (2).jpg',
            'slug' => str_slug('Desktop'),
            'status' => 1
          ],
          [
            'name' => 'Mobile',
            'menu_id' => 1,
            'description' => 'None',
            'category_icon' => '/demo/category (3).jpg',
            'slug' => str_slug('Mobile'),
            'status' => 1
          ],
        ]);

        $sub_categories = SubCategory::insert([
          [
            'menu_id' => 1,
            'category_id' => 1,
            'name' => 'Apple',
            'description' => 'None',
            'slug' => str_slug('Apple'),
            'icon' => '/demo/category (1).jpg',
            'status' => 1,
          ],

          [

            'menu_id' => 1,
            'category_id' => 1,
            'name' => 'Lenevo',
            'description' => 'None',
            'slug' => str_slug('Lenevo'),
            'icon' => '/demo/category (2).jpg',
            'status' => 1,
          ],
          [
            'menu_id' => 1,
            'category_id' => 2,
            'name' => 'Hp',
            'description' => 'None',
            'slug' => str_slug('Hp'),
            'icon' => '/demo/category (3).jpg',
            'status' => 1,
          ],

          [

            'menu_id' => 1,
            'category_id' => 2,
            'name' => 'Lenevo',
            'description' => 'None',
            'slug' => str_slug('Lenevo'),
            'icon' => '/demo/ (1).jpg',
            'status' => 1,
          ],
          [
            'menu_id' => 1,
            'category_id' => 3,
            'name' => 'Samsung',
            'description' => 'None',
            'slug' => str_slug('Samsung'),
            'icon' => '/demo/ (2).jpg',
            'status' => 1,
          ],

          [

            'menu_id' => 1,
            'category_id' => 3,
            'name' => 'Huwaei',
            'description' => 'None',
            'slug' => str_slug('Huwaei'),
            'icon' => '/demo/ (3).jpg',
            'status' => 1,
          ]

        ]);
    }
}
