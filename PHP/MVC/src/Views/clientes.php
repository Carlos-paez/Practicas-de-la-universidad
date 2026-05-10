<?php require_once __DIR__ . '/menu.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --primary-light: #e0e7ff;
            --secondary: #ec4899;
            --dark: #0f0f23;
            --gray: #94a3b8;
            --gray-light: #e2e8f0;
            --gray-dark: #475569;
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

        .clients-layout {
            display: grid;
            grid-template-columns: 400px 1fr;
            gap: 2rem;
        }

        .card {
            background: white;
            border-radius: var(--radius);
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--dark);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group { margin-bottom: 1rem; }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark);
            font-size: 0.9rem;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid var(--gray-light);
            border-radius: var(--radius-sm);
            font-size: 0.95rem;
            transition: all 0.2s ease;
            background: var(--light);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: var(--radius-sm);
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            width: 100%;
        }

        .btn-primary:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
        }

        .btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
        }

        .table-card {
            overflow: hidden;
        }

        .table-toolbar {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .search-box {
            flex: 1;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 0.625rem 1rem 0.625rem 2.5rem;
            border: 2px solid var(--gray-light);
            border-radius: var(--radius-sm);
            font-size: 0.9rem;
            background: var(--light);
            transition: all 0.2s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .search-icon {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }

        .filter-pill {
            display: flex;
            gap: 0.25rem;
            background: var(--light);
            padding: 0.25rem;
            border-radius: var(--radius-sm);
        }

        .filter-btn {
            padding: 0.5rem 0.875rem;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--gray);
            cursor: pointer;
            transition: all 0.2s ease;
            background: none;
            border: none;
        }

        .filter-btn:hover { color: var(--dark); }

        .filter-btn.active {
            background: white;
            color: var(--primary);
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            padding: 0.875rem 1rem;
            text-align: left;
            font-weight: 600;
            color: var(--gray);
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            background: var(--light);
            border-bottom: 1px solid var(--gray-light);
        }

        td {
            padding: 1rem;
            border-bottom: 1px solid var(--gray-light);
            vertical-align: middle;
        }

        tr:last-child td { border-bottom: none; }

        tr:hover { background: var(--light); }

        .client-info {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .client-avatar {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .client-details h4 {
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 0.125rem;
        }

        .client-details p {
            font-size: 0.8rem;
            color: var(--gray);
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            padding: 0.375rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-active {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
        }

        .status-active::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--success);
        }

        .status-inactive {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning);
        }

        .status-inactive::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--warning);
        }

        .actions-cell {
            display: flex;
            gap: 0.5rem;
        }

        .action-btn {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: var(--radius-sm);
            cursor: pointer;
            transition: all 0.2s ease;
            background: var(--light);
            color: var(--gray);
            border: none;
        }

        .action-btn:hover {
            background: var(--primary);
            color: white;
        }

        .action-btn.delete:hover {
            background: var(--danger);
            color: white;
        }

        .stats-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .stat-item {
            background: var(--light);
            padding: 1rem;
            border-radius: var(--radius-sm);
            text-align: center;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .stat-label {
            font-size: 0.75rem;
            color: var(--gray);
            margin-top: 0.25rem;
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
            .clients-layout { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            .menu-toggle { display: flex; }
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            .sidebar.open { transform: translateX(0); }
            .sidebar-overlay.open { display: block; }
            .main-content { margin-left: 0; }
            .top-bar { padding: 1rem; }
            .content-area { padding: 1rem; }
            .page-title { font-size: 1.25rem; }
            .stats-row { grid-template-columns: repeat(3, 1fr); gap: 0.5rem; }
            .stat-value { font-size: 1.1rem; }
            .table-toolbar { flex-direction: column; }
            .form-row { grid-template-columns: 1fr; }
            .clients-layout { gap: 1rem; }
            table, th, td { padding: 0.5rem; font-size: 0.85rem; }
            .client-avatar { width: 32px; height: 32px; font-size: 0.75rem; }
        }

        @media (max-width: 480px) {
            .stats-row { grid-template-columns: 1fr 1fr; }
            .search-box { order: -1; }
            .filter-pill { display: none; }
            .product-grid { gap: 0.75rem; }
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
                <a href="?pagina=productos">◫ Productos</a>
                <a href="?pagina=clientes" class="active">⊛ Clientes</a>
            </nav>
            <a href="?pagina=login&logout=1" class="sidebar-logout">⇪ Cerrar Sesión</a>
        </aside>

        <main class="main-content">
            <header class="top-bar">
                <button class="menu-toggle" onclick="toggleSidebar()">☰</button>
                <h1 class="page-title">Clientes</h1>
                <div class="user-badge">
                    <span class="user-avatar">A</span>
                </div>
            </header>
            <div class="sidebar-overlay" onclick="toggleSidebar()"></div>

            <div class="content-area">
                <div class="clients-layout">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Nuevo Cliente</h2>
                        </div>
                        <form method="POST" action="?pagina=clientes">
                            <div class="form-group">
                                <label class="form-label">Nombre completo</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Carlos" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Apellido</label>
                                    <input type="text" class="form-control" name="apellido" placeholder="Páez" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Cédula</label>
                                    <input type="text" class="form-control" name="ci" placeholder="31470100" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" name="email" placeholder="correo@ejemplo.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" name="telefono" placeholder="0412 123 4567">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                        </form>
                    </div>

                    <div class="card table-card">
                        <div class="card-header">
                            <h2 class="card-title">Lista de Clientes</h2>
                        </div>
                        <div class="stats-row">
                            <div class="stat-item">
                                <div class="stat-value">48</div>
                                <div class="stat-label">Total Clientes</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">42</div>
                                <div class="stat-label">Activos</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">6</div>
                                <div class="stat-label">Inactivos</div>
                            </div>
                        </div>
                        <div class="table-toolbar">
                            <div class="search-box">
                                <span class="search-icon">⌕</span>
                                <input type="text" class="search-input" placeholder="Buscar cliente...">
                            </div>
                            <div class="filter-pill">
                                <button class="filter-btn active">Todos</button>
                                <button class="filter-btn">Activos</button>
                                <button class="filter-btn">Inactivos</button>
                            </div>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Cédula</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="client-info">
                                            <div class="client-avatar">CP</div>
                                            <div class="client-details">
                                                <h4>Carlos Páez</h4>
                                                <p>cperez@email.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>31470100</td>
                                    <td><span class="status-badge status-active">Activo</span></td>
                                    <td>
                                        <div class="actions-cell">
                                            <button class="action-btn" title="Editar">✎</button>
                                            <button class="action-btn delete" title="Eliminar">✕</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="client-info">
                                            <div class="client-avatar">MG</div>
                                            <div class="client-details">
                                                <h4>María García</h4>
                                                <p>mgarcia@email.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>28765432</td>
                                    <td><span class="status-badge status-active">Activo</span></td>
                                    <td>
                                        <div class="actions-cell">
                                            <button class="action-btn" title="Editar">✎</button>
                                            <button class="action-btn delete" title="Eliminar">✕</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="client-info">
                                            <div class="client-avatar">JL</div>
                                            <div class="client-details">
                                                <h4>Juan López</h4>
                                                <p>jlopez@email.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>12345678</td>
                                    <td><span class="status-badge status-inactive">Inactivo</span></td>
                                    <td>
                                        <div class="actions-cell">
                                            <button class="action-btn" title="Editar">✎</button>
                                            <button class="action-btn delete" title="Eliminar">✕</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="client-info">
                                            <div class="client-avatar">AS</div>
                                            <div class="client-details">
                                                <h4>Ana Sánchez</h4>
                                                <p>asanchez@email.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>22334455</td>
                                    <td><span class="status-badge status-active">Activo</span></td>
                                    <td>
                                        <div class="actions-cell">
                                            <button class="action-btn" title="Editar">✎</button>
                                            <button class="action-btn delete" title="Eliminar">✕</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="client-info">
                                            <div class="client-avatar">LR</div>
                                            <div class="client-details">
                                                <h4>Luis Ramírez</h4>
                                                <p>lramirez@email.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>55443322</td>
                                    <td><span class="status-badge status-active">Activo</span></td>
                                    <td>
                                        <div class="actions-cell">
                                            <button class="action-btn" title="Editar">✎</button>
                                            <button class="action-btn delete" title="Eliminar">✕</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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