<?php
include_once('clases/contacto.php');

$personaId = $_GET['personaId'];
$persona=new Contacto($personaId);
echo $persona->eliminar();


