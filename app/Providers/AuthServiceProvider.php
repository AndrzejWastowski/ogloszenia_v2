<?php

namespace App\Providers;
use Illuminate\Support\Facades\Auth;


// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Auth::provider('md5-provider', function($app, array $config) {
            // Zwróć instancję Md5UserProvider
            return new Md5UserProvider();
        });
    }
}
