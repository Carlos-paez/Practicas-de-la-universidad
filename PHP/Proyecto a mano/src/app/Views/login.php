<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Login - EIS System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Public/css/login.css">
</head>
<body>
    <div class="form-container">
        <div style="text-align: center; margin-bottom: 2rem;">
            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #6366f1, #8b5cf6); border-radius: 20px; display: inline-flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 1rem; box-shadow: 0 8px 20px rgba(99,102,241,0.3);">
                ⚡
            </div>
            <h1 class="title">EIS System</h1>
            <p class="subtitle">Ingresa tus credenciales para continuar</p>
        </div>

        <?php if (isset($_GET['error'])): ?>
            <div class="error-message">
                ⚠️ Credenciales incorrectas. Por favor, intenta nuevamente.
            </div>
        <?php endif; ?>

        <form class="form" action="?pagina=login_validate" method="post">
            <div class="input-group">
                <label for="username">Usuario</label>
                <div class="input-wrapper">
                    <input type="text" name="username" id="username" placeholder="Ingresa tu usuario" required autofocus>
                </div>
            </div>

            <div class="input-group">
                <label for="password">Contraseña</label>
                <div class="input-wrapper">
                    <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña" required>
                </div>
            </div>

            <div class="forgot">
                <a href="#" onclick="return false;">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="sign">🚀 Iniciar Sesión</button>
        </form>

        <div class="social-message">
            <div class="line"></div>
            <p class="message">O continúa con</p>
            <div class="line"></div>
        </div>

        <div class="social-icons">
            <button type="button" class="icon" aria-label="Google" onclick="alert('Funcionalidad no disponible')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20">
                    <path fill="#4285F4" d="M32 16.1c0-1.3-.1-2.7-.4-3.9H16v7.4h9c-.4 2-1.6 3.7-3.3 4.8v4h5.4c3.1-2.9 4.9-7.1 4.9-12.3z"/>
                    <path fill="#34A853" d="M16 32c4.3 0 7.9-1.4 10.5-3.8l-5-3.9c-1.4.9-3.2 1.5-5.5 1.5-4.2 0-7.8-2.8-9.1-6.6H1.4v4.1C3.9 28.3 9.4 32 16 32z"/>
                    <path fill="#FBBC05" d="M6.9 19.2c-.3-.9-.5-1.8-.5-2.8s.2-1.9.5-2.8V9.5H1.4C.5 11.2 0 13.5 0 16s.5 4.8 1.4 6.5l5.5-4.3z"/>
                    <path fill="#EA4335" d="M16 6.3c2.3 0 4.3.8 5.9 2.3l4.4-4.4C23.9 1.8 20.3 0 16 0 9.4 0 3.9 3.7 1.4 9.5l5.5 4.3C8.2 9.1 11.8 6.3 16 6.3z"/>
                </svg>
            </button>
            <button type="button" class="icon" aria-label="GitHub" onclick="alert('Funcionalidad no disponible')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20">
                    <path fill="#1B1F23" d="M16 0C7.2 0 0 7.2 0 16c0 7.1 4.6 13.1 10.9 15.2.8.1 1.1-.3 1.1-.8v-2.8c-4.4 1-5.4-2.1-5.4-2.1-.7-1.9-1.8-2.4-1.8-2.4-1.5-1 .1-1 .1-1 1.6.1 2.5 1.7 2.5 1.7 1.4 2.4 3.7 1.7 4.7 1.3.1-.8.6-1.4 1-1.7-3.5-.4-7.2-1.8-7.2-7.8 0-1.7.6-3.1 1.6-4.2-.2-.4-.7-1.9.2-4 0 0 1.3-.4 4.3 1.6 1.2-.4 2.6-.5 4-.5s2.7.2 4 .5c3-2 4.3-1.6 4.3-1.6.9 2.1.3 3.6.2 4 1 1.1 1.6 2.5 1.6 4.2 0 6.1-3.7 7.4-7.2 7.8.6.5 1.1 1.5 1.1 3v4.4c0 .4.3.9 1.1.8C27.4 29.1 32 23.1 32 16c0-8.8-7.2-16-16-16z"/>
                </svg>
            </button>
        </div>

        <p class="signup">¿No tienes una cuenta? <a href="#" onclick="return false;">Regístrate</a></p>
    </div>
</body>
</html>
