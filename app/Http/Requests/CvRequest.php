<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:19',
            'last_name' => 'required|max:19',
            'title' => 'required|max:40',
            'date_of_birth' => 'required',
            'phone' => 'required|max:16',
            'email' => 'required|max:40|email',
            'facebook' => 'required|max:32',
            'skype' => 'required|max:32',
            'chat_work' => 'required|max:32',
            'address' => 'required|max:48',
            'summary' => 'required|max:1000',
            'professional_skill_title' => 'required|max:300',
            'personal_skill_title' => 'required|max:300',
            'work_experience_title' => 'required|max:300',
            'education_title' => 'required|max:300',
            'file' => 'required|mimes:jpeg,png,jpg',
            'skill_pros.*.name' => 'required|max:15',
            'skill_pros.*.percent' => 'required|numeric|min:20|max:100',
            'skill_pers.*.name' => 'required|max:15',
            'skill_pers.*.percent' => 'required|numeric|min:20|max:100',
            'work_experiences.*.start_time' => 'required|numeric',
            'work_experiences.*.end_time' => 'required|numeric',
            'work_experiences.*.position' => 'required|max:20',
            'work_experiences.*.work_content' => 'required|max:200',
            'work_experiences.*.company_name' => 'required|max:35',
            'edu_experiences.*.start_time' => 'required|numeric',
            'edu_experiences.*.end_time' => 'required|numeric',
            'edu_experiences.*.position' => 'required|max:20',
            'edu_experiences.*.achievement' => 'required|max:200',
            'edu_experiences.*.school_name' => 'required|max:35',
            'portfolios.*.name' => 'required|max:32',
            'portfolios.*.customer' => 'required|max:32',
            'portfolios.*.start_time' => 'required',
            'portfolios.*.end_time' => 'required',
            'portfolios.*.position' => 'required|max:32',
            'portfolios.*.description' => 'required|max:100',
            'portfolios.*.responsibilities' => 'required|max:32',
            'portfolios.*.technologies' => 'required|max:32',
            'portfolios.*.team_size' => 'required|digits_between:1,100',
            'portfolios.*.is_feature' => 'required',
            'portfolios.*.color_display' => 'required',
            'portfolios.*.size_display' => 'required',
            'content_slide.*' => 'required|max:150',
            'image_slide.*' => 'required|mimes:jpeg,png,jpg',
        ];
    }

    public function attributes()
    {
        return [
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'date_of_birth' => 'Date Of Birth',
            'phone' => 'Phone',
            'email' => 'Email',
            'facebook' => 'Facebook',
            'skype' => 'Skype',
            'chat_work' => 'Chat Work',
            'address' => 'Address',
            'summary' => 'Professional Summary Title',
            'professional_skill_title' => 'Professional Skill Title',
            'personal_skill_title' => 'Personal Skill Title',
            'work_experience_title' => 'Work Experience Title',
            'education_title' => 'Education Title',
            'file' => 'Image Avatar',
            'position' => 'Position Job',
            'skill_pros.*.percent' => 'Professional Skill Percent',
            'skill_pros.*.name' => 'Professional Skill Name',
            'skill_pers.*.percent' => 'Personal Skill Percent',
            'skill_pers.*.name' => 'Personal Skill Name',
            'edu_experiences.*.start_time' => 'Year of start Education',
            'edu_experiences.*.end_time' => 'Year of end Education',
            'edu_experiences.*.position' => 'Position Education',
            'edu_experiences.*.school_name' => 'School Name',
            'edu_experiences.*.achievement' => 'Achievement',
            'work_experiences.*.start_time' => 'Start Work',
            'work_experiences.*.end_time' => 'End Work',
            'work_experiences.*.position' => 'Work Position',
            'work_experiences.*.company_name' => 'Company',
            'work_experiences.*.work_content' => 'Work Content',
            'portfolios.*.name' => 'Name project',
            'portfolios.*.start_time' => 'Time start project',
            'portfolios.*.end_time' => 'Time end project',
            'portfolios.*.customer' => 'Project customer',
            'portfolios.*.description' => 'Project description',
            'portfolios.*.team_size' => 'Project team size',
            'portfolios.*.position' => 'Project position',
            'portfolios.*.responsibilities' => 'Project responsibilities',
            'portfolios.*.technologies' => 'Project technologies',
            'content_slide.*' => 'Content Slide',
            'image_slide.*' => 'Avatar References',
        ];
    }
}
