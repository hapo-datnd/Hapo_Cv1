<?php

namespace App\Http\Controllers\User;

use App\Models\Cv;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        if (!Auth::guard('admin')->check())
        {
            return redirect()->route('admin_login_form');
        }
        else
        {
            $users = User::paginate(User::PAGINATION);
            $admins = Admin::paginate(Admin::PAGINATION);
            $id = Auth::guard('admin')->id();
            $adminNow = Admin::findOrFail($id);
            return view('admin.user',compact('users','admins','adminNow'));
        }
    }

    public function update(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $user->type = $request->type;
        $user->save();
        return redirect()->route('users.index')->with('message','Bạn đã thay đổi quyền của '.$user->name.' thành công!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->cvs()->delete();
        $user->delete();
        return redirect()->route('users.index');
    }

    public function getChangePassword($id)
    {
        $user = User::findOrFail($id);
        if (Auth::guard('user')->check())
        {
            return view('user.change_password',compact('user'));
        }
        elseif(!Auth::guard('user')->check())
        {
            return redirect()->route('user_login_form');
        }
    }

    public function patchChangePassword(ChangePasswordRequest $request,$id)
    {
        $user = User::findOrFail($id);
        $email = $user->email;
        if (Auth::guard('user')->attempt(['email' => $email, 'password' => $request->oldPassword]))
        {
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->route('home')->with('message','Bạn đã thay đổi mật khẩu thành công!');
        }
        else
        {
            return redirect()->route('user.change_password')->with('message','Bạn đã nhập sai mật khẩu cữ!');

        }
    }
}
