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
            <a href="?pagina=proveedores" class="nav-link active"><span class="nav-icon">📝</span> Solicitudes</a>
            <a href="?pagina=ciberControl" class="nav-link"><span class="nav-icon">🖥️</span> Cyber</a>
            <a href="?pagina=reportes" class="nav-link"><span class="nav-icon">📈</span> Reportes</a>
            <a href="?pagina=activos" class="nav-link"><span class="nav-icon">🔧</span> Activos</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main">
        <header class="top-header">
            <button class="menu-toggle" id="menuToggle">☰</button>
            <h1 class="header-title" id="pageTitle">Solicitudes a Proveedores</h1>
            <div class="header-actions">
                <span class="badge badge-info">👤 Admin</span>
            </div>
        </header>

        <div class="content">
            <!-- SOLICITUDES VIEW -->
            <section id="view-solicitudes" class="view active">
                <div class="flex flex-between flex-center mb-2">
                    <div class="flex gap-2">
                        <input type="text" class="form-control" placeholder="🔍 Buscar proveedor..." style="width: 260px;">
                        <select class="form-control" style="width: 140px;">
                            <option>Todos los estados</option>
                            <option>Pendiente</option>
                            <option>Recibida</option>
                            <option>Cancelada</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">+ Nueva Solicitud</button>
                </div>
                <div class="card table-responsive">
                    <table>
                        <thead><tr><th>ID</th><th>Proveedor</th><th>Fecha</th><th>Estado</th><th class="text-right">Acciones</th></tr></thead>
                        <tbody>
                        <tr><td>#SOL-089</td><td>TechSupplies S.A.</td><td>2024-04-10</td><td><span class="badge badge-warning">Pendiente</span></td><td class="text-right"><button class="btn btn-sm btn-secondary">👁️ Ver</button></td></tr>
                        <tr><td>#SOL-088</td><td>GlobalParts Inc.</td><td>2024-04-08</td><td><span class="badge badge-success">Recibida</span></td><td class="text-right"><button class="btn btn-sm btn-secondary">👁️ Ver</button></td></tr>
                        <tr><td>#SOL-087</td><td>OfficeMax Corp.</td><td>2024-04-05</td><td><span class="badge badge-gray">Cancelada</span></td><td class="text-right"><button class="btn btn-sm btn-secondary">👁️ Ver</button></td></tr>
                        </tbody>
                    </table>
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