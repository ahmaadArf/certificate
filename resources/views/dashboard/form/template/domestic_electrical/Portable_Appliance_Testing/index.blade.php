<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 1</title>
    <style>
           page :first {
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
        /* background-color: #EAEAEA; */
      }

    dt{
        background-color: #EAEAEA;
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
         <htmlpageheader name="formHeader">
            <div style="margin: 10px 25px;  width: 100%;">
                <div style="float: left;width:40%;">
                    {{-- <img src="{{ asset('certificate/image/niceic-logo.png') }}" width="160px" height="60px"> --}}
                    <img src="{{ asset('certificate/image/niceic-logo.png') }}"  width="160px" height="60px">
                    @if ($data->user->logo)
                    <img src="{{ $data->user->logo->url }}" style="margin-left:35px" width="160px">
                    @endif
                </div>
                <div style="float: left; margin-right: 46px; height: 70px;width: 60%;">
                    <table style="border: 1px solid #00935f;padding: 10px;border-collapse: collapse;margin: 10px 0;margin: 0 0 0 auto;border: 1px solid #00935f;">
                        <tr style="padding: 10px;">
                            <th style="padding: 10px;">
                                <div style="padding: 0 120px 0 0"><h3>{{ $data->id ?? 0 }}</h3></div>
                            </th>
                            <th bgcolor="#00935f" style="color: #fff; padding: 10px">
                                <div style="padding: 0 140px 0 10px"><h3>NO</h3></div>
                            </th>
                        </tr>
                    </table>
                    <h2 style="color: #00935f; padding: 0; margin: 0; font-weight: 900;text-align: right">
                        Portable Appliance Testing
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
                                        <span style="font-weight: bold;padding:3px 20px">{{ $data->user->trading_name }}</span>
                                      </h6>
                                      <h6 style="margin:5px 0px;font-size: 12px;font-weight: 100;">
                                        Address:
                                      <span style="font-weight: bold;padding:3px 20px">{{ $data->user->registered_address }}</span>
                                      </h6>
                                      <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                        Postcode:<span style="font-weight: bold;padding:3px 20px">{{ $data->user->postal_code }}</span>
                                        <span>Tel No:<span style="font-weight: bold;padding:3px 20px">{{ $data->user->phone }}</span></span>
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
                                    Name:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->name }}</span>
                                  </h6>
                                  <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                    Address:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->address }}</span>

                                  </h6>
                                  <h6 style="margin:5px 0px ;font-size: 12px;font-weight: 100;">
                                    Postcode:<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->postal_code }}</span>
                                    <span>Tel No:.<span style="font-weight: bold;padding:3px 20px">{{ $data->customer->contacts->first()->phone }}</span>.</span>
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


            <div style="padding:0px 22px 10px 22px; width: 100%; ">
              {{--   <div style="width: 100%;border: 1px solid #00935f;">
                    <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                         ADDRESS OF TESTING
                    </h3>
                 <div style="width: 100%;border: 1px solid #00935f;">
                  <table style="width: 100%;">
                    <tr>
                      <td style="background: #EAEAEA; width: 70%;">
                        <ul style="list-style: none; margin: 0;">
                          <br>

                          <dt style="line-height: 2;font-size: 13px;">{{ $data->customer->sites->first()->address }}</dt>

                          <br>

                        </ul>
                        <br>

                      </td>
                      <td style="background: #EAEAEA;">
                        <ul style="list-style: none;">
                          <dt style="line-height: 2;font-size: 13px;">Postcode:</dt>

                          <dt style="line-height: 2;font-size: 13px;">{{ $data->customer->sites->first()->postal_code }}</dt>
                        </ul>
                      </td>
                    </tr>
                  </table>
                </div>
            </div> --}}

                <div style="width:100%; margin-top:10px">
                <div style="width: 100%;border: 1px solid #00935f;">
                    <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                        ENGINEER, NAME & SIGNATURE
                    </h3>
                 <div style="width: 100%;border: 1px solid #00935f;">
                  <table style="width: 100%;">
                    <tr>
                      <td style=" width: 50%;">
                        <ul style="list-style: none; margin: 0; ">
                            <dt style="line-height: 2;font-size: 13px;color:#000000b3;background:#fff;">Signature</dt>
                            <dt style="line-height: 2;font-size: 13px;background:#fff;">
                                @if ($data->user->signature)
                                    <img height="30px" src="{{ $data->user->signature->file_url }}" alt="">
                                @endif
                            </dt>
                        </ul>
                      </td>
                      <td style="">
                        <ul style="list-style: none;">
                          <dt style="line-height: 2;font-size: 13px; background:#fff;"> <span style="color:#000000b3 ;"> Name : </span> {{ $data->user->name }}</dt>

                          <dt style="line-height: 2;font-size: 13px; background:#fff;">  <span style="color:#000000b3 ;">Date :</span> {{ getvalue('date_inspection_by',$formData['part_declaration']) }} </dt>
                        </ul>
                      </td>
                    </tr>
                  </table>
                </div>



            </div>

          </div>

          <div style="clear: both;"></div>

          <div style="padding:10px 0px; width: 100%; ">
            <div style="width: 33%; float: left;border: 1px solid #00935f; margin-right: 5px;height: 215px;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                    <small>ANYON LIMITATIONS AGREED ON TESTING if any reasons and with whom agreed</small>
                </h3>

                 <div>
                  <table style="width: 100%;">
                    <tr>

                      <td style="width: 100%; height: 155px;padding: 5px 5px 3px 10px;">
                        <p>
                            @if (isset($formData['limitations_testing']))
                            {{ getvalue('limitations_of_testing', $formData['limitations_testing']) }}
                            @endif
                      </p>
                      </td>
                    </tr>
                  </table>

                </div>

            </div>

            <div style="width: 33%; float: left;border: 1px solid #00935f; margin-right: 5px;height: 215px;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                    <small> TESTING CARRIED OUT BY </small>
                </h3>

                 <div style=" padding: 2px 10px 10px 10px;">
                  <table style="width: 100%;border-collapse: collapse; margin-bottom: 3px; ">
                        <tbody>
                        <tr style="border-bottom: 1px #f8f8f8 solid;">
                            <th style="text-align: left">{{ $data->user->name }}</th>
                            <hr>
                            <th></th>

                        </tr>
                        <tr>
                            <td style="line-height: 1.5;color: #000000b3;">{{ $data->user->number_street_name }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="line-height: 1.5;color: #000000b3;">{{ $data->user->city }}</td>
                            <td style="line-height: 1.5;color: #000000b3;">Email: {{ $data->user->email }}</td>
                        </tr>

                        <tr>
                        <td style="line-height: 1.5;color: #000000b3;"></td>
                        <td style="line-height: 1.5;color: #000000b3;">Web: {{ $data->user->website }}</td>
                        </tr>

                        <tr>
                            <td style="line-height: 1.5;color: #000000b3;">{{ $data->user->postal_code }}</td>
                            <td style="line-height: 1.5;color: #000000b3;">Telephone: {{ $data->user->phone }}</td>

                        </tr>
                        </tbody>
                    </table>

                    <table style="width: 100%">
                    <tr>
                        <th style="color: #000000b3; text-align: left">Registration No: <span>607485000</span></th>
                        <th></th>

                    </tr>
                    <tr>
                        <td style="color: #000000b3;">(If Applicable)</td>
                        <td></td>

                    </tr>
                    </table>
                </div>



            </div>

            <div style="width: 33%; float: left;border: 1px solid #00935f; margin-right: 5px;height: 215px;">

                 <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                    <small>PAT TESTER SERIAL NUMBER</small>
                </h3>
                 <div>
                  <table style="width: 100%;">
                    <tr>
                      <td style="width: 100%; height: 155px; text-align: center;">
                        <p style=" text-align: center list-style: none; margin: 0;">
                          KT63
                      </p>
                      </td>
                    </tr>

                  </table>
                </div>
            </div>

          </div>

          <div style="clear: both;"></div>

          <div style=" width: 100%; ">
            <div style="width: 100%; border: 1px solid #00935f; margin-right: 5px;">

            <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                ANYON LIMITATIONS AGREED ON TESTING
            </h3>
                 <div>
                  <table style="width: 100%;">
                    <tr>
                      <td style="width: 100%; padding: 5px 5px 3px 10px;">
                        <p style="list-style: none; margin: 0;">
                            {{ getvalue('any_limitations_agreed_testing', $formData['part_declaration']) }}
                      </p>
                      </td>

                    </tr>
                  </table>
                </div>
            </div>
          </div>
          <pagebreak></pagebreak>
          <div style="padding:10px 0px 10px 0px; width: 100%; ">
            <div style="width: 100%; border: 1px solid #00935f; margin-right: 5px;">
                 <div>
                  <table style="width: 100%;">
                    <tr>
                      <td style=" width: 100%; height:50px;padding: 5px 5px 3px 10px; text-align: center;">
                        <p style="list-style: none; margin: 0; color: red; font-weight: bold;">
                          ANY FAILED APPLIANCES SHOULD BE REMOVED FROM SERVICE UNTIL THE DEFECT HAS BEEN RECTIFIED
                        </p>
                      </td>
                    </tr>
                  </table>
                </div>
            </div>
          </div>

          <div style=" width: 100%; ">

            <div style="width: 100%; border: 1px solid #00935f; margin-right: 5px;height: 150px; ">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                    APPLIANCE SUMMARY FOR
                    <span style="font-size: 12px;"> Mahender Tanwar 16 Palm Court - Alpine Road London NW9 9BQ</span>
                    <small style="float: left; text-align: left">Appliances Total :
                        <span style="font-weight: bold; float: right; text-align: right; margin-left: 200px;">
                            @if ( isset($formData['appliance_summary_data']))
                                {{ getvalue('total_appliance_number', $formData['appliance_summary_data']) }}
                            @endif
                        </span>
                    </small>
                </h3>

               <div style="padding: 5px;">
                  <div style="height: 117px;">

                    <div style="width: 46%;background-color: #009933; padding: 10px; float: left;">
                      <p style="width: 100%; text-align: center;margin: 0; padding: 5px 0 10px 0; color: #FFFFFF;">Passed Appliances</p>
                      <div style="background-color: #FFFFFF; text-align: center; font-weight: bold;">
                        @if ( isset($formData['appliance_summary_data']))
                        <p style="margin-top:22px;font-size:22px">
                            {{ getvalue('appliance_passed', $formData['appliance_summary_data']) }}
                        </p>
                        @else
                        <p style="margin-top:22px;font-size:22px">
                           0
                        </p>
                        @endif

                      </div>
                    </div>

                    <div style="width: 46%;background-color: #E20319; padding: 10px; float: right;">
                      <p style="width: 100%; text-align: center;margin: 0; padding: 5px 0 10px 0;color: #FFFFFF;">Failed Appliances</p>
                      <div style="background-color: #FFFFFF; text-align: center; font-weight: bold;">
                        @if (isset($formData['appliance_summary_data']))
                        <p style="margin-top:22px;font-size:22px">
                            {{ getvalue('appliance_failed', $formData['appliance_summary_data']) ?? 0 }}
                        </p>
                        @else
                        <p style="margin-top:22px;font-size:22px">
                           0
                        </p>
                        @endif

                      </div>
                    </div>

                  </div>
               </div>

            </div>


          </div>

          <div style="clear: both;"></div>

          <div style=" width: 100%; margin-top:10px">
            <div style="width: 100%; border: 1px solid #00935f; margin-right: 5px;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                    ANYON LIMITATIONS AGREED ON TESTING
                </h3>
                 <div>
                  <table style="width: 100%;">
                    <tr>
                      <td style=" width: 100%;padding: 2px;">
                        <p style="list-style: none; margin: 0;">
                          This is to certify the electrical appliances details in this certificate and record sheets have been tested for electrical safety in accordance with the IET code of practice for in service and inspection and testing of electrical equipment. It does not guarantee the correct operation of the appliance for any length of time. Users of the appliance should be aware of any fault or defect that may occur with future use. Any doubt regarding the safety or correct operation of the appliance,
                           the device should be removed from service for further inspection by a competent person.
                        </p>
                      </td>
                    </tr>
                  </table>
                </div>

            </div>

          </div>

          <div style="clear: both;"></div>

          <div style="margin-top:10px; width: 100%;">
            <table style="width: 100%;border-collapse: collapse">
              <tr style="background-color: #E5F5EA;">
                <th style="writing-mode: vertical-lr; font-weight: 500; text-align: center;border: 1px solid #00935f;" rowspan="2">Appliance Number</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" colspan="2" rowspan="2">Appliance</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2">Class</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2">Polarity</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" colspan="2" rowspan="2">Location</th>
                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" colspan="2" rowspan="2">Serial Number/Ld</th>

                <th style="font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="" colspan="4">Test Results </th>


                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2">Visual Check</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2">Fuse Rating (A)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2">Formal Visual Inspection (Months)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2">Combined Inspection & Test (Months)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2">Result</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" rowspan="2">Repair Code</th>
              </tr>
              <tr style="background-color: #E5F5EA;">
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" >Earth Continuity Test(Q)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" >Insulation Resistance M(Q)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" >Load Test (Kva)</th>
                <th style="writing-mode: vertical-lr;font-weight: 500; text-align: center; border: 1px solid #00935f;" >Earth Leakage Test (Ma)</th>
              </tr>
              @if (isset($formData['appliance_data']))
              @foreach ($formData['appliance_data'] as $appliance_data)
              <tr>
                <td style="text-align: center; border: 1px solid #00935f;">{{ getvalue('appliance_number', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;" colspan="2"> {{ getvalue('appliance_description', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;">{{ getvalue('appliance_class', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;">{{ getvalue('polarity', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;" colspan="2">{{ getvalue('appliance_location', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;" colspan="2">{{ getvalue('appliance_id', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;">{{ getvalue('earth_continuity_test', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;">{{ getvalue('insulation_test', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;">{{ getvalue('LoadTest', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;">{{ getvalue('earth_leakage_test', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;">
                    <p style="height: 9px;  width: 5px; margin-left: 0;border-bottom: 3px solid #080808;border-right: 3px solid #020202;">
                        {{ getvalue('visual_check', $appliance_data) }}
                    </p>
                </td>
                <td  style="text-align: center; border: 1px solid #00935f;">{{ getvalue('fuse_rating', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;">{{ getvalue('formal_visual_inspection', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;">{{ getvalue('combined_inspection_and_test', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;">{{ getvalue('test_result', $appliance_data) }}</td>
                <td  style="text-align: center; border: 1px solid #00935f;">{{ getvalue('repair_code', $appliance_data) }}</td>
              </tr>
              @endforeach

              @endif

            </table>

          </div>

          <div style="padding:0px 22px 10px 22px; width: 97%;">
            <div style="width: 48%; float: left">
                <table style="width: 100%;">
                    <tr>
                      <th style="text-align: left"> Repair Codes:</th>
                    </tr>

                    <tr>
                      <td>A = Replace Plug</td>
                      <td>D = Fit Rubber Plug</td>
                      <td>G = Replace Lead</td>
                    </tr>
                    <tr>
                      <td>B = Rewire Plug</td>
                      <td>E = Fit Inline Switch</td>
                      <td>H = Other</td>
                    </tr>
                    <tr>
                      <td>C = Fit BS1361 Sleeved Plug</td>
                      <td>H = Other</td>

                    </tr>
                </table>
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
