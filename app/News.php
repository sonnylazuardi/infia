<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class News extends Model {


    use SluggableTrait;

    protected $fillable = [
        'title',
        'content',
        'longitude',
        'latitude',
        'pinned',
        'slug',
        'image',
    ];

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];
//

    public function getTimestampAttribute()
    {
        return \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    }

}
