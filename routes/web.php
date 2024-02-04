<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

///category api here 
Route::get('/category-page', [CategoryController::class,'categorypage']);
Route::post('/create-category', [CategoryController::class,'Createcategory']);
Route::get('/list-category',[CategoryController::class,'listcategory']);
Route::post('/categoryDelete',[CategoryController::class,'DeleteCategory']);
Route::post('/update-category',[CategoryController::class,'UpdateCategory']);
Route::post('/category-By-id',[CategoryController::class,'CategoryBYID']);


///product here all 
Route::get('/create-product',[ProductController::class,'createproduct']);
Route::post('/store-product',[ProductController::class,'storeproduct']);
Route::get('/list-product',[ProductController::class,'productlist']);

