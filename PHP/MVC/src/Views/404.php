<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página no encontrada</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #ec4899;
            --dark: #0f0f23;
            --gray: #94a3b8;
            --radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', system-ui, sans-serif;
            background: linear-gradient(135deg, var(--dark) 0%, #1a1a3e 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .bg-gradient-1 {
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 70%);
            top: -200px;
            right: -200px;
            pointer-events: none;
        }

        .bg-gradient-2 {
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(236, 72, 153, 0.1) 0%, transparent 70%);
            bottom: -100px;
            left: -100px;
            pointer-events: none;
        }

        .container {
            text-align: center;
            color: white;
            max-width: 600px;
            padding: 2rem;
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .error-code {
            font-size: 10rem;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 1rem;
            letter-spacing: -0.05em;
        }

        .error-code span {
            display: inline-block;
            animation: bounce 2s infinite;
        }

        .error-code span:nth-child(2) {
            animation-delay: 0.1s;
        }

        .error-code span:nth-child(3) {
            animation-delay: 0.2s;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .message {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .btn-home {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--primary);
            color: white;
            padding: 1rem 2rem;
            border-radius: var(--radius);
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-home:hover {
            background: var(--secondary);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(99, 102, 241, 0.3);
        }

        @media (max-width: 768px) {
            .error-code {
                font-size: 6rem;
            }
            .title {
                font-size: 1.5rem;
            }
            .message {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1rem;
            }
            .error-code {
                font-size: 4.5rem;
            }
            .title {
                font-size: 1.25rem;
            }
            .message {
                font-size: 0.9rem;
                margin-bottom: 1.5rem;
            }
            .btn-home {
                padding: 0.75rem 1.5rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <div class="bg-gradient-1"></div>
    <div class="bg-gradient-2"></div>

    <div class="container">
        <div class="error-code">
            <span>4</span><span>0</span><span>4</span>
        </div>
        <h1 class="title">Página no encontrada</h1>
        <p class="message">
            Lo sentimos, la página que buscas no existe o ha sido movida.
        </p>
        <a href="?pagina=home" class="btn-home">
            <span>⌂</span> Volver al Inicio
        </a>
    </div>
</body>

</html>