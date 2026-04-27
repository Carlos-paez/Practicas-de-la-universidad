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
        $error = "404";
        $error404 = __DIR__ . '/controlers/' . $error . '.php';
        require_once $error404;
    }