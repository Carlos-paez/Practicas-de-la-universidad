<?php

$pagina = "stack";

if (is_file(dirname(__DIR__) . '/views/'. $pagina . '.php')) {
    require_once dirname(__DIR__) . '/views/'. $pagina . '.php';
}

else {
    echo "Pagina en construccion";
}
