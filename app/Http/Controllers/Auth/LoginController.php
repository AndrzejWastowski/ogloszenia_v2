<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @param  $provider
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * @param  $provider
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {

        $socialiteUser = Socialite::driver($provider)->user();

        // OAuth 2.0 providers...
        $token = $socialiteUser->token;
        $refreshToken = $socialiteUser->refreshToken;
        $expiresIn = $socialiteUser->expiresIn;

        // All providers...
        $socialiteUser->getId();
        $socialiteUser->getNickname();
        $socialiteUser->getName();
        $socialiteUser->getEmail();
        $socialiteUser->getAvatar();


        // dd($socialiteUser);


        // Znajdź lub stwórz użytkownika na podstawie danych do dostawcy
        $user = $this->firstOrCreateUser($socialiteUser, $provider);



        //dd($user);
        // Zaloguj uzyskanego użytkownika
        Auth::login($user);

        // Przekieruj użytkownika tam gdzie chciał się dostać lub do domyślnej ścieżki
        return redirect()->intended($this->redirectPath());
    }

    /**
     * @param  $socialiteUser
     * @param  $provider
     * @return \App\User
     */
    protected function firstOrCreateUser($socialiteUser, $provider)
    {
        // Jeśli istnieje użytkownik o podanym facebook_id
        // lub google_id, zwróć tego użytkownika
        $pom = $socialiteUser->getId();


        if ($user = User::where("{$provider}_id", $socialiteUser->getId())->first()) {
            return $user;
        }

        // Jeśli istnieje użytkownik o podanym adresie e-mail przypisz facebook_id
        // lub google_id do jego konta, a następnie zwróc tego użytkownika
        if (!is_null($socialiteUser->getEmail()) && $user = User::where('email', $socialiteUser->getEmail())->first()) {
            $user->update(["{$provider}_id" => $socialiteUser->getId()]);

            return $user;
        }

        // Jeśli powyższe warunki nie zostały spełnione, to mamy do czynienia
        // z rejestracją, więc utwórz nowego użytkownika na podstawie
        // danych od dostawcy i zwróc tego użytkownika
        return User::create([
            "{$provider}_id" => $socialiteUser->getId(),
            'email' => $socialiteUser->getEmail(),
            'name' => $socialiteUser->getName(),
        ]);
    }
}
