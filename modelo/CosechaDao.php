
<?php

include_once '../persistencia/Conexion.php';


class CosechaDao
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
    public static function crearCosecha($nombre_cosecha, $id_usuario)
    {
    	

      $query = "INSERT INTO cosecha (nombre_cosecha, id_usuario)
       VALUES ('$nombre_cosecha', '$id_usuario')";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }
 
  public function getcosecha($id_usuario){
     $query="SELECT * FROM cosecha where cosecha.id_usuario='$id_usuario'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }


  /**
     * Metodo que sirve para crear ventas
     *
     * @param      object         
     * @return     boolean
     */
    public static function crearVenta($libras_vendidas, $fecha_venta,$descripcion,$tipo_venta, $id_cosecha)
    {
      

      $query = "INSERT INTO venta(libras_vendidas, fecha_venta, descripcion, tipo_venta, id_cosecha)
       VALUES ('$libras_vendidas', '$fecha_venta','$descripcion','$tipo_venta', '$id_cosecha')";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }


      /**
     * Metodo que sirve para crear ventas
     *
     * @param      object         
     * @return     boolean
     */
    public static function crearGasto($gasto, $fecha_gasto,$categoria,$descripcion, $id_cosecha)
    {
      

      $query = "INSERT INTO gasto(gasto, fecha_gasto, categoria, descripcion, id_cosecha)
       VALUES ('$gasto', '$fecha_gasto','$categoria','$descripcion', '$id_cosecha')";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }


//UPDATE `gasto` SET `id_gasto`=[value-1],`gasto`=[value-2],`fecha_gasto`=[value-3],`categoria`=[value-4],`descripcion`=[value-5],`id_cosecha`=[value-6] WHERE 1

   
    public  function actualizarGasto($gasto, $fecha_gasto,$categoria,$descripcion, $id_gasto)
    {
      

      $query = "UPDATE `gasto` SET `gasto`='$gasto',`fecha_gasto`='$fecha_gasto',`categoria`='$categoria',`descripcion`='$descripcion' WHERE id_gasto='$id_gasto'";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }
    



      public function getVenta($id_cosecha, $tipo_venta){
     $query="SELECT SUM(venta.libras_vendidas*precio.valor_colombiano) FROM venta INNER JOIN cosecha ON(venta.id_cosecha=cosecha.id_cosecha) INNER JOIN precio ON(cosecha.id_valor=precio.id_valor) WHERE venta.id_cosecha='$id_cosecha' AND venta.tipo_venta='importacion'";
        self::getConexion();




        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }
  public function getVentaeuro($id_cosecha, $tipo_venta){
     $query="SELECT SUM(venta.libras_vendidas*precio.valor_europeo) FROM venta INNER JOIN cosecha ON(venta.id_cosecha=cosecha.id_cosecha) INNER JOIN precio ON(cosecha.id_valor=precio.id_valor) WHERE venta.id_cosecha='$id_cosecha' AND venta.tipo_venta='$tipo_venta'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }

    //SELECT * FROM gasto WHERE id_cosecha=8

    public function getGasto($id_cosecha){
     $query="SELECT SUM(gasto.gasto) FROM gasto INNER JOIN cosecha ON(gasto.id_cosecha=cosecha.id_cosecha) WHERE gasto.id_cosecha='$id_cosecha'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }

#SELECT * FROM gasto INNER JOIN cosecha ON (gasto.id_cosecha=cosecha.id_cosecha) WHERE cosecha.id_cosecha=8



     //SELECT * FROM gasto WHERE id_cosecha=8

    public function listamovGasto($id_cosecha){
     $query="SELECT * FROM gasto INNER JOIN cosecha ON (gasto.id_cosecha=cosecha.id_cosecha)  WHERE gasto.id_cosecha='$id_cosecha'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }


     public function listamovventas($id_cosecha){
     $query="SELECT * FROM venta INNER JOIN cosecha ON (venta.id_cosecha=cosecha.id_cosecha)  WHERE venta.id_cosecha='$id_cosecha'";
        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->execute();

        $filas = $resultado->fetchAll();

        return $filas;

    }


    //DELETE FROM `gasto` WHERE 0



   


      public  function eliminarGasto($id_gasto)
    {
      

      $query = "DELETE FROM gasto WHERE gasto.id_gasto='$id_gasto'";
      
        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
     
    }

    public function actualizarVenta($libras_vendidas, $fecha_venta,$descripcion,$tipo_venta,$id_venta){

      $query="UPDATE venta SET libras_vendidas='$libras_vendidas',
      fecha_venta='$fecha_venta', descripcion='$descripcion', tipo_venta='$tipo_venta' WHERE id_venta='$id_venta'";


         self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
    }


    


    public function eliminarVenta($id_venta){

      $query="DELETE FROM venta WHERE id_venta='$id_venta'";


         self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        
        if ($resultado->execute()) {

            return true;

        }else{
            return false;
        }
    }


}