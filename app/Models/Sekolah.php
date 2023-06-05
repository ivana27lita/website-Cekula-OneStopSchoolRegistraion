<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Authenticatable
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $guard = "sekolah";
    protected $table='user_sekolah';

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
