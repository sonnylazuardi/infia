<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Kanal;

class KanalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		//
		return view('kanal.index');
	}

	public function getCategory($name)
	{
		$items = Kanal::where('category',$name)
			->get();
		return view('kanal.category', compact('items'));
	}
}
