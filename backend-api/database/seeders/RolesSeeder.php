<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (
            ['admin', 'seller', 'customer'] as $roleName
        ) {
            Role::create([
                'name'          => $roleName,
                'guard_name'    => 'api',
            ]);
        }
    }
}
