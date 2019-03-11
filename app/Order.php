<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    /**
     *
     * Get the Address record associated with the Order.
     * bug how to put a second FK on the same table ?
     * tryed that stuff but really not sure about that ...
     * wait and see the damocles-camille-point-of-vue.
     *
     */
    public function adressDelivery()
    {
        return $this->belongsTo('App\Address','address_shipping' );
    }

    public function adressShipping()
    {
        return $this->belongsTo('App\Address');
    }


    /**
     * The pruducts that belong to the orders. manyToMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }


    public function user(){
        return $this->belongsTo('App\User');
    }

}
