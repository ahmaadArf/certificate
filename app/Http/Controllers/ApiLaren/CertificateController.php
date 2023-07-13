<?php

namespace App\Http\Controllers\ApiLaren;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Models\CertificateNote;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\resourceLaern\certificates;
use App\Http\Controllers\ApiLaren\Traits\GeneralTrait;
use App\Http\Resources\resourceLaern\CertificatesResource;

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
        $data=CertificatesResource::collection($certificates);
        return $this->returnData('certificates', $data,'Certificate');

    }

    public function show($id) {
        $certificate= Certificate::find($id);
        if($certificate){
        $data=new CertificatesResource($certificate);
        return $this->returnData('certificates', $data,'Certificate');
        }

    }

    public function createNote(Request $request,$id) {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->returnValidationError($validator->errors(), 'You must enter all data',422);
        }
        $certificateNote=CertificateNote::create([
            'user_id'=>authUser('user-api')->id,
            'body'=>$request->body,
            'title'=>$request->title,
            'certificate_id'=>$id
        ]);
        return $this->returnData('Certificate Note', $certificateNote,'Certificate Note Added!');

    }
}
