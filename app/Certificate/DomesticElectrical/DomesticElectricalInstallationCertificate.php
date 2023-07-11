<?php

namespace App\Certificate\DomesticElectrical;

use Mpdf\Mpdf;
use Mpdf\Config\FontVariables;
use Mpdf\Config\ConfigVariables;
use Illuminate\Support\Facades\Storage;

class DomesticElectricalInstallationCertificate
{


    public static function createPdf($certificate)
    {
        define('_MPDF_TTFONTPATH', asset('admin/fonts/gnu-free-font'));

        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        //   $invoice = new Mpdf(['orientation' => 'L']);

        $pdf_form =  new Mpdf([
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
        $pdf_form->shrink_tables_to_fit = 1;
        $pdf_form->SetTitle('Domestic_Electrical_Installation_Certificate');

        $formData =  $certificate->data;

        $pdf_form->fontdata["fontawesome"] = [
            'R' => "fa-solid-900.tff",
            'I' => "fa-regular-400.ttf",
        ];

        $html = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_Installation_Certificate.index', [
            'data' => $certificate,
            'formData' => $formData
        ])->render();

        $pdf_form->WriteHTML($html);

        $pdf_form->AddPage('L');
        $page_2 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_Installation_Certificate.scond', [
            'data' => $certificate,
            'formData' => $formData
        ])->render();
        $pdf_form->WriteHTML($page_2);
        // $pdf_form->Output();


        $pdf_form->AddPage('L');
        $page_3 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_Installation_Certificate.therd', [
            'data' => $certificate,
            'formData' => $formData
        ])->render();
        $pdf_form->WriteHTML($page_3);
        return $pdf_form;
        /*
        $fileName = "C$certificate->id.pdf";
        $file_path =  public_path("uploads/certificate/" . $fileName);
        Storage::disk('uploads')->makeDirectory('certificate');
        if (Storage::disk('uploads')->exists('certificate/' . $fileName)) {
            Storage::disk('uploads')->delete('certificate/' . $fileName);
            $pdf_form->Output($file_path, 'F');
            return responseJson(true, 'pdf file for certificate', [
                'url' => asset('uploads/certificate/' . $fileName)
            ]);
        } else {
            $pdf_form->Output($file_path, 'F');
            return responseJson(true, 'pdf file for certificate', [
                'url' => asset('uploads/certificate/' . $fileName)
            ]);
        }
         $pdf_form->Output(); */
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
