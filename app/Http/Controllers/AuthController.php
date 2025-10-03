<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function showForgetPasswordForm()
    {
        return view('auth.ForgetPassword');
    }
    public function showResetPassword(Request $request)
    {
        return view('auth.ResetPassword');
    }
}
