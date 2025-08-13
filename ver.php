<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contactos</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
            integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
            crossorigin="anonymous">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
            integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
            crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.datatables.net/s/bs-3.3.5/jq-2.1.4,dt-1.10.10,cr-1.3.0,r-2.0.0,rr-1.1.0,sc-1.4.0,se-1.1.0/datatables.min.css"/>
        <script
            type="text/javascript"
            src="https://cdn.datatables.net/s/bs-3.3.5/jq-2.1.4,dt-1.10.10,cr-1.3.0,r-2.0.0,rr-1.1.0,sc-1.4.0,se-1.1.0/datatables.min.js"></script>
        <script src="pagination/app.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <h1>Agenda Contactos</h1>
        <?php
	include_once 'clases/contacto.php';
	if(($_POST)){
			/*Obtengo datos del formulario*/
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$telefono=$_POST["telefono"];
			$direccion=$_POST["direccion"];
			$email=$_POST["email"];
            $sexo=$_POST["sexo"];
			$persona=new Contacto(NULL,$nombre,$apellido,$telefono,$direccion,$email,$sexo);
		}
		else
		{
			$persona=new Contacto(NULL);
		}
echo "<a href='agregar.php' class='btn btn-primary'>Agregar contacto</a>";
echo "<div>";
echo "<br>";
echo "</div>";

if ($resultado = $persona->buscar()) {
    echo "<div class='table-responsive'>";
	echo "<table id='tblDatos' class='table table-striped table-bordered'>";
	echo "<thead>";
    echo "<tr>";
        echo "<th>Apellido</th>";
        echo "<th>Nombre</th>";
        echo "<th>Dirección</th>";
        echo "<th>Teléfono</th>";
        echo "<th>Correo</th>";
        echo "<th>Sexo</th>";
        echo "<th></th>";
        echo "<th></th>";
        echo "</tr>";
    echo "</thead>";

    while ($fila = $resultado->fetch(PDO::FETCH_OBJ)) {
		  echo "<tr>";
	      echo "<td>".$fila->apellido."</td>";
	      echo "<td>".$fila->nombre."</td>";
	      echo "<td>".$fila->direccion."</td>";
	      echo "<td>".$fila->telefono."</td>";
          echo "<td>".$fila->email."</td>";
		  echo "<td>".$fila->sexo."</td>";
		  echo "<td>"."<a href='editar.php?personaId=".$fila->personaId."' class='btn btn-warning'>Editar</a>"."</td>";
		  //echo "<td>"."<a onClick=return preguntar(); href='eliminar.php?personaId=".$fila->personaId."' class='btn btn-danger'>Eliminar</a>"."</td>";
		  echo "<td>"."<a onClick='preguntar();' href='eliminar.php?personaId=".$fila->personaId."' class='btn btn-danger'>Eliminar</a>"."</td>";
		  echo "</tr>";
    }
    echo "</table>";
} 
?>
            <script>
                function preguntar() {
                    let respuesta = confirm("Realmente deseas eliminar este registro?");
                    if (respuesta == true) {
                        alert('El contacto ha sido eliminado');
                    } else {
                        alert('Operacion cancelada');
                    }
                }
            </script>
        </div>
    </body>
</html>