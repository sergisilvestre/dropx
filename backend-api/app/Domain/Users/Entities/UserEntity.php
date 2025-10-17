<?php

namespace App\Domain\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class UserEntity extends Model
{
    use HasRoles;

    protected $table = 'users';
}
