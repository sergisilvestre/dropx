<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    private EloquentStoreRepository $repository;

    public function __construct(EloquentStoreRepository $repository, private CreateStore $createStore)
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
