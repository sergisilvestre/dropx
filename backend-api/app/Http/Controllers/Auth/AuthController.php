<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Infrastructure\Persistence\Auth\EloquentAuthRepository;

class AuthController extends Controller
{
    private EloquentAuthRepository $repository;

    public function __construct(EloquentAuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function login(Request $request)
    {

        $token = $this->repository->login($request->only('email', 'password'));

        return response()->json([
            'message'   => 'Successfully logged in',
            'data'      => [
                'token'     => $token['access_token'],
                'id'        => auth('api')->user()->id,
                'email'     => auth('api')->user()->email,
                'name'      => auth('api')->user()->name,
            ],
        ]);
    }

    public function logout()
    {
        $this->repository->logout();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
