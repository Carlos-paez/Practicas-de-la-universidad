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
            <a href="?pagina=inventario" class="nav-link active"><span class="nav-icon">📦</span> Inventario</a>
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
            <h1 class="header-title" id="pageTitle">Gestión de Inventario</h1>
            <div class="header-actions">
                <span class="badge badge-info">👤 Admin</span>
            </div>
        </header>

        <div class="content">
            <!-- INVENTARIO VIEW -->
            <div id="view-inventario" class="view active">
                <div class="flex flex-between flex-center mb-2">
                    <div class="flex gap-2">
                        <input type="text" class="form-control" placeholder="🔍 Buscar producto..." style="width: 260px;">
                        <select class="form-control" style="width: 160px;">
                            <option>Todos los estados</option>
                            <option>Stock OK</option>
                            <option>Crítico</option>
                            <option>Sin stock</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">+ Nuevo Producto</button>
                </div>
                <div class="card table-responsive">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th><th>Nombre</th><th>Precio</th>
                            <th class="text-right">Stock</th><th>Mínimo</th>
                            <th>Estado</th><th class="text-right">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#1042</td>
                            <td><strong>Mouse Inalámbrico</strong><br><small class="text-muted">Periféricos</small></td>
                            <td>$12.50</td><td class="text-right">5</td><td class="text-right">10</td>
                            <td><span class="badge badge-danger">Crítico</span></td>
                            <td class="text-right flex flex-center gap-2 justify-end">
                                <button class="btn btn-sm btn-secondary">📦 Mov.</button>
                                <button class="btn btn-sm btn-primary">✏️</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1043</td>
                            <td><strong>Monitor 24" IPS</strong><br><small class="text-muted">Pantallas</small></td>
                            <td>$189.00</td><td class="text-right">24</td><td class="text-right">5</td>
                            <td><span class="badge badge-success">OK</span></td>
                            <td class="text-right flex flex-center gap-2 justify-end">
                                <button class="btn btn-sm btn-secondary">📦 Mov.</button>
                                <button class="btn btn-sm btn-primary">✏️</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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