<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestcomment extends Model
{
    public function req()
    {
    	return $this->belongsTo('App\Req');
    }
}
