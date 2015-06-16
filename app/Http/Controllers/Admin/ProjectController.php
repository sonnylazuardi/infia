<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\project;
use Illuminate\Http\Request;

class projectController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$project = project::orderBy('created_at', 'desc')->get();

		return view('admin.project.index', compact('project'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate(Request $request)
	{	
		$project = new project();
		return view('admin.project.form', compact('project'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate(Request $request)
	{
		$project = new project($request->all());
    $project->save();
    return redirect('/admin/project/index')
       ->with('alert', 'project created');
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
		$project = project::findOrFail($id);
		return view('admin.project.form', compact('project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postUpdate(Request $request, $id)
	{
		$project = project::findOrFail($id);
    $project->fill($request->all());
    $project->save();
    return redirect('admin/project/index')
        ->with('alert', 'project updated');
	}

	
	public function getDelete($id) {
		$project = project::findOrFail($id);
		$project->delete();
		return redirect('/admin/project/index')
			->with('alert', 'project deleted');
	}

}
