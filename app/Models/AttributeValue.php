<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttributeValue
 * @package App\Models
 */
class AttributeValue extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attributeValue(){
        return $this->belongsTo('App\Models\ProductAttribute','id','value_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function valueOfAttribute()
    {
        return $this->belongsTo('App\Models\Attributes','id','value_id');
    }
}
