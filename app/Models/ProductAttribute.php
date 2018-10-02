<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{

    public function attribute(){
        return $this->belongsTo('App\Models\Product','attribute_id','id');
    }


}
