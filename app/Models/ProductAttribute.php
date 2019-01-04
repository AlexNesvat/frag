<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{

    public function attribute(){
        return $this->belongsTo('App\Models\Product','attribute_id','id');
    }

    public function productAttributes() {
        return $this->belongsToMany('App\Models\Attributes','product_attributes','product_id','attribute_id');
    }

}
