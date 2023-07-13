<?php

namespace App\Http\Controllers\ApiLaren;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;
use App\Http\Resources\resourceLaern\certificates;

class CertificateController extends Controller
{
    use GeneralTrait;

    public function index() {
        $certificates= Certificate::where('user_id',authUser('user-api')->id)->get();
        $data = [
            'count'=>count($certificates),
            'completeCertificate'=> $certificates
        ];
        return $this->returnData('data', $data,'All Certificate');

    }

    public function completeCertificate() {

        $certificates= Certificate::where('status_id',3)->where('user_id',authUser('user-api')->id)->get();
        $data = [
            'count'=>count($certificates),
            'completeCertificate'=> $certificates
        ];
        return $this->returnData('data', $data,'Complete Certificate');
    }

    public function uncompletedCertificate() {

        $certificates= Certificate::where('status_id','!=',3)->where('user_id',authUser('user-api')->id)->get();
        $data = [
            'count'=>count($certificates),
            'uncompletedCertificate'=> $certificates
        ];
        return $this->returnData('data', $data,'Un Completed Certificate');

    }

    public function filter() {

        if(!request()->id)
        return $this->index();
        $certificates= Certificate::where('user_id',authUser('user-api')->id)
        ->where('status_id',request()->id)->with(['status', 'customer', 'notes','form', 'site'])->get();
        $data=Certificate::collection($certificates);
        return $this->returnData('certificates', $data,'Certificate');




    }
}
