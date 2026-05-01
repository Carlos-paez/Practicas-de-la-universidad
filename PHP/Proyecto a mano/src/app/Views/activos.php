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
            <a href="?pagina=ciberControl" class="nav-link"><span class="nav-icon">🖥️</span> Cyber</a>
            <a href="?pagina=reportes" class="nav-link"><span class="nav-icon">📈</span> Reportes</a>
            <a href="?pagina=activos" class="nav-link active"><span class="nav-icon">🔧</span> Activos</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main">
        <header class="top-header">
            <button class="menu-toggle" id="menuToggle">☰</button>
            <h1 class="header-title" id="pageTitle">Gestión de Activos</h1>
            <div class="header-actions">
                <span class="badge badge-info">👤 Admin</span>
            </div>
        </header>

        <div class="content">
            <!-- ACTIVOS VIEW -->
            <section id="view-activos" class="view active">
                <div class="flex flex-between flex-center mb-2">
                    <div class="flex gap-2">
                        <select class="form-control" style="width: 180px;">
                            <option>Todos los activos</option>
                            <option>Equipos</option>
                            <option>Herramientas</option>
                            <option>Licencias</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">+ Nuevo Activo</button>
                </div>
                <div class="grid grid-2">
                    <div class="card">
                        <h4 class="mb-2">🖨️ Equipos (3)</h4>
                        <table>
                            <tbody>
                            <tr><td>Impresora Láser HP</td><td><span class="badge badge-success">Activo</span></td></tr>
                            <tr><td>Proyector Epson</td><td><span class="badge badge-warning">Mantenimiento</span></td></tr>
                            <tr><td>Router Cisco</td><td><span class="badge badge-success">Activo</span></td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card">
                        <h4 class="mb-2">🔑 Licencias (2)</h4>
                        <table>
                            <tbody>
                            <tr><td>Windows 11 Pro</td><td><span class="badge badge-danger">Vencida</span></td></tr>
                            <tr><td>Office 365</td><td><span class="badge badge-success">Activa</span></td></tr>
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