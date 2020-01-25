<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title1 = 'Burger';
        $title2 = 'Pasta';
        $title3 = 'Pizza';
        $title4 = 'Sushi';
        
        $cat1 = Category::create([
        	'title' => $title1,
        	'slug' => str_slug($title1)
        ]);

        $cat2 = Category::create([
        	'title' => $title2,
        	'slug' => str_slug($title2)
        ]);

        $cat3 = Category::create([
        	'title' => $title3,
        	'slug' => str_slug($title3)
        ]);

        $cat4 = Category::create([
        	'title' => $title4,
        	'slug' => str_slug($title4)
        ]);
    }
}
