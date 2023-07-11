<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class EnsureUserIsSubscribed
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
        $max_certificate = 20;
        $user = Auth::user();
        if ($user && (!$user->onTrial() || $user->certificate()->count() > $max_certificate)) {
            if (!$user->subscribed()) {
                if ($request->wantsJson()) {
                    return responseJson(false, 'Please subscribe to access this feature.');
                }else {
                    return redirect()->route('plans')->with('error', 'Please subscribe to access this feature.');
                }
            } else {
                return $next($request);
            }
        }
        return $next($request);
    }
}
