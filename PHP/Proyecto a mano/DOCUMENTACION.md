# Documentación de la Aplicación PHP

## Descripción General

Esta es una aplicación PHP básica con arquitectura MVC que implementa un sistema de autenticación simple. Incluye:

- Control de acceso con sesión de usuario
- Vistas (Views) para Login, Menú y Clientes
- Controladores (Controllers) para la lógica de negocio
- Modelos (Models) para la manipulación de datos

---

## Estructura de Archivos

```
src/
├── index.php                 # Punto de entrada principal
├── Views/
│   ├── login.php            # Formulario de autenticación
│   ├── menu.php             # Menú de navegación
│   └── clientes.php         # Página principal del usuario
├── Controlers/
│   ├── controler.php        # Controlador principal
│   └── cleintes.php         # Controlador de clientes (sin uso)
└── Models/
    └── classEstudiantes.php # Modelo de estudiantes
```

---

## index.php

Punto de entrada de la aplicación. Maneja el enrutamiento y control de autenticación.

| Línea | Código | Función |
|-------|--------|---------|
| 1 | `<?php` | Abre el bloque de código PHP |
| 2 | `session_start();` | Inicia o reanuda la sesión del usuario para mantener el estado de autenticación |
| 3 | `$pagina = "menu";` | Define la página por defecto como "menu" |
| 4-6 | `if(!empty($_GET["pagina"])){...}` | Verifica si se pasó el parámetro `pagina` por URL y lo asigna |
| 7 | `$paginasPublicas = ["menu", "login"];` | Define un array con las páginas que no requieren autenticación |
| 8-10 | `if (!in_array($pagina, $paginasPublicas) && !isset($_SESSION["usuario"])) {...}` | Redirige al login si la página no es pública y el usuario no está autenticado |
| 11-13 | `header("Location: index.php?pagina=login");` | Redirige temporalmente a la página de login |
| 12 | `exit;` | Termina la ejecución del script |
| 13-15 | `if ($pagina == "login" && isset($_SESSION["usuario"])) {...}` | Redirige a clientes si ya está logueado e intenta acceder a login |
| 16 | `$rutaVista = __DIR__ . '/Views/' . $pagina . '.php';` | Construye la ruta completa al archivo de vista |
| 17-19 | `if(is_file($rutaVista)){...}` | Verifica si el archivo de vista existe antes de incluirlo |
| 18 | `require_once $rutaVista;` | Incluye el archivo de vista una sola vez |
| 20 | `echo "Pagina no encontrada";` | Muestra mensaje de error si la vista no existe |

---

## Views/login.php

Formulario de autenticación de usuarios.

| Línea | Código | Función |
|-------|--------|---------|
| 1-6 | `<!DOCTYPE html>`... | Define la estructura HTML5 básica con meta tags para charset y viewport |
| 7-14 | `<style>...</style>` | Define estilos CSS en línea: fondo azul cadete, texto centrado y color blanco |
| 15-18 | `<h1>Login</h1>`... | Título del formulario |
| 19 | `<form action="index.php?pagina=login" method="post">` | Formulario que envía datos por método POST a index.php |
| 20-21 | `<label for="username">`... `<input type="text">` | Campo de texto para el nombre de usuario |
| 22-24 | `<label for="password">`... `<input type="password">` | Campo de contraseña (oculta caracteres) |
| 28 | `<input type="submit">` | Botón para enviar el formulario |
| 29-31 | `<?php if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {...}` | Bloque PHP que procesa los datos del formulario |
| 32-33 | `$user = "admin"; $pass = "admin";` | Define las credenciales hardcodeadas (admin/admin) |
| 34-35 | `$usuario = $_POST["usuario"]; $password = $_POST["password"];` | Asigna los valores recibidos del formulario |
| 36-38 | `if ($usuario == $user && $password == $pass) {...}` | Compara las credenciales ingresadas con las válidas |
| 37 | `$_SESSION["usuario"] = $usuario;` | Guarda el nombre de usuario en la sesión |
| 38 | `header("Location: index.php?pagina=clientes");` | Redirige a la página de clientes tras login exitoso |
| 41-43 | `else { echo ("<script>alert(...)</script>"); }` | Muestra alerta JS si las credenciales son incorrectas |

---

## Views/clientes.php

Página principal del usuario autenticado. Muestra información del estudiante.

| Línea | Código | Función |
|-------|--------|---------|
| 1-2 | `<?php require_once ...` | Importa el controlador principal |
| 3-4 | `if (isset($_GET["logout"])) {...}` | Procesa el cierre de sesión si se recibe el parámetro logout |
| 5 | `session_destroy();` | Destruye todas las variables de sesión |
| 6 | `header("Location: index.php?pagina=login");` | Redirige al login después de cerrar sesión |
| 7 | `exit;` | Termina la ejecución |
| 11-28 | `<!DOCTYPE html>`... `<style>` | Estructura HTML y estilos (fondo azul, texto grande, enlaces blancos) |
| 32 | `<?php echo htmlspecialchars($_SESSION["usuario"]); ?>` | Muestra el nombre del usuario sanitizado para prevenir XSS |
| 34 | `<?php vista(); ?>` | Llama a la función `vista()` del controlador para mostrar datos del estudiante |
| 37 | `<a href="index.php?pagina=login&logout=1">Cerrar Sesión</a>` | Enlace para cerrar sesión |

