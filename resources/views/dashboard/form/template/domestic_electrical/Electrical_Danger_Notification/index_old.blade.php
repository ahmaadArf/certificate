<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Link</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('admin/forms/Electrical_Danger_Notification/style.css') ?? ""}}" media="all" />
     <style>
      body {
            height: 39cm;
            background-color: #EAF3FD;
        }
        * {box-sizing: border-box !important;}
      td {
            width: calc(100% / 16) !important;
        }
        label {
          font-size: 10px !important;
        }
    </style>
    <style type="text/css" media="print">
      @page {
        size: landscape;
      }

      @media print {
        footer {
          position: fixed;
          bottom: 10px;
          left: 10px;
        }
      }
  </style>
  </head>
  <body>
    <header style="margin-bottom: 0;padding: 0;">
      <div id="logo" style="margin: 0;">
        <img src="{{asset('admin/forms/Electrical_Danger_Notification/main-logo.png') ?? ""}}" style="width: 150px; object-fit: contain;">
        <img src="{{asset('admin/forms/Electrical_Danger_Notification/Image 1.png') ?? ""}}">
      </div>
      <div id="information">
        <div class="btns">
          <div>
            <span style="font-weight: bold; text-align: left; direction: ltr;">CERT NO:</span>
            <span style="background-color: white; width: 150px ">01</span>
          </div>
        </div>
        <p style="margin-top: 15px; font-size: 16px;">ELECTRICAL DANGER NOTIFICATION</p>
      </div>
    </header>
    <main style="padding: 10px;">
      <table style="border-collapse: separate;
      border-spacing: 0px 5px;">
        <tbody>
            <tr id="part-2" class="">
                <td>
                  <div style="color: #FFFFFF;
                              background-color: #2a98fc;
                              font-size: 10px;
                              font-weight: bold;
                              padding: 10px;">PART 1 : DETAILS OF THE CONTRACTOR, CLIENT AND INSTALLATION</div>
                  <div style="font-size: 0; background-color: white; padding: 10px;">
                    <div style="display: inline-block; width: 33.333333333%; padding: 0px 15px; font-size: 10px; border-right: 2px solid #2a98fc;">
                      <p style="color: #2a98fc; font-weight: bold;">Business Details</p>
                      <div style="margin-bottom: 5px;">
                          <label style="width: 35%; display: inline-block; ">Register No:</label>
                          <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">
                            {{$user->registration_number}}
                        </div>
                      </div>
                      <div style="margin-bottom: 5px;">
                        <label style="width: 35%; display: inline-block; ">Engineer:</label>
                        <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->name}}</div>
                      </div>
                      <div style="margin-bottom: 5px;">
                        <label style="width: 35%; display: inline-block; ">Company:</label>
                        <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->company_name}}</div>
                      </div>
                      <div style="margin-bottom: 5px;">
                        <label style="width: 35%; display: inline-block; ">Address:</label>
                        <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->number_street_name.', '.$user->city}}</div>
                      </div>
                      <div style="margin-bottom: 5px; font-size: 0;">
                        <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                          <label style="display: inline-block; ">Postcode:</label>
                          <div style="display: inline-block; width: 93px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->postal_code}}</div>
                        </div>
                        <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                          <label style="display: inline-block; ">Tel No:</label>
                          <div style="display: inline-block; width: 107px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->phone}}</div>
                        </div>
                      </div>
                      <div style="margin-bottom: 5px;">
                        <label style="width: 35%; display: inline-block; ">Email</label>
                        <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$user->email}}</div>
                    </div>
                    </div>
                    <div style="display: inline-block; width: 33.333333333%; padding: 0px 15px; font-size: 10px; vertical-align: top;  border-right: 2px solid #2a98fc; height: 263px;">
                      <p style="color: #2a98fc; font-weight: bold;">JOB ADDRESS</p>
                      <div style="margin-bottom: 5px;">
                        <label style="width: 35%; display: inline-block; ">Name:</label>
                        <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->site->name ?? ""}}</div>
                      </div>
                      <div style="margin-bottom: 5px;">
                        <label style="width: 35%; display: inline-block; ">Address:</label>
                        <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px; height: 50px;">{{$job->site ? $job->site->street_num.', '.$job->site->city : ""}}</div>
                      </div>
                      <div style="margin-bottom: 5px; font-size: 0;">
                        <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                          <label style="display: inline-block; ">Postcode:</label>
                          <div style="display: inline-block; width: 93px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->site ? $job->site->postal_code : ""}}</div>
                        </div>
                        <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                          <label style="display: inline-block; ">Tel No:</label>
                          <div style="display: inline-block; width: 107px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->site ? $job->site->sitecontact()->first()->phone : ""}}</div>
                        </div>
                      </div>
                      <div style="margin-bottom: 5px;">
                        <label style="width: 35%; display: inline-block; ">Email:</label>
                        <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->site ? $job->site->sitecontact()->first()->email : ""}}</div>
                    </div>
                    </div>
                    <div style="display: inline-block; width: 33.333333333%; padding: 0px 15px; font-size: 10px; vertical-align: top;">
                      <p style="color: #2a98fc; font-weight: bold;">Client / Landlord</p>
                      <div style="margin-bottom: 5px;">
                        <label style="width: 35%; display: inline-block; ">Name:</label>
                        <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->customer ? $job->customer->name : ""}}</div>
                      </div>
                      <div style="margin-bottom: 5px;">
                        <label style="width: 35%; display: inline-block; ">Company:</label>
                        <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">-</div>
                      </div>
                      <div style="margin-bottom: 5px;">
                        <label style="width: 35%; display: inline-block; ">Address:</label>
                        <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px; height: 50px;">{{$job->customer ? $job->customer->street_num.', '.$job->customer->city : ""}}</div>
                      </div>
                      <div style="margin-bottom: 5px; font-size: 0;">
                        <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                          <label style="display: inline-block; ">Postcode:</label>
                          <div style="display: inline-block; width: 93px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->customer ? $job->customer->postal_code : ""}}</div>
                        </div>
                        <div style="display: inline-block; width: 50%; ; font-size: 10px;">
                          <label style="display: inline-block; ">Tel No:</label>
                          <div style="display: inline-block; width: 107px; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->customer ? $job->customer->contacts()->first()->phone : ""}}</div>
                        </div>
                      </div>
                      <div style="margin-bottom: 5px;">
                        <label style="width: 35%; display: inline-block; ">Email:</label>
                        <div style="display: inline-block; width: 62%; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px;">{{$job->customer ? $job->customer->contacts()->first()->email : ""}}</div>
                    </div>
                    </div>
                  </div>
                </td>
              </tr>
          <tr style="background-color: white; font-size: 10px; break-inside: avoid;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;">PART 2 : DETAILS OF THE DANGEROUS CONDITION</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td colspan="2"  style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">
                      <div style="font-weight: bold; padding: 10px 20px 10px 20px;">
                        While at the premises/location indicated above, an electrical condition has been observed which, in the opinion of the competent person issuing this Notification, constitutes a real and immediate danger to persons, property or livestock. The person(s) having responsibility for the safety of the electrical installation or equipment concerned have a duty to ensure that appropriate action is taken without delay to remove the danger. The competent person issuing this Notification will be able to provide further specific advice.
                      </div>
                      <div style="width: 100%; padding: 0 20px;">
                        <div style="display: flex; align-items: center; margin-bottom: 5px;">
                          <label style="width: 100px" >Multi-functional:</label>
                          <div style="flex-grow: 1; margin-left: 4px; border: 1px solid #ddd; padding: 5px 10px; height: 30px;">{{$gaz_safety_data[0]['danger_condition'] ?? ""}}</div>
                        </div>
                      </div>
                      <p style="padding: 0 20px;">
                        The dangerous condition detailed above may result in risk of injury or loss from:
                      </p>
                      <div style="display: flex; flex-wrap: wrap; background-color: white;    align-items: center;">
                        <div style="width: 25%;">
                          <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                            <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['risk_of_electric_shock'] ?? ""}}">
                            <label for="" style="width: 100px; margin-left: 3px;">Electric Shock</label>
                          </div>
                          <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                            <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['risk_of_fire'] ?? ""}}">
                            <label for="" style="width: 100px; margin-left: 3px;">Fire</label>
                          </div>
                        </div>
                        <div style="width: 25%;">
                          <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                            <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['risk_of_burns_from_hot_surfaces'] ?? ""}}">
                            <label for="" style="width: 100px; margin-left: 3px;">Burns from hot surfaces</label>
                          </div>
                          <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                            <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['risk_of_burns_from_the_passage_of_electric_current'] ?? ""}}">
                            <label for="" style="width: 100px; margin-left: 3px;">Burns from the passage of electric current</label>
                          </div>
                        </div>
                        <div style="width: 25%;">
                          <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                            <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['risk_of_mechanical_movement_of_electrically_actuated_equipment'] ?? ""}}">
                            <label for="" style="width: 100px; margin-left: 3px;">Mechanical movement of electrically-actuated equipment</label>
                          </div>
                          <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                            <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['risk_of_explosion'] ?? ""}}">
                            <label for="" style="width: 100px; margin-left: 3px;">Explosion</label>
                          </div>
                        </div>
                        <div style="width: 25%;">
                          <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                            <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['risk_of_arcing_or_burning_excessive_pressure_and_or_toxic_gases'] ?? ""}}">
                            <label for="" style="width: 100px; margin-left: 3px;">Arcing or burning, excessive pressure and/or toxic gases</label>
                          </div>
                          <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                            <input style="border: 1px solid #ddd; padding: 3px; width: 100px; font-size: 10px;" value="{{$gaz_safety_data[0]['risk_of_power_supply_interruptions_and_or_safety_services'] ?? ""}}">
                            <label for="" style="width: 100px; margin-left: 3px;">Power supply interruptions and/or safety services</label>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px; break-inside: avoid;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;">PART 3 : IMMEDIATE ACTION TAKEN</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">
                      <div style="padding: 15px; height: 150px;">
                        {{$gaz_safety_data[0]['immediate_action_taken'] ?? ""}}
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px; break-inside: avoid;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;">PART 4 : FURTHER URGENT ACTION RECOMMENDED</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">
                      <div style="padding: 15px; height: 150px;">
                        {{$gaz_safety_data[0]['further_urgent_action_recommended'] ?? ""}}
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr style="background-color: white; font-size: 10px; break-inside: avoid;">
            <td>
              <table style="border-collapse: collapse; width: 99%; margin:  5px auto;">
                <thead>
                  <tr style="background-color: #2a98fc; color: white;">
                    <td style="border: 1px solid #2a98fc; text-align: left; vertical-align: middle; padding: 10px; font-weight: bold;">PART 5 : RECEIPT</td>
                  </tr>
                </thead>
                <tbody style="background-color: white;">
                  <tr>
                    <td style="text-align: left; vertical-align: middle; padding: 5px; border: 1px solid #2a98fc; color: #333;">
                      <div style="display: inline-block; width: 100%; padding: 0px 4px; font-size: 10px; vertical-align: top;  padding-right: 100px;">
                        <p>I acknowledge receipt of this dangerous condition notification.</p>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                          <div style="display: flex; align-items: center;">
                            <label for="" style="width: 120px;">Name:</label>
                            <input style="border: 1px solid #ddd; padding: 3px; width: 200px; font-size: 10px;" value="{{$user->name ?? ""}}">
                          </div>
                          <div style="display: flex; padding-left: 10px; align-items: center;">
                            <label for="" style="width: 120px;">Position:</label>
                            <input style="border: 1px solid #ddd; padding: 3px; width: 200px; font-size: 10px;" value="{{$gaz_safety_data[0]['position'] ?? ""}}">
                          </div>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
                          <div style="display: flex; align-items: center;">
                            <label for="" style="width: 120px;">Signature:</label>
                            @if ($user->signature)
                            <img src="{{asset('uploads/'.$user->signature->signature) ?? ""}}" style="width: 80px; object-fit: contain;">
                            @endif                          </div>
                          <div style="display: flex; padding-left: 10px; align-items: center;">
                            <label for="" style="width: 120px;">Date:</label>
                            <input style="border: 1px solid #ddd; padding: 3px; width: 200px; font-size: 10px;" value="{{$gaz_safety_data[0]['date'] ?? ""}}">
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
    <footer>
      <div style="display: flex; align-items: center; justify-content: space-between;">
        <img src="{{asset('admin/forms/Electrical_Danger_Notification/footer-logo.png') ?? ""}}" style="width: 250px; object-fit: contain;">
        <!-- <div>
          page 1 of <span style="border: 1px solid #DDDD; padding: 8px 12px; display: inline-block; margin-left: 5px;">1</span>
        </div> -->
      </div>
    </footer>
    <x-print-modal-layout></x-print-modal-layout>
</body>
</html>
