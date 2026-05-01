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
            <a href="?pagina=reportes" class="nav-link active"><span class="nav-icon">📈</span> Reportes</a>
            <a href="?pagina=activos" class="nav-link"><span class="nav-icon">🔧</span> Activos</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main">
        <header class="top-header">
            <button class="menu-toggle" id="menuToggle">☰</button>
            <h1 class="header-title" id="pageTitle">Reportes y Estadísticas</h1>
            <div class="header-actions">
                <span class="badge badge-info">👤 Admin</span>
            </div>
        </header>

        <div class="content">
            <!-- REPORTES VIEW -->
            <section id="view-reportes" class="view active">
                <div class="card" style="max-width: 600px;">
                    <h3 class="mb-2">📈 Generador de Reportes</h3>
                    <form onsubmit="event.preventDefault(); alert('📥 Reporte generado (simulación)')">
                        <div class="form-group">
                            <label>Tipo de Reporte</label>
                            <select class="form-control">
                                <option>Ventas por fecha</option>
                                <option>Estado de inventario</option>
                                <option>Movimientos de stock</option>
                                <option>Solicitudes a proveedores</option>
                            </select>
                        </div>
                        <div class="grid grid-2">
                            <div class="form-group">
                                <label>Fecha Inicio</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Fecha Fin</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">🔍 Generar Reporte</button>
                    </form>
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