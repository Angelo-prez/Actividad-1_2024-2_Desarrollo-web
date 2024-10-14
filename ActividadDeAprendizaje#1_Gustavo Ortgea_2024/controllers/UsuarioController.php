<?php
require_once '../models/UsuarioModel.php';

class UsuarioController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new UsuarioModel();
    }

    public function index()
    {
        $usuarios = $this->modelo->obtenerTodos();
        require_once '../views/usuarios.php';
    }

    public function crear()
    {
        require_once '../views/formulario.php';
    }

    public function almacenar($datos)
    {
        $this->modelo->crear($datos);
        header('Location: index.php?controlador=usuario&accion=index');
    }

    public function editar($id)
    {
        $usuario = $this->modelo->obtenerPorId($id);
        require_once '../views/formulario.php';
    }

    public function actualizar($datos)
    {
        $this->modelo->actualizar($datos);
        header('Location: index.php?controlador=usuario&accion=index');
    }

    public function eliminar($id)
    {
        $this->modelo->eliminar($id);
        header('Location: index.php?controlador=usuario&accion=index');
    }
}
?>