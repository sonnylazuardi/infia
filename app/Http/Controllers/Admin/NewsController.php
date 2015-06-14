<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$news = News::orderBy('created_at', 'desc')->get();

		return view('admin.news.index', compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate(Request $request)
	{	
		$news = new News();
		return view('admin.news.form', compact('news'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate(Request $request)
	{
		$news = new News($request->all());
    $news->save();
    return redirect('/admin/news/index')
       ->with('alert', 'News created');
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
		$news = News::findOrFail($id);
		return view('admin.news.form', compact('news'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postUpdate(Request $request, $id)
	{
		$news = News::findOrFail($id);
    $news->fill($request->all());
    $news->save();
    return redirect('admin/news/index')
        ->with('alert', 'Post updated');
	}

	
	public function getDelete($id) {
		$news = News::findOrFail($id);
		$news->delete();
		return redirect('/admin/news/index')
			->with('alert', 'News deleted');
	}

}
