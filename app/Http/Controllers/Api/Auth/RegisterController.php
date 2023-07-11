<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Stripe\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TrialRemainingDaysNotification;

class RegisterController extends Controller
{
    public function store(Request $request)
    {

        $validated = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'business_type_id' => ['required', 'array'],
            'phone' => ['required','unique:users'],
        ]);

        if ($validated->fails()) {
            return $validated->validate();
        }

        $data = $request->all();
        DB::beginTransaction();
        try {

            $user = User::create([
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
                
            ]);

            if (count($data['business_type_id']) > 0) {
                $user->BusinessType()->attach($data['business_type_id']);
            }
            Stripe::setApiKey(config('services.stripe.Secret_key'));
            $stripeCustomer=$user->createAsStripeCustomer([
                'description' => 'any desc',
                'phone' => $data['phone'],
                'metadata' => ['user_id' => $user->id,
                'max_certificate'=>20,
                //'trail_ends_at'=>Carbon::now()->addDay(7),
        ],
              ]);
            event(new Registered($user));
            DB::commit();
            return responseJson(true, 'success created user', $user);
        
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function completeRegister(Request $request)
    {
        $validated = Validator::make($request->all(), [

            /* 'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'business_type_id' => ['required', 'array'],
            'phone' => ['required'], */]);

        if ($validated->fails()) {
            return $validated->validate();
        }

        $data = $request->all();

        $user = User::find(authUser('sanctum')->id);
        DB::beginTransaction();
        try {
            $user->update([
                'trading_name' => $data['trading_name'],
                'company_name' => $data['company_name'],
                'registration_number' => $data['registration_number'],
                'registered_address' => $data['registered_address'],
                'number_street_name' => $data['number_street_name'],
                'city' => $data['city'],
                'postal_code' => $data['postal_code'],
                'state'=>$data['state'],
                'country_id' => $data['country_id'],
                'vat_number' => $data['vat_number'],
                'has_vat' => $data['has_vat'],
                'trial_ends_at'=>Carbon::now()->addDay(7),
            ]);
            $user->categories()->attach($request->categories_id,[
                'license_number'=>$request->license_number,
                'gas_register_number'=>$request->gas_register_number,
                'electric_board_id'=>json_encode([$request->electric_board_id]),
            ]);
           
            if ($request->hasFile('logo')) {
                $logo = uploadImage($request->logo, 'user_logo');
                $user->logo()->delete();
                $user->logo()->create($logo);
            }


            // $data->files()->create($image);
            DB::commit();
            return responseJson(true, 'success created user', $user->load(['logo','categories']));
            $trialEndsAt = Carbon::parse($user->trial_ends_at);
           $remainingDays = $trialEndsAt->diffInDays(Carbon::now());
           Notification::send($user, new TrialRemainingDaysNotification($remainingDays));
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
