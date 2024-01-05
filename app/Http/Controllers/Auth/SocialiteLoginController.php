<?php
// app/Http/Controllers/Auth/SocialiteLoginController.php

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite; // Dodaj tę linię
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class SocialiteLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $this->handleUserLogin($user, 'google');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $this->handleUserLogin($user, 'facebook');
    }

    protected function handleUserLogin($socialUser, $provider)
    {
        $user = User::firstOrCreate(
            ['email' => $socialUser->getEmail()],
            [
                'name' => $socialUser->getName(),
                // Inne potrzebne pola
            ]
        );

        Auth::login($user);

        return redirect()->to('/start'); // Przekieruj do właściwej ścieżki po zalogowaniu
    }
}
