<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EIS System</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

<div class="app">
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">⚡ EIS System</div>
        <nav class="nav">
            <a href="#" class="nav-link active" data-view="dashboard"><span class="nav-icon">📊</span> Dashboard</a>
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
            <h1 class="header-title" id="pageTitle">Panel de Control</h1>
            <div class="header-actions">
                <span class="badge badge-info">👤 Admin</span>
            </div>
        </header>

        <div class="content">
            <!-- VENTAS (POS) VIEW -->
            <section id="view-ventas" class="view">
                <div class="pos-container">
                    <div class="card">
                        <h3 class="mb-2">🛍️ Catálogo de Productos</h3>
                        <div class="flex gap-2 mb-2">
                            <input type="text" class="form-control" placeholder="Buscar por nombre o código..." id="posSearch">
                        </div>
                        <div id="posProducts" class="grid grid-3" style="grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));">
                            <!-- Mock products -->
                            <div class="card" style="margin:0; cursor:pointer; border:2px solid transparent;" onclick="posAddItem('Teclado Mecánico', 45.00)">
                                <h4>Teclado Mecánico</h4>
                                <p class="text-muted">$45.00</p>
                            </div>
                            <div class="card" style="margin:0; cursor:pointer; border:2px solid transparent;" onclick="posAddItem('Mouse USB', 12.50)">
                                <h4>Mouse USB</h4>
                                <p class="text-muted">$12.50</p>
                            </div>
                            <div class="card" style="margin:0; cursor:pointer; border:2px solid transparent;" onclick="posAddItem('Auriculares', 35.00)">
                                <h4>Auriculares</h4>
                                <p class="text-muted">$35.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card pos-cart">
                        <h3 class="mb-2">🧾 Carrito Actual</h3>
                        <div id="posCartItems" style="min-height: 150px; max-height: 400px; overflow-y: auto;">
                            <p class="text-muted" style="text-align:center; margin-top: 2rem;">Agrega productos para comenzar</p>
                        </div>
                        <div class="cart-total">
                            <span>Total:</span>
                            <span id="posTotal">$0.00</span>
                        </div>
                        <button class="btn btn-success w-100 mt-2" style="width:100%" onclick="alert('✅ Venta registrada y stock actualizado (simulación)')">
                            💵 Procesar Venta
                        </button>
                    </div>
                </div>
            </section>
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