<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    /**
     *
     * Get the Address record associated with the Order.
     * bug how to put a second FK on the same table
     * tryed that stuff but really not sure about that ...
     * wait and see
     *
     */
    public function AddressF(){
        return $this->hasOne('Address');
    }

    public function AddressL(){
        return $this->hasOne('Address');
    }
}
