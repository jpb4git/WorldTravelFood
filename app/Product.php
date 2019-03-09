<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    /**
     * Get the category record associated with the product.
     */
    public function category()
    {

        return $this->belongsTo('App\Category');
    }

    /**
     * Get the discount that owns the product.
     */
    public function discount()
    {
        return $this->hasMany('App\Discount');
    }


    /**
     * The orders that belong to the product. manyToMany
     */
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

}
