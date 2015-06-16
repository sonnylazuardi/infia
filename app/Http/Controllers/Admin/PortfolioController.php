<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$portfolio = portfolio::orderBy('created_at', 'desc')->get();

		return view('admin.portfolio.index', compact('portfolio'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate(Request $request)
	{	
		$portfolio = new portfolio();
		return view('admin.portfolio.form', compact('portfolio'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate(Request $request)
	{
		$portfolio = new portfolio($request->all());
    $portfolio->save();
    return redirect('/admin/portfolio/index')
       ->with('alert', 'portfolio created');
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
		$portfolio = portfolio::findOrFail($id);
		return view('admin.portfolio.form', compact('portfolio'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postUpdate(Request $request, $id)
	{
		$portfolio = portfolio::findOrFail($id);
    $portfolio->fill($request->all());
    $portfolio->save();
    return redirect('admin/portfolio/index')
        ->with('alert', 'portfolio updated');
	}

	
	public function getDelete($id) {
		$portfolio = portfolio::findOrFail($id);
		$portfolio->delete();
		return redirect('/admin/portfolio/index')
			->with('alert', 'portfolio deleted');
	}

}
