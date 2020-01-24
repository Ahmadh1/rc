<?php

namespace App\Http\Controllers\admin;
use Session;
use App\Dish;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DishesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $dishes = Dish::paginate(5);
        return view('admin.dish.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $dish = new Dish();     
        $categories = Category::all();
        return view('admin.dish.create', compact('dish', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
       // dd($request->all());
        $request->validate([
            'title'=> 'required',
            'price'=> 'required',
            'image'=> 'required',
            'details'=> 'required',
            'category_id' => 'required'
        ]);
        if ($request->file('image')) {
            $image = $request->image;
            $image->move(public_path('/uploads'), $image->getClientOriginalName());
        } // end if

       $dish = Dish::create([
        'title' => $request->title,
        'slug' => str_slug($request->title),
        'details' => $request->details,
        'image' =>  $request->image->getClientOriginalName(),
        'price' => $request->price,
        'category_id' => $request->category_id
       ]);
       Session::flash('msg', 'New Dish created.');
       return redirect()->back('dishes.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $categories = Category::all();
        $dish = Dish::find($id);
        return view('admin.dish.edit', compact('dish', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        // dd($request->all());
         // Find the product
        $dish = Dish::find($id);

       // Validate The form
        $request->validate([
           'title' => 'required',
            'price' => 'required',
            'details' => 'required'
        ]);
         // Check if there is any image
         if ($request->hasFile('image')) {
             // Check if the old image exists inside folder
            if (file_exists(public_path('uploads/') . $dish->image)) {
                unlink(public_path('uploads/') . $dish->image);
            } // end if
            // Upload the new image
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());
            $dish->image = $request->image->getClientOriginalName();
        } // end if
        // Updating the product
        $dish->update([
           'title' => $request->title,
           'slug' => str_slug($request->title),
            'price' => $request->price,
            'details' => $request->details,
            'image' => $dish->image,
            'category_id' =>   $request->category_id
        ]);
       
        Session::flash('msg', 'Dish has been updated');
       return redirect()->route('dishes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        // dd($id);
        // find dish
        $dish = Dish::find($id);
        // unlink the image file
        unlink(public_path('uploads/') . $dish->image);
        // remove the data from db
        $dish->delete();
        Session::flash('msg', 'Dish removed.');
        // redirect
        return redirect()->route('dishes.index');
    }
}
