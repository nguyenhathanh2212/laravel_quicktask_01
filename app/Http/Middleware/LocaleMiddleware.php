<?php

namespace App\Http\Middleware;

use Closure;
use App;

class LocaleMiddleware
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
        $language = $request->session()->get('language-select', config('app.locale'));
        App::setLocale($language);

        return $next($request);
    }
}
