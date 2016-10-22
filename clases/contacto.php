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
     
 
 function __construct($personaId=NULL,$nombre=NULL,$apellido=NULL,$telefono=NULL,$direccion=NULL,$email=NULL,$sexo=NULL)
	 {
	 	$nuevaConexion=new Conexion();
	 	$conexion=$nuevaConexion->getConexion();
		 //seteo los atributos
		 $this->personaId = $conexion->real_escape_string($personaId);
		 $this->nombre = $conexion->real_escape_string($nombre);
		 $this->apellido = $conexion->real_escape_string($apellido);
		 $this->telefono = $conexion->real_escape_string($telefono);
		 $this->direccion = $conexion->real_escape_string($direccion);
	     $this->email=$conexion->real_escape_string($email);	 
         $this->sexo = $conexion->real_escape_string($sexo);
	
	
	 }
	 
	public function agregar()
	{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		/*$sentencia="INSERT INTO contactos (personaId,nombre,apellido,direccion,telefono,email,sexo)
		VALUES (NULL,'". $this->nombre."','". $this->apellido."','". $this->telefono."','".$this->direccion."','". $this->email."','". $this->sexo."');";
		*/
		$sentencia="INSERT INTO contactos(personaId,nombre,apellido,direccion,telefono,email,sexo) VALUES (NULL,?,?,?,?,?,?)";
		$stmt= $conexion->prepare($sentencia);
		$stmt->bind_param('issssss',$this->nombre,$this->apellido,$this->direccion,$this->telefono,$this->email,$this->sexo);
		//$stmt->execute();
		//if ($conexion->query($sentencia)) {
		
		if($stmt->execute()){
			header("Location: ver.php");
		}
		else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
	}
				 
		 public function editar()
		{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		//$sentencia="UPDATE contactos SET nombre = ' $this->nombre', apellido = '$this->apellido', telefono = '$this->telefono', direccion = '$this->direccion',email= '$this->email', sexo = '$this->sexo' WHERE personaId = '$this->personaId'";
		$sentencia="UPDATE contactos SET nombre = ?, apellido=?, telefono=?,direccion=?,email=?,sexo=? WHERE personaId=?";
		$stmt->$conexion->prepare($sentencia);
		$stmt->bind_param('ssssssi',$this->nombre,$this->apellido,$this->telefono,$this->direccion,$this->email,$this->sexo,$this->personaId);
		//if ($conexion->query($sentencia)) {
		
		if($stmt->execute()){
			header("Location: ver.php");
		}
		else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
	}

	public function eliminar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		//$sentencia="DELETE FROM contactos WHERE personaId=".$this->personaId;
		$sentencia ="DELETE FROM contactos WHERE personaId=?";
		$stmt->$conexion->prepare($sentencia);
		$stmt->bind_param('i',$this->personaId);
		
		//if ($conexion->query($sentencia)) {
		if($stmt->execute()){
			header("Location: ver.php");
		}
		else		
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
	
}

public function buscar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM contactos";
		if($this->nombre!=NULL ||  $this->apellido!=NULL || $this->telefono!=NULL || $this->direccion!=NULL || $this->email!=NULL ||$this->sexo!=NULL )
		{
			$sentencia.=" WHERE ";
		
		
		if($this->nombre!=NULL)
		{
			$sentencia.=" nombre LIKE '%$this->nombre%' && ";
		}
		
		if($this->apellido!=NULL)
		{
			$sentencia.=" apellido LIKE '%$this->apellido%' && ";
		}
		
				
		if($this->direccion!=NULL)
		{
			$sentencia.=" direccion LIKE '%$this->direccion%' && ";
		}
		
        if($this->telefono!=NULL)
		{
			$sentencia.=" telefono LIKE '%$this->telefono%' && ";
		}
		if($this->email!=NULL)
		{
			$sentencia.=" email LIKE '%$this->email%' && ";
		}
		            
        if($this->sexo!=NULL)
		{
			$sentencia.=" sexo LIKE '%$this->sexo%' && ";
		}
		
		$sentencia=substr($sentencia,0,strlen($sentencia)-4);	
		//echo $sentencia;
		}
		
		$sentencia.="  ORDER BY apellido,nombre";	
	
			
		return $conexion->query($sentencia);
			
}

  public function getContacto()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM contactos WHERE personaId=".$this->personaId;
		$resultado=$conexion->query($sentencia);
		$elemento = mysqli_fetch_object($resultado); 
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
?>
