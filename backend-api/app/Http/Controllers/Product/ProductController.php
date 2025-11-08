<?php

namespace App\Http\Controllers\Product;

use App\Domain\Product\Entities\ProductEntity;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    // private EloquentProductRepository $repository;

    // public function __construct(EloquentProductRepository $repository, private CreateProduct $createProduct)
    // {
    //     $this->repository = $repository;
    // }

    public function index(){

       $products = ProductEntity::paginate(12);

       return response()->json($products);
    }
}
