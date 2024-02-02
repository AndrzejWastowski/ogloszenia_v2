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

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
    
        $providerUser  = Socialite::driver($provider)->user();
        $user = User::where('email', $providerUser->getEmail())->first();
      
        if ($user) {
            // Użytkownik istnieje, więc możesz go zalogować
            Auth::login($user);
        } else {
             // Użytkownik nie istnieje, utwórz nowe konto
             $user = User::firstOrCreate(
                [
                    'name' => $providerUser->name,
                    'family_name' => $providerUser->user['family_name'],
                    'locale' => $providerUser->user['locale'],
                    'email' => $providerUser->email,
                    'avatar' => $providerUser->avatar,
                    'email_verified' => $providerUser->user['email_verified'],
                    'social_id'=> $providerUser->id,
                    'social_type'=> $provider,
                    'password' => encrypt('my-google')
                                    ]
            );

            Auth::login($user);
        }
        return redirect()->to('/start'); // Przekieruj do właściwej ścieżki po zalogowaniu
    }


}
