<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 1</title>
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
                margin-footer: 5mm ;
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

        font-family:'FreeSans';
      ">

<htmlpageheader name="formHeader">
    <div style="margin: 10px 25px;  width: 100%;">
        <div style="float: left;width:40%;">
            <img src="{{ asset('certificate/image/gas_safe_logo.png') }}"  height="80px">
            @if ($data->user->logo)
            <img src="{{ $data->user->logo->url }}" style="margin-left:35px" width="160px">
            @endif
        </div>
        <div style="float: left; margin-right: 46px; height: 70px;width: 60%;">
            <table style="border: 1px solid #FFF200;padding: 10px;border-collapse: collapse;margin: 10px 0;margin: 0 0 0 auto;border: 1px solid #FFF200;">
                <tr style="padding: 10px;">
                    <th style="padding: 10px;">
                        <div style="padding: 0 120px 0 0"><h3>{{$data->id ?? 0}}</h3></div>
                    </th>
                    <th bgcolor="#FFF200" style="color: #000000; padding: 10px">
                        <div style="padding: 0 140px 0 10px"><h3>NO</h3></div>
                    </th>
                </tr>
            </table>
            <h2 style="color: #000; padding: 0; margin: 0; font-weight: 900;text-align: right">
                WARNING NOTICE
            </h2>
            {{-- <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
                Issued in accordance with BS 7671: 2018 – Requirements for Electrical
                Installations
            </p> --}}
        </div>
        <div style="clear: both;"></div>
      </div>
