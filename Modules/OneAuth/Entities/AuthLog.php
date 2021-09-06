<?php

namespace Modules\OneAuth\Entities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AuthLog extends Model
{
    use HasFactory;

    protected $fillable = ['ip', 'user_id'];

    protected static function newFactory()
    {
        return \Modules\OneAuth\Database\factories\AuthLogFactory::new();
    }
}
