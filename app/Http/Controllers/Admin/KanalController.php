<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kanal;
use Illuminate\Http\Request;

class KanalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$items = Kanal::orderBy('created_at', 'desc')->get();

		return view('admin.kanal.index', compact('items'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate(Request $request)
	{	
		$item = new Kanal();
		return view('admin.kanal.form', compact('item'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate(Request $request)
	{
		$item = new Kanal($request->all());
	    $item->save();
	    return redirect('/admin/kanal/index')
	       ->with('alert', 'Item Kanal berhasil dibuat');
	}

	public function getUpdate($id)
	{
		$item = Kanal::findOrFail($id);
		return view('admin.kanal.form', compact('item'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postUpdate(Request $request, $id)
	{
		$item = Kanal::findOrFail($id);
	    $item->fill($request->all());

	    $item->save();
	    return redirect('admin/kanal/index')
	        ->with('alert', 'Item Kanal berhasil diperbarui');
	}

	
	public function getDelete($id) {
		$item = Kanal::findOrFail($id);
		$item->delete();
		return redirect('/admin/kanal/index')
			->with('alert', 'Item Kanal berhasil dihapus');
	}


}
