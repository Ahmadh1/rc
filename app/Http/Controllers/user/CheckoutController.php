<?php

namespace App\Http\Controllers\user;
use Auth;
use Session;
use App\Order;
use App\OrderItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('user.checkout.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm() {
        return view('user.checkout.confirmation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // dd($request->all());
        /**
        
            TODO:
            - Insert into Order table
            - Insert into OrderItems Table
        
         */
        $order = Order::create([
            'user_id' => Auth::user()->id,
                'address' => $request->address,
                'phone' => $request->phone,
                'city' => $request->city,
                'email' => $request->email,
                    'details' => $request->details
        ]);

        foreach (Cart::instance('default')->content() as $item) {
            OrderItems::create([
                'order_id'  => $order->id,
                    'dish_id' => $item->model->id,
                        'quantity' => $item->qty,
                            'price' => Cart::total()
            ]);
        }
        Cart::instance('default')->destroy();
        return redirect()->route('confirmation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
