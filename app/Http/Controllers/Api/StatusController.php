<?php

namespace App\Http\Controllers\Api;

use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function index(){
        $data = Status::orderBy('id')->get();
        return responseJson(true,'stuatus type',$data);
    }
}
