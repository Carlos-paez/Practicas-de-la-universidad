<?php

    require_once 'app/core/BaseController.php'; // Importando funciones que me seran utiles para mas tarde
    require_once 'app/core/Router.php'; // LA logica de cómo voy a jugar con las vistas o que vistas voy a requerir

    class EnlacesController extends BaseController {

        public function run() {
            session_start();
            $action = isset($_GET["action"]) ? $_GET["action"] : "index";

            # Cerrar sesion
            if ($action === "salir") {
                session_destroy();
                $this->redirect("index.php?action=index");
            }

            # Valida si existe una session activa, caso contrario redirige al login
            if ($action !== "index" && !isset($_SESSION["session"])) {
                $this->redirect("index.php?action=index");
            }

            require_once "app/template/template.php";
        }

        public function enlacesControl() { // Esta es la función que me va a permitir llamar a la vista
            $this->startSession(); // Inicio la session
            
            $action = isset($_GET["action"]) ? $_GET["action"] : "index";
            $userRole = isset($_SESSION["codrol"]) ? $_SESSION["codrol"] : null;

            $router = new Router();
            $result = $router->resolve($action, $userRole);

            # indica si que requiere menú
            if ($result['menu']) {
                include 'app/views/page/menu.php';
            }

            // Incluimos la vista
            include $result['file'];
        }
    }
?>