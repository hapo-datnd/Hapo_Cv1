<?php

namespace App\Http\Controllers\Cv;

use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use App\Models\Cv;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $phone = $request->all();
        return $phone;
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

    public function updateAva(Request $request,$id)
    {
        if($request->hasFile('myAva')) {
            $cv = Cv::findOrFail($id);
            $file = $request->file('myAva');
            $file->move('image','ava'.$cv->id.'.png');
            $cv->image = 'ava'.$cv->id.'.png';
            $cv->image_mini = 'ava'.$cv->id.'.png';
            $cv->save();
            return redirect()->route('cvs.edit', compact('id'));
        }
        else {
            return redirect()->route('cvs.edit', compact('id'));
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
