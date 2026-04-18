<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            text-align: center;
            background-color: cadetblue;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <form action="index.php?pagina=login" method="post">
        <label for="username">Username</label>
        <input type="text" name="usuario" placeholder="Usuario">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">

        <br>

        <input type="submit" value="Login">
    </form>

</body>

</html>

<?php
if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
    $user = "admin";
    $pass = "admin";
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if ($usuario == $user && $password == $pass) {
        $_SESSION["usuario"] = $usuario;
        header("Location: ?pagina=home");
        exit;
    }
}
?>