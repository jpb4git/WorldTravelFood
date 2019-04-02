<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function discount()
    {
        return $this->hasOne('App\Discount');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
}
