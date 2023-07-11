<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
    <style>
        body{
            font-family: "Outfit";
        }
        .email-container{
            padding-left: 100px;
        }
        .logo{
            text-align: center;
            color: #787878;
            font-size: 40px;
            font-weight: bold;
        }
        .email-title{
            color: #172121;
            font-size: 20px;
            font-weight: 700;
        }
        .note{
            color: #646464;
            font-size: 16px;
        }
        .note span{
            color: #E88219;
        }
        .details{
            color: #242424;
            font-size: 16px;
        }
        .details-item{
            color: #7a7a7a;
            font-size: 16px;
        }
        .details-item span{
            color: #242424;
        }
        .view-certifecate{
            display: block;
            width: 190px;
            height: 64px;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border: 2px solid #E88219;
            color: #E88219;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin: 39px 0;
            text-decoration: none;
        }
        .name{
            color: #093358;
            font-size: 16px;
        }
        .footer{
            width: 100%;
            margin-top: 60px;
        }
        .footer img{
            width: 105px;
            margin-right: 50%;
        }
        .footer a{
           text-decoration: none;
           color: #3463D1;
        }
        .Certificate{
            color: #3463D1;
         }

         @media only screen and (max-width: 600px) {
        .email-container{
            padding-left: 20px;
            }
            .footer img{
            width: 105px;
            margin-right: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="logo">
            <h1>
                @if ($certificate->user->logo)
                    <img width="200px" src="{{ $certificate->user->logo->url }}" alt="">
                @endif
            </h1>
        </div>
        <div class="email-body">
            @php
            $site =  $certificate->customer->sites->first();
        @endphp
            <p class="email-title">Dear {{ $certificate->customer->name }},</p>
            <p class="note">Please see attached your certifcated for the <span>{{ $site->name }}</span> Property</p>
            <p class="details">Site Details:</p>

            <p class="details-item">Name : <span>{{ $site->name }}</span></p>
            <p class="details-item">Address :<span>{{ $site->street_num }}, {{ $site->city }}, {{ $site->postal_code }}</span></p>
            <a disable-tracking=true href="{{ route('view.certificate',[$certificate->customer_id,$certificate->id, strtotime($certificate->created_at)]) }}" class="view-certifecate">
                <p>
                   <img width="30px" src="{{ asset('email-certificate/cartificate.png') }}" alt="certificate img" />
                   View Certificate
                </p>
            </a>
            <p class="details">Kind Regards</p>
            <p class="name">{{ $certificate->user->name }}</p>
            <p class="details">Engineer</p>
            <p class="footer">
                <img src="{{ asset('email-certificate/360connect.png') }}" alt="360 connect logo" />
                <a style="float: right" href="#"><span class="Certificate">360 Connect Certificate</span></a>
                <div style="clear: both;"></div>
            </p>
        </div>
    </div>
</body>
</html>
