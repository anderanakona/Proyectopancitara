<?php 
include_once '../controlador/CosechaControlador.php';
$libras_vendidas=$_POST['libras'];
$fecha_venta=$_POST['fecha_venta'];
$descripcion=$_POST['descripcion'];
$tipo_venta=$_POST['tipo_venta'];
$id_venta=$_POST['id_venta'];
$result=0;
 
if(CosechaControlador::actualizarVenta($libras_vendidas, $fecha_venta,$descripcion,$tipo_venta, $id_venta)){
$result=1;
}else{
$result=0;
}
echo $result;





 ?>