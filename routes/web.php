<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','Home\ProductController@home');
Route::get('/listing','Home\ProductController@listingpage');

Route::get('/photobook','Home\ProductController@photobook');
//Auth::routes();
Route::post('/template-product','Template\TemplateController@sizeselection');

Route::get('/testing-layout/{pageproduct}-{pageproductval}','Template\TemplateController@designermenu');

Route::post('/template-offset','Template\TemplateController@cordinate');

Route::get('/template-api','Home\ProductController@templateapi');

Route::get('/template',function(){
	return view('template.template');
});

Route::get('/test-dragresize',function(){
	return view('template.maitri');
});

Route::get('/custom-template',function(){
	return view('template.customtemplate');
});


Route::get('/custom-layout',function(){
	return view('template.testlayout');
});

Route::get('/display-layout',function(){
	return view('template.frontlayout');
});



Route::get('/designer-layout',function(){
	return view('template.designer');
});

Route::get('/product-selection',function(){
	return view('template.productsize');
});





Route::get('/home', 'HomeController@index')->name('home');


Route::get('signin','Authcustomer\LoginController@showLoginForm');
Route::post('signin','LoginHandleController@login');
Route::get('signout','LoginHandleController@logout');

Route::get('signup','LoginHandleController@showRegisterForm');
Route::post('signup','LoginHandleController@register');


Route::post('autosearch','Search\SearchProductData@index');
Route::get('searchajax',array('as'=>'searchajax','uses'=>'Search\SearchProductData@autoComplete'));

// Made by Mr. Prashant Sharma
Route::get('demo', function(){
	return view('template.demo');
});
Route::get('prashant', function(){
	return view('template.prashant_temp');
});

Route::get('temp-builder', function(){
	return view('angular.index');
});




