<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
 public function myproduct(){
    return view('waste.product');
 }
 public function put(Request $request){
    // dd($request->name);
    $data = $request->validate([
        'product_name' => 'required',
        
    ]);
    $newPost = Product::create($data);
    return redirect(route('waste.product'));

}
}
