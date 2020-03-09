<?php 

include_once '../persistencia/Conexion.php';

class EventoDao
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





    public static function crearevento($nombre, $descripcion, $id_usuario, $imagen, $fecha_evento){

        //INSERT INTO `usuario_login`(cedula, nombre, apellido, genero, nombre_usuario, contrasena, tipo) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
    
      $query = "INSERT INTO evento (nombre_evento, descripcion, id_usuario, imagen, fecha_evento) VALUES ('$nombre','$descripcion', '$id_usuario','$imagen', '$fecha_evento')";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }

    }




     public function getEvento(){
     $query="SELECT * FROM evento";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }


     public function getEventoid($id_evento){
     $query="SELECT * FROM evento where tipo='$id_evento'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }


    public function getTelefono(){
     $query="SELECT telefono FROM `usuario_login`";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }



      public function getEventoAll($sel){
         $query="SELECT * FROM evento";
        if($sel==1){
           $query="SELECT  * FROM evento INNER JOIN usuario_login ON (evento.id_usuario=usuario_login.id_usuario) where tipo=0 or tipo=1 or tipo=2";
        }else if($sel==2){
            $query="SELECT * FROM evento INNER JOIN usuario_login ON (evento.id_usuario=usuario_login.id_usuario) where tipo=3";
        }else if($sel==3){
             $query="SELECT * FROM evento INNER JOIN usuario_login ON (evento.id_usuario=usuario_login.id_usuario) where tipo=4";
        }else{
             $query="SELECT * FROM evento";
        }

   
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }





}




 ?>