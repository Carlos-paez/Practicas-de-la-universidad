# Prácticas de la Universidad

Repositorio de prácticas de programación desarrollado por **Carlos Páez** durante la carrera universitaria. Cubre desde fundamentos básicos hasta proyectos integrados con POO, estructuras de datos, Windows Forms y desarrollo web con PHP.

---

## Estructura del Proyecto

```
├── C#/                                # Prácticas en C# (.NET)
│   ├── En clase/                      # Ejercicios realizados en clase
│   │   ├── 1 Primera/                 # Consola: promedio, IVA, bucles
│   │   ├── 2 Practica/                # Consola: expresiones, condicionales, do-while
│   │   ├── 3 Practica/                # Consola: factura con IVA, while infinito
│   │   ├── 4 comentado array/         # Consola: tipos por referencia (Person)
│   │   ├── Codigo dado por la profesora pilaformulario/  # WinForms: Pila con List
│   │   ├── Ejercicio swich y try-cash/                   # Consola: descuentos, switch, try-catch
│   │   ├── Examen de array Carlos Páez/                  # WinForms: arrays (números, letras)
│   │   ├── Examen de colas/                              # WinForms: cola de estacionamiento
│   │   ├── Examen de Pilas/                              # WinForms: editor con deshacer, navegador
│   │   ├── examen de windows forms/                      # WinForms: login con captcha, operaciones
│   │   ├── Factura en el examen de POO/                  # Consola: sistema de facturación completo
│   │   └── Practica en clase/                            # WinForms: formulario vacío
│   │
│   └── Practicas, tareas y Proyectos de estudio/         # Proyectos personales y tareas
│       ├── codigo de la profesora modificado pilaformulario/  # Pila mejorada con validación
│       ├── Cola/                                          # Cola simple (enqueue/dequeue)
│       ├── estudio de examen y exposición/                # Consola: componentes de motherboard
│       ├── factura con objetos e importacion de estructuras/ # Factura con clases y objetos
│       ├── Factura de compra Listas/                      # Factura multiproducto con List<>
│       ├── login + encuesta incompleta/                   # WinForms: login + encuesta
│       ├── POO, Array y Forms/                            # WinForms: registro de usuarios
│       ├── practica de cola/                              # WinForms: cola con objetos user
│       ├── practica de forms trabajado en clase/          # WinForms: aplicación multiformulario
│       ├── practica de windows forms Basico/              # WinForms: concatenar nombres
│       ├── practicando POO, Listas y Modulos/             # Consola: sistema de préstamo bibliotecario
│       ├── practicando sin que me funen/                  # WinForms: registro con pila y captcha
│       └── retomando lo basico y practicando/             # WinForms: clase Usuario con enum Rol
│
├── PHP/                                # Prácticas en PHP
│   ├── MVC/                            # Aplicación MVC básica
│   │   ├── src/
│   │   │   ├── index.php               # Enrutador principal
│   │   │   ├── Controlers/             # Controladores (home, login, clientes, etc.)
│   │   │   ├── Views/                  # Vistas (dashboard, login, CRUD, etc.)
│   │   │   ├── Models/                 # Modelos (classEstudiantes)
│   │   │   └── public/css/styles.css   # Estilos
│   │   ├── vendor/                     # Dependencias Composer
│   │   └── DOCUMENTACION.md
│   │
│   └── proyecto de practica/           # Proyecto completo PHP + JS
│       ├── src/
│       │   ├── index.php               # Punto de entrada
│       │   ├── app/
│       │   │   ├── core/router.php     # Enrutador
│       │   │   ├── controllers/        # Controladores (login, stack)
│       │   │   └── views/              # Vistas (login, stack)
│       │   └── public/
│       │       ├── styles/             # Hojas de estilo
│       │       └── scripts/            # JavaScript (Materialize)
│       ├── vendor/                     # Dependencias Composer
│       ├── node_modules/               # Dependencias npm/bun
│       └── package.json                # Materialize CSS, AOS
│
├── Base de datos/                      # Prácticas de Base de Datos
│   └── del_examen.sql                  # Script SQL: estudiantes, materia, sección
│
└── README.md                           # Este archivo
```

