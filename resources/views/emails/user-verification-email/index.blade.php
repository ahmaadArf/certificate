<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
</head>

<body style="background-color:#F3F3F4;margin:50px 0px;">
<table
    style="max-width:996px;width: 100%;margin:auto;font-family: Arial, Helvetica, sans-serif;background-color: #fff;border-radius:24px;">
    <tr style="height: 20px;margin: 0px;padding: 0px;">
        <td></td>
    </tr>
    <tr>
       <td style="text-align: center;"><img style="max-width: 250px;" src="{{asset('assets/img/envelop.png')}}" alt="logo"></td>
    </tr>
    <tr style="height: 30px;margin: 0px;padding: 0px;">
        <td></td>
    </tr>
    <tr>
        <td>
            <h3 style="color: #05224C;text-align: center;font-size: 32px;line-height: 36px;margin: 0px;">Verify your email address
            </h3>
        </td>
    </tr>
    <tr style="height: 30px;margin: 0px;padding: 0px;">
        <td></td>
    </tr>
    <tr>
        <td>
            <p
                style="letter-spacing: 0.54px;text-align: center;font-size: 18px;line-height: 30px;max-width: 820px;margin: auto;color: #172121;">
                you've
                entered <b>{{$user->email}}</b> as the email address for your account, please verify this email address
                by clicking button below</p>
        </td>
    </tr>
    <tr style="height: 30px;margin: 0px;padding: 0px;">
        <td></td>
    </tr>
    <tr>

        <td style="display:flex; justify-content: center; align-items:center; margin:0px auto;">
            <a href="{{$url}}" disable-tracking=true
                style=" margin:0px auto; text-decoration: none; text-align: center; padding: 10px;background: #218BF4;color: #fff;display: inline-block; width: 150px;border-radius: 4px;border:none;font-size: 14px;line-height: 16px;">Verify
                your email</a>
        </td>
    </tr>
    <tr style="height: 30px;margin: 0px;padding: 0px;">
        <td></td>
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
<table style="max-width:996px;width: 100%;margin:auto;">
    <tr style="height: 40px;margin: 0px;padding: 0px;">
        <td></td>
    </tr>
    <tr>
       <td style="text-align: center;">
        <img style="max-width: 200px;" src="{{asset('assets/img/logo.png')}}" alt="logo">
    </td>
    </tr>
</table>
</body>

</html>
