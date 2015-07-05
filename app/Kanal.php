<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kanal extends Model {

	//
	protected $fillable = [
        'title',
        'category',
        'description',
        'slug',
        'instagramId',
        'color',
        'image',
    ];

}
