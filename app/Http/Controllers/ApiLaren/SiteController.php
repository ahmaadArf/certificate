<?php

namespace App\Http\Controllers\ApiLaren;

use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;
use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\SiteContact;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    use GeneralTrait;

    public function create(Request $request) {
        $site=Site::create([
            'name'=>$request->name,
            "postal_code" => $request->postal_code,
            "street_num" => $request->street_num,
            "city" => $request->city,
            "state"=>$request->state,
            "country_id" => $request->country_id,
            'user_id' =>Auth::guard('user-api')->user()->id,
            'customer_id' =>$request->customer_id,
            "address" => $request->address,
            "property_type"=>$request->property_type,
            'other_value'=>$request->other_value,
        ]);
        if($request->copy_contact == 'yes'){
            $customer=Customer::find($request->customer_id);
            $customerContact=$customer->contacts()->first();
            SiteContact::create([
                'customer_id' =>$request->customer_id,
                'site_id' =>$site->id,
                'user_id' =>authUser('user-api')->id,
                'f_name' =>$customerContact->f_name,
                'phone' =>$customerContact->phone,
                'email' =>$customerContact->email,
                'type' =>$customerContact->type,
            ]);


        }else{
            SiteContact::create([
                'customer_id' =>$request->customer_id,
                'site_id' =>$site->id,
                'user_id' =>authUser('user-api')->id,
                'f_name' =>$request->f_name,
                'phone' =>$request->phone,
                'email' =>$request->email,
                'type' =>$request->type,
            ]);

        }


        return $this->returnData('data', $site,'Site Added!');


    }
}
