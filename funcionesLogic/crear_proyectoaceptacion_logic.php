<?php 
include_once '../controlador/ProyectoControlador.php';

$result=0;



$apr=$_POST["txtestado"];
$comentarios=$_POST["txtcomentarios"];
$id_usuario=$_POST["txt_idusuario"];
$id_proyecto=$_POST["txtid_proyecto"];
$presupuesto=$_POST['txt_presupuesto'];



if($apr==0){
	$presupuesto=0;
}
# var datos='txtestado='+estado+'&txtcomentarios='+comentarios+'&txtid_proyecto='+id_proyecto+'&txt_idusuario='+<?php echo $id_usuario

if(ProyectoControlador::crearProyectoaceptacion($apr,$presupuesto,$comentarios, $id_usuario, $id_proyecto)){
$result=1;
}else{
  $result=0;
}
echo $result;

 ?>