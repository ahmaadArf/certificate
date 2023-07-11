<?php

namespace App\Http\Controllers\Api;

use App\Models\TaxStatus;
use App\Models\TaxSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaxSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }


    public function index(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        $tax_setting = TaxSetting::select('id','tax_name','tax_amount','user_id')
        ->where('user_id', $user->id)
        ->orWhere('user_id',null)
        ->with('status')
        ->when($request->search, function($query,$value){
            $query->where('tax_settings.tax_name','LIKE',"%$value%");
        })->get();

        return responseJson(true,'list of all taxes', $tax_setting);
    }

    public function changeDefault($id)
    {
        $user = Auth::guard('sanctum')->user();
        TaxStatus::where('user_id', $user->id)->update(['default_rate' => 'no']);
        $tax_setting = TaxSetting::findOrFail($id);
        $tax_setting->status()->updateOrCreate(
            [
                'user_id' => $user->id,
                'tax_id' => $id
            ],
            [
                'user_id' => $user->id,
                'tax_id' => $id,
                'default_rate' => 'yes'
            ]
        );

        return response()->json([
            'status' => true,
            'data' => $tax_setting
        ]);
    }
}
