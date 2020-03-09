<?php 
include_once '../controlador/EventoControlador.php';

$result=0;



$nombre=$_POST["nombre"];
$descripcion=$_POST["comment"];
$txtid_usuario=$_POST["txtid_usuario"];
$fecha=$_POST["fecha"];
$imagen='';

if(empty($_FILES['imagen']['tmp_name'])){
	$imagen='';
}else{
	$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
}

if(EventoControlador::crearevento($nombre, $descripcion, $txtid_usuario, $imagen, $fecha)){
$result=1;



//else
}else{
  $result=0;
}
echo $result;

 ?>