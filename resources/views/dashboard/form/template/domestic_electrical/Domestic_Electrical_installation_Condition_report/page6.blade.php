<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eicr</title>
    <style>
        @font-face {
        font-family: Univers-Condensed-Bold;
        src: url({{ asset('admin/fonts/Univers-Condensed-Bold.TTF') }});
        }


      body {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-size: 10px;
       /*  font-family: Univers-Condensed-Bold; */
      }
      h5{
        font-size: 15px;
      }
      .table-container {
        padding: 20px;
        text-align: right;
      }
      .codes_wiring{
        font-size: 10px;
        border: 1px solid #00935f;
      }
      .codes_wiring td{
        text-align: left;
        border-left: 1px solid #00935f;
      }
      #last-table thead{
        background: #00935f1e;
      }
      #last-table tbody td{
        padding: 10px 2px;
      }

    </style>
  </head>
  <body>
    <div
      class="table-container"
      style="
        font-family: 'Cairo', sans-serif;
        font-family: 'Open Sans', sans-serif;
        font-family: 'Poppins', sans-serif;
        font-family: 'Tajawal', sans-serif;
      "
    >


        <div style="align-items: center; border: 1px solid #00935f; padding: 0px">
            <div
                style="color: #FFFFFF;
                background-color: #00935f;
                font-weight: bold;
                float: left;
                width: 45%;
                text-align: left;
                padding: 5px ;
                ">
                <p style="padding: 0px ;margin: 0px ; font-size: 13px">
                    PART 15: SCHEDULE OF CIRCUIT DETAILS AND TEST RESULTS
                </p>

            </div>
            <div style=" margin: 0px;  padding: 5px 0px 4px 5px; font-size: 10px; width: 25%; float: left;text-align: left;">
                <p style="margin: 0px; padding: 0px; ">
                    Circuits/equipment vulnerable to damage when testing:
                </p>
            </div>
            <div style=" margin: 0px;   padding: 5px 0px 3px 0px; font-size: 10px; width: 22%; float: left;text-align: left;">
                <p  style="margin: 0px; padding: 0px;  text-align: left;">
                    &nbsp;
                </p>
            </div>

            <p style="clear: both;margin: 0px; padding: 0px;"></p>
        </div>
        @php
            $circuit_details = $formData['all_distribution_board_data'];
        @endphp
    @foreach ($circuit_details as $details)

        <div
            style=" background-color: white; margin: 0px; padding: 0px;">
            <table style="font-size: 9px" class="codes_wiring mt-3">
                <tr>
                    <td><b> CODES for Type of wiring </b></td>
                    <td>(A) Thermoplastic insulated / sheathed cables</td>
                    <td>(B) Thermoplastic cables in metallic conduit</td>
                    <td>(C) Thermoplastic cables in non-metallic conduit</td>
                    <td>(D) Thermoplastic cables in metallic trunking</td>
                    <td>(E) Thermoplastic cables in non-metallic trunking</td>
                    <td>(F)Thermoplastic / SWA cables</td>
                    <td>(G)Thermoplastic / SWA cables</td>
                    <td>(H)mineral-insulated cabels</td>
                    <td>(O)other - state</td>
                </tr>
                <tr>

            </table>
        </div>


        <table class="table-text-center" style="border-collapse: collapse; text-align: center;" id="last-table">
            <thead>

                <tr  style=" background: rgba(0, 148, 96, 0.151);">
                    <td  rowspan="3"
                        style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #00935f;">
                        <div style="rotate: 90deg">Circuit Reference</div>
                    </td>
                    <td rowspan="3" style="border: 1px solid #00935f;">
                        <div>Circuit designation</div>
                        <!-- <div>* Where this consumer unit is remote from the origin of the installation, record details of the circuit supplying this consumer unit on the first line.</div> -->
                    </td>
                    <td rowspan="3"
                        style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #00935f;">
                        Type of wiring (see Codes)</td>
                    <td rowspan="3"
                        style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #00935f;">
                        Reference Method  (BS 7671)</td>
                    <td rowspan="3"
                        style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #00935f;">
                        Number of points  served</td>
                    <td colspan="2" style="border: 1px solid #00935f;">Circuit conductor csa</td>
                    <td rowspan="3"
                        style="writing-mode: vertical-lr;  border: 1px solid #00935f;">
                        <p style="margin: 0;">Max disconnection </p>
                        <p style="margin: 0;">time (BS 7671)</p>
                    </td>
                    <td colspan="5" style="border: 1px solid #00935f;">Overcurrent Protective device</td>
                    <td colspan="4" style="position: relative; border: 1px solid #00935f;">
                        <div>RCD</div>

                    </td>
                    <td rowspan="3" style="position: relative; border: 1px solid #00935f;">
                        <div style="writing-mode: vertical-lr;">
                            <p style="margin: 0;">Maximum permitted Zs </p>
                            <p style="margin: 0;">for installed </p>
                            <p style="margin: 0;"> protective device**</p>


                        </div>
                        <div>
                            (Ω)
                        </div>
                    </td>
                    <td colspan="5" style="border: 1px solid #00935f;">Circuit impedances (Ω)
                    </td>
                    <td colspan="3" style="border: 1px solid #00935f;">Insulation resistance</td>
                    <td rowspan="3"
                        style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #00935f;">
                        Polarity</td>
                    <td rowspan="3" style="position: relative; border: 1px solid #00935f;">
                        <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Max. measured
                            earth <br> fault loop impedance, Zs</div>
                        <div
                            style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                            (Ω)</div>
                    </td>
                    <td  rowspan="3"  style="border: 1px solid #00935f;">
                        RCD
                        operating
                        time
                    </td>

                    <td  colspan="2" style="position: relative; border: 1px solid #00935f;">
                        <div>Test buttons</div>

                    </td>
                </tr>

                <tr  style=" background: rgba(0, 148, 96, 0.151);">
                    <td rowspan="2"
                        style="position: relative; border: 1px solid #00935f;">
                        <div
                            >
                            Live (mm2)</div>
                    </td>
                    <td rowspan="2"
                        style="position: relative;  border: 1px solid #00935f;">
                        <div
                            >
                            Cpc (mm2)</div>
                    </td>
                    <td rowspan="2"
                        style="writing-mode: vertical-rl; transform: rotate(0deg); border: 1px solid #00935f;">
                    Type BS (EN)</td>
                    <td rowspan="2" style="border: 1px solid #00935f;">Type</td>
                    <td rowspan="2" style="position: relative; border: 1px solid #00935f;">
                        <div style="writing-mode: vertical-rl; transform: rotate(0deg);">Rating</div>
                        <div
                            style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                            (A)</div>
                    </td>
                    <td rowspan="2" style="position: relative;border: 1px solid #00935f;">
                        <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                            Breaking
                            <br> capacity
                        </div>
                        <div
                            style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                            (kA)
                        </div>
                    </td>
                    <td rowspan="2" style="position: relative;border: 1px solid #00935f;">
                        <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                            Max permitted zs (Ω)
                        </div>

                    </td>

                    <td rowspan="2" style="position: relative;border: 1px solid #00935f;">
                        <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                            Type BS (EN)
                        </div>

                    </td>
                    <td rowspan="2" style="position: relative;border: 1px solid #00935f;">
                        <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                            Type
                        </div>

                    </td>
                    <td rowspan="2" style="position: relative;border: 1px solid #00935f;">
                        <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                            I∆n (mA)
                        </div>

                    </td>
                    <td rowspan="2" style="position: relative;border: 1px solid #00935f;">
                        <div style="writing-mode: vertical-rl; transform: rotate(0deg);">
                            Rating (mA)
                        </div>

                    </td>

                    <td colspan="3" style="border: 1px solid #00935f;">Ring final circuits only
                        (measured end to end)</td>
                    <td colspan="2" style="border: 1px solid #00935f;">All circuits (complete at
                        least one column)</td>
                    <td rowspan="2" style="position: relative; border: 1px solid #00935f;">
                        <div>Live / Live</div>
                        <div
                            style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                            (MΩ)</div>
                    </td>
                    <td rowspan="2" style="position: relative; border: 1px solid #00935f;">
                        <div>Live / Earth</div>
                        <div
                            style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                            (MΩ)</div>
                    </td>

                    <td rowspan="2" style="position: relative; border: 1px solid #00935f;">
                        <div>Test Voltage DC</div>
                        <div
                            style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">
                            (MΩ)</div>
                    </td>
                    {{-- <td rowspan="2" style="border: 1px solid #00935f;">Disconnection time (ms)</td> --}}
                    <td rowspan="2" style="border: 1px solid #00935f;">RCD</td>
                    <td rowspan="2" style="border: 1px solid #00935f;">AFDD</td>
                </tr>
                <tr style=" background: rgba(0, 148, 96, 0.151);">
                    <td style="border: 1px solid #00935f;">(Line) r1</td>
                    <td style="border: 1px solid #00935f;">(Natural) rn</td>
                    <td style="border: 1px solid #00935f;">(Cps) r2</td>
                    <td style="width: 0px; border: 1px solid #00935f;">(R1 + R2)</td>
                    <td style="width: 0px; border: 1px solid #00935f;">R2</td>

                </tr>
            </thead>

            <tbody>
                @foreach ($details['list_circuits_data'] as $listData)
                <tr>
                    <td style="border: 1px solid #00935f;">{{ getvalue('circuit_reference_a',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('circuit_designation_a',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('type_of_wiring_a',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('reference_method_a',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('number_of_point_a',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('live_b',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('cpc_b',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('max_disconnection_time_b',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('type_bs_c',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('type_c',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('rating_c',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('short_circuit_c',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('max_permitted_c',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('type_bs_d',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('type_d',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('rcd_d',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('rating_d',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">-</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('r1_e',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('rn_e',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('r2_e',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('r1_r2_f',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('r2_f',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('live_live_f',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('live_earth_f',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('ir_test_voltage_f',$listData) }}</td>
                   {{--  <td style="border: 1px solid #00935f;">-</td> --}}
                    <td style="border: 1px solid #00935f;">{{ getvalue('polarity_g',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('maximum_measured_h',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">-</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('test_button_i',$listData) }}</td>
                    <td style="border: 1px solid #00935f;">{{ getvalue('testButton_j',$listData) }}</td>
                </tr>
                @endforeach
                <tr>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                    <td style="border: 1px solid #00935f;"></td>
                </tr>
            </tbody>
        </table>

        <!-- ----- -->
        <div style="border: 1px solid #00935f;">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 35%;">
                        <table style="width:100%;">
                            <tr>
                                <td style="width: 42%; text-align: left;">
                                    <h4 style="margin: 0; color: #00935f; word-spacing:-1px;"> DISTRIBUTION BOARD (DB) DETAILS</h4>
                                </td>
                                <td style="width: 15%; text-align: left;">DB designation:</td>
                                <td style="width: 25%;text-align: left;">N/a</td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    <p style="margin: 0; color: #00935f;font-weight: bold;">(to be completed in every case)</p>
                                </td>
                                <td style="text-align: left;">Location of DB:</td>
                                <td style="text-align: left;"></td>
                            </tr>
                        </table>
                    </td>
                    <!--  -->
                    <td style="width: 50%; border-left: 2px solid #00935f;">
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 10%; text-align: left;">
                                    <h4 style="margin: 0; color: #00935f;"> TESTED BY</h4>
                                </td>
                                <td style="width: 15%; text-align: right;">Name (capitals):</td>
                                <td style="width: 25%;text-align: left;">N/a</td>

                                <td style="width: 15%; text-align: right;">Position:</td>
                                <td style="width: 25%;text-align: left;">N/a</td>
                            </tr>
                            <tr>
                                <td style="width: 10%; text-align: left;">

                                </td>
                                <td style="width: 15%; text-align: right;">Signature:</td>
                                <td style="width: 25%;text-align: left;">N/a</td>

                                <td style="width: 15%; text-align: right;">Date:</td>
                                <td style="width: 25%;text-align: left;">N/a</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <pagebreak/>


        @endforeach

        <div style="margin-top: 20px;">
            <div style="width: 70%; border:1px solid #00935f;padding: 0px 10px; float: left;">
                <h4 style="text-align: left;  color: #00935f;word-spacing:-1px; padding: 0px ; margin: 5px 0px" >TO BE COMPLETED ONLY IF THE DB IS NOT CONNECTED DIRECTLY TO THE ORIGIN OF THE INSTALLATION</h4>
                <table style="width:100%;">
                    <tr>
                        <td style="width: 20%; text-align: left;font-size: 11px">Supply to DB is from:</td>
                        <td style="width: 25%;text-align: left;">N/a</td>
                        <td style="width: 15%; text-align: right;font-size: 11px">Nominal voltage:</td>
                        <td style="width: 10%;text-align: left;">N/a</td>
                        <td style="width: 10%; text-align: left;font-size: 11px">V</td>
                        <td style="width: 15%; text-align: right;font-size: 11px">No. of phases:</td>
                        <td style="width: 10%;text-align: left;">N/a</td>
                    </tr>

                </table>
                <table style="width:100%; margin: 10px 0px;">
                    <tr>
                        <td  style="width: 43%; text-align: left;">
                            <p style="font-weight: bold; margin: 0px;font-size: 12px;word-spacing:-1px;">
                                Overcurrent protection device for the distribution circuit
                            </p>
                        </td>
                        <td style="width: 15%; text-align: right;font-size: 11px">Type: (BS EN)</td>
                        <td style="width: 10%;text-align: left;">N/a</td>
                        <td style="width: 15%; text-align: right;font-size: 11px">Rating:</td>
                        <td style="width: 10%;text-align: left;">N/a</td>
                    </tr>
                </table>
                <table  style="width:100%; margin: 10px 0px;">
                    <tr>
                        <td  style="width: 20%; text-align: left;">
                            <p style="font-weight: bold; margin: 0px;font-size: 12px;word-spacing:-1px;">
                                Associated RCD (if any)
                            </p>
                        </td>
                        <td style="text-align: right;font-size: 11px">Type: (BS EN)</td>
                        <td style="text-align: left;">N/a</td>

                        <td style="text-align: right;font-size: 11px">No. of poles: </td>
                        <td style="text-align: left;">N/a</td>

                        <td style="text-align: right; width: 10%; font-size: 11px;">I∆n :</td>
                        <td style="text-align: left;">N/a</td>
                        <td style="text-align: left;">mA</td>

                        <td style="text-align: right;font-size: 11px;">Operating time :</td>
                        <td style="text-align: left;">N/a</td>
                        <td style="text-align: left;">ms</td>
                    </tr>
                </table>

                <table  style="width:100%; margin: 10px 0px;">
                    <tr>
                        <td style="width: 22%;text-align: left;">
                            <p style="font-weight: bold; margin: 0px;font-size: 12px;word-spacing:-1px;">
                                Characteristics at this DB
                            </p>
                        </td>
                        <td style="text-align: right;width: 25%;font-size: 11px">Confirmation of supply polarity: </td>
                        <td style="text-align: left;">N/a</td>

                        <td style="text-align: right;width: 40%;font-size: 11px">Phase sequence confirmed (where appropriate):  </td>
                        <td style="text-align: left;">N/a</td>

                        <td style="text-align: right; width: 10%;font-size:11px">Z<sub style="font-size:12px">S</sub> :</td>
                        <td style="text-align: left;">N/a</td>
                        <td style="text-align: left;">Ω</td>

                        <td style="text-align: right; width: 10%;font-size:11px">I <sub style="font-size:12px">pf</sub> :</td>
                        <td style="text-align: left;">N/a</td>
                        <td style="text-align: left;">kA</td>

                    </tr>

                </table>
            </div>

            <div style="width: 25%; border:1px solid #00935f;padding: 0px 5px; float: left; margin-left: 15px;">

                    <h4 style="text-align: left;  color: #00935f;word-spacing:-1px; padding: 0px ; margin: 5px 0px">
                        TEST INSTRUMENTS
                        <p style="font-size: 10px; margin: 0px;">
                        (enter serial number against each instrument used)
                        </p>
                    </h4>
                    <table style="text-align: left;">
                        <tr>
                            <td>Multi-function</td>
                            <td>Continuity</td>
                        </tr>
                        <tr>
                            <td><p style="width: 100%;margin: 0;font-weight: bold;">{{ getvalue('mft_j',$formData) }}</p></td>
                            <td><p style="margin: 0;width: 100%;font-weight: bold;">{{ getvalue('continuity_j',$formData) }}</p></td>
                        </tr>

                        <tr>
                            <td>Insulation resistance: </td>
                            <td>Earth fault loop impedance:</td>
                        </tr>
                        <tr>
                            <td><p style="width: 80%;margin: 0;width: 100%;font-weight: bold;">{{ getvalue('insulation_resistance_j',$formData) }}</p></td>
                            <td><p style="margin: 0;width: 100%;font-weight: bold;">{{ getvalue('earth_fault_loop_j',$formData) }}</p></td>
                        </tr>

                        <tr>
                            <td>Earth electrode resistance: </td>
                            <td>RCD:</td>
                        </tr>
                        <tr>
                            <td><p style="width: 80%;margin: 0;width: 100%; font-weight: bold;">&nbsp;&nbsp;</p></td>
                            <td><p style="margin: 0;width: 100%;font-weight: bold;">{{ getvalue('rcd_j',$formData) }}</p></td>
                        </tr>
                    </table>

            </div>
            <div style="clear: both;"></div>
        </div>


    </div>
  </body>
</html>
