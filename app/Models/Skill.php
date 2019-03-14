<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    const PROFESSIONAL = 1;
    const PERSONAL = 2;

    protected $fillable = [
        'name', 'is_verified',
    ];

    public function cvs()
    {
        return $this->belongsToMany(Cv::class)->withPivot('percent','type');
    }
}
