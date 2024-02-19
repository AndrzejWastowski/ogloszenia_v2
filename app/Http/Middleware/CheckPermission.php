<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $permission)
{
    if ($permission == "editor" && !$request->user()->isEditor()) {
        return redirect('home'); // lub gdziekolwiek chcesz przekierować użytkownika
    }

    if ($permission == "admin" && !$request->user()->isAdmin()) {
        return redirect('home'); 
    }

    return $next($request);
}

}
