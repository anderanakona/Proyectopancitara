<?php 

include_once '../controlador/UsuarioControlador.php';


$nombre= $_POST['txtnombre'];
$apellido= $_POST['txtapellido'];
$genero= $_POST['txtgenero'];
$id_usuario= $_POST['txtid_usuario'];
$contrasena= $_POST['txtcontrasena1'];
$telefono=$_POST['txttelefono'];


if($nombre==''||$apellido==''||$contrasena==''){
	echo -1;
}else{
//actualizarusuario($id_usuario, $nombre, $apellido, $genero, $contrasena)
UsuarioControlador::actualizarusuario($id_usuario,$nombre,$apellido, $genero, $telefono, $contrasena);
   echo 1;
	
}




//






 ?>