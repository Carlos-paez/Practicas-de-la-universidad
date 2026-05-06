<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas POS - EIS System</title>
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
                <a href="?pagina=ventas" class="nav-link active"><span class="nav-icon">🛒</span> Ventas (POS)</a>
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
                <h1 class="header-title">Punto de Venta (POS)</h1>
                <div class="header-actions">
                    <span class="badge badge-info">👤 Admin</span>
                </div>
            </header>

            <div class="content">
                <div class="pos-container">
                    <!-- Products Catalog -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">🛍️ Catálogo de Productos</h3>
                            <div style="min-width: 200px;">
                                <input type="text" class="form-control" placeholder="🔍 Buscar..." id="posSearch">
                            </div>
                        </div>
                        <div id="posProducts" class="grid" style="grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 1rem;">
                            <!-- Product Card -->
                            <div class="card" style="margin:0; cursor:pointer; border: 2px solid transparent; transition: all 0.2s ease; padding: 1rem; text-align: center;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='transparent'" onclick="posAddItem('Teclado Mecánico', 45.00)">
                                <div style="font-size: 2rem; margin-bottom: 0.5rem;">⌨️</div>
                                <h4 style="font-size: 0.95rem; margin-bottom: 0.25rem;">Teclado Mecánico</h4>
                                <p style="color: var(--primary); font-weight: 700; font-size: 1.1rem;">$45.00</p>
                            </div>
                            <div class="card" style="margin:0; cursor:pointer; border: 2px solid transparent; transition: all 0.2s ease; padding: 1rem; text-align: center;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='transparent'" onclick="posAddItem('Mouse USB', 12.50)">
                                <div style="font-size: 2rem; margin-bottom: 0.5rem;">🖱️</div>
                                <h4 style="font-size: 0.95rem; margin-bottom: 0.25rem;">Mouse USB</h4>
                                <p style="color: var(--primary); font-weight: 700; font-size: 1.1rem;">$12.50</p>
                            </div>
                            <div class="card" style="margin:0; cursor:pointer; border: 2px solid transparent; transition: all 0.2s ease; padding: 1rem; text-align: center;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='transparent'" onclick="posAddItem('Auriculares', 35.00)">
                                <div style="font-size: 2rem; margin-bottom: 0.5rem;">🎧</div>
                                <h4 style="font-size: 0.95rem; margin-bottom: 0.25rem;">Auriculares</h4>
                                <p style="color: var(--primary); font-weight: 700; font-size: 1.1rem;">$35.00</p>
                            </div>
                            <div class="card" style="margin:0; cursor:pointer; border: 2px solid transparent; transition: all 0.2s ease; padding: 1rem; text-align: center;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='transparent'" onclick="posAddItem('Monitor 24\"', 189.00)">
                                <div style="font-size: 2rem; margin-bottom: 0.5rem;">🖥️</div>
                                <h4 style="font-size: 0.95rem; margin-bottom: 0.25rem;">Monitor 24"</h4>
                                <p style="color: var(--primary); font-weight: 700; font-size: 1.1rem;">$189.00</p>
                            </div>
                            <div class="card" style="margin:0; cursor:pointer; border: 2px solid transparent; transition: all 0.2s ease; padding: 1rem; text-align: center;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='transparent'" onclick="posAddItem('Cable USB-C', 8.00)">
                                <div style="font-size: 2rem; margin-bottom: 0.5rem;">🔌</div>
                                <h4 style="font-size: 0.95rem; margin-bottom: 0.25rem;">Cable USB-C</h4>
                                <p style="color: var(--primary); font-weight: 700; font-size: 1.1rem;">$8.00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Shopping Cart -->
                    <div class="card pos-cart">
                        <div class="card-header">
                            <h3 class="card-title">🧾 Carrito Actual</h3>
                        </div>
                        <div id="posCartItems" style="min-height: 200px; max-height: 400px; overflow-y: auto;">
                            <p class="text-muted text-center" style="margin-top: 3rem;">🛒 Agrega productos para comenzar</p>
                        </div>
                        <div class="cart-total">
                            <span>Total:</span>
                            <span id="posTotal">$0.00</span>
                        </div>
                        <button class="btn btn-success w-100 mt-2" style="width:100%; font-size: 1rem; padding: 0.85rem;" onclick="alert('✅ Venta registrada y stock actualizado (simulación)')">
                            💵 Procesar Venta
                        </button>
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

        // POS functionality
        let cart = [];
        let total = 0;

        function posAddItem(name, price) {
            cart.push({name, price});
            total += price;
            updateCart();
        }

        function updateCart() {
            const cartDiv = document.getElementById('posCartItems');
            const totalDiv = document.getElementById('posTotal');
            
            if (cart.length === 0) {
                cartDiv.innerHTML = '<p class="text-muted text-center" style="margin-top: 3rem;">🛒 Agrega productos para comenzar</p>';
            } else {
                cartDiv.innerHTML = cart.map((item, index) => `
                    <div class="cart-item">
                        <div>
                            <div style="font-weight: 600; font-size: 0.9rem;">${item.name}</div>
                            <div style="color: var(--text-muted); font-size: 0.85rem;">$${item.price.toFixed(2)}</div>
                        </div>
                        <button onclick="removeItem(${index})" style="background: none; border: none; color: var(--danger); cursor: pointer; font-size: 1.2rem;">×</button>
                    </div>
                `).join('');
            }
            totalDiv.textContent = '$' + total.toFixed(2);
        }

        function removeItem(index) {
            total -= cart[index].price;
            cart.splice(index, 1);
            updateCart();
        }
    </script>
</body>
</html>
