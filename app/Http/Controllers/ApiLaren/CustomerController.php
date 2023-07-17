<?php

namespace App\Http\Controllers\ApiLaren;

use App\Models\Site;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\SiteContact;
use Illuminate\Http\Request;
use App\Http\Resources\CustomerRes;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;

class CustomerController extends Controller
{
    use GeneralTrait;

    function index() {
       $customers = Customer::where('user_id',authUser('user-api')->id)
       ->where('name','like','%'.request()->search.'%')
       ->Orwhere('postal_code','like','%'.request()->search.'%')->get();

       return  $customers;
    }

    function create(Request $request) {

        $validator = Validator::make($request->all(), [
            'type_id' =>'required',
            'name' => 'required_if:type_id,==,2',
            'first_name'=>'required_if:type_id,==,1',
            'last_name'=>'required_if:type_id,==,1',
            'postal_code' => 'required',
            'address'=>'required',
            'street_num' =>'required',
            'city' => 'required',
            'country_id' => ['required', 'exists:countries,id'],
            'state'=>'required',
        ]);

        if ($validator->fails()) {
            return $this->returnValidationError($validator->errors(),'You must enter all data',422);
        }
        try{
           $customer= Customer::create([
                'type_id'=>$request->type_id,
                'name'=>$request->name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'postal_code'=>$request->postal_code,
                'address'=>$request->address,
                'street_num'=>$request->street_num,
                'city'=>$request->city,
                'country_id'=>$request->country_id,
                'state'=>$request->state,
                'user_id'=>Auth::guard('user-api')->user()->id,
            ]);



            $customerContact=Contact::create([
                'user_id'=>Auth::guard('user-api')->user()->id,
                'customer_id'=> $customer->id,
                'f_name'=>$request->first_name .' '.$request->last_name.' '.$request->name,
                'phone'=>$request->phone,
                'type'=>$request->type,
                'email'=>$request->email
            ]);

            if ($request->copy_site_address == 'yes') {
               $site= Site::create([
                    "name" => $request->site_name,
                    // "name" => $customer->site_name,
                    "address" => $request->address,
                    "street_num" => $request->street_num,
                    "city" => $request->city,
                    "state"=>$request->state,
                    "postal_code" => $request->postal_code,
                    "country_id" => $request->country_id,
                    "property_type"=>$request->property_type,
                    "other_value"=>$request->other_value,
                    "user_id" => Auth::guard('user-api')->user()->id,
                    'customer_id'=> $customer->id,

                ]);

            }else{
                $site= Site::create([
                    "name" => $request->site_name,
                    "address" => $request->site_address,
                    "street_num" => $request->site_street_num,
                    "city" => $request->site_city,
                    "state"=>$request->site_state,
                    "postal_code" => $request->site_postal_code,
                    "country_id" => $request->site_country_id,
                    "property_type"=>$request->property_type,
                    "other_value"=>$request->other_value,
                    "user_id" => Auth::guard('user-api')->user()->id,

                ]);

            }
            if ($request->copy_contact == 'yes') {
                SiteContact::create([
                    'customer_id' =>$customer->id,
                    'site_id' =>$site->id,
                    'user_id' =>authUser('user-api')->id,
                    'f_name' =>$customerContact->f_name,
                    // 'f_name' =>$request->f_name,
                    'phone' =>$customerContact->phone,
                    'email' =>$customerContact->email,
                    'type' =>$customerContact->type,
                ]);
            }else{
                SiteContact::create([
                    'customer_id' =>$customer->id,
                    'site_id' =>$site->id,
                    'user_id' =>authUser('user-api')->id,
                    'f_name' =>$request->site_contact_f_name,
                    'phone' =>$request->site_contact_phone,
                    'email' =>$request->site_contact_email,
                    'type' =>$request->site_contact_type,
                ]);

            }



            $data = new CustomerRes($customer);
            return $this->returnData('data', $data,'Customer Added!');


        }catch(\Exception $e){
            return $this->returnError(400,$e->getMessage());

        }

    }
}
