<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function signin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = $request->except('_token');
        if(Auth::attempt($credentials)){
            Auth::user();
            return redirect()->route('admin.dashboard');
        } else{
            return redirect()->back()->with('error' , 'Invalid Combination');
        }
    }
}
