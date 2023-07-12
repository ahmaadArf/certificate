
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Complete</title>
</head>
<body style="background: #eee; font-family: Arial, Helvetica, sans-serif">

    <div style="width: 600px; margin: 40px auto; background: #fff; border: 2px solid #d6d6d6; padding: 20px">
        <h4>Hi {{ $userName }}, I Hope this email find you will</h4>
        <h5>Register Complete</h5>
        <p>free Period is start now to 7 Day!</p>
        <br>

        <p>To Show Palns with this information:
        <a href="{{ route('plans.index') }}" disable-tracking=true
            style=" margin:0px auto; text-decoration: none; text-align: center; padding: 10px;background: #218BF4;color:
            #fff;display: inline-block; width: 150px;border-radius: 4px;border:none;font-size:
            14px;line-height: 16px;">Click Here</a></p>
        {{-- <p>To Show Palns with this information:  <a  href="{{ route('plans.index') }}">Click Here</a></p> --}}
        <p>To Upgrate Your Account:  <a  href="{{ route('plans.index') }}" disable-tracking=true
            style=" margin:0px auto; text-decoration: none; text-align: center; padding: 10px;background: #218BF4;color:
            #fff;display: inline-block; width: 150px;border-radius: 4px;border:none;font-size:
            14px;line-height: 16px;">Click Here</a></p>


        <p>Best Regards</p>
    </div>

</body>
</html>
