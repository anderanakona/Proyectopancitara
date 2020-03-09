<?php 



include_once '../controlador/CosechaControlador.php';


 //var datos='txtgastos'+gastos+'&fecha_gasto='+fecha_gasto+'&descripcion='+descripcion+'&categoria='+categoria+'&id_cosecha='+id_cosecha;

$libras_vendidas=$_POST['libras'];
$fecha_venta=$_POST['fecha_venta'];
$descripcion=$_POST['descripcion'];
$tipo_venta=$_POST['tipo_venta'];
$id_cosecha=$_POST['id_cosecha'];
$result=0;
 
if(CosechaControlador::crearVenta($libras_vendidas, $fecha_venta,$descripcion,$tipo_venta, $id_cosecha)){
$result=1;
}else{
$result=0;
}
echo $result;

 ?>