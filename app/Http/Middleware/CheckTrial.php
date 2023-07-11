<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TrialEndNotification;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Closure;
use Illuminate\Http\Request;

class CheckTrial
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
        $user = Auth::user();
        $trialEndsAt = $user->trial_ends_at;

        if ($trialEndsAt) {
            $remainingDays = Carbon::now()->diffInDays($trialEndsAt);

            if ($remainingDays === 1) {
                Notification::send($user, new TrialEndNotification());
            }
        }
        return $next($request);
    }
}
