<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthSSOController extends Controller
{
    // GOOGLE
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            dd($googleUser);
            return redirect()->intended('/portal');
        } catch (\Throwable $th) {
            return redirect(route('login'));
        }
    }
    // MICROSOFT
}
