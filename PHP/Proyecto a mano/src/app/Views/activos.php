<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activos - EIS System</title>
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
                <a href="?pagina=proveedores" class="nav-link"><span class="nav-icon">📝</span> Solicitudes</a>
                <a href="?pagina=ciberControl" class="nav-link"><span class="nav-icon">🖥️</span> Cyber</a>
                <a href="?pagina=reportes" class="nav-link"><span class="nav-icon">📈</span> Reportes</a>
                <a href="?pagina=activos" class="nav-link active"><span class="nav-icon">🔧</span> Activos</a>
            </nav>
            <div style="padding: 1rem; border-top: 1px solid rgba(255,255,255,0.1); margin-top: auto;">
                <a href="?pagina=login" class="nav-link" style="margin: 0;"><span class="nav-icon">🚪</span> Cerrar Sesión</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main">
            <header class="top-header">
                <button class="menu-toggle" id="menuToggle">☰</button>
                <h1 class="header-title">Gestión de Activos</h1>
                <div class="header-actions">
                    <span class="badge badge-info">👤 Admin</span>
                </div>
            </header>

            <div class="content">
                <!-- Filters -->
                <div class="card" style="margin-bottom: 1.5rem;">
                    <div class="flex flex-between flex-center flex-wrap gap-3">
                        <div style="flex: 1; min-width: 250px;">
                            <input type="text" class="form-control" placeholder="🔍 Buscar activo por nombre o código...">
                        </div>
                        <div class="flex gap-2">
                            <select class="form-control" style="width: 180px;">
                                <option>Todos los activos</option>
                                <option>Equipos</option>
                                <option>Herramientas</option>
                                <option>Licencias</option>
                            </select>
                            <button class="btn btn-primary">+ Nuevo Activo</button>
                        </div>
                    </div>
                </div>

                <!-- Assets Grid -->
                <div class="grid grid-2">
                    <!-- Equipment Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">🖨️ Equipos (3)</h3>
                            <button class="btn btn-sm btn-secondary">Ver todos</button>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Equipo</th>
                                    <th>Estado</th>
                                    <th class="text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div style="font-weight: 600;">Impresora Láser HP</div>
                                        <small class="text-muted">Serie: HP-2024-001</small>
                                    </td>
                                    <td><span class="badge badge-success">Activo</span></td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-secondary" title="Editar">✏️</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="font-weight: 600;">Proyector Epson</div>
                                        <small class="text-muted">Serie: EPS-2023-045</small>
                                    </td>
                                    <td><span class="badge badge-warning">Mantenimiento</span></td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-secondary" title="Editar">✏️</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="font-weight: 600;">Router Cisco</div>
                                        <small class="text-muted">Serie: CSC-2024-012</small>
                                    </td>
                                    <td><span class="badge badge-success">Activo</span></td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-secondary" title="Editar">✏️</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Licenses Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">🔑 Licencias (2)</h3>
                            <button class="btn btn-sm btn-secondary">Ver todos</button>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Licencia</th>
                                    <th>Estado</th>
                                    <th class="text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div style="font-weight: 600;">Windows 11 Pro</div>
                                        <small class="text-muted">Expira: 2024-12-31</small>
                                    </td>
                                    <td><span class="badge badge-danger">Vencida</span></td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-secondary" title="Renovar">🔄</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="font-weight: 600;">Office 365</div>
                                        <small class="text-muted">Expira: 2025-06-15</small>
                                    </td>
                                    <td><span class="badge badge-success">Activa</span></td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-secondary" title="Ver detalles">👁️</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tools Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">🔧 Herramientas (4)</h3>
                            <button class="btn btn-sm btn-secondary">Ver todos</button>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Herramienta</th>
                                    <th>Estado</th>
                                    <th class="text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div style="font-weight: 600;">Kit Destornilladores</div>
                                        <small class="text-muted">Completo</small>
                                    </td>
                                    <td><span class="badge badge-success">Disponible</span></td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-secondary">👁️</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="font-weight: 600;">Multímetro Digital</div>
                                        <small class="text-muted">Precisión ±0.5%</small>
                                    </td>
                                    <td><span class="badge badge-success">Disponible</span></td>
                                    <td class="text-right">
                                        <button class="btn btn-sm btn-secondary">👁️</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Summary Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">📊 Resumen</h3>
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 1rem;">
                            <div class="flex between" style="padding: 0.75rem; background: #dcfce7; border-radius: 8px;">
                                <span style="font-weight: 600; color: #166534;">Activos Totales</span>
                                <span style="font-weight: 800; font-size: 1.5rem; color: #166534;">9</span>
                            </div>
                            <div class="flex between" style="padding: 0.75rem; background: #dbeafe; border-radius: 8px;">
                                <span style="font-weight: 600; color: #1e40af;">En Mantenimiento</span>
                                <span style="font-weight: 800; font-size: 1.5rem; color: #1e40af;">1</span>
                            </div>
                            <div class="flex between" style="padding: 0.75rem; background: #fee2e2; border-radius: 8px;">
                                <span style="font-weight: 600; color: #991b1b;">Requieren Atención</span>
                                <span style="font-weight: 800; font-size: 1.5rem; color: #991b1b;">1</span>
                            </div>
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
