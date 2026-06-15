<?php
    require_once 'D:\DEV\Practicas-de-la-universidad\PHP\proyecto de practica\src\config\database.php';

    function obtener($db){
        $consulta = $db -> query("select * from usuarios where id = 1");
        return $consulta->fetchALL();
    }


    echo(obtener($db));
?>