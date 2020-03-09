<?php 


include_once '../persistencia/Conexion.php';

class PersonaDao
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
     */
    public static function crearPersona($tipodocumento, $cedula, $nombre_persona, $apellido_persona, $fecha_nacimiento, $edad, $genero, $correo, $parentesco, $ocupacion, $id_familia)
    {
    	//INSERT INTO `persona`(`id_persona`, `cedula`, `nombre_persona`, `apellido_persona`, `fecha_nacimiento`, `genero`, `correo`, `id_vereda`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

      $query = "INSERT INTO persona (tipodocumento, cedula, nombre_persona, apellido_persona, fecha_nacimiento, edad, genero, correo, parentesco, ocupacion, id_familia)
       VALUES ('$tipodocumento', '$cedula', '$nombre_persona', '$apellido_persona','$fecha_nacimiento', '$edad', '$genero','$correo', '$parentesco',
      '$ocupacion',  '$id_familia')";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }


      /**
     * Metodo que sirve para actualizar personas
     *
     * @param      object         
     * @return     boolean
     */
    public static function actualizarPersona($tipodocumento, $cedula, $nombre_persona, $apellido_persona, $fecha_nacimiento, $edad, $genero, $correo, $parentesco, $ocupacion, $id_persona)
    {
      //INSERT INTO `persona`(`id_persona`, `cedula`, `nombre_persona`, `apellido_persona`, `fecha_nacimiento`, `genero`, `correo`, `id_vereda`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

      $query = "UPDATE persona SET tipodocumento='$tipodocumento',
           cedula='$cedula',nombre_persona='$nombre_persona',apellido_persona='$apellido_persona',
            fecha_nacimiento='$fecha_nacimiento',edad='$edad',genero='$genero',
                correo='$correo',parentesco='$parentesco',ocupacion='$ocupacion' 
WHERE id_persona='$id_persona'";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }




      public function buscarCedula($cedula){

        $query = "SELECT * FROM persona WHERE cedula = '$cedula'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query); 
        $resultado->execute();

        if ($resultado->rowCount()) {
            return true;
        }else{
            return false;
        }
       
    }



 /**
     * Metodo que sirve para crear personas
     *
     * @param      object         
     * @return     boolean
     */
    public static function crearimagen($imagen)
    {
      

      $query = "INSERT INTO imagen (imagen) VALUES ('$imagen')";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }

  public function getimagen(){
     $query="SELECT * FROM evento";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }

}
 ?>