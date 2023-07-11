<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
            @page :first {
                header: html_formHeader;
                footer: html_formFooter;
                margin: 15px;
                margin-bottom:0px;
                margin-top:110px;
                margin-header:20px;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }
            @page{
                header: html_formHeader;
                footer: html_formFooter;
                margin: 15px;
                margin-bottom:20px;
                margin-top:110px;
                margin-header:20px;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:5mm ;
            }

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
      .color-border tr td{
        border-color: #00935f;
      }
    </style>
  </head>
  <body style="width: 100%; margin: 0; overflow-x: hidden;">
    <div
      class="table-container"
      style="font-family: 'FreeSans';">
        <htmlpageheader name="formHeader">
            <div style="margin: 10px 25px;  width: 100%;">
                <div style="float: left;width:40%;">
                    <img src="{{ asset('certificate/image/niceic-logo.png') }}" width="160px" height="60px">
                    @if ($data && $data->user->logo)
                    <img src="{{ $data->user->logo->url }}" style="margin-left:35px" width="160px">
                    @endif
                </div>
                <div style="float: left; margin-right: 46px; height: 70px;width: 60%;">
                    <table style="border: 1px solid #00935f;padding: 10px;border-collapse: collapse;margin: 10px 0;margin: 0 0 0 auto;border: 1px solid #00935f;">
                        <tr style="padding: 10px;">
                            <th style="padding: 10px;">
                                <div style="padding: 0 120px 0 0"><h3>{{$data->id ?? 0}}</h3></div>
                            </th>
                            <th bgcolor="#00935f" style="color: #fff; padding: 10px">
                                <div style="padding: 0 140px 0 10px"><h3>NO</h3></div>
                            </th>
                        </tr>
                    </table>
                    <h2 style="color: #00935f; padding: 0; margin: 0; font-weight: 900;text-align: right">
                        Domestic Electrical Installation Certificate
                    </h2>
                    <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
                        Issued in accordance with BS 7671: 2018 – Requirements for Electrical
                        Installations
                    </p>
                </div>
                <div style="clear: both;"></div>
              </div>
        </htmlpageheader>



          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 100%;border: 1px solid #00935f;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                     PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION
                </h3>
                      <div style="width: 32.3%;float: left;">
                              <p style="padding: 0px 10px; margin: 0;font-weight: bold;color: #00935f;">DETAILS OF THE CONTRACTOR</p>
                              <div style="padding:0 10px;">
                                  <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                    Trading Title:
                                    <span style="font-weight: bold;padding:3px 20px">{{ $data->user->trading_name ??'' }}</span>
                                  </h6>
                                  <h6 style="margin:5px 0px;font-size: 12px;font-weight: 100;">
                                    Address:
                                  <span style="font-weight: bold;padding:3px 20px">{{ $data->user->registered_address ??'' }}</span>
                                  </h6>
                                  <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                    Postcode:<span style="font-weight: bold;padding:3px 20px">{{ $data->user->postal_code ?? ''}}</span>
                                    <span>Tel No:<span style="font-weight: bold;padding:3px 20px">{{ $data->user->phone ?? '' }}</span></span>
                                  </h6>
                              </div>
                      </div>
                      <div style="width: 32.3%; float: left;">
                        <p style="padding: 0px 10px; margin: 0;font-weight: bold;color: #00935f;">DETAILS OF THE CLIENT</p>
                        <div style="padding:0 10px;">
                              <h6 style="margin:0px ;font-size: 12px;font-weight: 100;">
                                Contractor Reference Number
                                (CRN):
                              </h6>
                              <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                Name:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->name ??'' }}</span>
                              </h6>
                              <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                Address:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->address ??'' }}</span>

                              </h6>
                              <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                Postcode:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->postal_code ??'' }}</span>
                                <span>Tel No:.<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->contacts->first()->phone  }}</span>.</span>
                              </h6>
                        </div>

                      </div>
                      <div style="width: 32.3%; float: left; ">
                        <p style="padding:0px 10px; margin: 0;font-weight: bold;color: #00935f;">DETAILS OF THE INSTALLATION</p>
                        <div style="padding:0 10px;">
                              <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                Occupier:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->sites->first()->name }}</span>
                              </h6>
                              <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                Address:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->sites->first()->address }}</span>

                              </h6>
                              <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                Postcode:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->sites->first()->postal_code }}</span>
                                <span>Tel No:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->sites->first()->siteContact->phone }}</span></span>
                              </h6>
                        </div>
                      </div>
            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 100%;border: 1px solid #00935f;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                    PART 2 : DETAILS AND EXTENT OF THE INSTALLATION
                </h3>
                      <div style="width: 100%; float: left;">
                              <div style="padding:0 10px;">
                                @if (isset($formData['form_part_1']))
                                <h6 style="margin:5px;font-size: 12px;font-weight: 100;">Extent Of The Installation : <span style="font-weight: bold">{{ getvalue('extends_of_the_installation', $formData['form_part_1']) }} <span style="font-weight: bold"></h6>
                                @endif
                                <h6 style="margin:5px ;font-size: 12px;font-weight: 100;">Covered By This Certificate :</h6>
                                <h6 style="margin:5px ;font-size: 12px;font-weight: 100;">The Installation Is: : </h6>
                              </div>
                      </div>

            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 100%;border: 1px solid #00935f;">
              <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                PART 3 : COMMENTS ON EXISTING INSTALLATION
              </h3>
            <div style="width: 100%; float: left; padding:5px 10px;">
               @if (isset($formData['form_part_4']))
                <span style="font-weight: bold"> {{ getvalue('comments_on_installation', $formData['form_part_4']) }}
                </span>
                @endif
            </div>

            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 100%;border: 1px solid #00935f;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                    PART 4 : NEXT INSPECTION
                </h3>
                <div style="width: 100%; float: left;">
                        <p style="padding: 0px 10px; margin: 0;font-weight: bold;"></p>
                        <div style="padding:0 10px;">
                        <h6 style="margin: 5px;font-size: 12px;font-weight: 100;">
                            I RECOMWND That This Instanation Is Further Inspected And Tested After An Interval Ot Not Rnore Than :
                            @if(isset($formData['form_part_3']))
                                <span style="font-weight: bold">{{ getvalue('next_inspection', $formData['form_part_3']) }} </span>
                            @endif
                        </h6>
                        </div>
                </div>
            </div>


          </div>


          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 100%;border: 1px solid #00935f;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                    PART 5 : TEST INSTRUMENTS
                </h3>
                <p style="padding: 5px 5px 0px; margin: 0;font-weight: bold;">Details Of Tests Instruments Used (State Serial And/Or Asset Numbers):  @if (isset($formData['form_part_10'])){{ getvalue('mft',$formData['form_part_10']) }}@endif</p>
                      <div style="width: 49%; float: left;">
                        <div style="width: 100%;padding:0px;margin:0px;">
                            <div style="padding:0px;margin:0px;">
                                <h6 style="margin:5px;font-size: 12px;font-weight: 100;">Mufti-Functionat  :
                                    @if (isset($formData['form_part_10']))
                                    <span style="font-weight: bold">{{ getvalue('earth_fault_loop',$formData['form_part_10']) }}</span>
                                    @endif
                                </h6>

                                <h6 style="margin:5px;font-size: 12px;font-weight: 100;">Insulation Resistance :
                                    @if (isset($formData['form_part_10']))
                                    <span style="font-weight: bold">{{ getvalue('Insulation_resistance',$formData['form_part_10']) }}</span>
                                    @endif
                                </h6>
                                <h6 style="margin:5px;font-size: 12px;font-weight: 100;">Continuity :
                                    @if (isset($formData['form_part_10']))
                                    <span style="font-weight: bold">{{ getvalue('continuity',$formData['form_part_10']) }}</span>
                                    @endif
                                </h6>
                            </div>
                        </div>
                      </div>

                      <div style="width: 49%; float: right;">
                        <p style="padding: 5px 5px 0px; margin: 0;font-weight: bold;"></p>
                        <div style="width: 100%; float: left;">
                            <div style="padding:0;margin:0px;">
                                <h6 style="margin:5px;font-size: 12px;font-weight: 100;">Earth Electrode Resistance  : </h6>
                                <h6 style="margin:5px;font-size: 12px;font-weight: 100;">Earth Fault Bop Impedance :
                                    @if (isset($formData['form_part_10']))
                                    <span style="font-weight: bold">{{ getvalue('earth_fault_loop',$formData['form_part_10']) }}</span>
                                    @endif
                                </h6>
                                <h6 style="margin:5px;font-size: 12px;font-weight: 100;">RCD :
                                    @if (isset($formData['form_part_10']))
                                    <span style="font-weight: bold">{{ getvalue('rcd',$formData['form_part_10']) }}</span>
                                    @endif
                                </h6>
                            </div>
                        </div>
                      </div>

            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; margin-top: 100px; ">
            <div style="width: 100%;border: 1px solid #00935f;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                    PART 6 : DESIGN, CONSTRUCTION, INSPECTION AND TESTING
                </h3>
                      <div style="width: 100%;">
                              <p style="padding: 5px 10px; margin: 0;font-weight: bold;font-size: 11px;">l /we being the person(s) responsible for the design, construction, inspection and testing of the electrical installation (as indicated by my/our signatures below), particulars of which are described above, having exercised reasonable skill and care when carrying out the design, construction, inspection and testing, hereby certify that the design work for which l/we have been responsible is to the best of my/our knowledge and belief in accordance with bs 7671:2018, except for the departures, if any, detailed as follows.</p>
                              <div style="width: 100%;">
                                <div style="padding:0 10px;">
                                  <h6 style="margin: 0px;font-size: 12px;font-weight: 100; ">I RECOMWND That This Instanation Is Further Inspected And Tested After An Interval Ot Not Rnore Than : <span style="font-weight: bold"> @if (isset($formData['form_part_2'])){{ getvalue('amended_to', $formData['form_part_2']) }}</span>@endif </h6>
                                  <hr style="color: #00935f;padding:0px;margin 0px;">
                                  <h6 style="margin:0px;font-size: 12px;font-weight: 100; float: right;clear: both; margin-right: 300px;">Risk Assessment Attached :</h6>
                                  <h6 style="margin:0px;font-size: 12px;font-weight: 100;clear: both;"> Details Of Permitted Exceptions (Regulations 411.3.3): <span style="font-weight: bold">@if (isset($formData['form_part_2'])) {{ getvalue('as_amended', $formData['form_part_2']) }} @endif </span> </h6>
                                  <hr style="color: #00935f;padding:0px;margin 0px;">
                                  <small>the extent of liability of the signatory/signatories is limited to the work described above as the subject of this certificate.</small>
                                  <h6 style="font-size: 13px;">for design, the construction, and the inspection and testing of the installation:</h6>
                                  <h6 style="font-size: 12px; font-weight: 100;">Signature:
                                    @if ($data->customerSignature)
                                    <img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt="">
                                    @endif
                                    <span style="float: right;font-size: 12px; margin-right: 300px;">Date: @if (isset($formData['part_declaration'])){{ getvalue('date_reviewed_by', $formData['part_declaration']) }}@endif</span>
                                </h6>
                                </div>
                        </div>
                      </div>
            </div>
          </div>

          <div style="clear: both;"></div>

          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 100%;border: 1px solid #00935f;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                    PART 7: SUPPLY CHARACTERISTICS AND EARTHING ARRANGEMENTS
                </h3>
                <div style="width: 15%;float: left;">
                    <p style="padding: 5px 10px; margin: 0;">Earthing Arrangements</p>

                 </div>
                <div style="width: 28%; float: left; padding: 5px;">
                  <p style="padding: 5px; margin: 0; font-weight: bold;">Number And Type Of Live Conductors</p>
                  <div style="margin: 0px;padding:0px;">
                    <h6 style="font-weight: 100;font-size: 12px;margin:5px;">
                        1-Phase    <span style="margin-left: 150px;"> 1-Phase </span>
                     </h6>

                    <h6 style="font-weight: 100;font-size: 12px;margin:5px;">
                        (2 Wire):  <span style="margin-left: 150px;"> (3 Wire): {{ getValue('2phase_3wire',$formData['form_part_6']) }} </span>
                    </h6>

                  </div>
                  <div style="margin: 0px;padding:0px;">
                    <h6 style="font-weight: 100;font-size: 12px;margin:5px 5px;">1-Phase    <span style="margin-left: 150px;"> 1-Phase </span>
                    </h6>

                      <h6 style="font-weight: 100;font-size: 12px;margin:5px">(2 Wire):  <span style="margin-left: 150px;"> (3 Wire): {{ getValue('2phase_3wire',$formData['form_part_6']) }}  </span>  </h6>

                      <h6 style="font-weight: 100;font-size: 12px;margin: 5px;">Other :  </h6>

                      <h6 style="font-weight: 100;font-size: 12px;margin:15px 5px 5px;">
                        Confirmation Of Supply Polarity: :
                      </h6>

                  </div>

                 </div>

                <div style="width: 28%;float: left; padding: 5px;">
                    <p style="padding: 5px; margin: 0; font-weight: bold;">Nature Of Supply Parameters</p>
                    <div style="margin: 0px;padding:0px;">
                        <h6 style="font-weight: 100;font-size: 12px;margin:5px;  margin-top: 5px;">
                            Nominal <br> Voltage(S): {{ getValue('nominal_voltage',$formData['form_part_6']) }}   <span style="margin-left: 60px;"> U : </span> <span style="margin-left: 60px;"> UO : </span>
                        </h6>
                        <h6 style="font-weight: 100;font-size: 12px;margin:5px;">
                            Nominal Frequency, F:<br> Prospective Fault
                        </h6>
                        <h6 style="font-weight: 100;font-size: 12px;margin:5px;">
                            Current, Lpf:
                        </h6>
                        <h6 style="font-weight: 100;font-size: 12px;margin:5px;">
                            External Earth Fault <br> Loop Impedance, Ze:
                        </h6>
                    </div>
                </div>

                <div style="float: left; padding: 5px;">
                    <p style="padding: 5px; margin: 0; font-weight: bold;">Supply Protective Device</p>
                    <div style="margin: 0px;padding:0px;">
                            <h6 style="font-weight: 100;font-size: 12px;margin:5px;  margin-top: 5px;">Bs(En) : {{ getValue('primary_supply_bs',$formData['form_part_6']) }}</h6>
                            <h6 style="font-weight: 100;font-size: 12px;margin:5px; "> Type :{{ getValue('primary_supply_type',$formData['form_part_6']) }}  </h6>
                            <h6 style="font-weight: 100;font-size: 12px;margin:5px;">Rated Current :  {{ getValue('primary_supply_rated_current',$formData['form_part_6']) }}   </h6>
                            <h6 style="font-weight: 100;font-size: 12px;margin:5px; "> Short-Circuit Capacity : {{ getValue('primary_supply_short_circuit',$formData['form_part_6']) }}  </h6>
                    </div>
                </div>
            </div>


          </div>

          <htmlpagefooter name="formFooter">
            <table style="width: 100%; margin-left: 24px;">
            <tr>
                <td style="float: left; width:80%;">
                  <p>Produced Using 360 Connect @</p>
                </td>

                <td style="width: 25px; height: 25px; border: 1px solid; float: left; margin-left: 10px;margin-right:10px; text-align: center; padding-top: 5px;">
                    {PAGENO}
                </td>

                <td style="float:left; margin-top: 10px; width:70px;margin-left:10px;">
                  Page  Of {nbpg}
                </td>
            </tr>
            </table>
        </htmlpagefooter>


    </div>
  </body>
</html>
