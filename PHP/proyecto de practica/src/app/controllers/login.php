<?php

session_start();

if (isset($_GET["error"])) {
    $error = "Usuario o contraseña incorrectos";
}

$pagina = "Login";

if (is_file(dirname(__DIR__) . '/views/'. $pagina . '.php')) {
    require_once dirname(__DIR__) . '/views/'. $pagina . '.php';
}

else {
    echo "Pagina en construccion";
}
