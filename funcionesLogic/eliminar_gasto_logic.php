<?php 


include_once '../controlador/CosechaControlador.php';




$id_gasto=$_POST['id_gasto'];

if(CosechaControlador::eliminarGasto($id_gasto)){
echo 1;
}else{
	echo 0;
}




 ?>