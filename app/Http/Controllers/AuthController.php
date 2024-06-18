<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Socialite;

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

    public function loginGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = $this->_registerOrLoginUser($googleUser, 'google');
        return $this->_redirectUser($user);
    }

    public function loginFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->stateless()->user();
        $user = $this->_registerOrLoginUser($facebookUser, 'facebook');
        return $this->_redirectUser($user);
    }

    protected function _registerOrLoginUser($data, $provider)
    {
        $user = User::where('email', $data->email)->first();

        if (!$user) {
            $user = User::create([
                'username' => $data->name ?? $data->email,
                'email' => $data->email,
                'password' => Hash::make('password'),
                'role' => 'siswa' // default role, you may want to change this logic
            ]);
        }

        Auth::login($user);
        return $user;
    }

    protected function _redirectUser($user)
    {
        if ($user->role == 'guru') {
            return redirect()->route('user_guru.home');
        } else {
            return redirect()->route('user_siswa.home');
        }
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
