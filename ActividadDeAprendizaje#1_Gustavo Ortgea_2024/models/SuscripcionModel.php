<?php
require_once 'config/Database.php';

class SuscripcionModel
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->conectar();
    }

    public function obtenerTodos()
    {
        $query = $this->db->prepare("SELECT * FROM suscripcion");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id)
    {
        $query = $this->db->prepare("SELECT * FROM suscripcion WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($data)
    {
        $query = $this->db->prepare("INSERT INTO suscripcion (tipo, costo, duracion, fecha_inicio, usuario_id) VALUES (:tipo, :costo, :duracion, :fecha_inicio, :usuario_id)");
        $query->bindParam(":tipo", $data["tipo"]);
        $query->bindParam(":costo", $data["costo"]);
        $query->bindParam(":duracion", $data["duracion"]);
        $query->bindParam(":fecha_inicio", $data["fecha_inicio"]);
        $query->bindParam(":usuario_id", $data["usuario_id"]);
        return $query->execute();
    }

    public function editar($data)
    {
        $query = $this->db->prepare("UPDATE suscripcion SET tipo = :tipo, costo = :costo, duracion = :duracion, fecha_inicio = :fecha_inicio, usuario_id = :usuario_id WHERE id = :id");
        $query->bindParam(":id", $data["id"]);
        $query->bindParam(":tipo", $data["tipo"]);
        $query->bindParam(":costo", $data["costo"]);
        $query->bindParam(":duracion", $data["duracion"]);
        $query->bindParam(":fecha_inicio", $data["fecha_inicio"]);
        $query->bindParam(":usuario_id", $data["usuario_id"]);
        return $query->execute();
    }

    public function eliminar($id)
    {
        $query = $this->db->prepare("DELETE FROM suscripcion WHERE id = :id");
        $query->bindParam(":id", $id);
        return $query->execute();
    }
}