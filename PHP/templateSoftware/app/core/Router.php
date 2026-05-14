<?php

class Router {
    private $routes; // Inicializamos la variable route de manera vacia
    private $viewPath = 'app/views/page/'; // Base URL para las paginas

    public function __construct() {
        // rutas Del Sistema
        $this->routes = require 'config/routes.php'; // Llamamos el array de vistas que están en este archivo
    }
    
    // $action -> usuario, reporte
    public function resolve($action, $userRole = null) {
        // Acceso a rutas
        if (!isset($this->routes[$action])) { // Validamos si la ruta existe
            return [
                'file' => $this->viewPath . 'error.php',
                'menu' => false,
                'status' => 404
            ];
        }

        $route = $this->routes[$action]; // Si la ruta existe asignamos ese valor a la variable $route

        // Acceso por rol
        $hasAccess = in_array('*', $route['roles']) || ($userRole && in_array($userRole, $route['roles']));

        if (!$hasAccess) { // Vemos si tiene permisos
            return [
                'file' => $this->viewPath . 'denied.php',
                'menu' => true,
                'status' => 403
            ];
        }

        // Ruta Valida
        return [
            'file' => $this->viewPath . $route['vista'],
            'menu' => $route['menu'],
            'status' => 200
        ];
    }
}