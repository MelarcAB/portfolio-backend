<!DOCTYPE html>
<html>

<head>
    <title>Mensaje de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #555555;
            background-color: #f5f5f5;
            margin: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333333;
            font-size: 24px;
        }

        p {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Mensaje de {{ $name }}</h1>
        <hr>
        <div class="content">
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Mensaje:</strong> {{ $message }}</p>
        </div>
        <div class="footer">
            <p>Este es un mensaje automático, por favor no responder directamente a este correo.</p>
        </div>
    </div>
</body>

</html>
