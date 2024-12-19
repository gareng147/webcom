<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(Request $request)
    {
        // Simpan URL tujuan
        //$request->session()->put('url.intended', route('admin.dashboard'));
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
            
            return redirect('/admin/dashboard');
        }

        
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();  // Logout user
        $request->session()->invalidate();  // Menghapus semua sesi yang terkait
        $request->session()->regenerateToken();  // Men-generate ulang token CSRF untuk keamanan

        return redirect('/marketplace');  // Redirect ke halaman utama atau halaman login
    }

}
