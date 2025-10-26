<?php

namespace App\Domain\Supplier\Entities;

use Illuminate\Database\Eloquent\Model;

class SupplierEntity extends Model
{
    protected $table = 'suppliers';
    
    protected $fillable = ['name'];
}