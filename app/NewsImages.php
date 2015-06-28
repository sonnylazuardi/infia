<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsImages extends Model {

	protected $table = 'news_images';

	protected $fillable = [
		'news_id',
		'image',
	];

	public function getTimestampAttribute()
	{
		return \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
	}


}
