<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        return view('admin/login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials) && Auth::user()->role_id === 1) {
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        } elseif (Auth::attempt($credentials) && Auth::user()->role_id === 2) {
            $request->session()->regenerate();
            return redirect()->route('Secretary_index');
        } else {
            return back()->with([
                'message' => 'Identifiants incorrect!!! Reessayer',
            ]);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
