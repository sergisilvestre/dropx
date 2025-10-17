<?php

namespace App\Interfaces\Http\Controllers;

use App\Application\Users\UseCases\CreateUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private CreateUser $createUser;

    public function __construct(CreateUser $createUser)
    {
        $this->createUser = $createUser;
    }

    public function store(Request $request)
    {
        $user = $this->createUser->execute(
            $request->name,
            $request->email,
            $request->role
        );

        return response()->json($user);
    }
}
