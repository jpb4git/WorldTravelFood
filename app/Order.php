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
    public function AddressF()
    {
        return $this->belongsTo('App\Address');
    }

    public function AddressL()
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

}
