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
		$home_maskot = array_first($settings, function($key, $value)
		{
		    return $value->key == 'home_maskot';
		});

		return view('admin.about.index', compact('home_picture', 'history', 'home_maskot'));
	}

	public function postIndex(Request $request)
	{
		$home_picture = Setting::where('key', 'home_picture')->first();
		$history = Setting::where('key', 'history')->first();
		$home_maskot = Setting::where('key', 'home_maskot')->first();

		$home_picture->value = $request->input('home_picture');
		$history->text = $request->input('history');
		$home_maskot->text = $request->input('home_maskot');

		$home_picture->save();
		$history->save();
		$home_maskot->save();

		return redirect('admin/about/index')
			->with('alert', 'successfully updated');
	}
}