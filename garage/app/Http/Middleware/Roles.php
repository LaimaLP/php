<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $roles): Response
    {
// dd($roles);

        $user = $request->user();

        if (!$user) {

            return redirect()->route('login');
        }

        if (!in_array($user->role, explode('|', $roles))) {

            return abort(418, 'I\'m a teapot');
        }



        return $next($request);
    }

    //middlewaras paima requesta ir grazina-siuncia toliau, zalios rodyklytes. Taip eina iki controllerio. Jei grazintu responsa tai kelias ir nutruktu
}
