# Documentación - Proyecto a mano

## Descripción General

Proyecto PHP completo con arquitectura MVC para la gestión de un negocio (EIS System). Incluye:

- Dashboard con métricas en tiempo real
- Gestión de Inventario (CRUD)
- Punto de Venta (POS)
- Control de Cybercafé
- Gestión de Proveedores
- Reportes y Estadísticas
- Gestión de Activos

---

## Estructura de Archivos

```
src/
├── index.php                     # Punto de entrada (enrutador)
├── Models/
│   └── database.php              # Conexión PDO a MySQL
├── Controlers/
│   ├── dashboard.php
│   ├── inventario.php
│   ├── ventas.php
│   ├── proveedores.php
│   ├── reportes.php
│   ├── activos.php
│   ├── menu.php               # Controlador del menú
│   └── ciberControl.php
└── Views/
    ├── menu.php               # Menú de navegación
    ├── dashboard.php          # Dashboard principal
    ├── inventario.php
    ├── ventas.php
    ├── proveedores.php
    ├── reportes.php
    ├── activos.php
    ├── ciberControl.php
    └── styles/
        └── styles.css        # Estilos CSS
```

---

## index.php

Punto de entrada con sistema de enrutamiento básico.

| Código | Función |
|--------|--------|
| `$pagina = "menu"` | Define página por defecto |
| `$_GET["pagina"]` | Obtiene la página de la URL |
| `is_file($rutaVista)` | Verifica si existe el controlador |
| `require_once $rutaVista` | Carga el controlador |

---

## Models/database.php

Configuración de conexión a MySQL usando PDO.

| Variable | Valor |
|----------|-------|
| `$host` | localhost |
| `$db` | zwl |
| `$user` | root |
| `$pass` | (vacío) |

Opciones de PDO:
- `PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION`
- `PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC`
- `PDO::ATTR_EMULATE_PREPARES => false`

---

## Vistas

### Views/menu.php

Menú de navegación moderno con:
- Diseño gradient (DM Sans)
- Links: Dashboard, Inventario, Cyber Control, Proveedores, Reportes, Ventas, Activos
- Responsive design

### Views/dashboard.php

Dashboard SPA-like con:
- Sidebar de navegación
- Grid de métricas (4 columnas)
- Tablas de datos
- Carrito POS integrado
- Grid de estaciones de cyber

---

## Tecnologías Utilizadas

- **PHP 7+** con PDO
- **HTML5** semántico
- **CSS3** moderno (variables CSS, Flexbox, Grid)
- **JavaScript** vanilla (sin frameworks)
- **MySQL** con PDO
- **Composer** para autoload

---

## Requisitos

- PHP 7.4+
- MySQL 5.7+
- Servidor Apache/Nginx (XAMPP, WAMP, LAMP)

---

## Instalación

1. Importar la base de datos MySQL
2. Configurar credenciales en `Models/database.php`
3. Ejecutar `composer install`
4. Iniciar el servidor

---

##Flujo de la Aplicación

```
1. usuario accede a index.php
2. index.php recibe parámetro "pagina"
3. carga el controlador correspondiente
4. el controlador carga la vista
5. JS maneja navegación SPA
```

---

*Documentación actualizada automáticamente*