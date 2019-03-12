<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{

    protected $fillable = [
        'first_name', 'last_name', 'date_of_birth','phone','email','facebook','skype','chat_work','address','image',
        'position','summary','status','image_mini','professional_skill_table','personal_skill_title',
        'work_experience_title','education_title',
    ];

    const ACTIVE = 1;
    const INACTIVE = 0;
    const PAGINATION = 5;

    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class)->withPivot('percent','type');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
