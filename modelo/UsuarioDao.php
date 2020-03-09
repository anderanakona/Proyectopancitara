<?php 

include_once '../persistencia/Conexion.php';

class UsuarioDao
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
     * Metodo que sirve para obtener o buscar un usuario por su $user
     *
     * @param      object         $usuario
     * @return     object
     */
    public static function setUser($user)
    {
        $query = "SELECT * FROM usuario_login WHERE nombre_usuario = :user";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":user", $user);

        $resultado->execute();

        $filas = $resultado->fetch();
        
        return $filas;
    }



 //para ver si esta en la base de datos si el usuario existe por email
    public static function userExists($user, $pass){
       // $md5pass = md5($pass);
       
        //unir los datos con las variables temporales
        $query = 'SELECT * FROM usuario_login WHERE nombre_usuario = :user AND contrasena = :pass';

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":user", $user);
        $resultado->bindParam(":pass", $pass);

        $resultado->execute();

        //si hay filas regresa true si no false
        if($resultado->rowCount()){
            return true;
        }else{
            return false;
        }
    }




 //para ver si esta en la base de datos si el usuario existe por email
    public static function userCedula($cedula){
       // $md5pass = md5($pass);
       
        //unir los datos con las variables temporales
        $query = 'SELECT * FROM usuario_login WHERE cedula = :cedula';

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":cedula", $cedula);

        $resultado->execute();

        //si hay filas regresa true si no false
        if($resultado->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    //para ver si esta en la base de datos si el usuario existe por email
    public static function userUsuario($nombre_usuario){
       // $md5pass = md5($pass);
       
        //unir los datos con las variables temporales
        $query = 'SELECT * FROM usuario_login WHERE nombre_usuario = :nombre_usuario';

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindParam(":nombre_usuario", $nombre_usuario);

        $resultado->execute();

        //si hay filas regresa true si no false
        if($resultado->rowCount()){
            return true;
        }else{
            return false;
        }
    }




    public static function crearusuario($cedula, $nombre, $apellido, $genero, $nombre_usuario,$telefono, $contrasena, $tipo){

        //INSERT INTO `usuario_login`(cedula, nombre, apellido, genero, nombre_usuario, contrasena, tipo) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
    
      $query = "INSERT INTO usuario_login (cedula, nombre, apellido, genero, nombre_usuario, telefono, contrasena, tipo) VALUES ('$cedula','$nombre', '$apellido','$genero','$nombre_usuario', '$telefono','$contrasena', '$tipo')";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }

    }
//UPDATE usuario_login SET nombre=[value-3], apellido=[value-4], genero=[value-5], contrasena=[value-7]  WHERE 1
 public static function actualizarusuario($id_usuario, $nombre, $apellido, $genero, $telefono, $contrasena){

        //INSERT INTO `usuario_login`(cedula, nombre, apellido, genero, nombre_usuario, contrasena, tipo) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])id_usuario
    
      $query = "UPDATE usuario_login SET nombre='$nombre', apellido='$apellido', genero='$genero', telefono='$telefono', contrasena='$contrasena' WHERE id_usuario='$id_usuario'";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }

    }

     

}
 ?>