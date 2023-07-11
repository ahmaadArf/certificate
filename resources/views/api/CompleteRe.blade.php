
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
        <p>Hi {{ $userName }}, I Hope this email find you will</p>
        <p>Register Complete  and free period is start!</p>
        <br>
        <p>To Show Palns with this information:</p>
        <a  href="{{ route('plans.index') }}">Click Here</a>

        <p>Best Regards</p>
    </div>

</body>
</html>
