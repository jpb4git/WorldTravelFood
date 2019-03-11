<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function ordersShipping()
    {
        return $this->hasMany('App\Order', 'address_shipping_id');
    }

    public function ordersDelivery()
    {
        return $this->hasMany('App\Order', 'address_delivery_id');
    }


}
