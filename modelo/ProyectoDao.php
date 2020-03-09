<?php /**
 * 
 */
include_once '../persistencia/Conexion.php';

class ProyectoDao
{
	protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }
  

     /**
     * Metodo que sirve para crear personas
     *
     * @param      object         
     * @return     boolean
     id_proyecto	tituloproyecto	justificacion	descripcion	fecha_realizacion	fecha_aprobacion	aprobacion
     */
    public static function crearProyecto($tituloproyecto,$objetivo, $justificacion, $descripcion)
    {
    	

      $query = "INSERT INTO proyecto (tituloproyecto, objetivo, justificacion, descripcion) VALUES ('$tituloproyecto','$objetivo', '$justificacion','$descripcion')";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }

     public function getproyectos(){
     $query="SELECT * FROM proyecto WHERE apr=0";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }
  public static function crearProyectoaceptacion($apr,$presupuesto,$comentarios, $id_usuario, $id_proyecto)
    {
        

      $query = "INSERT INTO proyecto_aprobacion(apr,presupuesto, comentarios, id_usuario, id_proyecto) VALUES ('$apr','$presupuesto','$comentarios', '$id_usuario','$id_proyecto');
  UPDATE proyecto SET apr=1 WHERE proyecto.id_proyecto='$id_proyecto';";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }




    
#util paraq ue les va a servir el 
#diseng tinking para cada uno de los usuarios 
# a llenar los campos de los niños 
 #campesinos para las personas para el ganado

     public function getproyectosAprobados(){
     $query="SELECT * FROM proyecto INNER JOIN proyecto_aprobacion ON(proyecto.id_proyecto=proyecto_aprobacion.id_proyecto)
           WHERE proyecto_aprobacion.apr=1";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }
         public function getproyectosRechazados(){
     $query="SELECT * FROM proyecto INNER JOIN proyecto_aprobacion ON(proyecto.id_proyecto=proyecto_aprobacion.id_proyecto)
           WHERE proyecto_aprobacion.apr=0";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }

}

#satisfacer las necesidades del usuario ux
# crear productos que resuelvan las necesidades de las personas






 ?>