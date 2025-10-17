<?php

namespace Database\Seeders;

use App\Application\Users\UseCases\CreateUser;
use App\Domain\Users\Entities\UserEntity;
use App\Infrastructure\Persistence\Users\EloquentUserRepository;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    public EloquentUserRepository $userRepo;

    public function __construct(EloquentUserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function run(): void
    {
        // Create an admin user
        $role = Role::where('name', 'admin')->first();

        $this->createUser([
            'name'      => "Admin User",
            'email'     => "admin@example.com",
            'password'  => Hash::make('password')
        ], $role);

        // Create a seller user
        $this->createUser([
            'name'      => "Seller User",
            'email'     => "seller@example.com",
            'password'  => Hash::make('password')
        ], $role);

        $role = Role::where('name', 'customer')->first();

        // Create 10 customer users
        for ($i = 0; $i < 10; $i++) {

            $this->createUser([
                'name'      => "Customer User $i",
                'email'     => "customer$i@example.com",
                'password'  => Hash::make('password')
            ], $role);
        }
    }

    public function createUser($userInfo, $role)
    {
        $user = new CreateUser($this->userRepo);

        $user = $user->execute($userInfo);

        $user->assignRole($role);
    }
}
