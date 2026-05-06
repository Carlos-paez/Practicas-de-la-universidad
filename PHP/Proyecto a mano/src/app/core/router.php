<?php
session_start();

$pagina = "login";

if(!empty($_GET["pagina"])){
    $pagina = $_GET["pagina"];
}

// Validar que solo contenga caracteres alfanuméricos y guiones
if (!preg_match('/^[a-zA-Z0-9_-]+$/', $pagina)) {
    $pagina = "login";
}

$public_pages = ['login', 'login_validate'];
if (!isset($_SESSION['logged_in']) && !in_array($pagina, $public_pages)) {
    header("Location: ?pagina=login");
    exit;
}

// Cargar la vista directamente
$rutaVista = __DIR__ . '/../Views/' . $pagina . '.php';

if(is_file($rutaVista)){
    require_once $rutaVista;
} else {
    http_response_code(404);
    echo "<h1>Error 404: Página no encontrada</h1>";
    echo "<p>La página <strong>{$pagina}</strong> no existe.</p>";
    echo "<a href='?pagina=dashboard'>Volver al dashboard</a>";
}
?>