<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Certificate;

class HomeController extends Controller
{
    public function search(Request $request)
    {
        // $request->q;
       $customers = Customer::where('user_id', authUser('sanctum')->id)
        ->where('name', 'Like', '%' . $request->q . '%')
        ->get();

        $certificates =  Certificate::where('user_id' , authUser('sanctum')->id)
            ->where('id', 'Like', '%' . $request->q . '%')
            ->select('id', 'customer_id', 'form_id', 'status_id', 'created_at')
            ->latest()
            ->get();
        $data =[
            'customers' => $customers,
            'certificates' => $certificates,
        ];

        return responseJson(true, 'search result', $data);
    }
}
