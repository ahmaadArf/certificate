<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('email-verification/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('email-verification/css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Verified Email</title>
</head>

<body>

    <section class="main-section overflow-auto">

        <div class="all-box-section">

            <div class="email-icon pt-5">
                <img src="{{asset('email-verification/image/emai_icon.svg')}}">
             </div>

             <div class="content-container">
                <div class="text-titl mt-4 mb-3">
                 Verified !
                </div>

                <div class="small-text mb-4">
                 your account has been verified
                </div>

                <div class="button-space">
                  {{-- <a href="{{route('home')}}" class="btn">Go to dashbaord</a> --}}
                </div>

                <div class="last-text">
                    <small>Best Regards</small>
                </div>

                <div class="bottom-logo">
                    <img width="170px" src="{{asset('assets/img/logo.svg')}}">
                </div>
             </div>
        </div>




    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{asset('email-verification/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
