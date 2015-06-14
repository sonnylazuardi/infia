<?php namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('home');
	}


	public function getContact()
	{
		return view('contact');
	}

	public function postContact(Request $request)
	{
		$contact = new Contact($request->all());
		$contact->save();
		return redirect('/home/contact')
			->with('alert', 'Terima kasih, pesan Anda sudah terkirim silakan tunggu respon dari kami');
	}
}
