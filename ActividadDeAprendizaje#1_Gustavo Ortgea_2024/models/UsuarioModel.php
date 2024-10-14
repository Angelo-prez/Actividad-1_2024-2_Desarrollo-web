<?php
require_once '../config/Database.php';

class UsuarioModel
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->conectar();
    }

    public function obtenerTodos()
    {
        $query = $this->db->prepare('SELECT * FROM usuario');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id)
    {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($datos)
    {
        $query = $this->db->prepare('INSERT INTO usuario (nombre, apellidos, email, password, telefono, estado) VALUES (:nombre, :apellidos, :email, :password, :telefono, :estado)');
        $query->bindParam(':nombre', $datos['nombre']);
        $query->bindParam(':apellidos', $datos['apellidos']);
        $query->bindParam(':email', $datos['email']);
        $query->bindParam(':password', $datos['password']);
        $query->bindParam(':telefono', $datos['telefono']);
        $query->bindParam(':estado', $datos['estado']);
        $query->execute();
    }

    public function actualizar($datos)
    {
        $query = $this->db->prepare('UPDATE usuario SET nombre = :nombre, apellidos = :apellidos, email = :email, password = :password, telefono = :telefono, estado = :estado WHERE id = :id');
        $query->bindParam(':id', $datos['id']);
        $query->bindParam(':nombre', $datos['nombre']);
        $query->bindParam(':apellidos', $datos['apellidos']);
        $query->bindParam(':email', $datos['email']);
        $query->bindParam(':password', $datos['password']);
        $query->bindParam(':telefono', $datos['telefono']);
        $query->bindParam(':estado', $datos['estado']);
        $query->execute();
    }

    public function eliminar($id)
    {
        $query = $this->db->prepare('DELETE FROM usuario WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
    }
}