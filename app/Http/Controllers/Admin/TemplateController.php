<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Template;
use App\Http\Requests\CreateTemplateRequest;
use App\Http\Requests\UpdateTemplateRequest;
use Illuminate\Http\Request;



class TemplateController extends Controller {

	/**
	 * Display a listing of template
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $template = Template::all();

		return view('admin.template.index', compact('template'));
	}

	/**
	 * Show the form for creating a new template
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.template.create');
	}

	/**
	 * Store a newly created template in storage.
	 *
     * @param CreateTemplateRequest|Request $request
	 */
	public function store(CreateTemplateRequest $request)
	{
	    
		Template::create($request->all());

		return redirect()->route(config('quickadmin.route').'.template.index');
	}

	/**
	 * Show the form for editing the specified template.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$template = Template::find($id);
	    
	    
		return view('admin.template.edit', compact('template'));
	}

	/**
	 * Update the specified template in storage.
     * @param UpdateTemplateRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTemplateRequest $request)
	{
		$template = Template::findOrFail($id);

        

		$template->update($request->all());

		return redirect()->route(config('quickadmin.route').'.template.index');
	}

	/**
	 * Remove the specified template from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Template::destroy($id);

		return redirect()->route(config('quickadmin.route').'.template.index');
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
            Template::destroy($toDelete);
        } else {
            Template::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.template.index');
    }

}
