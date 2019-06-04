<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductAttribute
 * @package App\Models
 */
class ProductAttribute extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function attributesValues()
    {
        return $this->hasOne('App\Models\AttributeValue','id','value_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function productAttributes()
    {
        return $this->hasOne('App\Models\Attributes','id','attribute_id');
    }

}
