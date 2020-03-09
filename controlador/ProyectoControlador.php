<?php 


include_once "../modelo/ProyectoDao.php";

/**
 * 
 */
class ProyectoControlador
{
	
	 public static function crearProyecto($tituloproyecto,$objetivo, $justificacion, $descripcion)
    {
    	return ProyectoDao::crearProyecto($tituloproyecto,$objetivo, $justificacion, $descripcion);
    }
      public  function getproyectos(){
      	return ProyectoDao::getproyectos();
      }

       public  function crearProyectoaceptacion($apr,$presupuesto,$comentarios, $id_usuario, $id_proyecto){
       	return ProyectoDao::crearProyectoaceptacion($apr,$presupuesto,$comentarios, $id_usuario, $id_proyecto);
       }

       public function getproyectosAprobados(){
        return ProyectoDao::getproyectosAprobados();
       }

    public function  getproyectosRechazados(){
        return ProyectoDao::getproyectosRechazados();
       }

  
}

 ?>

