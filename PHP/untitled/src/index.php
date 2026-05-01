<?php

    $pagina = "main";

    if(!empty($_GET["pagina"])){
        $pagina = $_GET["pagina"];
    }

    $ruta = __DIR__.'/controlers/'.$pagina.'.php';

    if(is_file($ruta)){
        require_once $ruta;
    }

    else{
        echo("Pagina no encontrada");
    }