<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class News extends Model {

<<<<<<< HEAD
    use SluggableTrait;

    protected $fillable = [
        'title',
        'content',
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
=======
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
>>>>>>> 858159905725a78ff949d9f8f459dca2b8f6ef66

}
