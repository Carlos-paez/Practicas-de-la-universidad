<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --dark: #0f0f23;
            --dark-secondary: #1e1e3f;
            --light: #f8fafc;
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
            background: linear-gradient(135deg, var(--dark) 0%, var(--dark-secondary) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .menu-card {
            background: white;
            border-radius: var(--radius);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .menu-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .menu-logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), #ec4899);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.75rem;
            color: white;
        }

        .menu-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark);
        }

        .menu-subtitle {
            color: var(--gray);
            font-size: 0.9rem;
            margin-top: 0.25rem;
        }

        .menu-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .menu-item {
            position: relative;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 1.25rem;
            background: var(--light);
            border-radius: var(--radius);
            color: var(--dark);
            font-weight: 500;
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .menu-link:hover {
            background: var(--primary);
            color: white;
            transform: translateX(4px);
        }

        .menu-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        .menu-arrow {
            margin-left: auto;
            opacity: 0;
            transition: all 0.2s ease;
        }

        .menu-link:hover .menu-arrow {
            opacity: 1;
            transform: translateX(4px);
        }

        .menu-footer {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
        }

        .menu-user {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            color: var(--gray);
            font-size: 0.875rem;
        }

        .menu-avatar {
            width: 32px;
            height: 32px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.8rem;
        }

        @media (max-width: 480px) {
            body {
                padding: 1rem;
            }
            .menu-card {
                padding: 1.5rem;
            }
            .menu-logo {
                width: 48px;
                height: 48px;
                font-size: 1.5rem;
            }
            .menu-title {
                font-size: 1.25rem;
            }
            .menu-link {
                padding: 0.875rem 1rem;
            }
        }

        @media (max-width: 360px) {
            .menu-card {
                padding: 1.25rem;
            }
            .menu-list {
                gap: 0.5rem;
            }
            .menu-link {
                padding: 0.75rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <div class="menu-card">
        <div class="menu-header">
            <div class="menu-logo">◆</div>
            <h1 class="menu-title">Menú Principal</h1>
            <p class="menu-subtitle">Selecciona una opción</p>
        </div>

        <ul class="menu-list">
            <li class="menu-item">
                <a href="?pagina=home" class="menu-link">
                    <span class="menu-icon">⌂</span>
                    Inicio
                    <span class="menu-arrow">→</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="?pagina=productos" class="menu-link">
                    <span class="menu-icon">◫</span>
                    Productos
                    <span class="menu-arrow">→</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="?pagina=clientes" class="menu-link">
                    <span class="menu-icon">⊛</span>
                    Clientes
                    <span class="menu-arrow">→</span>
                </a>
            </li>
            <li class="menu-item">
                <a href="?pagina=login" class="menu-link">
                    <span class="menu-icon">⇌</span>
                    Login
                    <span class="menu-arrow">→</span>
                </a>
            </li>
        </ul>

        <div class="menu-footer">
            <div class="menu-user">
                <span class="menu-avatar">A</span>
                admin
            </div>
        </div>
    </div>
</body>

</html>