<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arr_forms = [
           [
                "name" => "Portable Appliance Testing",
                "type" => "Domestic Electrical",
                'status' => 'live',
                'file_name' => "Portable_Appliance_Testing",
                'category_id'=>'1',
           ],
            [
                "name" => "Minor Electrical Installation Works Cert",
                "type" => "Domestic Electrical",
                'status' => 'coming_soon',
                'file_name' => "Minor_Electrical_Installation_Works_Cert",
                'category_id'=>'1',
            ],
            [
                "name" => "Domestic Electrical Installation Certificate",
                "type" => "Domestic Electrical",
                'status' => 'live',
                'file_name' => "Domestic_Electrical_Installation_Certificate",
                'category_id'=>'1',
            ],
            [
                "name" => "Electrical Danger Notification",
                "type" => "Domestic Electrical",
                'status' => 'live',
                'file_name' => "Electrical_Danger_Notification",
                'category_id'=>'1',
            ],
            [
                "name" => "Domestic Electrical installation Condition report",
                "type" => "Domestic Electrical",
                'status' => 'live',
                'file_name' => "Domestic_Electrical_installation_Condition_report",
                'category_id'=>'1',
            ],
            [
                "name" => "G823 SSEG Installation Commissing Confirmation",
                "type" => "Domestic Electrical",
                'status' => 'coming_soon',
                'file_name' => "G823_SSEG_Installation_Commissing_Confirmation",
                'category_id'=>'1',
            ],
            [
                "name" => "Domestic visual condition report",
                "type" => "Domestic Electrical",
                'status' => 'coming_soon',
                'file_name' => "Domestic_visual_condition_report",
                'category_id'=>'1',
            ],
            [
                "name" => "EMERGENCY LIGHTING SITE COMPLIANCE CERTIFICATE",
                "type" => "Domestic Electrical",
                'status' => 'coming_soon',
                'file_name' => "EMERGENCY_LIGHTING_SITE_COMPLIANCE_CERTIFICATE",
                'category_id'=>'1',
            ],

            [
                "name" => "Landlord/Homeowner Gas Safety Record",
                "type" => "Domestic Gas",
                'status' => 'live',
                'file_name' => "Landlord_Homeowner_Gas_Safety_Record",
                'category_id'=>'1',
            ],
            [
                "name" => "Caravan/Boat Gas Safety Inspection Record",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Caravan_Boat_Gas_Safety_Inspection_Record",
                'category_id'=>'2',
            ],
            [
                "name" => "Warning Notice ",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Warning_Notice",
                'category_id'=>'2',
            ],
            [
                "name" => "Gas Inspection Record",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Gas_Inspection_Record",
                'category_id'=>'2',
            ],
            [
                "name" => "Gas Testing & Purging",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Gas_Testing_Purging",
                'category_id'=>'2',
            ],
            [
                "name" => "Fumes Investigation Report",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Fumes_Investigation_Report",
                'category_id'=>'2',
            ],
            [
                "name" => "Service/Maintance Record",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Service_Maintance_Record",
                'category_id'=>'2',
            ],
            [
                "name" => "Gas Boilier System Commission Checklist",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Gas_Boilier_System_Commission_Checklist",
                'category_id'=>'2',
            ],
            [
                "name" => "Flues In Voids",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Flues_In_Voids",
                'category_id'=>'2',
            ],
            [
                "name" => "Existing Concealed Room-Sealed Fanned Draught Boiler Chimney Assessment",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Existing_Concealed_Room_Sealed",
                'category_id'=>'2',
            ],
            [
                "name" => "Chimney, Fireplace & Hearth Commissioning Record",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Chimney_Fireplace_Hearth_Commissioning_Record",
                'category_id'=>'2',
            ],
            [
                "name" => "Visual Risk Assesment of Gas Appliances",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Visual_Risk_Assesment_of_Gas_Appliances",
                'category_id'=>'2',
            ],
            [
                "name" => "Central Heating commissioing Inspection Record",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Central_Heating_commissioing_Inspection_Record",
                'category_id'=>'2',
            ],
            [
                "name" => "Electrical Bonding Notice",
                "type" => "Domestic Gas",
                'status' => 'coming_soon',
                'file_name' => "Electrical_Bonding_Notice",
                'category_id'=>'2',
            ],
            [
                "name" => "Gas Testing & Purging Non Domestic",
                "type" => "Commercial Gas",
                'status' => 'coming_soon',
                'file_name' => "Gas_Testing_Purging_Non_Domestic",
                'category_id'=>'2',
            ],
            [
                "name" => "Commercial Catering Inspection",
                "type" => "Commercial Gas",
                'status' => 'coming_soon',
                'file_name' => "Commercial_Catering_Inspection",
                'category_id'=>'2',
            ],
            [
                "name" => "Mobile Catering Vehicle/Trailer Safety Record",
                "type" => "Commercial Gas",
                'status' => 'coming_soon',
                'file_name' => "Mobile_Catering_Vehicle_Trailer_Safety_Record",
                'category_id'=>'2',
            ],
            [
                "name" => "Landlord Gas Safety record for the Leisure Industry",
                "type" => "Commercial Gas",
                'status' => 'coming_soon',
                'file_name' => "Landlord_Gas_Safety_record_for_the_Leisure_Industry",
                'category_id'=>'2',
            ],
            [
                "name" => "Non Domestic Inspection Record",
                "type" => "Commercial Gas",
                'status' => 'coming_soon',
                'file_name' => "Non_Domestic_Inspection_Record",
                'category_id'=>'2',
            ],
            [
                "name" => "Plant Commissioning Servicing Record",
                "type" => "Commercial Gas",
                'status' => 'coming_soon',
                'file_name' => "Plant_Commissioning_Servicing_Record",
                'category_id'=>'2',

            ],
            [
                "name" => "Installation/commissioning/Decommissioning Record",
                "type" => "Commercial Gas",
                'status' => 'coming_soon',
                'file_name' => "Installation_commissioning_Decommissioning_Record",
                'category_id'=>'2',
            ],
            [
                "name" => "Gas Installation Safety Report",
                "type" => "Commercial Gas",
                'status' => 'coming_soon',
                'file_name' => "Gas_Installation_Safety_Report",
                'category_id'=>'2',
            ]
        ];
       // DB::table('forms')->truncate();
        foreach ($arr_forms as $key => $form) {
            Form::create($form);
        }
    }
}
