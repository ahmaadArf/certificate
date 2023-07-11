<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 5</title>
    <style>
      body {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-size: 10px;
        font-family: FreeSans;
      }
      .table-container {
        padding: 10px;
        text-align: right;
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
        font-family: FreeSans;
      "
    >
          <div  style="background:#00935f;padding-top: 10px; padding-bottom: 10px;text-align:left">
            <div style="text-align: start; padding: 0 10px; font-family: FreeSans;">
                <h3
                    style="color: #fff; font-weight: bold; padding: 0px 5px; margin: 0;font-family: FreeSans;"
                >
                PART 10 : SCHEDULE OF ITEMS INSPECTED
                </h3>
            </div>
          </div>
          <div style="border: 1px solid #00935f;padding: 0;border-collapse: collapse;margin-bottom: 5px;">

            <div style="text-align: left; padding-left: 5px;float: left;width: 33%;">


              <p style="font-size: 10px; margin: 0; padding-top: 5px">
                6.18 &nbsp;&nbsp; Provision of additional protection by an RCD not exceeding 30 mA
              </p>
              <table style="font-size: 10px; padding-left:20px">
                  <tr>
                      <td>
                          a)&nbsp;&nbsp;For all socket-outlets with a rated current not exceeding 32 A, unless exempt
                     </td>
                     <td>
                         (<x-form-toggle-value key="5.12_1_for_all_socket_outlets" :data-form="$formData"/>)
                     </td>
                  </tr>
                  <tr>
                      <td>
                          b)&nbsp;&nbsp;Supplies for mobile equipment with a rated current not exceeding 32 A for use outdoors:
                     </td>
                     <td>
                         (<x-form-toggle-value key="5.12_2_for_the_supply" :data-form="$formData"/>)
                     </td>
                  </tr>
                  <tr>
                      <td>
                          c)&nbsp;&nbsp;For cables concealed in walls / partitions at a depth of less than 50 mm:
                     </td>
                     <td>
                         (<x-form-toggle-value key="5.12_3_for_cables_concealed_depth_50mm" :data-form="$formData"/>)
                     </td>
                  </tr>
                  <tr>
                      <td>
                          d)&nbsp;&nbsp;For cables concealed in walls / partitions containing metal parts regardless of depth:
                     </td>
                     <td>
                         (<x-form-toggle-value key="5.12_4_for_cables_concealed" :data-form="$formData"/>)
                     </td>
                  </tr>
                  <tr>
                      <td>
                          e)&nbsp;&nbsp;Circuits supplying luminaires within domestic (household) premises:
                     </td>
                     <td>
                         (<x-form-toggle-value key="5.12_6_for_circuit_supply" :data-form="$formData"/>)
                     </td>
                  </tr>

              </table>
              <div style="font-style: italic">
                   <b>Note: </b>Older installations designed prior to BS 7671: 2018 may not have been
                    provided with RCDs for additional protection.
              </div>
              <table>
                <tr>
                    <td>
                        6.19 Provision of fire barriers, sealing arrangements and protection
                        against thermal effects:
                   </td>
                   <td>
                       (<x-form-toggle-value key="5.1_provision_of_fire_barriers" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        6.20 Band II cables segregated / separated from Band I cables:
                   </td>
                   <td>
                       (<x-form-toggle-value key="5.1_band_if_cables" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        6.21 Cables segregated / separated from non-electrical services:
                   </td>
                   <td>
                       (<x-form-toggle-value key="5.1_cables_segregated_non_electrical_service" :data-form="$formData"/>)
                   </td>
                </tr>
              </table>
                <p style="font-size: 10px; margin: 0; padding-top: 5px">
                    6.22 Termination of cables at enclosures <br> <span style="font-style: italic;padding-left:15px;"> (indicate extent of sampling in PART 7 of report)</span>
                </p>
                <table style="font-size: 10px; width:100%;padding-left:15px;">
                    <tr>
                        <td>
                            a)&nbsp;&nbsp;Connections under no undue strain:
                    </td>
                    <td>
                        (<x-form-toggle-value key="5.17_1_connections_soundly" :data-form="$formData"/>)
                    </td>
                    </tr>
                    <tr>
                        <td>
                            b)&nbsp;&nbsp;No basic insulation of a conductor visible outside  an enclosure:
                    </td>
                    <td>
                        (<x-form-toggle-value key="5.17_2_no_basic_insulation" :data-form="$formData"/>)
                    </td>
                    </tr>
                    <tr>
                        <td>
                            c)&nbsp;&nbsp;Connections of live conductors adequately enclosed:
                    </td>
                    <td>
                        (<x-form-toggle-value key="5.17_3_connections_of_live" :data-form="$formData"/>)
                    </td>
                    </tr>
                    <tr>
                        <td>
                            d)&nbsp;&nbsp;Adequacy of connection at point of entry to enclosure:
                    </td>
                    <td>
                        (<x-form-toggle-value key="5.17_4_adequately_connected" :data-form="$formData"/>)
                    </td>
                    </tr>
                </table>
                <table width="100%">
                    <tr>
                        <td>
                            6.23 Temperature rating of cable insulation addequate:
                    </td>
                    <td>
                        ()
                    </td>
                    </tr>
                    <tr>
                        <td>
                            6.24 Condition of accessories including socket-outlets, switches  and joint boxes satisfactory:
                    </td>
                    <td>
                        (<x-form-toggle-value key="5.18_conditions_of_accessories" :data-form="$formData"/>)
                    </td>
                    </tr>
                    <tr>
                        <td>
                            6.25 Suitability of accessories for external influences:
                    </td>
                    <td>
                        (<x-form-toggle-value key="5.19_suitability_of_accessories" :data-form="$formData"/>)
                    </td>
                    </tr>
                </table>
            </div>

            <div style="text-align: left;padding: 0 0 0 10px;border: 1px solid #00935f;float: left;width: 32.3%;">
              <table width="100%">
                  <tr>
                      <td>
                          6.26&nbsp;&nbsp;Single-pole switching or protective devices in line conductors only
                     </td>
                     <td>
                         (<x-form-toggle-value key="5.21_single_pole_switching" :data-form="$formData"/>)
                     </td>
                  </tr>
                  <tr>
                      <td>
                        6.27&nbsp;&nbsp;Adequacy of connections, including cpcs, within accessoriesand to fixed and stationary equipment
                     </td>
                     <td>
                         ()
                     </td>
                  </tr>
              </table>

              <hr style="color: #00935f; font-weight: bold" />

              <ol style="margin: 0; font-weight: bold; width: 500px; font-size: 10px; padding-left:15px; "  start="7">
                  <li>Isolation and switching</li>
              </ol>
                <p style="font-size: 10px; margin: 0; padding-top: 5px">
                    7.1 Isolators
                </p>
                <table style="font-size: 10px; width:100%;padding-left:15px;">
                    <tr>
                        <td>
                            a)&nbsp;&nbsp;Presence and condition of appropriate devices:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            b)&nbsp;&nbsp;Acceptable location (local / remote)
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            c)&nbsp;&nbsp;Capable of being secured in the OFF position:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            d)&nbsp;&nbsp;Correct operation verified:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                         <td>
                            e)&nbsp;&nbsp;Clearly identified by position and / or durable markings:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            f)&nbsp;&nbsp;Warning label posted in situations where live parts cannot
                             be isolated by the operation of a single device:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>

                </table>

                <p style="font-size: 10px; margin: 0; padding-top: 5px">
                    7.2 Switching off for mechanical maintenance
                </p>

                <table style="font-size: 10px; width:100%;padding-left:15px;">
                    <tr>
                        <td>
                            a)&nbsp;&nbsp;Presence and condition of appropriate devices:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            b)&nbsp;&nbsp;Acceptable location:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            c)&nbsp;&nbsp;Capable of being secured in the OFF position:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            d)&nbsp;&nbsp;Correct operation verified:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                         <td>
                            e)&nbsp;&nbsp;Clearly identified by position and / or durable marking(s):
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                </table>

                <p style="font-size: 10px; margin: 0; padding-top: 5px">
                    7.3 Emergency switching off / stopping
                </p>
                <table style="font-size: 10px; width:100%;padding-left:15px;">
                    <tr>
                        <td>
                            a)&nbsp;&nbsp;Presence and condition of appropriate devices:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            b)&nbsp;&nbsp;Readily accessible for operation where danger might occur:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            c)&nbsp;&nbsp;Correct operation verified
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                </table>

                <p style="font-size: 10px; margin: 0; padding-top: 5px">
                   7.4 Functional switching
                </p>

                <table style="font-size: 10px; width:100%;padding-left:15px;">
                    <tr>
                        <td style="width: 88%">
                            a)&nbsp;&nbsp;Presence and condition of appropriate devices:
                        </td>
                        <td>
                            (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                        </td>
                    </tr>
                    <tr>
                        <td>
                            b)&nbsp;&nbsp;Correct operation (functionality) verified
                        </td>
                        <td>
                            (N/A)
                        </td>
                    </tr>
                </table>

            </div>

            <div style="text-align: left;padding: 0 0 0 10px;float: left;width: 31.7%;">
              <ol style="margin: 0; font-weight: bold; width: 500px; font-size: 10px; padding-left:15px; "  start="8">
                  <li>Current-using equipment <span style="font-style: italic">(permanently connected)</span></li>
              </ol>
              <table>
                  <tr>
                      <td colspan="2">
                        8.1&nbsp;&nbsp;Condition of equipment in terms of IP rating:
                     </td>
                     <td>
                         (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                     </td>
                  </tr>
                  <tr>
                      <td  colspan="2">
                          8.2&nbsp;&nbsp;Equipment does not constitute a fire hazard:
                     </td>
                     <td>
                         (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                     </td>
                  </tr>
                  <tr>
                      <td  colspan="2">
                          8.3&nbsp;&nbsp;Enclosure not damaged / deteriorated so as to impair safety:
                     </td>
                     <td>
                         (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                     </td>
                  </tr>
                  <tr>
                      <td  colspan="2">
                          8.4&nbsp;&nbsp;Suitability for the environment and external influences:
                     </td>
                     <td>
                         (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                     </td>
                  </tr>
                  <tr>
                      <td  colspan="2">
                          8.5&nbsp;&nbsp;Security of fixing:
                     </td>
                     <td>
                         (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                     </td>
                  </tr>
                  <tr>
                      <td  colspan="2">
                          8.6&nbsp;&nbsp;Cable entry holes in ceiling above luminaires, sized or sealed
                          so as to restrict the spread of fire:
                     </td>
                     <td>
                         (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                     </td>
                  </tr>
                  <tr>
                      <td>
                        List number and location of luminaires inspected on a separate page:
                     </td>
                     <td style="text-align: right">
                        Page No.
                     </td>
                     <td>
                         (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                     </td>
                  </tr>
              </table>

              <p style="font-size: 10px; margin: 0; padding-top: 5px">
                8.7&nbsp;&nbsp;Recessed luminaires (e.g. downlighters)
             </p>
             <table style="font-size: 10px; width:100%;padding-left:15px;">
                 <tr>
                     <td>
                         a)&nbsp;&nbsp;Correct type of lamps fitted:
                     </td>
                     <td>
                         (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                     </td>
                 </tr>
                 <tr>
                     <td>
                         b)&nbsp;&nbsp;Installed to minimise build-up of heat
                     </td>
                     <td>
                         (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                     </td>
                 </tr>
                 <tr>
                     <td>
                         c)&nbsp;&nbsp;No signs of overheating to surrounding building fabric:
                     </td>
                     <td>
                         (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                     </td>
                 </tr>
                 <tr>
                     <td>
                         d)&nbsp;&nbsp;No signs of overheating to conductors / terminations:
                     </td>
                     <td>
                         (<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">)
                     </td>
                 </tr>
             </table>
                <hr style="color: #00935f; font-weight: bold" />
                <ol style="margin: 0; font-weight: bold; width: 500px; font-size: 10px; padding-left:15px; "  start="9">
                    <li>List all special installations or locations covered by this report:</li>
                </ol>
                <table width="100%">
                    <tr>
                        <td style="width: 70%;"></td>
                        <td  style="width: 30px;">
                            <div>N/A</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 70%;"></td>
                        <td style="width: 30px;">N/A</td>
                    </tr>
                    <tr>
                        <td style="width: 70%;"></td>
                        <td style="width: 30px;">N/A</td>
                    </tr>
                    <tr>
                        <td style="width: 70%;"></td>
                        <td style="width: 30px;">N/A</td>
                    </tr>
                </table>
                <p style="font-style:italic;padding:0px;margin:0px;">
                    Indicate if the relevant requirements of Part 7 are satisfied and append results
                    of inspection on a separate numbered page.
                </p>
                <hr style="color: #00935f; font-weight: bold;padding:0px;margin:0px;" />
                 <h3 style="color: #00935f;font-weight:bold;padding:5px 0px;margin:0px;">SCHEDULE OF ITEMS INSPECTED BY</h3>
                <table>
                    <tr>
                        <td>Name (capitals): </td>
                        <td colspan="3" style=""></td>

                    </tr>
                    <tr>
                        <td>Signature:</td>
                        <td style=";width:100px"></td>
                        <td style="width:40%;text-align:right;">Date:</td>
                        <td style=";width:70px"></td>
                    </tr>
                </table>
            </div>
        </div>

          <div  style="background:#00935f;padding-top: 10px; padding-bottom: 10px;text-align:left">
            <div style="text-align: start; padding: 0 10px; font-family: FreeSans;">
                <h3 style="color: #fff; font-weight: bold; padding: 0px 5px; margin: 0;font-family: FreeSans;">
                PART 11 : SCHEDULES AND ADDITIONAL PAGES
                </h3>
            </div>
          </div>
            <table width="100%" style="  border: 1px solid #00935f; padding: 0; border-collapse: collapse;  margin-bottom: 00px;" >
                <tr>
                    <td
                        style="
                        text-align: start;
                        padding: 5px;
                        border: 1px solid #00935f;
                        ">
                        <h5 style="margin: 0; font-weight: 800; font-size: 10px">
                        Schedule of Inspections
                        </h5>
                        <p style="font-size: 10px; margin: 20px 0 0 0; padding-top: 5px">Page No(s):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;()</p>
                    </td>
                    <td
                        style="
                        text-align: start;
                        padding: 5px;
                        border: 1px solid #00935f;
                        ">
                        <h5 style="margin: 0; font-weight: 800; font-size: 10px">
                        Schedule of Circuit Details and Test Results <br /> for the installation
                        </h5>
                        <p style="font-size: 10px; margin: 20px 0 0 0; padding-top: 5px">Page No(s):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;()</p>
                    </td>
                    <td
                        style="
                        text-align: start;
                        padding:5px;
                        border: 1px solid #00935f;
                        ">
                        <h5 style="margin: 0; font-weight: 800; font-size: 10px">
                        Additional pages, including data sheets <br /> for additional sources
                        </h5>
                        <p style="font-size: 10px; margin: 20px 0 0 0; padding-top: 5px">Page No(s):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;()</p>
                    </td>
                    <td
                        style="
                        text-align: start;
                        padding: 5px;
                        border: 1px solid #00935f;
                        ">
                        <h5 style="margin: 0; font-weight: 800; font-size: 10px">
                            Special installations or locations<br /> (indicated in item 9. above)
                        </h5>
                        <p style="font-size: 10px; margin: 20px 0 0 0; padding-top: 5px">Page No(s):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;()</p>
                    </td>
                    <td
                        style="
                        text-align: start;
                        padding: 5px;
                        border: 1px solid #00935f;
                        ">
                        <h5 style="margin: 0; font-weight: 800; font-size: 12px">
                        Continuation sheets
                        </h5>
                        <p style="font-size: 10px; margin: 20px 0 0 0; padding-top: 5px">Page No(s):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;()</p>
                    </td>
                    </tr>
                    <tr>
                    <td style="text-align: center; padding: 5px;" colspan="5">
                        <p style="font-size: 10px; margin: 0;">The pages identified are an essential part of this report (see Regulation 653.2).
                        </p>
                    </td>
                </tr>
            </table>
            <table style="font-style:italic;width:100%">
                <tr>
                  <th>
                    <p style="font-weight: 900; font-size: 10px">
                      All fields must be completed
                    </p>
                  </th>
                  <td>
                    <p style="font-size: 10px">
                       Enter either, as appropriate: ‘<img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">‘
                       if Acceptable condition;
                    </p>
                  </td>
                  <td>
                    <p style="font-size: 10px">
                         <b>‘N/A’</b> if Not
                        applicable;
                    </p>
                  </td>
                  <td>
                    <p style="font-size: 10px">

                        <b>‘LIM’</b> if a
                         Limitation exists;
                    </p>
                  </td>
                  <td>
                    <p style="font-size: 10px">
                        or
                      Code appropriately –
                    </p>
                  </td>
                  <td style="width:250px">
                    <p style="font-size: 10px; text-align: start;">
                      CODE <b>‘C1’</b> , <b>‘C2’</b>,<b>‘C3’</b> or <b>‘F1’</b> (codes to be recorded in PART 6,
                      with additional comments (where appropriate) on attached numbered
                      sheets)
                    </p>
                  </td>
                </tr>
            </table>


    </body>
</html>
