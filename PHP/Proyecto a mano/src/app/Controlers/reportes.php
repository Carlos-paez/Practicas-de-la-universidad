<?php

    $pagina = "reportes";

if (is_file(__DIR__ . '/../Views/'. $pagina . '.php')) {
    require_once __DIR__ . '/../Views/'. $pagina . '.php';
    }

    else {
        echo "Pagina en construccion";
    }