<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        font-family: 'FreeSans';

      }
      .table-container {

        text-align: left;
      }

    </style>
  </head>
  <body style="width: 100%; margin: 0; overflow-x: hidden;">
    <div
      class="table-container"
      style="font-family: 'FreeSans';">


          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%;">
            <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                PART 8 : SCHEDULE OF CIRCUIT DETAILS AND TEST RESULTS
            </h3>
            @php
              $distribution_boards_data=  $formData['distribution_boards_data'];
            @endphp
            @foreach ($distribution_boards_data as $boards_data )


            <div style="width: 98.5%; border: 1px solid #00935f; padding: 0 10px;border-bottom: 1px solid rgba(0, 0, 0, 0)">
                <h6 style="font-size: 13px; font-weight: 100;">Designation Ot Consumer Unit : <span style="margin-left: 200px;"> Location : </span> <span style="margin-left: 200px;"> Prospective Fault Current : </span> <span style="margin-left: 200px;"> Type Of Wiring 0—0Ther : </span></h6>
            </div>
            <table class="color-border" style="width: 100%;border-collapse: collapse;">
            <thead>
              <tr style=" background: #B8E1D2;">
                <th style="writing-mode: vertical-lr; font-weight: 500; text-align: center;border: 1px solid #00935f;" rowspan="2" colspan="1">Circuit Number</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" colspan="" rowspan="2">Circuit Description</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f; writing-mode: vertical-lr;" rowspan="2">Type Of Wiring</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f; writing-mode: vertical-lr;" colspan="" rowspan="2">Reference Method</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f; writing-mode: vertical-lr;" colspan="" rowspan="2">Number Of Points Served</th>

                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="2">Circuit Conductor Csa </th>


                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f; " rowspan="2" colspan="">Max disconnect time permitted by BS7671</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="4">Overcurrent Protective Devices</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2"> Operating Current  </th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2">Maximum Zs Permitted By BS7671</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="5">Circuit Impedances (Ohms)</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="2">Insulation Resistance</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2">Polarity</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2">Max. measured earth toult Joop impedance. Zs</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="3">RCD</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="2">AFDD</th>
              </tr>
              <tr style=" background: #B8E1D2;">
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="1">Live    </th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="1">Cpc </th>


                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="1">BS (EN) </th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="1">Type No</th>

                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="1">Rating </th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="1"> Capacity  </th>

                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" colspan="3" rowspan="">Ring final circuits only <br> (measured end to end) </th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" colspan="2" rowspan="">All circuits <br> (complete at least one column)</th>

                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="" >Live / Live </th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="">Live / Earth </th>

                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="">Disconnection time at n</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="">Disconnection time at 15 n</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="">Test button Operation</th>

                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="">Manual AFDD test button operation</th>
              </tr>

              <tr style="text-align: center; border: 1px solid #00935f; background: #B8E1D2;">
                <th style="text-align: center; border: 1px solid #00935f;"></th>
                <th style="text-align: center; border: 1px solid #00935f;"></th>
                <th style="text-align: center; border: 1px solid #00935f;"></th>
                <th style="text-align: center; border: 1px solid #00935f;"></th>
                <th style="text-align: center; border: 1px solid #00935f;"></th>
                <th style="text-align: center; border: 1px solid #00935f; font-weight: 100;">(MM)</th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;"> (MM) </th>
                <th style="text-align: center; border: 1px solid #00935f;"></th>
                <th style="text-align: center; border: 1px solid #00935f;"></th>
                <th style="text-align: center; border: 1px solid #00935f;"></th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;">(A) </th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;">(KA) </th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;">(MA) </th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;"> (Ω) </th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;"> (Line) </th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;">(Natural)</th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;">(Cpc)</th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;">(R + R)</th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;">(R)</th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;">(M Ω)</th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;">(M Ω)</th>
                <th style="text-align: center; border: 1px solid #00935f;"></th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;"> (Ω) </th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;">(MS)</th>
                <th style="text-align: center; border: 1px solid #00935f;font-weight: 100;">(MS)</th>
                <th style="text-align: center; border: 1px solid #00935f;"></th>
                <th style="text-align: center; border: 1px solid #00935f;"></th>

              </tr>
            </thead>

            @foreach ($boards_data['list_circuits_data'] as $circuits_data )


              <tr>
                <td style="text-align: center; border: 1px solid #00935f; padding: 5px;">{{ getvalue('circuit_reference_a',$circuits_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;" >{{ getvalue('circuit_designation_a',$circuits_data) }} </td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;"> {{ getvalue('type_of_wiring_a',$circuits_data) }}</td>
                <td style="text-align: center; border: 1px solid #00935f; padding: 5px;">{{ getvalue('reference_method_a',$circuits_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;" >{{ getvalue('number_of_point_a',$circuits_data) }} </td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;"> {{ getvalue('live_b',$circuits_data) }}</td>
                <td style="text-align: center; border: 1px solid #00935f; padding: 5px;">{{ getvalue('cpc_b',$circuits_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;" >{{ getvalue('max_disconnection_time_b',$circuits_data) }} </td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;"> {{ getvalue('type_bs_c',$circuits_data) }}</td>
                <td style="text-align: center; border: 1px solid #00935f; padding: 5px;">{{ getvalue('type_c',$circuits_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;" >{{ getvalue('rating_c',$circuits_data) }} </td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;"> {{ getvalue('short_circuit_c',$circuits_data) }}</td>
                <td style="text-align: center; border: 1px solid #00935f; padding: 5px;">{{ getvalue('max_permitted_c',$circuits_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;" >{{ getvalue('type_bs_d',$circuits_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;"> {{ getvalue('type_d',$circuits_data) }}</td>
                <td style="text-align: center; border: 1px solid #00935f; padding: 5px;">{{ getvalue('rcd_d',$circuits_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;" >{{ getvalue('rating_d',$circuits_data) }} </td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;"> {{ getvalue('r1_e',$circuits_data) }}</td>
                <td style="text-align: center; border: 1px solid #00935f; padding: 5px;">{{ getvalue('rn_e',$circuits_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;" >{{ getvalue('r2_e',$circuits_data) }} </td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;"> {{ getvalue('r1_r2_f',$circuits_data) }}</td>
                <td style="text-align: center; border: 1px solid #00935f; padding: 5px;">{{ getvalue('r2_f',$circuits_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;" >{{ getvalue('ir_test_voltage_f',$circuits_data) }} </td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;"> {{ getvalue('ir_test_voltage_f',$circuits_data) }}</td>
                <td style="text-align: center; border: 1px solid #00935f; padding: 5px;">{{ getvalue('disconnection_time_i',$circuits_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;" >{{ getvalue('test_button_i',$circuits_data) }} </td>
                <td  style="text-align: center; border: 1px solid #00935f; padding: 5px;"> {{ getvalue('testButton_j',$circuits_data) }}</td>


              </tr>

              @endforeach


            </table>
            @endforeach
          </div>

          <div style="clear: both;"></div>


    </div>
  </body>
</html>
