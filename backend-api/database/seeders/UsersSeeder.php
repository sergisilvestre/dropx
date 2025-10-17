<?php

namespace Database\Seeders;

use App\Application\Users\UseCases\CreateUser;
use App\Domain\Users\Entities\UserEntity;
use App\Infrastructure\Persistence\Users\EloquentUserRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{    
    public function run(): void
    {
        $userEntity = new UserEntity();
        $userRepo = new EloquentUserRepository($userEntity);

        $createUser = new CreateUser($userRepo);

        $createUser->execute([
            'name'      => 'Admin User',
            'email'     => 'admin@example.com',
            'password'  => Hash::make('password')
        ]);

        $createUser = new CreateUser($userRepo);

        $createUser->execute([
            'name'      => 'Seller User',
            'email'     => 'seller@example.com',
            'password'  => Hash::make('password')
        ]);

        for ($i = 0; $i < 10; $i++) {

            $createUser = new CreateUser($userRepo);

            $createUser->execute([
                'name'      => 'Customer User',
                'email'     => 'customer'.$i.'@example.com',
                'password'  => Hash::make('password')
            ]);
        }
    }
}
