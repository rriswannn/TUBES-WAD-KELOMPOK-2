<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
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

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            return redirect()->route('home')->with('success', 'Login successful. Welcome!');
        }

        // Jika login gagal
        return redirect()->route('login')->withErrors(['email' => 'Invalid email or password.']);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Menyimpan data user ke dalam database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Setelah berhasil registrasi, arahkan ke halaman login
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Logout successful. See you next time!');
    }
}
