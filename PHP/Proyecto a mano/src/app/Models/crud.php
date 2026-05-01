<?php

require_once __DIR__.'/../../Config/database.php';

// CREATE: Insertar un nuevo registro
function crearUsuario($pdo, $nombre, $email) {
    $sql = "INSERT INTO usuarios (nombre, email) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$nombre, $email]);
}

// READ: Obtener todos los registros
function obtenerUsuarios($pdo) {
    $stmt = $pdo->query("SELECT * FROM usuarios");
    return $stmt->fetchAll();
}

// READ: Obtener un solo registro por ID
function obtenerUsuarioPorId($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

// UPDATE: Actualizar datos de un registro
function actualizarUsuario($pdo, $id, $nombre, $email) {
    $sql = "UPDATE usuarios SET nombre = ?, email = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$nombre, $email, $id]);
}

// DELETE: Eliminar un registro
function eliminarUsuario($pdo, $id) {
    $sql = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}
?>