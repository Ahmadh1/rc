<?php

use Illuminate\Database\Seeder;
use App\OrderItems;
class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $order1 = OrderItems::create([
        	'order_id' => 1,
        		'dish_id' => 2,
        			'quantity' => 1,
        				'price' => 220
        ]);
        $order2 = OrderItems::create([
        	'order_id' => 2,
        		'dish_id' => 3,
        			'quantity' => 1,
        				'price' => 1200
        ]);
        $order3 = OrderItems::create([
        	'order_id' => 3,
        		'dish_id' => 4,
        			'quantity' => 1,
        				'price' => 2220
        ]);
        $order4 = OrderItems::create([
        	'order_id' => 4,
        		'dish_id' => 1,
        			'quantity' => 1,
        				'price' => 300
        ]);
    }
}
