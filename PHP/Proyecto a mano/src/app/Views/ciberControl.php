<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Control - EIS System</title>
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
                <a href="?pagina=ciberControl" class="nav-link active"><span class="nav-icon">🖥️</span> Cyber</a>
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
                <h1 class="header-title">Control de Cybercafé</h1>
                <div class="header-actions">
                    <span class="badge badge-success">7 Disponibles</span>
                    <span class="badge badge-warning">3 Ocupadas</span>
                    <span class="badge badge-info">👤 Admin</span>
                </div>
            </header>

            <div class="content">
                <!-- Action Buttons -->
                <div class="card" style="margin-bottom: 1.5rem;">
                    <div class="flex flex-between flex-center flex-wrap gap-3">
                        <div class="flex gap-2">
                            <button class="btn btn-secondary" onclick="alert('🖥️ Nueva estación creada')">+ Nueva Estación</button>
                            <button class="btn btn-secondary">📜 Historial Sesiones</button>
                        </div>
                        <div class="flex gap-2">
                            <button class="btn btn-sm btn-success" onclick="filterStations('disponible')">Disponibles</button>
                            <button class="btn btn-sm btn-warning" onclick="filterStations('ocupada')">Ocupadas</button>
                            <button class="btn btn-sm btn-danger" onclick="filterStations('mantenimiento')">Mantenimiento</button>
                            <button class="btn btn-sm btn-secondary" onclick="filterStations('all')">Todas</button>
                        </div>
                    </div>
                </div>

                <!-- Cyber Grid -->
                <div class="grid grid-cyber" id="cyberGrid">
                    <!-- Station 1 - Available -->
                    <div class="station-card disponible" onclick="toggleStation(this)" data-status="disponible">
                        <div class="station-number">#1</div>
                        <div class="station-status">Disponible</div>
                        <div style="margin-top: 0.75rem; font-size: 0.8rem; color: var(--text-muted);">PC Gaming</div>
                    </div>
                    <!-- Station 2 - Occupied -->
                    <div class="station-card ocupada" onclick="toggleStation(this)" data-status="ocupada">
                        <div class="station-number">#2</div>
                        <div class="station-status">Ocupada</div>
                        <div style="margin-top: 0.75rem; font-size: 0.8rem; color: var(--text-muted);">45 min restantes</div>
                        <div style="font-size: 0.75rem; color: var(--warning); font-weight: 600; margin-top: 0.25rem;">$2.50</div>
                    </div>
                    <!-- Station 3 - Available -->
                    <div class="station-card disponible" onclick="toggleStation(this)" data-status="disponible">
                        <div class="station-number">#3</div>
                        <div class="station-status">Disponible</div>
                        <div style="margin-top: 0.75rem; font-size: 0.8rem; color: var(--text-muted);">PC Estándar</div>
                    </div>
                    <!-- Station 4 - Maintenance -->
                    <div class="station-card mantenimiento" onclick="toggleStation(this)" data-status="mantenimiento">
                        <div class="station-number">#4</div>
                        <div class="station-status">Mantenimiento</div>
                        <div style="margin-top: 0.75rem; font-size: 0.8rem; color: var(--text-muted);">Teclado dañado</div>
                    </div>
                    <!-- Station 5 - Occupied -->
                    <div class="station-card ocupada" onclick="toggleStation(this)" data-status="ocupada">
                        <div class="station-number">#5</div>
                        <div class="station-status">Ocupada</div>
                        <div style="margin-top: 0.75rem; font-size: 0.8rem; color: var(--text-muted);">1h 20 min restantes</div>
                        <div style="font-size: 0.75rem; color: var(--warning); font-weight: 600; margin-top: 0.25rem;">$4.50</div>
                    </div>
                    <!-- Station 6 - Available -->
                    <div class="station-card disponible" onclick="toggleStation(this)" data-status="disponible">
                        <div class="station-number">#6</div>
                        <div class="station-status">Disponible</div>
                        <div style="margin-top: 0.75rem; font-size: 0.8rem; color: var(--text-muted);">PC Gaming</div>
                    </div>
                    <!-- Station 7 - Occupied -->
                    <div class="station-card ocupada" onclick="toggleStation(this)" data-status="ocupada">
                        <div class="station-number">#7</div>
                        <div class="station-status">Ocupada</div>
                        <div style="margin-top: 0.75rem; font-size: 0.8rem; color: var(--text-muted);">30 min restantes</div>
                        <div style="font-size: 0.75rem; color: var(--warning); font-weight: 600; margin-top: 0.25rem;">$1.50</div>
                    </div>
                    <!-- Station 8 - Available -->
                    <div class="station-card disponible" onclick="toggleStation(this)" data-status="disponible">
                        <div class="station-number">#8</div>
                        <div class="station-status">Disponible</div>
                        <div style="margin-top: 0.75rem; font-size: 0.8rem; color: var(--text-muted);">PC Estándar</div>
                    </div>
                    <!-- Station 9 - Available -->
                    <div class="station-card disponible" onclick="toggleStation(this)" data-status="disponible">
                        <div class="station-number">#9</div>
                        <div class="station-status">Disponible</div>
                        <div style="margin-top: 0.75rem; font-size: 0.8rem; color: var(--text-muted);">PC Gaming</div>
                    </div>
                    <!-- Station 10 - Occupied -->
                    <div class="station-card ocupada" onclick="toggleStation(this)" data-status="ocupada">
                        <div class="station-number">#10</div>
                        <div class="station-status">Ocupada</div>
                        <div style="margin-top: 0.75rem; font-size: 0.8rem; color: var(--text-muted);">2h restantes</div>
                        <div style="font-size: 0.75rem; color: var(--warning); font-weight: 600; margin-top: 0.25rem;">$6.00</div>
                    </div>
                </div>

                <p class="text-muted mt-4" style="font-size: 0.85rem; text-align: center;">💡 Haz clic en una estación para cambiar su estado o ver detalles.</p>
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

        function toggleStation(element) {
            const status = element.dataset.status;
            const stationNum = element.querySelector('.station-number').textContent;
            
            if (status === 'disponible') {
                if (confirm(`¿Iniciar sesión en estación ${stationNum}?`)) {
                    element.classList.remove('disponible');
                    element.classList.add('ocupada');
                    element.dataset.status = 'ocupada';
                    element.querySelector('.station-status').textContent = 'Ocupada';
                    element.querySelector('.station-status').className = 'station-status';
                    alert(`✅ Sesión iniciada en estación ${stationNum}`);
                }
            } else if (status === 'ocupada') {
                if (confirm(`¿Finalizar sesión en estación ${stationNum}?`)) {
                    element.classList.remove('ocupada');
                    element.classList.add('disponible');
                    element.dataset.status = 'disponible';
                    element.querySelector('.station-status').textContent = 'Disponible';
                    element.querySelector('.station-status').className = 'station-status';
                    alert(`✅ Sesión finalizada en estación ${stationNum}`);
                }
            } else {
                alert(`Estación ${stationNum} en mantenimiento`);
            }
        }

        function filterStations(filter) {
            const stations = document.querySelectorAll('.station-card');
            stations.forEach(station => {
                if (filter === 'all') {
                    station.style.display = 'block';
                } else {
                    if (station.dataset.status === filter) {
                        station.style.display = 'block';
                    } else {
                        station.style.display = 'none';
                    }
                }
            });
        }
    </script>
</body>
</html>
