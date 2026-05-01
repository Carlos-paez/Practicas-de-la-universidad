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
                <a href="?pagina=dashboard" class="nav-link active"><span class="nav-icon">📊</span> Dashboard</a>
                <a href="?pagina=inventario" class="nav-link"><span class="nav-icon">📦</span> Inventario</a>
                <a href="?pagina=ventas" class="nav-link"><span class="nav-icon">🛒</span> Ventas (POS)</a>
                <a href="?pagina=proveedores" class="nav-link"><span class="nav-icon">📝</span> Solicitudes</a>
                <a href="?pagina=ciberControl" class="nav-link"><span class="nav-icon">🖥️</span> Cyber</a>
                <a href="?pagina=reportes" class="nav-link"><span class="nav-icon">📈</span> Reportes</a>
                <a href="?pagina=activos" class="nav-link"><span class="nav-icon">🔧</span> Activos</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main">
            <header class="top-header">
                <button class="menu-toggle" id="menuToggle">☰</button>
                <h1 class="header-title" id="pageTitle">Panel de Control</h1>
                <div class="header-actions">
                    <span class="badge badge-info">👤 Admin</span>
                </div>
            </header>

            <div class="content">
                <!-- DASHBOARD VIEW -->
                <section id="view-dashboard" class="view active">
                    <div class="grid grid-4 mb-2">
                        <div class="card">
                            <div class="metric-label">Ventas Hoy</div>
                            <div class="metric-value">$1,245.50</div>
                            <div class="text-muted">23 transacciones</div>
                        </div>
                        <div class="card">
                            <div class="metric-label">Stock Crítico</div>
                            <div class="metric-value" style="color: var(--danger);">4</div>
                            <div class="text-muted">Productos bajo mínimo</div>
                        </div>
                        <div class="card">
                            <div class="metric-label">Sesiones Cyber</div>
                            <div class="metric-value">7</div>
                            <div class="text-muted">Prom: 45 min/sesión</div>
                        </div>
                        <div class="card">
                            <div class="metric-label">Solicitudes Pend.</div>
                            <div class="metric-value" style="color: var(--warning);">3</div>
                            <div class="text-muted">Cuentas por pagar</div>
                        </div>
                    </div>
                    <div class="grid grid-2">
                        <div class="card">
                            <h3 class="mb-2">🕒 Horas Pico</h3>
                            <table>
                                <thead><tr><th>Hora</th><th class="text-right">Transacciones</th></tr></thead>
                                <tbody>
                                <tr><td>10:00 - 11:00</td><td class="text-right">42</td></tr>
                                <tr><td>14:00 - 15:00</td><td class="text-right">38</td></tr>
                                <tr><td>18:00 - 19:00</td><td class="text-right">31</td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card">
                            <h3 class="mb-2">📦 Productos Sin Stock</h3>
                            <table>
                                <thead><tr><th>Producto</th><th class="text-right">Stock Actual</th></tr></thead>
                                <tbody>
                                <tr><td>Resma A4</td><td class="text-right badge badge-danger">0</td></tr>
                                <tr><td>Tóner Negro</td><td class="text-right badge badge-danger">0</td></tr>
                                <tr><td>Cable USB-C</td><td class="text-right badge badge-danger">0</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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