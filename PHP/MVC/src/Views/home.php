<?php
    ini_set('display_errors', '0');
    require_once __DIR__ . '/../Controlers/controler.php';
    
    if (isset($_GET["logout"])) {
        session_destroy();
        header("Location: index.php?pagina=login");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            text-align: center;
            background-color: cadetblue;
            font-size: 3rem;
        }
        a {
            color: white;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION["usuario"]); ?></h1>
    <h5>
        <?php vista(); ?>
    </h5>
    <br>
    <a href="index.php?pagina=login&logout=1">Cerrar Sesión</a>
</body>

</html>
