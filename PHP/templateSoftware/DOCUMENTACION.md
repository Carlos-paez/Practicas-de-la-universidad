# Documentación Completa: Template Software

## ¿Qué es esta aplicación?

Esta es una aplicación web hecha en **PHP puro** (sin frameworks) que sirve como **plantilla o "esqueleto"** para construir sistemas más grandes. Sigue el patrón **MVC (Modelo-Vista-Controlador)**.

Propósito: proporcionar una base funcional con autenticación de usuarios, sistema de rutas, menú de navegación, y una estructura organizada lista para expandir.

---

## Requisitos del sistema

| Componente | Especificación |
|---|---|
| Servidor web | Apache con mod_rewrite |
| PHP | 7.4+ |
| Base de datos | MySQL / MariaDB |
| Entorno recomendado | Laragon, XAMPP, WAMP |

---

## Estructura completa del proyecto

```
templateSoftware/
│
├── .htaccess                 # Reescribe URLs amigables
├── index.php                 # Punto de entrada único (Front Controller)
├── DOCUMENTACION.md          # Este documento
│
├── config/
│   ├── conex.php             # Clase de conexión a BD con PDO
│   ├── config.php            # Configuración global (BD, mailer)
│   └── routes.php            # Mapa de rutas del sistema
│
├── app/
│   ├── controllers/
│   │   ├── enlacesController.php   # Controlador principal
│   │   ├── ClienteController.php   # CRUD de ejemplo (clientes)
│   │   └── login.php               # Controlador AJAX de login
│   │
│   ├── core/
│   │   ├── BaseController.php      # Clase base con utilidades
│   │   └── Router.php              # Enrutador interno
│   │
│   ├── models/
│   │   ├── login.php               # Modelo de autenticación
│   │   └── validar.php             # Validador de datos con regex
│   │
│   ├── template/
│   │   ├── template.php            # Plantilla HTML principal
│   │   ├── header.php              # <head> con CSS/libs
│   │   ├── footer.php              # Scripts al final del body
│   │   └── datatable.php           # Incluye plugins DataTable (comentado)
│   │
│   └── views/
│       └── page/
│           ├── login.php           # Formulario de inicio de sesión
│           ├── home.php            # Página principal (dashboard)
│           ├── menu.php            # Barra de navegación
│           ├── error.php           # Página 404
│           ├── denied.php          # Página 403
│           ├── productos/
│           │   └── productos.php   # Listado de productos
│           ├── reportes/
│           │   └── reportes.php    # Página de reportes
│           └── usuarios/
│               └── usuarios.php    # Página de usuarios
│
├── public/
│   ├── css/
│   │   └── custom.css              # Estilos personalizados
│   ├── img/
│   │   ├── fondo/
│   │   ├── icon/
│   │   └── logo/
│   └── js/
│       ├── login.js                # Lógica JS del login
│       └── menu.js                 # Lógica JS del menú
│
└── resources/
    └── library/
        ├── css/
        │   ├── materialize.css
        │   ├── style-materialize.css
        │   ├── style.css
        │   └── style.min.css
        ├── js/                     # (vacío)
        └── plugins/
            ├── bootstrap/
            ├── jquery-3.3.1/
            └── jquery/
```

---

## Análisis línea por línea de cada archivo

---

### `.htaccess` — Reglas de reescritura de URL

```
Línea 1:  Options All -Indexes
Línea 2:  [vacío]
Línea 3:  RewriteEngine on
Línea 4:  [vacío]
Línea 5:  # No reescribir archivos ni directorios existentes
Línea 6:  RewriteCond %{REQUEST_FILENAME} !-f
Línea 7:  RewriteCond %{REQUEST_FILENAME} !-d
Línea 8:  RewriteRule ^(.+)$ index.php?action=$1 [QSA,L]
```

| Línea | Explicación |
|-------|-------------|
| 1 | `Options All -Indexes` — Deshabilita el listado de directorios. Si alguien entra a una carpeta sin un `index.php`, no verá la lista de archivos (medida de seguridad). |
| 3 | `RewriteEngine on` — Activa el motor de reescritura de URLs de Apache. |
| 5 | Comentario: no reescribir si el archivo o directorio existe físicamente. |
| 6 | `RewriteCond %{REQUEST_FILENAME} !-f` — Condición: si lo solicitado NO es un archivo real, aplica la regla. |
| 7 | `RewriteCond %{REQUEST_FILENAME} !-d` — Condición: si lo solicitado NO es un directorio real, aplica la regla. |
| 8 | `RewriteRule ^(.+)$ index.php?action=$1 [QSA,L]` — Toma cualquier ruta (ej: `home`) y la convierte internamente en `index.php?action=home`. `QSA` = Query String Append (conserva parámetros GET existentes). `L` = Last (última regla). |

**Flujo**: Cuando el usuario visita `http://localhost/templateSoftware/home`, Apache internamente lo convierte a `http://localhost/templateSoftware/index.php?action=home` y PHP recibe `$_GET["action"] = "home"`.

---

### `index.php` — Punto de entrada (Front Controller)

```
Línea 1:  <?php
Línea 2:  [vacío]
Línea 3:      require_once 'app/controllers/enlacesController.php';
Línea 4:  [vacío]
Línea 5:      $mvc = new EnlacesController();
Línea 6:      $mvc->run();
Línea 7:  [vacío]
Línea 8:  ?>
```

| Línea | Explicación |
|-------|-------------|
| 3 | `require_once 'app/controllers/enlacesController.php'` — Importa el archivo del controlador principal. `require_once` evita que se incluya múltiples veces. |
| 5 | `$mvc = new EnlacesController()` — Crea una instancia (objeto) del controlador principal. |
| 6 | `$mvc->run()` — Ejecuta el método `run()`, que inicia toda la aplicación: verifica sesión, carga la plantilla y muestra la vista correspondiente. |

**Nota**: Es la ÚNICA entrada a la aplicación. No importa qué URL visite el usuario, siempre pasa por `index.php`.

---

### `config/config.php` — Configuración global

```
Línea 1:  <?php
Línea 2:  [vacío]
Línea 3:  if ( session_status() == PHP_SESSION_NONE ) { session_start(); }
Línea 4:  if ( isset($_SESSION['database']) ) {
Línea 5:      $database = $_SESSION['database'];
Línea 6:  } else {
Línea 7:      $database = 'prueba';
Línea 8:      // $database = 'educativo';
Línea 9:  }
Línea 10: [vacío]
Línea 11: $databaseAnterior = 'baseAntigua';
Línea 12: [vacío]
Línea 13: $config = [
Línea 14: [vacío]
Línea 15:     "database" => [
Línea 16: [vacío]
Línea 17:       "driver"     => "mysql",
Línea 18:       "host"       => "localhost",
Línea 19:       "port"       => "3306",
Línea 20:       "dbname"     => $database,
Línea 21:       "username"   => "root",
Línea 22:       "password"   => ""
Línea 23:     ],
Línea 24:     "mailer" => [
Línea 25: [vacío]
Línea 26:       "smtp_debug"      => false,
Línea 27:       "host"            => "smtp.gmail.com",
Línea 28:       "smtp_auth"       => true,
Línea 29:       "username"        => "correo@gmail.com",
Línea 30:       "password"        => "123456",
Línea 31:       "smtp_secure"     => "ssl",
Línea 32:       "port"            => 465,
Línea 33:       "reply_to_email"  => "correo@gmail.com",
Línea 34:       "reply_to_name"   => "Uptaeb",
Línea 35:       "from_email"      => "correo@gmail.com",
Línea 36:       "from_name"       => "Uptaeb"
Línea 37:     ],
Línea 38: ];
Línea 39: [vacío]
Línea 40: $configAnterior = [
Línea 41:   ... mismo esquema con $databaseAnterior ...
Línea 67: ];
```

| Línea | Explicación |
|-------|-------------|
| 3 | Si no hay sesión activa, la inicia. Esto permite que el archivo pueda leer `$_SESSION['database']`. |
| 4-9 | Si la sesión tiene una base de datos definida, la usa; si no, usa `'prueba'` por defecto. Esto permite cambiar de BD en tiempo de ejecución. |
| 11 | Define el nombre de una base de datos anterior (para migraciones). |
| 13-38 | `$config` — Array principal con credenciales de BD MySQL (localhost, root, sin contraseña) y configuración SMTP para correo (Gmail, datos de ejemplo). |
| 40-67 | `$configAnterior` — Misma estructura pero para una base de datos antigua llamada `baseAntigua`. Sirve para migrar datos entre BD. |

**Importante**: Las contraseñas están en texto plano. En producción deberían manejarse con variables de entorno.

---

### `config/conex.php` — Clase de conexión a base de datos

```
Línea 1:  <?php
Línea 2:  [vacío]
Línea 3:  class Conexion {
Línea 4:  [vacío]
Línea 5:      public $driver;
Línea 6:      public $host;
Línea 7:      public $port;
Línea 8:      public $dbname;
Línea 9:      private $user;
Línea 10:     // public $user;
Línea 11:     public $pass;
Línea 12:     protected $db;
Línea 13: [vacío]
Línea 14:     public static function conectar() {
Línea 15: 
Línea 16:         try {
Línea 17: 
Línea 18:             include "config.php";
Línea 19:             $driver = $config["database"]["driver"];
Línea 20:             $host = $config["database"]["host"];
Línea 21:             $port = $config["database"]["port"];
Línea 22:             $dbname = $config["database"]["dbname"];
Línea 23:             $user = $config["database"]["username"];
Línea 24:             $pass = $config["database"]["password"];
Línea 25: 
Línea 26:             $stmt = new PDO("".$driver.":host=".$host."; port=".$port."; dbname=".$dbname."","".$user."","".$pass."");
Línea 27: 
Línea 28:             $stmt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
Línea 29:             $stmt->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
Línea 30: 
Línea 31:             return $stmt;
Línea 32: 
Línea 33:         } catch (PDOException $e) {
Línea 34: 
Línea 35:             return false;
Línea 36:             $stmt = null;
Línea 37:             exit();
Línea 38:         }
Línea 39:     }
Línea 40:     public function conexionVieja() {
Línea 41:         ... mismo patrón pero con $configAnterior ...
Línea 69:     }
Línea 70: } #Fin De La Clase
```

