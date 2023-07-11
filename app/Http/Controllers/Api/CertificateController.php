<?php

namespace App\Http\Controllers\Api;

use Mpdf\Mpdf;
use App\Models\Form;
use App\Models\User;
use App\Models\Certificate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\CertificateEmail;
use Mpdf\Config\FontVariables;
use App\Models\CertificateNote;
use Mpdf\Config\ConfigVariables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use App\Certificate\DomesticElectrical\Eicr;
use App\Certificate\DomesticGas\WarningNoticeGas;
use App\Certificate\DomesticElectrical\PortableApplianceTesting;
use App\Certificate\DomesticGas\LandlordHomeownerGasSafetyRecord;
use App\Certificate\DomesticElectrical\ElectricalDangerNotification;
use App\Certificate\DomesticElectrical\DomesticElectricalInstallationCertificate;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        $data =  Certificate::where([
            'user_id' => authUser('sanctum')->id,

        ])
            ->select('id', 'customer_id', 'form_id', 'created_at', 'status_id')
            ->with(['status', 'customer', 'notes', 'form'])
            ->latest()
            ->paginate($request->perPage);

        return responseJson(true, 'list of all certificates', $data);
    }

    public function completeCertificate()
    {
        $data =  Certificate::where([
            'user_id' => authUser('sanctum')->id,
        ])
            ->select('id', 'customer_id', 'status_id', 'form_id', 'created_at')
            ->where('status_id', 3)
            ->with(['status', 'customer', 'notes', 'form'])
            ->latest()
            ->get();

        return responseJson(true, 'list of all certificates', $data);
    }


    public function uncompletedCertificate()
    {
        $data =  Certificate::where('user_id', authUser('sanctum')->id)
            ->select('id', 'customer_id', 'form_id', 'status_id', 'created_at')
            ->where('status_id', '!=', 3)
            ->with(['status', 'customer', 'form'])
            ->latest()
            ->get();

        return responseJson(true, 'list of all certificates', $data);
    }

    /* ************ */
    public function certificateCount()
    {

        $count_complete_cert = Certificate::where('user_id', authUser('sanctum')->id)
            ->select('id', 'customer_id', 'status_id', 'form_id', 'created_at')
            ->where('status_id', 3)
            ->count();

        $count_uncompleted_cert =  Certificate::where('user_id', authUser('sanctum')->id)
            ->select('id', 'customer_id', 'form_id', 'status_id', 'created_at')
            ->where('status_id', '!=', 3)
            ->count();

        $data = [
            'count_complete_cert' => $count_complete_cert,
            'count_uncompleted_cert' => $count_uncompleted_cert,
        ];
        return responseJson(true, 'Certificates Count', $data);
    }


    public function store(Request $request)
    {
        //return response()->json($request->job_id) ;
        $request->validate([
            'customer_id' => ['sometimes', 'required', 'exists:customers,id'],
            'form_id' => ['required', 'exists:forms,id'],
            'data' => ['required'],
            'site_id'=>['required', 'exists:sites,id'],
        ]);


        $data = new Certificate();
        $data->user_id = authUser('sanctum')->id;
        $data->form_id = $request->form_id;
        $data->customer_id = $request->customer_id;
        $data->status_id = $request->status_id;
        $data->site_id=$request->site_id;
        $data->data = $request->data;
        $data->site_id=$request->site_id;
        $data->save();

        if ($request->form_images) {
            $images = $request->form_images;
            foreach ($images as $key => $imageFile) {
                if (is_file($imageFile['image'])) {
                    $image = uploadImage($imageFile['image'], $imageFile['id']);
                    $data->files()->create($image);
                }
            }
        }
        if ($request->customer_signature) {
            $customer_signature = $request->customer_signature;
            $image = uploadImage($customer_signature, 'customer_signature');
            $data->files()->create($image);
        }

        $form = Form::findOrFail($request->form_id);

        $folder_name = '';
        if ($form->type == 'Domestic Electrical') {
            $folder_name = 'domestic_electrical';
        } else if ($form->type == 'Domestic Gas') {
            $folder_name = 'domestic_gas';
        } else if ($form->type == 'Commercial Gas') {
            $folder_name = 'commercial_gas';
        }
        // view page name
        $page_path = 'dashboard.form.template.' . $folder_name . '.' . $form->file_name . '.index';

        if (View::exists($page_path)) {

            $body = [
                "form_data" => $data,
                // 'html_content' => $html
            ];
            return responseJson(true, 'success created', $body);
        } else {
            return responseJson(false, 'page not found', '', 404);
        }
    }


    public function storeNote($id, Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);
        $user = authUser('sanctum');
        $certificate =  Certificate::where('user_id', $user->id)->findOrFail($id);
        DB::beginTransaction();

        try {
            $note = $certificate->notes()->create([
                'user_id' => $user->id,
                'title' => $request->title,
                'body' => $request->body,
            ]);
            $files_name = [];
            if ($request->note_files) {
                foreach ($request->note_files as $key =>  $file) {
                    //dd($file);
                    $file_name = strtotime(now()) . '_' . Str::random(6) . '.' . $file->extension();
                    $files_name[$key]['name'] = $file_name;

                    if ($file->extension() == 'jpeg' || $file->extension() == 'jpg' || $file->extension() == 'png') {
                        $image = uploadImageAs($file, $file_name, 'image');
                        $file = $note->files()->create($image);
                        $files_name[$key]['id'] = $file->id;
                        $files_name[$key]['url'] = $file->url;
                        $files_name[$key]['type'] = 'image';
                    } elseif ($file->extension() == 'mp4' || $file->extension() == 'vlc') {

                        $image = uploadImageAs($file, $file_name, 'video');
                        $file = $note->files()->create($image);
                        $files_name[$key]['id'] = $file->id;
                        $files_name[$key]['url'] = $file->url;
                        $files_name[$key]['type'] = 'video';
                    }
                }
            }

            $body = [
                "note" => $note,
                "files" => $files_name
            ];
            DB::commit();
            return responseJson(true, 'success created', $body);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function updateNote($noteId, Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        $user = authUser('sanctum');
        $note = CertificateNote::where('user_id', $user->id)->find($noteId);
        if (!$note) {
            return responseJson(false, 'note not found', [], 404);
        }
        DB::beginTransaction();
        try {
            //code...
            $note->update([
                'title' => $request->title,
                'body' => $request->body,
            ]);

            $files_name = [];
            if ($request->note_files) {
                foreach ($request->note_files as $key =>  $file) {
                    //dd($file);
                    $file_name = strtotime(now()) . '_' . Str::random(6) . '.' . $file->extension();
                    $files_name[$key]['name'] = $file_name;

                    if ($file->extension() == 'jpeg' || $file->extension() == 'jpg' || $file->extension() == 'png') {
                        $image = uploadImageAs($file, $file_name, 'image');
                        $file = $note->files()->create($image);

                        $files_name[$key]['id'] = $file->id;
                        $files_name[$key]['url'] = $file->url;
                        $files_name[$key]['type'] = 'image';
                    } elseif ($file->extension() == 'mp4' || $file->extension() == 'vlc') {

                        $image = uploadImageAs($file, $file_name, 'video');
                        $file = $note->files()->create($image);
                        $files_name[$key]['id'] = $file->id;
                        $files_name[$key]['url'] = $file->url;
                        $files_name[$key]['type'] = 'video';
                    }
                }
            }
            if ($request->files_id) {
                foreach ($request->files_id as $key => $file_id) {
                    $file = $note->files()->find($file_id);
                    Storage::disk('uploads')->delete($file->file_url);
                    $file->delete();
                }
            }

            $body = [
                "note" => $note,
                "files" => $files_name
            ];
            DB::commit();
            return responseJson(true, 'success created', $body);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /* public function deleteFileNote($id, $file_id)
    {
        $user = authUser('sanctum');
        $note =  CertificateNote::where('user_id', $user->id)->findOrFail($id);
        $file = $note->files()->find($file_id);
        Storage::disk('uploads')->delete($file->file_url);
        $file->delete();
        return responseJson(true, 'success delete file', []);
    } */



    public function update($id, Request $request)
    {

        $request->validate([
            'status_id' => ['sometimes',  'exists:statuses,id'],
            'data' => ['required']
        ]);

        $user = authUser('sanctum');
        $data =  Certificate::where('user_id', $user->id)->findOrFail($id);
        $data->status_id = $request->status_id;
        $data->site_id=$request->site_id;
        $data->data = $request->data;
        $data->save();

        if ($request->form_images) {
            $images = $request->form_images;
            foreach ($images as $key => $imageFile) {
                if (is_file($imageFile['image'])) {
                    $image = uploadImage($imageFile['image'], $imageFile['id']);
                    $data->files()->create($image);
                }
            }
        }

        if ($request->customer_signature) {
            $customer_signature = $request->customer_signature;
            $image = uploadImage($customer_signature, 'customer_signature');
            $data->files()->create($image);
        }


        return responseJson(true, 'success update', $data);
    }



    public function view($id, Request $request)
    {
        $user_id = Auth::guard('sanctum')->user()->id;

        $data =  Certificate::where([
            'user_id' => $user_id,
            'id' => $id,
        ])
            ->with(['status', 'notes.files', 'form', 'customer', 'customer.sites', 'customer.contacts', 'customer.country', 'customer.billing.paymentTerm'])
            ->first();

        if ($data) {

            $form = Form::findOrFail($data->form_id);

            $folder_name = '';
            if ($form->type == 'Domestic Electrical') {
                $folder_name = 'domestic_electrical';
            } else if ($form->type == 'Domestic Gas') {
                $folder_name = 'domestic_gas';
            } else if ($form->type == 'Commercial Gas') {
                $folder_name = 'commercial_gas';
            }

            // view page name
            $page_path = 'dashboard.form.template.' . $folder_name . '.' . $form->file_name . '.index';

            if (View::exists($page_path)) {


                $gaz_safety_data =  data_get($data->data, 'gaz_safety_data');
                $final_result = data_get($data->data, 'gaz_safety_data.*.final_result');



                $user = User::where('id', $user_id)->first();
                /*  $html = View::make($page_path, [
                    'form_data' => $data,
                    'data' => $data->data,
                    'formData' => $gaz_safety_data[0],
                    'user' => $user,
                ])->render(); */

                $form_data = collect($data);
                $form_data->all();
                $body = [
                    "form_data" => $form_data,
                    // 'html_content' => $html
                ];
                return responseJson(true, 'success selected', $body);
            } else {
                return responseJson(false, 'page not found', '', 404);
            }
        } else {
            return responseJson(false, 'certificate Not found ', null, 404);
        }
    }




    function getPdfForm($id)
    {
        $user = Auth::guard('sanctum')->user();

        $certificate = Certificate::where('user_id', $user->id)->find($id);

        $file_name = $certificate->form->file_name;
        if ($file_name == 'Domestic_Electrical_installation_Condition_report') {
            $form =  Eicr::getPdf($certificate);
        } elseif ($file_name == 'Landlord_Homeowner_Gas_Safety_Record') {
            $form =  LandlordHomeownerGasSafetyRecord::getPdf($certificate);
        } elseif ($file_name == 'Warning_Notice') {
            $form = WarningNoticeGas::getPdf($certificate);
        } elseif ($file_name == 'Portable_Appliance_Testing') {
            $form = PortableApplianceTesting::getPdf($certificate);
        } elseif ($file_name == 'Electrical_Danger_Notification') {
            $form = ElectricalDangerNotification::getPdf($certificate);
        } elseif ($file_name == 'Domestic_Electrical_Installation_Certificate') {
            $form = DomesticElectricalInstallationCertificate::getPdf($certificate);
        }
        return $form;
    }


    public function updateStatus($id, Request $request)
    {
        $request->validate([
            'status_id' => ['sometimes',  'exists:statuses,id']
        ]);
        $user = authUser('sanctum');
        $data =  Certificate::where('user_id', $user->id)->findOrFail($id);

        $data->update(['status_id' => $request->status_id]);

        return responseJson(true, 'success update status', $data);
    }


    public function sendEmail($id)
    {
        $user = Auth::guard('sanctum')->user();
        $certificate = Certificate::where('user_id', $user->id)->find($id);
       $customer_email = $certificate->customer->contacts()->first()->email;
        Mail::to($customer_email)->send(new CertificateEmail($user, $certificate));
        $data = [
            'customer_email' =>$customer_email,
            'user_email' => $user->email
        ];
        return responseJson(true,'success send email',$data);
    }
}
