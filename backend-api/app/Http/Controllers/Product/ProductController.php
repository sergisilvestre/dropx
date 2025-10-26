<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    // private EloquentProductRepository $repository;

    // public function __construct(EloquentProductRepository $repository, private CreateProduct $createProduct)
    // {
    //     $this->repository = $repository;
    // }

    public function index(){

        $response = file_get_contents('https://restful.export.api/products.json');
        $products = json_decode($response, true);

        return $products;
    }
}
