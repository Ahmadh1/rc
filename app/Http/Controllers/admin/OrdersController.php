<?php

namespace App\Http\Controllers\admin;
use Session;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $orders = Order::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.orders.index', compact('orders'));
    }
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details() {
        return view('admin.orders.details');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $order = Order::find($id);
        return view('admin.orders.details', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm($id) {
        $order = Order::find($id);
        $order->update([
            'status' => 1
        ]);
        Session::flash('msg', 'Order confirmed');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cancel($id) {
        $order = Order::find($id);
        $order->update([
            'status' => 0
        ]);
        Session::flash('msg', 'Order canceled.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id) {
        // dd($id);
        $order = Order::find($id);
        $order->OrderItems()->delete();
        $order->delete();
        Session::flash('msg', 'REMOVED');
        return redirect()->route('orders');
    }
}
