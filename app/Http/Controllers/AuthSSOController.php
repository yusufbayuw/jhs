<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            
            $user = User::firstOrCreate(
                ['email' => $googleUser->email,],
                [
                    'name' => $googleUser->name,
                    'avatar' => $googleUser->avatar,
                    'open_id' => $googleUser->id,
                    'given_name' => $googleUser->user->given_name,
                    'family_name' => $googleUser->user->family_name,
                ]
            );
            Auth::login($user);
            return redirect()->intended('/portal');
        } catch (\Throwable $th) {
            return redirect(route('login'));
        }
    }
    // MICROSOFT
}
