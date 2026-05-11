<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if (strtolower($username) === "admin" && $password === "admin123") {
        $_SESSION["user"] = $username;
        header("Location: ?pagina=stack");
        exit;
    } else {
        header("Location: ?pagina=login&error=1");
        exit;
    }
}

header("Location: ?pagina=login");
exit;
