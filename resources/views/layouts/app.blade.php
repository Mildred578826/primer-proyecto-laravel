<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Perfil</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background:
                radial-gradient(circle at top left, #d8c7ff 0, transparent 32%),
                radial-gradient(circle at bottom right, #b8e7ff 0, transparent 30%),
                linear-gradient(135deg, #f7f5ff, #eef8ff);
            color: #2f2d4a;
        }

        .layout {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 260px 1fr;
        }

        aside {
            background: linear-gradient(180deg, #5b4b8a, #362d59);
            color: white;
            padding: 35px 25px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .brand h1 {
            font-size: 26px;
            margin-bottom: 8px;
        }

        .brand p {
            font-size: 14px;
            opacity: 0.8;
        }

        .menu {
            margin-top: 45px;
        }

        .menu-item {
            background: rgba(255, 255, 255, 0.12);
            padding: 14px 16px;
            border-radius: 16px;
            margin-bottom: 14px;
            font-size: 15px;
        }

        .footer-side {
            font-size: 13px;
            opacity: 0.75;
        }

        .contenido {
            padding: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .panel {
            width: 100%;
            max-width: 850px;
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(12px);
            border-radius: 28px;
            box-shadow: 0 20px 55px rgba(70, 60, 120, 0.18);
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.8);
        }

        .panel-header {
            padding: 30px 36px;
            background: linear-gradient(135deg, #ffffff, #f1ecff);
            border-bottom: 1px solid #e7defc;
        }

        .panel-header h2 {
            color: #4f3d7a;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .panel-header p {
            color: #746b91;
            font-size: 15px;
        }

        .panel-body {
            padding: 36px;
        }

        label {
            display: block;
            color: #4f3d7a;
            font-weight: 700;
            margin-bottom: 8px;
            font-size: 14px;
        }

        input, select {
            width: 100%;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid #d7cef4;
            background: #ffffff;
            color: #2f2d4a;
            outline: none;
            margin-bottom: 20px;
            transition: 0.25s;
        }

        input:focus, select:focus {
            border-color: #7d67c8;
            box-shadow: 0 0 0 4px rgba(125, 103, 200, 0.13);
        }

        button, .boton {
            display: inline-block;
            border: none;
            text-decoration: none;
            padding: 14px 30px;
            border-radius: 14px;
            background: linear-gradient(135deg, #6c5ce7, #8e7cff);
            color: white;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 12px 25px rgba(108, 92, 231, 0.28);
            transition: 0.25s;
        }

        button:hover, .boton:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(108, 92, 231, 0.35);
        }

        .errores {
            background: #fff0f3;
            color: #a54057;
            border-left: 5px solid #e85d75;
            padding: 16px 20px;
            border-radius: 14px;
            margin-bottom: 24px;
        }

        .errores ul {
            margin-top: 8px;
            padding-left: 20px;
        }

        .grid-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0 22px;
        }

        .campo-completo {
            grid-column: 1 / 3;
        }

        .perfil-card {
            display: grid;
            grid-template-columns: 230px 1fr;
            gap: 30px;
            align-items: center;
        }

        .perfil-left {
            background: linear-gradient(160deg, #6c5ce7, #9b8cff);
            border-radius: 24px;
            min-height: 300px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .avatar {
            width: 115px;
            height: 115px;
            border-radius: 50%;
            background: white;
            color: #6c5ce7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 18px;
            box-shadow: 0 14px 30px rgba(0,0,0,0.18);
        }

        .perfil-left p {
            opacity: 0.88;
            font-size: 14px;
        }

        .dato {
            background: #f7f4ff;
            border: 1px solid #e5ddff;
            border-radius: 16px;
            padding: 17px 20px;
            margin-bottom: 15px;
        }

        .dato span {
            display: block;
            font-size: 13px;
            color: #7a719a;
            margin-bottom: 5px;
        }

        .dato strong {
            font-size: 18px;
            color: #4f3d7a;
        }

        .mensaje {
            margin: 20px 0;
            padding: 18px 20px;
            border-radius: 16px;
            background: #eaf8ff;
            color: #27657e;
            font-size: 20px;
            text-align: center;
        }

        @media (max-width: 850px) {
            .layout {
                grid-template-columns: 1fr;
            }

            aside {
                display: none;
            }

            .contenido {
                padding: 25px;
            }

            .grid-form {
                grid-template-columns: 1fr;
            }

            .campo-completo {
                grid-column: auto;
            }

            .perfil-card {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <div class="layout">
        <aside>
            <div>
                <div class="brand">
                    <h1>Mini Perfil</h1>
                    <p>Práctica 2 de Laravel</p>
                </div>

                <div class="menu">
                    <div class="menu-item">Rutas GET y POST</div>
                    <div class="menu-item">Controlador</div>
                    <div class="menu-item">Validación</div>
                    <div class="menu-item">Vistas Blade</div>
                </div>
            </div>

            <div class="footer-side">
                Laravel + Blade + CSS
            </div>
        </aside>

        <section class="contenido">
            <div class="panel">
                @yield('contenido')
            </div>
        </section>
    </div>

</body>
</html>