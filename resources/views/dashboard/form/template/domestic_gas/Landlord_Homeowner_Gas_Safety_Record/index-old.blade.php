<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Page 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <style>
        td {
            width: calc(100% / 16) !important;
        }

        * {
            break-inside: avoid;
        }

        body {
            position: relative;
            width: 25cm;
            height: 35cm;
            margin: 0 auto;
            color: #001028;
            background: #EAF3FC;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-family: Arial;
        }

        table {
            width: 100%;
        }

        table td {
            text-align: left;
        }

        :root {
            --main-color: #2A98FC;
        }

        .inner-part.left {
            width: 350px;
        }

        .inner-part .secound-content div {
            border: 1px solid #dddd;
            padding: 5px;
        }

        .inner-part .secound-content div.l-content {
            flex-grow: 1;
            margin-right: 15px;
        }

        td {
            vertical-align: baseline;
        }

        /* .right-td {
  width: 100%;
  height: 100%;
}
 */
        .inner-table table {
            border-collapse: collapse;
            margin-bottom: 0;
        }

        .inner-table table * {
            border: 1px solid #dddd;
        }

        .inner-table table td {
            padding: 10px 0;
        }

        .inner-table:first-child table td:first-child {
            width: 20px;
            text-align: center;
            font-weight: bold;
        }

        .inner-table:first-child table td:nth-child(2) {
            width: 70%;
        }

        .inner-table .title {
            margin: 0;
        }

        .inner-table * {
            text-align: center;
        }

        .last-left .last-header {
            display: flex;
        }

        .last-left .last-header div {
            flex-grow: 1;
        }
    </style>
</head>

