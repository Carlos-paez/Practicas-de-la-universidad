<?php
$pagina = "menu";

if(!empty($_GET["pagina"])){
    $pagina = $_GET["pagina"];
}

// Validar que solo contenga caracteres alfanuméricos y guiones
if (!preg_match('/^[a-zA-Z0-9_-]+$/', $pagina)) {
    echo "Error: Página no válida";
    exit;
}

$rutaVista = __DIR__ . '/../Controlers/' . $pagina . '.php';

if(is_file($rutaVista)){
    require_once $rutaVista;
}

else{
    echo "Error 404: Página no encontrada";
}
?>