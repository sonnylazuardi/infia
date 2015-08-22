<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use App\NewsImages;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$news = News::orderBy('created_at', 'desc')->paginate(10);;
		$pinnedNews = News::where('pinned',true)->first();
		return view('admin.news.index', compact('news','pinnedNews'));
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
	    if ($images = $request->input('images')) {
	    	foreach ($images as $item) {
	    		NewsImages::create([
	    			'news_id' => @$news->id,
	    			'image'=>$item,
	    		]);
	    	}
	    }
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

	    if ($images = $request->input('images')) {
	    	$old_images = NewsImages::where('news_id', $id)->delete();
	    	foreach ($images as $item) {
	    		NewsImages::create([
	    			'news_id' => $id,
	    			'image'=>$item,
	    		]);
	    	}
	    }

	    if ($pinned = $request->input('pinned')){
	    	$old_pinned = News::where('pinned',true)->update(['pinned' => false]);
	    }

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
