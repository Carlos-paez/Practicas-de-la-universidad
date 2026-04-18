# Prácticas de la Universidad

Repositorio de prácticas de programación desarrollado por **Carlos Páez** durante la carrera universitaria.

## Estructura del Proyecto

```
├── C#/                    # Prácticas en C# (.NET)
│   ├── En clase/          # Ejercicios realizados en clase
│   │   ├── 1 Primera/
│   │   ├── 2 Practica (bucle do-while y condicionales)/
│   │   ├── 3 Practica/
│   │   ├── 4 comentado array/
│   │   ├── Examen de Pilas/
│   │   ├── Examen de array/
│   │   ├── Examen de colas/
│   │   ├── Practica en clase/
│   │   └── ...
│   │
│   └── Practicas, tareas y Proyectos de estudio/  # Proyectos y tareas
│       ├── Cola/
│       ├── Factura de compra Listas/
│       ├── POO, Array y Forms/
│       ├── practicando POO, Listas y Modulos/
│       └── ...
│
├── PHP/                   # Prácticas en PHP
│   ├── MVC/               # Proyecto MVC en PHP
│   │   ├── src/
│   │   │   ├── Controlers/  # Controladores
│   │   │   ├── Views/       # Vistas
│   │   │   └── Models/      # Modelos
│   │   ├── vendor/         # Dependencias Composer
│   │   ├── composer.json
│   │   └── DOCUMENTACION.md
│   │
│   └── old.zip            # Archivo comprimido legacy
│
├── Base de datos/         # Prácticas de Base de Datos
│   ├── .idea/             # Configuración de JetBrains
│   └── del_examen.sql     # Script de examen
│
└── numeric.zip           # Archivo comprimido adicional
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
- **CRUD**: Gestión de clientes, productos

### Base de Datos

- **SQL**: Consultas, transacciones
- **MySQL**: Configuración y gestión de bases de datos

## Tecnologias Usadas

| Lenguaje | Framework/Tecnología |
|----------|----------------------|
| C#       | .NET Framework, Windows Forms |
| PHP      | MVC básico, Composer |
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

### Base de Datos

Ejecutar los scripts SQL en MySQL:

```bash
mysql -u usuario -p < Base de datos/del_examen.sql
```

## Autor

**Carlos Páez** - Estudiante de programación