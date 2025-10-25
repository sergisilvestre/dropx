<?php

namespace App\Infrastructure\Persistence\User;

use App\Domain\User\Entities\UserEntity;
use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Infrastructure\Shared\BaseRepository;

class EloquentUserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(UserEntity $model)
    {
        parent::__construct($model);
    }
}
