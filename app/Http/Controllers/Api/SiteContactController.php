<?php

namespace App\Http\Controllers\Api;

use App\Models\Site;
use App\Models\SiteContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SiteResource;
use Illuminate\Support\Facades\Auth;

class SiteContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            //'name' => 'required',
            'site_id' => 'required|exists:sites,id',
            'f_name' => 'required',
            //'l_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'type' => 'required|in:flat,studio,house,office,warehouse,others',
        ]);
        $user =  Auth::guard('sanctum')->user();

        $site_contact = SiteContact::create([
            "site_id" => $request->site_id,
            "type" => $request->type,
            "f_name" => $request->f_name,
            //"l_name" => $request->l_name,
            "phone" => $request->phone,
            "email" => $request->email,
            "user_id" => $user->id,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'success created',
            'data' => $site_contact
        ]);
    }

    public function update(Request $request, $id)
    {
        $site = Site::where('user_id', authUser('sanctum')->id)->findOrFail($id);
        $site->update(['name' => $request->site_name]);
        $site->siteContact()->update([
            'type' => $request->type,
            'f_name' => $request->first_name,
            'l_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        $data = new SiteResource($site);
        return responseJson(true,'success update',$data);
    }
}
