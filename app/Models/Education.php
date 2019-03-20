<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{

    protected $fillable = [
        'start_time', 'end_time', 'position', 'achievement', 'cv_id', 'school_id',
    ];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
