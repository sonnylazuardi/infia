<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

	protected $fillable = [
    'name',
    'email',
    'subject',
    'message'
  ];

  public function getTimestampAttribute()
  {
    return \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
  }

}
