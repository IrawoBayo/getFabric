<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category as ModelsCategory;

class Category extends ModelsCategory
{
    public function products()
    {
    	return $this->belongsToMany(Product::class,'product_categories');
    }
}
