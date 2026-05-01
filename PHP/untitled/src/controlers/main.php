<?php

    $pagina = "main";

    if (is_file('views/'.$pagina.'.php')){
        require_once 'views/'.$pagina.'.php';
    }

    else{
        echo"nop";
    }