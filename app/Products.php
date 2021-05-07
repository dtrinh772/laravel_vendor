<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    protected $fillable = [
        'productName',
        'description',
        'quantity',
        'price',
        'reducedPrice',
        'tag_id',
        'category_id',
        'brand_id',
        'datesubmit',
        'status'
    ];


    public function tags(){
        return $this->belongsToMany('App\Tags', 'products_tags', 'tag_id', 'id');
    }

    public function categories(){
        return $this->belongsTo('App\Categories', 'category_id');
    }

    public function brands(){
        return $this->belongsTo('App\Brands', 'brand_id');
    }

    public function productsreviews(){
        return $this->hasMany('App\ProductsReviews', 'product_id');
    }

    public function imagesproducts(){
        return $this->hasMany('App\ImagesProducts', 'product_id');
    }

}
