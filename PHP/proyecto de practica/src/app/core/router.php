<?php

$pagina = "login";

if(!empty($_GET["pagina"])){
    $pagina = $_GET["pagina"];
}

$rutaVista = dirname(__DIR__) .'/controllers/' . $pagina . '.php';

if(is_file($rutaVista)){
    require_once $rutaVista;
}

else{
    echo ("404");
}