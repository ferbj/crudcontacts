<?php
class Conexion
{
    private $host;
    private $user;
    private $pass;
    private $db;
    private $charset = "utf8";
    private $conexion;

    public function __construct()
    {
        $this->host = getenv('DB_HOST') ?: "db";
        $this->user = getenv('DB_USER') ?: "root";
        $this->pass = getenv('DB_PASS') ?: "root";
        $this->db   = getenv('DB_NAME') ?: "agenda";

        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";

        try {
            $this->conexion = new PDO($dsn, $this->user, $this->pass, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_PERSISTENT         => false,
            ]);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit;
        }
    }

    public function getConexion()
    {
        return $this->conexion;
    }
}
?>
