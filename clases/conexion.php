<?php
class Conexion
{
    private $host = "127.0.0.1";
    private $user = "root";
    private $pass = "root";
    private $db   = "agenda";
    private $charset = "utf8";
    private $conexion;

    public function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";

        try {
            $this->conexion = new PDO($dsn, $this->user, $this->pass, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lanza excepciones en errores
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,      // Retorna arrays asociativos
                PDO::ATTR_PERSISTENT         => false,                 // Sin conexión persistente
            ]);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit; // detener ejecución si hay error
        }
    }

    public function getConexion()
    {
        return $this->conexion;
    }
}
?>
