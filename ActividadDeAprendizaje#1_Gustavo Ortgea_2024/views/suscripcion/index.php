<?php
require_once 'config/Database.php';
require_once 'controllers/SuscripcionController.php';

$suscripcionController = new SuscripcionController();

if (isset($_GET['controlador']) && isset($_GET['accion'])) {
    $controlador = $_GET['controlador'];
    $accion = $_GET['accion'];

    switch ($controlador) {
        case 'suscripcion':
            switch ($accion) {
                case 'index':
                    $suscripcionController->index();
                    break;
                case 'crear':
                    $suscripcionController->crear();
                    break;
                case 'guardar':
                    $suscripcionController->guardar();
                    break;
                case 'editar':
                    $suscripcionController->editar($_GET['id']);
                    break;
                case 'actualizar':
                    $suscripcionController->actualizar();
                    break;
                case 'eliminar':
                    $suscripcionController->eliminar($_GET['id']);
                    break;
                default:
                    echo "Acción no encontrada";
            }
            break;
        default:
            echo "Controlador no encontrado";
    }
} else {
    header("Location: index.php?controlador=suscripcion&accion=index");
}