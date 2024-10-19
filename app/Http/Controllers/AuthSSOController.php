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

    public function redirectUserToGoogle()
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
                    //'given_name' => $googleUser->user->given_name,
                    //'family_name' => $googleUser->user->family_name,
                ]
            );
            Auth::login($user);
            return redirect()->intended('/portal');
        } catch (\Throwable $th) {
            return redirect(route('login'));
        }
    }

    public function handleUserGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            
            $user = User::firstOrCreate(
                ['email' => $googleUser->email,],
                [
                    'name' => $googleUser->name,
                    'avatar' => $googleUser->avatar,
                    'open_id' => $googleUser->id,
                    //'given_name' => $googleUser->user->given_name,
                    //'family_name' => $googleUser->user->family_name,
                ]
            );
            Auth::login($user);
            return redirect()->intended('/panel');
        } catch (\Throwable $th) {
            return redirect(route('login'));
        }
    }

    // MICROSOFT AZURE
    public function redirectToAzure()
    {
        return Socialite::driver('azure')->redirect();
    }

    public function handleAzureCallback()
    {
        try {
            $azureUser = Socialite::driver('azure')->stateless()->user();

            dd($azureUser);
            // Find or create the user in the database
            $user = User::firstOrCreate(
                ['email' => $azureUser->getEmail()],
                [
                    'name' => $azureUser->getName(),
                    'azure_id' => $azureUser->getId(),
                    'avatar' => $azureUser->getAvatar(),
                    // Add other fields you need to save
                ]
            );

            // Log the user in
            Auth::login($user);

            // Redirect to the intended page
            return redirect()->intended('/portal');
        } catch (\Exception $e) {
            // Handle the error
            return redirect(route('login'));;
        }
    }
}
