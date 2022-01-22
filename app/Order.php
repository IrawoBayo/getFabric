<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable=['shipping_fullname','shipping_state','shipping_city', 'deliverycharges_id', 'shipping_address','shipping_phone','shipping_zipcode','payment_method', 'orderID', 'amount'];

    public function items()
    {
    	return $this->belongsToMany(Product::class, 'order_items','order_id','product_id')->withPivot('quantity','price');
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function delivery()
    {
        return $this->belongsTo('App\Deliverycharge', 'deliverycharges_id');
    }

}







