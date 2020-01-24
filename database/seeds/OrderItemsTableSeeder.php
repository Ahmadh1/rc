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
        		'product_id' => 2,
        			'quantity' => 1,
        				'price' => 220
        ]);
        $order2 = OrderItems::create([
        	'order_id' => 2,
        		'product_id' => 3,
        			'quantity' => 1,
        				'price' => 1200
        ]);
        $order3 = OrderItems::create([
        	'order_id' => 3,
        		'product_id' => 4,
        			'quantity' => 1,
        				'price' => 2220
        ]);
        $order4 = OrderItems::create([
        	'order_id' => 4,
        		'product_id' => 1,
        			'quantity' => 1,
        				'price' => 300
        ]);
    }
}
