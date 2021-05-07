<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = "payments";

    public function payments(){
        return $this->hasMany('App\OrdersDetails', 'payment_id');
    }
}
