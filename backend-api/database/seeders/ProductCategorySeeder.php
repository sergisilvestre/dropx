<?php

namespace Database\Seeders;

use App\Domain\Product\Entities\ProductCategoryEntity;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (
            [
                'Electronics',
                'Clothing',
                'Sports',
                'Office Supplies'
            ] as $category
        ) {
            ProductCategoryEntity::create([
                'name' => $category
            ]);
        }
    }
}
