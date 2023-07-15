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
        $dataResource=CertificatesResource::collection($certificates);
        $data = [
            'count'=>count($certificates),
            'Certificate'=> $dataResource
        ];
        return $this->returnData('data', $data,'All Certificate');

    }

    public function completeCertificate() {

        $certificates= Certificate::where('status_id',3)->where('user_id',authUser('user-api')->id)->get();
        $dataResource=CertificatesResource::collection($certificates);
        $data = [
            'count'=>count($certificates),
            'completeCertificate'=> $dataResource
        ];
        return $this->returnData('data', $data,'Complete Certificate');
    }

    public function uncompletedCertificate() {

        $certificates= Certificate::where('status_id','!=',3)->where('user_id',authUser('user-api')->id)->get();
        $dataResource=CertificatesResource::collection($certificates);
        $data = [
            'count'=>count($certificates),
            'uncompletedCertificate'=>  $dataResource
        ];
        return $this->returnData('data', $data,'Un Completed Certificate');

    }


    public function filter() {

        if(!request()->id)
        return $this->index();
        $certificates= Certificate::where('user_id',authUser('user-api')->id)
        ->where('status_id',request()->id)->with(['status', 'customer', 'notes','form', 'site'])->get();
        $data=CertificatesResource::collection($certificates);
        return $this->returnData('certificates',  $data,'Certificate');

    }

    public function show($id) {
        $certificate= Certificate::find($id);
        if($certificate){
        $data=new CertificatesResource($certificate);
        return $this->returnData('certificates', $data,'Certificate');
        }else{
            return $this->returnError(404,'Certificate Not Found');
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
        try{
            $certificateNote=CertificateNote::create([
                'user_id'=>authUser('user-api')->id,
                'body'=>$request->body,
                'title'=>$request->title,
                'certificate_id'=>$id
            ]);
            return $this->returnData('Certificate Note', $certificateNote,'Certificate Note Added!');

        }catch(\Exception $e){
            return $this->returnError(400,$e->getMessage());

        }
    }

    function allNote($id) {
        $certificate= Certificate::find($id);
        if($certificate){

            $certificateNotes= $certificate->notes()->get();
            return $this->returnData('All Note', $certificateNotes,'All Note Of Certificate!');

        }else{
            return $this->returnError(404,'Certificate Not Found');
        }


    }
}
