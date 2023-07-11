<?php

namespace App\Http\Controllers\Web;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Certificate\DomesticElectrical\Eicr;
use App\Certificate\DomesticGas\WarningNoticeGas;
use App\Certificate\DomesticElectrical\PortableApplianceTesting;
use App\Certificate\DomesticGas\LandlordHomeownerGasSafetyRecord;
use App\Certificate\DomesticElectrical\ElectricalDangerNotification;
use App\Certificate\DomesticElectrical\DomesticElectricalInstallationCertificate;

class CertificateController extends Controller
{
   public function view($customer_id, $certificate_id,$created_at){
    $created_at = date('Y-m-d H:i:s', $created_at);
    $certificate = Certificate::where('customer_id', $customer_id)
    ->where('created_at',$created_at)
    ->findOrFail($certificate_id);
    //return strtotime($certificate->created_at);
    $file_name = $certificate->form->file_name;

    if ($file_name == 'Domestic_Electrical_installation_Condition_report') {
        $form =  Eicr::openPdf($certificate);
    } elseif ($file_name == 'Landlord_Homeowner_Gas_Safety_Record') {
        $form =  LandlordHomeownerGasSafetyRecord::openPdf($certificate);
    } elseif ($file_name == 'Warning_Notice') {
        $form = WarningNoticeGas::openPdf($certificate);
    } elseif ($file_name == 'Portable_Appliance_Testing') {
        $form = PortableApplianceTesting::openPdf($certificate);
    } elseif ($file_name == 'Electrical_Danger_Notification') {
        $form = ElectricalDangerNotification::openPdf($certificate);
    } elseif ($file_name == 'Domestic_Electrical_Installation_Certificate') {
        $form = DomesticElectricalInstallationCertificate::openPdf($certificate);
    }
    return $form;
   }
}
