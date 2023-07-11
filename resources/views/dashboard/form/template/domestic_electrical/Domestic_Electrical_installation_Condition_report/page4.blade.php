<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 4</title>
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
        font-family: 'FreeSans';
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
      <div style="border: 1px solid #00935f;padding: 0;border-collapse: collapse;margin-bottom: 10px;">

          <div style="text-align: left; padding-left: 5px;float: left;width: 33%;">
            <p style="margin: 0; font-weight: bold; font-size:9.5px;padding: 3px 0px">
              1. External condition of electrical intake equipment (visual inspection only)
            </p>
            <p style="font-size: 10px; margin: 0; padding: 0 10px; width: 400px">
              (If inadequacies are identified with the intake equipment, it is
              recommended the person ordering the report informs the appropriate
              authority.)
            </p>

            <table style="font-size: 10px; margin:0;">
                <tr>
                    <td style="width:40%;">1.1&nbsp;&nbsp;Service cable:</td>
                    <td >(<x-form-toggle-value key='1.1_condition_cable' :data-form="$formData"/>)</td>
                    <td style="width:35%;">1.2&nbsp;&nbsp;Service head:</td>
                    <td >(<x-form-toggle-value key='1.2_condition_head' :data-form="$formData"/>)</td>
                </tr>
                <tr>
                    <td style="width:35%;">1.3&nbsp;&nbsp;Earthing arrangement:</td>
                    <td >(<x-form-toggle-value key="1.3_arrangement" :data-form="$formData"/>)</td>
                    <td >1.4&nbsp;&nbsp; Meter tails:</td>
                    <td >(<x-form-toggle-value key="1.4_consumer" :data-form="$formData"/>)</td>
                </tr>
                <tr>
                    <td style="width:35%;">1.5&nbsp;&nbsp;Metering equipment:</td>
                    <td >(<x-form-toggle-value key="1.5_isolator" :data-form="$formData"/>)</td>
                    <td >1.6&nbsp;&nbsp;solator (where present):</td>
                    <td >(<x-form-toggle-value key="1.5_isolator" :data-form="$formData"/>)</td>
                </tr>
            </table>

            <hr style="color: #00935f; font-weight: bold;padding: 0px"/>

            <ol style="margin: 0; font-weight: bold; width: 500px; font-size: 10px; padding-left:15px; "  start="2">
                <li>Presence of adequate arrangements for parallel or switched
                    alternative sources
                </li>
            </ol>

           <table style="font-size: 10px; margin:0;">
             <tr>
                 <td>
                    2.1&nbsp;&nbsp;Adequate arrangements where a generating set operates as a switched alternative to the public supply:
                </td>
                    <td>
                        ()
                    </td>
             </tr>
             <tr>
                 <td>
                    2.2&nbsp;&nbsp;Adequate arrangements where generating set parallel with the public supply:
                </td>
                <td>
                    ()
                </td>
             </tr>
             <tr>
                 <td>
                    2.3 &nbsp;&nbsp;Presence of alternative / additional supply
                    arrangement warning notice(s) at or near equipment, where
                    required:
                </td>
                <td>
                    ()
                </td>
             </tr>
           </table>

            <hr style="color: #00935f; font-weight: bold" />
            <ol style="margin: 0; font-weight: bold; width: 500px; font-size: 10px; padding-left:15px; "  start="3">
                <li> Automatic disconnection of supply
                </li>
            </ol>

            <p style="font-size: 10px; margin: 0; padding-top: 5px">
              3.1&nbsp;&nbsp;Main earthing and bonding arrangements
            </p>
            <table style="font-size: 10px; padding-left:20px">
                <tr>
                    <td>
                        a)&nbsp;&nbsp;Presence and condition of distributor’s
                        earthing arrangement:
                   </td>
                   <td>
                       (<x-form-toggle-value key="3.1_presence_arrangement" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        b)&nbsp;&nbsp;Presence and condition of earth electrode arrangement, present:
                   </td>
                   <td>
                       (<x-form-toggle-value key="3.2_presence_applicable" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        c)&nbsp;&nbsp;Adequacy of earthing conductor size:
                   </td>
                   <td>
                       (<x-form-toggle-value key="3.4_adequacy_size" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        d)&nbsp;&nbsp;Adequacy of earthing conductor connections:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        e)&nbsp;&nbsp;Accessibility of earthing conductor connections:
                   </td>
                   <td>
                       (<x-form-toggle-value key="3.5_accessibility_connections" :data-form="$formData"/>.)
                   </td>
                </tr>
                <tr>
                    <td>
                        f)&nbsp;&nbsp;Adequacy of main protective bonding conductor size(s):
                   </td>
                   <td>
                       (<x-form-toggle-value key="3.6_adequacy_sizes" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        g)&nbsp;&nbsp;Adequacy of main protective bonding conductor connections:
                   </td>
                   <td>
                       (<x-form-toggle-value key="3.7_adequacy_connections" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        h)&nbsp;&nbsp;Accessibility of main protective bonding connections:
                   </td>
                   <td>
                       (<x-form-toggle-value key="3.8_accessibility_connections" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        j)&nbsp;&nbsp;Provision of earthing / bonding labels at all appropriate locations:
                   </td>
                   <td>
                       (<x-form-toggle-value key="3.3_provision_appropriate" :data-form="$formData"/>)
                   </td>
                </tr>
            </table>

            <p style="font-size: 10px; margin: 0; padding-top: 5px">
              3.2&nbsp;&nbsp;FELV
            </p>

            <table style="font-size: 10px; padding-left:20px">
                <tr>
                    <td>
                        a)&nbsp;&nbsp;Source providing at least simple separation:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        b)&nbsp;&nbsp;Plugs, socket-outlets and the like not interchangeable
                        with those of other systems within the premises:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
            </table>

          </div>

          <div style="text-align: left;padding: 0 0 0 10px;border: 1px solid #00935f;float: left;width: 32.3%;">
            <table width="100%">
                <tr>
                    <td style="font-weight: bold">
                        4.&nbsp;&nbsp;Other methods of protection
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        Details should be provided on separate
                        sheets:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
            </table>

            <hr style="color: #00935f; font-weight: bold" />

            <ol style="margin: 0; font-weight: bold; width: 500px; font-size: 10px; padding-left:15px; "  start="5">
                <li>Distribution equipment</li>
            </ol>
            <table  style="font-size: 10px;">
                <tr>
                    <td>
                        5.1&nbsp;&nbsp;Adequacy of working space / accessibility of equipment:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.1_adequacy_board" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.2&nbsp;&nbsp;Security of fixing:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.2_security_fixing" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.3&nbsp;&nbsp;Condition of insulation of live  parts:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        5.4&nbsp;&nbsp;Adequacy / security of barriers:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        5.5&nbsp;&nbsp;Condition of enclosure(s) in terms of IP rating:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.3_condition_ip_rating" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.6&nbsp;&nbsp;Condition of enclosure(s) in terms of fire rating:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.4_condition_fire_rating" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.7&nbsp;&nbsp;Enclosure not damaged / deteriorated so as to impair safety:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.5_enclosure_safety" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.8&nbsp;&nbsp;Presence and effectiveness of obstacles:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        5.9&nbsp;&nbsp; Presence of main switch(es), linked where required:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.6_presence_switch" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.10&nbsp;&nbsp; Operation of main switch(es) (functional check):
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.6_presence_switch" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.11&nbsp;&nbsp; Correct identification of circuit protective  devices:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.9_correct_device" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.12&nbsp;&nbsp; Adequacy of protective devices for prospective fault current:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        5.13&nbsp;&nbsp; RCD(s) provided for fault protection – includes RCBOs:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.17_rcd_provided_for_fault" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.14&nbsp;&nbsp;RCD(s) provided for additional protection – includes RCBOs:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.18_rcd_provided_for_additional" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.15&nbsp;&nbsp; RCD(s) provided for protection against fire–includes RCBOs:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        5.16&nbsp;&nbsp; Manual operation of circuit-breakers and RCDs to prove disconnection:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        5.17&nbsp;&nbsp;Confirmation that integral test button/switch causes RCD(s) to trip when operated (functional check):
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        5.18&nbsp;&nbsp;Presence of RCD six-monthly retest notice at or near equipment, where required:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.10_presence_required" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.19&nbsp;&nbsp;Presence of diagrams, charts or schedules at or  near equipment where required:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        5.20&nbsp;&nbsp; Presence of non-standard (mixed) cable colour warning notices at or near equipment, where required:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        5.21&nbsp;&nbsp;Presence of next inspection recommendation label:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        5.23&nbsp;&nbsp; Compatibility of protective device(s), base(s)  and other components:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.13_compatibility_of_protective" :data-form="$formData"/>)
                   </td>
                </tr>
            </table>

          </div>

          <div style="text-align: left;padding: 0 0 0 10px;border: 1px solid #00935f;float: left;width: 31.7%;">
            <table>
                <tr>
                    <td>
                        5.24&nbsp;&nbsp; Single-pole switching or protective devices in line conductors  only:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.14_single_pole_switching" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.25&nbsp;&nbsp; Protection against mechanical damage where cables enter equipment:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.15_protection_against_mechanical" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        5.26&nbsp;&nbsp; Protection against electromagnetic effects where cables enter ferrromagnetic enclosures:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.16_protection_against_electromagnetic" :data-form="$formData"/>)
                   </td>
                </tr>
            </table>
            <hr style="color: #00935f; font-weight: bold"/>

            <ol style="margin: 0; font-weight: bold; width: 500px; font-size: 10px; padding-left:15px; "  start="6">
                <li>Distribution / final circuits</li>
            </ol>
            <table>
                <tr>
                    <td>
                        6.1&nbsp;&nbsp;Identification of conductors
                   </td>
                   <td>
                       (<x-form-toggle-value key="5.1_identification" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        6.2&nbsp;&nbsp;Cables correctly supported throughout their length:
                   </td>
                   <td>
                       (<x-form-toggle-value key="5.2_cables_correctly" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        6.3&nbsp;&nbsp;Condition of insulation of live parts:
                   </td>
                   <td>
                       (<x-form-toggle-value key="5.3_condition_live_parts" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        6.4&nbsp;&nbsp;Non-sheathed cables protected by enclosures  in conduit, ducting or trunking:
                   </td>
                   <td>
                       (<x-form-toggle-value key="5.4_non_sheathed_cables" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        6.5&nbsp;&nbsp;Suitability of containment systems for continued use (including flexible conduit):
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        6.6&nbsp;&nbsp; Cables correctly terminated in enclosures (indicate extent of sampling in PART 7 of report):
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        6.7&nbsp;&nbsp;Indication of SPD(s) continued functionality confirmed:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        6.8&nbsp;&nbsp; Adequacy of AFDD(s), where specified:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        6.9&nbsp;&nbsp;Confirmation that conductor connections,including connections to busbars are correctly located in terminals and are tight and  secure:
                   </td>
                   <td>
                       (<x-form-toggle-value key="4.20_confirmation_that_all_conductor" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        6.10&nbsp;&nbsp;Examination of cables for signs of unacceptable thermal and mechanical damage / deterioration:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        6.11&nbsp;&nbsp;Adequacy of cables for current-carrying capacity with regard to the type and nature of installation:
                   </td>
                   <td>
                       (<x-form-toggle-value key="5.5_adequacy_of_cables" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        6.12&nbsp;&nbsp;Adequacy of protective devices; type and rated current for fault protection:
                   </td>
                   <td>
                       (<x-form-toggle-value key="5.7_adequacy_of_protective" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        6.13&nbsp;&nbsp;Presence and adequacy of circuit protective conductors:
                   </td>
                   <td>
                       (<x-form-toggle-value key="5.8_presence_and_adequacy" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        6.14&nbsp;&nbsp;Co-ordination between conductors and overload protective devices:
                   </td>
                   <td>
                       (<x-form-toggle-value key="5.6_coordination" :data-form="$formData"/>)
                   </td>
                </tr>
                <tr>
                    <td>
                        6.15&nbsp;&nbsp;Cable installation methods / practices appropriate to the type and nature of installation and external influences:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        6.16&nbsp;&nbsp;Cables where exposed to direct sunlight, of a suitable type or adequatelyprotected against solar radiation:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
                <tr>
                    <td>
                        6.17&nbsp;&nbsp;Cables adequately protected  against damage and abrasion:
                   </td>
                   <td>
                       ()
                   </td>
                </tr>
            </table>

          </div>
      </div>

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

    </div>
  </body>
</html>
