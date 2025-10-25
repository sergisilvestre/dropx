<?php

namespace App\Domain\Users\Entities;

use App\Domain\User\Entities\UserEntity;

class AuthEntity extends UserEntity
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
