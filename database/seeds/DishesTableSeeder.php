<?php

use Illuminate\Database\Seeder;
use App\Dish;
class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title1 = 'Beef Burger';
        $title2 = 'Spanish Salsa';
        $title3 = 'Japanesse Sushi';
        $title4 = 'Lemonade';
        $title5 = 'Peeno Pizza';

        $dish1 = Dish::create([
        	'title' => $title1,
        	'slug' => str_slug($title1),
        	'details' => 'Onion, Lemon, xyz',
        	'image' => 'burger.jpg',
        	'category_id' => 1,
        	'price' => 120
        ]);

        $dish2 = Dish::create([
        	'title' => $title2,
        	'slug' => str_slug($title2),
        	'details' => 'Onion, Lemon, xyz',
        	'image' => 'salsa.jpg',
        	'category_id' => 2,
        	'price' => 120
        ]);

        $dish3 = Dish::create([
        	'title' => $title3,
        	'slug' => str_slug($title3),
        	'details' => 'Onion, Lemon, xyz',
        	'image' => 'sushi.jpg',
        	'category_id' => 3,
        	'price' => 120
        ]);

        $dish4 = Dish::create([
        	'title' => $title4,
        	'slug' => str_slug($title4),
        	'details' => 'Lemon, soda',
        	'image' => 'Lemonade.png',
        	'category_id' => 4,
        	'price' => 120
        ]);

        $dish5 = Dish::create([
        	'title' => $title5,
        	'slug' => str_slug($title5),
        	'details' => 'Onion, Lemon, Olive, Chesse',
        	'image' => 'pizza.jpg',
        	'category_id' => 5,
        	'price' => 120
        ]);
    }
}
