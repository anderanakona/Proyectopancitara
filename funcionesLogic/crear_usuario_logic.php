<?php 

include_once '../controlador/UsuarioControlador.php';

$cedula= $_POST['txtcedula'];
$nombre= $_POST['txtnombre'];
$apellido= $_POST['txtapellido'];
$genero= $_POST['txtgenero'];
$tipo= $_POST['txttipo'];
$usuario= $_POST['txtusuario'];
$contrasena= $_POST['txtcontrasena1'];
$telefono=$_POST['txttelefono'];


if($cedula==''||$nombre==''||$apellido==''||$usuario==''||$contrasena==''|| $telefono==''){
	echo -1;
}else{


if(UsuarioControlador::userUsuario($usuario)){
	echo 2;
}else if(UsuarioControlador::userCedula($cedula)){
	echo 3;
}else{
	UsuarioControlador::crearusuario($cedula, $nombre, $apellido, $genero, $usuario, $telefono, $contrasena, $tipo);
	echo 1;
}

	
}




//






 ?>