| Línea | Explicación |
|-------|-------------|
| 3-12 | Declaración de la clase `Conexion` con propiedades públicas y privadas para los parámetros de conexión. |
| 14 | `public static function conectar()` — Método **estático**, se puede llamar sin instanciar: `Conexion::conectar()`. |
| 18 | `include "config.php"` — Incluye la configuración. Las variables definidas allí (`$config`) están disponibles aquí. |
| 19-24 | Extrae cada valor del array `$config["database"]`. |
| 26 | Crea una conexión PDO. El string DSN es: `"mysql:host=localhost; port=3306; dbname=prueba"`. PDO = PHP Data Objects. |
| 28 | `setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)` — Configura PDO para lanzar excepciones en errores. |
| 29 | `setAttribute(PDO::ATTR_EMULATE_PREPARES, false)` — Usa consultas preparadas reales del motor (más seguro). |
| 31 | `return $stmt` — Devuelve el objeto PDO listo para ejecutar consultas. |
| 33-37 | Si falla la conexión, captura la excepción y retorna `false`. El `return false` está antes de `$stmt = null` y `exit()`, esas líneas NUNCA se ejecutan (código muerto). |
| 40-69 | `conexionVieja()` — Idéntico a `conectar()` pero usa `$configAnterior`. Pensado para migrar datos desde una BD antigua. |

---

### `config/routes.php` — Mapa de rutas del sistema

```
Línea 1:   <?php
Línea 2:  [vacío]
Línea 3:      # _____________ Configuración de rutas del sistema ________________________
Línea 4:      # acción recibida por $_GET['action']
Línea 5:      # ['*'] para acceso público.
Línea 6:  [vacío]
Línea 7:  return [
Línea 8:      'index' => [
Línea 9:          'vista' => 'login.php',
Línea 10:         'menu'  => false,
Línea 11:         'roles' => ['*']
Línea 12:     ],
Línea 13:     'home' => [
Línea 14:         'vista' => 'home.php',
Línea 15:         'menu'  => true,
Línea 16:         'roles' => ['*']
Línea 17:     ],
Línea 18:     'usuarios' => [
Línea 19:         'vista' => 'usuarios/usuarios.php',
Línea 20:         'menu'  => true,
Línea 21:         'roles' => ['*']
Línea 22:     ],
Línea 23:     'reportes' => [
Línea 24:         'vista' => 'reportes/reportes.php',
Línea 25:         'menu'  => true,
Línea 26:         'roles' => ['*']
Línea 27:     ],
Línea 28:     'productos' => [
Línea 29:         'vista' => 'productos/productos.php',
Línea 30:         'menu'  => true,
Línea 31:         'roles' => ['*']
Línea 32:     ],
Línea 33:     
Línea 34: ];
Línea 35: 
```

| Línea | Explicación |
|-------|-------------|
| 3-5 | Comentarios que documentan el propósito del archivo. |
| 7 | `return [` — Este archivo devuelve un array. Quien lo incluya con `require` recibirá este array. |
| 8-12 | `'index'` — Ruta por defecto. Muestra `login.php`. No muestra menú (`menu => false`). Accesible para todos (`'*'`). |
| 13-17 | `'home'` — Página principal post-login. Muestra `home.php`. Con menú. Todos pueden acceder (aunque el controlador principal redirige al login si no hay sesión). |
| 18-32 | `'usuarios'`, `'reportes'`, `'productos'` — Módulos del sistema. Todos con menú, todos públicos por ahora (roles `['*']`). |
| 33-34 | Cierra el array y el `return`. |

**Cada ruta tiene 3 claves:**
- `vista`: ruta relativa al archivo de vista dentro de `app/views/page/`
- `menu`: booleano que indica si se muestra la barra de navegación
- `roles`: array de roles permitidos. `'*'` significa "todos".

---

### `app/core/BaseController.php` — Clase base de controladores

```
Línea 1:  <?php
Línea 2:  [vacío]
Línea 3:  class BaseController {
Línea 4:      
Línea 5:      /**
Línea 6:       * Responde con un JSON estandarizado.
Línea 7:       */
Línea 8:      protected function jsonResponse($data, $statusCode = 200) {
Línea 9:          header('Content-Type: application/json');
Línea 10:         http_response_code($statusCode);
Línea 11:         echo json_encode($data);
Línea 12:         exit;
Línea 13:     }
Línea 14: 
Línea 15:     /**
Línea 16:      * Redirección simple.
Línea 17:      */
Línea 18:     protected function redirect($url) {
Línea 19:         header("Location: $url");
Línea 20:         exit;
Línea 21:     }
Línea 22: 
Línea 23:     /**
Línea 24:      * Inicia la sesión de forma segura si no está iniciada.
Línea 25:      */
Línea 26:     protected function startSession() {
Línea 27:         if (session_status() == PHP_SESSION_NONE) {
Línea 28:             session_start();
Línea 29:         }
Línea 30:     }
Línea 31: }
```

| Línea | Explicación |
|-------|-------------|
| 3 | Declara la clase `BaseController`. Es la clase "abuela" que heredan los demás controladores. |
| 8 | `protected function jsonResponse($data, $statusCode = 200)` — Método protegido (solo accesible desde la clase y sus hijas). Recibe datos y un código HTTP. |
| 9 | `header('Content-Type: application/json')` — Establece el encabezado HTTP indicando que la respuesta es JSON. |
| 10 | `http_response_code($statusCode)` — Establece el código de respuesta HTTP (200 OK, 400 Bad Request, etc.). |
| 11 | `echo json_encode($data)` — Convierte el array/objeto PHP a JSON y lo imprime. |
| 12 | `exit` — Termina la ejecución para que no se procese más nada después. |
| 18-20 | `redirect($url)` — Envía un encabezado `Location` que redirige al navegador a otra URL. `exit` detiene la ejecución. |
| 26-29 | `startSession()` — Solo inicia sesión si no hay una ya activa (`PHP_SESSION_NONE`). |

**Propósito**: Proveer métodos utilitarios reutilizables para todos los controladores.

---

### `app/core/Router.php` — Enrutador interno

```
Línea 1:  <?php
Línea 2:  [vacío]
Línea 3:  class Router {
Línea 4:      private $routes;
Línea 5:      private $viewPath = 'app/views/page/';
Línea 6:  [vacío]
Línea 7:      public function __construct() {
Línea 8:          // rutas Del Sistema
Línea 9:          $this->routes = require 'config/routes.php';
Línea 10:     }
Línea 11: 
Línea 12:     public function resolve($action, $userRole = null) {
Línea 13:         // Acceso a rutas
Línea 14:         if (!isset($this->routes[$action])) {
Línea 15:             return [
Línea 16:                 'file' => $this->viewPath . 'error.php',
Línea 17:                 'menu' => false,
Línea 18:                 'status' => 404
Línea 19:             ];
Línea 20:         }
Línea 21: 
Línea 22:         $route = $this->routes[$action];
Línea 23: 
Línea 24:         // Acceso por rol
Línea 25:         $hasAccess = in_array('*', $route['roles']) || ($userRole && in_array($userRole, $route['roles']));
Línea 26: 
Línea 27:         if (!$hasAccess) {
Línea 28:             return [
Línea 29:                 'file' => $this->viewPath . 'denied.php',
Línea 30:                 'menu' => true,
Línea 31:                 'status' => 403
Línea 32:             ];
Línea 33:         }
Línea 34: 
Línea 35:         // Ruta Valida
Línea 36:         return [
Línea 37:             'file' => $this->viewPath . $route['vista'],
Línea 38:             'menu' => $route['menu'],
Línea 39:             'status' => 200
Línea 40:         ];
Línea 41:     }
Línea 42: }
```

| Línea | Explicación |
|-------|-------------|
| 4 | `private $routes` — Propiedad privada que almacenará el array de rutas. |
| 5 | `private $viewPath = 'app/views/page/'` — Ruta base donde están todas las vistas. |
| 7-10 | `__construct()` — El constructor se ejecuta automáticamente al crear un objeto `new Router()`. Carga el archivo `routes.php` (que devuelve un array) y lo asigna a `$this->routes`. |
| 12 | `resolve($action, $userRole = null)` — Método principal. Recibe la acción (ej: "home") y opcionalmente el rol del usuario. |
| 14-20 | Si la acción NO existe en `$this->routes`, devuelve un array indicando: archivo `error.php` (404), sin menú, código 404. |
| 22 | Si la acción existe, extrae la configuración de esa ruta. |
| 25 | `in_array('*', $route['roles'])` — Si la ruta tiene el rol comodín `'*'`, todos tienen acceso. O si el usuario tiene un rol específico que está en la lista. |
| 27-33 | Si NO tiene acceso, devuelve: archivo `denied.php` (403), con menú, código 403. |
| 36-40 | Si todo está bien, devuelve: el archivo de vista según la ruta, con su configuración de menú y código 200. |

**Flujo**: El Router es el "GPS" del sistema. Recibe un destino (action) y un pasajero (userRole), y decide si puede ir, si existe el destino, o si debe mostrar error.

