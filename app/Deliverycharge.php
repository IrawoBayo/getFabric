<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliverycharge extends Model
{
    protected $table = 'deliverycharges';

    public function orders()
    {
    	return $this->hasMany('App\Order');
    }
}
