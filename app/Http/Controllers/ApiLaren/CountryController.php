<?php

namespace App\Http\Controllers\ApiLaren;

use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    use GeneralTrait;
    public function index(){

        $countries = Country::where('name', 'like', '%'.request()->search.'%')
        ->select('id','name')->get();

        return $this->returnData('countries',$countries,'success get countries');
    }
}
