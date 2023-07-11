<?php

namespace App\Http\Controllers\ApiLaren;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index() {
        $plans=Plan::all();
        return view('api.plans',compact('plans'));

    }
}
