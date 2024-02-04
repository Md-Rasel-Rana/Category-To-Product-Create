<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categorypage(){
        return view('Dashboard.Category');
    }
    public function Createcategory(Request $request){  
      Category::create([
        "category"=>$request->input('category'),
      ]);
      return response()->json(['status'=>'success']);
       
    }
    public function listcategory(){
      return Category::all();
    }
    public function DeleteCategory(Request $request){
      return  Category::where('id',$request->input('id'))->delete();
    }
    public function UpdateCategory(Request $request){
      Category::where('id',$request->input('id'))->update(['category'=>$request->input('category')]);
      return response()->json(['status'=>'success']);
    }
    public function CategoryBYID(){
      return Category::where('id',request()->input('id'))->first();
    }
   
  
}
