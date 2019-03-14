<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cv;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::guard('user')->check()) {
            $id = Auth::guard('user')->id();
            $user = User::findOrFail($id);
            $cvs = Cv::where('user_id',$id)->paginate(Cv::PAGINATION);
            return view('home', compact('user','cvs'));
        }
        elseif(!Auth::guard('user')->check()) {
            return redirect()->route('login');
        }
    }
}
