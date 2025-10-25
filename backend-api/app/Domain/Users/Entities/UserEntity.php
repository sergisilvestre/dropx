<?php

namespace App\Domain\Users\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class UserEntity extends Authenticatable implements JWTSubject
{
    use HasRoles;

    protected $table = 'users';

    protected $hidden = [
        'password',
        'remember_token',
        'updated_at',
        'email_verified_at',
        'created_at',
    ];


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
