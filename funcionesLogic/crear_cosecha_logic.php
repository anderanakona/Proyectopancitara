<?php 


include_once '../controlador/CosechaControlador.php';

$result=0;



$nombre_cosecha=$_POST["txtnombre"];
$id_usuario=$_POST["txtidusuario"];


if(CosechaControlador::crearCosecha($nombre_cosecha, $id_usuario)){
$result=1;
}else{
  $result=0;
}
echo $result;



 ?>