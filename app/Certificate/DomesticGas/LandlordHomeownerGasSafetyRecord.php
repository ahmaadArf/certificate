<?php

namespace App\Certificate\DomesticGas;

use Mpdf\Mpdf;
use Mpdf\Config\FontVariables;
use Mpdf\Config\ConfigVariables;
use Illuminate\Support\Facades\Storage;

class LandlordHomeownerGasSafetyRecord
{

    public static function createPdf($certificate)
    {
        define('_MPDF_TTFONTPATH', asset('admin/fonts/gnu-free-font'));

        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        //   $invoice = new Mpdf(['orientation' => 'L']);
        $invoice =  new Mpdf([
              'orientation' => 'L',
            'fontDir' => array_merge($fontDirs, [
                asset('admin/fonts/'),
            ]),
            'fontdata' => $fontData + [
                'FreeSans' => [
                    'R' => "FreeSans.ttf",
                    'I' => "FreeSansOblique.ttf",
                ],
            ],
            'default_font' => 'FreeSans',
            'format' => 'A4'
        ]);
        /* $invoice->AddPage('P'); */
        $invoice->shrink_tables_to_fit = 1;
        $invoice->use_kwt = true;
        $data = $certificate;

        $formData =  $data->data;

        $invoice->fontdata["fontawesome"] = [
            'R' => "fa-solid-900.tff",
            'I' => "fa-regular-400.ttf",
        ];


        $html = view('dashboard.form.template.domestic_gas.Landlord_Homeowner_Gas_Safety_Record.index', [
            'data' => $data,
            'formData' => $formData
        ])->render();

        $invoice->WriteHTML($html);

        $invoice->AddPage('L');
        $page_2 = view('dashboard.form.template.domestic_gas.Landlord_Homeowner_Gas_Safety_Record.page-2', [
            'data' => $data,
            'formData' => $formData
        ])->render();
        $invoice->WriteHTML($page_2);


        return $invoice;

    }



    public static function getPdf($certificate)
    {
        $file = Self::createPdf($certificate);
        //dd($file);
        $fileName = "C$certificate->id.pdf";
        $file_path =  public_path("uploads/certificate/" . $fileName);

        Storage::disk('uploads')->makeDirectory('certificate');
        if (Storage::disk('uploads')->exists('certificate/' . $fileName)) {

            Storage::disk('uploads')->delete('certificate/' . $fileName);
            $file->Output($file_path, 'F');
            return responseJson(true, 'pdf file for certificate', [
                'url' => asset('uploads/certificate/' . $fileName)
            ]);
        } else {

            $file->Output($file_path, 'F');
            return responseJson(true, 'pdf file for certificate', [
                'url' => asset('uploads/certificate/' . $fileName)
            ]);
        }
    }

    public static function stringCode($certificate)
    {
        $file = Self::createPdf($certificate);
        $fileName = "C$certificate->id.pdf";
        return $file->Output($fileName, 's');
    }

    public static function openPdf($certificate)
    {
        $file = Self::createPdf($certificate);
        $fileName = "C$certificate->id.pdf";
        $file->Output($fileName,'I');
    }
}
