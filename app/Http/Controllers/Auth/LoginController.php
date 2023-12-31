<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Gunakan Auth::attempt untuk memeriksa email dan password
        if (auth()->attempt($request->only('email', 'password'))) {
            // Jika login berhasil, alihkan ke halaman home
            return redirect()->route('home')->with('success', 'Login successful. Welcome!');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return redirect()->route('login')->withErrors(['email' => 'Invalid email or password.']);
    }

    public function logout()
    {
        // Logout pengguna dan alihkan ke halaman home
        auth()->logout();
        return redirect()->route('home')->with('success', 'Logout successful. See you next time!');
    }
}