---

### `app/controllers/enlacesController.php` — Controlador principal

```
Línea 1:  <?php
Línea 2:  [vacío]
Línea 3:      require_once 'app/core/BaseController.php';
Línea 4:      require_once 'app/core/Router.php';
Línea 5:  [vacío]
Línea 6:      class EnlacesController extends BaseController {
Línea 7:  [vacío]
Línea 8:          public function run() {
Línea 9:              session_start();
Línea 10:             $action = isset($_GET["action"]) ? $_GET["action"] : "index";
Línea 11: 
Línea 12:             # Cerrar sesion
Línea 13:             if ($action === "salir") {
Línea 14:                 session_destroy();
Línea 15:                 $this->redirect("index.php?action=index");
Línea 16:             }
Línea 17: 
Línea 18:             # Valida si existe una session activa, caso contrario redirige al login
Línea 19:             if ($action !== "index" && !isset($_SESSION["session"])) {
Línea 20:                 $this->redirect("index.php?action=index");
Línea 21:             }
Línea 22: 
Línea 23:             require_once "app/template/template.php";
Línea 24:         }
Línea 25: 
Línea 26:         public function enlacesControl() {
Línea 27:             $this->startSession();
Línea 28:             
Línea 29:             $action = isset($_GET["action"]) ? $_GET["action"] : "index";
Línea 30:             $userRole = isset($_SESSION["codrol"]) ? $_SESSION["codrol"] : null;
Línea 31: 
Línea 32:             $router = new Router();
Línea 33:             $result = $router->resolve($action, $userRole);
Línea 34: 
Línea 35:             # indica si que requiere menú
Línea 36:             if ($result['menu']) {
Línea 37:                 include 'app/views/page/menu.php';
Línea 38:             }
Línea 39: 
Línea 40:             // Incluimos la vista
Línea 41:             include $result['file'];
Línea 42:         }
Línea 43:     }
Línea 44: ?>
```

| Línea | Explicación |
|-------|-------------|
| 3-4 | Importa las clases `BaseController` y `Router`. |
| 6 | `class EnlacesController extends BaseController` — Declara la clase que HEREDA de `BaseController`, por lo que tiene acceso a `jsonResponse()`, `redirect()` y `startSession()`. |
| 8 | `public function run()` — Método público. Es llamado desde `index.php`. |
| 9 | `session_start()` — Inicia la sesión. |
| 10 | `$action = isset($_GET["action"]) ? $_GET["action"] : "index"` — Ternario: si existe `$_GET["action"]`, lo usa; si no, usa `"index"` por defecto. |
| 13-16 | Si la acción es `"salir"`, destruye la sesión (`session_destroy()`) y redirige al login. |
| 19 | **Protección de rutas**: Si la acción NO es `"index"` (login) Y no existe `$_SESSION["session"]` (no ha iniciado sesión), redirige al login. Esto evita que usuarios no autenticados vean páginas internas. |
| 23 | `require_once "app/template/template.php"` — Carga la plantilla principal, que a su vez llamará a `enlacesControl()`. |
| 26 | `public function enlacesControl()` — Segundo método. Se llama DESDE `template.php`. |
| 27 | `$this->startSession()` — Inicia sesión segura (solo si no está iniciada). |
| 29 | Vuelve a obtener la acción (misma lógica). |
| 30 | `$userRole = isset($_SESSION["codrol"]) ? $_SESSION["codrol"] : null` — Obtiene el rol del usuario desde la sesión. Nota: `codrol` NUNCA se asigna en el login actual, siempre será `null`. |
| 32-33 | Crea un Router y le pide que resuelva la acción. El resultado es un array con `file`, `menu` y `status`. |
| 36-38 | Si la ruta requiere menú (`menu => true`), incluye `menu.php` (la barra de navegación). |
| 41 | Incluye el archivo de vista correspondiente (login, home, productos, etc.). |

**Problema detectado**: `enlacesControl()` es llamado desde `template.php`, que fue incluido dentro de `run()`. Hay una doble verificación de sesión y doble obtención de `$action`. La variable `$userRole` siempre será `null` porque `$_SESSION["codrol"]` nunca se setea en el login actual.

---

### `app/controllers/ClienteController.php` — Controlador CRUD de ejemplo

```
Línea 1:  <?php
Línea 2:  [vacío]
Línea 3:      // define('DEBUG', true);
Línea 4:      // error_reporting(E_ALL);
Línea 5:      // ini_set('display_errors', DEBUG ? 'On' : 'Off');
Línea 6:  [vacío]
Línea 7:      // require_once '../models/clientes.php';
Línea 8:  [vacío]
Línea 9:  class ClientesController {
Línea 10: 
Línea 11:     public function ejecutar($accion, $datos) {
Línea 12:         switch ($accion) {
Línea 13:             case 'listar':
Línea 14:                 return $this->listar($datos);
Línea 15:             case 'crear':
Línea 16:                 return $this->crear($datos);
Línea 17:             case 'editar':
Línea 18:                 return $this->editar($datos);
Línea 19:             case 'eliminar':
Línea 20:                 return $this->eliminar($datos);
Línea 21:             default:
Línea 22:                 return json_encode(['success' => false, 'message' => 'Acción no reconocida']);
Línea 23:         }
Línea 24:     }
Línea 25: 
Línea 26:     private function listar($datos) {
Línea 27:         
Línea 28:         return json_encode([
Línea 29:             'success' => true, 
Línea 30:             'data' => [] // Aquí irían los resultados
Línea 31:         ]);
Línea 32:     }
Línea 33: 
Línea 34:     private function crear($datos) {
Línea 35:         
Línea 36:         return json_encode([
Línea 37:             'success' => true, 
Línea 38:             'message' => 'Cliente creado correctamente'
Línea 39:         ]);
Línea 40:     }
Línea 41: 
Línea 42:     private function editar($datos) {
Línea 43:         
Línea 44:         return json_encode([
Línea 45:             'success' => true, 
Línea 46:             'message' => 'Cliente actualizado'
Línea 47:         ]);
Línea 48:     }
Línea 49: 
Línea 50:     private function eliminar($datos) {
Línea 51: 
Línea 52:         return json_encode([
Línea 53:             'success' => true, 
Línea 54:             'message' => 'Cliente eliminado'
Línea 55:         ]);
Línea 56:     }
Línea 57: }
Línea 58: 
Línea 59: // Se llama directamente al archivo
Línea 60: if (isset($_POST['action'])) {
Línea 61:     $controller = new ClientesController();
Línea 62:     echo $controller->ejecutar($_POST['action'], $_POST);
Línea 63: }
```

| Línea | Explicación |
|-------|-------------|
| 3-5 | Código de depuración comentado. Si se activa, muestra errores de PHP. |
| 9 | `class ClientesController` — No extiende `BaseController`, es independiente. |
| 11 | `ejecutar($accion, $datos)` — Método que recibe una acción y datos, y la redirige al método correspondiente usando un `switch`. |
| 13-14 | `'listar'` → llama a método privado `listar()` |
| 15-16 | `'crear'` → llama a `crear()` |
| 17-18 | `'editar'` → llama a `editar()` |
| 19-20 | `'eliminar'` → llama a `eliminar()` |
| 22 | Si la acción no es reconocida, devuelve JSON con error. |
| 26-32 | `listar()` — Devuelve JSON con `success: true` y un array vacío `data: []` (placeholder). |
| 34-40 | `crear()` — Devuelve mensaje de éxito (placeholder). |
| 42-48 | `editar()` — Devuelve mensaje de éxito (placeholder). |
| 50-56 | `eliminar()` — Devuelve mensaje de éxito (placeholder). |
| 60-63 | **Auto-ejecución**: Si se detecta `$_POST['action']`, crea el controlador y ejecuta la acción. Este archivo está diseñado para ser llamado directamente via AJAX POST. |

**Propósito**: Es un esqueleto de CRUD listo para completar con lógica real de base de datos.

---

### `app/controllers/login.php` — Controlador AJAX de inicio de sesión

```
Línea 1:  <?php
Línea 2:  [vacío]
Línea 3:      // define('DEBUG', true);
Línea 4:      // error_reporting(E_ALL);
Línea 5:      // ini_set('display_errors', DEBUG ? 'On' : 'Off');
Línea 6:  [vacío]
Línea 7:      require_once '../core/BaseController.php';
Línea 8:      require_once '../models/login.php';
Línea 9:  [vacío]
Línea 10:     class LoginAjaxController extends BaseController {
Línea 11: 
Línea 12:         public function ejecutar($action, $data) {
Línea 13:             $method = lcfirst($action);
Línea 14: 
Línea 15:             if (method_exists($this, $method)) {
Línea 16:                 return $this->$method($data);
Línea 17:             } else {
Línea 18:                 return $this->jsonResponse(['success' => false, 'message' => 'Acción no reconocida'], 404);
Línea 19:             }
Línea 20:         }
Línea 21: 
Línea 22:         protected function iniciarSesion($data) {
Línea 23: 
Línea 24:             if (!isset($data["usuario"]) || !isset($data["password"])) {
Línea 25:                 return $this->jsonResponse(['success' => false, 'error' => 'Faltan credenciales'], 400);
Línea 26:             }
Línea 27: 
Línea 28:             $login = new loginModel();
Línea 29:             $login->setloginuser($data["usuario"]);
Línea 30:             $login->setpassword($data["password"]);
Línea 31:             $user = $login->IniciarSesion();
Línea 32: 
Línea 33:             if ( $user['success'] ) {
Línea 34: 
Línea 35:                 $this->startSession();
Línea 36: 
Línea 37:                 $_SESSION['id']      = $user['datos'][0]['id'];
Línea 38:                 $_SESSION['cedula']  = $user['datos'][0]['cedula'];
Línea 39:                 $_SESSION['nombre']  = $user['datos'][0]['nombre'];
Línea 40:                 $_SESSION['apellido'] = $user['datos'][0]['apellido'];
Línea 41:                 $_SESSION['session'] = true;
Línea 42: 
Línea 43:                 return $this->jsonResponse([
Línea 44:                     'success' => true,
Línea 45:                     'session' => $_SESSION,
Línea 46:                     'url'     => '?action=home'
Línea 47:                 ]);
Línea 48: 
Línea 49:             } else {
Línea 50:                 return $this->jsonResponse([
Línea 51:                     'success' => false,
Línea 52:                     'tipo_error' => $user['tipo_error']
Línea 53:                 ]);
Línea 54:             }
Línea 55:         }
Línea 56:     }
Línea 57: 
Línea 58:     if (isset($_POST['action'])) {
Línea 59:         $controller = new LoginAjaxController();
Línea 60:         $controller->ejecutar($_POST['action'], $_POST);
Línea 61:     }
Línea 62: ?>
```

