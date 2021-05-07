<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersDetails extends Model
{
    protected $table = 'ordersdetails';


    public function payments(){
        return $this->belongsTo('App\Payments', 'payment_id');
    }

    public function products(){
        return $this->belongsTo('App\Products', 'product_id');
    }

    public function discountcodes(){
        return $this->belongsTo('App\DiscountCode', 'discount_id');
    }
}
