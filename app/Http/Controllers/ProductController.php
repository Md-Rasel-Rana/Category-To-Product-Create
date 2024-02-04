<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createproduct(){
        return view('Dashboard.product');
    }
    public function categoryList(){
      return Category::all();
    
    }
    public function storeproduct(Request $request){
    //dd($request->all());
     return Product::create([
       'name' => $request->input('name'),
       'price'=>$request->input('price'),
       'unit'=>$request->input('unit'),
       'category_id'=>$request->input('category_id'),
      
     ]);
    }
    public function productlist(){
      return Product::all();
    }

}
