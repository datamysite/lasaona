<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            background-color: #ffffff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            ba
        }
        .header img {
            max-width: 200px;
        }
        .header-title {
            font-size: 24px;
            font-weight: bold;
            color: #000000;
            margin-top: 30px;
        }
        .content {
            font-size: 16px;
            color: #000;
            line-height: 1.6;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
            color: #ffffff;
            background-color: #000000;
            padding: 12px 0px;
        }
        a {
            text-decoration: none;
            font-weight: 600;
            color: #FFC100;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div style="width:100%; background-color: #000000; padding: 10px;">
                
                <img src="{{URL::to('/')}}/public/images/logo-white-min.png" alt="LOL" />
            </div>
            <hr>
            <div class="header-title">New Enquiry Received!</div>
        </div>
        <div class="content">
            <p>Dear <strong>Team</strong>,</p>
            <p style="margin-bottom: 0;">
                Enquiry Details:
            </p>
            <p style="margin-top:0;">
                <strong>Name: </strong>{{$name}}<br>
                <strong>Email: </strong>{{$email}}<br>
                <strong>subject: </strong>{{$subject}}<br>
                <strong>Message:</strong><br>
                {{$description}}
            </p>
        </div>
        <div class="footer">
            &copy; {{date('Y')}} MeetLasaOna. All Rights Reserved.
        </div>
    </div>
</body>
</html>
