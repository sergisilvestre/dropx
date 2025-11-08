<?php

namespace App\Http\Controllers\User;

use App\Application\User\UseCases\CreateUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Infrastructure\Persistence\User\EloquentUserRepository;

class UserController extends Controller
{
    private EloquentUserRepository $repository;

    public function __construct(EloquentUserRepository $repository, private CreateUser $createUser)
    {
        $this->repository = $repository;
    }

    public function index(){
        
        $items = $this->repository->all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $item = $this->repository->create([
            'name'  => $request->name,
            'email' => $request->email,
            'role'  => $request->role,
        ]);

        return response()->json($item);
    }
}
