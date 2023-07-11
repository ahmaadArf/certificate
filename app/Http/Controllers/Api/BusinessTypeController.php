<?php

namespace App\Http\Controllers\Api;

use App\Models\BusinessType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusinessTypeController extends Controller
{
    public function index()
    {
        $BusinessType = BusinessType::all();
        return responseJson(true,'list of all business type', $BusinessType);
    }
}
