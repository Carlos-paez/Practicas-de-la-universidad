-- ============================================
-- EIS System - Base de Datos: zwl
-- ============================================

-- 1. Crear y seleccionar la base de datos
CREATE DATABASE IF NOT EXISTS zwl
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE zwl;

-- ============================================
-- 2. Creación de tablas
-- ============================================

-- Tabla: usuarios
CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol ENUM('admin', 'vendedor', 'cajero') DEFAULT 'vendedor',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado BOOLEAN DEFAULT TRUE
) ENGINE=InnoDB;

-- Tabla: categorias
CREATE TABLE categorias (
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL UNIQUE,
    descripcion TEXT,
    estado BOOLEAN DEFAULT TRUE
) ENGINE=InnoDB;

-- Tabla: proveedores
CREATE TABLE proveedores (
    id_proveedor INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    contacto VARCHAR(100),
    telefono VARCHAR(20),
    email VARCHAR(100),
    direccion TEXT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado BOOLEAN DEFAULT TRUE
) ENGINE=InnoDB;

-- Tabla: productos (inventario)
CREATE TABLE productos (
    id_producto INT PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(50) NOT NULL UNIQUE,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    id_categoria INT NOT NULL,
    id_proveedor INT,
    precio_compra DECIMAL(10,2) NOT NULL DEFAULT 0,
    precio_venta DECIMAL(10,2) NOT NULL DEFAULT 0,
    stock INT DEFAULT 0,
    stock_minimo INT DEFAULT 5,
    fecha_vencimiento DATE,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria),
    FOREIGN KEY (id_proveedor) REFERENCES proveedores(id_proveedor)
) ENGINE=InnoDB;

-- Tabla: clientes
CREATE TABLE clientes (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    documento VARCHAR(20) UNIQUE,
    telefono VARCHAR(20),
    email VARCHAR(100),
    direccion TEXT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado BOOLEAN DEFAULT TRUE
) ENGINE=InnoDB;

-- Tabla: ventas
CREATE TABLE ventas (
    id_venta INT PRIMARY KEY AUTO_INCREMENT,
    numero_venta VARCHAR(20) NOT NULL UNIQUE,
    id_cliente INT,
    id_usuario INT NOT NULL,
    fecha_venta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    subtotal DECIMAL(10,2) NOT NULL DEFAULT 0,
    impuesto DECIMAL(10,2) DEFAULT 0,
    descuento DECIMAL(10,2) DEFAULT 0,
    total DECIMAL(10,2) NOT NULL DEFAULT 0,
    metodo_pago ENUM('efectivo', 'tarjeta', 'transferencia', 'mixto') DEFAULT 'efectivo',
    estado ENUM('pendiente', 'completada', 'anulada') DEFAULT 'completada',
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
) ENGINE=InnoDB;

-- Tabla: detalle_ventas
CREATE TABLE detalle_ventas (
    id_detalle INT PRIMARY KEY AUTO_INCREMENT,
    id_venta INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL DEFAULT 1,
    precio_unitario DECIMAL(10,2) NOT NULL,
    subtotal DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_venta) REFERENCES ventas(id_venta) ON DELETE CASCADE,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
) ENGINE=InnoDB;

-- Tabla: estaciones_cyber
CREATE TABLE estaciones_cyber (
    id_estacion INT PRIMARY KEY AUTO_INCREMENT,
    numero INT NOT NULL UNIQUE,
    nombre VARCHAR(50),
    estado ENUM('disponible', 'ocupada', 'mantenimiento') DEFAULT 'disponible',
    tarifa_hora DECIMAL(10,2) DEFAULT 0,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Tabla: sesiones_cyber
CREATE TABLE sesiones_cyber (
    id_sesion INT PRIMARY KEY AUTO_INCREMENT,
    id_estacion INT NOT NULL,
    id_cliente INT,
    id_usuario INT NOT NULL,
    hora_inicio DATETIME NOT NULL,
    hora_fin DATETIME,
    minutos_uso INT DEFAULT 0,
    monto_cobrado DECIMAL(10,2) DEFAULT 0,
    estado ENUM('activa', 'finalizada', 'anulada') DEFAULT 'activa',
    FOREIGN KEY (id_estacion) REFERENCES estaciones_cyber(id_estacion),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
) ENGINE=InnoDB;

-- Tabla: activos
CREATE TABLE activos (
    id_activo INT PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(50) NOT NULL UNIQUE,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    tipo VARCHAR(50),
    valor_compra DECIMAL(10,2) DEFAULT 0,
    fecha_adquisicion DATE,
    estado ENUM('activo', 'en_mantenimiento', 'dado_baja') DEFAULT 'activo',
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Tabla: movimientos_inventario
CREATE TABLE movimientos_inventario (
    id_movimiento INT PRIMARY KEY AUTO_INCREMENT,
    id_producto INT NOT NULL,
    tipo ENUM('entrada', 'salida', 'ajuste') NOT NULL,
    cantidad INT NOT NULL,
    motivo VARCHAR(100),
    id_usuario INT NOT NULL,
    fecha_movimiento TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
) ENGINE=InnoDB;

-- ============================================
-- 3. Índices para optimización
-- ============================================
CREATE INDEX idx_productos_codigo ON productos(codigo);
CREATE INDEX idx_productos_nombre ON productos(nombre);
CREATE INDEX idx_ventas_fecha ON ventas(fecha_venta);
CREATE INDEX idx_ventas_numero ON ventas(numero_venta);
CREATE INDEX idx_detalle_ventas_venta ON detalle_ventas(id_venta);
CREATE INDEX idx_sesiones_estacion ON sesiones_cyber(id_estacion);
CREATE INDEX idx_sesiones_fecha ON sesiones_cyber(hora_inicio);
CREATE INDEX idx_movimientos_producto ON movimientos_inventario(id_producto);
CREATE INDEX idx_movimientos_fecha ON movimientos_inventario(fecha_movimiento);

-- ============================================
-- 4. Datos iniciales (opcional)
-- ============================================

-- Insertar categorías básicas
INSERT INTO categorias (nombre, descripcion) VALUES
('General', 'Categoría general'),
('Bebidas', 'Bebidas y refrescos'),
('Snacks', 'Snacks y comida rápida'),
('Tecnología', 'Productos tecnológicos'),
('Servicios', 'Servicios ofrecidos');

-- Insertar estaciones de cyber por defecto
INSERT INTO estaciones_cyber (numero, nombre, tarifa_hora) VALUES
(1, 'PC-01', 2.50),
(2, 'PC-02', 2.50),
(3, 'PC-03', 2.50),
(4, 'PC-04', 2.50),
(5, 'PC-05', 2.50);

-- NOTA: El usuario administrador se debe insertar desde PHP con password_hash()
-- Ejemplo: INSERT INTO usuarios (nombre, email, password, rol) 
-- VALUES ('Administrador', 'admin@eis.com', '$2y$10$hash...', 'admin');