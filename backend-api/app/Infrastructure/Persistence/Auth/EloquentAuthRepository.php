<?php

namespace App\Infrastructure\Persistence\Auth;

use App\Domain\Auth\Repositories\AuthRepositoryInterface;
use App\Domain\User\Entities\UserEntity;
use App\Domain\Auth\Entities\AuthEntity;
use App\Infrastructure\Shared\BaseRepository;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class EloquentAuthRepository extends BaseRepository implements AuthRepositoryInterface
{
    public function __construct(AuthEntity $model)
    {
        parent::__construct($model);
    }

    public function login(array $data): array
    {
        $user = UserEntity::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {

            return [
                'error' => 'Invalid credentials'
            ];
        }

        $token = auth('api')->login($user);

        return [
            'access_token'  => $token,
            'token_type'    => 'bearer',
            'expires_in'    => JWTAuth::factory()->getTTL() * 60
        ];
    }

    public function logout(): bool
    {
        return auth('api')->logout() ? true : false;
    }

    public function getUserById(int $userId): ?UserEntity
    {
        return $this->model->find($userId);
    }
}
