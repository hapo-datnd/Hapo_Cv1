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
        return $this->hasMany(Education::class);
    }
}
