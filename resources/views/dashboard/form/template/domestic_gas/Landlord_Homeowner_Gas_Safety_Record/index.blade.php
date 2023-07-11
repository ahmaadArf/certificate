<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LANDLORD/HOMEOWNER GAS SAFETY RECORD</title>
    <style>

            @page :first {
                header: html_formHeader;
                footer: html_formFooter;
                margin: 15px;
                margin-bottom:0px;
                margin-top:110px;
                margin-header:20px;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:4mm 5mm ;
            }
            @page{
                header: html_formHeader;
                footer: html_formFooter;
                margin: 15px;
                margin-bottom:20px;
                margin-top:110px;
                margin-header:20px;
                size: landscape; /* <length>{1,2} | auto | portrait | landscape */
                margin-footer:4mm 5mm ;
            }

        @font-face {
            font-family: Arial;
            src: './Ayar/Arial.ttf';
        }

        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-size: 12px;
            page-break-inside: avoid
            font-family: 'FreeSans';
        }

        .table-border {
            width: 100%;
            border-collapse: collapse;
        }

        .table-border tr td {
            border-left: 1px solid #FFF200;
            padding: 3px;
        }

        .table-border tr td {
            border-bottom: 1px solid #FFF200;
            border-collapse: collapse;
        }
        .border-right{
            border-right: 1px solid #FFF200;
        }
        .table-container {

            text-align: left;
        }
    </style>
</head>

