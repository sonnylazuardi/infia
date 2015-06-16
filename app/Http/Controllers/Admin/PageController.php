<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$page = Page::orderBy('created_at', 'desc')->get();

		return view('admin.page.index', compact('page'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate(Request $request)
	{	
		$page = new Page();
		return view('admin.page.form', compact('page'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate(Request $request)
	{
		$page = new Page($request->all());
    $page->save();
    return redirect('/admin/page/index')
       ->with('alert', 'Page created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getUpdate($id)
	{
		$page = Page::findOrFail($id);
		return view('admin.page.form', compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postUpdate(Request $request, $id)
	{
		$page = Page::findOrFail($id);
    $page->fill($request->all());
    $page->save();
    return redirect('admin/page/index')
        ->with('alert', 'Page updated');
	}

	
	public function getDelete($id) {
		$page = Page::findOrFail($id);
		$page->delete();
		return redirect('/admin/page/index')
			->with('alert', 'Page deleted');
	}

}
