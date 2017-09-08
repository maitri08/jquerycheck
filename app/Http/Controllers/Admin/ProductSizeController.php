<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\ProductSize;
use App\Http\Requests\CreateProductSizeRequest;
use App\Http\Requests\UpdateProductSizeRequest;
use Illuminate\Http\Request;

use App\Products;


class ProductSizeController extends Controller {

	/**
	 * Display a listing of productsize
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $productsize = ProductSize::with("products")->get();

		return view('admin.productsize.index', compact('productsize'));
	}

	/**
	 * Show the form for creating a new productsize
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $products = Products::pluck("product_name", "id")->prepend('Please select', null);

	    
	    return view('admin.productsize.create', compact("products"));
	}

	/**
	 * Store a newly created productsize in storage.
	 *
     * @param CreateProductSizeRequest|Request $request
	 */
	public function store(CreateProductSizeRequest $request)
	{
	    
		ProductSize::create($request->all());

		return redirect()->route(config('quickadmin.route').'.productsize.index');
	}

	/**
	 * Show the form for editing the specified productsize.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$productsize = ProductSize::find($id);
	    $products = Products::pluck("product_name", "id")->prepend('Please select', null);

	    
		return view('admin.productsize.edit', compact('productsize', "products"));
	}

	/**
	 * Update the specified productsize in storage.
     * @param UpdateProductSizeRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateProductSizeRequest $request)
	{
		$productsize = ProductSize::findOrFail($id);

        

		$productsize->update($request->all());

		return redirect()->route(config('quickadmin.route').'.productsize.index');
	}

	/**
	 * Remove the specified productsize from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		ProductSize::destroy($id);

		return redirect()->route(config('quickadmin.route').'.productsize.index');
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
            ProductSize::destroy($toDelete);
        } else {
            ProductSize::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.productsize.index');
    }

}
