<?php 

include "../controlador/PersonaControlador.php";



$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

PersonaControlador::crearimagen($imagen);

 ?>





  