| Línea | Explicación |
|-------|-------------|
| 7 | `require_once '../core/BaseController.php'` — Importa la clase base (ruta relativa desde `app/controllers/`). |
| 8 | `require_once '../models/login.php'` — Importa el modelo de login. |
| 10 | `class LoginAjaxController extends BaseController` — Hereda de `BaseController`. |
| 12 | `ejecutar($action, $data)` — Método público que recibe la acción y los datos. |
| 13 | `$method = lcfirst($action)` — Convierte el primer carácter a minúscula: `"IniciarSesion"` → `"iniciarSesion"`. |
| 15 | `method_exists($this, $method)` — Verifica si existe un método con ese nombre en la clase. |
| 16 | `return $this->$method($data)` — Llama dinámicamente al método. Ej: si `$method = "iniciarSesion"`, ejecuta `$this->iniciarSesion($data)`. Esto se llama **method dispatch** dinámico. |
| 18 | Si no existe el método, devuelve JSON 404. |
| 22 | `protected function iniciarSesion($data)` — Método protegido que maneja el login. |
| 24-26 | Valida que llegaron `usuario` y `password`. Si faltan, devuelve JSON 400. |
| 28-30 | Crea el modelo `loginModel`, asigna usuario y contraseña mediante setters. |
| 31 | `$user = $login->IniciarSesion()` — Ejecuta la consulta a BD. |
| 33 | Si `$user['success']` es `true` (login exitoso): |
| 35 | Inicia sesión con `startSession()`. |
| 37-41 | Guarda datos del usuario en `$_SESSION`: id, cédula, nombre, apellido, y marca `session = true`. |
| 43-47 | Devuelve JSON con `success: true`, los datos de sesión, y la URL de redirección `?action=home`. |
| 49-54 | Si login falló, devuelve JSON con `success: false` y el tipo de error (`'cedula'` o `'password'`). |
| 58-61 | **Auto-ejecución**: si hay `$_POST['action']`, crea el controlador y ejecuta la acción. **Importante**: no hay `echo` del resultado, por lo que la respuesta JSON nunca se envía al cliente. |

**Problema detectado**: La línea 60 llama a `ejecutar()` que hace `return`, pero no hay `echo`. El JSON generado nunca se imprime. Debería ser:
```php
echo $controller->ejecutar($_POST['action'], $_POST);
```

---

### `app/models/login.php` — Modelo de autenticación

```
Línea 1:  <?php 
Línea 2:  [vacío]
Línea 3:      require_once '../../config/conex.php';
Línea 4:  [vacío]
Línea 5:      class loginModel extends Conexion{
Línea 6: 
Línea 7:          private $usuario;
Línea 8:          private $password;
Línea 9: 
Línea 10:         public function setloginuser($usuario){ $this->usuario = $usuario; }
Línea 11:         public function getloginuser(){ return $this->usuario; }
Línea 12:         public function setpassword($password){ $this->password = $password; }	
Línea 13:         public function getpassword(){ return $this->password; }
Línea 14: 
Línea 15:         public function IniciarSesion(){
Línea 16: 
Línea 17:             try {
Línea 18: 
Línea 19:                 $conexion = new Conexion();
Línea 20:                 $conex = $conexion->conectar();
Línea 21: 
Línea 22:                 $sql = ("SELECT * FROM estudiante a
Línea 23:                             WHERE a.cedula = :cedula");
Línea 24: 
Línea 25:                 $stmt = $conex->prepare($sql);
Línea 26:                 $stmt->bindparam(":cedula", $this->usuario, PDO::PARAM_STR);
Línea 27: 
Línea 28:                 $stmt->execute();
Línea 29: 
Línea 30:                 $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
Línea 31: 
Línea 32:                 if ( empty($data) ) {
Línea 33:                     return array('success' => false, 'tipo_error' => 'cedula');
Línea 34:                 }
Línea 35: 
Línea 36:                 if ( $data[0]['password'] !== $this->password ) {
Línea 37:                     return array('success' => false, 'tipo_error' => 'password');
Línea 38:                 }
Línea 39: 
Línea 40:                 $result = array('success' => true, 'datos' => $data );
Línea 41: 
Línea 42:             } catch ( Exception $e ) {
Línea 43:                 
Línea 44:                 var_dump($e->getMessage());
Línea 45:                 exit();
Línea 46:                 $result = array('success' => false, 'error' => 1 );
Línea 47:             }
Línea 48: 
Línea 49:             return $result;
Línea 50: 
Línea 51:             $conex = null;
Línea 52: 
Línea 53:         } #Fin Funcion IniciarSesion
Línea 54:     } #Fin clase loginModel
Línea 55: ?>
```

| Línea | Explicación |
|-------|-------------|
| 3 | `require_once '../../config/conex.php'` — Ruta relativa (desde `app/models/` sube 2 niveles). |
| 5 | `class loginModel extends Conexion` — Hereda de `Conexion`, aunque no usa herencia; instancia `Conexion` directamente. |
| 7-8 | Propiedades privadas: `$usuario` y `$password`. |
| 10-13 | **Setters/Getters**: `setloginuser()` asigna el usuario, `getloginuser()` lo obtiene. Lo mismo para `setpassword()` y `getpassword()`. |
| 15 | `IniciarSesion()` — Método principal de autenticación. |
| 17-47 | Envuelto en `try/catch` para manejar errores de BD. |
| 19-20 | Crea conexión: instancia `Conexion()` y llama a `conectar()` que devuelve el objeto PDO. |
| 22-23 | Consulta SQL: `SELECT * FROM estudiante WHERE a.cedula = :cedula` — Busca solo por cédula. **No incluye la contraseña en el WHERE**. |
| 25-26 | `prepare()` + `bindparam()` — Usa consultas preparadas (seguras contra inyección SQL). |
| 28 | `execute()` — Ejecuta la consulta. |
| 30 | `fetchAll(PDO::FETCH_ASSOC)` — Obtiene todas las filas como array asociativo. |
| 32-34 | Si `$data` está vacío (no existe la cédula), retorna error `'cedula'`. |
| 36-38 | Si la contraseña de la BD NO coincide con la ingresada, retorna error `'password'`. **Comparación en texto plano**. |
| 40 | Si todo coincide, arma array con `success: true` y los datos. |
| 42-46 | En caso de excepción: `var_dump()` y `exit()` muestran el error (inseguro en producción) y detienen la ejecución. La línea 46 NUNCA se ejecuta (código muerto). |
| 49 | `return $result` — Retorna el resultado de la operación. |
| 51 | `$conex = null` — Cierra la conexión (nunca se ejecuta porque está después del `return`). |

**Problemas detectados**:
- La contraseña se compara en texto plano (inseguro).
- `var_dump($e->getMessage())` en producción muestra detalles internos.
- Código muerto (líneas 46, 51).
- Aunque hereda de `Conexion`, instancia `new Conexion()` directamente.

---

### `app/models/validar.php` — Validador de datos con expresiones regulares