</htmlpageheader>



          <div style="clear: both;"></div>


          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 100%;border: 1px solid #FFF200;">
                <h3 style="background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #000; margin-top: 0;margin-bottom: 0;">
                     PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION
                </h3>
                      <div style="width: 32.3%;float: left;">
                              <p style="padding: 0px 10px; margin: 0;font-weight: bold;color: #000;">DETAILS OF THE CONTRACTOR</p>
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
                        <p style="padding: 0px 10px; margin: 0;font-weight: bold;color: #000;">DETAILS OF THE CLIENT</p>
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
                        <p style="padding:0px 10px; margin: 0;font-weight: bold;color: #000;">DETAILS OF THE INSTALLATION</p>
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


          <div style="padding:0 22px 10px 22px; width: 100%; text-align: center;  ">


              <div style="width: 100%; float: left;">
                <h3 style="text-align: center;  background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; color: #000; margin-top: 0;margin-bottom: 0;">
                        DEFECTS IDENTIFIED ON GAS EQUIPMENT
                </h3>
                <table style="width: 100%; border-collapse: collapse;">
                  <thead>
                    <tr >
                    <th style="background-color:#FFF200;" colspan="">#</th>
                    <th style="background-color:#FFF200;" colspan="">APPLIANCE TYPE</th>
                    <th style="background-color:#FFF200;" colspan="">LOCATION</th>
                        <th colspan="">Gas Escape</th>
                        <th colspan="">Meter Issue</th>
                        <th colspan="">Pipework Issue</th>
                        <th colspan="">Chimney/ Flue</th>
                        <th colspan="">Ventilation</th>
                        <th colspan="">Other (Specify Below)</th>
                  </tr>
                </thead>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;"> {{ getvalue('important_safety_type',$formData['form_part_1']) }}</td>
                    <td style="border: 1px solid #cbcbcb;"> {{ getvalue('important_safety_location',$formData['form_part_1']) }}</td>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('gas_escape',$formData['form_part_2']) }}</td>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('meter_issue',$formData['form_part_2']) }}</td>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('pipework_issue',$formData['form_part_2']) }}</td>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('chimney_flue',$formData['form_part_2']) }}</td>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('ventilation',$formData['form_part_2']) }}</td>
                    <td style="border: 1px solid #cbcbcb;">{{ getvalue('other',$formData['form_part_2']) }}</td>
                </tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                    <td style="border: 1px solid #cbcbcb;;">&nbsp;</td>
                  </tr>
                </table>
                  <div style="clear: both;"></div>
              </div>

          </div>

          <div style="clear: both;"></div>

          <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <strong style="font-weight: 100;padding:0px; width: 100%;margin-top:0px;">
                **Where an appliance/installation has been identified as ‘Immediately Dangerous’ or ‘At Risk’, it should not be used until the situation has been resolved
            </strong>
            <p style="padding:0px; width: 100%;margin-top:0px;">However, in a limited number of situations, turning off the gas installation will not remove or reduce the risk. In such circumstances the engineer will explain the
              situation and advise on the necessary course of action to take
            </p>
          </div>

          <div style="clear: both;"></div>


          <div style="padding:0 22px 10px 22px; width: 97%; text-align: center; ">
                <div style="width: 49%; float: left;">
                  <h3 style="text-align: left;  background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; color: #000; margin-top: 0;margin-bottom: 0;">
                    RIDDOR* REPORTING
                  </h3>
                  <table style="width: 100%; border-collapse: collapse;">

                    <tr>
                      <td style="border: 1px solid #cbcbcb;width: 40%;padding: 5px; text-align: left;">Reported to HSE under RIDDOR
                        11(1) (Gas Incident)</td>
                      <td style="border: 1px solid #cbcbcb; "> {{ getvalue('riddor_reporting_1', $formData['form_part_3']) }}</td>

                    </tr>
                    <tr>
                      <td style="border: 1px solid #cbcbcb;     width: 40%;     padding: 5px;text-align: left;">Reported to HSE under RIDDOR 11(2)
                        (Dangerous Gas Fitting)</td>
                      <td style="border: 1px solid #cbcbcb; ">{{ getvalue('riddor_reporting_2', $formData['form_part_3']) }}</td>

                    </tr>


                  </table>





                    <div style="clear: both;"></div>
                </div>

                <div style="width: 49%; float: right;">
                  <h3 style="text-align: left;  background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; color: #000; margin-top: 0;margin-bottom: 0;">
                    RIDDOR* REPORTING
                  </h3>
                  <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                      <td style="border: 1px solid #cbcbcb; width: 60%; padding: 5px; text-align: left;">The appliance/installation has been classified as ‘Immediately Dangerous’,
                        disconnected from the gas suppy and labelled “Danger Do Not Use”.
                    </td>
                      <td style="border: 1px solid #cbcbcb; text-align: center">{{ getvalue('riddor_reporting_3',$formData['form_part_3']) }}</td>
                      <td style="border: 1px solid #cbcbcb;"></td>

                    </tr>
                    <tr>
                      <td style="border: 1px solid #cbcbcb;     width: 60%;     padding: 5px;text-align: left;">The appliance/installation has been classified as ‘At Risk’, turned off to
                        made safe and labelled ‘Danger Do not Use’.</td>
                      <td style="border: 1px solid #cbcbcb;"></td>
                      <td style="border: 1px solid #cbcbcb; text-align: center">{{ getvalue('riddor_reporting_4',$formData['form_part_3']) }}</td>

                    </tr>
                    <tr>
                      <td style="border: 1px solid #cbcbcb;     width: 60%;     padding: 5px;text-align: left;">The appliance/installation has been classified as ‘At Risk’, but turning off will
                        not remove or reduce the risk and hence must be referred to the
                        appropriate organisation as advised for further assessment.</td>
                      <td style="border: 1px solid #cbcbcb; text-align: center">{{ getvalue('riddor_reporting_5',$formData['form_part_3']) }}</td>
                      <td style="border: 1px solid #cbcbcb;"></td>

                    </tr>


                  </table>





                    <div style="clear: both;"></div>
                </div>


          </div>


          <div style="clear: both;"></div>
          <pagebreak></pagebreak>
          <div style="padding:10px 22px 10px 22px; width: 100%; text-align: center;">
            <div style="width: 100%; ">

                <h3 style="text-align: left;  background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; color: #000; margin-top: 0;margin-bottom: 0;">
                    DESCRIBE FAULT(S) ON GAS EQUIPMENT
                  </h3>
                <div style="width: 100% ">

                  <ul style="list-style: decimal;    margin: 0;">
                    <li style="  border-bottom:1px solid #000000;padding: 10px; text-align:left">
                            {{ getvalue('describe_fault_1',$formData['form_part_4']) }}</li>
                      <li style="border-bottom: 1px solid #000000; padding: 10px; text-align:left">
                            {{ getvalue('describe_fault_2',$formData['form_part_4']) }}
                      </li>
                       <li style="border-bottom: 1px solid #000000; padding: 10px; text-align:left">
                             {{ getvalue('describe_fault_3',$formData['form_part_4']) }}
                        </li>
                         <li style="border-bottom: 1px solid #000000;padding: 10px; text-align:left">
                          {{ getvalue('describe_fault_4',$formData['form_part_4']) }}
                        </li>
                  </ul>

                </div>



                <div style="clear: both;"></div>
            </div>


         </div>

         <div style="clear: both;"></div>

         <div style="padding:10px 22px 10px 22px; width: 100%; text-align: center;">
           <div style="width: 100%; ">
               <h3 style="text-align: left;  background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; color: #000; margin-top: 0;margin-bottom: 0;">
                     DETAIL WHAT IS REQUIRED TO RECTIFY THE UNSAFE SITUATION
                </h3>
               <div style="width: 100% ">
                    <ul style="list-style: decimal;margin: 0;">
                        <li style="border-bottom: 1px solid #000000;padding: 10px; text-align:left">
                            {{ getvalue('describe_watt_1',$formData['form_part_5']) }}
                        </li>
                        <li style="border-bottom: 1px solid #000000;padding: 10px; text-align:left">
                            {{ getvalue('describe_watt_2',$formData['form_part_5']) }}
                        </li>
                        <li style="border-bottom: 1px solid #000000; padding: 10px; text-align:left">
                            {{ getvalue('describe_watt_3',$formData['form_part_5']) }}
                        </li>
                        <li style="border-bottom: 1px solid #000000; padding: 10px; text-align:left">
                            {{ getvalue('describe_watt_4',$formData['form_part_5']) }}
                        </li>
                    </ul>
               </div>
               <div style="clear: both;"></div>
           </div>


        </div>

        <div style="clear: both;"></div>

        <div style="width: 100%;padding:5px 10px 5px 10px; margin-bottom: 5px; margin-top:5px;">
            <div style="float: left; width: 60%;height: 130px; border: 1px solid #000000; padding: 5px; ">
              <p style="padding:0px;font-size: 13px;margin-top:0px;">I confirm that as the responsible person for the gas installation at the address detailed above I
                have been served this Warning/Advisory Record. As a gas appliance/installation has been classified
                as either ‘Immediately Dangerous’ or ‘At Risk’, as detailed above, continued use of the appliance/
                installation, after being advised not to do so, may be in breach of the Gas Safety Installation and confirm that as </p>
                <div style="float:right;margin-top:5px; margin-bottom: 5px;">
                  <h6 style="    float: left;
                  font-size: 13px;
                  font-weight: 100;
                  margin: 0;

                  padding-right: 10px;font-weight: bold;">Responsible person signature : </h6>

                  <span style="background-color: #f6f6f6; width: 225px; height: 30px; display: block; float: left;">{{ getvalue('customer_name',$formData['part_declaration']) }}</span>
                </div>
                <div style="clear: both;"></div>
                <div style="float:right">
                    <h6 style="float: left; font-size: 13px;font-weight: 100;padding-right: 10px;font-weight: bold;margin: 0;margin-top:0px">
                        Data :
                    </h6>
                  <span style="background-color: #f6f6f6; width: 310px; height: 30px; display: block; float: left;">{{ getvalue('customer_date',$formData['part_declaration']) }}</span>
                </div>
            </div>

            <div style="float: left; height: 130px; width: 37%;padding:5px;border: 1px solid #000000;background-color: #FFF200;color:#000;">
              <p style="padding: 0px;margin-top:0px;">I confirm that the situations recorded above, have been
                identified and brought to the attention of the Responsible
                Person in accordance with the Gas Safety (Installation and
                Use) Regulations and Gas Industry Unsafe Situation
                Procedure

              </p>

              <div style="padding: 0px;">
                <h6 style="float: left;font-size: 13px;font-weight: 100;padding-right: 5px;font-weight: bold;margin: 0;margin-top:5px">
                    Gas Engineer’s signature :
                    @if ($data->user->signature)
                    <img width="90px" height="30px" src="{{ $data->user->signature->file_url }}" alt="">
                    @endif
                </h6>
                <span style="background-color: #f6f6f6; width: 250px; height: 30px; display: block; float: left;">{{ getvalue('engineer_name',$formData['part_declaration']) }}</span>
              </div>




            </div>
        </div>



        <htmlpagefooter name="formFooter">
            <table style="width: 100%;">
                <tr>
                    <td style="width:85%;">Produced Using 360 Connect @</td>
                    <td>  Page {PAGENO} Of</td>
                    <td style="width: 25px;
                    height: 25px;
                    border: 1px solid;"> {nbpg} </td>
                </tr>
                    {{--
                     <div style=" width: 25px; height: 25px;  border: 1px solid; margin-left: 10px; text-align: center; padding-top: 5px;">
                        2
                    </div>
                    <div style="margin-top: 10px;width80px">
                        Page 1 Of
                    </div>
                --}}

            </table>
            <div style="clear: both;"></div>
        </htmlpagefooter>
    </div>
  </body>
</html>
