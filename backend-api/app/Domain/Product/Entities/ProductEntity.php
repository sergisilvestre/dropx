<?php

namespace App\Domain\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductEntity extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'description', 'price', 'image_url', 'category_id', 'supplier_id', 'stock_quantity'];
}