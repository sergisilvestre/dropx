<?php

namespace App\Domain\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryEntity extends Model {

    protected $table = 'product_category';

    protected $fillable = ['name'];
}
