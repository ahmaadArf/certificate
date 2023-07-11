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
      style="

        font-family:'Arial';">
          <div style="margin: 10px 25px;width: 93%;">
            <div style="float: left;width:10%">
                 {{-- <img src="{{ asset('certificate/image/niceic-logo.png') }}" width="160px" height="60px"> --}}
            </div>
            <htmlpageheader name="formHeader">
                <div style="margin: 10px 25px;  width: 100%;">
                    <div style="float: left;width:40%;">
                        <img src="{{ asset('certificate/image/niceic-logo.png') }}" width="160px" height="60px">
                        @if ($data->user->logo)
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
                            ElectricalDangerNotification
                        </h2>
                        <p style="font-size: 10px; padding: 0; margin: 0; font-style: italic;text-align: right">
                            Issued in accordance with BS 7671: 2018 – Requirements for Electrical
                            Installations
                        </p>
                    </div>
                    <div style="clear: both;"></div>
                  </div>
            </htmlpageheader>
        </div>
          </div>

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

          <div style="clear: both;"></div>


          {{-- <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height: 240px; ">
              <h5 style="background-color: #00935f; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0; height: 20px;">
              PART 2 : DETAILS OF THE DANGEROUS CONDITION
            </h5> --}}
            <div style="padding:0px 22px 10px 22px; width: 100%; ">
                <div style="width: 100%;border: 1px solid #00935f;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                    PART 2 : DETAILS OF THE DANGEROUS CONDITION
               </h3>
                      <div style="width: 98%;padding:5px;  ">
                        <p style="font-weight: bold; margin-top: 0px">while at the premises/location indicated above, an electrical condition has been observed which, in the opinion of the competent person issuing this notification, constitutes a real and immediate danger to persons, property or livestock. the person(s) having responsibility for the safety of the electrical installation or equipment concerned have a duty to ensure that appropriate action is taken without delay to remove the danger. the competent person issuing this notification will be able to provide further specific advice.</p>
                         <div style="margin-top: 0px;">
                          <p style="margin-top: 0px;">
                            Danger Condition : {{ getvalue('dangerous_condition', $formData['form_part_2']) }}
                        </p>
                         </div>

                          <div>
                          <p style="font-weight: bold; margin-top: 0px;">the dangerous condition detailed above may result in risk of injury or loss from :</p>
                         </div>
                         <table style="width: 100%;">
                                <tr>
                                <td>Electric Shock :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) == 'Electrical shock')
                                        <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Burns From Hot Surfaces :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Burns from hot surfaces')
                                        <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Mechanical Movement Of  Electrically-Actuated Equipment :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Mechanical movement of electrical')
                                         <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Arcing or burning, excessive <br> pressure and/or toxic gases :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Arcing or burning')
                                    <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                              </tr>
                              <tr>
                                <td>Fire :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Fire')
                                    <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Burns From The Passage Of Electric Current :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Burns from the passage of electrical')
                                    <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Explosion :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Explosion')
                                    <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                                <td>Power supply interruptions nd/or safety services :
                                    @if (getvalue('dangerous_details', $formData['form_part_2']) ==  'Power supply interruption')
                                    <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
                                    @endif
                                </td>
                              </tr>
                        </table>

                      </div>

            </div>


          </div>

          <div style="clear: both;"></div>


          {{-- <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height:80px;">
              <h5 style="background-color: #00935f; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0;  height: 20px;">PART 3 : IMMEDIATE ACTION TAKEN</h5> --}}
              <div style="padding:0px 22px 10px 22px; width: 100%;  ">
                <div style="width: 100%;border: 1px solid #00935f; height: 200px;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                PART 3 : IMMEDIATE ACTION TAKEN
               </h3>
                      <div style="width: 98%;">
                            <ul>
                                <li style="list-style-type: disclosure-closed;border-bottom: 1px solid; line-height: 2;">
                                    {{ getvalue('action_taken', $formData['form_part_3']) }}
                                </li>
                            </ul>
                      </div>

            </div>


          </div>

          <div style="clear: both;"></div>

          {{-- <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height:70px;">
              <h5 style="background-color: #00935f; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0;    height: 20px;"></h5> --}}
              <div style="padding:0px 22px 10px 22px; width: 100%; ">
                <div style="width: 100%;border: 1px solid #00935f; height: 250px;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                PART 4 : FURTHER URGENT ACTION RECOMMENDED
               </h3>
                      <div style="width: 98%;">
                            <ul>
                                <li style="list-style-type: disclosure-closed;border-bottom: 1px solid; line-height: 2;">
                                    {{ getvalue('further_action', $formData['form_part_4']) }}
                                </li>
                            </ul>
                      </div>

            </div>


          </div>


          <div style="clear: both;"></div>


          {{-- <div style="padding:0px 22px 10px 22px; width: 100%; ">
            <div style="width: 97%;border: 1px solid;height: 50px;">
              <h5 style="background-color: #00935f; padding: 3px; text-align: left; color: #FFFFFF;
              font-size: 15px;
              font-weight: 100; margin-top: 0;margin-bottom: 0;height: 20px;"></h5> --}}
              <div style="padding:0px 22px 10px 22px; width: 100%; ">
                <div style="width: 100%;border: 1px solid #00935f;">
                <h3 style="background-color: #00935f; font-weight: bold; padding: 10px; padding-bottom: 10px; text-align: left; color: #FFFFFF; margin-top: 0;margin-bottom: 0;">
                PART 5 : RECEIPT
               </h3>
                      <div style="width: 98%; padding: 5px;">


                          <div>
                          <p style="font-weight: bold; margin-top: 0px;">i acknowledge receipt of this dangerous condition notification .</p>
                         </div>
                         <table style="width: 100%;">
                             <tr>
                                <td style=" margin-top: 0px;">Name : {{ getvalue('client_name', $formData['part_declaration']) }}</td>
                                <td style=" margin-top: 0px;">Position :  {{ getvalue('client_position', $formData['part_declaration']) }}</td>
                              </tr>
                              <tr>
                                <td>Signature :
                                    @if ($data->customerSignature)
                                    <img width="120px" src="{{ asset('uploads/'.$data->customerSignature->file_url) }}" alt="">
                                    @endif
                                </td>
                                <td>Date : {{ getvalue('received_date', $formData['part_declaration']) }}</td>

                              </tr>
                        </table>

                      </div>

            </div>


          </div>

          <div style="clear: both;"></div>


          <div style="padding:0px 12px 10px 12px; width: 100%; ">
            <div style="width: 100%;border: 1px solid #00935f;">
              <h5 style="background-color: #00935f; padding: 3px; text-align: center; color: #FFFFFF;
              font-size: 14px;
              font-weight: 500; margin-top: 0;margin-bottom: 0;padding: 20px; line-height: 16px;">
              If You Are Not A Person Having Responsibility For The Safety Of The Electrical Installation/Equipment Concerned,
              <br> It Is Important That You Pass The Notification To Such A Person Without Delay
            </h5>
            </div>
          </div>

          <div style="clear: both;"></div>

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
