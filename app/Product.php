<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Product extends Model
{
    /**
     * Get the category record associated with the product.
     */
    public function category(){
        return $this->hasOne('Category');
    }

}
