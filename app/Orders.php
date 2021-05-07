<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    public function customers(){
        return $this->belongsTo('App\Customers', 'customer_id');
    }
}
