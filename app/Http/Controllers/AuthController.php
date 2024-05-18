<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login() {
        return view('auth.v_login');
    }

    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('v_login')
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->role === $request->role) {
                $request->session()->regenerate();

                if ($user->role === 'Guru') {
                    return redirect()->route('user_guru.v_home')->with('success', 'Login success');
                } elseif ($user->role === 'Siswa') {
                    return redirect()->route('user_siswa.v_home')->with('success', 'Login success');
                }
            } else {
                Auth::logout();
                return redirect()->route('v_login')->with('error', 'Role does not match');
            }
        }
        return redirect()->route('v_login')->with('error', 'Login failed, username or password is incorrect');
    }
}
