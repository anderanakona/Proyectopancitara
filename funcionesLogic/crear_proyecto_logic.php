<?php 
include_once '../controlador/ProyectoControlador.php';

$result=0;



$justificacion=$_POST["txtjustificacion"];
$descripcion=$_POST["txtdescripcion"];
$tituloproyecto=$_POST["txttitulo"];
$objetivo=$_POST["txtobjetivo"];


if(ProyectoControlador::crearProyecto($tituloproyecto,$objetivo, $justificacion, $descripcion)){
$result=1;
}else{
  $result=0;
}
echo $result;

 ?>