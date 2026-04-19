<?php
if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
    $user = "admin";
    $pass = "admin";
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if ($usuario == $user && $password == $pass) {
        $_SESSION["usuario"] = $usuario;
        header("Location: ?pagina=home");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --dark: #0f0f23;
            --dark-secondary: #1e1e3f;
            --gray: #94a3b8;
            --light: #f8fafc;
            --radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', system-ui, sans-serif;
            background: linear-gradient(135deg, var(--dark) 0%, var(--dark-secondary) 50%, #2d1f69 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 70%);
            top: -200px;
            right: -200px;
            pointer-events: none;
        }

        body::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(236, 72, 153, 0.1) 0%, transparent 70%);
            bottom: -100px;
            left: -100px;
            pointer-events: none;
        }

        .login-card {
            background: white;
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            position: relative;
            z-index: 1;
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), #ec4899);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            color: white;
            margin: 0 auto 1.5rem;
        }

        .login-title {
            font-size: 1.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .login-subtitle {
            color: var(--gray);
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark);
            font-size: 0.9rem;
        }

        .form-control {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: var(--radius);
            font-size: 1rem;
            transition: all 0.2s ease;
            background: var(--light);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.875rem 1.5rem;
            border: none;
            border-radius: var(--radius);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
            width: 100%;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }

        .login-footer {
            text-align: center;
            margin-top: 1.5rem;
            color: var(--gray);
            font-size: 0.8rem;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 1.5rem;
                margin: 1rem;
            }
            .login-logo {
                width: 48px;
                height: 48px;
                font-size: 1.5rem;
            }
            .login-title {
                font-size: 1.25rem;
            }
            .login-subtitle {
                font-size: 0.9rem;
            }
            .form-control {
                padding: 0.75rem;
                font-size: 0.95rem;
            }
            .btn {
                padding: 0.75rem 1rem;
            }
        }

        @media (max-width: 360px) {
            .login-card {
                padding: 1.25rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-card">
        <div class="login-logo">◆</div>
        <h1 class="login-title">Bienvenido</h1>
        <p class="login-subtitle">Ingresa tus credenciales</p>
        <form action="?pagina=login" method="post">
            <div class="form-group">
                <label class="form-label" for="usuario">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="admin" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
        <div class="login-footer">
            <small>Usuario: admin | Contraseña: admin</small>
        </div>
    </div>
</body>

</html>