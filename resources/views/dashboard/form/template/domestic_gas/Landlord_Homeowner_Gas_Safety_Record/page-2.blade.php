<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LANDLORD/HOMEOWNER GAS SAFETY RECORD</title>
    <style>
        @font-face {
            font-family:Arial;
            src:'./Ayar/Arial.ttf';
          }

      body {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-size: 12px;


      }
      .table-container {

        text-align: left;
      }
    </style>
  </head>
  <body style="width: 100%; margin: 0; overflow-x: hidden;">
    <div
      class="table-container"
      style="

        font-family:'Arial';
      ">

       <div style="padding: 22px;">
                @php
                    $appliance_data =[];
                    if (isset($formData['appliance_data'])) {
                        $appliance_data =  $formData['appliance_data'];
                    }
                @endphp
                <table style="width: 100%;  border-collapse: separate; border-spacing: 0 10px;">
                    <thead>
                        <tr style="height: 50px; background-color: #FFF200; text-align: center; color: #000;">
                            <th colspan="8" style="border: 1px solid #FFF200;border-right: 0;padding-top:10px; font-size: 16px; color: #000;
                            font-weight: 100;">APPLIANCE DETAILS</th>
                            <th colspan="8" style="padding-top:10px; border: 1px solid #FFF200;border-left: 0; font-size: 16px;color: #000;
                            font-weight: 100;">APPLIANCE RESULTS</th>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                            border-right: 0;">
                            Appliance Number
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                            border-right: 0;">Location
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                            border-right: 0;">Type
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                            border-right: 0;">Manufacturer
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                            border-right: 0;">Model
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                            border-right: 0;">Owned By Landlord/ Homeowner?
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                            border-right: 0;">Inspected Yes/No?
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;
                             border-right: 0;">
                            Type Of Flue
                            </td>

                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;
                                border-right: 0;padding-top:10px; ">
                                Operating Pressure In Mbar &/Or Heat Input Kw/ H Or Btu/H
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                            border-right: 0;">Operation Of Safety Device(S) Pass/Fail Or N/A
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                                border-right: 0;">
                                Ventilation Satisfactory Yes/No
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                            border-right: 0;">
                            Visual Condition Of Flue & Termination Pass/Fail / N/A
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                                border-right: 0;">Flue Operation Checks Pass /Fail/N/A
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;
                            border-right: 0;">
                            Combustion Analyser Reading (If Applicable)
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;

                                border-right: 0;">Serviced Yes/No?
                            </td>
                            <td style="border: 1px solid #FFF200;float: left;margin: 0;height: 100px;text-align: center;">
                            Safe To Use Yes/No?
                            </td>


                        </tr>
                    </thead>
                    @foreach ($appliance_data as $item)
                    <tr>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center;border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_number',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center;border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_designation',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center;border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_type',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center;border-right: 0;padding-top:10px; ">
                             {{ getvalue('appliance_make',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center; border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_model',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center;border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_owned_by',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center;border-right: 0;padding-top:10px; ">
                            {{ getvalue('inspected_make',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center; border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_flue_type',$item) }}
                        </td>

                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center;  border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_operating_pressure',$item) }}
                            </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center;border-right: 0;padding-top:10px; ">
                               {{ getvalue('appliance_operating_of_safety',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center;  border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_ventilation_satisfactory',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center; border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_visual_condition',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center;border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_flue_operation',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center; border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_combustion_analyses',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center; border-right: 0;padding-top:10px; ">
                            {{ getvalue('appliance_serviced',$item) }}
                        </td>
                        <td style="border: 1px solid #FFF200;margin: 0;text-align: center;padding-top:10px; ">
                            {{ getvalue('appliance_safe_to_use',$item) }}
                        </td>

                    </tr>
                    <tr>
                        <td colspan="16">
                        <table style="border-collapse: collapse">
                            <tr  style="height: 50px; text-align: center;">
                                <td colspan="3" style="text-align: center;padding:10px 0px;border: 1px solid #FFF200; background-color: #FFF200;  font-size: 15px;color: #000;font-weight: 100;">
                                Audible CO Alarm
                                </td>
                                <td colspan="13"><td/>
                            </tr>
                            <tr>

                                <td style="border: 1px solid #FFF200;margin: 0;text-align: center;padding:10px 5;
                                    border-right: 0;padding-top:10px;">
                                    Approved CO Alarm Fitted?
                                 </td>
                                <td style="border: 1px solid #FFF200;margin: 0;text-align: center;
                                    padding:10px 5;
                                    border-right: 0;padding-top:10px;">
                                    Is CO Alarm In Date?
                                 </td>
                                <td style="border: 1px solid #FFF200;margin: 0;text-align: center;
                                 padding:10px 5;">CO Alarm Test Satisfactory?
                               </td>
                               <td colspan="13"></td>
                            </tr>
                            <tr>
                                    <td style=" border: 1px solid #FFF200;margin: 0;text-align: center; padding:10px 0; border-right: 0;">
                                        {{ getvalue('appliance_approved_co',$item) }}
                                    </td>
                                    <td style="border: 1px solid #FFF200;margin: 0;text-align: center;padding:10px 0;  border-right: 0;">
                                        {{ getvalue('appliance_is_co_alarm',$item) }}
                                    </td>
                                    <td style="border: 1px solid #FFF200;margin: 0;text-align: center; padding:10px 0;">
                                        {{ getvalue('appliance_co_alarm_test',$item) }}
                                     </td>
                                     <td colspan="13"></td>
                            </tr>
                        </table>
                    </td>
                    </tr>



                    @endforeach
                </table>
                <div style="clear: both;"></div>

        </div>

       </div>

  </body>
</html>
