# Documentación — PHP MVC

## Descripción General

Aplicación PHP con arquitectura MVC básica. Incluye autenticación por sesiones, panel de administración con métricas, gestión de clientes y visualización de productos. Los datos son simulados (estáticos) — no requiere base de datos.

---

## Estructura

```
src/
├── index.php                 # Punto de entrada y enrutador
├── Controlers/               # Controladores
│   ├── home.php              #   Dashboard con estadísticas
│   ├── login.php             #   Página de login
│   ├── clientes.php          #   Gestión de clientes
│   ├── productos.php         #   Visualización de productos
│   ├── menu.php              #   Menú de navegación lateral
│   ├── 404.php               #   Página no encontrada
│   └── controler.php         #   Crea instancia de Estudiante
├── Views/                    # Vistas (HTML + CSS)
│   ├── home.php              #   Dashboard con tarjetas de stats
│   ├── login.php             #   Formulario de inicio de sesión
│   ├── clientes.php          #   Formulario + tabla de clientes
│   ├── Productos.php         #   Grid de productos con tarjetas
│   ├── menu.php              #   Sidebar de navegación responsive
│   └── 404.php               #   Página de error 404 estilizada
├── Models/                   # Modelos
│   └── classEstudiantes.php  #   Clase Estudiantes (namespace Clases)
├── public/
│   └── css/
│       └── styles.css        #   Estilos globales
└── vendor/                   # Dependencias Composer (PSR-4)
```

---

## Componentes

### index.php (Enrutador)
- Enruta según el parámetro `?pagina=` en la URL
- Si no hay sesión activa, redirige automáticamente al login
- Incluye el controlador correspondiente o muestra 404

### Autenticación
- **Credenciales**: `admin` / `admin`
- Usa `$_SESSION` para mantener la sesión
- Menú lateral con toggle responsive

### Vistas
- **home.php**: Dashboard con tarjetas de métricas (usuarios, ventas, productos, pedidos) con diseño de gradientes
- **login.php**: Formulario centrado con diseño moderno (fondo gradiente, sombras, DM Sans)
- **clientes.php**: Formulario para ingresar cliente + tabla con datos precargados
- **Productos.php**: Grid de 6 productos con imágenes de placeholder, descripción y precio
- **menu.php**: Sidebar con iconos, toggle para dispositivos móviles
- **404.php**: Página de error con diseño atractivo y enlace de retorno

### Modelos
- `classEstudiantes.php`: Clase de ejemplo con namespace `Clases`, demuestra POO básica en PHP

---

## Tecnologías

- **PHP 7+** — Lenguaje backend
- **HTML5 + CSS3** — Interfaz responsive (flexbox, grid, gradientes, variables CSS)
- **Composer** — Autoloading PSR-4
- **Google Fonts** — DM Sans

---

## Cómo Ejecutar

```bash
cd PHP/MVC
composer install
php -S localhost:8000 -t src/
```

Abrir en el navegador: `http://localhost:8000`

---

*Documentación actualizada — Mayo 2026*
