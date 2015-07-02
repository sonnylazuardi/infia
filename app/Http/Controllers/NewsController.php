<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller {

	/**
	 * Display a listing of the news.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$news = News::orderBy('created_at', 'desc')->get();
		$pinnedNews = News::where('pinned',true)->first();
		return view('news.index', compact('news','pinnedNews'));
	}

	public function getSingle($id){
		$item = News::find($id);
		return view('news.single', compact('item'));
	}


}
