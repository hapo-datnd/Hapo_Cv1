<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Models\User;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin_login_form');
        }
        else {
            return view('admin.home');
        }
    }

    public function indexAdmin()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin_login_form');
        }
        else {
            $admins = Admin::paginate(Admin::PAGINATION);
            return view('admin.admin', compact('admins'));
        }
    }

    public function create()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.create');
        }
        else {
            return redirect()->route('admin_login_form');
        }
    }

    public function store(CreateAdminRequest $request)
    {
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->type = Admin::ADMIN;
        $admin->save();
        return redirect()->route('admins.index');
    }

    public function destroy($id)
    {
        Admin::findOrFail($id)->delete();
        return redirect()->route('admin_index');
    }

    public function getChangePassword($id)
    {

        $admin = Admin::findOrFail($id);
        if (Auth::guard('admin')->check()) {
            return view('admin.change_password', compact('admin'));
        }
        elseif(!Auth::guard('admin')->check()) {
            return redirect()->route('admin_login_form');
        }
    }

    public function patchChangePassword(ChangePasswordRequest $request,$id)
    {
        $admin = Admin::findOrFail($id);
        if (Hash::check($request->old_password, $admin->password)) {
            $admin->password = bcrypt($request->password);
            $admin->save();
            return redirect()->route('admins.index')->with('message','You have successfully changed the password!');
        }
        else {
            return redirect()->route('admin.change_password',$id)->with('message','You entered the wrong password!');

        }
    }
}
