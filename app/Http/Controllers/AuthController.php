<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|captcha',
        ]);
        $companies = Company::all();
        return view('company.index',compact('companies'));
    }

    public function showForgotPasswordForm()
    {
        return view('auth.forgot_password');
    }

    public function forgotPassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'captcha' => 'required|captcha',
        ]);

        return redirect('/login')->with('status', 'Password reset link sent.');
    }
}
