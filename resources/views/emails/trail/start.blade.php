<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remaining Day Of Trail</title>
</head>

<body style="background-color:#F3F3F4;margin:50px 0px;">
<table
    style="max-width:996px;width: 100%;margin:auto;font-family: Arial, Helvetica, sans-serif;background-color: #fff;border-radius:24px;">
    <tr style="height: 20px;margin: 0px;padding: 0px;">
        <td></td>
    </tr>
    <tr>
       <td style="text-align: center;"><img style="max-width: 250px;" src="{{ asset('email-certificate/360connect.png') }}" alt="logo"></td>
    </tr>
    <tr style="height: 30px;margin: 0px;padding: 0px;">
        <td></td>
    </tr>
    <tr style="height: 30px;margin: 0px;padding: 0px;">
        <p style="padding:0px 20px;margin:0px; font-size: 14px; color: #05224C">
            Your trial period is ending soon.
            You have   {{ $remainingDays }} days remaining in your trial period.
            Thank you for using our application!
            
        </p>
    </tr>
    
    <tr style="height: 30px;margin: 0px;padding: 0px;">
        <td></td>
    </tr>
    <tr>

        <td style="display:flex; justify-content: center; align-items:center; margin:0px auto;">
            <a href="{{ route('plans') }}" disable-tracking=true
                style=" margin:0px auto; text-decoration: none; text-align: center; padding: 10px;background: #218BF4;color: #fff;display: inline-block; width: 150px;border-radius: 4px;border:none;font-size: 14px;line-height: 16px;">
               Upgrade Plan
            </a>
        </td>
    </tr>
   
    <tr>
        <td>
            <p style="padding:0px 20px;margin:0px; font-size: 14px; color: #05224C">
                If you're having trouble clicking the "Upgrade Plan" button,
                copy and paste the URL below into your web browser:
                 <a disable-tracking=true href="{{route('plans') }}">{{route('plans')  }}</a>
            </p>

        </td>
    </tr>
    <tr>
        <td>
            <p
                style="text-align: center;font-size: 14px;line-height: 16px;max-width: 820px;margin: auto;color:#92A1B1">
                Best Regards</p>
        </td>
    </tr>
    <tr style="height: 20px;margin: 0px;padding: 0px;">
        <td></td>
    </tr>
</table>

</body>

</html>
