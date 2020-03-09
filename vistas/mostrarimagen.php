<?php 
include "../controlador/PersonaControlador.php";
$filas = PersonaControlador::getimagen();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php foreach ($filas as $f): ?>
	 <img src="data:image/jpeg;base64, <?php echo base64_encode($f["imagen"]) ?>" width="200"  height="200">

<?php endforeach ?>


</body>
</html>

