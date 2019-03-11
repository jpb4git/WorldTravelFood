<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //
    /**
     * Get the product record associated with the discount.
     */
    public function Product(){
        // un produit unique par discount
        return $this->belongsTo('App\Product');
    }

}
