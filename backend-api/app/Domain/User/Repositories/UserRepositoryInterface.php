<?php

namespace App\Domain\User\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface UserRepositoryInterface 
{
    public function create(array $data): Model;

    public function all(): Collection;

    public function find(int $id): ?Model;

    public function update(int $id, array $data): ?Model;

    public function delete(int $id): bool;
}
