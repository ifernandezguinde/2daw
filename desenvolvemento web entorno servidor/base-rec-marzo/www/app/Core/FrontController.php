<?php

namespace Com\Daw2\Core;

use Com\Daw2\Controllers\ErroresController;
use Com\Daw2\Controllers\InicioController;
use Com\Daw2\Controllers\ProveedoresController;
use Com\Daw2\Controllers\TrabajadoresController;
use Com\Daw2\Controllers\UsuarioSistemaController;
use Steampixel\Route;
use Throwable;

class FrontController
{
    public static function main(): void
    {
        try {
            Route::add(
                '/',
                function () {
                    $controlador = new InicioController();
                    $controlador->index();
                },
                'get'
            );

            Route::add(
                '/demo-proveedores',
                function () {
                    $controlador = new InicioController();
                    $controlador->demo();
                },
                'get'
            );

            Route::pathNotFound(
                function () {
                    $controller = new ErroresController();
                    $controller->error404();
                }
            );

            Route::methodNotAllowed(
                function () {
                    $controller = new ErroresController();
                    $controller->error405();
                }
            );

            Route::run($_ENV['host.folder']);
        } catch (\Throwable $e) {
            $controller = new ErroresController();
            $controller->showThrowable($e);
        }
    }
}
