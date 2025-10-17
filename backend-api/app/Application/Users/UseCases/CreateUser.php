<?php

namespace App\Application\Users\UseCases;

use App\Domain\Users\Repositories\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CreateUser
{
    private UserRepositoryInterface $userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function execute($data): Model
    {
        return $this->userRepo->create($data);
    } 
}
