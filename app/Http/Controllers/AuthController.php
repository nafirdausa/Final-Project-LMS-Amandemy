<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $authenticate = $request->only('username', 'password');

        $user = User::where('username', $authenticate['username'])->first();

        if ($user && Hash::check($authenticate['password'], $user->password)) {
            Auth::login($user);

            if ($user->role == 'guru') {
                return redirect()->route('user_guru.home');
            } else {
                return redirect()->route('user_siswa.home');
            }
        }

        return redirect()->back()->withErrors(['error' => 'Invalid login. Username or password not found!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function forgotPassword()
    {
        return view('auth.forgot_password');
    }
}
