<?php

    $pagina = "menu";

    if(!empty($_GET["pagina"])){
        $pagina = $_GET["pagina"];
    }

$rutaVista = __DIR__ . '/controlers/' . $pagina . '.php';

    if(is_file($rutaVista)){
        require_once $rutaVista;
    }

    else{
        echo "Pagina no encontrada";
    }