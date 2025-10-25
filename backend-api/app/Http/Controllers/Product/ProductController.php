<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    private EloquentProductRepository $repository;

    public function __construct(EloquentProductRepository $repository, private CreateProduct $createProduct)
    {
        $this->repository = $repository;
    }
}
