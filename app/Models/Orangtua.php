<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Orangtua extends Authenticatable
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $guard = "orangtua";
    protected $table='user_orangtua';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