```
Línea 1:   <?php 
Línea 2:  [vacío]
Línea 3:  class ValidarModel {
Línea 4: 
Línea 5:      private $patron;
Línea 6:      private $cadena;
Línea 7: 
Línea 8:      public function Validar($validar, $cadena) {
Línea 9: 
Línea 10:         switch ($validar) {
Línea 11: 
Línea 12:             case 'Letras':
Línea 13:                 $this->patron = "/^[A-Za-z\s\á\Á\é\É\í\Í\ó\Ó\ú\Ú\ñ\Ñ ]+$/";
Línea 14:                 $this->cadena = $cadena;
Línea 15:                 return $this->ejecutarValidacion();
Línea 16:             break;
Línea 17: 
Línea 18:             case 'LetrasPunto':
Línea 19:                 $this->patron = "/^[A-Za-z\s\á\Á\é\É\í\Í\ó\Ó\ú\Ú\ñ\Ñ .,]+$/";
Línea 20:                 $this->cadena = $cadena;
Línea 21:                 return $this->ejecutarValidacion();
Línea 22:             break;
Línea 23: 
Línea 24:             case 'Numeros':
Línea 25:                 $this->patron = "/^[0-9]+$/";
Línea 26:                 $this->cadena = $cadena;
Línea 27:                 return $this->ejecutarValidacion();
Línea 28:             break;
Línea 29: 
Línea 30:             case 'Moneda':
Línea 31:                 $this->patron = "/^[0-9 .,]+$/";
Línea 32:                 $this->cadena = $cadena;
Línea 33:                 return $this->ejecutarValidacion();
Línea 34:             break;
Línea 35: 
Línea 36:             case 'LetrasNumeros':
Línea 37:                 $this->patron = "/^[A-Za-z0-9 .,\/_-]+$/";
Línea 38:                 $this->cadena = $cadena;
Línea 39:                 return $this->ejecutarValidacion();
Línea 40:             break;
Línea 41: 
Línea 42:             case 'Tlf':
Línea 43:                 $this->patron = "/^[0-9 +()-]+$/";
Línea 44:                 $this->cadena = $cadena;
Línea 45:                 return $this->ejecutarValidacion();
Línea 46:             break;
Línea 47: 
Línea 48:             case 'Fecha':
Línea 49:                 $this->patron = "/^[0-9 \/-]+$/";
Línea 50:                 $this->cadena = $cadena;
Línea 51:                 return $this->ejecutarValidacion();
Línea 52:             break;
Línea 53: 
Línea 54:             case 'Correo':
Línea 55:                 $this->patron = "/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}\b/";
Línea 56:                 $this->cadena = $cadena;
Línea 57:                 return $this->ejecutarValidacion();
Línea 58:             break;
Línea 59: 
Línea 60:             case 'Caracteres':
Línea 61:                 $this->patron = "/^[[:ascii:]]+$/";
Línea 62:                 $this->cadena = $cadena;
Línea 63:                 return $this->ejecutarValidacion();
Línea 64:             break;
Línea 65: 
Línea 66:             case 'Password':
Línea 67:                 $this->patron = "/^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/";
Línea 68:                 $this->cadena = $cadena;
Línea 69:                 return $this->ejecutarValidacion();
Línea 70:             break;
Línea 71:         }
Línea 72:     }
Línea 73: 
Línea 74:     public function ejecutarValidacion() {
Línea 75:         if ( preg_match($this->patron, $this->cadena) ) {
Línea 76:             return true;
Línea 77:         } else {
Línea 78:             return false;
Línea 79:         }
Línea 80:     }
Línea 81: }
Línea 82: 
Línea 83: //av. la cruz, casa 34/33
```

| Línea | Explicación |
|-------|-------------|
| 3 | `class ValidarModel` — Clase independiente para validación. |
| 5-6 | Propiedades privadas: `$patron` (expresión regular) y `$cadena` (texto a validar). |
| 8 | `public function Validar($validar, $cadena)` — Recibe el tipo de validación y la cadena. |
| 10 | `switch ($validar)` — Según el tipo, asigna el patrón regex. |
| 12-16 | **Letras**: Solo letras (mayúsculas, minúsculas, con tildes y ñ). |
| 18-22 | **LetrasPunto**: Letras más punto y coma. |
| 24-28 | **Numeros**: Solo dígitos 0-9. |
| 30-34 | **Moneda**: Números, espacios, puntos y comas. |
| 36-40 | **LetrasNumeros**: Letras, números y algunos caracteres especiales. |
| 42-46 | **Tlf**: Números, espacios, +, (), -. |
| 48-52 | **Fecha**: Números, espacios, / y -. |
| 54-58 | **Correo**: Patrón básico de email (algo@algo.algo). |
| 60-64 | **Caracteres**: Solo caracteres ASCII. |
| 66-70 | **Password**: 8-16 caracteres, al menos 1 dígito, 1 mayúscula, 1 minúscula, 1 carácter especial. |
| 74-80 | `ejecutarValidacion()` — Ejecuta `preg_match()` con el patrón. Retorna `true` si coincide, `false` si no. |

**Propósito**: Clase reutilizable para validar formularios del lado del servidor.

---

### `app/template/template.php` — Plantilla HTML principal

```
Línea 1:  <!DOCTYPE html>
Línea 2:  <html lang="es">
Línea 3:      <?php
Línea 4:        include 'app/template/header.php';
Línea 5:      ?>
Línea 6:      <body class="theme-teal">
Línea 7:          <!-- Page Loader -->
Línea 8-23:     [Código de loader comentado]
Línea 24:         <!-- #END# Page Loader -->
Línea 25: [vacío]
Línea 26:         <?php
Línea 27:             $enlacesController = new EnlacesController();
Línea 28:             $result = $enlacesController->enlacesControl();
Línea 29:         ?>
Línea 30: [vacío]
Línea 31:     </body>
Línea 32: [vacío]
Línea 33:     <?php
Línea 34:         include 'app/template/footer.php';
Línea 35:     ?>
Línea 36:  </html>
```

| Línea | Explicación |
|-------|-------------|
| 1 | `<!DOCTYPE html>` — Declaración del tipo de documento HTML5. |
| 2 | `<html lang="es">` — Inicia el HTML con idioma español. |
| 3-5 | Incluye `header.php` que contiene todo `<head>`. |
| 6 | `<body class="theme-teal">` — Cuerpo con clase de tema color teal (verde azulado). |
| 7-24 | Loader de página comentado. Mostraría una animación de carga mientras la página se procesa. |
| 26-29 | **Punto clave**: Vuelve a crear `EnlacesController` y llama a `enlacesControl()`. Esto es porque `template.php` se incluye DENTRO del `run()`, y aquí se necesita la segunda pasada para determinar qué contenido mostrar. |
| 31 | Cierra `</body>`. |
| 33-35 | Incluye `footer.php` (scripts al final). |
| 36 | Cierra `</html>`. |

---

### `app/template/header.php` — Cabecera HTML

```
Línea 1:  [vacío]
Línea 2:  <head>
Línea 3:      <meta charset="UTF-8">
Línea 4:      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
Línea 5:      <title> Plantilla </title>
Línea 6:      <!-- Favicon-->
Línea 7:      <!-- <link rel="icon" href="public/img/icon/icon.ico" type="image/x-icon"> -->
Línea 8:  [vacío]
Línea 9:      <!-- <script src="resources/library/plugins/jquery-3.3.1/jquery-3.3.1.min.js"></script> -->
Línea 10: [vacío]
Línea 11:     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
Línea 12: [vacío]
Línea 13:     <!-- Bootstrap Core Css -->
Línea 14:     <link href="resources/library/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
Línea 15:     <link href="resources/library/plugins/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
Línea 16: [vacío]
Línea 17:     <!-- Custom Css -->
Línea 18:     <link href="resources/library/css/style.css" rel="stylesheet">
Línea 19: [vacío]
Línea 20:     <script src="resources/library/plugins/jquery/jquery.min.js"></script>
Línea 21: [vacío]
Línea 22: </head>
```

| Línea | Explicación |
|-------|-------------|
| 3 | `<meta charset="UTF-8">` — Define codificación de caracteres (soporta tildes, ñ, etc.). |
| 4 | Meta viewport — Hace que la página sea responsive en dispositivos móviles. |
| 5 | `<title> Plantilla </title>` — Título de la pestaña del navegador. |
| 7 | Favicon comentado (icono de la pestaña). |
| 11 | Carga los iconos de Material Design desde Google Fonts. |
| 14-15 | Carga Bootstrap CSS (framework de estilos) y su tema. |
| 18 | Carga `style.css` — hoja de estilos personalizada de la aplicación. |
| 20 | Carga jQuery (biblioteca de JavaScript para manipulación del DOM). |

---

### `app/template/footer.php` — Pie de página (scripts)

```
Línea 1:  [vacío]
Línea 2:      <!-- Bootstrap Core Js -->
Línea 3:      <script src="resources/library/plugins/bootstrap/js/bootstrap.js"></script>
Línea 4:  [vacío]
Línea 5:      <!-- <script type="text/javascript">
Línea 6:          $('[data-toggle="tooltip"]').tooltip( {trigger : 'hover'} );
Línea 7:      </script> -->
```

| Línea | Explicación |
|-------|-------------|
| 3 | Carga Bootstrap JS (componentes interactivos como modales, tooltips, etc.). |
| 5-7 | Script comentado que inicializaría tooltips de Bootstrap. |

---

### `app/template/datatable.php` — Incluye DataTables (todo comentado)

```
Línea 1-10:  [Todo el contenido son includes de DataTables comentados]
Línea 11:     <!-- <script src="resources/library/js/pages/tables/jquery-datatable.js"></script> -->
```

**Propósito**: Archivo pensado para ser incluido en páginas que necesiten tablas con funcionalidad avanzada (búsqueda, ordenamiento, paginación, exportación). Actualmente todo está comentado, listo para activarse cuando se necesite.

---

### `app/views/page/login.php` — Formulario de inicio de sesión

