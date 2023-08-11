<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('backend.login');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard')->withSuccess('Signed in');
        }
   
        return back()->with('error','Login details are not valid');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/adminlogin'); // Redirect to the login page
    }
}
