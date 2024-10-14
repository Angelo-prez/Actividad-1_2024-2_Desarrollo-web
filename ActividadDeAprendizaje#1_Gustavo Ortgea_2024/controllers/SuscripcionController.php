<?php
require_once 'models/SuscripcionModel.php';

class SuscripcionController
{
    private $model;

    public function __construct()
    {
        $this->model = new SuscripcionModel();
    }

    public function index()
    {
        $suscripciones = $this->model->obtenerTodos();
        require_once 'views/suscripcion/listar.php';
    }

    public function crear()
    {
        require_once 'views/suscripcion/crear.php';
    }

    public function guardar()
    {
        $data = $_POST;
        if ($this->model->crear($data)) {
            header("Location: index.php?controlador=suscripcion&accion=index");
        } else {
            echo "Error al crear suscripción";
        }
    }

    public function editar($id)
    {
        $suscripcion = $this->model->obtenerPorId($id);
        require_once 'views/suscripcion/editar.php';
    }

    public function actualizar()
    {
        $data = $_POST;
        if ($this->model->editar($data)) {
            header("Location: index.php?controlador=suscripcion&accion=index");
        } else {
            echo "Error al actualizar suscripción";
        }
    }

    public function eliminar($id)
    {
        if ($this->model->eliminar($id)) {
            header("Location: index.php?controlador=suscripcion&accion=index");
        } else {
            echo "Error al eliminar suscripción";
        }
    }
}