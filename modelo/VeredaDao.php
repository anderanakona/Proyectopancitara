
<?php

include_once '../persistencia/Conexion.php';


class VeredaDao
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
     public  function getVereda(){
    $query = "SELECT * from vereda";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
   }

     public  function getVeredaId($id_vereda){
    $query = "SELECT * from vereda where id_vereda='$id_vereda'";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;
   }



}