<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    protected $fillable = [
        'start_time', 'name', 'end_time', 'customer', 'position', 'description', 'team_size', 'responsibilities',
        'technologies', 'is_feature',
    ];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }
}
