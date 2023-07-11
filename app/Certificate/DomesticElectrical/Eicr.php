<?php
//Domestic_Electrical_installation_Condition_report

namespace App\Certificate\DomesticElectrical;

use Mpdf\Mpdf;
use Mpdf\Config\FontVariables;
use Mpdf\Config\ConfigVariables;
use Illuminate\Support\Facades\Storage;

class Eicr
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
        $formData =  data_get($certificate->data, 'gaz_safety_data.0');
        $pdf_form->fontdata["fontawesome"] = [
            'R' => "fa-solid-900.tff",
            'I' => "fa-regular-400.ttf",
        ];

        $html = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.index', [
            'data' => $certificate,
            'formData' => $formData
        ])->render();

        $pdf_form->WriteHTML($html);

        $pdf_form->AddPage('L');
        $page_2 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.page2', [
            'data' => $certificate,
            'formData' => $formData
        ])->render();
        $pdf_form->WriteHTML($page_2);

        $pdf_form->AddPage('L');
        $page_3 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.page3', [
            'data' => $certificate,
            'formData' => $formData
        ])->render();
        $pdf_form->WriteHTML($page_3);

        $pdf_form->AddPage('L');
        $page_4 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.page4', [
            'data' => $certificate,
            'formData' => $formData
        ])->render();
        $pdf_form->WriteHTML($page_4);

        $pdf_form->AddPage('L');
        $page_5 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.page5', [
            'data' => $certificate,
            'formData' => $formData
        ])->render();
        $pdf_form->WriteHTML($page_5);
        $pdf_form->AddPage('L');
        $page_6 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.page6', [
            'data' => $certificate,
            'formData' => $formData
        ])->render();

        $pdf_form->WriteHTML($page_6);
        return $pdf_form;
        //$pdf_form->Output();
        /*  $fileName = "C$certificate->id.pdf";
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
        } */
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
