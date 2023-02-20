<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function signup(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        $is_user_created = User::create($data);
        if($is_user_created){
            return redirect()->back()->with(['success' , 'User has been created Succesfully']);
        } else {
            return redirect()->back()->with(['error' , 'User has failed to create']);
        }

    }
}
