<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    protected $fillable = [
        'name', 'is_verified',
    ];

    public function cv()
    {
        $this->belongsToMany(Cv::class);
    }
}
