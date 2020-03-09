<?php 



include_once '../controlador/CosechaControlador.php';


 //var datos='txtgastos'+gastos+'&fecha_gasto='+fecha_gasto+'&descripcion='+descripcion+'&categoria='+categoria+'&id_cosecha='+id_cosecha;

$txtgastos=$_POST['txtgastos'];
$fecha_gasto=$_POST['fecha_gasto'];
$descripcion=$_POST['descripcion'];
$categoria=$_POST['categoria'];
$id_gasto=$_POST['id_gasto'];
$result=0;



if(CosechaControlador::actualizarGasto($txtgastos, $fecha_gasto,$categoria,$descripcion, $id_gasto)){
$result=1;
}else{
$result=0;
}
echo $result;

 ?>