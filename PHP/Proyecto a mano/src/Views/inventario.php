<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EIS System</title>
    <link rel="stylesheet" href="Views/styles/styles.css">
</head>
<body>

<div class="app">
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">⚡ EIS System</div>
        <nav class="nav">
            <a href="#" class="nav-link" data-view="inventario"><span class="nav-icon">📦</span> Inventario</a>
            <a href="#" class="nav-link" data-view="ventas"><span class="nav-icon">🛒</span> Ventas (POS)</a>
            <a href="#" class="nav-link" data-view="solicitudes"><span class="nav-icon">📝</span> Solicitudes</a>
            <a href="#" class="nav-link" data-view="cyber"><span class="nav-icon">🖥️</span> Cyber</a>
            <a href="#" class="nav-link" data-view="reportes"><span class="nav-icon">📈</span> Reportes</a>
            <a href="#" class="nav-link" data-view="activos"><span class="nav-icon">🔧</span> Activos</a>
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
            // 1. Navigation System (SPA-like)
            const navLinks = document.querySelectorAll('.nav-link');
            const views = document.querySelectorAll('.view');
            const pageTitle = document.getElementById('pageTitle');
            const sidebar = document.getElementById('sidebar');
            const menuToggle = document.getElementById('menuToggle');

            const titles = {
                dashboard: 'Panel de Control',
                inventario: 'Gestión de Inventario',
                ventas: 'Punto de Venta (POS)',
                solicitudes: 'Solicitudes a Proveedores',
                cyber: 'Control de Cybercafé',
                reportes: 'Reportes y Estadísticas',
                activos: 'Gestión de Activos'
            };

            function switchView(viewId) {
                views.forEach(v => v.classList.remove('active'));
                navLinks.forEach(l => l.classList.remove('active'));
                const targetView = document.getElementById(`view-${viewId}`);
                if (targetView) {
                    targetView.classList.add('active');
                    pageTitle.textContent = titles[viewId] || 'EIS System';
                }
                // Update active nav
                const activeLink = document.querySelector(`.nav-link[data-view="${viewId}"]`);
                if (activeLink) activeLink.classList.add('active');

                // Close mobile sidebar
                sidebar.classList.remove('open');
            }

            navLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    switchView(link.dataset.view);
                });
            });

            menuToggle.addEventListener('click', () => sidebar.classList.toggle('open'));
            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 768 && !sidebar.contains(e.target) && e.target !== menuToggle) {
                    sidebar.classList.remove('open');
                }
            });

            // 2. POS Cart Logic
            let cart = [];
            function posAddItem(name, price) {
                const existing = cart.find(item => item.name === name);
                if (existing) {
                    existing.qty++;
                } else {
                    cart.push({ name, price, qty: 1 });
                }
                renderCart();
            }

            function posRemoveItem(index) {
                cart.splice(index, 1);
                renderCart();
            }

            function renderCart() {
                const container = document.getElementById('posCartItems');
                const totalEl = document.getElementById('posTotal');

                if (cart.length === 0) {
                    container.innerHTML = '<p class="text-muted" style="text-align:center; margin-top: 2rem;">Agrega productos para comenzar</p>';
                    totalEl.textContent = '$0.00';
                    return;
                }

                let html = '';
                let total = 0;
                cart.forEach((item, i) => {
                    const subtotal = item.price * item.qty;
                    total += subtotal;
                    html += `
                    <div class="cart-item">
                        <div>
                            <strong>${item.name}</strong><br>
                            <small class="text-muted">$${item.price.toFixed(2)} x ${item.qty}</small>
                        </div>
                        <div class="flex flex-center gap-2">
                            <strong>$${subtotal.toFixed(2)}</strong>
                            <button class="btn btn-sm btn-danger btn-icon" onclick="posRemoveItem(${i})">✕</button>
                        </div>
                    </div>
                `;
                });
                container.innerHTML = html;
                totalEl.textContent = `$${total.toFixed(2)}`;
            }

            // 3. Cyber Grid Logic
            const stations = [
                { id: 1, name: 'PC-01', status: 'disponible' },
                { id: 2, name: 'PC-02', status: 'ocupada' },
                { id: 3, name: 'PC-03', status: 'disponible' },
                { id: 4, name: 'PC-04', status: 'mantenimiento' },
                { id: 5, name: 'PC-05', status: 'disponible' },
                { id: 6, name: 'PC-06', status: 'ocupada' },
                { id: 7, name: 'PC-07', status: 'disponible' },
                { id: 8, name: 'PC-08', status: 'disponible' },
                { id: 9, name: 'PC-09', status: 'ocupada' },
                { id: 10, name: 'PC-10', status: 'disponible' }
            ];

            function renderCyberGrid() {
                const grid = document.getElementById('cyberGrid');
                grid.innerHTML = stations.map(st => `
                <div class="station-card ${st.status}" onclick="toggleStationStatus(${st.id})">
                    <div class="station-number">${st.name}</div>
                    <div class="station-status">${st.status}</div>
                </div>
            `).join('');
            }

            function toggleStationStatus(id) {
                const station = stations.find(s => s.id === id);
                if (!station) return;
                const states = ['disponible', 'ocupada', 'mantenimiento'];
                const currentIndex = states.indexOf(station.status);
                station.status = states[(currentIndex + 1) % states.length];
                renderCyberGrid();
            }

            // Init
            renderCyberGrid();
        </script>
</body>
</html>