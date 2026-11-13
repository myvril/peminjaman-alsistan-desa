<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Arahkan sesuai role (Flowchart Login)
            return Auth::user()->role === 'pengelola'
                ? redirect()->route('pengelola.dashboard')
                : redirect()->route('alsintan.index');
        }

        return back()->withErrors(['email' => 'Email atau password tidak valid.'])->onlyInput('email');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:user,email',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'password' => 'required|min:6',
        ]);

        // BR-02: Pendaftaran umum hanya untuk role 'peminjam' (petani)
        $user = User::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'no_hp' => $data['no_hp'],
            'alamat' => $data['alamat'],
            'password' => Hash::make($data['password']),
            'role' => 'peminjam',
        ]);

        Auth::login($user);
        return redirect()->route('alsintan.index')->with('success', 'Pendaftaran berhasil! Selamat datang.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}