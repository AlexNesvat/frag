<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{

    public function attributeValue(){
        return $this->belongsTo('App\Models\ProductAttribute','value_id','id');
    }
}
