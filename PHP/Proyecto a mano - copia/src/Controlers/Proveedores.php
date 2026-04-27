<?php

    $pagina = "proveedores";

    if (is_file('views/'. $pagina . '.php')) {
        require_once 'views/'. $pagina . '.php';
    }

    else {
        echo "Pagina en construccion";
    }