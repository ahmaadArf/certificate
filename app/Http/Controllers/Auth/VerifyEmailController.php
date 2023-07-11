<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke($id,Request $request)
    {
        //return $id;
        $user = User::findOrFail($id);
        if ($user->hasVerifiedEmail()) {
          //  return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
          return view('dashboard.email-verification');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }
        return view('dashboard.email-verification');
       // return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    }
}
