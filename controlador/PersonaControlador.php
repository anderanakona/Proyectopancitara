<?php 
include_once  '../modelo/PersonaDao.php';
/**
 * 
 */
class PersonaControlador 
{
  public function crearPersona($tipodocumento, $cedula, $nombre_persona, $apellido_persona, $fecha_nacimiento, $edad, $genero, $correo, $parentesco,$ocupacion, $id_familia)
  {
  return PersonaDao::crearPersona($tipodocumento, $cedula, $nombre_persona, $apellido_persona, $fecha_nacimiento, $edad, $genero, $correo, $parentesco, $ocupacion, $id_familia);

  }

    public function buscarCedula($cedula){

    	return PersonaDao::buscarCedula($cedula);
    }

    public  function crearimagen($imagen){
    	return PersonaDao::crearimagen($imagen);
    }
	 public function getimagen(){
    return PersonaDao::getimagen();
   }


   public  function actualizarPersona($tipodocumento, $cedula, $nombre_persona, $apellido_persona, $fecha_nacimiento, $edad, $genero, $correo, $parentesco, $ocupacion, $id_persona){
    return PersonaDao::actualizarPersona($tipodocumento, $cedula, $nombre_persona, $apellido_persona, $fecha_nacimiento, $edad, $genero, $correo, $parentesco, $ocupacion, $id_persona);
   }
}


