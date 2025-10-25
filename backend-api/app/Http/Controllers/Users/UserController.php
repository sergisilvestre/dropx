<?php

namespace App\Http\Controllers\Users;

use App\Application\Users\UseCases\CreateUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Infrastructure\Persistence\Users\EloquentUserRepository;

class UserController extends Controller
{
    private EloquentUserRepository $repository;

    public function __construct(EloquentUserRepository $repository, private CreateUser $createUser)
    {
        $this->repository = $repository;
    }

    public function index(){
        
        $users = $this->repository->all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $user = $this->repository->create([
            'name'  => $request->name,
            'email' => $request->email,
            'role'  => $request->role,
        ]);

        return response()->json($user);
    }
}
