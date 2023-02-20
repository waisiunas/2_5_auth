<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success' , 'Succesfully Logout');
    }
}
