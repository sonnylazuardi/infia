<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Setting;

class AboutController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$settings = Setting::all();

		$home_picture = array_first($settings, function($key, $value)
		{
		    return $value->key == 'home_picture';
		});
		$history = array_first($settings, function($key, $value)
		{
		    return $value->key == 'history';
		});

		return view('admin.about.index', compact('home_picture', 'history'));
	}

	public function postIndex(Request $request)
	{
		$home_picture = Setting::where('key', 'home_picture')->first();
		$history = Setting::where('key', 'history')->first();

		$home_picture->value = $request->input('home_picture');
		$history->text = $request->input('history');

		$home_picture->save();
		$history->save();

		return redirect('admin/about/index')
			->with('alert', 'successfully updated');
	}
}