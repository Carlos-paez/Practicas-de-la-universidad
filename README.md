# Prácticas de la Universidad

Repositorio de prácticas de programación desarrollado por **Carlos Páez** durante la carrera universitaria.

## Estructura del Proyecto

```
├── C#/                                  # Prácticas en C# (.NET)
│   └── Practicas, tareas y Proyectos de estudio/
│       ├── retomando lo basico y practicando/
│       │   └── practicando/             # Proyecto Windows Forms
│       ├── practicando sin que me funen/  # Proyecto con Pilas, Login
│       └── practica de forms trabajado en clase/
│
├── PHP/                                 # Prácticas en PHP
│   ├── MVC/                             # Proyecto MVC básico
│   │   ├── src/
│   │   │   ├── Controlers/
│   │   │   ├── Views/
│   │   │   └── Models/
│   │   ├── vendor/
│   │   └── DOCUMENTACION.md
│   │
│   └── Proyecto a mano/                 # Proyecto completo
│       ├── src/
│       │   ├── Controlers/              # Controladores
│       │   │   ├── dashboard.php
│       │   │   ├── inventario.php
│       │   │   ├── ventas.php
│       │   │   ├── activos.php
│       │   │   ├── proveedores.php
│       │   │   ├── reportes.php
│       │   │   ├── menu.php
│       │   │   └── ciberControl.php
│       │   ├── Views/                 # Vistas
│       │   │   ├── dashboard.php
│       │   │   ├── inventario.php
│       │   │   ├── ventas.php
│       │   │   ├── activos.php
│       │   │   ├── proveedores.php
│       │   │   ├── reportes.php
│       │   │   ├── menu.php
│       │   │   ├── ciberControl.php
│       │   │   └── styles/
│       │   └── Models/
│       │       └── database.php
│       ├── vendor/
│       ├── composer.json
│       └── DOCUMENTACION.md
│
└── Base de datos/                       # Prácticas de Base de Datos
    └── del_examen.sql                 # Script SQL de examen
```

## Contenidos

### C#

- **Programación Orientada a Objetos (POO)**: Clases, objetos, herencia, encapsulamiento
- **Windows Forms**: Aplicaciones de escritorio con interfaz gráfica
- **Estructuras de Datos**: Pilas, Colas, Listas, Arrays
- **Control de Flujo**: Condicionales, bucles (do-while, for, foreach)
- **Manejo de Excepciones**: Try-catch

### PHP

- **Arquitectura MVC**: Modelo-Vista-Controlador
- **Gestión de Dependencias**: Composer
- **Sesiones y Autenticación**: Login de usuarios
- **CRUD**: Gestión de clientes, productos, inventario, ventas, activos
- **Base de Datos**: Conexión MySQL

### Base de Datos

- **SQL**: Consultas, transacciones
- **MySQL**: Configuración y gestión de bases de datos

## Tecnologías Usadas

| Lenguaje | Framework/Tecnología |
|----------|----------------------|
| C#       | .NET Framework, Windows Forms |
| PHP      | MVC básico, Composer, MySQL |
| SQL      | MySQL |

## Cómo Usar

### C#

Los proyectos en C# son soluciones de Visual Studio (.sln). Para ejecutarlos:

1. Abrir el archivo `.sln` en Visual Studio o Rider
2. Compilar y ejecutar (F5)

### PHP

El proyecto MVC requiere un servidor PHP con Composer:

```bash
cd PHP/MVC
composer install
# Configurar un servidor.local (XAMPP, WAMP, etc.)
```

Para el proyecto "Proyecto a mano":

```bash
cd PHP/Proyecto a mano
composer install
# Configurar la base de datos MySQL en Models/database.php
```

### Base de Datos

Ejecutar los scripts SQL en MySQL:

```bash
mysql -u usuario -p < Base de datos/del_examen.sql
```

## Autor

**Carlos Páez** - Estudiante de programación