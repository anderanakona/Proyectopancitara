<?php 



include_once '../controlador/CosechaControlador.php';


 //var datos='txtgastos'+gastos+'&fecha_gasto='+fecha_gasto+'&descripcion='+descripcion+'&categoria='+categoria+'&id_cosecha='+id_cosecha;

$txtgastos=$_POST['txtgastos'];
$fecha_gasto=$_POST['fecha_gasto'];
$descripcion=$_POST['descripcion'];
$categoria=$_POST['categoria'];
$id_cosecha=$_POST['id_cosecha'];
$result=0;



if(CosechaControlador::crearGasto($txtgastos, $fecha_gasto,$categoria,$descripcion, $id_cosecha)){
$result=1;
}else{
$result=0;
}
echo $result;

 ?>