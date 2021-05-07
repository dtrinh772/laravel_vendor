<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers';

    public function orders(){
        return $this->hasMany('App\Orders', 'customer_id');
    }

    public function productsreviews(){
        return $this->hasMany('App\ProductsReviews', 'product_id');
    }
}
