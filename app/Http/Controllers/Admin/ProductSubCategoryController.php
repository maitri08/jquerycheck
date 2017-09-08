<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\ProductSubCategory;
use App\Http\Requests\CreateProductSubCategoryRequest;
use App\Http\Requests\UpdateProductSubCategoryRequest;
use Illuminate\Http\Request;

use App\Products;
use App\ProductCategory;


class ProductSubCategoryController extends Controller {

	/**
	 * Display a listing of productsubcategory
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $productsubcategory = ProductSubCategory::with("products")->with("productcategory")->get();

		return view('admin.productsubcategory.index', compact('productsubcategory'));
	}

	/**
	 * Show the form for creating a new productsubcategory
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $products = Products::pluck("product_name", "id")->prepend('Please select', null);
$productcategory = ProductCategory::pluck("category_name", "id")->prepend('Please select', null);

	    
	    return view('admin.productsubcategory.create', compact("products", "productcategory"));
	}

	/**
	 * Store a newly created productsubcategory in storage.
	 *
     * @param CreateProductSubCategoryRequest|Request $request
	 */
	public function store(CreateProductSubCategoryRequest $request)
	{
	    
		ProductSubCategory::create($request->all());

		return redirect()->route(config('quickadmin.route').'.productsubcategory.index');
	}

	/**
	 * Show the form for editing the specified productsubcategory.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$productsubcategory = ProductSubCategory::find($id);
	    $products = Products::pluck("product_name", "id")->prepend('Please select', null);
$productcategory = ProductCategory::pluck("category_name", "id")->prepend('Please select', null);

	    
		return view('admin.productsubcategory.edit', compact('productsubcategory', "products", "productcategory"));
	}

	/**
	 * Update the specified productsubcategory in storage.
     * @param UpdateProductSubCategoryRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateProductSubCategoryRequest $request)
	{
		$productsubcategory = ProductSubCategory::findOrFail($id);

        

		$productsubcategory->update($request->all());

		return redirect()->route(config('quickadmin.route').'.productsubcategory.index');
	}

	/**
	 * Remove the specified productsubcategory from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		ProductSubCategory::destroy($id);

		return redirect()->route(config('quickadmin.route').'.productsubcategory.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            ProductSubCategory::destroy($toDelete);
        } else {
            ProductSubCategory::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.productsubcategory.index');
    }

}
