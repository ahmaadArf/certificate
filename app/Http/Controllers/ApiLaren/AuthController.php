<?php

namespace App\Http\Controllers\ApiLaren;

use App\Models\Plan;
use App\Models\User;
use App\Mail\CompaletedRe;
use Illuminate\Http\Request;
use App\Mail\NotCompaletedRe;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;

class AuthController extends Controller
{
    use GeneralTrait;

    public function login(Request $request){

    	$validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return $this->returnValidationError($validator->errors(), '',422);
        }

        if (! $token = auth('user-api')->attempt($validator->validated())) {
            return $this->returnError(401,'Unauthorized');
        }
        $user = Auth::guard('user-api')->user();
        $userInf=[
            'name'=>$user->name,
            'email'=>$user->email,
            'token'=>$token
        ];

        return $this->returnData('user',$userInf,'User Login!');
    }

    public function register(Request $request) {

        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'business_type_id' => ['required', 'array'],
            'phone' => ['required','unique:users'],
        ]);

        if ($validator->fails()) {
            return $this->returnValidationError($validator->errors(), '',422);
        }
        try{
        $user = User::create([
            'name'=>$request->first_name.$request->last_name,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
        ]);
        if (count($request->business_type_id) > 0) {
            $user->BusinessType()->attach($request->business_type_id);
        }
        }catch(\Exception $e){
            return $this->returnError(400,$e->getMessage());

        }
        event(new Registered($user));

        return $this->returnData('user',$user,'User Created!');
    }

    public function completeRegister(Request $request) {

        $validator = Validator::make($request->all(), [
            'has_vat' => 'required',
            'company_name' => 'required',
            'postal_code' => 'required',
            'country_id' => ['exists:countries,id'],
            'category_id' => ['required','exists:categories,id'],
            'electric_board_id' => ['exists:electric_boards,id'],

        ]);

        if ($validator->fails()) {
            return $this->returnValidationError($validator->errors(), '',422);
        }
        $user = User::find(authUser('user-api')->id);
        try{
        $user->update([
            'trading_name' => $request->trading_name,
            'company_name' => $request->company_name,
            'registration_number' => $request->registration_number,
            'registered_address' => $request->registered_address,
            'number_street_name' => $request->number_street_name,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'state'=>$request->state,
            'country_id' => $request->country_id,
            'vat_number' => $request->vat_number,
            'has_vat' => $request->has_vat,
        ]);
        $user->categories()->attach($request->category_id,[
            'license_number'=>$request->license_number,
            'gas_register_number'=>$request->gas_register_number,
            'electric_board_id'=>$request->electric_board_id,
        ]);


        // $flage=false;
        // if($request->license_number ){
        //     $flage=true;
        // }
        // elseif($request->category_id==2&&$user->trading_name && $user->company_name &&$user->registration_number
        // &&$user->registered_address &&$user->number_street_name &&$user->city &&
        // $user->postal_code &&$user->state &&$user->country_id &&
        // $user->vat_number &&$user->has_vat &&$request->gas_register_number){
        //     $flage=true;

        // }


        if(!$request->license_number )
        {
        Mail::to($user->email)->send(new NotCompaletedRe($user->name));
         return $this->returnData('user',$user ,'Must Fill all data to start the free period!');

        } else{
            $user->update([
                'trial_ends_at'=>Carbon::now()->addDay(7)
            ]);

            Mail::to($user->email)->send(new CompaletedRe($user->name));
            return $this->returnData('user',$user,'User Complete Register and free period is start!');
        }

        if ($request->hasFile('logo')) {
            $logo = uploadImage($request->logo, 'user_logo');
            $user->logo()->delete();
            $user->logo()->create($logo);
        }
        }catch(\Exception $e){
            return $this->returnError(400,$e->getMessage());

        }



    }

}


