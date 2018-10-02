<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use softDeletes;
    public function attributes(){

        return $this->hasMany('App\Models\ProductAttribute','product_id','id');
    }
}
