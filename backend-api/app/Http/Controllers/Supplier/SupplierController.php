<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SupplierController extends Controller
{
    private EloquentSupplierRepository $repository;

    public function __construct(EloquentSupplierRepository $repository, private CreateSupplier $createSupplier)
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
