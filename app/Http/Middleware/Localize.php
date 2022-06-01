<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Localize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!in_array($request->locale, config('language.locales'))){
            $base = url()->to('');
            $segments = $request->segments();
            $segments[0] = config('app.locale');
            return redirect()->to($base . '/' . implode('/', $segments));
        }
        app()->setlocale($request->locale);
        return $next($request);
    }
}
