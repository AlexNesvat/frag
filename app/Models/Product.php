<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'description',
        'price',
    ];
    //use softDeletes;
    public function attributes(){

        return $this->hasMany('App\Models\ProductAttribute','product_id','id');
    }
}
