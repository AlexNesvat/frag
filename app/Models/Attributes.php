<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    public function productAttribute(){
        return $this->belongsTo('App\Models\ProductAttribute','attribute_id','id');
    }

    public function value(){
        return $this->hasMany('App\Models\AttributeValue','attribute_id','id');
    }
}
