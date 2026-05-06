<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitudes - EIS System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Public/css/styles.css">
</head>
<body>
    <div class="app">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">EIS System</div>
            <nav class="nav">
                <a href="?pagina=dashboard" class="nav-link"><span class="nav-icon">📊</span> Dashboard</a>
                <a href="?pagina=inventario" class="nav-link"><span class="nav-icon">📦</span> Inventario</a>
                <a href="?pagina=ventas" class="nav-link"><span class="nav-icon">🛒</span> Ventas (POS)</a>
                <a href="?pagina=proveedores" class="nav-link active"><span class="nav-icon">📝</span> Solicitudes</a>
                <a href="?pagina=ciberControl" class="nav-link"><span class="nav-icon">🖥️</span> Cyber</a>
                <a href="?pagina=reportes" class="nav-link"><span class="nav-icon">📈</span> Reportes</a>
                <a href="?pagina=activos" class="nav-link"><span class="nav-icon">🔧</span> Activos</a>
            </nav>
            <div style="padding: 1rem; border-top: 1px solid rgba(255,255,255,0.1); margin-top: auto;">
                <a href="?pagina=login" class="nav-link" style="margin: 0;"><span class="nav-icon">🚪</span> Cerrar Sesión</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main">
            <header class="top-header">
                <button class="menu-toggle" id="menuToggle">☰</button>
                <h1 class="header-title">Solicitudes a Proveedores</h1>
                <div class="header-actions">
                    <span class="badge badge-info">👤 Admin</span>
                </div>
            </header>

            <div class="content">
                <!-- Filters -->
                <div class="card" style="margin-bottom: 1.5rem;">
                    <div class="flex flex-between flex-center flex-wrap gap-3">
                        <div style="flex: 1; min-width: 250px;">
                            <input type="text" class="form-control" placeholder="🔍 Buscar por proveedor o ID...">
                        </div>
                        <div class="flex gap-2">
                            <select class="form-control" style="width: 180px;">
                                <option>Todos los estados</option>
                                <option>Pendiente</option>
                                <option>Recibida</option>
                                <option>Cancelada</option>
                            </select>
                            <button class="btn btn-primary">+ Nueva Solicitud</button>
                        </div>
                    </div>
                </div>

                <!-- Solicitudes Table -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">📝 Lista de Solicitudes</h3>
                        <span class="text-sm text-muted">Mostrando 3 de 28 solicitudes</span>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Proveedor</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th class="text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>#SOL-089</strong></td>
                                    <td>
                                        <div style="font-weight: 600;">TechSupplies S.A.</div>
                                        <small class="text-muted">Electrónica</small>
                                    </td>
                                    <td>2024-04-10</td>
                                    <td><span class="badge badge-warning">Pendiente</span></td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-secondary">👁️ Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>#SOL-088</strong></td>
                                    <td>
                                        <div style="font-weight: 600;">GlobalParts Inc.</div>
                                        <small class="text-muted">Repuestos</small>
                                    </td>
                                    <td>2024-04-08</td>
                                    <td><span class="badge badge-success">Recibida</span></td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-secondary">👁️ Ver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>#SOL-087</strong></td>
                                    <td>
                                        <div style="font-weight: 600;">OfficeMax Corp.</div>
                                        <small class="text-muted">Oficina</small>
                                    </td>
                                    <td>2024-04-05</td>
                                    <td><span class="badge badge-gray">Cancelada</span></td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-secondary">👁️ Ver</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-between flex-center mt-4" style="padding-top: 1rem; border-top: 1px solid var(--border-light);">
                        <span class="text-sm text-muted">Mostrando 1-3 de 28 resultados</span>
                        <div class="flex gap-2">
                            <button class="btn btn-sm btn-secondary" disabled>← Anterior</button>
                            <button class="btn btn-sm btn-primary">1</button>
                            <button class="btn btn-sm btn-secondary">2</button>
                            <button class="btn btn-sm btn-secondary">3</button>
                            <button class="btn btn-sm btn-secondary">Siguiente →</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
