<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;

class SearchProductData extends Controller
{

    public function autoComplete(Request $request) {
        $query = $request->get('term','');
        
         $autodata=Product::where('product_name','LIKE','%'.$query.'%')->get();
        $data =array();
         foreach ($autodata as $theme) {
                $data[]=array('value'=>$theme->product_name,'id'=>$theme->id);
        }
            if(count($data))
             return $data;
         else
            return ['value'=>'No Result Found','id'=>''];
    }

    public function index(Request $request){
        $query = $request->get('searchtheme');
        $searchdata=Product::where('product_name','LIKE','%'.$query.'%')->get();
        $data =array();
        foreach ($searchdata as $themesearch) {
            $data[]=array('value'=>$themesearch->product_name,'id'=>$themesearch->id);
        }
        if(count($data))
            return $data;
        else
            return ['value'=>'No Result Found','id'=>''];

    }

}
