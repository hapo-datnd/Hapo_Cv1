<?php

namespace App\Http\Controllers\Cv;

use App\Models\Education;
use App\Models\Portfolio;
use App\Models\School;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use App\Models\Cv;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Storage;
use App\Models\Reference;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin_login_form');
        }
        else {
            $cvs = Cv::paginate(Cv::PAGINATION);
            return view('admin.cv', compact('cvs'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::guard('user')->check()) {
            return view('cv.create');
        }
        else {
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('file')) {
            $path = Storage::putFileAs(
                'avatars', $request->file('file'), $request->image
            );
        }

        $userId = Auth::id();
        $data = array_merge($request->all(), ["user_id" => $userId]);
        $cv = Cv::create($data);
        $cv->save();

        if($request->hasFile('file')) {
            $nameImageAva = $cv->id.'avatar.jpg';
            $path = Storage::putFileAs('avatars', $request->file('file'), $nameImageAva);
            $cv->image = $nameImageAva;
            $cv->image_mini = $nameImageAva;
            $cv->save();
        }

        $skillPros = json_decode($request->skill_pros);
        foreach ($skillPros as $skillPro) {
            $skillId = Skill::firstOrCreate(['name' => strtoupper($skillPro->name), 'type' => Skill::PROFESSIONAL])->id;
            $cv->skills()->attach($cv->id,['percent' => $skillPro->percent, 'skill_id' => $skillId]);
        }

        $skillPers = json_decode($request->skill_pers);
        foreach ($skillPers as $skillPer) {
            $skillId = Skill::firstOrCreate(['name' => strtoupper($skillPer->name), 'type' => Skill::PERSONAL])->id;
            $cv->skills()->attach($cv->id,['percent' => $skillPer->percent, 'skill_id' => $skillId]);
        }

        $workExperiences = json_decode($request->work_experiences);
        foreach ($workExperiences as $workExperience) {
            $companyId = Company::firstOrCreate(['name' =>  strtoupper($workExperience->company_name),])->id;
            $data = array_merge((array)$workExperience, ["company_id" => $companyId, 'cv_id' => $cv->id]);
            WorkExperience::create($data);
        }

        $eduExperiences = json_decode($request->edu_experiences);
        foreach ($eduExperiences as $eduExperience) {
            $schoolId = School::firstOrCreate(['name' =>  strtoupper($eduExperience->school_name),])->id;
            $data = array_merge((array)$eduExperience, ["school_id" => $schoolId, 'cv_id' => $cv->id]);
            Education::create($data);
        }

        $portfolios = json_decode($request->portfolios);
        foreach ($portfolios as $portfolio) {
            $data = array_merge((array)$portfolio, ['cv_id' => $cv->id]);
            Portfolio::create($data);
        }

        $content = json_decode($request->content_slide);
        for ($i = 0; $i < count($content); $i++) {
            $ref = Reference::create(["content"=>$content[$i], "image" => "default.jpg", "cv_id" => $cv->id]);
            $files = $request->file('image_slide');
            if (!empty($files)) {
                $nameImage = 'avafooter'.$ref->id.'a'.$cv->id.'.jpg';
                $path = Storage::putFileAs(
                    'imageRef', $files[$i] , $nameImage
                );
                $ref->image = $nameImage;
                $ref->save();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proSkills = Cv::findOrFail($id)->skills;
        $cv = Cv::findOrFail($id);
        return view('cv.index', compact('cv','proSkills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::guard('user')->check()) {
            $proSkills = Cv::findOrFail($id)->skills;
            $cv = Cv::findOrFail($id);
            return view('cv.edit', compact('cv','proSkills'));
        }
        else {
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function updateStatus(Request $request,$id)
    {
        $cv = Cv::findOrFail($id);
        $cv->status = $request->status;
        $cv->save();
        return redirect()->route('cvs.index')->with('message','Bạn đã thay đổi trạng thái của '.$cv->title.' thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cv::findOrFail($id)->delete();
        return redirect()->route('home');
    }
}