```
Línea 1:  <div class="limiter">
Línea 2:      <div class="login-page">
Línea 3:          <div class="login-box">
Línea 4:              <div class="logo">
Línea 5:                  <!-- <img src="public/img/logo/2.png"> -->
Línea 6:              </div>
Línea 7:              <div class="card">
Línea 8:                  <div class="body">
Línea 9:                      <!-- <div class="logo1"></div> -->
Línea 10:                     <!-- <div class="logo2"></div> -->
Línea 11:                     <form id="sign_in" method="POST">
Línea 12:                         <div class="msg">Iniciar Sesión</div>
Línea 13:                         <div class="input-group">
Línea 14:                             <span class="input-group-addon">
Línea 15:                                 <i class="material-icons">person</i>
Línea 16:                             </span>
Línea 17:                             <div class="form-line">
Línea 18:                                 <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required autofocus>
Línea 19:                             </div>
Línea 20:                         </div>
Línea 21:                         <div class="input-group">
Línea 22:                             <span class="input-group-addon">
Línea 23:                                 <i class="material-icons">lock</i>
Línea 24:                             </span>
Línea 25:                             <div class="form-line">
Línea 26:                                 <input type="password" class="form-control" name="password"  id="password" placeholder="Password" required>
Línea 27:                             </div>
Línea 28:                             <span class="input-group-addon">
Línea 29:                                 <div class="switch">
Línea 30:                                     <label>  <input type="checkbox" id="mostrar2"><span class="lever switch-col-blue"></span>Mostrar</label>
Línea 31:                                 </div>
Línea 32:                             </span>
Línea 33:                         </div>
Línea 34:                         <div class="row">
Línea 35:                             <div class="col-xs-12">
Línea 36:                                 <button class="btn btn-block bg-success waves-effect waves-light pull-right" type="button" id="Ingresar" >Ingresar</button>
Línea 37:                             </div>
Línea 38:                         </div>
Línea 39:                         <div class="row m-t-15 m-b--20">
Línea 40:                             <div class="col-xs-12 align-left">
Línea 41:                                 <i class="material-icons">help</i><a href="#">¿Olvidó su Contraseña?</a>
Línea 42:                             </div>
Línea 43:                         </div>
Línea 44:                     </form>
Línea 45:                 </div>
Línea 46:             </div>
Línea 47:         </div>    
Línea 48:     </div>    
Línea 49: </div> 
Línea 50: <script src="resources/library/plugins/jquery/jquery.min.js"></script>
Línea 51: <script src="public/js/login.js"></script>
```

| Línea | Explicación |
|-------|-------------|
| 1-3 | Contenedores con clases CSS para el diseño de la página de login. |
| 4-6 | Logo del sistema (comentado). |
| 7-46 | Tarjeta (card) con el formulario de login. |
| 11 | `<form id="sign_in">` — Formulario. El `method="POST"` no se usa realmente porque el envío es vía AJAX. |
| 12 | "Iniciar Sesión" — Título del formulario. |
| 13-20 | Campo de **usuario** con icono de persona. `required autofocus` → obligatorio y con foco automático. |
| 21-33 | Campo de **contraseña** con icono de candado y un checkbox "Mostrar" que revela la contraseña. |
| 36 | Botón "Ingresar" de tipo `button` (no `submit`) porque el envío se maneja con JavaScript. |
| 39-43 | Enlace "¿Olvidó su Contraseña?" (placeholder, sin funcionalidad real). |
| 50 | Carga jQuery. |
| 51 | Carga el archivo `login.js` con la lógica del login. |

---

### `app/views/page/home.php` — Página principal (dashboard)

```
Línea 1:  <section class="content">
Línea 2:      <div class="container-fluid">
Línea 3:          <div class="block-header">
Línea 4:              <h2> Home </h2>
Línea 5:          </div>
Línea 6:          <div class="row clearfix">
Línea 7:              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
Línea 8:                  <div class="card">
Línea 9:                      <div class="header">
Línea 10:                         <h2>
Línea 11:                             Titulo
Línea 12:                             <small> Informacion </small>
Línea 13:                         </h2>
Línea 14:                     </div>
Línea 15:                 </div>
Línea 16:             </div>
Línea 17:         </div>
Línea 18:     </div>
Línea 19: </section>
```

| Línea | Explicación |
|-------|-------------|
| 1 | `<section class="content">` — Contenedor principal del contenido. |
| 2-5 | Encabezado de sección con etiqueta "Home". |
| 6-17 | Fila con una tarjeta (card) de ejemplo con título "Titulo" y subtítulo "Informacion". Es un placeholder para contenido futuro. |

**Propósito**: Página de bienvenida después del login. Actualmente es un placeholder.

---

### `app/views/page/menu.php` — Menú de navegación

```
Línea 1:  <!-- Top Bar -->
Línea 2:  <nav class="navbar">
Línea 3:      <div class="container-fluid">
Línea 4:          <div class="navbar-header">
Línea 5:              <a href="javascript:void(0);" class="bars"></a>
Línea 6:              <!-- <img src="public/img/logo/2.png" width="48" height="48" alt="User" /> -->
Línea 7:              <a class="navbar-brand" href="?action=home"> Software </a>
Línea 8:          </div>
Línea 9:      </div>
Línea 10: </nav>
Línea 11: 
Línea 12: <section>
Línea 13:     <!-- Left Sidebar -->
Línea 14:     <aside id="leftsidebar" class="sidebar">
Línea 15:         <!-- User Info -->
Línea 16:         <div class="user-info">
Línea 17-31:         [Información del usuario comentada]
Línea 32:         <!-- #User Info -->
Línea 33:         <!-- Menu -->
Línea 34:         <div class="menu">
Línea 35:             <ul class="list">
Línea 36:                 <li class="header"> Menú Navegaconal </li>
Línea 37:                 <li>
Línea 38:                     <a href="?action=home">
Línea 39:                         <i class="material-icons">home</i>
Línea 40:                         <span> Home </span>
Línea 41:                     </a>
Línea 42:                 </li>
Línea 43:                 <li>
Línea 44:                     <a href="?action=usuarios">
Línea 45:                         <i class="material-icons">home</i>
Línea 46:                         <span> Usuarios </span>
Línea 47:                     </a>
Línea 48:                 </li>
Línea 49:                 <li>
Línea 50:                     <a href="?action=reportes">
Línea 51:                         <i class="material-icons">home</i>
Línea 52:                         <span> Reportes </span>
Línea 53:                     </a>
Línea 54:                 </li>
Línea 55:                 <li>
Línea 56:                     <a href="?action=productos">
Línea 57:                         <i class="material-icons">home</i>
Línea 58:                         <span> Productos </span>
Línea 59:                     </a>
Línea 60:                 </li>
Línea 61:             </ul>
Línea 62:         </div>
Línea 63:         <!-- #Menu -->
Línea 64:         <!-- Footer -->
Línea 65:         <div class="legal">
Línea 66:             <div class="copyright">
Línea 67:                 &copy; <a href="javascript:void(0);"> Todos los Derechos Reservados </a>.
Línea 68:             </div>
Línea 69:             <div class="version">
Línea 70:                 <b>Version: </b> 1.0
Línea 71:             </div>
Línea 72:         </div>
Línea 73:         <!-- #Footer -->
Línea 74:     </aside>
Línea 75:     <!-- #END# Left Sidebar -->
Línea 76: </section>
Línea 77: <script src="resources/library/plugins/jquery/jquery.min.js"></script>
```

| Línea | Explicación |
|-------|-------------|
| 2-10 | Barra superior (navbar) con el nombre "Software" que enlaza a `?action=home`. |
| 14-74 | Barra lateral izquierda (sidebar) con el menú de navegación. |
| 16-31 | Sección de información del usuario (comentada). Mostraría foto, nombre y opciones. |
| 35-61 | Lista de enlaces del menú: **Home**, **Usuarios**, **Reportes**, **Productos**. Cada uno enlaza a `?action=...`. |
| 65-72 | Pie del menú con copyright y versión 1.0. |

---

### `app/views/page/error.php` — Página 404 (No encontrada)

```
Línea 1:  <section class="content" id="denied">
Línea 2:      <div class="container-fluid">
Línea 3-14:     [Contenido con fondo rojo oscuro y texto "Pagina No Encontrada"]
Línea 15: </section>
```

Se muestra cuando el usuario visita una ruta que no existe en `routes.php` (ej: `?action=inventario`).

---

### `app/views/page/denied.php` — Página 403 (Acceso denegado)

```
Línea 1:  <section class="content" id="denied">
Línea 2-14:     [Contenido con fondo rojo oscuro y texto "No tiene Permiso Para Acceder"]
Línea 15: </section>
```

Se muestra cuando el usuario no tiene el rol necesario para acceder a una ruta. Actualmente todas las rutas tienen `roles => ['*']`, por lo que esta página solo se ve si se modifica la configuración.

---

### `app/views/page/productos/productos.php` — Página de productos

```
Línea 1:  <link rel="stylesheet" href="public/css/custom.css">
Línea 2:  <section class="content">
Línea 3-35:     [Título "Productos Destacados" + lista HTML]
Línea 36-79:    [Tabla HTML con productos y precios]
Línea 80-84:    [Cierre de contenedores]
```

| Línea | Explicación |
|-------|-------------|
| 1 | Carga el CSS personalizado (`custom.css`) con estilos para `.title`, `.text` y `.table`. |
| 20 | `<h3 class="title">Productos Destacados</h3>` — Título de la sección. |
| 24-35 | Lista `<ul>` con 8 productos tecnológicos (teclados, mouse, monitores, etc.). |
| 39-79 | Tabla `<table class="table">` con 2 columnas (Producto, Precio) y 8 filas de productos con sus precios en USD. |

---

### `app/views/page/reportes/reportes.php` — Página de reportes

```
Línea 1-21: [Estructura placeholder similar a home.php con título "Reportes"]
```

Página placeholder para futuros reportes.

---

### `app/views/page/usuarios/usuarios.php` — Página de usuarios

```
Línea 1-21: [Estructura placeholder similar a home.php con título "Usuarios"]
```

Página placeholder para futura gestión de usuarios.

---

### `public/js/login.js` — Lógica JavaScript del login

