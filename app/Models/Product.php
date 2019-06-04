<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'sku',
        'description',
        'price',
        'active',
        'subscribe',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributes(){

        return $this->hasMany('App\Models\ProductAttribute','product_id','id');
    }
}
