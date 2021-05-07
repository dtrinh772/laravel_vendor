<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsReviews extends Model
{
    protected $table = 'productsreviews';

    public function products(){
        return $this->belongsTo('App\Products', 'product_id');
    }
}
