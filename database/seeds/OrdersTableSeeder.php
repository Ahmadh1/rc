<?php

use Illuminate\Database\Seeder;
use App\Order;
class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order1 = Order::create([
    	    		'user_id' => 2,
    	    			'city' => 'Lahore',
    	    				'Address' => '98 Gulshan Ravi',
								'phone' => '+92 000 0000000',
								'email'	=>	'emily@mail.com',
								'details'	=>	'lorem ipsum'
    	    	]);
    	$order2 = Order::create([
    	    		'user_id' => 3,
    	    			'city' => 'NYC',
    	    				'Address' => '66 Queens',
								'phone' => '+92 000 0000000',
								'email'	=>	'mike@mail.com',
								'details'	=>	'lorem ipsum'
    	    	]);
    	$order3 = Order::create([
    	    		'user_id' => 3,
    	    			'city' => 'New Orleans',
    	    				'Address' => '4th, Avenue Appartments',
								'phone' => '+92 000 0000000',
								'email'	=>	'janedoe@mail.com',
								'details'	=>	'lorem ipsum'
    	    	]);
    	$order4 = Order::create([
    	    		'user_id' => 2,
    	    			'city' => 'Newark',
    	    				'Address' => '1 Square street',
								'phone' => '+92 000 0000000',
								'email'	=>	'ahmad@mail.com',
								'details'	=>	'lorem ipsum'
    	    	]);
    }
}
