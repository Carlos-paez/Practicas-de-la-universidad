<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - EIS System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Public/css/styles.css">
</head>
<body>
    <div class="app">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">EIS System</div>
            <nav class="nav">
                <a href="?pagina=dashboard" class="nav-link active"><span class="nav-icon">📊</span> Dashboard</a>
                <a href="?pagina=inventario" class="nav-link"><span class="nav-icon">📦</span> Inventario</a>
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
                <h1 class="header-title">Panel de Control</h1>
                <div class="header-actions">
                    <span class="badge badge-info">👤 Admin</span>
                </div>
            </header>

            <div class="content">
                <!-- Welcome Banner -->
                <div class="welcome-banner">
                    <h2>¡Bienvenido de nuevo!</h2>
                    <p>Gestiona tu negocio de manera eficiente con EIS System</p>
                </div>

                <!-- Metrics Grid -->
                <div class="grid grid-4 mb-4">
                    <div class="metric-card">
                        <div class="metric-icon">💰</div>
                        <div class="metric-label">Ventas Hoy</div>
                        <div class="metric-value">$1,245.50</div>
                        <div class="text-muted text-sm" style="margin-top: 0.5rem;">↗ 23 transacciones</div>
                    </div>
                    <div class="metric-card danger">
                        <div class="metric-icon">⚠️</div>
                        <div class="metric-label">Stock Crítico</div>
                        <div class="metric-value" style="color: var(--danger);">4</div>
                        <div class="text-muted text-sm" style="margin-top: 0.5rem;">Productos bajo mínimo</div>
                    </div>
                    <div class="metric-card warning">
                        <div class="metric-icon">🖥️</div>
                        <div class="metric-label">Sesiones Cyber</div>
                        <div class="metric-value">7</div>
                        <div class="text-muted text-sm" style="margin-top: 0.5rem;">Prom: 45 min/sesión</div>
                    </div>
                    <div class="metric-card info">
                        <div class="metric-icon">📋</div>
                        <div class="metric-label">Solicitudes Pend.</div>
                        <div class="metric-value" style="color: var(--warning);">3</div>
                        <div class="text-muted text-sm" style="margin-top: 0.5rem;">Cuentas por pagar</div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">🕒 Horas Pico</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Hora</th>
                                    <th class="text-right">Transacciones</th>
                                    <th class="text-right">Tendencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10:00 - 11:00</td>
                                    <td class="text-right font-bold">42</td>
                                    <td class="text-right"><span style="color: var(--success);">↑ 12%</span></td>
                                </tr>
                                <tr>
                                    <td>14:00 - 15:00</td>
                                    <td class="text-right font-bold">38</td>
                                    <td class="text-right"><span style="color: var(--success);">↑ 8%</span></td>
                                </tr>
                                <tr>
                                    <td>18:00 - 19:00</td>
                                    <td class="text-right font-bold">31</td>
                                    <td class="text-right"><span style="color: var(--danger);">↓ 5%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">📦 Productos Sin Stock</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th class="text-right">Stock</th>
                                    <th class="text-right">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Resma A4</strong></td>
                                    <td class="text-right">0</td>
                                    <td class="text-right"><span class="badge badge-danger">Sin stock</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Tóner Negro</strong></td>
                                    <td class="text-right">0</td>
                                    <td class="text-right"><span class="badge badge-danger">Sin stock</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Cable USB-C</strong></td>
                                    <td class="text-right">0</td>
                                    <td class="text-right"><span class="badge badge-danger">Sin stock</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">📋 Actividad Reciente</h3>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon" style="background: #dbeafe; color: #1e40af;">🛒</div>
                        <div class="activity-content">
                            <div class="activity-title">Venta #V-00142 procesada</div>
                            <div class="activity-time">Hace 5 minutos - $245.00</div>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon" style="background: #dcfce7; color: #166534;">📦</div>
                        <div class="activity-content">
                            <div class="activity-title">Stock actualizado: Mouse Inalámbrico</div>
                            <div class="activity-time">Hace 15 minutos - +50 unidades</div>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon" style="background: #fef3c7; color: #92400e;">🖥️</div>
                        <div class="activity-content">
                            <div class="activity-title">Nueva sesión Cyber iniciada</div>
                            <div class="activity-time">Hace 30 minutos - Estación #5</div>
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
