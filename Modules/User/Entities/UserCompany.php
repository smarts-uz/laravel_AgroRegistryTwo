<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserCompany extends Model
{
    use HasFactory;

    protected $table = "users_company";

    protected $fillable = [
        'name',
        'inn',
        'address',
        'index',
        'email',
        'phone',
        'user_id'
    ];

    protected static function newFactory()
    {
        return \Modules\User\Database\factories\UserCompanyFactory::new();
    }
}
