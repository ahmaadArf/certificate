<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Link-1-1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('admin/forms/portable_appliance_testing/style.css')}}" media="all" />
    <style>
        *{
            box-sizing: border-box;
        }
        body {
            height: 35cm;
            background-color: #EAF3FD;
            /* padding: 0 40px; */
        }
        body {
            height: 35cm;
            width: 27cm;
            background-color: #EAF3FD;
        }

        table td{
            vertical-align: middle;
            text-align: center;
            padding: 10px 4px;
            font-size: 10px;
        }

    </style>
  </head>
  <body>
    <header>
      <div id="logo">
        {{-- <img src="{{asset('admin/forms/portable_appliance_testing/main-logo.png')}}" style="width: 150px; object-fit: contain;"> --}}
        {{-- <img src="{{asset('admin/forms/portable_appliance_testing/Image 1.png')}}"> --}}
      </div>
      <div id="information">
        <div class="btns">
          <div>
            <span>Certificate Reference</span>
            <span style=" width: auto; ">PT51418225 SW9 9BA</span>
          </div>
          <div style="margin-right: 20px; font-size: 14px; font-weight: bold;">
            <span>Date Completed</span>
            <span>20/06/2022</span>
          </div>
        </div>
        <p style="margin-top: 15px; font-size: 20px;">Portable Appliance Test (PAT) Completion Certificate</p>
      </div>
    </header>
    <main style="padding: 20px;">
        <table>
        <tbody>
          <tr id="part-2" class="part-container">
            <td style="text-align: left">
              <div style="display: flex; justify-content: space-between;">
                <div style="width: calc(96% / 2);">
                    <p style="margin-bottom: 0; text-align: center; background-color: #2a98fc; color: white; font-size: 14px; font-weight: bold; padding: 8px;">DETAILS OF CLIENT</p>
                    <div style="padding: 15px; display: flex; justify-content: space-between; background-color: white; height: 100px;">
                        <div style="border: 1px solid #ddd; padding: 15px; flex-grow: 1; margin-right: 15px;">
                            @if($job->customer)
                                {{$job->customer->street_num.", ".$job->customer->address.", ".$job->customer->city}}
                            @else
                            null address
                            @endif
                        </div>
                        <div style="align-self: end;">
                            <span>Postcode:</span>
                            <span style="display: inline-block; border: 1px solid #dddd; width: 90px; text-align: center; padding: 5px 0;"> {{$job->customer->postal_code ?? "test"}} </span>
                        </div>
                    </div>
                </div>
                <div style="width: calc(96% / 2);">
                    <p style="margin-bottom: 0; text-align: center; background-color: #2a98fc; color: white; font-size: 14px; font-weight: bold; padding: 8px;">ADDRESS OF TESTING</p>
                    <div style="padding: 15px; display: flex; justify-content: space-between; background-color: white; height: 100px;">
                        <div style="border: 1px solid #ddd; padding: 15px; flex-grow: 1; margin-right: 15px;">
                            @if($job->site)
                            {{$job->site->street_num.", ".$job->site->address.", ".$job->site->city}}
                            @else
                            null address
                            @endif
                        </div>
                        <div style="align-self: end;">
                            <span>Postcode:</span>
                            <span style="display: inline-block; border: 1px solid #dddd; width: 90px; text-align: center; padding: 5px 0;">  {{$job->site->postal_code ?? "test"}}  </span>
                        </div>
                    </div>
                </div>
              </div>
            </td>
          </tr>
          <tr id="part-2" class="part-container">
            <td style="text-align: left">
              <div style="display: flex; justify-content: space-between;">
                <div style="width: calc(96% / 2);">
                    <p style="margin-bottom: 0; text-align: center; background-color: #2a98fc; color: white; font-size: 14px; font-weight: bold; padding: 8px;">ENGINEER, NAME & SIGNATURE</p>
                    <div style="padding: 15px; display: flex; justify-content: space-between; background-color: white; ">
                        <div style="flex-grow: 1;     margin-right: 15px;">
                            <div style="font-weight: bold; margin-bottom: 10px;">Signature</div>
                            <div style="border: 1px solid #ddd; padding: 15px; flex-grow: 1; height: 100px;">
                                @if ($user->signature)
                                {{-- <img src="{{asset('uploads/'.$user->signature->signature)}}" style="width: 80px; object-fit: contain;"> --}}
                                @endif
                            </div>
                        </div>
                        <div>
                            <div style="margin-bottom: 15px;">
                                <label style="font-weight: bold; display:block; margin-bottom: 32px;">Name</label>
                                <input type="text" value="{{$user->name}}" disabled style="padding: 10px; border: 1px solid #ddd ">
                            </div>
                            <div>
                                <label style="font-weight: bold; display:block; margin-bottom: 10px;">Date</label>
                                <input type="text" disabled style="padding: 10px; border: 1px solid #ddd ">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: calc(96% / 2);">
                    <p style="margin-bottom: 0; text-align: center; background-color: #2a98fc; color: white; font-size: 14px; font-weight: bold; padding: 8px;">*ANY LIMITATIONS AGREED ON TESTING <span style="font-size: 10px;">*if any reasons and with whom agreed</span></p>
                    <div style="padding: 15px; display: flex; justify-content: space-between; background-color: white; height: 156px;">
                        <div style="border: 1px solid #ddd; padding: 15px; flex-grow: 1;">
                            Lorem, ipsum dolor.
                        </div>

                    </div>
                </div>
              </div>
            </td>
          </tr>
          <tr id="part-2" class="part-container">
            <td style="text-align: left">
              <div style="display: flex; justify-content: space-between;">
                <div style="width: calc(96% / 2); background: white;">
                    <p style="margin-bottom: 0; text-align: center; background-color: #2a98fc; color: white; font-size: 14px; font-weight: bold; padding: 8px;">TESTING CARRIED OUT BY</p>
                    <div style="padding: 15px; background-color: white;">
                        <div style="border: 1px solid #ddd; padding: 15px; font-weight: bold;">
                            {{$user->company_name}}
                        </div>
                        <div style="border: 1px solid #ddd; margin: 15px 0; padding: 15px;">
                            <div style="display: inline-block; width: 45%; font-weight: 700">
                                <p>{{$user->number_street_name}}</p>
                                <p>{{$user->city}}</p>
                                <p>{{$user->state}}</p>
                                <p>{{$user->postal_code}}</p>
                            </div>
                            <div style="display: inline-block; width: 45%; font-weight: 700">
                                <p>Email: {{$user->email}}</p>
                                <p>Web: {{$user->website}}</p>
                                <p>Telephone: {{$user->phone}}</p>

                            </div>

                        </div>
                        <div>
                            <span style="font-weight: bold;">Registration No:</span> {{$user->registration_number}} (If Applicable)
                        </div>
                    </div>
                </div>
                <div style="width: calc(96% / 2); background: white;">
                    <p style="margin-bottom: 0; text-align: center; background-color: #2a98fc; color: white; font-size: 14px; font-weight: bold; padding: 8px;">PAT TESTER SERIAL NUMBER</p>
                    <div style="padding: 15px; background-color: white;">
                        <div style="border: 1px solid #ddd; padding: 15px; min-height: 50px;">

                        </div>
                        <p style="margin-bottom: 0; text-align: center; background-color: #2a98fc; color: white; font-size: 14px; font-weight: bold; padding: 8px;">DECLARATION</p>
                        <div style="padding: 15px; font-weight: bold;">
                            This is to certify the electrical appliances details in this certificate and record sheets have been tested for electrical safety in accordance with the IET code of practice for in service and inspection and testing of electrical equipment. It does not guarantee the correct operation of The appliance for any length of time. Users of the appliance should be aware of any fault or defect that may occur with future use. Any doubt regarding the safety or correct operation of The appliance, the device should be removed from service for further inspection by a competent person.
                        </div>
                    </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
                <div style="padding: 15px 30px;">
                    <div style="color: white; font-weight: bold; padding: 15px; text-align: center; background-color: #2a98fc;">
                        ANY FAILED APPLIANCES SHOULD BE REMOVED FROM SERVICE UNTIL THE DEFECT HAS BEEN RECTIFIED
                    </div>
                </div>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
    <div class="footer">
      <div style="display: flex; justify-content: space-between;">
        {{-- <img src="{{asset('admin/forms/portable_appliance_testing/footer-logo.png')}}" style="width: 250px; object-fit: contain;"> --}}
        <div>
          page 1 of <span style="border: 1px solid #DDDD; padding: 8px 12px; display: inline-block; margin-left: 5px;">2</span>
        </div>
      </div>
    </div>

    <main style="padding: 20px;">
      <table>
        <tbody>
            <tr id="part-2" class="part-container">
                <td>
                    <div style="background-color: white;">
                        <div>
                            <p style="margin-bottom: 0; text-align: center; background-color: #2a98fc; color: white; font-size: 14px; font-weight: bold; padding: 8px;">PORTABLE APPLIANCE REGISTER</p>
                        </div>
                        <div style="display: flex; justify-content:end; padding: 15px; align-items:center ;">
                            <div style="display: flex;">
                                <div style="border: 1px solid #dddd; padding: 15px 30px; border-radius: 8px; margin-right: 15px;">
                                    <div style="font-size: 14px; margin-bottom: 15px;">Application Passes</div>
                                    <div style="background-color: #2a98fc; font-weight: bold; padding: 10px 5px; width: 150px; border-radius: 8px; color: white; font-size: 14px;">{{count($final_result_yes)}}</div>
                                </div>
                                <div style="border: 1px solid #dddd; padding: 15px 30px; border-radius: 8px; margin-right: 15px;">
                                    <div style="font-size: 14px; margin-bottom: 15px;">Application Failed</div>
                                    <div style="background-color: #2a98fc; font-weight: bold; padding: 10px 5px; width: 150px; border-radius: 8px; color: white; font-size: 14px;">{{count($final_result_no)}}</div>
                                </div>
                            </div>
                            <div style="padding: 15px; background-color: #2a98fc; color: white; font-weight: bold; font-size: 14px; border-radius: 8px; margin-left: 100px;">
                                <div>{{count($final_result)}}</div>
                                <div>Total Appliances</div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
          <tr id="part-2" class="part-container">
            <td>
                <div style="background-color: white;">
                    <div>
                        <p style="margin-bottom: 0; text-align: center; background-color: #2a98fc; color: white; font-size: 14px; font-weight: bold; padding: 8px;">PORTABLE APPLIANCE REGISTER</p>
                    </div>
                    <table style="border-collapse: collapse;">
                        <thead>
                            <tr>
                                <td style="border: 1px solid #2a98fc;">ID</td>
                                <td  style="border: 1px solid #2a98fc;">
                                    <div>Make </div>
                                </td>
                                <td rowspan="1" style="border: 1px solid #2a98fc;">Model</td>
                                <td rowspan="1" style="border: 1px solid #2a98fc;">Location</td>
                                <td rowspan="1" style="border: 1px solid #2a98fc;"><div>Visual</div> Inspection</td>

                                <td rowspan="1" style=" transform: rotate(0deg); border: 1px solid #2a98fc;">Fuse rating <div>(A)</div></td>
                                <td rowspan="1" style=" transform: rotate(0deg); border: 1px solid #2a98fc;">Voltage  <div>(V)</div></td>
                                <td rowspan="1" style="transform: rotate(0deg); border: 1px solid #2a98fc;">Earth
                                    <div>Continuity</div>
                                    <div></div>(Ω)</div>
                                </td>
                                <td rowspan="1" style="transform: rotate(0deg); border: 1px solid #2a98fc;">Insulation
                                    <div>Resistance</div>
                                    <div>(MΩ)</div>
                                </td>
                                <td rowspan="1" style=" transform: rotate(0deg); border: 1px solid #2a98fc;">Touch
                                    <div>Leakage</div>
                                    <div>(mA)</div>
                                </td>
                                <td rowspan="1" style="transform: rotate(0deg); border: 1px solid #2a98fc;">Polarity</td>
                                <td rowspan="1" style="transform: rotate(0deg); border: 1px solid #2a98fc;">Pass / Fail</td>
                            </tr>

                        </thead>
                        <tbody>
                        @foreach ($gaz_safety_data as $item)
                           <tr>
                            <td style="border: 1px solid #2a98fc;">{{$item['id']}}</td>
                            <td style="border: 1px solid #2a98fc;">{{$item['make']}}</td>
                            <td style="border: 1px solid #2a98fc;">{{$item['model']}}</td>
                            <td style="border: 1px solid #2a98fc;">{{$item['location']}}</td>
                            <td style="border: 1px solid #2a98fc;">{{$item['visual_inspection_result']}}</td>
                            <td style="border: 1px solid #2a98fc;">{{$item['fuse_rating']}}</td>
                            <td style="border: 1px solid #2a98fc;">{{$item['voltage']}}</td>
                            <td style="border: 1px solid #2a98fc;">{{$item['earth_continuity']}}</td>
                            <td style="border: 1px solid #2a98fc;">{{$item['insulation_resistance']}}</td>
                            <td style="border: 1px solid #2a98fc;">{{$item['touch_leakage']}}</td>
                            <td style="border: 1px solid #2a98fc;">{{$item['polarity']}}</td>
                            <td style="border: 1px solid #2a98fc;">{{$item['final_result']}}</td>
                           </tr>
                        @endforeach

                           <tr>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                           </tr>
                           <tr>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                           </tr>
                           <tr>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                            <td style="border: 1px solid #2a98fc;"></td>
                           </tr>

                        </tbody>
                    </table>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    <div class="footer">
        <div style="display: flex; justify-content: space-between;">
          {{-- <img src="{{asset('admin/forms/portable_appliance_testing/footer-logo.png')}}" style="width: 250px; object-fit: contain;"> --}}
          <div>
            page 1 of <span style="border: 1px solid #DDDD; padding: 8px 12px; display: inline-block; margin-left: 5px;">1</span>
          </div>
        </div>
      </div>

      <x-print-modal-layout></x-print-modal-layout>
  </body>
</html>
