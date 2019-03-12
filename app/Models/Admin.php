<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    use Notifiable;

    const ADMIN = 2;
    const SUPER_ADMIN = 1;
    const PAGINATION = 5;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password','type',
    ];

    protected $hidden = [
        'password','remember_token',
    ];
}