<body>

    <header
        style="display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 5px;
    padding: 10px;">

        <div id="logo"
            style="display: flex;
                            align-items: center;
                            text-align: center;
                            margin-bottom: 10px;">
            <img src="{{ asset('admin/invoice/forms/logo1.png') }}" style="width:90px">
            <img src="{{ asset('admin/invoice/forms/Image 1.png') }}" style="width:90px;margin-left: 15px;">
        </div>
        <div id="information"
            style="padding: 0 10px;
                                    text-align: left;
                                    font-size: 14px;
                                    font-weight: bold;">
            <div class="btns" style="display: flex;">
                <div style="display: flex;
          align-items: center;">
                    <div style="display: flex;
            align-items: center;">
                        <label style="font-size: 10px; font-weight: normal; color: #2A98FC;">Date</label>
                        <input type="text"
                            value="{{ $form_data->job ? Carbon\Carbon::parse($form_data->job->created_at)->format('d/m/Y') : '' }}"
                            style="height: 20px;
                                        width: calc(100% - 5px);
                                        padding: 0;
                                        margin: 0;
                                        border: 0;
                                        outline:  1px solid #2A98FC;
                                        background-color: transparent;
                                        margin: 5px;">
                    </div>
                    <div style="display: flex;
            align-items: center;">
                        <label style="font-size: 10px; font-weight: normal; color: #2A98FC;">Gas Safe Register
                            No.</label>
                        <input type="text"
                            style="height: 20px;
              width: calc(100% - 5px);
              padding: 0;
              margin: 0;
              border: 0;
              outline:  1px solid #2A98FC;
              background-color: transparent;
              margin: 5px;">
                    </div>
                    <div style="display: flex;
            align-items: center;">
                        <label style="font-size: 10px; font-weight: normal; color:#2A98FC ;">Gas Safe Register Licence
                            Number</label>
                        <input type="text"
                            style="height: 20px;
              width: calc(100% - 5px);
              padding: 0;
              margin: 0;
              border: 0;
              outline:  1px solid #2A98FC;
              background-color: transparent;
              margin: 5px;">
                    </div>
                    <div style="display: flex;
            align-items: center;">
                        <label style="font-size: 10px; font-weight: normal; color: #2A98FC;">Serial No</label>
                        <input type="text"
                            style="height: 20px;
              width: calc(100% - 5px);
              padding: 0;
              margin: 0;
              border: 0;
              outline:  1px solid #2A98FC;
              background-color: transparent;
              margin: 5px;">
                    </div>
                </div>
            </div>
            <p style="margin-bottom: 5px; margin-top: 5px; font-size: 25px;">Landlord Safety Certificate</p>
            <p style="margin-bottom: 5px; margin-top: 5px;">LANDLORD/HOMEOWNER GAS SAFETY RECORD</p>
        </div>
    </header>
    <main>

        <table style="border-spacing: 15px">
            <tbody>
                <tr id="part-1" class="part-container">
                    <td>
                        <div class="inner-part left"
                            style="width: 350px; margin-bottom:15px; background: white; padding-bottom: 5px;">
                            <p class="title"
                                style="margin: 0 0 15px 0;
                                  background-color: var(--main-color);
                                  color: white;
                                  font-size: 14px;
                                  font-weight: bold;
                                  padding: 10px;
                                  text-align: center;">
                                DETAILS OF LANDLORD/HOMEOWNER (OR AGENT WHERE APPROPRIATE)</p>
                            <div class="first-content"
                                style="padding: 5px;
                border: 1px solid #dddd;
                margin: 0 10px;">
                                {{ $job->customer ? $job->customer->street_num . ', ' . $job->customer->city : '' }}
                            </div>
                            <div class="secound-content"
                                style="margin-left: auto;
                width: 40%;
                margin-right: 10px;
                margin-top: 10px;
                margin-bottom: 10px;">
                                <div class="r-content">{{ $job->customer ? $job->customer->postal_code : '' }}</div>
                            </div>
                        </div>
                        <div class="inner-part left"
                            style="width: 350px; margin-bottom:15px; background: white; padding-bottom: 5px;">
                            <p class="title"
                                style="margin: 0 0 15px 0;
                                  background-color: var(--main-color);
                                  color: white;
                                  font-size: 14px;
                                  font-weight: bold;
                                  padding: 10px;
                                  text-align: center;">
                                ADDRESS OF THE INSTALLTION</p>
                            <div class="first-content"
                                style="padding: 5px;
                border: 1px solid #dddd;
                margin: 0 10px;">
                                {{ $job->site ? $job->site->street_num . ', ' . $job->site->city : '' }}
                            </div>
                            <div class="secound-content"
                                style="margin-left: auto;
                width: 40%;
                margin-right: 10px;
                margin-top: 10px;
                margin-bottom: 10px;">
                                <div class="r-content">{{ $job->site ? $job->site->postal_code : '' }}</div>
                            </div>
                        </div>
                        <div class="inner-part left" style="width: 350px; background: white; padding-bottom: 5px;">
                            <p class="title"
                                style="margin: 0 0 15px 0;
                background-color: var(--main-color);
                color: white;
                font-size: 14px;
                font-weight: bold;
                padding: 10px;
                text-align: center;">
                                DETAILS of registred business</p>
                            <div class="first-content"
                                style="padding: 5px;
                border: 1px solid #dddd;
                margin: 0 10px;">
                                <p style="font-weight: bold; margin-top: 0;">{{ $user->company_name }}</p>
                                <span>{{ $user->number_street_name . ', ' . $user->city }}</span>
                            </div>
                            <div class="secound-content"style="display: flex;
                margin: 10px;">
                                <div class="l-content"></div>
                                <div class="r-content">{{ $user->postal_code }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="right-td" style="background: white;width: auto !important;">
                        <div class="inner-part first-right-section" style="padding-bottom: 5px;">
                            <p class="title"
                                style="    margin: 0 0 15px 0;
                background-color: var(--main-color);
                color: white;
                font-size: 14px;
                font-weight: bold;
                padding: 10px;
                text-align: center;">
                                DETAILS OF WORK CARRIED OUT</p>
                            <div class="content" style="display: flex;">
                                <div
                                    style="flex-grow: 1;
                  margin: 10px 10px;
                  border: 1px solid #dddd;
                  padding: 5px;">
                                    @if (isset($data['gaz_safety_other_data']))
                                        {{ $data['gaz_safety_other_data']['details_of_work_carried_out'] }}
                                    @endif

                                </div>
                                <div
                                    style="flex-grow: 1;
                  margin: 10px 10px;
                  border: 1px solid #dddd;
                  padding: 5px;
                  height: 367px;">
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>


        </div>
        </td>
        <td class="inner-table" style="background-color: white;">
            <p class="title"
                style="margin: 20px 0 0;
              background-color: var(--main-color);
              color: white;
              font-size: 14px;
              font-weight: bold;
              padding: 10px;
              text-align: center;">
                GAS INSTALLATION PIPEWORK</p>
            <div class="table-container" style="padding:10px; background-color: white; font-size: 10px;">
                <table>
                    <tr>
                        <td style="font-weight: bold;">PIPEWORK VISUAL INSPECTION </td>
                        <td style="font-weight: bold;">OUTCOME OF GAS SUPPLY PIPEWORK VISUAL INSPECTION</td>
                        <td style="font-weight: bold;">IS THE EMERGENCY CONTROL VALVE ACCESS SATISFACTORY</td>
                        <td style="font-weight: bold;">OUTCOME OF GAS TIGHTNESS TEST? </td>
                        <td style="font-weight: bold;">IS PROTECTIVE EQUIPOTENTIAL BONDING SATISFACTORY</td>
                    </tr>
                    <tr>
                        <td>

                            <div
                                style="width: 50px;height: 50px; background-color: #2A98FC; text-align: center; margin: auto;">
                                @if (isset($data['gaz_safety_other_data']['outcome_of_gas_installation_pipework_visual_inspection']) &&
                                    $data['gaz_safety_other_data']['outcome_of_gas_installation_pipework_visual_inspection'] == 'YES')
                                    <img src="{{ asset('admin/invoice/forms/true.png') }}" width="100%"
                                        height="100%" style="border: 0;">
                                @elseif (isset($data['gaz_safety_other_data']))
                                <img src="{{ asset('admin/forms/Landlord_Homeowner_Gas_Safety_Record/false.png') }}" width="100%"
                                height="100%" style="border: 0;">
                                @endif
                            </div>
                        </td>
                        <td>
                            <div
                                style="width: 50px;height: 50px; background-color: #2A98FC; text-align: center; margin: auto;">
                                @if (isset($data['gaz_safety_other_data']['outcome_of_gas_supply_pipework_visual_inspection_details']) &&
                                    $data['gaz_safety_other_data']['outcome_of_gas_supply_pipework_visual_inspection_details'] == 'YES')
                                    <img src="{{ asset('admin/invoice/forms/true.png') }}" width="100%"
                                        height="100%" style="border: 0;">
                                @elseif (isset($data['gaz_safety_other_data']))
                                <img src="{{ asset('admin/forms/Landlord_Homeowner_Gas_Safety_Record/false.png') }}" width="100%"
                                height="100%" style="border: 0;">
                                @endif
                            </div>
                        </td>
                        <td>
                            <div
                                style="width: 50px;height: 50px; background-color: #2A98FC; text-align: center; margin: auto;">
                                @if (isset($data['gaz_safety_other_data']['outcome_of_gas_control_value_access_satisfactory']) &&
                                    $data['gaz_safety_other_data']['outcome_of_gas_control_value_access_satisfactory'] == 'YES')
                                    <img src="{{ asset('admin/invoice/forms/true.png') }}" width="100%"
                                        height="100%" style="border: 0;">
                                @elseif (isset($data['gaz_safety_other_data']))
                                <img src="{{ asset('admin/forms/Landlord_Homeowner_Gas_Safety_Record/false.png') }}" width="100%"
                                height="100%" style="border: 0;">
                            @endif
                            </div>
                        </td>
                        <td>
                            <div
                                style="width: 50px;height: 50px; background-color: #2A98FC; text-align: center; margin: auto;">
                                @if (isset($data['gaz_safety_other_data']['outcome_of_gas_tightness_test']) &&
                                    $data['gaz_safety_other_data']['outcome_of_gas_tightness_test'] == 'YES')
                                    <img src="{{ asset('admin/invoice/forms/true.png') }}" width="100%"
                                        height="100%" style="border: 0;">
                                @elseif (isset($data['gaz_safety_other_data']))
                                <img src="{{ asset('admin/forms/Landlord_Homeowner_Gas_Safety_Record/false.png') }}" width="100%"
                                height="100%" style="border: 0;">
                                @endif
                            </div>
                        </td>
                        <td>
                            <div
                                style="width: 50px;height: 50px; background-color: #2A98FC; text-align: center; margin: auto;">
                                @if (isset($data['gaz_safety_other_data']['is_the_protective_equipotential_bonding_satisfactory']) &&
                                    $data['gaz_safety_other_data']['is_the_protective_equipotential_bonding_satisfactory'] == 'YES')
                                    <img src="{{ asset('admin/invoice/forms/true.png') }}" width="100%"
                                        height="100%" style="border: 0;">
                                @elseif (isset($data['gaz_safety_other_data']))
                                <img src="{{ asset('admin/forms/Landlord_Homeowner_Gas_Safety_Record/false.png') }}" width="100%"
                                height="100%" style="border: 0;">
                                @endif
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </td>
        </tr>
        <tr>
            <td class="last-left" style="padding:10px; background-color: white">
                <div class="last-header">
                    <div
                        style="background-color: var(--main-color);
                color: white;
                text-align: center;
                padding: 4px;">
                        ANY REMEDIAL ACTION TAKEN OR NOTES</div>
                    <div
                        style="border: 1px solid #dddd;
                text-align: center;
                padding: 4px;">
                        Number Should Correspond To Defects Above</div>
                </div>
                <div class="content"
                    style="border: 1px solid #dddd;
              margin: 10px 0;
              height: 70px;"></div>
            </td>
            <td class="last-right" style="padding:10px; background-color: white">
                <div class="form" style="display: flex;justify-content: space-around;">
                    <div class="left" style="width: 60%;">
                        <div class="form-title" style="margin-bottom: 15px; font-weight: bold;">Recorde Issued By:</div>
                        <div class="group-input"style="display: flex;align-items: center;margin-bottom: 5px;">
                            <div class="form-group" style="margin-bottom: 5px;">
                                <label for="" style=" font-weight: bold;"> Signature </label>
                                @if ($user->signature)
                                    <div>
                                        <img src="{{ $user->signature->file_url }}" style="width: 150px;padding: 0;border: 0;height: 80px;margin: 5px 5px 0 0;">
                                    </div>
                                @endif

                        </div>
                    </div>
                    <p style="font-size: 10px;">Record Recived By: ({{isset($data['who_is_receiving']) ? implode('/ ',$data['who_is_receiving']) : ''}})</p>
                    <div class="group-input"
                        style="display: flex;
                  align-items: center;
                  margin-bottom: 5px;">

                        <div class="form-group" style="margin-bottom: 5px;">
                            <label for="" style=" font-weight: bold;"> Name(Capitals) </label>
                            <div><input type="text"
                                    value="{{$user->name}}"
                                    readonly
                                    style="width: calc(100% - 5px);
                                    padding: 0;
                                    border: 0;
                                    height: 25px;
                                    outline:  1px solid #dddd;
                                    margin: 5px 5px 0 0;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right"
                    style="width: 30%;   background: var(--main-color);
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 14px;
                color: white;
                padding: 10px;
                font-weight: bold;">
                    <div class="content">
                        <div style="margin-bottom: 15px">ATTENTION</div>
                        <div style="background: white; padding: 10px">
                            <div style="color: black">Next Safety Check Due By:</div>
                            <div style="color: #2A98FC; margin-top:5px;">
                                @if (isset($data['gaz_safety_other_data']))
                                    {{ $data['gaz_safety_other_data']['next_safety_check_due_by'] }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </td>
        </tr>
        </tbody>
        </table>
    </main>
    <footer>
        <div style="padding: 15px 30px; margin-bottom: 0px;">
            <div
                style="color: white; font-weight: bold; padding: 15px; text-align: center; background-color: #2a98fc;">
                This Record Can Be Used To Document The Outcomes Of The Checks And Tests Required By The Gas Safety
                (Installation And Use) Regulations. Some Of The Outcomes Are As A Result Of Visual Inspection Only And
                Are Recorded As Appropriate. Unless Specifically Recorded No Detailed Inspection Of The Flue Lining,
                Construction Or Integrity Has Been Performed
            </div>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <img src="{{ asset('admin/invoice/forms/footer-logo.png') }}" style="width: 250px; object-fit: contain;">
            <div>
                page 1 of <span
                    style="border: 1px solid #DDDD; padding: 8px 12px; display: inline-block; margin-left: 5px;">2</span>
            </div>
        </div>
    </footer>
    <main>
        <table style="border-collapse: separate;
      border-spacing: 0 15px; table-layout:fixed;">
            <tbody>
                <tr>
                    <td>
                        <table style="border-collapse: collapse; border-spacing: 0;">
                            <tr>
                                <td colspan="16">
                                    <div
                                        style="display: flex; justify-content: space-around; background-color: #2a98fc; color: white; padding: 10px; font-weight: bold;">
                                        <span>APPLIANCE DETAILS</span>
                                        <span>APPLIANCE RESULTS</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Appliance Number
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Location
                                </td>

                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Type
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  0px; font-size: 8px;">
                                    Manufacturer
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Model
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Owned By Landlord/ Homeowner?
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Inspected Yes/No?
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Type Of Flue
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Operating Pressure In Mbar &/Or Heat Input kW/ H Or Btu/H
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Operation Of Safety Device(S) Pass/Fail Or N/A
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Ventilation Satisfactory Yes/No
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Visual Condition Of Flue & Termination Pass/Fail / N/A
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Flue Operation Checks Pass /Fail/N/A
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Combustion Analyser Reading (If Applicable)
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                    Serviced Yes/No?
                                </td>
                                <td
                                    style="background-color: white; vertical-align: middle; text-align: center; padding: 20px  5px; font-size: 8px;">
                                    Safe To Use Yes/No?
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                @foreach ($gaz_safety_data as $data)
                    <tr>
                        <td>
                            <table style="border-collapse: collapse; border-spacing: 0;">


                                <tr>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['serial_number'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['location'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['type'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        Vaillant
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['model'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['owned_by'][0] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['inspected'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['type_of_flue'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['operation_pressure_in_embar'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['operation_of_safety_device'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['ventilation_satisfactory'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['visual_condition_of_flue_and_termination'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['flue_operation_checks'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        {{ $data['combustion_analyses_reading'] ?? '' }}
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; border-right: 1px solid #ddd;padding: 20px  5px; font-size: 8px;">
                                        N/A
                                    </td>
                                    <td
                                        style="background-color: white; vertical-align: middle; text-align: center; padding: 20px  5px; font-size: 8px;">
                                        @if (isset($data['safe_to_use']) && $data['safe_to_use'] == 'YES')
                                            <img src="{{ asset('admin/invoice/forms/min-true.png') }}" width="20px"
                                                alt="">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <table>
                                            <tr>
                                                <td colspan="3">
                                                    <div style="background-color: #2a98fc;">Audible CO Alarm</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 7px; background-color: white;">Approved CO Alarm
                                                    Fitted?</td>
                                                <td style="font-size: 7px; background-color: white;">Is Co Alarm In
                                                    Date?</td>
                                                <td style="font-size: 7px; background-color: white;">CO Alarm Test
                                                    Satisfactory?</td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 7px; background-color: white;">
                                                    {{ $data['co_alarm_fitted'] ?? '' }}</td>
                                                <td style="font-size: 7px; background-color: white;">{{ $data['co_alarm_date'] ?? '' }}</td>
                                                <td style="font-size: 7px; background-color: white;">
                                                    {{ $data['co_alarm_tested'] ?? '' }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
    <footer>
        <div style="display: flex; justify-content: space-between;">
            <img src="{{ asset('admin/invoice/forms/footer-logo.png') }}" style="width: 250px; object-fit: contain;">
            <div>
                page 2 of <span
                    style="border: 1px solid #DDDD; padding: 8px 12px; display: inline-block; margin-left: 5px;">2</span>
            </div>
        </div>
    </footer>
    <x-print-modal-layout></x-print-modal-layout>
</body>

</html>
