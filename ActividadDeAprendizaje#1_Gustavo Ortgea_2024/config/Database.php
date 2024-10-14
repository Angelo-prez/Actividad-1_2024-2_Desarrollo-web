<?php
class Database
{
    private $host;
    private $db_name;
    private $username;
    private $password;

    public function __construct()
    {
        $this->host = 'localhost:3308';
        $this->db_name = 'crud_mvc';
        $this->username = 'root';
        $this->password = '123456789';
    }

    public function conectar()
    {
        try {
            $conexion = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
        }
    }
}