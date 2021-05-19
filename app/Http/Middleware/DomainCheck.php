<?php

namespace App\Http\Middleware;

use Closure;

class DomainCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $subdomain = $request->route('subdomain');
        if (auth()->check() && $subdomain == auth()->user()->subdomain) {
            return $next($request);
        }

        return redirect()->route('home');

    }
}
