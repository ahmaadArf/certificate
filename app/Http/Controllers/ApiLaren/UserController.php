<?php

namespace App\Http\Controllers\ApiLaren;

use App\Models\User;
use App\Rules\MatchPassword;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;

class UserController extends Controller
{
    use GeneralTrait;

    public function profile() {
        $user = Auth::guard('user-api')->user();
        return $this->returnData('user',$user ,'User Informations');

    }

    public function updateAddress(Request $request) {
        $user=User::find(Auth::guard('user-api')->user()->id);
        $user->update([
            'registered_address' => $request->registered_address,
            'number_street_name' => $request->number_street_name,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'country_id' => $request->country_id,
        ]);
        return $this->returnSuccessMessage('success update address');

    }
    public function updatePersonal(Request $request) {
        $user=User::find(Auth::guard('user-api')->user()->id);

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => [ 'email', Rule::unique('users')->ignore($user->id)],
            'phone' => ['required', Rule::unique('users')->ignore($user->id)]
        ]);
        if ($validator->fails()) {
            return $this->returnValidationError($validator->errors(),'You must enter all data',422);
        }
        $prev_image = $user->image;
        if ($request->hasFile('image')) {
            $image = uploadImage($request->image);
            //file_url
        }
        $user->update([
            'name' => $request->first_name . ' ' . $request->last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email'=>$request->email??$user->email,
            'phone' => $request->phone,
            'image' => $image['file_url'] ?? $prev_image
        ]);


        return $this->returnSuccessMessage('success update personal informations');

    }

    public function updatePassword(Request $request) {
        $user=User::find(Auth::guard('user-api')->user()->id);

        $validator = Validator::make($request->all(), [
            'current_password' => ['required', new MatchPassword('user-api')],
            'password' => 'required|confirmed'
        ]);
        if ($validator->fails()) {
            return $this->returnValidationError($validator->errors(),'You must enter all data',422);
        }
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        return $this->returnSuccessMessage('password updated');

    }
    public function updateLogo(Request $request)
    {
        $user=User::find(Auth::guard('user-api')->user()->id);
        $prev_logo = false;
        if($user->logo){
            $prev_logo = $user->logo->file_url;
        }
        $logo = uploadImage($request->logo, 'user_logo');
            if ($prev_logo) {
                $user->logo()->update([
                    'file_url' => $logo['file_url'],
                    'size' => $logo['size'],
                    'type' => $logo['type'],
                    'name_file' => $logo['name_file']
                ]);
                Storage::disk('uploads')->delete($prev_logo);

            }else{
                $user->logo()->create($logo);
            }

            return $this->returnSuccessMessage('logo updated');

    }

}
