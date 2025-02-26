<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $table = "users";

    protected $fillable = [
        "name",
        "email",
        "password",
        "role",
    ];

    public function consultant()
    {
        return $this->hasOne(Consultant::class, 'id');
    }
}
