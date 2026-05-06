<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes - EIS System</title>
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
                <a href="?pagina=reportes" class="nav-link active"><span class="nav-icon">📈</span> Reportes</a>
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
                <h1 class="header-title">Reportes y Estadísticas</h1>
                <div class="header-actions">
                    <span class="badge badge-info">👤 Admin</span>
                </div>
            </header>

            <div class="content">
                <!-- Quick Stats -->
                <div class="grid grid-4 mb-4">
                    <div class="metric-card">
                        <div class="metric-icon">💰</div>
                        <div class="metric-label">Ventas del Mes</div>
                        <div class="metric-value">$34,580</div>
                        <div class="text-muted text-sm" style="margin-top: 0.5rem;">↗ 12% vs mes anterior</div>
                    </div>
                    <div class="metric-card success">
                        <div class="metric-icon">📦</div>
                        <div class="metric-label">Productos Activos</div>
                        <div class="metric-value" style="color: var(--success);">245</div>
                        <div class="text-muted text-sm" style="margin-top: 0.5rem;">En inventario</div>
                    </div>
                    <div class="metric-card warning">
                        <div class="metric-icon">🖥️</div>
                        <div class="metric-label">Horas Cyber</div>
                        <div class="metric-value" style="color: var(--warning);">1,240</div>
                        <div class="text-muted text-sm" style="margin-top: 0.5rem;">Este mes</div>
                    </div>
                    <div class="metric-card info">
                        <div class="metric-icon">📋</div>
                        <div class="metric-label">Solicitudes</div>
                        <div class="metric-value" style="color: var(--info);">28</div>
                        <div class="text-muted text-sm" style="margin-top: 0.5rem;">Procesadas</div>
                    </div>
                </div>

                <!-- Report Generator -->
                <div class="grid grid-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">📈 Generador de Reportes</h3>
                        </div>
                        <form onsubmit="event.preventDefault(); alert('📥 Reporte generado exitosamente (simulación)')">
                            <div class="form-group">
                                <label>Tipo de Reporte</label>
                                <select class="form-control">
                                    <option>Ventas por fecha</option>
                                    <option>Estado de inventario</option>
                                    <option>Movimientos de stock</option>
                                    <option>Solicitudes a proveedores</option>
                                    <option>Horas Cybercafé</option>
                                </select>
                            </div>
                            <div class="grid grid-2">
                                <div class="form-group">
                                    <label>Fecha Inicio</label>
                                    <input type="date" class="form-control" value="2024-04-01">
                                </div>
                                <div class="form-group">
                                    <label>Fecha Fin</label>
                                    <input type="date" class="form-control" value="2024-04-30">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Formato de salida</label>
                                <div style="display: flex; gap: 1rem; margin-top: 0.5rem;">
                                    <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                                        <input type="radio" name="format" value="pdf" checked> PDF
                                    </label>
                                    <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                                        <input type="radio" name="format" value="excel"> Excel
                                    </label>
                                    <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                                        <input type="radio" name="format" value="csv"> CSV
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%;">
                                🔍 Generar Reporte
                            </button>
                        </form>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">📊 Reportes Recientes</h3>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon" style="background: #dbeafe; color: #1e40af;">📈</div>
                            <div class="activity-content">
                                <div class="activity-title">Ventas - Abril 2024</div>
                                <div class="activity-time">Generado hoy a las 10:30 AM</div>
                            </div>
                            <button class="btn btn-sm btn-secondary" onclick="alert('Descargando...')">⬇️</button>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon" style="background: #dcfce7; color: #166534;">📦</div>
                            <div class="activity-content">
                                <div class="activity-title">Inventario Actual</div>
                                <div class="activity-time">Generado ayer a las 3:15 PM</div>
                            </div>
                            <button class="btn btn-sm btn-secondary" onclick="alert('Descargando...')">⬇️</button>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon" style="background: #fef3c7; color: #92400e;">🖥️</div>
                            <div class="activity-content">
                                <div class="activity-title">Horas Cyber - Marzo</div>
                                <div class="activity-time">Generado hace 2 días</div>
                            </div>
                            <button class="btn btn-sm btn-secondary" onclick="alert('Descargando...')">⬇️</button>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon" style="background: #fef3c7; color: #92400e;">📋</div>
                            <div class="activity-content">
                                <div class="activity-title">Solicitudes Q1 2024</div>
                                <div class="activity-time">Generado hace 5 días</div>
                            </div>
                            <button class="btn btn-sm btn-secondary" onclick="alert('Descargando...')">⬇️</button>
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
