<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class SocialiteLoginController extends Controller
{
    public function redirectToGoogle(Request $request)
    {

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $socialUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            Log::error('Socialite error: ' . $e->getMessage());
            return redirect()->route('login')->withErrors(['msg' => 'Unable to login using Google. Please try again.']);
        }

        $user = User::where('email', $socialUser->email)->first();
        $user = User::updateOrCreate([
            'provider_id' => $socialUser->id,
            'provider' => 'google'
        ], [
            'fname' => explode(' ', $socialUser->name)[0],
            'lname' => explode(' ', $socialUser->name)[1],
            'email' => $socialUser->email,
            'password' => Hash::make(rand(100000, 999999)),
            'provider_token' => $socialUser->token
        ]);

        Auth::login($user);

        return redirect()->intended(route('dashboard', absolute: false));
    }
}