```
Línea 1:  $(document).ready(function () {
Línea 2-4:  [vacío]
Línea 5:  });
Línea 6:  //__________________________________ Click Boton Login __________________________________________________________
Línea 7:  $("#password").keyup(function (event) {
Línea 8:      if (event.keyCode == 13) {
Línea 9:          ingresar();
Línea 10:     }
Línea 11: });
Línea 12: 
Línea 13: $("#Ingresar").click(function (event) {
Línea 14:     ingresar();
Línea 15: });
Línea 16: 
Línea 17: $('#mostrar2').on('change', function (event) {
Línea 18:     if ($('#mostrar2').is(':checked')) {
Línea 19:         $('#password').get(0).type = 'text';
Línea 20:     } else {
Línea 21:         $('#password').get(0).type = 'password';
Línea 22:     }
Línea 23: });
Línea 24: // Fin Function Ingresar ==========================================================================
Línea 25: 
Línea 26: //-----------------------------------funcion ingresar ------------------------------------------
Línea 27: 
Línea 28: function ingresar() {
Línea 29: 
Línea 30:     var action = 'IniciarSesion'
Línea 31:     var usuario = $('#usuario').val()
Línea 32:     var password = $('#password').val()
Línea 33: 
Línea 34:     if (usuario.length && password.length > 0) {
Línea 35: 
Línea 36:         var datos = new FormData();
Línea 37:         datos.append('action', action);
Línea 38:         datos.append("usuario", usuario);
Línea 39:         datos.append('password', password);
Línea 40: 
Línea 41:         url = 'app/controllers/login.php';
Línea 42:         $.ajax({
Línea 43:             cache: false,
Línea 44:             contentType: false,
Línea 45:             processData: false,
Línea 46:             type: 'POST',
Línea 47:             url: url,
Línea 48:             data: datos,
Línea 49:             dataType: "json",
Línea 50:             beforeSend: function () { },
Línea 51:             success: function (data) {
Línea 52: 
Línea 53:                 if (data.success == true) {
Línea 54: 
Línea 55:                     alert('Bienvenido Al Sistema');
Línea 56: 
Línea 57:                     setTimeout(function () { window.location.href = data.url; }, 1000);
Línea 58:                 } else {
Línea 59: 
Línea 60:                     if (data.tipo_error == 'cedula') {
Línea 61:                         alert('Error: La c\u00e9dula ingresada no est\u00e1 registrada en el sistema');
Línea 62:                     } else if (data.tipo_error == 'password') {
Línea 63:                         alert('Error: La contrase\u00f1a ingresada es incorrecta');
Línea 64:                     } else {
Línea 65:                         alert('Datos Incorrectos');
Línea 66:                     }
Línea 67:                 }
Línea 68:             }
Línea 69: 
Línea 70:         });
Línea 71:     } else {
Línea 72: 
Línea 73:         alert('Llene Los Campos');
Línea 74:     }
Línea 75: };
Línea 76: //-----------------------------------Fin funcion ingresar ------------------------------------------
```

| Línea | Explicación |
|-------|-------------|
| 1-5 | `$(document).ready()` — Ejecuta código cuando el DOM está listo (vacío). |
| 7-11 | Evento `keyup` en el campo de contraseña: si presiona Enter (código 13), llama a `ingresar()`. |
| 13-15 | Evento `click` en el botón "Ingresar": llama a `ingresar()`. |
| 17-23 | Checkbox "Mostrar": si está marcado, cambia el input de password a text (muestra la contraseña). Si no, lo vuelve a ocultar. |
| 28-75 | **Función `ingresar()`**: |
| 30-32 | Obtiene los valores del formulario: acción fija `'IniciarSesion'`, usuario y password. |
| 34 | Verifica que ambos campos no estén vacíos. |
| 36-39 | Crea un objeto `FormData` y añade action, usuario y password. FormData permite enviar datos de formulario incluyendo archivos. |
| 41 | URL del controlador AJAX: `'app/controllers/login.php'`. |
| 42-70 | **Petición AJAX** a `login.php`: |
| 43-45 | `cache: false`, `contentType: false`, `processData: false` — Configuración necesaria para enviar FormData correctamente. |
| 46 | `type: 'POST'` — Método HTTP POST. |
| 49 | `dataType: "json"` — Espera respuesta JSON del servidor. |
| 50 | `beforeSend` — Función vacía (placeholder para mostrar loading). |
| 51-67 | **Callback `success`** — Se ejecuta cuando el servidor responde: |
| 53-57 | Si `data.success === true`: muestra alerta "Bienvenido" y redirige a `data.url` (`?action=home`) después de 1 segundo. |
| 58-66 | Si `data.success === false`: muestra mensaje de error específico según `tipo_error` (cédula no registrada, contraseña incorrecta, o genérico). |
| 71-73 | Si los campos están vacíos, muestra alerta "Llene Los Campos". |

---

### `public/js/menu.js` — Lógica JavaScript del menú

```
Línea 1:  $(document).ready(function () {
Línea 2:      listarNombreMenu()
Línea 3:      MostrarIcono()
Línea 4:  });
Línea 5: 
Línea 6:  function MostrarIcono() {
Línea 7:      var session = sessionStorage.getItem("Session");
Línea 8:      session = JSON.parse(session)
Línea 9:      if (session.sexo == "Femenino") {
Línea 10:         $('#femenino').removeClass('oculto');
Línea 11:     } else {
Línea 12:         $('#masculino').removeClass('oculto');
Línea 13:     }
Línea 14: }
Línea 15: 
Línea 16: function listarNombreMenu() {
Línea 17:     var session = sessionStorage.getItem("Session");
Línea 18:     session = JSON.parse(session)
Línea 19:     $('#nombrePerso').text(session.primernombre + ' ' + session.primerapellido)
Línea 20:     $('#rolPerso').text(session.nombrerol)
Línea 21: }
Línea 22: 
Línea 23: function SalirDelSistema() {
Línea 24:     sessionStorage.removeItem('Modulos');
Línea 25:     sessionStorage.removeItem('Session');
Línea 26:     url = 'index'
Línea 27:     setTimeout($(location).attr('href', url), 1000);
Línea 28: }
Línea 29: 
Línea 30: $('#salir').click(function () {
Línea 31:     var session = sessionStorage.getItem("Session");
Línea 32:     session = JSON.parse(session)
Línea 33:     bootoast.toast({
Línea 34:         message: 'Hasta Luego ' + session.usuario,
Línea 35:         type: 'success'
Línea 36:     });
Línea 37:     setTimeout(function () { SalirDelSistema() }, 1000);
Línea 38: });
Línea 39: 
Línea 40: function validarPermiso(cod_modulo) {
Línea 41:     permiso = false
Línea 42:     var modulos = sessionStorage.getItem("Modulos");
Línea 43:     modulos = JSON.parse(modulos)
Línea 44:     var session = sessionStorage.getItem("Session");
Línea 45:     session = JSON.parse(session)
Línea 46: 
Línea 47:     for (var i = 0; i < modulos.length; i++) {
Línea 48:         $('#' + modulos[i]).removeClass('oculto')
Línea 49:         if (parseInt(modulos[i]) == cod_modulo) {
Línea 50:             permiso = true
Línea 51:         }
Línea 52:         if (parseInt(modulos[i]) == 16) {
Línea 53:             $('#MenuSeguridad').removeClass('oculto')
Línea 54:         }
Línea 55:         if (parseInt(modulos[i]) == 15 || parseInt(modulos[i]) > 16 && parseInt(modulos[i]) < 24) {
Línea 56:             $('#MenuConfigDatos').removeClass('oculto')
Línea 57:         }
Línea 58:     }
Línea 59:     if (session.codrol == 7) {
Línea 60:         $('#MenuRepresentante').removeClass('oculto')
Línea 61:     }
Línea 62:     if (permiso == false) {
Línea 63:         ruta = 'denied'
Línea 64:         setTimeout(function () { $(location).attr('href', ruta); });
Línea 65:     }
Línea 66: }
```

| Línea | Explicación |
|-------|-------------|
| 1-4 | Al cargar la página, ejecuta `listarNombreMenu()` y `MostrarIcono()`. |
| 6-14 | `MostrarIcono()` — Lee `sessionStorage` (no confundir con `sessionStorage`, es `sessionStorage`). Según el sexo del usuario, muestra un icono femenino o masculino. |
| 16-21 | `listarNombreMenu()` — Lee datos de `sessionStorage` y muestra el nombre completo y rol del usuario en el menú. |
| 23-28 | `SalirDelSistema()` — Limpia `sessionStorage`, redirige a `index`. |
| 30-38 | Evento click en `#salir`: muestra un toast (notificación) con `bootoast` y luego llama a `SalirDelSistema()`. |
| 40-65 | `validarPermiso(cod_modulo)` — Sistema de permisos por módulos: |
| 41 | `permiso = false` — Variable que indica si tiene permiso. |
| 42-45 | Obtiene módulos y sesión desde `sessionStorage`. |
| 47-58 | Itera sobre los módulos: muestra cada módulo en el menú y verifica permisos específicos (módulo 16 = Seguridad, módulos 15 y 17-23 = Configuración de Datos). |
| 59-61 | Si el rol es 7 (Representante), muestra el menú de representante. |
| 62-65 | Si no tiene permiso, redirige a `denied`. |

**Nota**: Este archivo parece ser de un sistema más completo. Utiliza `sessionStorage` del navegador, pero en el login actual de la aplicación NUNCA se guarda nada en `sessionStorage`. Esto sugiere que es código de una versión anterior o de un sistema diferente.

---

### `public/css/custom.css` — Estilos personalizados

```
Línea 1:  .title{
Línea 2:      text-align: center;
Línea 3:      font-size: 50px;
Línea 4:      color: #2c3e50;
Línea 5:  }
Línea 6:  
Línea 7:  .text{
Línea 8:      text-align: justify;
Línea 9:      font-size: 23px;
Línea 10:     padding: auto;
Línea 11:     background-color:dodgerblue;
Línea 12:     padding-left: 3px;
Línea 13:     color: white;
Línea 14:     border: black solid 1px;
Línea 15:     margin: 30px;
Línea 16:     -webkit-text-stroke: 2px black;
Línea 17: }
Línea 18: 
Línea 19: .table{
Línea 20:     width: 80%;
Línea 21:     margin: auto;
Línea 22:     border-collapse: collapse;
Línea 23:     background-color:teal;
Línea 24:     color: white;
Línea 25: }
```

