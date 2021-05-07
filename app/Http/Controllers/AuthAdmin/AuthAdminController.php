<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthAdminController extends Controller
{
    use AuthenticatesUsers;

//    public function __construct()
//    {
//        $this->middleware('admin')->except('logout');
//    }

    public function username()
    {
        return 'username';
    }

    public function guard(){
        return Auth::guard('admin');
    }

    public function postLogin(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|',
            'password' => 'required|',
        ]);

        $data = $request->only('username', 'password');
        $remember = $request->has('remember-me') ? true : false;

        if (Auth::guard('admin')->attempt($data, $remember)){

            return redirect()->route('admin.dashboard');
        }else{
            return back()->withErrors(['username' => 'username or password are wrong.']);
        }

    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect()->route('admin.login');
    }
}
