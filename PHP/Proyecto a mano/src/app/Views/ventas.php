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
            <a href="?pagina=inventario" class="nav-link"><span class="nav-icon">📦</span> Inventario</a>
            <a href="?pagina=ventas" class="nav-link active"><span class="nav-icon">🛒</span> Ventas (POS)</a>
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
            <h1 class="header-title" id="pageTitle">Punto de Venta (POS)</h1>
            <div class="header-actions">
                <span class="badge badge-info">👤 Admin</span>
            </div>
        </header>

        <div class="content">
            <!-- VENTAS (POS) VIEW -->
            <section id="view-ventas" class="view active">
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