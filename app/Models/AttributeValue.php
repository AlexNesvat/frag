<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{

    public function attributeValue(){
        return $this->belongsTo('App\Models\ProductAttribute','id','value_id');
    }
}
