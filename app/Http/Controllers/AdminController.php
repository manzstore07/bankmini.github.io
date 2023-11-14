<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function loginadmin() {
    return view('auth.loginadmin');
   }

   public function prosses_login(Request $request){

    if (Auth::guard('admin')->attempt($request->only('nip','password')))    {
        return redirect('/admin/dashboard');
    }
    return redirect('/loginadmin')->with('loginError', 'Login failed!');

   }
   public function logout() {
        Auth::logout();
        return redirect('/loginadmin');
   }
}

