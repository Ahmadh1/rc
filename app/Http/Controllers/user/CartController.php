<?php

namespace App\Http\Controllers\user;

use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('user.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // return dd($request->all());
        // \Log::info($request);
        // return;
        $item = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });

        if ($item->isNotEmpty()) {
            return redirect()->back()->with('msg', $request->title .' already in cart');
        }

        Cart::add(
            $request->id,
            $request->title,
            1,
            $request->price
        )->associate('App\Dish');
        Session::flash('msg', $request->title.' Added to cart');
        return redirect()->back();
        // return response()->json(['success'=>'Data is successfully added']);
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
    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between: 1,5'
        ]);

        if ($validator->fails()) {
            session()->flash('errors','Quantity must be between 1 and 5');
            return response()->json(['success' => false]);
        }

        Cart::update($id, $request->quantity);

        Session::flash('msg','Quantity has been updated');

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        // dd($id);
        Cart::remove($id);
        Session::flash('msg', 'Item removed');
        return redirect()->back();
    }
}
