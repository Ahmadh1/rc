<?php

namespace App\Http\Controllers\user;
use Auth;
use Session;
use App\User;
use App\Dish;
use App\Order;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menu() {
        $burgers = Category::find(1);
        $salsa = Category::find(2);
        $sushi = Category::find(3);
        $pizzas = Category::find(4);
        return view('user.menu', compact('burgers', 'salsa', 'pizzas', 'sushi'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();
        return view('user.front.track', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orderDetails($id) {
        $order = Order::find($id);
        return view('user.front.details', compact('order'));
    }

}
