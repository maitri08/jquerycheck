<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use View;
class ProductController extends Controller
{
    public function home(){

 
    	$level1 = Product::all();
    	// $level2 = Product::join('product_category', 'product.id', '=', 'product_category.parent_id')->get();
    	// dd($level2);

    	return View::make('home.main',compact('level1'));
    }

    public function photobook(){
 
    	$bookcategory = SubCategory::where('product_type','1')->get();
    	$category = Category::where('parent_id','1')->get();
    	return View::make('photobook.photobook',compact('bookcategory','category'));
    }
}
