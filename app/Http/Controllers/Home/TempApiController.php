<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;
use App\Category;
use App\SubCategory;
use App\Template;
use App\TemplateOffset;
use View;
class TemplateApiController extends Controller
{
    public function templateapi(){
        dd(1);
        $generateapi = TemplateOffset::get();
        dd($generateapi);
    }
    

}
