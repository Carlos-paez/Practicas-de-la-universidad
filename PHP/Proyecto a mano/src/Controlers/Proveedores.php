<?php

    $pagina = "proveedores";

if (is_file('Views/'. $pagina . '.php')) {
    require_once 'Views/'. $pagina . '.php';
    }

    else {
        echo "Pagina en construccion";
    }