<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
//    public function productAttributes(){
//        return $this->belongsToMany('App\Models\ProductAttribute','product_attributes','attribute_id','product_id');
//    }

    public function attributeValue(){
        return $this->hasMany('App\Models\AttributeValue','attribute_id','id');
    }

    public function attributeOfProduct()
    {
        return $this->belongsTo('App\Models\ProductAttribute','value_id','id');
    }
}
