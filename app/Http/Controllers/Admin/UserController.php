<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$users = User::orderBy('created_at', 'desc')->get();

		return view('admin.user.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate(Request $request)
	{	
		$user = new User();
		$scenario = 'create';
		return view('admin.user.form', compact('user', 'scenario'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate(Request $request)
	{
		$user = new User($request->all());
		$user->password = \Hash::make($user->password);
    $user->save();
    return redirect('/admin/user/index')
       ->with('alert', 'User created');
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
		$user = User::findOrFail($id);
		$scenario = 'update';
		return view('admin.user.form', compact('user', 'scenario'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postUpdate(Request $request, $id)
	{
		$user = User::findOrFail($id);
    $user->fill($request->all());
    $user->save();
    return redirect('admin/user/index')
        ->with('alert', 'Post updated');
	}

	
	public function getDelete($id) {
		$user = User::findOrFail($id);
		$user->delete();
		return redirect('/admin/user/index')
			->with('alert', 'User deleted');
	}

}
