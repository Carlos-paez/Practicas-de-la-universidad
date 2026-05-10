<?php require_once __DIR__ . '/menu.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --secondary: #ec4899;
            --dark: #0f0f23;
            --gray: #94a3b8;
            --gray-light: #e2e8f0;
            --light: #f8fafc;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --sidebar-width: 260px;
            --radius: 12px;
            --radius-sm: 8px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'DM Sans', system-ui, sans-serif;
            background: linear-gradient(135deg, #f0f4ff 0%, #e0e7ff 100%);
            min-height: 100vh;
            color: var(--dark);
        }

        .app-container { display: flex; min-height: 100vh; }

        .sidebar {
            width: var(--sidebar-width);
            background: var(--dark);
            position: fixed;
            height: 100vh;
            display: flex;
            flex-direction: column;
            z-index: 100;
        }

        .sidebar-brand {
            color: white;
            font-size: 1.4rem;
            font-weight: 700;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .brand-icon { color: var(--primary); font-size: 1.5rem; }

        .sidebar-nav {
            flex: 1;
            padding: 1rem 0.75rem;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 0.875rem;
            padding: 0.875rem 1rem;
            color: rgba(255,255,255,0.6);
            border-radius: var(--radius);
            transition: all 0.2s ease;
            font-size: 0.95rem;
            font-weight: 500;
            text-decoration: none;
        }

        .sidebar-nav a:hover { background: rgba(255,255,255,0.05); color: white; }

        .sidebar-nav a.active {
            background: var(--primary);
            color: white;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }

        .sidebar-logout {
            margin: 1rem;
            padding: 0.875rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            background: rgba(239, 68, 68, 0.1);
            color: #fca5a5;
            border-radius: var(--radius);
            transition: all 0.2s ease;
            font-size: 0.9rem;
            font-weight: 500;
            border: 1px solid rgba(239, 68, 68, 0.2);
            text-decoration: none;
        }

        .sidebar-logout:hover { background: rgba(239, 68, 68, 0.2); color: white; }

        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            min-height: 100vh;
        }

        .top-bar {
            background: white;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .page-title { font-size: 1.5rem; font-weight: 600; color: var(--dark); }

        .user-badge { display: flex; align-items: center; gap: 0.75rem; }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .content-area { padding: 2rem; }

        .toolbar {
            display: flex;
            gap: 1rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }

        .search-box {
            flex: 1;
            min-width: 250px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.75rem;
            border: 2px solid var(--gray-light);
            border-radius: var(--radius);
            font-size: 0.95rem;
            background: white;
            transition: all 0.2s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 0.875rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }

        .filter-tabs {
            display: flex;
            gap: 0.5rem;
            background: white;
            padding: 0.25rem;
            border-radius: var(--radius);
            border: 2px solid var(--gray-light);
        }

        .filter-tab {
            padding: 0.5rem 1rem;
            border-radius: var(--radius-sm);
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--gray);
            cursor: pointer;
            transition: all 0.2s ease;
            background: none;
            border: none;
        }

        .filter-tab:hover { color: var(--dark); }

        .filter-tab.active {
            background: var(--primary);
            color: white;
        }

        .add-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.25rem;
            background: var(--primary);
            color: white;
            border-radius: var(--radius);
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .add-btn:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .product-card {
            background: white;
            border-radius: var(--radius);
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            border: 1px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--primary);
            opacity: 0;
            transition: all 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            border-color: var(--primary-light, #c7d2fe);
        }

        .product-card:hover::before { opacity: 1; }

        .product-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .product-icon {
            width: 52px;
            height: 52px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .product-menu {
            position: relative;
        }

        .menu-trigger {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: var(--radius-sm);
            cursor: pointer;
            color: var(--gray);
            transition: all 0.2s ease;
        }

        .menu-trigger:hover { background: var(--light); color: var(--dark); }

        .product-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .product-category {
            font-size: 0.8rem;
            color: var(--gray);
            margin-bottom: 0.75rem;
        }

        .product-price {
            color: var(--primary);
            font-size: 1.35rem;
            font-weight: 700;
        }

        .product-stock {
            font-size: 0.8rem;
            font-weight: 500;
            margin-top: 0.5rem;
        }

        .stock-high { color: var(--success); }
        .stock-low { color: var(--warning); }
        .stock-out { color: var(--danger); }

        .product-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid var(--gray-light);
        }

        .action-btn {
            flex: 1;
            padding: 0.5rem;
            border-radius: var(--radius-sm);
            font-size: 0.85rem;
            font-weight: 500;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
            background: var(--light);
            color: var(--gray);
        }

        .action-btn:hover { background: var(--primary); color: white; }

        .action-btn.delete:hover { background: var(--danger); }

        .product-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .badge-available { background: rgba(16, 185, 129, 0.1); color: var(--success); }
        .badge-low { background: rgba(245, 158, 11, 0.1); color: var(--warning); }
        .badge-out { background: rgba(239, 68, 68, 0.1); color: var(--danger); }

        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: var(--gray);
        }

        .empty-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        .menu-toggle {
            display: none;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
            background: var(--light);
            border-radius: var(--radius);
            cursor: pointer;
            font-size: 1.25rem;
            color: var(--dark);
        }

        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 99;
        }

        @media (max-width: 1024px) {
            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: flex;
            }
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            .sidebar.open {
                transform: translateX(0);
            }
            .sidebar-overlay.open {
                display: block;
            }
            .main-content { margin-left: 0; }
            .toolbar {
                flex-direction: column;
                align-items: stretch;
            }
            .search-box { min-width: auto; }
            .filter-tabs {
                flex-wrap: wrap;
                justify-content: center;
            }
            .top-bar { padding: 1rem; }
            .content-area { padding: 1rem; }
            .page-title { font-size: 1.25rem; }
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
            .product-card { padding: 1rem; }
            .product-icon {
                width: 40px;
                height: 40px;
                font-size: 1.25rem;
            }
            .product-name { font-size: 1rem; }
            .product-price { font-size: 1.1rem; }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
            .toolbar { gap: 0.75rem; }
            .filter-tabs { gap: 0.25rem; }
            .filter-tab {
                padding: 0.375rem 0.75rem;
                font-size: 0.8rem;
            }
            .add-btn {
                padding: 0.625rem 1rem;
                font-size: 0.875rem;
            }
        }
    </style>
