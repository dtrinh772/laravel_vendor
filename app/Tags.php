<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';
    public $timestamps = false;

    public function products(){
        return $this->belongsToMany('App\Products', 'products_tags', 'product_id', 'id');
    }
}
