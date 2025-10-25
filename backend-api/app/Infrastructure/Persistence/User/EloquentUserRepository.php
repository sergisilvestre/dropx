<?php

namespace App\Infrastructure\Persistence\User;

use App\Domain\Users\Entities\UserEntity;
use App\Domain\Users\Repositories\UserRepositoryInterface;
use App\Infrastructure\Shared\BaseRepository;

class EloquentUserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(UserEntity $model)
    {
        parent::__construct($model);
    }
}
