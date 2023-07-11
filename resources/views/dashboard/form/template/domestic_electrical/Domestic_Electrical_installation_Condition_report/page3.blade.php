<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 3</title>
    <style>
        @page {
            header: html_formHeader;
            footer: html_formFooter2;
            margin: 15px;
            margin-bottom:0mm;
            margin-top:80px;
            margin-header:4mm;
            size: landscape; /* <length>{1,2} | auto | portrait | landscape */
            margin-footer:10mm;

        }
        @font-face {
        font-family:fontawesome;
        src: url("{{ asset('admin/fonts/gnu-free-font/fa-solid-900.ttf') }}");
      }
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
        font-family: 'FreeSans';
      "
    >


  <!-- part 7 -->
  <div width="100%"
  style="border: 1px solid #00935f; padding: 0; border-collapse: collapse; margin-bottom: 6px;margin-top:20px;"
  >

    <div  style="background:#00935f;padding-top: 10px; padding-bottom: 10px;text-align:left" colspan="3">
      <div style="text-align: start; padding: 0 10px">
        <h3
          style="color: #fff; font-weight: bold; padding: 0px 5px; margin: 0"
        >
          PART 7 : DETAILS AND LIMITATIONS OF THE INSPECTION AND TESTING
        </h3>
      </div>
    </div>

    <div style="text-align: start; padding: 0 10px;">
      <p style="font-size: 10px;padding-bottom: 0px;margin: 0px;">
        The inspection and testing has been carried out in accordance with
        BS 7671: 2018, as amended. Cables concealed within trunking and
        conduits, or cables and conduits concealed under floors, in
        inaccessible roof spaces and generally within the fabric of the
        building or underground, have not been visually inspected unless
        specifically agreed between the Client and the Inspector prior to
        inspection.
      </p>
    </div>


    <div style="text-align: left; padding: 5px 10px; ">
        <p style="font-size: 10px; margin: 0;float: left;width: 22%;">
          Details of the installation covered by this report:
        </p>
        <P style="font-size: 10px;font-weight: bold; margin: 0;float: left;  width: 70%;">{{ getvalue('extent_electrical_c',$formData) }}</P>
    <div class="clear"></div>
    </div>

    <div style="text-align: left; padding: 0 10px;">
        <P style="font-size: 10px; margin: 0;float: left;  width: 80%;">&nbsp;</P>
        <p style="font-size: 10px; margin: 0;float: left;width: 20%;">

            (<span style="font-size: 10px; margin: 0;width: 80%;">see additional page No  </span>
            <span style="font-size: 10px; font-weight: bold; margin: 0;width: 20px; ">N/A</span>
            )
            <div class="clear"></div>
        </p>
        <div class="clear"></div>
    </div>

    <div style="text-align: start; padding: 0 10px;margin-top:5px">
        <p style="font-size: 10px; margin: 0;float: left;width: 35%;">
            Agreed limitations including the reasons, if any, on the inspection and testing:
        </p>
        <P style="font-size: 10px;font-weight: bold; margin: 0;float: left;  width: 65%;">{{  getvalue('agreed_limitations_c',$formData) }}</P>
        <div class="clear"></div>
    </div>

      <div style="text-align: start; padding: 0 5px;margin:0px">

        <div style="font-size: 10px; margin: 0px;float: left; width: 53%;">
            <p style="  font-weight: bold;margin:5px 0px;"> &nbsp; </p>
         </div>

        <div  style="font-size: 10px;margin:0px;float: left; width: 12%;">
            <p style="margin:5px 0px;">Agreed with (print name):</p>
         </div>

        <div style="font-size: 10px; margin: 0;float: left; width: 33%;">
            <p style=" font-weight: bold;margin:5px 0px;">{{getvalue('agreed_limitations_with_c',$formData)}}  </p>
         </div>
      </div>

      <div class="clear"></div>

      <div style="text-align: start; padding: 0 5px;margin:0px">
         <div  style="font-size: 10px; margin:0px;float: left; width: 9%;">
            <p style="margin:5px 0px;"> Extent of sampling: </p>
         </div>
          <div style="font-size: 10px; margin:0px;float: left; width: 72%;">
            <p style=" font-weight: bold;margin:5px 0px;"> &nbsp;  </p>
         </div>
          <div  style="font-size: 10px; margin:0px;float: left; width: 15%;">
            <p style="margin:5px 0px;">  (see additional page No. <span style=" font-weight: bold;">&nbsp;&nbsp;</span> )</p>
         </div>

      </div>

      <div class="clear"></div>

      <div style="text-align: start; padding: 0 5px;margin:0px">
         <div  style="font-size: 10px; margin:0px;float: left; width:20%;">
            <p style="margin:5px 0px;">  Operational limitations including the reasons:</p>
         </div>
          <div style="font-size: 10px; margin:0px;float: left; width: 60%;">
            <p style="margin:5px 0px; font-weight: bold;"> {{ getvalue('operational_limitation_c',$formData) }}  </p>
         </div>
          <div  style="font-size: 10px; margin:0px;float: left; width: 15%;">
            <p style="margin:5px 0px;">  (see additional page No. <span style=" font-weight: bold;">&nbsp;&nbsp;</span> )</p>
         </div>

      </div>


     </div>


      {{-- 8 --}}
      <div  style="background:#00935f;padding-top: 10px; padding-bottom: 10px;text-align:left">
        <div style="text-align: start; padding: 0 10px">
          <h3
            style="color: #fff; font-weight: bold; padding: 0px 5px; margin: 0"
          >
          PART 8 : SUPPLY CHARACTERISTICS AND EARTHING ARRANGEMENTS
          </h3>
        </div>
      </div>

      <div
        width="100%"
        style="border: 1px solid #00935f; padding: 0; border-collapse: collapse; margin-bottom: 6x;"
        >
        <div style="text-align: left; padding: 5px 5px;width: 30%;float:left;" >
            <p style="font-size: 11px; font-weight: bold;margin: 5px 0px 0px">System type and earthing arrangements</p>
           <table style="width: 100%;margin: 0px">
            <tr>
              <td style="width: 20px"><p style="font-size: 11px;">TN-C-S:</p></td>
              <td style="width: 24%;  text-align: left;"><p style="font-size: 11px;font-weight: bold;">(<x-form-toggle-value key='tn_c_a_f' :data-form="$formData"/>)</p></td>

              <td style="width:20px"><p style="font-size: 11px;">TN-S:</p></td>
              <td style="width: 24%; "><p style="font-size: 11px;font-weight: bold;"> (<x-form-toggle-value key='tn_s_f' :data-form="$formData"/>) </p></td>

              <td style="width: 20px"><p style="font-size: 11px;">TT:</p></td>
              <td style="width: 24%; "><p style="font-size: 11px;font-weight: bold;"> <x-form-toggle-value key='tt_f' :data-form="$formData"/> </p></td>
            </tr>
           </table>
           <table style="width: 100%;margin: 0px;">
            <tr>
              <td style="width: 8%"><p style="font-size: 11px;">Other (state)</p></td>
              <td style="width: 70%;  "><p style="font-size: 11px;font-weight: bold"> (<x-form-toggle-value key='other_f' :data-form="$formData"/>) </p></td>
            </tr>
           </table>
           <p style="font-size: 11px; font-weight: bold; padding: 0px;margin: 5px 0px 0px">Supply protective device</p>
           <table style="width: 60%;margin: 0px;">
            <tr>
              <td  style="width:13%"><p style="font-size: 11px;">BS (EN)</p></td>
              <td  style="width:60%;  "><p style="font-size: 11px;font-weight: bold">(<x-form-toggle-value key='bs_f' :data-form="$formData"/>)</p></td>
            </tr>

           </table>
           <table style="margin: 0px">
            <tr>
              <td> <p style="font-size: 11px;">Type:</p></td>
              <td style="width:40%;  "> (<x-form-toggle-value key='type_f' :data-form="$formData"/>) </td>

              <td> <p style="font-size: 11px;">Rated current:</p></td>
              <td style="width:20%;  "> (<x-form-toggle-value key='rated_current_f' :data-form="$formData"/>) </td>
             <td>A</td>
            </tr>
           </table>

        </div>

        <div style="text-align: start; padding: 5px 5px; border-right: 1px solid #00935f; border-left: 1px solid #00935f;width: 32%;float:left;" >
           <p style="font-size: 11px; font-weight: bold;margin: 5px 0px 0px;">Number and type of live conductors</p>
           <table width="100%">
            <tr >
              <td style="font-size: 11px; ">
                <p style="">&emsp; <span style="font-weight: bold"> AC</span>&emsp;<span>1-phase, 2-wire:</span></p>
              </td>
              <td style="">
                <p style="font-size: 11px; font-weight: bold"> (<x-form-toggle-value key='1phase_2wire_f' :data-form="$formData"/>) </p>
              </td>
              <td style="width: 40%;font-size: 11px; text-align: right">
                <span>2-phase, 3-wire:</span>
              </td>
              <td  style="font-size: 11px;">
                <p style="font-weight: bold">(<x-form-toggle-value key='2phase_3wire_f' :data-form="$formData"/>)</p>
              </td>
            </tr>

            <tr >
              <td style="font-size: 11px; ">
                <p style="">&emsp;&emsp;&emsp;&emsp;<span>3-phase, 3-wire:</span></p>
              </td>
              <td  style="">
                <p style="font-size: 11px; font-weight: bold">(<x-form-toggle-value key='3phase_3wire_f' :data-form="$formData"/>)</p>
              </td>
              <td style="width: 40%;font-size: 11px; text-align: right">
                <span>3-phase, 4-wire:</span>
              </td>
              <td  style="font-size: 11px;">
                <p style="font-weight: bold"> (<x-form-toggle-value key='3phase_4wire_f' :data-form="$formData"/>) </p>
              </td>
            </tr>
           </table>

            <table style="margin: 0px; width:100%;">
                <tr>
                    <td style="font-size: 11px; ">
                        <p style="">&emsp; <span style="font-weight: bold"> DC</span>&emsp;<span>2-wire:</span></p>
                    </td>
                    <td style="">
                        <p style="font-size: 11px; font-weight: bold">(<x-form-toggle-value key='2wire_f' :data-form="$formData"/>)</p>
                    </td>
                    <td style="width: 22%;font-size: 11px; text-align: right">
                        <span>3-wire:</span>
                    </td>
                    <td  style="font-size: 11px;">
                        <p style="font-weight: bold">(<x-form-toggle-value key='3wire_f' :data-form="$formData"/>)</p>
                    </td>

                    <td style="width: 20%;font-size: 11px; text-align: right">
                        <span style="font-weight: bold">Other</span>
                    </td>
                    <td  style="width: 13%;font-size: 11px;">
                        <p style="font-weight: bold">(<x-form-toggle-value key='other_f' :data-form="$formData"/>)</p>
                    </td>
                </tr>
            </table>
            <table width="100%">
                <tr>
                    <td style="width: 95%">Confirmation of supply polarity</td>
                    <td style="  font-weight: bold;font-size: 11px;">
                        (<x-form-toggle-value key='confirmation_of_supply_f' :data-form="$formData"/>)
                    </td>
                </tr>
                <tr>
                    <td style="width: 90%">Other sources of supply
                        (<span style="font-style:italic; font-size: 9px">as detailed on attached schedule</span>)
                        &ensp;&ensp;  Page No:</td>
                    <td style=" font-weight: bold;font-size: 11px;">N/A</td>
                </tr>
            </table>

        </div>

        <div style="text-align: start; padding: 5px 5px; width: 25%;float:left;" >
           <p style="font-size: 11px; font-weight: bold;margin: 5px 0px 0px;">Nature of supply parameters</p>
        <table width="100%">
            <tr>
                <td style="width:80%">Nominal line voltage, U (1):</td>
                <td style=" font-weight: bold;width: 30px">()</td>
                <td>V</td>
            </tr>
            <tr>
                <td >Nominal line voltage to Earth, U0 (1):</td>
                <td style=" font-weight: bold;width: 30px">({{ getvalue('nominal_voltage_f',$formData) }})</td>
                <td>V</td>
            </tr>
            <tr>
                <td style="margin-top: 10px">Nominal frequency, f (1):</td>
                <td style=" font-weight: bold;width: 30px">({{ getvalue('nominal_frequency_f',$formData) }})</td>
                <td>Hz</td>
            </tr>
            <tr >
                <td style="margin-top: 10px">Prospective fault current, Ipf (1)*:</td>
                <td style=" font-weight: bold;width: 30px">({{ getvalue('pfc_f',$formData) }})</td>
                <td>kA</td>
            </tr>
            <tr>
                <td style="margin-top: 10px">External loop impedance, Ze (1)*:</td>
                <td style=" font-weight: bold;width: 30px">({{ getvalue('earth_fault_loop_impedance_ze_f',$formData) }})</td>
                <td>Ω</td>
            </tr>
        </table>

        </div>
        <div style="text-align: center; padding: 0 10px;width:60px;float: left;padding:28px 0px;" >
            <p style="text-align: start; font-size: 8px; width: 100px;" >(1) By enquiry,
                measurement, or
                by calculation</p>
        </div>
    </div>

     <div  style="background:#00935f;padding-top: 10px; padding-bottom: 10px;text-align:left">
        <div style="text-align: start; padding: 0 10px; font-family: FreeSans;">
            <h3
                style="color: #fff; font-weight: bold; padding: 0px 5px; margin: 0;font-family: FreeSans;"
            >
            PART 9 : PARTICULARS OF INSTALLATION REFERRED TO IN THIS REPORT
            </h3>
        </div>
      </div>

