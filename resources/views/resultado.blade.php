<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #ffe6f0, #f8b9d4, #f3d4e5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 520px;
            background: white;
            padding: 45px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 18px 45px rgba(153, 64, 104, 0.25);
        }

        h1 {
            color: #c94f87;
            font-size: 28px;
            margin-bottom: 25px;
        }

        a {
            display: inline-block;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 25px;
            background: linear-gradient(135deg, #d95f9a, #f08ab8);
            color: white;
            font-weight: bold;
            box-shadow: 0 8px 18px rgba(217, 95, 154, 0.35);
            transition: 0.3s;
        }

        a:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, #c94f87, #e879ad);
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>{{ $mensaje }}</h1>
        <a href="/">Volver al formulario</a>
    </div>

</body>
</html>