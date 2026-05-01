<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EIS System</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body>

<div class="app">
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">⚡ EIS System</div>
        <nav class="nav">
            <a href="?pagina=dashboard" class="nav-link"><span class="nav-icon">📊</span> Dashboard</a>
            <a href="?pagina=inventario" class="nav-link"><span class="nav-icon">📦</span> Inventario</a>
            <a href="?pagina=ventas" class="nav-link"><span class="nav-icon">🛒</span> Ventas (POS)</a>
            <a href="?pagina=proveedores" class="nav-link"><span class="nav-icon">📝</span> Solicitudes</a>
            <a href="?pagina=ciberControl" class="nav-link active"><span class="nav-icon">🖥️</span> Cyber</a>
            <a href="?pagina=reportes" class="nav-link"><span class="nav-icon">📈</span> Reportes</a>
            <a href="?pagina=activos" class="nav-link"><span class="nav-icon">🔧</span> Activos</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main">
        <header class="top-header">
            <button class="menu-toggle" id="menuToggle">☰</button>
            <h1 class="header-title" id="pageTitle">Control de Cybercafé</h1>
            <div class="header-actions">
                <span class="badge badge-info">👤 Admin</span>
            </div>
        </header>

        <div class="content">
            <!-- CYBER VIEW -->
            <section id="view-cyber" class="view active">
                <div class="flex flex-between flex-center mb-2">
                    <div class="flex gap-2">
                        <button class="btn btn-secondary" onclick="alert('🖥️ Crear nueva estación')">+ Nueva Estación</button>
                        <button class="btn btn-secondary">📜 Historial Sesiones</button>
                    </div>
                    <div class="flex gap-2">
                        <span class="badge badge-success">7 Disponibles</span>
                        <span class="badge badge-warning">3 Ocupadas</span>
                    </div>
                </div>
                <div class="grid grid-cyber" id="cyberGrid">
                    <!-- JS will populate this -->
                </div>
                <p class="text-muted mt-2" style="font-size: 0.85rem;">💡 Haz clic en una estación para cambiar su estado o ver detalles.</p>
            </section>
        </div>
        <script>
            const sidebar = document.getElementById('sidebar');
            const menuToggle = document.getElementById('menuToggle');

            menuToggle.addEventListener('click', () => sidebar.classList.toggle('open'));
            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 768 && !sidebar.contains(e.target) && e.target !== menuToggle) {
                    sidebar.classList.remove('open');
                }
            });
        </script>
</body>
</html>