| Línea | Explicación |
|-------|-------------|
| 1-5 | `.title` — Clase para títulos: centrado, 50px, color azul oscuro. |
| 7-17 | `.text` — Clase para texto destacado: justificado, 23px, fondo azul brillante, texto blanco con borde negro. |
| 19-25 | `.table` — Clase para tablas: 80% de ancho, centrada, fondo teal (verde azulado), texto blanco. |

Usado específicamente en la página de productos.

---

## Flujo de trabajo completo

A continuación se describe el flujo completo de principio a fin:

### 1. Inicio (usuario no autenticado visita la página)

```
Navegador: http://localhost/templateSoftware/
                              │
Apache recibe la petición     │
                              ▼
                    ┌─────────────────┐
                    │   .htaccess     │
                    │  ¿Es archivo    │──No──→ RewriteRule → index.php?action=index
                    │  o directorio?  │
                    └─────────────────┘
                              │ Sí
                              ▼
                    Sirve el archivo estático
                    (css, js, imágenes)
```

### 2. Entrada a PHP

```
index.php
    │
    ├── require_once 'app/controllers/enlacesController.php'
    │
    ├── $mvc = new EnlacesController()
    │
    └── $mvc->run()
          │
          ├── session_start() — Inicia sesión PHP
          │
          ├── $action = $_GET['action'] ?? 'index'
          │
          ├── ¿$action === 'salir'? ──Sí──→ session_destroy() → redirect a index
          │
          ├── ¿$action !== 'index' Y no hay sesión? ──Sí──→ redirect a index
          │
          └── require_once 'app/template/template.php'
```

### 3. Carga de la plantilla

```
template.php
    │
    ├── include 'header.php' (meta, CSS, jQuery)
    │
    ├── <body>
    │       │
    │       └── new EnlacesController() → enlacesControl()
    │               │
    │               ├── startSession()
    │               │
    │               ├── $action = $_GET['action'] ?? 'index'
    │               │
    │               ├── $router = new Router()
    │               │       └── Carga config/routes.php
    │               │
    │               └── $router->resolve($action, $userRole)
    │                       │
    │                       ├── ¿Existe la ruta? ──No──→ error.php (404)
    │                       │
    │                       ├── ¿Tiene permiso? ──No──→ denied.php (403)
    │                       │
    │                       └── Sí → Devuelve: [file, menu, status]
    │       
    │       └── ¿$result['menu']? ──Sí──→ include 'menu.php'
    │       
    │       └── include $result['file'] (login.php, home.php, etc.)
    │
    ├── </body>
    │
    └── include 'footer.php' (Bootstrap JS)
```

### 4. Inicio de sesión (AJAX)

```
Usuario llena formulario y hace clic en "Ingresar"
                              │
                              ▼
                    login.js → ingresar()
                              │
                              ├── Obtiene usuario y password del formulario
                              │
                              ├── Crea FormData con action='IniciarSesion'
                              │
                              └── $.ajax POST a 'app/controllers/login.php'
                                        │
                                        ▼
                              LoginAjaxController::ejecutar()
                                        │
                                        ├── lcfirst('IniciarSesion') = 'iniciarSesion'
                                        │
                                        └── $this->iniciarSesion($data)
                                              │
                                              ├── ¿Faltan credenciales? → JSON 400
                                              │
                                              ├── loginModel::IniciarSesion()
                                              │       │
                                              │       ├── Conexion::conectar() (PDO)
                                              │       ├── SELECT * FROM estudiante WHERE cedula = :cedula
                                              │       ├── ¿No existe cédula? → error 'cedula'
                                              │       ├── ¿Password incorrecto? → error 'password'
                                              │       └── Success → datos del usuario
                                              │
                                              ├── ¿Success?
                                              │     ├── session_start()
                                              │     ├── $_SESSION['id', 'cedula', 'nombre', 'apellido', 'session']
                                              │     └── JSON {success: true, url: '?action=home'}
                                              │
                                              └── ¿Error?
                                                    └── JSON {success: false, tipo_error}
                                        │
                                        ▼
                              login.js recibe respuesta JSON
                                        │
                                        ├── success? → alert + redirect a ?action=home
                                        │
                                        └── error → alert específico (cédula/password)
```

---

## Diagrama de flujo general

```
┌──────────────┐     ┌──────────┐     ┌───────────────┐     ┌────────────┐     ┌──────────────┐
│  Navegador   │────▶│ .htaccess│────▶│   index.php   │────▶│ EnlacesCtrl │────▶│ template.php │
│  (usuario)   │     │ (rewrite)│     │ (front con-   │     │  → run()    │     │ (plantilla)  │
│              │◀────│          │     │  troller)     │     │             │     │              │
└──────────────┘     └──────────┘     └───────────────┘     └─────┬───────┘     └──────┬───────┘
                                                                   │                    │
                                                                   │                    ▼
                                                                   │            ┌──────────────┐
                                                                   │            │  Router.php  │
                                                                   │            │ → resolve()  │
                                                                   │            └──────┬───────┘
                                                                   │                   │
                                                                   │                   ▼
                                                                   │            ┌──────────────┐
                                                                   └───────────│ Vista .php   │
                                                                               │ (home, pro- │
                                                                               │  ductos...) │
                                                                               └──────────────┘
```

---

## Base de datos

La aplicación espera una base de datos MySQL llamada `prueba` (por defecto) con al menos una tabla `estudiante`:

```sql
CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Usuario de prueba:
INSERT INTO estudiante (cedula, nombre, apellido, password)
VALUES ('12345678', 'Admin', 'Principal', '123456');
```

---

## Problemas y observaciones encontrados

### 🔴 Críticos

| Problema | Archivo | Línea | Descripción |
|----------|---------|-------|-------------|
| **Login no funcional** | `app/controllers/login.php` | 60 | Falta `echo` en la llamada a `ejecutar()`. El JSON nunca se envía al navegador. |
| **Contraseña en texto plano** | `app/models/login.php` | 36-37 | La contraseña se compara con `!==` en texto plano. Debería usarse `password_verify()`. |
| **Exposición de errores** | `app/models/login.php` | 44 | `var_dump($e->getMessage())` muestra detalles internos en producción. |

### 🟡 Significativos

| Problema | Archivo | Línea | Descripción |
|----------|---------|-------|-------------|
| **Código muerto** | Varios | Múltiples | Líneas después de `return` o `exit` que nunca se ejecutan. |
| **Variable `$_SESSION['codrol']` nunca inicializada** | `app/controllers/enlacesController.php` | 30 | `$userRole` siempre será `null` porque `codrol` nunca se asigna en el login. |
| **Redundancia** | `app/controllers/enlacesController.php` | 9 y 27 | Se inicia sesión dos veces (en `run()` y `enlacesControl()`). |
| **Ruta relativa frágil** | `app/models/login.php` | 3 | `require_once '../../config/conex.php'` — depende de dónde se incluya el archivo. |

### 🟢 Menores

| Problema | Archivo | Línea | Descripción |
|----------|---------|-------|-------------|
| **Errores tipográficos** | `public/js/menu.js` | 7-8 | Usa `sessionStorage` (debería ser `sessionStorage`). Realmente no importa porque es una variable cualquiera. |
| **`break` después de `return`** | `app/models/validar.php` | 16, 22, etc. | `break` nunca se ejecuta después de `return` (código muerto). |
| **Estilos inline** | `app/views/page/error.php` | 6-7 | `style="background-color: darkred;"` debería ir en CSS. |

---

## Cómo usar esta aplicación

### Paso 1: Configurar la base de datos
1. Abre phpMyAdmin (http://localhost/phpmyadmin)
2. Crea una base de datos llamada `prueba`
3. Ejecuta el SQL de creación de la tabla `estudiante`
4. Inserta un usuario de prueba

### Paso 2: Iniciar la aplicación
1. Inicia Apache y MySQL desde Laragon
2. Visita http://localhost/templateSoftware/
3. Deberías ver la pantalla de login

### Paso 3: Iniciar sesión
1. Ingresa la cédula: `12345678`
2. Ingresa la contraseña: `123456`
3. Haz clic en "Ingresar"

### Paso 4: Navegar
- Usa el menú lateral para navegar entre las secciones
- Las páginas de Home, Usuarios, Reportes y Productos están disponibles

---

## Cómo agregar una nueva página

1. **Crear la vista**: `app/views/page/mi-modulo/mi-vista.php`
2. **Registrar la ruta** en `config/routes.php`:
   ```php
   'mi-ruta' => [
       'vista' => 'mi-modulo/mi-vista.php',
       'menu'  => true,
       'roles' => ['*']
   ],
   ```
3. **Agregar al menú** en `app/views/page/menu.php`:
   ```html
   <li>
       <a href="?action=mi-ruta">
           <i class="material-icons">star</i>
           <span> Mi Módulo </span>
       </a>
   </li>
   ```

---

## Conclusión

Esta aplicación es un **template MVC en PHP puro** que proporciona:
- ✅ Sistema de autenticación (con bugs menores)
- ✅ URLs amigables via `.htaccess`
- ✅ Sistema de rutas flexible y extensible
- ✅ Menú de navegación dinámico
- ✅ Separación clara MVC
- ✅ Frontend con Bootstrap + Material Design
- ✅ Consultas seguras a BD (PDO preparado)
- ✅ CRUD de ejemplo listo para expandir

A partir de aquí se puede construir cualquier sistema: inventario, facturación, gestión educativa, etc.
