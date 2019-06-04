<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attributes
 * @package App\Models
 */
class Attributes extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributeValue(){
        return $this->hasMany('App\Models\AttributeValue','attribute_id','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attributeOfProduct()
    {
        return $this->belongsTo('App\Models\ProductAttribute','value_id','id');
    }
}
