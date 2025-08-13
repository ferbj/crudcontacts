<?php

include_once('conexion.php');

class Contacto
{

	private $personaId;
	private $nombre;
	private $apellido;
	private $direccion;
	private $telefono;
	private $email; 
	private $sexo;
	private $conexion;

	function __construct($personaId=null,$nombre=null,$apellido=null,$telefono=null,$direccion=null,$email=null,$sexo=null)
	{
		$nuevaConexion=new Conexion();
		$this->conexion=$nuevaConexion->getConexion();
		 //seteo los atributos
		$this->personaId = $personaId;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->telefono = $telefono;
		$this->direccion = $direccion;
		$this->email= $email;	 
		$this->sexo = $sexo;


	}

	public function agregar()
	{
		$sentencia="INSERT INTO contactos(nombre,apellido,direccion,telefono,email,sexo) VALUES (:nombre,:apellido,:direccion,:telefono,:email,:sexo)";
		$stmt= $this->conexion->prepare($sentencia);
		$ok = $stmt->execute([
			':nombre'=>$this->nombre,
			':apellido'=>$this->apellido,
			':direccion'=>$this->direccion,
			':telefono'=>$this->telefono,
			':email'=>$this->email,
			':sexo'=>$this->sexo
		]);
		
		if($ok){
			header("Location: ver.php");
		}
		else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$stmt->errorInfo();
		}
		
	}

	public function editar()
	{

		$sentencia="UPDATE contactos SET nombre = :nombre, apellido = :apellido, telefono = :telefono,direccion = :direccion , email = :email, sexo = :sexo WHERE personaId = :personaId";
		$stmt = $this->conexion->prepare($sentencia);
		$ok = $stmt->execute([
			':nombre'=>$this->nombre,
			':apellido'=>$this->apellido,
			':telefono'=>$this->telefono,
			':direccion'=>$this->direccion,
			':email'=>$this->email,
			':sexo'=>$this->sexo,
			':personaId'=>$this->personaId
		]);

		if($ok){
			header("Location: ver.php");
		}
		else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$stmt->errorInfo();
		}

	}

	public function eliminar()
	{
		$sentencia ="DELETE FROM contactos WHERE personaId= :personaId";
		$stmt=$this->conexion->prepare($sentencia);
		$ok = $stmt->execute([
			':personaId'=>$this->personaId
		]);

		if($ok){
			header("Location: ver.php");
		}
		else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$stmt->errorInfo();
		}
		

	}

	  public function buscar()
    {
        $sql = "SELECT * FROM contactos";
        $params = [];
        $condiciones = [];

        if ($this->nombre) {
            $condiciones[] = "nombre LIKE :nombre";
            $params[':nombre'] = "%{$this->nombre}%";
        }
        if ($this->apellido) {
            $condiciones[] = "apellido LIKE :apellido";
            $params[':apellido'] = "%{$this->apellido}%";
        }
        if ($this->direccion) {
            $condiciones[] = "direccion LIKE :direccion";
            $params[':direccion'] = "%{$this->direccion}%";
        }
        if ($this->telefono) {
            $condiciones[] = "telefono LIKE :telefono";
            $params[':telefono'] = "%{$this->telefono}%";
        }
        if ($this->email) {
            $condiciones[] = "email LIKE :email";
            $params[':email'] = "%{$this->email}%";
        }
        if ($this->sexo) {
            $condiciones[] = "sexo LIKE :sexo";
            $params[':sexo'] = "%{$this->sexo}%";
        }

        if (!empty($condiciones)) {
            $sql .= " WHERE " . implode(" AND ", $condiciones);
        }

        $sql .= " ORDER BY apellido, nombre";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute($params);
        return $stmt; // Devuelve PDOStatement listo para fetch(PDO::FETCH_OBJ)
    }

	public function getContacto()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM contactos WHERE personaId=".$this->personaId;
		$resultado=$conexion->query($sentencia);
		$elemento = $resultado->fetch(PDO::FETCH_OBJ);
		$this->nombre=$elemento->nombre;
		$this->apellido=$elemento->apellido;
		$this->telefono=$elemento->telefono;
		$this->direccion=$elemento->direccion;
		$this->email=$elemento->email;
		$this->sexo=$elemento->sexo;
		return $this;

	}

	public function getNombre()
	{
		return $this->nombre;
	}
	
	public function getApellido()
	{
		return $this->apellido;
	}
	
	public function getTelefono()
	{
		return $this->telefono;
	}
	
	public function getDireccion()
	{
		return $this->direccion;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function getSexo()
	{
		return $this->sexo;
	}

}

