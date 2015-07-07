<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
		return view('admin.contact.index', compact('contacts'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{
		$contact = Contact::findOrFail($id);
		$contact->delete();
		return redirect('/admin/contact');
	}

}
