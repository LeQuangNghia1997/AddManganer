<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $products = Products::all();
        return view('room',compact('products'));
    }
    public function add(){
        return view('add');
    }
        public function store(Request $request){
            $product = new Products();
            $product->name = $request->input('name');
            $product->category = $request->input('category');
            $product->address = $request->input('address');
            $product->bedrooms = $request->input('bedrooms');
            $product->bathroom = $request->input('bathroom');
            $product->description = $request->input('description');
            $product->money = $request->input('money');
            if($request->hasFile('image')){
                $image = $request->file('image');
                $path = $image->store('image','public');
                $product->image = $path;

            }
            $product->save();
            return redirect()->route('room');
    }
}