---

## Contenidos

### C# (.NET)

| Categoría | Conceptos |
|-----------|-----------|
| **Fundamentos** | Variables, tipos de dato (`float`, `double`, `int`, `char`), operadores, entrada/salida por consola |
| **Control de Flujo** | `if/else`, `switch`, bucles `for`, `while`, `do-while` |
| **POO** | Clases, objetos, encapsulamiento, propiedades, constructores, `ToString()`, enums |
| **Windows Forms** | Formularios, controles (Button, TextBox, Label, ListBox, DataGridView), eventos, múltiples formularios |
| **Estructuras de Datos** | Arrays, `List<T>`, Pilas (Stack), Colas (Queue), `Dictionary<TKey, TValue>` |
| **Excepciones** | `try-catch`, `FormatException`, `ArgumentException` |
| **Proyectos Destacados** | Sistema de facturación con IVA y descuentos, simulador de navegador web (pila), cola de estacionamiento, editor de texto con deshacer, registro de usuarios con captcha |

### PHP

| Categoría | Conceptos |
|-----------|-----------|
| **Arquitectura MVC** | Separación en Modelos, Vistas y Controladores, enrutamiento por parámetro `?pagina=` |
| **Autenticación** | Sesiones PHP, login de usuarios, validación de credenciales |
| **Frontend** | HTML5, CSS3 (responsive, gradientes, variables), Materialize CSS, AOS animations |
| **Dependencias** | Composer (PSR-4 autoload), npm/bun (Materialize CSS, AOS, jQuery) |
| **POO en PHP** | Namespaces, clases con getters/setters, autoloading PSR-4 |

### Base de Datos

| Categoría | Conceptos |
|-----------|-----------|
| **SQL** | Creación de tablas, relaciones (foreign keys), inserción de datos, consultas JOIN |
| **MySQL** | phpMyAdmin, configuración y gestión |

---

## Tecnologías Usadas

| Lenguaje | Tecnologías |
|----------|-------------|
| C#       | .NET Framework 4.0–4.8, .NET 9.0, Windows Forms, Console Apps |
| PHP      | PHP 7+, MVC, Composer, PSR-4 |
| JavaScript | Bun, jQuery, Materialize CSS, AOS |
| SQL      | MySQL 8.4 |

---

## Cómo Usar

### C#

Los proyectos en C# son soluciones de Visual Studio (`.sln`). Para ejecutarlos:

1. Abrir el archivo `.sln` en Visual Studio 2022 o JetBrains Rider
2. Restaurar paquetes NuGet si es necesario
3. Compilar y ejecutar (F5)

> **Nota**: Algunos proyectos usan .NET 9.0 (Windows Forms). Asegúrate de tener el SDK correcto instalado.

### PHP

#### Proyecto MVC

```bash
cd PHP/MVC
composer install
# Servir con XAMPP, WAMP, o PHP built-in server:
php -S localhost:8000 -t src/
# Credenciales: admin / admin
```

#### Proyecto de práctica

```bash
cd "PHP/proyecto de practica"
composer install
bun install        # Opcional: para dependencias frontend
# Servir con XAMPP, WAMP, o PHP built-in server:
php -S localhost:8000 -t src/
# Credenciales: admin / admin123
```

### Base de Datos

Ejecutar los scripts SQL en MySQL:

```bash
mysql -u root -p < "Base de datos/del_examen.sql"
```

O importar desde phpMyAdmin.

---

## Propósito Educativo

Este repositorio documenta el aprendizaje progresivo de programación:

1. **Fundamentos**: Algoritmos básicos, tipos de datos, estructuras de control
2. **POO**: Clases, objetos, encapsulamiento, herencia
3. **Interfaces Gráficas**: Windows Forms, eventos, múltiples formularios
4. **Estructuras de Datos**: Pilas, colas, listas, arrays multidimensionales
5. **Desarrollo Web**: MVC, sesiones, CRUD, integración frontend/backend
6. **Bases de Datos**: Modelado relacional, consultas SQL, JOINs

---

## Autor

**Carlos Páez** — Estudiante de programación  
GitHub: [@Carlos-paez](https://github.com/Carlos-paez)
