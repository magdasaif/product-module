<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name_ar','name_en'];
    public $table       = "product_2s";
    // protected static function newFactory(): ProductFactory
    // {
    //     //return ProductFactory::new();
    // }
}
