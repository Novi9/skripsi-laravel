<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // dd($roles);
        if (in_array($request->user()->jabatan, $roles)) {
            return $next($request);
        };

        return redirect('/dashboard');
    }
}
