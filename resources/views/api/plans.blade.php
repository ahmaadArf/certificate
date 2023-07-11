

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plans</title>
</head>
<body style="background: #eee; font-family: Arial, Helvetica, sans-serif">

    <div style="width: 600px; margin: 40px auto; background: #fff; border: 2px solid #d6d6d6; padding: 20px">

        <h1>Plans</h1>

            @foreach ($plans as $plane)
            <p><b>Name:</b> <span style="color: rgb(48, 48, 48)">{{ $plane->name }}</span></p>
            <p><b>Stripe Plan:</b> <span style="color: rgb(48, 48, 48)"> {{ $plane->stripe_plan }}</span> </p>
            <p><b>Price:</b> <span style="color: rgb(48, 48, 48)"> {{ $plane->price}}</span> </p>
            <p><b>Interval:</b> <span style="color: rgb(48, 48, 48)"> {{ $plane->interval }}</span> </p>
            <br>
            @endforeach
    </div>

</body>
</html>
