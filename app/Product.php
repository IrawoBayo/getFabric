<?php

namespace App;

use App\Shop;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = [];
	
    public function shop()
    {
    	return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function products()
    {
    	return $this->belongsTo(Product::class, 'shop_id');	
    }

    public function wishlist()
    {
        return $this->belongsToMany(Wishlist_model::class);
    }


}
