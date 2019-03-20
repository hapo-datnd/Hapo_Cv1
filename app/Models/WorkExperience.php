<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{

    protected $fillable = [
        'start_time', 'end_time', 'position', 'work_content', 'cv_id', 'company_id',
    ];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
