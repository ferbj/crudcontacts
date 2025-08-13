<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar Contacto</title>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" href="validacion/bootstrapValidator.min.css">
<script src="validacion/bootstrapValidator.min.js"></script>
<script src="validacion/validar.js"></script>
<meta name="viewport" content="widht=device-width,initial-scale=1">
	</head>
	<body>
        <div class="container">
		<h1>Agregar Contacto</h1>
		<?php
		include_once('clases/contacto.php');

		if($_POST){

			$nombre=substr($_POST["nombre"],0,100);
            $nombre=filter_var($nombre,FILTER_SANITIZE_STRING);
            $apellido=substr($_POST["apellido"],0,100);
            $apellido=filter_var($apellido,FILTER_SANITIZE_STRING);
			$direccion=substr($_POST["direccion"],0,150);
            $direccion=filter_var($direccion,FILTER_SANITIZE_STRING);
            $telefono=substr($_POST["telefono"],0,15);
            $telefono=filter_var($_POST["telefono"],FILTER_SANITIZE_SPECIAL_CHARS);
			$email=substr($_POST["email"],0,100);
            $email=filter_var($email,FILTER_SANITIZE_EMAIL);
            $sexo=filter_var($_POST["sexo"],FILTER_SANITIZE_STRING);
			if(isset($nombre) && isset($apellido) && isset($telefono) && isset($direccion) && isset($email) && isset($sexo))
			{
				$persona=new Contacto(NULL,$nombre,$apellido,$direccion,$telefono,$email,$sexo);
				echo $persona->agregar();
			}
			else
			{
				echo "Campos no completados";
			}

		}

		?>

		<form name="contactos" action="" method="post" class="form-horizontal" id="contactos">
		<fieldset>
            <legend>Agrege los valores para el contacto</legend>
            <div class="form-group">
            <label class="col-md-4 control-label" for="nombre">Nombre</label> 
			  <div class="col-md-5">
                <input type="text" name="nombre" class="form-control input-md" id="nombre" pattern="^[a-z,A-Z,_,ñ,Ñ]{5,50}">
            </div>
			</div>
            <div class="form-group">
				<label class="col-md-4 control-label" for="apellido">Apellido</label>
				<div class="col-md-5">
                    <input type="text" name="apellido" class="form-control input-md" id="apellido">
			     </div>
            </div>
			
			<div class="form-group">
            <label class="col-md-4 control-label" for="direccion">Dirección</label>    
				<div class="col-md-5">
                <input type="text" name="direccion" class="form-control input-md" id="direccion" pattern="^[a-z,A-Z,_,ñ,Ñ]{5,50}">
			     </div>
			</div>
            <div class="form-group">
				<label class="col-md-4 control-label" for="telefono" >Teléfono</label>
                <div class="col-md-5">
				<input type="tel" name="telefono" class="form-control input-md" id="telefono">
			 </div>
			</div>
            
            <div class="form-group">
			<label class="col-md-4 control-label" for="email">Email</label>
			<div class="col-md-5">
            <input type="email" name="email" class="form-control input-md" id="email">
            </div>
            </div>
            
            <div class="form-group">
            <label class="col-md-4 control-label" for="sexo">Sexo</label>
				<div class="col-md-5">
                    <div class="radio">
				<label>
                    <input type="radio" name="sexo" value="M" id="sexo">Masculino
                </label> 
                    </div>
                    <div class="radio">
                    <label>
                        <input type="radio" name="sexo" value="F" id="sexo">Femenino
                    </label>
                    </div>
                </div>
            </div>
			<div class="form-group">
		  		<label class="col-md-4" control-label for="btn-send"></label>
                <div class="col-md-5">
		          <input type="submit" id="btn-send" value="Enviar" class="btn btn-success">
                </div>
                </div>
                </fieldset>
		</form>
        </br>
		<label class="col-md-2" control-label for="a"></label>
            <div class="col-md-5">
		<a href='ver.php' class="btn btn-primary">Volver</a>
		</div>
        </div>
	</body>
</html>
