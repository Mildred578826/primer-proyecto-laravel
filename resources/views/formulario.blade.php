<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de usuario</title>

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
            overflow: hidden;
        }

        .background-circle {
            position: absolute;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.35);
            top: -120px;
            left: -120px;
        }

        .background-circle-two {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.25);
            bottom: -180px;
            right: -150px;
        }

        .card {
            width: 850px;
            min-height: 480px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 18px 45px rgba(153, 64, 104, 0.25);
            display: flex;
            overflow: hidden;
            position: relative;
            z-index: 2;
        }

        .left {
            width: 50%;
            padding: 45px 55px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo {
            position: absolute;
            top: 25px;
            left: 35px;
            color: #c94f87;
            font-weight: bold;
            font-size: 18px;
        }

        .nav {
            position: absolute;
            top: 28px;
            right: 40px;
            font-size: 13px;
            color: #8b5b70;
        }

        .nav span {
            margin-left: 20px;
        }

        h1 {
            color: #c94f87;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #9b7284;
            font-size: 14px;
            margin-bottom: 32px;
        }

        label {
            color: #8a4566;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 7px;
            display: block;
        }

        .input-group {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 13px 15px;
            border: none;
            outline: none;
            background: #fff1f7;
            border-radius: 25px;
            color: #7a3b58;
            box-shadow: inset 0 0 0 1px #f4bad3;
            transition: 0.3s;
        }

        input:focus {
            box-shadow: inset 0 0 0 2px #d95f9a;
            background: #fff7fb;
        }

        button {
            width: 150px;
            padding: 12px;
            border: none;
            border-radius: 25px;
            background: linear-gradient(135deg, #d95f9a, #f08ab8);
            color: white;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 8px 18px rgba(217, 95, 154, 0.35);
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, #c94f87, #e879ad);
        }

        .right {
            width: 50%;
            background: linear-gradient(135deg, #f7a8c8, #f4c2d8);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .circle-big {
            position: absolute;
            width: 430px;
            height: 430px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.20);
            right: -120px;
        }

        .circle-medium {
            position: absolute;
            width: 310px;
            height: 310px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.25);
            right: -60px;
        }

        .illustration {
            position: relative;
            z-index: 3;
            text-align: center;
            color: white;
        }

        .laptop {
            width: 210px;
            height: 130px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(130, 55, 90, 0.25);
            position: relative;
            margin: auto;
        }

        .screen {
            width: 160px;
            height: 90px;
            background: #fff1f7;
            border: 8px solid #8a4566;
            border-radius: 8px;
            position: absolute;
            left: 25px;
            top: 15px;
        }

        .keyboard {
            width: 240px;
            height: 35px;
            background: #8a4566;
            border-radius: 0 0 18px 18px;
            margin: auto;
            margin-top: -3px;
        }

        .plant {
            width: 55px;
            height: 80px;
            background: #ffffff;
            border-radius: 0 0 18px 18px;
            position: absolute;
            right: 60px;
            bottom: 110px;
            box-shadow: 0 8px 15px rgba(130, 55, 90, 0.18);
        }

        .plant::before {
            content: "✦";
            position: absolute;
            top: -38px;
            left: 12px;
            font-size: 42px;
            color: #c94f87;
        }

        .info-text {
            margin-top: 35px;
            font-size: 18px;
            font-weight: bold;
        }

        .small-text {
            margin-top: 8px;
            font-size: 13px;
            opacity: 0.9;
        }

        @media (max-width: 850px) {
            .card {
                width: 90%;
                flex-direction: column;
            }

            .left, .right {
                width: 100%;
            }

            .right {
                min-height: 280px;
            }

            .nav {
                display: none;
            }
        }
    </style>
</head>
<body>

    <div class="background-circle"></div>
    <div class="background-circle-two"></div>

    <div class="card">
        <div class="logo">Laravel</div>

        <div class="nav">
            <span>Inicio</span>
            <span>Formulario</span>
            <span>Práctica 1</span>
        </div>

        <div class="left">
            <h1>Registro</h1>
            <p class="subtitle">Ingresa tus datos para verificar tu edad.</p>

            <form method="POST" action="/procesar">
                @csrf

                <div class="input-group">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" placeholder="Escribe tu nombre" required>
                </div>

                <div class="input-group">
                    <label>Edad:</label>
                    <input type="number" name="edad" placeholder="Escribe tu edad" required>
                </div>

                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="right">
            <div class="circle-big"></div>
            <div class="circle-medium"></div>

            <div class="illustration">
                <div class="laptop">
                    <div class="screen"></div>
                </div>
                <div class="keyboard"></div>
                <div class="plant"></div>

                <p class="info-text">Primer proyecto Laravel</p>
                <p class="small-text">Formulario con Blade, rutas y método POST</p>
            </div>
        </div>
    </div>

</body>
</html>