<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SignatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::guard('sanctum')->user()->id;

        $user = User::where('id', $user_id)->first();

        $signature = $user->signature;

        return responseJson(true, 'selected successful', $signature);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sign' => 'required|mimes:jpeg,png,jpg'
        ]);

        $user_id = Auth::guard('sanctum')->user()->id;
        $user = User::where('id', $user_id)->first();


        if ($user->signature) {
            Storage::disk('uploads')->delete($user->signature->signature);
            $user->signature()->delete();
        }

        if ($request->has('sign')) {
            $file = $request->sign;
            $file_url = $file->store('/images/signature', ['disk' => 'uploads']);
        }
        $signature = $user->signature()->create([
            'signature' => $file_url
        ]);

        return responseJson(true, 'created successful', $signature);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
