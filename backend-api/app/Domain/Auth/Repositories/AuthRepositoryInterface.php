<?php

namespace App\Domain\Auth\Repositories;

use Illuminate\Database\Eloquent\Model;

interface AuthRepositoryInterface
{
    public function login(array $data): array;

    public function logout(): bool;

    public function getUserById(int $id): ?Model;
}
