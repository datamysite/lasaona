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
        }
        .header img {
            max-width: 150px;
        }
        .header-title {
            font-size: 24px;
            font-weight: bold;
            color: #084c47;
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
            background-color: #084c47;
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
            <div style="width:100%; background-color: #084c47; padding: 10px;">
                <img src="{{URL::to('/')}}/public/images/kj-logo.png" alt="LOL" height="45px" style="margin-top: 10px;" />
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <img src="{{URL::to('/')}}/public/images/lol-logo.png" alt="LOL" height="55px" />
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <img src="{{URL::to('/')}}/public/images/lol-j-logo.png" alt="LOL" height="50px" />
            </div>
            <hr>
            <div class="header-title">Thank You for Contacting Us!</div>
        </div>
        <div class="content">
            <p>Dear <strong>{{$name}}</strong>,</p>
            <p>Thank you for contacting us! We truly appreciate your interest and are excited to assist you.</p>
            <p>A member of our team will review your inquiry and get back to you shortly. In the meantime, feel free to reach out if you have any urgent questions.</p>
            <p>Here are our contact details for your reference:</p>
            <p style="margin-top: 0;">📧 <strong>Email:</strong> <a href="mailto:askforkasturi@letsoffleash.com">askforkasturi@letsoffleash.com</a></p>
            <p>We look forward to connecting with you!</p>
            <p>You can also have a look at our services here: <a href="https://letsoffleash.com/">Letsoffleash.com</a></p>
        </div>
        <div class="footer">
            &copy; {{date('Y')}} Letsoffleash. All Rights Reserved.
        </div>
    </div>
</body>
</html>
