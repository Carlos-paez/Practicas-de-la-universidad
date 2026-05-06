<?php
// Sesión ya iniciada por router.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    $valid_username = "admin";
    $valid_password = "1234";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header("Location: ?pagina=dashboard");
        exit;
    } else {
        header("Location: ?pagina=login&error=1");
        exit;
    }
}

header("Location: ?pagina=login");
exit;

