<?php

namespace App\Http\Controllers\ApiLaren;

use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;
use App\Http\Controllers\Controller;
use App\Http\Resources\PlanRes;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    use GeneralTrait;
    public function index() {
        $plans=Plan::all();
        return view('api.plans',compact('plans'));

    }
    public function monthlyPlans() {
        $plans=Plan::where('interval','monthly')->get();
        return $this->returnData('Plans',$plans,'All Monthly Plane');

    }
    public function yearlyPlans() {
        $plans=Plan::where('interval','yearly')->get();
        return $this->returnData('Plans',$plans,'All yearly Plane');

    }
    public function show($id) {
        $plan=Plan::find($id);
        $data=new PlanRes($plan);
        return $this->returnData('Plan',$data,'Plane informations');

    }
    public function allPlan() {
        $plan=Plan::all();
        $data=PlanRes::collection($plan);
        return $this->returnData('Plan',$data,'Plane informations');


    }

}
