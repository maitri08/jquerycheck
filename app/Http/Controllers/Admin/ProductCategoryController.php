<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\ProductCategory;
use App\Http\Requests\CreateProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use Illuminate\Http\Request;

use App\Products;


class ProductCategoryController extends Controller {

	/**
	 * Display a listing of productcategory
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $productcategory = ProductCategory::with("products")->get();

		return view('admin.productcategory.index', compact('productcategory'));
	}

	/**
	 * Show the form for creating a new productcategory
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $products = Products::pluck("product_name", "id")->prepend('Please select', null);

	    
        $status = ProductCategory::$status;

	    return view('admin.productcategory.create', compact("products", "status"));
	}

	/**
	 * Store a newly created productcategory in storage.
	 *
     * @param CreateProductCategoryRequest|Request $request
	 */
	public function store(CreateProductCategoryRequest $request)
	{
	    
		ProductCategory::create($request->all());

		return redirect()->route(config('quickadmin.route').'.productcategory.index');
	}

	/**
	 * Show the form for editing the specified productcategory.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$productcategory = ProductCategory::find($id);
	    $products = Products::pluck("product_name", "id")->prepend('Please select', null);

	    
        $status = ProductCategory::$status;

		return view('admin.productcategory.edit', compact('productcategory', "products", "status"));
	}

	/**
	 * Update the specified productcategory in storage.
     * @param UpdateProductCategoryRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateProductCategoryRequest $request)
	{
		$productcategory = ProductCategory::findOrFail($id);

        

		$productcategory->update($request->all());

		return redirect()->route(config('quickadmin.route').'.productcategory.index');
	}

	/**
	 * Remove the specified productcategory from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		ProductCategory::destroy($id);

		return redirect()->route(config('quickadmin.route').'.productcategory.index');
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
            ProductCategory::destroy($toDelete);
        } else {
            ProductCategory::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.productcategory.index');
    }

}
