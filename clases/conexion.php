<?php   
class Conexion
{

 private $host="localhost";
 private $user="root";
 private $pass="root";
 private $db="agenda";
 private $conexion;
 
 
 function __construct()
	 {
		$this->conexion = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		$this->conexion->query("SET NAMES utf8");
		/* comprobar la conexión */
			if (mysqli_connect_errno()) {
				echo "Error de conexión".mysqli_connect_errno()." : ". mysqli_connect_error();
				echo "<br>";
			  
		}
	
	 }
	public function getConexion()
	{
		return $this->conexion;
	}
 

}
?>
