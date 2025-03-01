<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Verify Your Email Address</title>
</head>
<style>
    body {
        font-family: sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #333;
    }
    p {
        color: #666;
    }
    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #ffffff;
        text-decoration: none;
        border-radius: 5px;
    }
    .button:hover {
        background-color: #0056b3;
    }
    .footer {
        margin-top: 20px;
        text-align: center;
        color: #999;
        font-size: 14px;
    }
    .verify-link {
        word-break: break-all;
    }
</style>
<body>
    <div class="container">
        <h1>Welcome to Socyty!</h1>
        <p>Thank you for registering with Socyty. We're excited to have you join our community!</p>
        <p>To complete your registration and activate your account, please verify your email address by clicking the button below:</p>
        <p><a href="{{ $url }}" class="button">Verify Email Address</a></p>
        <p>If the button above doesn't work, you can also copy and paste the following link into your browser:</p>
        <p><a href="{{ $url }}" class="verify-link">{{ $url }}</a></p>
        <p>Once your email is verified, you'll have full access to all the features of Socyty.</p>
        <p>If you didn't register for an account, please ignore this email.</p>
        <div class="footer">
            <p>This is an automated email. Please do not reply directly to this message.</p>
            <p>&copy; 2025. All rights reserved.</p>
        </div>
    </div>
</body>
</html>

