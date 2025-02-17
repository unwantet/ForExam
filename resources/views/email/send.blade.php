<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Tasdiqlash</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }
        .btn {
            display: inline-block;
            background: #007bff;
            color: #ffffff;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
        .btn:hover {
            background: #0056b3;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Salom, {{ $user_name }}!</h1>
        <p>Emailingizni tasdiqlash uchun quyidagi tugmani bosing:</p>
        <p>
            <a href="{{ $link }}" class="btn">Emailni tasdiqlash</a>
        </p>
        <p>Agar tugma ishlamasa, quyidagi URL manzilini brauzeringizga nusxalab joylashtiring:</p>
        <p><strong>{{ $link }}</strong></p>
        <p class="footer">Agar siz ushbu so‘rovni bajarmagan bo‘lsangiz, ushbu xabarni e'tiborsiz qoldiring.</p>
    </div>

</body>
</html>

