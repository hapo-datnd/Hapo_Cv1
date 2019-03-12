<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $fillable = [
        'name', 'is_verified',
    ];


    public function education()
    {
        $this->hasMany(Education::class);
    }
}
