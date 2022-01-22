<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
	protected $table = 'reqs';

    protected $fillable=['user_id', 'request_type', 'material_name', 'description', 'image'];

    public function products()
    {
    	return $this->belongsTo(Product::class, 'shop_id');	
    }

    public function requestcomments()
    {
    	return $this->hasMany('App\Requestcomment');
    }
}
