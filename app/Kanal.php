<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kanal extends Model {

	//
	protected $fillable = [
        'title',
        'category',
        'description',
        'instagramAccount',
        'instagramId',
        'color',
        'image',
    ];

    public function getTimestampAttribute()
    {
        return \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    }

}
