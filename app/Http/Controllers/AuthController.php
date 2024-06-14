<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::user()) {
            return redirect(route('auth.signout'));
        }
        return view('auth.login');
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            return redirect()->intended(route('realisations'));
        }

        return redirect(route('auth.login'))->with('error-login', "Identifiants incorrects");
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registration(StoreUserRequest $request)
    {
        $data = $request->only(['email', 'password']);
        $data['password'] = bcrypt($data['password']); // Crypter le mot de passe
        $user = User::create($data);
        if (!$user) {
            return redirect(route('auth.register'))->with('alert-error', 'Erreur lors de la création du compte, veuillez réessayer.');
        }
        Auth::login($user);

        return redirect(route('realisations'));
    }

    public function signout()
    {
        if (!Auth::user()) {
            return redirect(route('auth.login'));
        }
        return view('auth.logout');
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
