<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagesProducts extends Model
{

    protected $table = 'imagesproducts';
    //protected $touches = ['products'];
    public $timestamps = false;

    protected $fillable = [
        'product_id', 'imagePath'
    ];

    public function products(){
        return $this->belongsTo('App\Products', 'product_id', 'id');
    }
}
