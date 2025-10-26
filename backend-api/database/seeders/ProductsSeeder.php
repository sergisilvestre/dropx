<?php

namespace Database\Seeders;

use App\Domain\Product\Entities\ProductCategoryEntity;
use App\Domain\Product\Entities\ProductEntity;
use App\Domain\Supplier\Entities\SupplierEntity;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (ProductCategoryEntity::all() as $category) {

            foreach (SupplierEntity::all() as $supplier) {

                for ($i = 1; $i <= 12; $i++) {

                    ProductEntity::create([
                        'name'              => 'Product ' . $i,
                        'description'       => 'Description for Product ' . $i,
                        'price'             => number_format(rand(1000, 10000) / 100, 2),
                        'image_url'         => 'https://placehold.co/400',
                        'category_id'       => $category->id,
                        'supplier_id'       => $supplier->id,
                        'stock_quantity'    => rand(1, 100),
                    ]);
                }
            }
        }
    }
}
