<?php
    ini_set('display_errors', '0');
    require_once __DIR__ . '/../Controlers/controler.php';

    if (isset($_GET["logout"])) {
        session_destroy();
        header("Location: ?pagina=login");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --secondary: #ec4899;
            --dark: #0f0f23;
            --dark-secondary: #1e1e3f;
            --gray: #94a3b8;
            --gray-light: #cbd5e1;
            --light: #f8fafc;
            --success: #10b981;
            --sidebar-width: 260px;
            --radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', system-ui, sans-serif;
            background: linear-gradient(135deg, #f0f4ff 0%, #e0e7ff 100%);
            min-height: 100vh;
            color: var(--dark);
        }

        .app-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: var(--sidebar-width);
            background: var(--dark);
            padding: 0;
            position: fixed;
            height: 100vh;
            display: flex;
            flex-direction: column;
            z-index: 100;
        }

        .sidebar-brand {
            color: white;
            font-size: 1.4rem;
            font-weight: 700;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .brand-icon {
            color: var(--primary);
            font-size: 1.5rem;
        }

        .sidebar-nav {
            flex: 1;
            padding: 1rem 0.75rem;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 0.875rem;
            padding: 0.875rem 1rem;
            color: rgba(255,255,255,0.6);
            border-radius: var(--radius);
            transition: all 0.2s ease;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .sidebar-nav a:hover {
            background: rgba(255,255,255,0.05);
            color: white;
        }

        .sidebar-nav a.active {
            background: var(--primary);
            color: white;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }

        .sidebar-logout {
            margin: 1rem;
            padding: 0.875rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            background: rgba(239, 68, 68, 0.1);
            color: #fca5a5;
            border-radius: var(--radius);
            transition: all 0.2s ease;
            font-size: 0.9rem;
            font-weight: 500;
            border: 1px solid rgba(239, 68, 68, 0.2);
            text-decoration: none;
        }

        .sidebar-logout:hover {
            background: rgba(239, 68, 68, 0.2);
            color: white;
        }

        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            min-height: 100vh;
        }

        .top-bar {
            background: white;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark);
        }

        .user-badge {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .content-area {
            padding: 2rem;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.25rem;
            background: white;
            border-radius: var(--radius);
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .user-avatar-lg {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 1.25rem;
        }

        .user-details h3 {
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: var(--dark);
        }

        .user-details p {
            color: var(--gray);
            font-size: 0.875rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: var(--radius);
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            background: rgba(99, 102, 241, 0.1);
            border-radius: var(--radius);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .stat-value {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--dark);
        }

        .stat-label {
            color: var(--gray);
            font-size: 0.875rem;
        }

        .card {
            background: white;
            border-radius: var(--radius);
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            margin-bottom: 1.5rem;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .card p {
            color: var(--gray);
        }

        .menu-toggle {
            display: none;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
            background: var(--light);
            border-radius: var(--radius);
            cursor: pointer;
            font-size: 1.25rem;
            color: var(--dark);
        }

        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 99;
        }

        @media (max-width: 1024px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: flex;
            }

            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .sidebar-overlay.open {
                display: block;
            }

            .main-content {
                margin-left: 0;
            }

            .top-bar {
                padding: 1rem;
            }

            .content-area {
                padding: 1rem;
            }

            .user-info {
                flex-direction: column;
                text-align: center;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
                gap: 0.75rem;
            }

            .stat-card {
                padding: 1rem;
            }

            .stat-icon {
                width: 40px;
                height: 40px;
                font-size: 1.25rem;
            }

            .stat-value {
                font-size: 1.25rem;
            }

            .page-title {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .top-bar {
                flex-wrap: wrap;
                gap: 0.5rem;
            }

            .page-title {
                font-size: 1.1rem;
            }
        }
    </style>
</head>

<body>
    <div class="app-container">
        <aside class="sidebar">
            <div class="sidebar-brand">
                <span class="brand-icon">◆</span>
                Mi App
            </div>
            <nav class="sidebar-nav">
                <a href="?pagina=home" class="active">⌂ Inicio</a>
                <a href="?pagina=productos">◫ Productos</a>
                <a href="?pagina=clientes">⊛ Clientes</a>
            </nav>
            <a href="?pagina=login&logout=1" class="sidebar-logout">⇪ Cerrar Sesión</a>
        </aside>

        <main class="main-content">
            <header class="top-bar">
                <button class="menu-toggle" onclick="toggleSidebar()">☰</button>
                <h1 class="page-title">Panel de Control</h1>
                <div class="user-badge">
                    <span class="user-avatar"><?php echo strtoupper($_SESSION["usuario"][0]); ?></span>
                </div>
            </header>
            <div class="sidebar-overlay" onclick="toggleSidebar()"></div>

            <div class="content-area">
                <div class="user-info">
                    <div class="user-avatar-lg"><?php echo strtoupper($_SESSION["usuario"][0]); ?></div>
                    <div class="user-details">
                        <h3><?php vista(); ?></h3>
                        <p>Bienvenido de vuelta</p>
                    </div>
                </div>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">◫</div>
                        <div class="stat-value">124</div>
                        <div class="stat-label">Productos</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">⊛</div>
                        <div class="stat-value">48</div>
                        <div class="stat-label">Clientes</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">✓</div>
                        <div class="stat-value">89</div>
                        <div class="stat-label">Pedidos</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">$</div>
                        <div class="stat-value">$12,450</div>
                        <div class="stat-label">Ventas</div>
                    </div>
                </div>

                <div class="card">
                    <h2 class="card-title">Bienvenido, <?php echo htmlspecialchars($_SESSION["usuario"]); ?></h2>
                    <p>Selecciona una opción del menú para comenzar a gestionar tu aplicación.</p>
                </div>
            </div>
        </main>
    </div>
</body>

<script>
function toggleSidebar() {
    document.querySelector('.sidebar').classList.toggle('open');
    document.querySelector('.sidebar-overlay').classList.toggle('open');
}
</script>

</html>