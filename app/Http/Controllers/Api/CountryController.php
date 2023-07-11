<?php

namespace App\Http\Controllers\Api;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;

class CountryController extends Controller
{
    public function index(Request $request){

        $countries = Country::select('id','name')
        ->when($request->search, function($query,$value){
            $query->where('countries.name','LIKE',"%$value%");
        })
        ->get();
        $data = CountryResource::collection($countries);
        return responseJson(true,'success get countries',$data);
    }
}
