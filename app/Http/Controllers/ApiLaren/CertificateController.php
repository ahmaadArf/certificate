<?php

namespace App\Http\Controllers\ApiLaren;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;

class CertificateController extends Controller
{
    use GeneralTrait;

    function completeCertificate() {

        $certificates= Certificate::where('status_id',3)->get();
        $data = ['count'=>count($certificates),'completeCertificate'=> $certificates ];
        return $this->returnData('data', $data,'completeCertificate');
    }

    function uncompletedCertificate() {

        $certificates= Certificate::where('status_id','!=',3)->get();
        $data = ['count'=>count($certificates),'uncompletedCertificate'=> $certificates ];
        return $this->returnData('data', $data,'uncompletedCertificate');

    }
}
