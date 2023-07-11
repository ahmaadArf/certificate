<?php

namespace App\Http\Controllers\Api;

use App\Models\PaymentTerm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentTermController extends Controller
{
    public function index()
    {
        $payment_terms = PaymentTerm::all();
        return responseJson(true, 'created successfuly', $payment_terms);
    }
}
