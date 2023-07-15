<?php

namespace App\Http\Controllers\ApiLaren;

use App\Models\Customer;
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
            $data = new CustomerRes($customer);
            return $this->returnData('data', $data,'Customer Added!');
        }catch(\Exception $e){
            return $this->returnError(400,$e->getMessage());

        }

    }
}
