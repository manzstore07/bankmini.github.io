<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class NasabahControler extends Controller
{
    public function loginnasabah() {
        return view('auth.loginnasabah');
       }
       public function prosses_login(Request $request){

        if (Auth::guard('user')->attempt($request->only('email','password')))    {
            return redirect('/user/dashboard');
        }
        return redirect('/loginadmin')->with('eror', 'Login Gagal');

       }
       public function logout() {
            Auth::logout();
            return redirect('/loginadmin');
       }
}
