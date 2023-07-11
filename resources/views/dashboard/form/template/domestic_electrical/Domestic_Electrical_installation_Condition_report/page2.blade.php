<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page 2</title>
    <style>
        @page {
            header: html_formHeader;
            footer: html_formFooter2;
            margin: 15px;
            margin-bottom:0mm;
            margin-top:15mm;
            margin-header:4mm;
            size: landscape; /* <length>{1,2} | auto | portrait | landscape */
            margin-footer:10mm;

        }
      body {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-size: 12px;
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
      ">

      <table
        width="100%"
        style="border: 1px solid #00935f; padding: 0; border-collapse: collapse; margin-bottom: 10px;"
        >
        <tr>
          <th bgcolor="#00935f"  style="padding-top: 10px; padding-bottom: 10px;text-align:left" >
            <div style="text-align: left; padding: 0 10px">
              <h3
                style="color: #fff; font-weight: bold; padding: 5px; margin: 0"
              >
                PART 5 : NEXT INSPECTION
              </h3>
            </div>
          </th>
        </tr>
        <tr>
          <td style="text-align: left; padding:5px 10px;">
            <p style="font-size: 10px;">
              I/We (as indicated on page 1) recommend, subject to the necessary
              remedial work being taken, this installation should be further
              inspected and tested after an interval of not more than
              @if (getvalue('recommendations_month_year_e',$formData) == 'months')
              {{   getvalue('recommendations_month_e',$formData) }} months* (delete as appropriate)
              @else
              {{   getvalue('recommendations_year_e',$formData) }} years* (delete as appropriate)
              @endif
            </p>
          </td>
        </tr>

        <tr>
          <td style="text-align: left; padding:5px 10px; ">
             <p style="font-size: 10px;">
              Give reason for recommendation:
             <span style="font-weight: bold"> {{   getvalue('reason_recommendations_e',$formData) }}</span>
            </p>
          </td>
        </tr>
      </table>

      <table
        width="100%"
        style="
          border: 1px solid #00935f;
          padding: 0;
          border-collapse: collapse;
          margin: 10px 0 0px;
        "
        >
        <tr>
          <th bgcolor="#00935f"  style="padding-top: 10px; padding-bottom: 10px;text-align:left" colspan="6">
            <div style="text-align: left; padding: 0 10px">
              <h3
                style="color: #fff; font-weight: bold; padding: 5px; margin: 0"
              >
                PART 6 : OBSERVATIONS AND RECOMMENDATIONS FOR ACTIONS TO BE
                TAKEN
              </h3>
            </div>
          </th>
        </tr>
        <tr style="border-bottom: 1px solid #00935f">
          <td style="text-align: left; padding: 0 10px;  border-bottom: 1px solid #00935f;">
            <h5 style="color: #00935f; font-weight: 900">CODES:</h5>
          </td>
          <td
            style="
              text-align: left;
              padding: 0 5px;
              border-bottom: 1px solid #00935f;
            "
          >
            <p style="font-size: 10px">
              One of the following Codes, as appropriate, has been allocated to
              each of the observations made below to indicate to the person(s)
              responsible for the electrical installation the degree of urgency
              for remedial action
            </p>
          </td>
          <td
            style="
              text-align: center;
              padding: 0 5px;
              border: 1px solid #00935f;
            "
          >
            <p style="font-size: 10px; font-weight: 900">
              CODE C1 ‘Danger Present’ Risk of injury. Immediate remedial action
              required
            </p>
          </td>
          <td
            style="
              text-align: center;
              padding: 0 5px;
              border: 1px solid #00935f;
            "
          >
            <p style="font-size: 10px; font-weight: 900">
              CODE C2 ‘Potentially Dangerous’ Urgent remedial action required
            </p>
          </td>
          <td
            style="
              text-align: center;
              padding: 0 5px;
              border: 1px solid #00935f;
            "
          >
            <p style="font-size: 10px; font-weight: 900">
              CODE C3 ‘Improvement Recommended’
            </p>
          </td>
          <td style="
              text-align: center;
              padding: 0 5px;
              border: 1px solid #00935f;
            ">
            <p style="font-size: 10px; font-weight: 900">
              CODE FI ‘Further Investigation Required’
            </p>
          </td>
        </tr>
        <tr>
          <td colspan="6" style="text-align: left; padding-top:5px; padding-bottom:15px">
            <h5 style="margin: 0; padding-top:10px; padding-bottom:10px">
              Referring to the Schedule of Items Inspected (see PART 10), the
              attached Schedule of Circuit Details and Test Results (see PART
              12), and subject to any agreed limitations listed in PART 7:
            </h5>
            <p style="font-size: 10px; margin: 0; padding-top:10px; padding-bottom:10px">
              There are no items adversely affecting electrical safety (....),
              OR The following observations and recommendations for action are
              made:
            </p>
          </td>
        </tr>
    </table>
        <table width="100%"
        style="
          border: 1px solid #00935f;
          padding: 5px 15px;
          border-collapse: collapse;
          margin: 0px 0px 10px ;
        ">
        <tr>
          <th style="text-align: center; padding: 0 10px">
            <p style="font-weight: 900; font-size: 12px">Item No</p>
          </th>
          <th></th>
          <th style="text-align: center; padding: 5px 10px" >
            <p style="font-weight: 900; font-size: 12px">Observation(s) </p>

          </th>
          <th></th>
          <th style="text-align: center; padding: 0 10px">
            <p style="font-weight: 900; font-size: 12px">Code</p>
          </th>
          <th style="text-align: center; padding: 0 10px">
            <p style="font-weight: 900; font-size: 12px">Location Reference</p>

          </th>
        </tr>
        @if (isset($formData['all_observation_data']))
            @foreach ($formData['all_observation_data'] as $item)
                <tr>
                    <td style="text-align: center;padding-top:5px; padding-bottom:0px;font-weight: bold; width:60px">
                        <span>{{ getvalue('id',$item)  }}<span/>
                    </td>
                    <td></td>
                    <td style="text-align: center; padding-top:5px; padding-bottom:0px;font-weight: bold; width:600px">
                        <span>
                        {{ getvalue('observation_details',$item)  }}
                        </span>
                    </td>
                    <td></td>
                    <td style="text-align: center; padding-top:5px; padding-bottom:0px;font-weight: bold; width:150px">
                        <span>{{ getvalue('observation_code',$item)   }}</span>

                    </td>
                    <td style="text-align: center; padding-top:5px; padding-bottom:0px">
                        <span>{{ getvalue('observation_location_reference',$item)  }}</span>
                    </td>
                </tr>
            @endforeach
        @endif
        <tr>
            <td style="text-align: center;padding-top:5px; padding-bottom:0px;font-weight: bold; width:60px">
              <span><span/>
            </td>
            <td></td>
            <td style="text-align: center; padding-top:5px; padding-bottom:0px;font-weight: bold; width:600px">
              <span>

              </span>
            </td>
            <td></td>
            <td style="text-align: center; padding-top:5px; padding-bottom:0px;font-weight: bold; width:150px">
              <span></span>

            </td>
            <td style="text-align: center; padding-top:5px; padding-bottom:0px">
              <span></span>
            </td>
          </tr>
        <tr>
            <td style="text-align: center;padding-top:5px; padding-bottom:0px;font-weight: bold; width:60px">
              <span><span/>
            </td>
            <td></td>
            <td style="text-align: center; padding-top:5px; padding-bottom:0px;font-weight: bold; width:600px">
              <span>

              </span>
            </td>
            <td></td>
            <td style="text-align: center; padding-top:5px; padding-bottom:0px;font-weight: bold; width:150px">
              <span></span>

            </td>
            <td style="text-align: center; padding-top:5px; padding-bottom:0px">
              <span></span>
            </td>
          </tr>
        <tr>
            <td style="text-align: center;padding-top:5px; padding-bottom:0px;font-weight: bold; width:60px">
              <span><span/>
            </td>
            <td></td>
            <td style="text-align: center; padding-top:5px; padding-bottom:0px;font-weight: bold; width:600px">
              <span>

              </span>
            </td>
            <td></td>
            <td style="text-align: center; padding-top:5px; padding-bottom:0px;font-weight: bold; width:150px">
              <span></span>

            </td>
            <td style="text-align: center; padding-top:5px; padding-bottom:0px">
              <span></span>
            </td>
          </tr>




        <tr>
          <td
            colspan="2"
            style="text-align: left; width: 150px; padding-top:10px; padding-bottom:10px"
          >
            <p>Additional pages? ()</p>
          </td>
          <td colspan="2" style="text-align: left">
            <p>State page numbers: ()</p>
          </td>
        </tr>
        <tr>
          <td style="text-align: left;padding-top:10px; padding-bottom:10px" colspan="7">
            <p>
              Immediate action required
              <span style="font-weight: 100">for items:</span>
              ()<span
                >&nbsp; &nbsp; &nbsp;</span
              >
              Improvement recommended
              <span style="font-weight: 100">for items:</span>
              ()
            </p>
          </td>
        </tr>
        <tr>
          <td style="text-align: left;padding-top:10px; padding-bottom:10px" colspan="7">
            <p>
              Urgent remedial action required
              <span style="font-weight: 100">for items:</span>
              ()<span
                >&nbsp; &nbsp; &nbsp;</span
              >
              Further investigation required<span style="font-weight: 100">
                for items:</span
              >
              ()
            </p>
          </td>
        </tr>
      </table>
      <p style="text-align: left; font-size: 12px; margin: 0">
        *The proposed date for the next inspection should take into
        consideration any legislative or licensing requirements and the
        frequency and quality of maintenance that the installation can
        reasonably be expected to receive during its intended life. The period
        should be agreed between relevant parties.
      </p>

    </div>
  </body>
</html>
