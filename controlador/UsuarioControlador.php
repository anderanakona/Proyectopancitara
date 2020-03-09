<?php 
include_once  '../modelo/UsuarioDao.php';

class UsuarioControlador
{


    public function setUser($user)
    {
        return UsuarioDao::setUser($user);
    }

//buscar por usuario
    
     public function userExist($user, $pass){
    
     return UsuarioDao::userExists($user, $pass);

     }

     public  function crearusuario($cedula, $nombre, $apellido, $genero, $nombre_usuario, $telefono, $contrasena, $tipo){
     	return UsuarioDao::crearusuario($cedula, $nombre, $apellido, $genero, $nombre_usuario,$telefono, $contrasena, $tipo);
     }
  public  function userUsuario($nombre_usuario){

        return UsuarioDao::userUsuario($nombre_usuario);
  }
  
     public function userCedula($cedula){
      return UsuarioDao::userCedula($cedula);
     }


  public  function actualizarusuario($id_usuario, $nombre, $apellido, $genero, $telefono, $contrasena){

 return UsuarioDao::actualizarusuario($id_usuario, $nombre, $apellido, $genero,$telefono, $contrasena);
      }


}



 ?>