<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

	protected $table = 'blogs';

    protected $fillable = ['title', 'content', 'image'];

    public function postedBy()
    {
    	return $this->belongsTo('App\Blogcategory', 'category_id');
    }

    public function blogcomments()
    {
    	return $this->hasMany('App\Blogcomment');
    }
}
