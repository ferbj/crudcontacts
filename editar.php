<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Editar Contacto</title>
        
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
		<h1>Editar Contacto</h1>
		<?php
			include_once('clases/contacto.php');

			$personaId = htmlentities($_GET['personaId']);
			if($_POST){
			/*Obtengo datos del formulario*/
			$nombre=substr($_POST["nombre"],0,100);
            $nombre=filter_var($nombre,FILTER_SANITIZE_SPECIAL_CHARS);

            $apellido=substr($_POST["apellido"],0,100);
            $apellido=filter_var($apellido,FILTER_SANITIZE_SPECIAL_CHARS);

			$telefono=filter_var($_POST["telefono"], FILTER_SANITIZE_NUMBER_INT);
			$direccion=substr($_POST["direccion"],0,150);
            $direccion=filter_var($direccion,FILTER_SANITIZE_SPECIAL_CHARS);
			$email=substr($_POST["email"],0,100);
            $email=filter_var($email,FILTER_SANITIZE_EMAIL);

            $sexo=$_POST["sexo"];

			if(isset($nombre) && isset($apellido) && isset($telefono) && isset($direccion) && isset($email) && isset($sexo))
			//if($nombre=!"" && $apellido=!"" && $telefono=!"" && $direccion=!"" && $email=!"" && $sexo=!"")
			{
				$persona=new Contacto($personaId,$nombre,$apellido,$telefono,$direccion,$email,$sexo);
				echo $persona->editar();
			}
			else
			{
				echo "Campos no completados";
			}
		}

		$persona=new Contacto($personaId);
		$elemento=$persona->getContacto();

		?>

	<form name="contactos" action="" method="post" class="form-horizontal">
        <fieldset>
        <legend>Escriba campos para editar</legend>
            <div class="form-group">
            <label class="col-md-4 control-label" for="nombre">Nombre</label>
                <div class="col-md-5">
                <input type="text" name="nombre" class="form-control input-md" id="nombre" value="<?php echo $elemento->getNombre()?>">
                </div>
            </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="apellido">Apellido</label>
            <div class="col-md-5">
            <input type="text" name="apellido" class="form-control input-md-4" id="apellido" value="<?php echo $elemento->getApellido() ?>">
			</div>
        </div>
        <div class="form-group">
		<label class="col-md-4 control-label" for="direccion">Dirección</label>		
            <div class="col-md-5">
				<input type="text" name="direccion" class="form-control input-md" id="direccion" value="<?php echo $elemento->getDireccion() ?>">
        </div>
        </div>
        <div class="form-group">
			<label class="col-md-4 control-label" for="telefono">Teléfono</label>
			<div class="col-md-5">
            <input type="tel" name="telefono" class="form-control input-md" id="telefono" value="<?php echo $elemento->getTelefono() ?>">
            </div>
        </div>
        <div class="form-group">
			<label class="col-md-4 control-label" for="email">Email</label>
			<div class="col-md-5">
            <input type="email" name="email" class="form-control input-md" id="email" value="<?php echo $elemento->getEmail() ?>">
            </div>
        </div>
		<div class="form-group">
            <label class="col-md-4 control-label" for="sexo">Sexo</label>
            <div class="col-md-5">
            <div class="radio">
            <label>
				<input type="radio" name="sexo" value="M" <?php if($elemento->getSexo()=="M"){echo "checked=checked";}?>>Masculino</label>
        </div>
        <div class="radio">
			<label>
            <input type="radio" name="sexo" value="F"  <?php if($elemento->getSexo()=="F"){echo "checked=checked";}?>>Femenino</label>
		</div>
        </div>
        </div>
		<div class="form-group">
        <label class="col-md-4" control-label for="submit"></label>
            <div class="col-md-5">
            <input type="submit" class="btn btn-success">
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