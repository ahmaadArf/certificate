<?php

namespace App\Http\Controllers\Api;
use Illuminate\Database\Query\Builder;
use App\Models\Customer;
use App\Models\Site;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\CustomerResource;
use Illuminate\Validation\Rule;


class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(Request $request)
    {
        $user = Auth::guard('sanctum')->user();

        $customers = Customer::where('user_id', $user->id)
            ->when($request->search, function ($query, $value) {
                $query->where('customers.name', 'LIKE', "%$value%");
            })
            ->when($request->type, function ($query, $value) {
                $query->where('type', 'LIKE', "%$value%");
            })
            ->with('customerType')
            ->latest()
            ->get();
          //  $data = new CustomerResource($customers);
        return responseJson(true, 'successfully', $customers);
    }

    public function show($id)
    {
        $customer = Customer::where('id', $id)->first();
        $data = new CustomerResource($customer);
        return responseJson(true, 'successfully', $data);
    }

    public function validation(Request $request)
    {
        return  $request->validate([
            'first_name'=>'nullable',
            'last_name'=>'nullable',
            'name' => 'nullable',
            'address' => 'required',
            'street_num' => 'nullable',
            'city' => 'nullable',
            'state'=>'required',
            'postal_code' => 'nullable',
            'country_id' => ['nullable', 'exists:countries,id'],
            'type_id' => ['required', 'exists:customer_types,id'],
            'tax_id' => ['nullable', 'exists:tax_settings,id'],
            
        ]);
    }



    public function store(Request $request)
    {
        $request->validate([
            'type_id' => 'required',
            'name' => 'required_if:type_id,==,2',
            'first_name'=>'required_if:type_id,==,1',
            'last_name'=>'required_if:type_id,==,1',
            'address'=>'required_if:type_id,==,1|required_if:type_id,==,2',
            'street_num' =>'required',
            'city' => 'required',
            'postal_code' => 'required',
            'country_id' => ['required', 'exists:countries,id'],
            'state'=>'required',
            'other_value' =>  Rule::requiredIf(function () use ($request) {
                return $request->property_type === 'others';
            }),
        ]);
        $request->merge([
            'user_id' => Auth::guard('sanctum')->user()->id,
        ]);

        try {

            //start the transaction

            DB::beginTransaction();
            //create customer
            $customer = Customer::create($request->only('type_id','state','country_id','postal_code','city','address','street_num','name','last_name','first_name','property_type','other_value','user_id'));

            // create billing details
            // if ($request->billing_details == 'no') {
            //     $customer->billing()->create(
            //         [
            //             'address' => $request->billing_address,
            //             'street_num' => $request->billing_street_num,
            //             'country_id' => $request->billing_country_id,
            //             'city' => $request->billing_city,
            //             'state'=>$request->billing_state,
            //             'postal_code' => $request->billing_postal_code,
            //             'credit_limit' => $request->credit_limit,
            //             'payment_term_id' => $request->payment_term_id,
            //             'send_statement' => $request->send_statement,
            //         ]
            //     );
            // } else {
            //     $customer->billing()->create([
            //         'address' => $request->address,
            //         'street_num' => $request->street_num,
            //         'country_id' => $request->country_id,
            //         'city' => $request->city,
            //         'state'=>$request->state,
            //         'postal_code' => $request->postal_code,
            //         'credit_limit' => $request->credit_limit,
            //         'payment_term_id' => $request->payment_term_id,
            //         'send_statement' => $request->send_statement,
            //     ]);
            // }
            //create client contact
            $customer->contacts()->create([
                "f_name" => $request->client_f_name,
               // "l_name" => $request->client_l_name,
                "phone" => $request->client_phone,
                "email" => $request->client_email,
                "type" => $request->client_type,
                "user_id" => $request->user_id,
            ]);

            // create site
            if ($request->has('site_name')) {
                if ($request->copy_site_address == 'yes') {
                    $site = $customer->sites()->create([
                        "name" => $request->site_name,
                        "address" => $request->address,
                        "street_num" => $request->street_num,
                        "city" => $request->city,
                        "state"=>$request->state,
                        "postal_code" => $request->postal_code,
                        "country_id" => $request->country_id,
                        "property_type"=>$request->property_type,
                        "other_value"=>$request->other_value,
                        "user_id" => $request->user_id,

                    ]);
                } else {
                    $site = $customer->sites()->create([
                        "name" => $request->site_name,
                        "address" => $request->site_address,
                        "street_num" => $request->site_street_num,
                        "city" => $request->site_city,
                        "state"=>$request->site_state,
                        "postal_code" => $request->site_postal_code,
                        "country_id" => $request->site_country_id,
                        'property_type'=>$request->property_type,
                        "other_value"=>$request->other_value,
                        "user_id" => $request->user_id,
                    ]);
                }
            }
            // create site contact
            if ($request->has('site_contact_type')) {
                if ($request->copy_contact == 'yes') {
                    $sitecontact = $customer->siteContact()->create([
                        'site_id' =>  $site->id,
                        'type' => $request->site_contact_type,
                        'f_name' => $request->client_f_name,
                        'phone' => $request->client_phone,
                        'email' => $request->client_email,
                        'user_id' => $request->user_id
                    ]);
                } else {
                    $sitecontact = $customer->siteContact()->create([
                        'site_id' =>  $site->id,
                        'type' => $request->site_contact_type,
                        'f_name' => $request->site_contact_f_name,
                        //'l_name' => $request->site_contact_l_name,
                        'phone' => $request->site_contact_phone,
                        'email' => $request->site_contact_email,
                        'user_id' => $request->user_id
                    ]);
                }
            }
            $data = new CustomerResource($customer);
            //commit the transaction
            DB::commit();
            return responseJson(true, 'created successfuly',  $data);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }
    public function showAddress($id){
        $customer=Customer::where('id',$id)->first();
        $site=Site::where('customer_id',$customer->id)->first();
        if($customer->address==$site->address){
            return response()->json([
                'status' => true,
                'message' => 'your address',
                'postal_code'=>$customer->postal_code,
                'country'=>$customer->country->name,
                'city'=>$customer->city,
                'state'=>$customer->state,
                'street_num'=>$customer->street_num,
                
            ]);
        }
        else{
            return response()->json([
                'status' => true,
                'message' => 'there is not match customer address',
                
            ]);
        }

    }
    public function searchPost(Request $request){
        $customer = Customer::where('user_id', authUser('sanctum')->id)
        ->where('postal_code', 'Like', '%' . $request->q . '%')
        ->first();
        return response()->json([
            'status' => true,
            'postal_code'=>$customer->postal_code,
            'street_num'=>$customer->street_num,
            'city'=>$customer->city,
            'country'=>$customer->country->name,
            'state'=>$customer->state,
            
        ]);
    }
    public function multiSearch(Request $request){
        $contacts=Contact::where('user_id',authUser('sanctum')->id)
        ->whereHas('customer.sites',function($query)use ($request){
            $query->where('phone','like','%'.$request->q.'%')
            ->orWhere('f_name','like','%'.$request->q.'%')
            ->orWhere('postal_code','like','%'.$request->q.'%');
            
        })
        ->with('customer.sites')
    ->get();

    $siteData = [];

    foreach ($contacts as $contact) {
        $customerSites = $contact->customer->sites;
        $siteData[] = [
            'contact' => $contact,
            'sites' => $customerSites,
        ];
    }
    return response()->json([
        'status' => true,
        'message' => 'Successfully',
        'data' => $siteData,
        'choice' => route('template'),
    ]);
        

    }
    
}