---

## Views/menu.php

Página de menú de navegación básica.

| Línea | Código | Función |
|-------|--------|---------|
| 1-7 | `<!DOCTYPE html>`... | Estructura HTML5 básica con meta tags |
| 11-14 | `<ul><li><a href="?pagina=clientes">Clientes</a></li></ul>` | Lista con enlace a la página de clientes |

---

## Controlers/controler.php

Controlador principal que carga el modelo de estudiantes y define la función de vista.

| Línea | Código | Función |
|-------|--------|---------|
| 1 | `<?php` | Abre el bloque PHP |
| 3 | `require_once __DIR__ . '/../Models/classEstudiantes.php';` | Importa el modelo de estudiantes desde la carpeta Models |
| 5 | `use Clases\Estudiantes;` | Importa la clase Estudiantes del namespace Clases |
| 7-10 | `$nombre = "Carlos"; $apellido = "Paez"; $edad = 19; $ci = 31470100;` | Define datos hardcodeados de un estudiante de ejemplo |
| 12 | `$estudiante_cargado = new Estudiantes($nombre, $apellido, $edad, $ci);` | Crea una instancia de la clase Estudiantes con los datos |
| 14-18 | `function vista() {...}` | Define función que muestra los datos del estudiante |
| 16 | `global $estudiante_cargado;` | Declara la variable `$estudiante_cargado` como global dentro de la función |
| 17 | `echo $estudiante_cargado->Saludar();` | Llama al método Saludar() del objeto estudiante |

---

## Controlers/cleintes.php

Controlador alternativo de clientes (no utilizado en la aplicación actual).

| Línea | Código | Función |
|-------|--------|---------|
| 3-4 | `if (is_file('views/'. $pagina . '.php')) {...}` | Verifica si existe el archivo de vista (ruta en minúsculas) |
| 5 | `require_once 'views/'. $pagina . '.php';` | Incluye la vista solicitada |
| 6-8 | `else { echo "Pagina en construccion"; }` | Muestra mensaje si la vista no existe |

---

## Models/classEstudiantes.php

Modelo que define la clase Estudiantes con propiedades y métodos.

| Línea | Código | Función |
|-------|--------|---------|
| 1 | `<?php` | Abre el bloque PHP |
| 3 | `namespace Clases;` | Define el namespace Clases para la clase |
| 5-10 | `class Estudiantes { ... }` | Define la clase Estudiantes |
| 7-10 | `private $nombre; private $apellido; private $edad; private $ci;` | Define propiedades privadas para encapsulamiento |
| 12-18 | `function __construct($nombre, $apellido, $edad, $ci) {...}` | Constructor que inicializa las propiedades con los valores pasados |
| 13-16 | `$this->nombre = $nombre; ...` | Asigna los valores a las propiedades del objeto |
| 20-22 | `public function getNombre(){ return $this->nombre; }` | Getter para obtener el nombre |
| 23-25 | `public function getApellido(){ return $this->apellido; }` | Getter para obtener el apellido |
| 26-28 | `public function getEdad(){ return $this->edad; }` | Getter para obtener la edad |
| 29-31 | `public function getCi(){ return $this->ci; }` | Getter para obtener el CI |
| 33-35 | `public function setNombre($nombre){ $this->nombre = $nombre; }` | Setter para modificar el nombre |
| 36-38 | `public function setApellido($apellido){ $this->apellido = $apellido; }` | Setter para modificar el apellido |
| 39-41 | `public function setEdad($edad){ $this->edad = $edad; }` | Setter para modificar la edad |
| 42-44 | `public function setCi($ci){ $this->ci = $ci; }` | Setter para modificar el CI |
| 46-48 | `public function Saludar(){ return "..."; }` | Método que retorna una cadena con los datos del estudiante formateados |
| 50 | `?>` | Cierra el bloque PHP |

---

## Flujo de la Aplicación

```
1. Usuario accede a index.php
2. Si no está autenticado → Redirige a login
3. Usuario ingresa credenciales (admin/admin)
4. Login válido → Guarda sesión → Redirige a clientes
5. Clientes muestra datos del estudiante desde el modelo
6. Usuario puede cerrar sesión → Redirige a login
```

---

## Notas de Seguridad

- Las credenciales están hardcodeadas en el código (no recomendado para producción)
- No hay hash de contraseña (debería usarse password_hash/password_verify)
- La sesión no tiene tiempo de expiración
- El modelo usa htmlspecialchars para prevenir XSS en clientes.php
- El archivo cleintes.php (controlador) tiene un bug: ruta en minúsculas `views/` en lugar de `Views/`

---

## Tecnologías Utilizadas

- PHP 7+ (sesiones, programación orientada a objetos)
- HTML5
- CSS3 básico
- Arquitectura MVC simple

---

*Documentación generada automáticamente*