<div width="100%" style="border: 1px solid #00935f; padding: 0; border-collapse: collapse;">

      <div style="text-align: left; padding: 0 5px 10px; border-right: 1px solid #00935f; width:20%;float:left;" >
          <p style="font-size: 10px; font-weight: bold;margin:0px; padding:0px 5px">Means of Earthing</p>
            <table>
                <tr>
                    <td style="font-size: 10px;width: 70%">Distributor’s facility: </td>
                    <td style="font-size: 11px; width: 30px; font-weight: bold;"> (<x-form-toggle-value key='distributor_facility_g' :data-form="$formData"/>) </td>
                </tr>
                <tr>
                    <td style="font-size: 10px;">Installation earth electrode: </td>
                    <td style="font-size: 11px;width: 30px; font-weight: bold;"> (<x-form-toggle-value key='installation_earth_electrode_g' :data-form="$formData"/>) </td>
                </tr>
            </table>

          <p style="font-size: 10px; font-weight: bold;word-spacing: -1px;margin:0px; padding:5px 0px 0xp">Where an earth electrode is used insert</p>
          <table>
            <tr>
                <td style="font-size: 10px;">Type – rod(s), tape, etc: </td>
                <td style="font-size: 11px; width: 60px; font-weight: bold;">({{ getvalue('type_i_g',$formData) }})</td>
            </tr>
          </table>
            <table style="margin-top:5px;">
                <tr>
                    <td style="font-size: 10px;">Location: </td>
                    <td style="font-size: 11px;width: 90px; font-weight: bold;">({{ getvalue('location_of_the_earth_electrode_g',$formData) }})</td>
                </tr>
            </table>
          <table style="margin-top:5px;">
                <tr>
                    <td style="font-size: 10px;">Electrode resistance to Earth:</td>
                    <td style="font-size: 11px;width: 40px; font-weight: bold;">( {{ getvalue('electrode_resistance_ra_g',$formData) }} )</td>
                </tr>
            </table>

        </div>
      <div style="text-align: start; padding: 0 5px 10px;border-right: 1px solid #00935f; width:18%;float:left;" >

          <p style="font-size: 10px; font-weight: bold;word-spacing: -1px;margin:0px; padding:5px 0px 0xp">
            Main protective conductors
          </p>
          <p style="font-size: 10px; margin:0px; padding:5px 0px 0xp">Earthing conductor:</p>

            <table width="100%">
                <tr>
                    <td style="font-size: 10px;">material: </td>
                    <td style="font-size: 11px; font-weight: bold;">( {{getvalue('conductor_material_h_1',$formData)}} )</td>
                    <td style="font-size: 10px;">csa</td>
                    <td style="font-size: 11px; font-weight: bold;">( {{getvalue('conductor_csa_h_1',$formData)}} )</td>
                    <td style="font-size: 10px;">mm2</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="font-size: 10px;">Connection / continuity verified:</td>
                    <td style="font-size: 11px; font-weight: bold;"> (<x-form-toggle-value key='continuity_check_h_1' :data-form="$formData"/>) </td>
                </tr>
            </table>
            <p style="font-size: 10px; margin:0px; padding:5px 0px 0xp"> Main protective bonding conductors:</p>

            <table width="100%">
                <tr>
                    <td style="font-size: 10px;">material: </td>
                    <td style="font-size: 11px; font-weight: bold;">({{ getvalue('conductor_material_h_2',$formData) }})</td>
                    <td style="font-size: 10px;">csa</td>
                    <td style="font-size: 11px; font-weight: bold;">({{ getvalue('conductor_csa_h_2',$formData) }})</td>
                    <td style="font-size: 10px;">mm2</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="font-size: 10px;">Connection / continuity verified:</td>
                    <td style="font-size: 11px; font-weight: bold;">(<x-form-toggle-value key='continuity_check_h_2' :data-form="$formData"/>)</td>
                </tr>
            </table>
      </div>
      <div style="text-align: start; padding: 0 5px 10px; border-right: 1px solid #00935f; width:18%;float:left;" >
         <p style="font-size: 10px; font-weight: bold;word-spacing: -1px;margin:0px; padding:5px 0px 0xp">
            Main protective bonding connections
          </p>

          <table width="100%">
            <tr>
                <td style="font-size: 10px;">Water installation pipes: </td>
                <td style="font-size: 11px;width: 60px; font-weight: bold;"> (<x-form-toggle-value key='water_installation_pipes_h' :data-form="$formData"/>) </td>
            </tr>
            <tr>
                <td style="font-size: 10px;">Gas installation pipes: </td>
                <td style="font-size: 11px;width: 60px; font-weight: bold;"> (<x-form-toggle-value key='gas_installation_h' :data-form="$formData"/>) </td>
            </tr>
            <tr>
                <td style="font-size: 10px;">Structural steel: </td>
                <td style="font-size: 11px;width: 60px; font-weight: bold;"> (<x-form-toggle-value key='structural_steel_h' :data-form="$formData"/>) </td>
            </tr>
            <tr>
                <td style="font-size: 10px;">Oil installation pipes:</td>
                <td style="font-size: 11px;width: 60px; font-weight: bold;"> (<x-form-toggle-value key='oil_installation_pipes_h' :data-form="$formData"/>) </td>
            </tr>
            <tr>
                <td style="font-size: 10px;">Lightning protection:</td>
                <td style="font-size: 11px;width: 60px; font-weight: bold;"></td>
            </tr>
        </table>
          <p style="font-size: 10px; margin: 5px 0;">Other (state) </p>
          <p style="font-size: 11px; margin: 5px 0; font-weight: bold;"> (<x-form-toggle-value key='other_services_h' :data-form="$formData"/>) </p>

      </div>
      <div style="text-align: start; padding: 0 5px; width:39%;float:left;" >
            <p style="font-size: 10px; font-weight: bold;word-spacing: -1px;margin:0px; padding:5px 0px 0xp">
            Main switch / Switch-fuse / Circuit-breaker / RCD
          </p>

          <table width="100%">
            <tr>
                <td style="font-size: 10px;width:25%;">type</td>
                <td colspan="3" style="font-size: 10px;width: 25px;font-weight: bold;">( {{ getvalue('type_bs_i',$formData) }} )</td>
            </tr>
            <tr>
                <td style="font-size: 10px;width:25%;">Location</td>
                <td colspan="4" style="font-size: 10px;width: 25px;font-weight: bold;">()</td>
            </tr>
            <tr>
                <td style="font-size: 10px;width:25%;">No. of poles:</td>
                <td style="font-size: 10px;width: 25px;font-weight: bold;">({{ getvalue('no_of_poles_i',$formData) }})</td>
                <td style="font-size: 10px; width:40%;text-align: center;" colspan="2">Rating / setting of device:</td>
                <td style="font-size: 10px;width: 25px;font-weight: bold;"> </td>
                <td style="font-size: 10px;">A</td>
            </tr>
            <tr>
                <td style="font-size: 10px;width:25%;">Current rating:</td>
                <td style="font-size: 10px;width: 25px;font-weight: bold;">({{ getvalue('rated_current_i',$formData) }})</td>
                <td style="font-size: 10px;">A</td>
                <td style="font-size: 10px; width:40%;text-align: center;">Voltage rating:</td>
                <td style="font-size: 10px;width: 25px;font-weight: bold;">({{ getvalue('voltage_rating_i',$formData) }})</td>
                <td style="font-size: 10px;">V</td>
            </tr>
          </table>
          <p style="font-size: 10px; font-weight: bold;word-spacing: -1px;margin:0px; padding:5px 0px 0xp">
            Where an RCD is used as the main switch
          </p>
          <table width="100%">
            <tr>
                <td colspan="3" style="font-size: 10px;">RCD rated residual operating current, I∆n </td>
                <td  style="font-size: 10px;width: 25px;font-weight: bold;">({{ getvalue('rcd_operation_current_i',$formData) }})</td>
                <td  style="font-size: 10px;">mA</td>
            </tr>
            <tr>
                <td style="font-size: 10px;width:45%;">RCD measured operating time:</td>
                <td  style="font-size: 10px;width: 25px;font-weight: bold;">({{ getvalue('rcd_operation_time_i',$formData) }})</td>
                <td  style="font-size: 10px;">ms</td>
                <td style="font-size: 10px;width:30%;">Rated time delay:</td>
                <td  style="font-size: 10px;width: 25px;font-weight: bold;">({{ getvalue('rated_time_delay_i',$formData) }})</td>
                <td  style="font-size: 10px;">ms</td>
            </tr>

          </table>

      </div>

    </div>
    <p style="text-align: left; font-size: 10px; margin: 0;font-style: italic">
      *Where the installation is supplied by more than one source, the higher or highest values of prospective fault current,
       Ipf , and external earth fault loop impedance, Ze , must be recorded.
    </p>
    <table style="font-style:italic; width:100%">
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

    </div>
  </body>
</html>