<body style="width: 100%; margin: 0; overflow-x: hidden;">
    <div class="table-container" style="font-family:'FreeSans';">

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
                            <th bgcolor="#FFF200" style="color: #000; padding: 10px">
                                <div style="padding: 0 140px 0 10px"><h3>NO</h3></div>
                            </th>
                        </tr>
                    </table>
                    <h2 style="color: #000; padding: 0; margin: 0; font-weight: 900;text-align: right">
                        LANDLORD/HOMEOWNER GAS SAFETY RECORD
                    </h2>
                   {{--  <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
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

        <!-------------- Part 1 ------------>
        <div style="padding:5px 22px;">
            <div style="border: 1px solid #FFF200;min-height: 220px;">

                <h3 style="background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #000; margin-top: 0;margin-bottom: 0;">
                    DETAILS OF WORK CARRIED OUT
               </h3>
                <div style="padding: 5px;">
                    <div
                        style="padding: 10px;width: 100%; min-height: 150px; ">
                       @if (isset($formData['form_part_1']))
                         {{ getvalue('name_p1',$formData['form_part_1']) }}
                       @endif

                    </div>

                </div>

            </div>

        </div>


        <div style="clear: both;"></div>
        <!-------------- Part 2 => 3 in mobile ------------>
        <div style="padding:0px 20px 10px 20px; width: 100%; ">
           <div style="width:50%;float: left;">
            <table style="width:100%">
                <tr>
                    <td style="width:60%" >
                        <table  class="table-border">
                            <tr>
                                <td style="width:100%;background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #000; margin-top: 0;margin-bottom: 0;" colspan="2">
                                     <h3 style="width:100%;background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #000; margin-top: 0;margin-bottom: 0;">
                                        DEFECTS IDENTIFIED
                                    </h3>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:15px">1</td>
                                <td>{{ getvalue('defects_identified_1',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td style="width:15px">2</td>
                                <td>{{ getvalue('defects_identified_2',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td style="width:15px">3</td>
                                <td>{{ getvalue('defects_identified_3',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td style="width:15px">4</td>
                                <td>{{ getvalue('defects_identified_4',$formData['form_part_3']) }}</td>
                            </tr>
                            <tr>
                                <td style="width:15px">5</td>
                                <td>{{ getvalue('defects_identified_5',$formData['form_part_3']) }}</td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:40%">
                        <table  class="border-right table-border">
                            <tr>
                                <td style="width:100%;background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #000; margin-top: 0;margin-bottom: 0;">
                                     <h3 style="background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #000; margin-top: 0;margin-bottom: 0;">
                                        Warning Notice Issued?
                                    </h3>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ getvalue('warning_notice_1',$formData['form_part_3'])  }} &nbsp;</td>
                            </tr>
                            <tr>
                                <td>{{ getvalue('warning_notice_2',$formData['form_part_3']) }} &nbsp;</td>
                            </tr>
                            <tr>
                                <td>{{ getvalue('warning_notice_3',$formData['form_part_3']) }} &nbsp;</td>
                            </tr>
                            <tr>
                                <td>{{ getvalue('warning_notice_4',$formData['form_part_3']) }} &nbsp;</td>
                            </tr>
                            <tr>
                                <td>{{ getvalue('warning_notice_5',$formData['form_part_3']) }} &nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div style="width:50%; float:left;margin-top:3px">
            <table class="table-border border-right">
                    <tr>
                        <td style="background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #000; margin-top: 0;margin-bottom: 0;" colspan="5">
                            <h3 style="background-color: #FFF200; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #000; margin-top: 0;margin-bottom: 0;">
                                GAS INSTALLATION PIPEWORK
                            </h3>
                        </td>
                    </tr>


                    <tr>

                        <td style="padding: 0px 10px;">
                            <p style="font-size: 10px;">PIPEWORK VISUAL INSPECTION</p>
                        </td>
                        <td>
                            <p style="font-size: 10px;">OUTCOME OF GAS SUPPLY PIPEWORK VISUAL INSPECTION
                            </p>
                        </td>
                        <td>
                            <p style="font-size: 10px;">IS THE EMERGENCY CONTROL VALVE ACCESS SATISFACTORY
                            </p>
                        </td>
                        <td>
                            <p style="font-size: 10px;">OUTCOME OF GAS TIGHTNESS TEST?</p>
                        </td>
                        <td>
                            <p style="font-size: 10px;">IS PROTECTIVE EQUIPOTENTIAL BONDING SATISFACTORY
                        </td>

                    </tr>

                    <tr>
                            <td>
                                <span style="padding: 20px; font-weight: bold;font-size: 18px;">
                                    {{ getvalue('pipework_visual_p2',$formData['form_part_2']) }} &nbsp;
                                </span>
                            </td>
                            <td>
                                <span style="padding: 20px; font-weight: bold;font-size: 18px;">
                                    {{ getvalue('pipework_outcome_supply_p2',$formData['form_part_2']) }}
                                </span>
                            </td>
                            <td>
                                <span style="padding: 20px; font-weight: bold;font-size: 18px;">
                                    {{ getvalue('pipework_emergency_p2',$formData['form_part_2']) }}
                                </span>
                            </td>
                            <td>
                                <span  style="padding: 20px; font-weight: bold;font-size: 18px;">
                                    {{ getvalue('pipework_outcome_tightness_p2',$formData['form_part_2']) }}
                                </span>
                            </td>
                            <td>
                                <span style="padding: 20px; font-weight: bold;font-size: 18px;">{{ getvalue('pipework_protective_p2',$formData['form_part_2']) }}</span>
                            </td>
                    </tr>



            </table>
        </div>
        </div>

        <div style="clear: both;"></div>

  <!-------------- Part 4  ------------>
      <div style="padding:0 22px 10px 22px;">
        <div style="float:left; width:48%">
            <div style="border: 1px solid;min-height: 220px;">
                <h3 style="background-color: #FFF200; font-weight: bold;font-size: 12px; padding: 10px; padding-bottom: 10px; text-align: left; color: #000; margin-top: 0;margin-bottom: 0;">
                    ANY REMEDIAL ACTION TAKEN OR NOTES <span style="font-size: 10px; margin-left: 10px;">Number
                        Should Correspond To Defects Above</span>
                </h3>
                <div style="padding: 5px;width: 99%;">
                    <div
                        style="padding: 10px;width: 99%; float: left;min-height: 150px; ">
                    @if (isset($formData['form_part_4']))
                        {{ getvalue('record_remedial_action',$formData['form_part_4']) }}
                    @endif
                    </div>

                </div>
            </div>
        </div>
        <div style="float:left; width: 50%;">
            <div style="width: 65%; float: left; margin-right: 5px;">
                <h3 style="padding: 10px; text-align: left; color: #000000;font-size: 15px; font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;">
                    Record Issued By:
                </h3>
                <div style="padding:5px;">
                    <div style="width: 100%;min-height: 100px; ">
                        <div style="width:100%; float: left;">
                            <table>
                                <tr>
                                    <td>Signature :</td>
                                    <td>Name (Capitals) :</td>
                                </tr>
                                <tr>

                                    <td style="background-color: rgba(51, 51, 51, 0.1);">
                                        @if ($data->user->signature)
                                        <img width="90px" height="30px" src="{{ $data->user->signature->file_url }}" alt="">
                                        @endif

                                    </td>
                                    <td style="background-color: rgba(51, 51, 51, 0.1);">
                                        @if($data->user)
                                            {{$data->user->name}}
                                        @endif
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                         Record Received By : (Tennant/Landlord/Homeowner/Agent)
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Signature :</td>
                                    <td>Name (Capitals) :</td>
                                </tr>
                                <tr>

                                    <td style="background-color: rgba(51, 51, 51, 0.1);">
                                        @if ($data->customerSignature)
                                        <img width="90px" height="30px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt="">
                                        @endif
                                    </td>
                                    <td style="background-color: rgba(51, 51, 51, 0.1);">
                                        {{ getvalue('record_issue_by',$formData['part_declaration']) }} &nbsp;
                                    </td>
                                </tr>
                            </table>


                        </div>

                    </div>

                </div>

            </div>

            <div style="width: 30%; float: left;border: 1px solid; margin-right: 5px;height: 90px;background-color: #FFF200; margin-left:20px;margin-top:22px;">
                <h5
                    style=" padding:3px; text-align: center; color: #000; font-size: 15px;
                      font-weight: 110; margin-top: 0;margin-bottom: 0; height: 20px;">
                    ATTENTION
                </h5>
                <div style="padding: 10px;">
                    <div style="width: 100%;width: 100%; height: 60px;text-align: center;padding: 10px 0 0 0; background:#fff;">
                        <span style="font-size: 13px; line-height: 1.5;">
                            Next Safety Check
                            <br>
                            Due By: <p style="color:red">{{ getvalue('next_safety_check_by',$formData['form_part_5']) }}</p>
                        </span>

                    </div>

                </div>


            </div>


        </div>
    </div>
    <div style="clear: both;"></div>
        <div style="color:#000;background-color: #FFF200;  width: 95%; padding: 0px 15px; line-height: 1.4; font-size: 12px; margin:5px 0;">
            <p style="padding:5px; margin:0px;">This Record Can Be Used To Document The Outcomes Of The Checks And Tests Required By The Gas Safety
                (Installation And Use) Regulations. Some Of The Outcomes Are As A Result Of Visual Inspection Only
                And Are Recorded As Appropriate. Unless Specifically Recorded No Detailed Inspection Of The Flue
                Lining, Construction Or Integrity Has Been Performed
            </p>
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
