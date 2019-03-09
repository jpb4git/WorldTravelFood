<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the product that owns the category.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
