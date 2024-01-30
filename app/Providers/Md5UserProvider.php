<?php namespace App\Providers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Załóżmy, że Twój model użytkownika to `User`.

class Md5UserProvider implements UserProvider
{
    public function retrieveById($identifier)
    {
        // Pobierz użytkownika po identyfikatorze
        return User::find($identifier);
    }

    public function retrieveByToken($identifier, $token)
    {
        // Implementacja zależy od sposobu używania tokenów w Twojej aplikacji
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        // Aktualizacja tokena "remember me", jeśli jest używany
    }

    public function retrieveByCredentials(array $credentials)
    {
        // Znajdź użytkownika na podstawie dostarczonych poświadczeń
        if (empty($credentials) || 
            (count($credentials) === 1 &&
             array_key_exists('password', $credentials))) {
            return;
        }

        return User::where('login', $credentials['login'])->first();
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
{
    $plain = $credentials['password'];

    // Najpierw sprawdź hasło za pomocą standardowego mechanizmu Laravela
    if (Hash::check($plain, $user->getAuthPassword())) {
        return true;
    }

    // Jeśli standardowe hasło nie pasuje, spróbuj z MD5
    if (!empty($user->oldpassword) && md5($plain) == $user->oldpassword) {
        // Skasuj stare hasło MD5 i zapisz nowe hashowane przez Laravel
        $user->oldpassword = null;
        $user->password = Hash::make($plain);
        $user->save();

        return true;
    }

    return false;
}
}
