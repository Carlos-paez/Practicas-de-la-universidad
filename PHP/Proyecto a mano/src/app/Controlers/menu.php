<?php

$pagina = "menu";

$ruta = __DIR__ . '/../Views/'. $pagina . '.php';

if (is_file($ruta)) {
    require_once $ruta;
}

else {
    echo "Pagina en construccion";
}