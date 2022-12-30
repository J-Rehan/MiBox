<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->only(['loginForm',"forgetPassswordForm","showResetPasswordForm"]);
    }

    public function loginForm(Request $request)
    {
        // if(auth('admin')->check()) {
        //     return redirect()->route('admin.dashboard.index');
        // }
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentails = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(auth('admin')->attempt($credentails)) {
            return redirect()->route('admin.dashboard.index');
        }else {
            return redirect()->back()->with(["login_error"=>'Invalid login credentials']);
        }
    }

    public function logout(Request $request) {
        auth('admin')->logout();
        return redirect()->route("admin.auth.loginForm");
    }

    public function forgetPassswordForm(Request $request)
    {
        return view('admin/auth/forget_password');
    }
    public function showResetPasswordForm($token) {
        return view('admin/auth/forgotpasswordlink', ['token' => $token]);
    }
}
