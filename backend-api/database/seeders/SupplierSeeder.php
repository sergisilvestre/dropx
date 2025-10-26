<?php

namespace Database\Seeders;

use App\Domain\Supplier\Entities\SupplierEntity;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // EPROLO => https://eprolo.com/
        // AutoDS
        // Wholesale2B
        // Sup Dropshipping
        // Rewix

        foreach (
            [
                'Eprolo',
                'AutoDS',
                'Wholesale2B',
                'Sup Dropshipping',
                'Rewix'
            ] as $supplierName
        ) {

            SupplierEntity::create([
                'name' => $supplierName
            ]);
        }
    }
}