</head>

<body>
    <div class="app-container">
        <aside class="sidebar">
            <div class="sidebar-brand">
                <span class="brand-icon">◆</span>
                Mi App
            </div>
            <nav class="sidebar-nav">
                <a href="?pagina=home">⌂ Inicio</a>
                <a href="?pagina=productos" class="active">◫ Productos</a>
                <a href="?pagina=clientes">⊛ Clientes</a>
            </nav>
            <a href="?pagina=login&logout=1" class="sidebar-logout">⇪ Cerrar Sesión</a>
        </aside>

        <main class="main-content">
            <header class="top-bar">
                <button class="menu-toggle" onclick="toggleSidebar()">☰</button>
                <h1 class="page-title">Productos</h1>
                <div class="user-badge">
                    <span class="user-avatar">A</span>
                </div>
            </header>
            <div class="sidebar-overlay" onclick="toggleSidebar()"></div>

            <div class="content-area">
                <div class="toolbar">
                    <div class="search-box">
                        <span class="search-icon">⌕</span>
                        <input type="text" class="search-input" placeholder="Buscar productos...">
                    </div>
                    <div class="filter-tabs">
                        <button class="filter-tab active">Todos</button>
                        <button class="filter-tab">Disponibles</button>
                        <button class="filter-tab">Stock bajo</button>
                    </div>
                    <a href="#" class="add-btn">+ Agregar</a>
                </div>

                <div class="product-grid">
                    <div class="product-card">
                        <span class="product-badge badge-available">Activo</span>
                        <div class="product-header">
                            <div class="product-icon">◫</div>
                            <div class="product-menu">
                                <span class="menu-trigger">⋮</span>
                            </div>
                        </div>
                        <div class="product-name">Harina Pamela</div>
                        <div class="product-category">Granos y Harinas</div>
                        <div class="product-price">$25.00</div>
                        <div class="product-stock stock-high">Stock: 150 unidades</div>
                        <div class="product-actions">
                            <button class="action-btn">Editar</button>
                            <button class="action-btn delete">Eliminar</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <span class="product-badge badge-available">Activo</span>
                        <div class="product-header">
                            <div class="product-icon">◫</div>
                            <div class="product-menu">
                                <span class="menu-trigger">⋮</span>
                            </div>
                        </div>
                        <div class="product-name">Arroz María</div>
                        <div class="product-category">Granos y Harinas</div>
                        <div class="product-price">$30.00</div>
                        <div class="product-stock stock-high">Stock: 85 unidades</div>
                        <div class="product-actions">
                            <button class="action-btn">Editar</button>
                            <button class="action-btn delete">Eliminar</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <span class="product-badge badge-low">Stock bajo</span>
                        <div class="product-header">
                            <div class="product-icon">◫</div>
                            <div class="product-menu">
                                <span class="menu-trigger">⋮</span>
                            </div>
                        </div>
                        <div class="product-name">Azúcar La Pastora</div>
                        <div class="product-category">Endulzantes</div>
                        <div class="product-price">$18.00</div>
                        <div class="product-stock stock-low">Stock: 12 unidades</div>
                        <div class="product-actions">
                            <button class="action-btn">Editar</button>
                            <button class="action-btn delete">Eliminar</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <span class="product-badge badge-available">Activo</span>
                        <div class="product-header">
                            <div class="product-icon">◫</div>
                            <div class="product-menu">
                                <span class="menu-trigger">⋮</span>
                            </div>
                        </div>
                        <div class="product-name">Aceite Vegetal</div>
                        <div class="product-category">Aceites y Grasas</div>
                        <div class="product-price">$35.00</div>
                        <div class="product-stock stock-high">Stock: 200 unidades</div>
                        <div class="product-actions">
                            <button class="action-btn">Editar</button>
                            <button class="action-btn delete">Eliminar</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <span class="product-badge badge-out">Agotado</span>
                        <div class="product-header">
                            <div class="product-icon">◫</div>
                            <div class="product-menu">
                                <span class="menu-trigger">⋮</span>
                            </div>
                        </div>
                        <div class="product-name">Café Molido</div>
                        <div class="product-category">Bebidas</div>
                        <div class="product-price">$45.00</div>
                        <div class="product-stock stock-out">Sin stock</div>
                        <div class="product-actions">
                            <button class="action-btn">Editar</button>
                            <button class="action-btn delete">Eliminar</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <span class="product-badge badge-available">Activo</span>
                        <div class="product-header">
                            <div class="product-icon">◫</div>
                            <div class="product-menu">
                                <span class="menu-trigger">⋮</span>
                            </div>
                        </div>
                        <div class="product-name">Frijoles Negros</div>
                        <div class="product-category">Legumbres</div>
                        <div class="product-price">$22.00</div>
                        <div class="product-stock stock-high">Stock: 95 unidades</div>
                        <div class="product-actions">
                            <button class="action-btn">Editar</button>
                            <button class="action-btn delete">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

<script>
function toggleSidebar() {
    document.querySelector('.sidebar').classList.toggle('open');
    document.querySelector('.sidebar-overlay').classList.toggle('open');
}
</script>

</html>