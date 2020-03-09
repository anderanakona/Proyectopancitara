<?php 
	include "funcion_edad.php";

	$fechaInicio=$_POST['fecha'];
	$fechaFin=date('Y-m-d');
	echo calculaTiempo($fechaInicio,$fechaFin)[0];

 ?>