<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index($id)
    {
        $contacts = Contact::where('customer_id',$id)->all();
        return responseJson(true,'success',$contacts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user =  Auth::guard('sanctum')->user();
        $request->validate([
            'f_name' => 'required',
            //'l_name' => 'required',
            'phone' => 'required',
            'type' => 'required|in:owner,director,site Manager,landlord,agent,finance Manager',
            'email'=>'required|email',
        ]);

        $contact = Contact::create([
        "f_name" => $request->f_name,
        //"l_name" => $request->l_name,
        "phone" => $request->phone,
        "email" => $request->email,
        "type" => $request->type,
        "user_id" => $user->id ,
        ]);
        return responseJson(true,'success',$contact);
    }
}
