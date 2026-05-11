# Proyecto de Práctica — PHP + JavaScript

Proyecto full-stack que combina un backend PHP con enrutador personalizado y un frontend moderno con Materialize CSS y animaciones AOS.

---

## Estructura

```
src/
├── index.php                 # Punto de entrada
├── app/
│   ├── core/
│   │   └── router.php        # Enrutador por ?pagina=
│   ├── controllers/
│   │   ├── login.php         #   Carga la vista de login
│   │   ├── stack.php         #   Carga la vista de tecnologías
│   │   └── ValidateLogin.php #   Valida login (POST)
│   └── views/
│       ├── login.php         #   Login estilo terminal con fondo Matrix
│       └── stack.php         #   Stack tecnológico con animaciones AOS
└── public/
    ├── styles/
    │   ├── style.css         #   Estilos generales
    │   ├── login.css         #   Estilos del login
    │   ├── stack.css         #   Estilos del stack
    │   ├── background.css    #   Fondo animado Matrix
    │   ├── target.css        #   Estilos de targeta
    │   ├── materialize.css   #   Framework CSS
    │   └── materialize.min.css
    └── scripts/
        ├── script.js         #   JavaScript personalizado
        ├── materialize.js    #   Framework JS
        └── materialize.min.js
```

---

## Funcionalidades

- **Login temático**: Página de inicio de sesión con estilo "terminal" y fondo de lluvia de caracteres japoneses al estilo Matrix
- **Stack tecnológico**: Página que muestra las tecnologías usadas con animaciones al hacer scroll (AOS)
- **Enrutador PHP**: Sistema de rutas simple por parámetro `?pagina=`
- **Responsive**: Diseño adaptable gracias a Materialize CSS

---

## Tecnologías

| Capa | Tecnologías |
|------|-------------|
| Backend | PHP 7+, Composer (PSR-4) |
| Frontend | Materialize CSS, AOS (Animate On Scroll), jQuery |
| Runtime JS | Bun |
| Estilos | CSS3, Google Fonts |

---

## Cómo Ejecutar

```bash
cd "PHP/proyecto de practica"

# Dependencias PHP
composer install

# Dependencias frontend (opcional)
bun install

# Servidor de desarrollo
php -S localhost:8000 -t src/
```

**Credenciales**: `admin` / `admin123`

Abrir en: `http://localhost:8000`

---

*Documentación actualizada — Mayo 2026*
