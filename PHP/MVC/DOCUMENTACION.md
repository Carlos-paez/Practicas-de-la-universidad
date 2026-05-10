# Documentación - PHP MVC

## Descripción General

Aplicación PHP con arquitectura MVC básica. Incluye autenticación, gestión de clientes y productos.

---

## Estructura

```
src/
├── index.php               # Punto de entrada
├── Controlers/            # Controladores
│   ├── home.php
│   ├── login.php
│   ├── logout.php
│   ├── clientes.php
│   ├── productos.php
│   ├── menu.php
│   ├── 404.php
│   └── controler.php
├── Views/                 # Vistas
│   ├── home.php
│   ├── login.php
│   ├── clientes.php
│   ├── Productos.php
│   ├── menu.php
│   └── 404.php
├── Models/                # Modelos
│   └── classEstudiantes.php
├── public/
│   └── css/styles.css
└── vendor/               # Composer
```

---

## Componentes

### index.php
- Enrutamiento básico por parámetro `?pagina=`
- Redirige a login si no hay sesión

### Login
- Credenciales: admin/admin
- Crea sesión PHP

### Modelos
- `classEstudiantes.php`: Clase con namespace Clases

---

## Tecnologías
- PHP 7+
- HTML5, CSS3
- Composer

*Documentación actualizada*