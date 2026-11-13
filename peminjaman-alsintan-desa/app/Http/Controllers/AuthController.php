<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function login(Request $request){
        
        $request->validate([
            'login' => ['required'],
            'password' => ['required']
        ]);

        $user = User::where('email' , $request->login)->orWhere('no_hp' , $request->login)->first();

        if($user && Hash::check($request->password , $user->password)){

            Auth::login($user , $request->boolean('remember'));
            $request->session()->regenerate();

            // arahkan ke dashboard pengelola
            if($user->isPengelola()){
                return redirect('/pengelola/dashboard');
            }
            // arahkan ke dashboard petani
            elseif($user->isPetani()){
                return redirect('/petani/dashboard');
            }
            return redirect('/');
        }

        return back()->withErrors([
            'login' => 'Email atau password yang anda masukkan salah'
        ])->onlyInput('login');

    
    }
}
