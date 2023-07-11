<?php

namespace App\Http\Controllers\Api\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Sanctum;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)
        ->withTrashed()
        ->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return responseJson(false, 'Invalid username and password combination', [], 401);
        }else if ($user && Hash::check($request->password, $user->password) && $user->trashed()){

            $final_day = Carbon::parse($user->deleted_at)->addWeek()->format('m-d-Y');
            $restore_url = URL::temporarySignedRoute('api.restore.user', now()->addMinutes(10), ['id' => $user->id]);
            $data = [
                'code' => 403,
                'final_day' => $final_day,
                'restore_url' => $restore_url
            ];

            return responseJson(false, 'This user was deleted.', $data, 403);
        }
        $token = $user->createToken('auth')->plainTextToken;
        //store fcm token
        if ($request->fcm_token) {
            $user->deviceTokens()->updateOrCreate(['token' => $request->fcm_token],[
                'token' => $request->fcm_token,
                'device' => $request->userAgent(),
            ]);
        }
        $data = [
            'token' => $token,
            'user' => new UserResource($user)
        ];

        if (count($user->forms) == 0) {
           $data['isProfileComplete'] = false;
        }else{
            $data['isProfileComplete'] = true;
        }

        return responseJson(true, 'login Success', $data, 200);

    }

    public function logout(Request $request)
    {
        $user =   Auth::guard('sanctum')->user();
        $user->currentAccessToken()->delete();
        return responseJson(true, 'logout Success', []);
    }

    public function restore($id)
    {
        //return $id;
        $user = User::where('id', $id)->withTrashed()->first();

        if ($user->trashed()) {
            $user->restore();
            Auth::logout();
            return responseJson(true, 'Your account has been successfully restored',[]);
            //return redirect('/');
        }


        return responseJson(true, 'Your account has been successfully restored',[]);
    }


    //Resending The Verification Email
    public function ResendingVerificationEmail(Request $request)
    {

       auth('sanctum')->user()->sendEmailVerificationNotification();
        return responseJson(true, 'Verification link sent!', '');
    }
}
