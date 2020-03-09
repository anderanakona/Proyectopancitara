<?php 
include_once '../controlador/CosechaControlador.php';




$id_venta=$_POST['id_venta'];

if(CosechaControlador::eliminarVenta($id_venta)){
echo 1;
}else{
	echo 0;
}





 ?>