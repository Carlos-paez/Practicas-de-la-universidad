<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario - EIS System</title>
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
                <a href="?pagina=inventario" class="nav-link active"><span class="nav-icon">📦</span> Inventario</a>
                <a href="?pagina=ventas" class="nav-link"><span class="nav-icon">🛒</span> Ventas (POS)</a>
                <a href="?pagina=proveedores" class="nav-link"><span class="nav-icon">📝</span> Solicitudes</a>
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
                <h1 class="header-title">Gestión de Inventario</h1>
                <div class="header-actions">
                    <span class="badge badge-info">👤 Admin</span>
                </div>
            </header>

            <div class="content">
                <!-- Filters -->
                <div class="card" style="margin-bottom: 1.5rem;">
                    <div class="flex flex-between flex-center flex-wrap gap-3">
                        <div style="flex: 1; min-width: 250px;">
                            <input type="text" class="form-control" placeholder="🔍 Buscar producto por nombre o código...">
                        </div>
                        <div class="flex gap-2">
                            <select class="form-control" style="width: 180px;">
                                <option>Todos los estados</option>
                                <option>Stock OK</option>
                                <option>Crítico</option>
                                <option>Sin stock</option>
                            </select>
                            <button class="btn btn-primary">+ Nuevo Producto</button>
                        </div>
                    </div>
                </div>

                <!-- Inventory Table -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">📦 Lista de Productos</h3>
                        <span class="text-sm text-muted">Mostrando 2 de 45 productos</span>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th class="text-right">Stock</th>
                                    <th class="text-right">Mínimo</th>
                                    <th>Estado</th>
                                    <th class="text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>#1042</strong></td>
                                    <td>
                                        <div style="font-weight: 600;">Mouse Inalámbrico</div>
                                        <small class="text-muted">Periféricos</small>
                                    </td>
                                    <td><strong>$12.50</strong></td>
                                    <td class="text-right">
                                        <span style="color: var(--danger); font-weight: 700;">5</span>
                                    </td>
                                    <td class="text-right text-muted">10</td>
                                    <td><span class="badge badge-danger">Crítico</span></td>
                                    <td class="text-right">
                                        <div class="flex justify-end gap-2">
                                            <button class="btn btn-sm btn-secondary" title="Ver movimientos">📦</button>
                                            <button class="btn btn-sm btn-primary" title="Editar">✏️</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>#1043</strong></td>
                                    <td>
                                        <div style="font-weight: 600;">Monitor 24" IPS</div>
                                        <small class="text-muted">Pantallas</small>
                                    </td>
                                    <td><strong>$189.00</strong></td>
                                    <td class="text-right">
                                        <span style="color: var(--success); font-weight: 700;">24</span>
                                    </td>
                                    <td class="text-right text-muted">5</td>
                                    <td><span class="badge badge-success">OK</span></td>
                                    <td class="text-right">
                                        <div class="flex justify-end gap-2">
                                            <button class="btn btn-sm btn-secondary" title="Ver movimientos">📦</button>
                                            <button class="btn btn-sm btn-primary" title="Editar">✏️</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>#1044</strong></td>
                                    <td>
                                        <div style="font-weight: 600;">Teclado Mecánico RGB</div>
                                        <small class="text-muted">Periféricos</small>
                                    </td>
                                    <td><strong>$45.00</strong></td>
                                    <td class="text-right">
                                        <span style="color: var(--warning); font-weight: 700;">8</span>
                                    </td>
                                    <td class="text-right text-muted">10</td>
                                    <td><span class="badge badge-warning">Bajo</span></td>
                                    <td class="text-right">
                                        <div class="flex justify-end gap-2">
                                            <button class="btn btn-sm btn-secondary" title="Ver movimientos">📦</button>
                                            <button class="btn btn-sm btn-primary" title="Editar">✏️</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-between flex-center mt-4" style="padding-top: 1rem; border-top: 1px solid var(--border-light);">
                        <span class="text-sm text-muted">Mostrando 1-3 de 45 resultados</span>
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
